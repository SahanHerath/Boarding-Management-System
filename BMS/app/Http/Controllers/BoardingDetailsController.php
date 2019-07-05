<?php

namespace App\Http\Controllers;
use Auth;
use App\Boarding;
use App\Charge;
use App\Facility;
use App\Room;
use App\Picture;
use App\Comment;
use App\Rate;
use App\Rating;
use Illuminate\Http\Request;
use DB;
use Image;

class BoardingDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $boardings=Boarding::all();
        return $boardings;
        return view('listBoarding',['boardings'=>$boardings]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createBoarding'); 
        
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
            ['address_of_boarding' => 'required|string|max:255',
            'near_to' => 'required|string|max:255',
            'number_of_boarders' =>'required',
            'rent' =>'required',
            'security_cam_available' =>'required|string|max:255|not_in:--Select Type--',
            'Chairs' =>'required',
            'Double_Beds' => 'required',
            'Fans' => 'required',
            'Single_Beds' => 'required',
            'Tables' => 'required',
            'Cupboards' => 'required',
            'Attached_washroom'=> 'required',
            'Washrooms' => 'required',
            'Bedrooms' => 'required',
            'Kitchen' => 'required',
            'main_pic' => 'required|image|max:2000'

        ],
        ['address_of_boarding.required'=> "Address is required",
        'near_to.required'=> "Fill out this field",
        'number_of_boarders.required'=> "Fill out this field",
        'security_cam_available.required'=> "Fill out this field",
        'Chairs.required'=> "Fill out this field",
        'Double_Beds.required'=> "Fill out this field",
        'Fans.required'=> "Fill out this field",
        'Single_Beds.required'=> "Fill out this field",
        'Tables.required'=> "Fill out this field",
        'Cupboards.required'=> "Fill out this field",
        'Attached_washroom.required'=> "Fill out this field",
        'Washrooms.required'=> "Fill out this field",
        'Bedrooms.required'=> "Fill out this field",
        'Kitchen.required'=> "Fill out this field",
        'rent.required' => "Fill out this field"

        ]
    );
        $boarding = new Boarding;
        $boarding->address_of_boarding=$request->address_of_boarding;
        $boarding->near_to=$request->near_to;
        $boarding->accomadation_type =$request->accomadation_type;
        $boarding->available_for =$request->available_for;
        $boarding->number_of_boarders =$request->number_of_boarders;
        $boarding->rent =$request->rent;
        $boarding->security_cam_available =$request->security_cam_available;
        $boarding->rules=$request->rules;
        $boarding->available='1';
        $boarding->user_id = Auth::user()->id;
        $boarding->save();
      
        $facility = new Facility;
        $facility->facility_type = 'Chairs';
        $facility->number_of_facility = $request->Chairs;
        $facility->boarding_id = $boarding->id;
        $facility->save();

        $facility = new Facility;
        $facility->facility_type = 'Double Bed';
        $facility->number_of_facility = $request->Double_Beds;
        $facility->boarding_id = $boarding->id;
        $facility->save();

        $facility = new Facility;
        $facility->facility_type = 'Fans';
        $facility->number_of_facility = $request->Fans;
        $facility->boarding_id = $boarding->id;
        $facility->save();

        $facility = new Facility;
        $facility->facility_type = 'Single Bed';
        $facility->number_of_facility = $request->Single_Beds;
        $facility->boarding_id = $boarding->id;
        $facility->save();

        $facility = new Facility;
        $facility->facility_type = 'Study Table';
        $facility->number_of_facility = $request->Tables;
        $facility->boarding_id = $boarding->id;
        $facility->save();

        $facility = new Facility;
        $facility->facility_type = 'Wardrobe';
        $facility->number_of_facility = $request->Cupboards;
        $facility->boarding_id = $boarding->id;
        $facility->save();

        $room = new Room;
        $room->room_type = 'Attached washroom';
        $room->number_of_rooms= $request->Attached_washroom;
        $room->boarding_id = $boarding->id;
        $room->save();

        $room = new Room;
        $room->room_type = 'Bedroom';
        $room->number_of_rooms= $request->Bedrooms;
        $room->boarding_id = $boarding->id;
        $room->save();

        $room = new Room;
        $room->room_type = 'Kitchen';
        $room->number_of_rooms= $request->Kitchen;
        $room->boarding_id = $boarding->id;
        $room->save();

        $room = new Room;
        $room->room_type = 'Washroom';
        $room->number_of_rooms= $request->Washrooms;
        $room->boarding_id = $boarding->id;
        $room->save();

        $charge = new Charge;
        $charge->charge_type = 'Electricity';
        $charge->availability= $request->electricity_bill;
        $charge->boarding_id = $boarding->id;
        $charge->save();

        $charge = new Charge;
        $charge->charge_type = 'Meals';
        $charge->availability= $request->Meals;
        $charge->boarding_id = $boarding->id;
        $charge->save();

        $charge = new Charge;
        $charge->charge_type = 'Water';
        $charge->availability= $request->Water;
        $charge->boarding_id = $boarding->id;
        $charge->save();

        $rate=new Rate;
        $rate->boarding_id=$boarding->id;
        $rate->rate='0';
        $rate->save();

         if($request->hasFile('img'))
         {
             foreach( $request->img as $file)
             {
                 $filename=$file->getClientOriginalName();
                 $filesize=$file->getClientSize();
                 Image::make($file)->resize(300,300)->save(public_path('/uploads/boardingpic/'. $filename));

                 $file=new Picture;
                 $file->picture=$filename;
                 $file->boarding_id=$boarding->id;
                 $file->save();
           }
        }
          if($request->hasFile('main_pic'))
          {
             $main_pic=$request->file('main_pic');
            //  $this->validate($main_pic,['main_pic'=>'mimes:jpg','png']);
        //      $allowedfileExtension=['jpg','png'];
 
        //         $filename = $main_pic->getClientOriginalName();
        //         $extension = $main_pic->getClientOriginalExtension();
        //         $check=in_array($extension,$allowedfileExtension);
        //         //dd($check);
        //         if($check)
        //         {
        //         $filename = $photo->store('main_pic');       
        //         }
             $filename=time().'.'.$main_pic->getClientOriginalExtension();
             Image::make($main_pic)->resize(300,300)->save(public_path('/uploads/boardingpic/'. $filename));

             $data=new Picture;
             $data->picture=$filename;
             $data->boarding_id=$boarding->id;
             $data->main_pic="1";
             $data->save();
         }
      
        return redirect('/Profile')->with('flash_message','new boarding is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  $boarding = Boarding::findOrFail($id);
        //  $room = Room::where('boarding_id',$id)->get();
        //  $charge = Charge::where('boarding_id',$id)->get();
        //  $facility = Facility::where('boarding_id',$id)->get();
        //  return view('viewBoarding',compact('boarding','room','charge','facility'));
        $data=DB::table('boardings')
                ->where('boardings.id','=',$id)
                ->select('id','address_of_boarding','accomadation_type','available_for','number_of_boarders','rent','security_cam_available','near_to','user_id','rules')
                ->get();
        
        $adata=DB::table('boardings')
                ->where('boardings.id','=',$id)
                ->join('rooms','rooms.boarding_id','=','boardings.id')
                ->select('room_type','number_of_rooms')
                ->get();

        $bdata=DB::table('boardings')
                ->where('boardings.id','=',$id)
                ->join('facilities','facilities.boarding_id','=','boardings.id')
                ->select('facility_type','number_of_facility')
                ->get();

        $cdata=DB::table('boardings')
                ->where('boardings.id','=',$id)
                ->join('charges','charges.boarding_id','=','boardings.id')
                ->select('charge_type','availability')
                ->get(); 
                
        $ddata=DB::table('boardings')
                ->where('boardings.id','=',$id)
                ->join('users','users.id','=','boardings.user_id')
                ->select('name', 'email','nicno','contactno','address')
                ->get();

        $edata=DB::table('boardings')
                ->where('boardings.id','=',$id)
                ->join('comments','comments.boarding_id','=','boardings.id')
                ->join('user_comments','user_comments.user_email','=','comments.user_email')
                ->where('user_comments.blocked','=',0)
                ->where('comments.blocked','=',0)
                ->select('comments.user_email','comment')
                ->get();

        $fdata=DB::table('boardings')
                ->where('boardings.id','=',$id)
                ->join('pictures','pictures.boarding_id','=','boardings.id')
                ->select('picture')
                ->get();

        $zdata=DB::table('ratings')
                ->where('boarding_no','=',$id)
                ->avg('rating');
        
        return view('showBoarding',compact('data'),compact('adata','bdata','cdata','ddata','edata','fdata','zdata'));
        
    }

    // public function authorize()
    // {
    //     $comment = Comment::find($this->route('comment'));
    //     return $comment && $this->user()->can('update',$comment);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $boarding = Boarding::find($id); 
        $room = Room::where('boarding_id',$id)->get();
        $charge = Charge::where('boarding_id',$id)->get();
        $facility = Facility::where('boarding_id',$id)->get();
        return view('editBoarding',compact('boarding','room','charge','facility'));
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
         
        
        
        $boarding = Boarding::find($id); 
         $boarding->address_of_boarding=$request->address_of_boarding;
         $boarding->near_to=$request->near_to;
         $boarding->accomadation_type =$request->accomadation_type;
         $boarding->available_for =$request->available_for;
         $boarding->number_of_boarders =$request->number_of_boarders;
         $boarding->rent =$request->rent;
         $boarding->security_cam_available =$request->security_cam_available;
         $boarding->rules=$request->rules;
         $boarding->update();
       

        $facilities = Facility::where('facility_type','Chairs')->where('boarding_id',$id)->get();
        $facilities[0]->number_of_facility=$request->Chairs;
        $facilities[0]->update();


        $facilities = Facility::where('facility_type','Double Bed')->where('boarding_id',$id)->get();
        $facilities[0]->number_of_facility=$request->Double_Beds;
        $facilities[0]->update();

        $facilities = Facility::where('facility_type','Fans')->where('boarding_id',$id)->get();
        $facilities[0]->number_of_facility=$request->Fans;
        $facilities[0]->update();

        $facilities = Facility::where('facility_type','Single Bed')->where('boarding_id',$id)->get();
        $facilities[0]->number_of_facility=$request->Single_Beds;
        $facilities[0]->update();

        $facilities = Facility::where('facility_type','Study Table')->where('boarding_id',$id)->get();
        $facilities[0]->number_of_facility=$request->Tables;
        $facilities[0]->update();

        $facilities = Facility::where('facility_type','Wardrobe')->where('boarding_id',$id)->get();
        $facilities[0]->number_of_facility=$request->Cupboards;
        $facilities[0]->update();

        $rooms = Room::where('room_type','Attached washroom')->where('boarding_id',$id)->get();
        $rooms[0]->number_of_rooms=$request->Attached_washroom;
        $rooms[0]->update();

        $rooms = Room::where('room_type','Bedroom')->where('boarding_id',$id)->get();
        $rooms[0]->number_of_rooms=$request->Bedrooms;
        $rooms[0]->update();

        $rooms = Room::where('room_type','Kitchen')->where('boarding_id',$id)->get();
        $rooms[0]->number_of_rooms=$request->Kitchen;
        $rooms[0]->update();
        
        $rooms = Room::where('room_type','Washroom')->where('boarding_id',$id)->get();
        $rooms[0]->number_of_rooms=$request->Washrooms;
        $rooms[0]->update();

        $charges = Charge::where('charge_type','Electricity')->where('boarding_id',$id)->get();
        $charges[0]->availability=$request->electricity_bill;
        $charges[0]->update();

        $charges = Charge::where('charge_type','Meals')->where('boarding_id',$id)->get();
        $charges[0]->availability=$request->Meals;
        $charges[0]->update();

        $charges = Charge::where('charge_type','Water')->where('boarding_id',$id)->get();
        $charges[0]->availability=$request->Water;
        $charges[0]->update();

        return redirect('/Profile')->with('flash_message','Boarding details is updated');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boarding = Boarding::findOrFail($id); 
        $boarding->delete();
        $room = Room::where('boarding_id',$id)->delete();
        $charge = Charge::where('boarding_id',$id)->delete();
        $facility = Facility::where('boarding_id',$id)->delete();
        $comment = Comment::where('boarding_id',$id)->delete();
        $rating=Rating::where('boarding_no',$id)->delete();
        $rate=Rate::where('boarding_id',$id)->delete();
        return redirect('/Profile')->with('warning_message','Boarding is deleted');;
    }
    public function start()
    {
        return view('createBoarding');
    }

    public function allboardings()
    {
        $boardings=Boarding::all();
       
       
        foreach($boardings as $data)
        {
        $atts= DB::table('boardings')
                ->select('boardings.id','address_of_boarding','accomadation_type','available_for','number_of_boarders','rent','security_cam_available','near_to','user_id','rules','picture')
                ->join('pictures','boardings.id','=','pictures.boarding_id')
                ->where('available','=',1)
                ->where('pictures.main_pic','=',1)
                ->get();

                
        return view('AllBoardings',compact('atts'));
        }
    }

    public function easy($id)
    {
        
        $data=DB::table('boardings')
                ->where('boardings.id','=',$id)
                ->select('id','address_of_boarding','accomadation_type','available_for','number_of_boarders','rent','security_cam_available','near_to','user_id','rules')
                ->get();
        
        $adata=DB::table('boardings')
                ->where('boardings.id','=',$id)
                ->join('rooms','rooms.boarding_id','=','boardings.id')
                ->select('room_type','number_of_rooms')
                ->get();

        $bdata=DB::table('boardings')
                ->where('boardings.id','=',$id)
                ->join('facilities','facilities.boarding_id','=','boardings.id')
                ->select('facility_type','number_of_facility')
                ->get();

        $cdata=DB::table('boardings')
                ->where('boardings.id','=',$id)
                ->join('charges','charges.boarding_id','=','boardings.id')
                ->select('charge_type','availability')
                ->get(); 
                
        $ddata=DB::table('boardings')
                ->where('boardings.id','=',$id)
                ->join('users','users.id','=','boardings.user_id')
                ->select('name', 'email','nicno','contactno','address')
                ->get();

        $edata=DB::table('boardings')
                ->where('boardings.id','=',$id)
                ->join('comments','comments.boarding_id','=','boardings.id')
                ->select('user_email','comment')
                ->get();

        $fdata=DB::table('boardings')
                ->where('boardings.id','=',$id)
                ->join('pictures','pictures.boarding_id','=','boardings.id')
                ->select('picture')
                ->get();

        return view('showBoarding',compact('data'),compact('adata','bdata','cdata','ddata','edata','fdata'));

    }
    public function search(Request $request)
    {
        
        $boardings=Boarding::all();
        $search=$request->get('search');
        
        foreach($boardings as $data)
        {
        
           
            $atts=DB::table('boardings')->join('pictures','boardings.id','=','pictures.boarding_id')
            ->where('pictures.main_pic','=',1)
            ->where(function($query) use ($search){
                    return $query->where('boardings.id','like','%'.$search.'%')
                                 ->orWhere('address_of_boarding','like','%'.$search.'%')
                                 ->orwhere('accomadation_type','like','%'.$search.'%')
                                 ->orWhere('available_for','like','%'.$search.'%');
            })
            
            ->select('boardings.id','address_of_boarding','accomadation_type','available_for','number_of_boarders','rent','security_cam_available','near_to','user_id','rules','picture')
            ->get();
                return view('AllBoardings',compact('atts'));
        }

    }
    public function find(request $request )
    {
        
        
        
        
        $accomadation_type = $request->Input('accomadation_type'); 
        $available_for = $request->Input('available_for'); 
        $numbers_of_boarders = $request->Input('numbers_of_boarders'); 
        $rent = $request->Input('rent'); 
        $Electricity = $request->Input('Electricity'); 
    


        if($rent=='b1')
        {
            $low = 0;
            $high = 1500;

            if($numbers_of_boarders=='a1')
            {
                $low1=0;
                $high1=5;
            }

            elseif($numbers_of_boarders=='a2')
            {
                $low1=5;
                $high1=10;
            }

            elseif($numbers_of_boarders=='a3')
            {
                $low1=10;
                $high1=20;
            }

            else
            {
                $low1=20;
                $high1=100;
            }
            

        }

        elseif($rent=='b2')
        {
            $low = 1500;
            $high = 2500;

                if($numbers_of_boarders=='a1')
            {
                $low1=0;
                $high1=5;
            }

            elseif($numbers_of_boarders=='a2')
            {
                $low1=5;
                $high1=10;
            }

            elseif($numbers_of_boarders=='a3')
            {
                $low1=10;
                $high1=20;
            }

            else
            {
                $low1=20;
                $high1=100;
            }
            
        }
        elseif($rent=='b3')
        {
            $low = 2500;
            $high = 100000;

                if($numbers_of_boarders=='a1')
            {
                $low1=0;
                $high1=5;
            }

            elseif($numbers_of_boarders=='a2')
            {
                $low1=5;
                $high1=10;
            }

            elseif($numbers_of_boarders=='a3')
            {
                $low1=10;
                $high1=20;
            }

            else
            {
                $low1=20;
                $high1=100;
            }
            
        }
       



        $atts =DB::table('boardings')
        ->where('rent','>=',$low)
        ->where('rent','<',$high)
        ->where('number_of_boarders','>=',$low1)
        ->where('number_of_boarders','<',$high1)
        ->where('accomadation_type','=',$accomadation_type)
        ->where('available_for','=',$available_for)
        ->join('pictures','boardings.id','=','pictures.boarding_id')
        ->where('pictures.main_pic','=',1)
        ->select('boardings.id','address_of_boarding','accomadation_type','available_for','number_of_boarders','rent','security_cam_available','near_to','user_id','rules','picture')
        ->get();
        

        //echo "<pre>";
        //print_r ($atts);
       return view('AllBoardings',compact('atts'));
    

    }
    public function changeBoardingpic($id)
    {
        $data=DB::table('pictures')
            ->where('boarding_id','=',$id)
            ->get();

        return view('changeBP',compact('data'));
    }

    public function changeBP(request $request,$id)
    {
        if($request->hasFile('boarding_pic'))
        {
            $boardingpic=$request->file('boarding_pic');
            $filename=time().'.'.$boardingpic->getClientOriginalExtension();
            Image::make($boardingpic)->resize(300,300)->save(public_path('/uploads/boardingpic/'. $filename));

            $picture=Picture::where('id',$id)
                ->update([
                        'picture'=>$filename


                ]);
        }

        return redirect()->action('UserController@profile')->with('flash_message','Boarding pictures has been updated');
    }

    public function deletepicture($id)
    {
        $picture = Picture::find($id);
        $picture->delete();

        return redirect()->action('UserController@profile')->with('warning_message','Boarding picture has been deleted');
    }

    public function addnewpicture($boarding_id)
    {
        $data=DB::table('pictures')
        ->where('boarding_id','=',$boarding_id)
        ->get();

        return view('addPicture',compact('data'));
    }

    public function newBP(request $request,$boarding_id)
    {
        
             $main_pic=$request->file('boarding_pic');
         
             $filename=time().'.'.$main_pic->getClientOriginalExtension();
             Image::make($main_pic)->resize(300,300)->save(public_path('/uploads/boardingpic/'. $filename));

             $data=new Picture;
             $data->picture=$filename;
             $data->boarding_id=$boarding_id;
             $data->main_pic="0";
             $data->save();

             return redirect()->action('UserController@profile')->with('flash_message','New Boarding picture is added');
        
    }

    public function TopRated()
    {
        $data=DB::table('boarding_ratings')
             
             
             ->join('boardings','boardings.id','=','boarding_ratings.boarding_id')
             ->join('pictures','boardings.id','=','pictures.boarding_id')
             ->where('pictures.main_pic','=',1)
             ->orderBy('boarding_ratings.rate', 'desc')
             ->select('boardings.id','address_of_boarding','accomadation_type','available_for','number_of_boarders','rent','picture','rate')
             ->Limit(5)
             ->get();

             return view('topRated',compact('data'));
            


    }

    public function unavailable($id)
    {
        $unavailable=Boarding::where('id',$id)
        ->update([
                'available'=>0
        ]);
    
        return redirect()->action('UserController@profile')->with('flash_message','Boarding has been made unavailable');

    }

    public function available($id)
    {
        $unavailable=Boarding::where('id',$id)
        ->update([
                'available'=>1
        ]);
    
        return redirect()->action('UserController@profile')->with('flash_message','Boarding has been made available');

    }
}
