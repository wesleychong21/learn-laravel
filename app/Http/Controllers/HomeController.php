<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function store($category = null, $item= null){
        if(isset($category))
        {
            if(isset($item))
                return "you are viewing the store for {$category} for {$item}";
            else
            return "you are viewing the store for  {$category}";
        }
            
        else
            return 'you are viewing the store for all categories ' ;
    }
}
