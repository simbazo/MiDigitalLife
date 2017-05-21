<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectPageController extends Controller
{
    public function index(){
    	return view('web.projects.index');
    }

    public function appenberg(){
    	return view('web.projects.appenberg');
    }
    public function elearning(){
    	return view('web.projects.elearning');
    }
    public function redCap(){
    	return view('web.projects.redcap');
    }
    public function surgery(){
    	return view('web.projects.surgery');
    }
    public function healthy(){
    	return view('web.projects.healthy');
    }
    public function wellness(){
    	return view('web.projects.wellness');
    }
}
