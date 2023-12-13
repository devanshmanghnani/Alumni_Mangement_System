<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $blog=new Blog;
        $blog->date=$req->date;
        $blog->title=$req->title;
        $blog->written_by=$req->written_by;
        $blog->description=$req->description;

        if($req->hasfile('image'))
        {
                $file=$req->file('image');
                $extension= $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('uploads/blogs_image/', $filename);
                $blog->image =$filename;
        }
        $result=$blog->save();
        if($result) {
        return back()->with('success','Blog Created Successfully');}
        else{
        return back()->with('fail','Blog not created');}
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $blog=Blog::orderBy('id','desc')->paginate(6);
        return view('blog',['blogs'=>$blog]); 
    }

    // admin blog
    public function blogshow(Blog $blog )
    {
        $blog=Blog::all();
        return view('admin.blog.all_blog',['blogs'=>$blog]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog,$id)
    {
        $blog=Blog::find($id);
        return view('admin.blog.update_blog',['blogs'=>$blog]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Blog $blog, $id)
    {
        $blog=Blog::find($id);
        $blog->title=$req->get('title');
        $blog->date=$req->get('date');
        $blog->written_by=$req->get('written_by');
        $blog->description=$req->get('description');
        if($req->hasfile('image'))
        {
                $file=$req->file('image');
                $extension= $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('uploads/blogs_image/', $filename);
                $blog->image =$filename;
        }
        $result=$blog->save();
        if($result)
        {
            return redirect('show_blog');
            return back()->with('success','Blog Updated Successfully');
        }
            else{
            return back()->with('fail','Blog not Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog, $id)
    {
        $blog=Blog::find($id);
        $blog->delete();
        return redirect('show_blog');
    }
}
