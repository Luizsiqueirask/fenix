<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function Index(){
        return view('web.home.index');
    }

    public function About(){
        return view('web.about.index');
    }

    public function Service(){
        return view('web.services.index');
    }

    public function Department(){
        return view('web.departments.index');
    }

    public function Doctor(){
        return view('web.doctor.index');
    }

    public function Appoinment(){
        return view('web.appoinment.index');
    }

    public function Blog(){
        return view('web.exams.index');
    }

    public function Contact(){
        return view('web.contact.index');
    }
}
