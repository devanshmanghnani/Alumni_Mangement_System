<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Blog;
use App\Models\Event;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog=Blog::orderBy('id', 'desc')
            ->take(3)
            ->get();
        return view('index')->with('blogs',$blog);
    }
    // public function event()
    // {
    //     $event=Event::orderBy('id', 'desc')
    //         ->take(3)
    //         ->get();
    //     return view('index')->with('events',$event);
    // }
    public function review()
    {
        $rev=Review::orderBy('id', 'desc')
            ->take(3)
            ->get();
        return view('about')->with('reviews',$rev);
    }

}
