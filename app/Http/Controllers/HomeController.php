<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Career;
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
    public function Index()
    {
        $blog = Blog::orderBy('id', 'desc')->take(3)->get();
        return view('front.layout.main',compact('blog'));
    }
    public function pageBlog()
    {
        $blog = Blog::paginate(5);
        return view('front.pages.blog.index',compact('blog'));
    }
    public function pageCareer()
    {
        $career = Career::all();
        return view('front.pages.career.index',compact('career'));
    }
}
