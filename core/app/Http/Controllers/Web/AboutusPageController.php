<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutusPageController extends Controller
{
    public function index(){
    	return view('web.aboutus.index');
    }
    
}
