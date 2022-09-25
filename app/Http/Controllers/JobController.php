<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Type;
use App\Models\City;
use App\Models\Experience;

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
}
