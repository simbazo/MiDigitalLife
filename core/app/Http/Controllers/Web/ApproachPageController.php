<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApproachPageController extends Controller
{
    public function index(){
    	return view('web.approach.index');
    }

    public function approach(){
    	return view('v2.approach.index');
    }
    
}