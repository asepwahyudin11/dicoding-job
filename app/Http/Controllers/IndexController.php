<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

public function test(Request $request)
    {
        echo "Hello World<br>";
        echo $request->someName;die;
    }

}