<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Candidate;
use App\Http\Requests\SubmissionJob;

class StoreController extends Controller
{

    public function candidate(SubmissionJob $request)
    {
        echo "Hello World";die;
        // $id = $request->job_id;

        // $data['job'] = Job::find($id);
        // $validated = $request->validated();

        // if (empty($data['job'])) {
        //     return redirect('/job/list')->with('error', 'Pekerjaan tidak dapat ditemukan, kesalahan pada data!');
        // } else if($data['job']->closed_at < date('Y-m-d')) {
        //     return redirect('/job/list')->with('error', 'Pekerjaan ini sudah tidak menerima lamaran!');
        // } else {
            
        //     // Save to Database
        //     $data = new Candidate();
        //     $data->job_id = $id;
        //     $data->name = $request->name;
        //     $data->email = $request->email;
        //     $data->phone_number = $request->phone_number;
        //     $data->cover_letter = $request->cover_letter;
        //     $data->link_cv = $request->link_cv;
        //     $data->link_portofolio = $request->link_portofolio;
        //     $data->link_another = $request->link_another;
        //     $data->skills = $request->skills;
        //     $data->uploaded_at = date('Y-m-d');

        //     if ($data->save()) {
        //         return redirect('/job/list')->with('success', 'Lamaran Anda sebagai '. $data['job']->title .' terkirim ke '. $data['job']->company_name .'!');
        //     } else {
        //         return redirect('/job/'.$id.'/form')->with('error', 'Terjadi kesalahan dalam proses pengiriman lamaran!');
        //     }

        // }
    }

}