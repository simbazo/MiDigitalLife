<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppsPageController extends Controller
{
    public function index(){
    	return view('web.apps.index');
    }   
}