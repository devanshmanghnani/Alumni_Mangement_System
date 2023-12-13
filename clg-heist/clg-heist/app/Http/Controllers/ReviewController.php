<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('alumni.review');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $rev=new Review;
        $rev->name=$req->name;
       $rev->description=$req->description;
       
       if($req->hasfile('image'))
       {
            $file=$req->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/review_image/', $filename);
            $rev->image =$filename;
       }

       $result=$rev->save();
       if($result) {
        return back()->with('success','Review Added');}
        else{
        return back()->with('fail','Review not Added');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      
    }
    public function reviewshow(Review $rev)
    {
        $rev=Review::all();
        return view('admin.review.all_review',['reviews'=>$rev]); 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $rev, $id)
    {
        $rev=Review::find($id);
        $rev->delete();
        return redirect('show_review');
    }
}
