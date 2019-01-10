<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to laravel';
        return view('pages.index')->with('title' , $title);
    }

    public function about(){
        $title = 'Welcome to laravel';
        return view('pages.about')->with('title' , $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web design', 'Programming','SEO']
        );
        return view('pages.services')->with($data);
    }
}
