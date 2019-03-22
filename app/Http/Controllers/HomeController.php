<?php

namespace App\Http\Controllers;
use App\Category;
use App\News;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories=Category::all();
        $countCat=count($categories);

        $news=News::all();
        $countNews=count($news);
        return view('home',compact('countCat' , 'countNews'));
    }

   
}
