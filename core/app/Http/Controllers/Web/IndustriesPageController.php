<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndustriesPageController extends Controller
{
    public function index(){
    	return view('web.industries.index');
    }
    public function industries(){
    	return view('v2.industries.index');
    }
    
}