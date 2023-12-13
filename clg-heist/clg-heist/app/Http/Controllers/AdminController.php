<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // VALIDATION FOR FORM

   public function registerAdmin(Request $req)
   {
       $req->validate([
       'name'=>'required',
       'email'=>'required|email|unique:admins',
       'password'=>'required|min:6|max:8',
       'staffid'=>'required|unique:admins'
        ]);

       $ad=new admin;
       $ad->name=$req->name;
       $ad->email=$req->email;
       $ad->password = Hash::make($req->password);
       $ad->staffid=$req->staffid;
       $result=$ad->save();
       if($result) {
        return back()->with('success','Registered Successfully');}
        else{
        return back()->with('fail','Something Wrong');}
    }
       //return redirect('/');  

    public function loginAdmin(Request $req)
    {
       $req->validate([
       'email'=>'required|email',
       'password'=>'required|min:6|max:8'
        ]);

        $user = admin::where('email','=',$req->email)->first();
        if($user)
        {
            if( Hash::check($req->password , $user->password))
            {
                return redirect('/admindash')->with('success','Welcome! Lets create your profile');  
                // return back()->with('success','login succesfully'); 
                // $req->session->put('loginId', $user->id);
               
            }
            else
            {
                return back()->with('fail','paasword not matchesd');           
            }
        }
          else{
         return back()->with('fail','This email is not registered'); 
        }
        
     }

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
    public function show(admin $ad)
    {
        $ad=admin::all();
        return view('admin.index',['admins'=>$ad]); 
    }
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $ad,$id)
    {
        $ad=admin::find($id);
        return view('admin.edit',['admins'=>$ad]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $ad, $id)
    {
        $ad=admin::find($id);
        $ad->name=$request->get('name');
        $ad->email=$request->get('email');
        $ad->staffid=$request->get('staffid');

        $ad->save();
        return redirect('admindash');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $ad, $id)
    {
        $ad=admin::find($id);
        $ad->delete();
        return redirect('show_register');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return redirect('/');
    }
}
