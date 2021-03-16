<?php

namespace App\Http\Controllers\web;

use App\Models\Cat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Exam;

class HomeController extends Controller
{
    public function index(){


        $data['exams'] = Exam::orderBy('id' , 'desc')->limit(8)->get();

        return view('web.home.index')->with($data);
    }
}
