<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use DB;
// use App\Models\Alumnidetail;
// use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }  

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect('dashboard')
                        ->withSuccess('You have Successfully logged in, Lets create your profile!');
        }
  
        return redirect("login")->withSuccess('Sorry! You have entered invalid credentials');
    }

    public function postRegistration(Request $request,User $user)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
        
        // if($user->status == '0'){
        //     return view("login")->withSuccess('you will be verified by admin.');
        // }
        // elseif($user->status=='1'){
        //     return view("login")->withSuccess('you can login now!');
        // }
        return redirect("login")->withSuccess('Registered Successfully!');

       
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('alumni.index');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function show(User $user)
    {
        $user=User::all();
        return view('admin.alumni.show_register',['users'=>$user]);   
    }

    function status_update($id)
    {
        $user = DB::table('users')
				->select('status')
				->where('id','=',$id)
				->first();
        
        //Check user status
        if($user->status == '1'){
            $status = '0';
        }else{
            $status = '1';
        }
        //update status
        $values = array('status' => $status );
        DB::table('users')->where('id',$id)->update($values);

        session()->flash('msg','status has been updated successfully.');
        return redirect('show_register');

    }

    public function destroy(User $user, $id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('show_register');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return redirect('/');
    }

}
 // VALIDATION FOR FORM

//    public function registerUser(Request $req)
//    {
//        $req->validate([
//        'name'=>'required',
//        'email'=>'required|email|unique:alumni_details',
//        'password'=>'required|min:8|max:12'
//         ]);

//        $alumni=new Alumnidetail;
//        $alumni->name=$req->name;
//        $alumni->email=$req->email;
//        $alumni->password = Hash::make($req->password);
//        $result=$alumni->save();
//        if($result) {
//         return back()->with('success','Registered Successfully');}
//         else{
//         return back()->with('fail','Something Wrong');}
//     }
       //return redirect('/');  

//     public function loginUser(Request $req)
//     {
//        $req->validate([
//        'email'=>'required|email',
//        'password'=>'required|min:8|max:12'
//         ]);

//         $user = Alumnidetail::where('email','=',$req->email)->first();
//         if($user)
//         {
//             if( Hash::check($req->password , $user->password))
//             {
//                 return redirect('/profile');  
//                 return back()->with('success','login succesfully'); 
//                 // $req->session->put('loginId', $user->id);
               
//             }
//             else
//             {
//                 return back()->with('fail','paasword not matchesd');           
//             }
//         }
//           else{
//          return back()->with('fail','This email is not registered'); 
//         }
        
//      }
     
//      public function show(Alumnidetail $alumni)
//      {
//          $alumni=Alumnidetail::all();
//          return view('admin.alumni.show_register',['alumni_details'=>$alumni]);   
//      }

//      public function destroy(Alumnidetail $alumni,$id)
//     {
//         $alumni=Alumnidetail::find($id);
//         $alumni->delete();
//         return redirect('admin.alumni.show_register');
//     }

// }
