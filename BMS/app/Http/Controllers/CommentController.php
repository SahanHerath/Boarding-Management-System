<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\UserComment;
use DB;
use Gate;
use Mail;

class CommentController extends Controller
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
    public function store(Request $request)
    {
        $request->validate(
        ['comment' => 'string|max:255',
        'email' => 'string|email|max:255'
        ]);

        $user_email =$request->input('user_email');
        $boarding_id =$request->input('boarding_id');
        $comment=$request->input('comment');
        $blocked="0";
        
        
        $data =array('boarding_id'=>$boarding_id,'user_email'=>$user_email, 'comment'=>$comment,'blocked'=>$blocked);
        DB::table('comments')->insert($data);

        $adata=DB::table('comments')
                ->select('user_email')
                ->groupBy('user_email')
                ->get();

        $value1=DB::table('user_comments')
                ->select('no_of_comments',	'mail_id','user_email')
                ->where('user_email','=',$user_email)
                ->get();

                //echo "<pre>";
                //print_r($adata);

        $check=false;
        
        foreach($value1 as $value)
        {
            if($value->user_email==$user_email)
            {
                $check=true;
                //$count=$value->no_of_comments;
                $count=$value->no_of_comments;

               

                $usersC=UserComment::where('mail_id',$value->mail_id)
                ->update([
                    'no_of_comments'=>$count+1
                    
                ]);
            }
        }

        if(!$check)
        {   
            //$user_email=$user_email;
            $no_of_comments=1;
            $no_of_blocked=0;

            $data1 =array('user_email'=>$user_email, 'no_of_comments'=>$no_of_comments,'no_of_blocked'=>$no_of_blocked);
            DB::table('user_comments')->insert($data1);

        }

        return redirect()->back();
    }

  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
    public function adminview()
    {
        if(Gate::allows('isAdmin'))
        { 
            $data = Comment::all();
            return view('allcomments',compact('data'));
        }
        else
        {
            return redirect()->action('UserController@welcome');
        }

    }
    public function deleteComment($id)
    {
        if(Gate::allows('isAdmin'))
        { 
        $comment = Comment::where('id',$id)
                            ->update(['blocked'=>1]);
                        
        $comment1=DB::table('comments')
                ->where('id','=',$id)
                ->join('user_comments','comments.user_email','=','user_comments.user_email')
                ->select('comments.user_email')
                ->get();
        
                           // echo "<pre>";
                           // print_r($comment1);
        
                foreach($comment1 as $value)
                {
                    $value1=DB::table('user_comments')
                                ->where('user_comments.user_email','=',$value->user_email)
                                ->select('no_of_comments','mail_id','user_email','no_of_blocked')
                                ->get();
                
                   
                } 
                //echo "<pre>";
                //print_r($value1);           
                
               foreach($value1 as $val)
               {
                    $count=$val->no_of_blocked;
               }
                
               foreach($value1 as $value)
                {
                    $comment=UserComment::where('user_email',$value->user_email)
                        ->update([
                                'no_of_blocked'=>$value->no_of_blocked+1
        
        
                        ]);
                }                    
                            
                            return redirect()->back()->with('warning_message','Comment has been deleted');
        }
        else
        {
            return redirect()->action('UserController@welcome');
        }

    }

    public function usermail()
    {
        if(Gate::allows('isAdmin'))
        { 
            $comment_user=DB::table('user_comments')
                    ->select('mail_id','user_email','no_of_comments','no_of_blocked','blocked')
                    ->get();

            return view('usercomments',compact('comment_user'));
        }
        else
        {
            return redirect()->action('UserController@welcome');
        }

    }

    
    public function blockuser($mail_id)
    {
        if(Gate::allows('isAdmin'))
        { 
            $data=UserComment::where('mail_id',$mail_id)
                
            ->update([
                    'blocked'=>1

                    
            ]);

            $user=UserComment::where('mail_id',$mail_id)
                  ->select('user_email')              
                  ->get();

            Mail::send('send',['user'=>$user], function($message) use ($user){
                $message->to($user[0]->user_email)
                        ->subject('BMS');
                
                        

                $message->from('sahand.herath@gmail.com');

            });
            return redirect()->back()->with('warning_message','The user has been Blocked');
        }
        else
        {
            return redirect()->action('UserController@welcome');
        }
    }

    public function unblockuser($mail_id)
    {
        if(Gate::allows('isAdmin'))
        { 
        $data=UserComment::where('mail_id',$mail_id)
            
        ->update([
                'blocked'=>0

                
        ]);

        $user=UserComment::where('mail_id',$mail_id)
            ->select('user_email')              
            ->get();

        Mail::send('unblock',['user'=>$user], function($message) use ($user){
                    $message->to($user[0]->user_email)
                            ->subject('BMS');
        
                $message->from('sahand.herath@gmail.com','Boarding Management System');

            });
        return redirect()->back()->with('flash_message','The Blocked user have been unblocked');
        }
        else
        {
            return redirect()->action('UserController@welcome');
        }
    }

    public function deleteComment1($id)
    {
        if(Gate::allows('isAdmin'))
        { 
            $comment = Comment::find($id);
            $comment->delete();

            return redirect()->back()->with('warning_message','Comment has been deleted');
        }
        else
        {
            return redirect()->action('UserController@welcome');
        }
        
    }

    
}
