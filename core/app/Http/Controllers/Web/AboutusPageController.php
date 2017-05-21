<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutusPageController extends Controller
{
    public function index(){
    	return view('web.aboutus.index');
    }
    
    /**
     * [MiDigitalLife team ]
     * @return [type] [text | image]
     */
    public function team(){

    }
    /**
     * [contact description]
     * @return [type] [description]
     */
    public function contact(){

    }
    /**
     * [terms description]
     * @return [type] [description]
     */
    public function terms(){

    }
    /**
     * [privacy description]
     * @return [type] [description]
     */
    public function privacy(){

    }
}
