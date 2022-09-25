<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Type;
use App\Models\City;
use App\Models\Experience;
use App\Models\Job;
use App\Models\JobSkillRequirement;

class JobController extends Controller
{
    public function list() 
    {
        $data['skills'] = Skill::orderBy('id')->limit(5)->get();
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
}
