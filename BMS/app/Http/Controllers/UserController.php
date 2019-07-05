<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Boarding;
use App\User;
use DB;
use Gate;
use Hash;
use PDF;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index',compact('users'));
        //return $user;
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
    public function show($id)
    {
        $user = User::find($id);
        $boardings = Boarding::where('user_id',$user->id)->get();
        return view('user.show',compact('user','boardings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {      
        $id1 = Auth::id();
        
        if($id1==$id)
        {
            $user = User::find($id);
            return view('editProfile',compact('user'));
        }

        else
        {
            return redirect()->action('UserController@profile');
        }
        
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
        $request->validate(
            ['username' => 'required|string|max:20',
            'name' => 'required|string|max:255',
            'nicno' =>'required|string|max:12',
            'email' =>'required|string|email|max:255',
            'address' =>'required|string|max:255',
            'contactno' =>'required|string|max:255',
            

        ],
        [
            'username.required'=> "Username is required",
            'name.required'=> "Fill out this field",
            'nicno.required'=> "Fill out this field",
            'email.required'=> "Fill out this field",
            'address.required'=> "Fill out this field",
            'contactno.required'=> "Fill out this field",
        

        ]);
        
        
        
        
        
        
        
        $user = User::find($id); 
         $user->username=$request->username;
         $user->name=$request->name;
         $user->nicno =$request->nicno;
         $user->email =$request->email;
         $user->address =$request->address;
         $user->contactno =$request->contactno;
         
         $user->update();

         return redirect()->action('UserController@profile')->with('flash_message','Profile details have been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('boardings')
                ->where('boardings.user_id','=',$id)
                ->get();

        foreach($data as $x)
        {
            return redirect()->back()->with('warning_message','User have a boarding can not delete profile');
        }

        $user = User::find($id);
        $user->delete();

        
        
        if($user->admin==1)
        {
            return redirect('/home')->with('warning_message','The admin have been remove from the system');
        }
        if($user->admin==0)
        {
            return redirect('/home')->with('warning_message','The User have been remove from the system');
        }

    }

    public function profile()
    {
        $user = Auth::user();
        $boardings = Boarding::where('user_id',$user->id)->get();
        return view('Profile',compact('user','boardings'));
    }

    public function welcome()
    {
        //$user = Auth::user();
        // $boardings =DB::table('boardings')
        //             //->where('id','=',62)
        //             ->paginate(3);
                
        //return $boardings;
        //return view('welcome',compact('boardings'));
        $data=DB::table('boardings')
                ->where('boardings.id','=',13)
                ->join('pictures','pictures.boarding_id','=','boardings.id')
                ->select('boardings.id','picture','address_of_boarding','rent')
                ->paginate(3);                
        return view('welcome',compact('data'));
        
    }

    public function update_profilepic(request $request)
    {
        if($request->hasFile('profilepic'))
        {
            $profilepic=$request->file('profilepic');
            $filename=time().'.'.$profilepic->getClientOriginalExtension();
            Image::make($profilepic)->resize(300,300)->save(public_path('/uploads/profilepics/'. $filename));

            $user=Auth::user();
            $user->profilepic=$filename;
            $user->save();
        }
        return redirect()->back()->with('flash_message','The Profile picture has been updated');
        //return view('Profile',array('user'=>Auth::user()));
    }

    public function admin()
    {
        if(Gate::allows('isAdmin'))
        { 
            $users=User::all();
            return view('admins',compact('users'));
        }
        else
        {
            return redirect()->action('UserController@welcome');
        }
    }

    public function allowners()
    {
        if(Gate::allows('isAdmin'))
        { 
            $users=DB::table('users')
                ->where('admin','=',0)
                ->get();

            return view('AllOwners',compact('users'));
        }
        else
        {
            return redirect()->action('UserController@welcome');
        }


    }

    public function showChangePasswordForm()
    {
        return view('changePassword');
    }

    public function changepassword(request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->action('UserController@profile')->with('flash_message','Password changed successfully');
    }

   

    

 
}
