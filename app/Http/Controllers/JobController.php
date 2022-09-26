<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Type;
use App\Models\City;
use App\Models\Experience;
use App\Models\Job;
use App\Models\Candidate;
use App\Models\JobSkillRequirement;
use App\Mail\SenderEmail;
use App\Mail\RecruiterEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function list() 
    {
        $data['skills'] = Skill::all();
        $data['types'] = Type::all();
        $data['cities'] = City::all();
        $data['experiences'] = Experience::all();

        return view('job.list', $data);
    }

    public function load(Request $request) 
    {
        $filter = $request->filter;
        if (empty($filter)) {
            $data['jobs'] = Array();
        } else {
            $query = new Job();

            // Check Filter Type
            if (!empty($filter['type'])) {
                $query = $query->whereIn('type_id', $filter['type']);
            }

            // Check Filter City 
            if (!empty($filter['city'])) {
                $query = $query->whereIn('city_id', $filter['city']);
            }

            // Check Filter Experience 
            if (!empty($filter['experience'])) {
                $query = $query->whereIn('experience_id', $filter['experience']);
            }

            // Check Filter Experience 
            if (!empty($filter['skill'])) {
                $jobId = JobSkillRequirement::whereIn('skill_id', $filter['skill'])->get(['job_id'])->pluck('job_id');
                if (!empty($jobId)) {
                    $query = $query->whereIn('id', $jobId);
                }
            }

            // Check Filter Search By Key 
            if (!empty($filter['search'])) {
                $query = $query->where('title', 'like', '%' . $filter['search'] . '%');
            }   

            $data['jobs'] = $query->get();
        }

        return view('partials.job_item', $data);
    }

    public function description($id) 
    {
        $data['job'] = Job::find($id);

        if (empty($data['job'])) {
            return redirect('/job/list')->with('error', 'Pekerjaan tidak dapat ditemukan, kesalahan pada data!');
        } else {
            return view('job.description', $data);
        }
    }

    public function form($id) 
    {
        $data['job'] = Job::find($id);

        if (empty($data['job'])) {
            return redirect('/job/list')->with('error', 'Pekerjaan tidak dapat ditemukan, kesalahan pada data!');
        } else if($data['job']->closed_at < date('Y-m-d')) {
            return redirect('/job/list')->with('error', 'Pekerjaan ini sudah tidak menerima lamaran!');
        } else {
            return view('job.form', $data);
        }
    }

    public function apply($id, Request $request) 
    {
        $job = Job::find($id);

        if (empty($job)) {
            return redirect('/job/list')->with('error', 'Pekerjaan tidak dapat ditemukan, kesalahan pada data!');
        } else if($job->closed_at < date('Y-m-d')) {
            return redirect('/job/list')->with('error', 'Pekerjaan ini sudah tidak menerima lamaran!');
        } else {

            // Validation Required
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'email' => 'required|max:125',
                'phone_number' => 'required|max:25',
                'cover_letter' => 'required',
                'link_cv' => 'required|max:225',
                'link_portofolio' => 'max:225',
                'link_another' => 'max:225',
                'skills' => 'required|max:225',
            ]);
            if ($validator->fails()) {
                return redirect('job/'.$id.'/form')
                            ->withInput()
                            ->with('error', 'Terjadi kesalahan dalam proses pengiriman lamaran!');
            }

            // Validation Maximum Apply
            $countApply = Candidate::where('email', $request->email)->count();
            if ($countApply >= 3) {
                return redirect('/job/list')->with('error', 'Anda tidak bisa mengirimkan lamaran dikarenakan sudah mencapai batas maksimum yaitu 3x!');
            }
            
            // Save to Database
            $data = new Candidate();
            $data->job_id = $id;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone_number = $request->phone_number;
            $data->cover_letter = $request->cover_letter;
            $data->link_cv = $request->link_cv;
            $data->link_portofolio = $request->link_portofolio;
            $data->link_another = $request->link_another;
            $data->skills = $request->skills;
            $data->uploaded_at = date('Y-m-d');

            $dataMail1 = Array(
                "name" => $request->name,
                "email" => $request->email,
                "title" => $job->title,
                "company" => $job->company_name,
            );

            $dataMail2 = Array(
                "name" => $job->created_by,
                "email" => $job->created_email,
                "title" => $job->title,
                "company" => $job->company_name,
            );

            if ($data->save()) {
                Mail::to($dataMail1['email'])->send(new SenderEmail($dataMail1)); // Send Email To JobSeeker
                Mail::to($dataMail2['email'])->send(new RecruiterEmail($dataMail2)); // Send Email To Recruiter

                return redirect('/job/list')->with('success', 'Lamaran Anda sebagai '. $job->title .' terkirim ke '. $job->company_name .'!');
            } else {
                return redirect('/job/'.$id.'/form')->with('error', 'Terjadi kesalahan dalam proses pengiriman lamaran!');
            }

        }
    }
}
