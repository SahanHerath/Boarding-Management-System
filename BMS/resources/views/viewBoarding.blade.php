@extends('layouts.app')

@section('content')
<div class="container">
    

    <center><h2>Boarding Deatils </h2></center>
    <div class="row">
        <div class=" col-md-10 col-md-offset-1 "> 
            <table class="table table-user-information ">
                <tbody>
                <tr>
                    <td><h4>Address</td></h4> 
                    <td><h4>{{$boarding->address_of_boarding}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Near To </td></h4> 
                    <td><h4>{{$boarding->near_to}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Accomadation Type </td></h4> 
                    <td><h4>{{$boarding->accomadation_type}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Available_for </td></h4> 
                    <td><h4>{{$boarding->available_for}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Number of Boarders</td></h4> 
                    <td><h4>{{$boarding->number_of_boarders}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Number of attached washrooms</td></h4> 
                    <td><h4>{{$room[0]['number_of_rooms']}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Number of Bedrooms</td></h4> 
                    <td><h4>{{$room[1]['number_of_rooms']}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Number of washrooms</td></h4> 
                    <td><h4>{{$room[3]['number_of_rooms']}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Number of Kitchen</td></h4> 
                    <td><h4>{{$room[2]['number_of_rooms']}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Number of Chairs</td></h4> 
                    <td><h4>{{$facility[0]['number_of_facility']}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Number of Tables</td></h4> 
                    <td><h4>{{$facility[4]['number_of_facility']}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Number of Fans</td></h4> 
                    <td><h4>{{$facility[2]['number_of_facility']}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Number of Cupboards</td></h4> 
                    <td><h4>{{$facility[5]['number_of_facility']}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Number of Double bed</td></h4> 
                    <td><h4>{{$facility[1]['number_of_facility']}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Number of Single Bed</td></h4> 
                    <td><h4>{{$facility[3]['number_of_facility']}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Security Camera</td></h4> 
                    <td><h4>{{$boarding->security_cam_available}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Electricity Bill</td></h4> 
                    <td><h4>{{$charge[0]['availability']}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Meals</td></h4> 
                    <td><h4>{{$charge[1]['availability']}}</td></h4>
                </tr>
                <tr>
                    <td><h4>Water</td></h4> 
                    <td><h4>{{$charge[2]['availability']}}</td></h4>
                </tr>   
                <tr>
                    <td><h4>Monthly Charge</td></h4> 
                    <td><h4>{{$boarding->rent}}</td></h4>
                </tr>  
                <tr>
                    <td><h4>Rules</td></h4> 
                    <td><h4>{{$boarding->rules}}</td></h4>
                </tr>   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection