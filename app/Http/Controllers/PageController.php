<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function quienessomos(){
        return view('quienessomos');
    }
    public function contact(){
        return view('contact');
    }
    public function products(){
        return view('productos');
    }

}
