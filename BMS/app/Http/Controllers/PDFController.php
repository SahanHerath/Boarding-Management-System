<?php

namespace App\Http\Controllers;
use PDF;
use Gate;
use DB;
use Carbon;
use App\User;
use Illuminate\Http\Request;

class PDFController extends Controller
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

    public function getPDF()
    {
        
        if(Gate::allows('isAdmin'))
        { 
            $user=User::all();
            $boarding=DB::table('boardings')
                    ->join('users','users.id','=','boardings.user_id')
                    ->get();
            
            $room=DB::table('rooms')
                 ->get();
                 
            $charge=DB::table('charges')
                   ->get();
            
            $complain=DB::table('complains')
                   ->get();
    
            $comment=DB::table('comments')
                   ->get();
    
            $rating=DB::table('ratings')
                   ->get();
    
            $rate=DB::table('boarding_ratings')
                   ->get();
    
            $user_comment=DB::table('user_comments')
                   ->get();
    
            $facility=DB::table('facilities')
                   ->get();
            $mytime = Carbon\Carbon::now();
            $time=$mytime->toDateTimeString();
            $pdf=PDF::loadview('pdfview',compact('user','time','boarding','room','charge','facility','comment','complain','rating','user_comment','rate'));
            return $pdf->download('FullReport.pdf');
        }
        else
        {
            return redirect()->action('UserController@welcome');
        }
        
        
    }

    public function userReport()
    {
        if(Gate::allows('isAdmin'))
        { 
            $user=User::all();
            $mytime = Carbon\Carbon::now();
            $time=$mytime->toDateTimeString();
            $pdf=PDF::loadview('userReport',compact('user','time'));
            return $pdf->download('UserReport.pdf');
        }
        else
        {
            return redirect()->action('UserController@welcome');
        }
    }

    public function boardingReport()
    {
        
        if(Gate::allows('isAdmin'))
        { 
            $boarding=DB::table('boardings')
                    ->join('users','users.id','=','boardings.user_id')
                    ->get();
            
            $room=DB::table('rooms')
                ->get();
                
            $charge=DB::table('charges')
                ->get();
            
            $facility=DB::table('facilities')
                ->get();
            
            $mytime = Carbon\Carbon::now();
            $time=$mytime->toDateTimeString();
            $pdf=PDF::loadview('boardingReport',compact('boarding','time','room','facility','charge'));
            return $pdf->download('boardingReport.pdf');
        }
        else
        {
            return redirect()->action('UserController@welcome');
        }
    }

    public function commentReport()
    {
        if(Gate::allows('isAdmin'))
        { 
            $comment=DB::table('comments')
                ->get();

            $user_comment=DB::table('user_comments')
                ->get();
            
            
            $mytime = Carbon\Carbon::now();
            $time=$mytime->toDateTimeString();
            $pdf=PDF::loadview('commentReport',compact('comment','time','user_comment'));
            return $pdf->download('commentReport.pdf');
        }
        else
        {
            return redirect()->action('UserController@welcome');
        }
    }

    public function complainReport()
    {
        if(Gate::allows('isAdmin'))
        { 
            $complain=DB::table('complains')
                ->get();
            $mytime = Carbon\Carbon::now();
            $time=$mytime->toDateTimeString();
            $pdf=PDF::loadview('complainReport',compact('complain','time'));
            return $pdf->download('ComplainReport.pdf');
        }
        else
        {
            return redirect()->action('UserController@welcome');
        }
    }

    public function ratingReport()
    {
        if(Gate::allows('isAdmin'))
        { 
            $rating=DB::table('ratings')
                ->get();

            $rate=DB::table('boarding_ratings')
                ->get();

            $mytime = Carbon\Carbon::now();
            $time=$mytime->toDateTimeString();
            $pdf=PDF::loadview('ratingReport',compact('rating','time','rate'));
            return $pdf->download('RatingReport.pdf');
        }
        else
        {
            return redirect()->action('UserController@welcome');
        }
    }

    public function allreports()
    {
        if(Gate::allows('isAdmin'))
        { 
            return view('reports');
        }
        else
        {
            return redirect()->action('UserController@welcome');
        }
    }
}
