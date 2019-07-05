<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boarding;
use App\Rate;
use DB;
use Gate;
class RatingController extends Controller
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
        $user_email =$request->input('user_email');
        $boarding_id =$request->input('boarding_id');
        $rating=$request->input('rating');
        
        
        
        $data =array('boarding_no'=>$boarding_id,'user_email'=>$user_email,'rating'=>$rating);
        DB::table('ratings')->insert($data);

        $zdata=DB::table('ratings')
                ->where('boarding_no','=',$boarding_id)
                ->avg('rating');

        $rate=Rate::where('boarding_id',$boarding_id)
                ->update([
                        'rate'=>$zdata


                ]);

        return redirect('/viewBoarding'.$boarding_id);
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

    public function allrating()
    {
        if(Gate::allows('isAdmin'))
        {
            $data=DB::table('boarding_ratings')
                ->join('boardings','boardings.id','=','boarding_ratings.boarding_id')
                ->select('boarding_id','rate','address_of_boarding')
                ->get();

            return view('AllRatings',Compact('data'));
        }
        else
        {
            return redirect()->action('UserController@welcome');
        }

    }

    
}
