<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel';
        return view('indexLaravel',compact('title'));
    }

    public function vURS(){
        $title = 'Welcome to vURS';
        return view('pages.welcome',compact('title'));
    }

    public function about(){
        $title = 'about';
        return view('pages.about',compact('title'));
    }

    public function formSubmit(){
        $title = 'formSubmited';
        return view('pages.formSubmit',compact('title'));
    }

    public function RegReq(){
        $title = 'Register Request';
        return view('pages.registerReq',compact('title'));
    }
}