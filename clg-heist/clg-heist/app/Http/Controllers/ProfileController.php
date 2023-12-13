<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;


class ProfileController extends Controller
{

    public function index()
    {
        // $user=Auth::user();
        // dd($user);
        return view('alumni.profile');
    }


    function addData(Request $req)
    {
       $prof=new profile;
       $prof->fname=$req->fname;
       $prof->lname=$req->lname;
       $prof->alumni_details_id=Auth::user()->id;
       $prof->dob=$req->dob;
       $prof->address=$req->address;
       $prof->contact=$req->contact;
       $prof->profession=$req->profession;
       $prof->company_name=$req->company_name;
       $prof->designation=$req->designation;
       $prof->experience=$req->experience;
       $prof->Year_joined=$req->Year_joined;
       $prof->Year_graduated=$req->Year_graduated;
       $prof->gender=$req->gender;
       $prof->course=$req->course;

       if($req->hasfile('profile_image'))
       {
            $file=$req->file('profile_image');
            $extension= $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/profile_image/', $filename);
            $prof->profile_image =$filename;
       }
       $prof->linkedin_id=$req->linkedin_id;
       $result=$prof->save();
       if($result) {
        return back()->with('success','Profile Added');}
        else{
        return back()->with('fail','Profile not Added');}    
    }

    public function show($id)
    {
        // $prof = DB::table('profiles')->where('id')->first();
 
        // echo $user->name;
       
        $prof=profile::where('alumni_details_id',$id)->first();
        return view('admin.alumni.show_profile',['profiles'=>$prof]);
    }
    public function profileshow($id)
    {
        
        $prof=profile::where('alumni_details_id',$id)->first();
        return view('alumni.update_profile',['profiles'=>$prof]);
    }

    public function update(Request $request,profile $prof, $id)
    {
        $prof = Profile::Where('alumni_details_id', $id)->first();
        $prof->update($request->all());
        $result=$prof->save();
       if($result) {
        return back()->with('success','Profile Updated');}
        else{
        return back()->with('fail','Profile not Updated');} 
        // return view('alumni.update_profile',['profiles'=>$prof]);

    }
   
}

    //    $prof=profile::find($id);
    //    $prof->fname=$req->get('fname');
    //    $prof->lname=$req->get('lname');
    //    $prof->alumni_details_id=$req->get('Auth::user()->id');
    //    $prof->dob=$req->get('dob');
    //    $prof->address=$req->get('address');
    //    $prof->contact=$req->get('contact');
    //    $prof->profession=$req->get('profession');
    //    $prof->company_name=$req->get('company_name');
    //    $prof->designation=$req->get('designation');
    //    $prof->experience=$req->get('experience');
    //    $prof->Year_joined=$req->get('Year_joined');
    //    $prof->Year_graduated=$req->get('Year_graduated');
    //    $prof->gender=$req->get('gender');
    //    $prof->course=$req->get('course');
        
    //    if($req->hasfile('profile_image'))
    //    {
    //         $file=$req->file('profile_image');
    //         $extension= $file->getClientOriginalExtension();
    //         $filename = time().'.'.$extension;
    //         $file->move('uploads/profile_image/', $filename);
    //         $prof->profile_image =$filename;
    //    }
    //    $prof->linkedin_id=$req->linkedin_id;
    //    $result=$prof->save();
    //    if($result) {
    //     return back()->with('success','Profile Updated');}
    //     else{
    //     return back()->with('fail','Profile not Updated');}    
    // }


