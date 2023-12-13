<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
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
     
        $ev=new Event;
        $ev->name=$req->name;
        $ev->location=$req->location;
        $ev->date=$req->date;
        $ev->organised_by=$req->organised_by;
        $ev->description=$req->description;
        $ev->time=$req->time;

        if($req->hasfile('image'))
        {
                $file=$req->file('image');
                $extension= $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('uploads/events_image/', $filename);
                $ev->image =$filename;
        }
        $result=$ev->save();
        if($result) {
        return back()->with('success','Event Created Successfully');}
        else{
        return back()->with('fail','Event not created');}
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $ev )
    {
        // $ev=Event::all();
        $ev=Event::orderBy('id','desc')->paginate(6);
        return view('event',['events'=>$ev]); 
    }
    public function eventshow(Event $ev )
    {
        $ev=Event::all();
        return view('admin.event.all_event',['events'=>$ev]); 
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $ev,$id)
    {
        $ev=Event::find($id);
        return view('admin.event.update_event',['events'=>$ev]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req,Event $ev,$id)
    {
        $ev=Event::find($id);
        $ev->name=$req->get('name');
        $ev->location=$req->get('location');
        $ev->date=$req->get('date');
        $ev->organised_by=$req->get('organised_by');
        $ev->description=$req->get('description');
        $ev->time=$req->get('time');

        if($req->hasfile('image'))
        {
                $file=$req->file('image');
                $extension= $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                // $path=$request->file('image')->storeAs('uploads/events_image/', $filename);
                $file->move('uploads/events_image/', $filename);
                $ev->image =$filename;
        }

      
        
        $result=$ev->save();
        if($result)
        {
            return redirect('showevent');
            return back()->with('success','Event Update Successfully');
        }
            else{
            return back()->with('fail','Event not Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $ev,$id)
    {
        $ev=Event::find($id);
        $ev->delete();
        return redirect('showevent');
    }
}
