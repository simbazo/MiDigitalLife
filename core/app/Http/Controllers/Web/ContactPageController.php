<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactPageController extends Controller
{
   public function index(){
    	return view('web.contact.index');
    }

    public function contact(){
    	return view('v2.contact.index');
    }
}