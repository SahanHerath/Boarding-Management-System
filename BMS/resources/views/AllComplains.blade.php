@extends('layouts.app')

@section('content')
<div class="container">
        <div class=" col-md-12 col-sm-12 col-6"> 
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}" class="breadcrumb-link text-white">Back</a></li>
                    <li class="breadcrumb-item" aria-current="text-white">All complaints</li>
                </ol>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Complaints</div>
                
                
                @if(Session::has('flash_message'))  
                <div class="alert alert-success">
                    <span class="glyphicon glyphicon-ok"></span>
                    {!!session('flash_message')!!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                </div>
                 @endif

            @if(Session::has('warning_message'))
                    <div class="alert alert-warning">
                        <span class="glyphicon glyphicon-ok"></span>
                        {!!session('warning_message')!!}
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                    </div>
            @endif
                <table class="table table hover table-bordered">
                       <thead>
                            <tr>
                                <th width="5"><center>Complaint No</center></th>
                                <th><center>Boarding No</center></th>
                                <th><center> User Email</center></th>
                                <th><center>Complaint About</center></th>
                                <th><center>Complaint</center></th>
                                <th><center>State</center></th>
                            </tr>
                       </thead>
                       <tbody>
                           @foreach($data as $key=>$value)
                            <tr>
                                <td style="color:black"><center>{{$key+1}}</center></td>
                                <td style="color:black"><center>{{$value->boarding_no}}</center></td>
                                <td style="color:black"><center>{{$value->user_email}}</center></td>
                                <td style="color:black"><center>{{$value->complain_about}}</center></td>
                                <td style="color:black"><center>{{$value->complain}}</center></td>
                                @if($value->state==0)
                                <td><h4><a href="{{URL('/receiveComplain'.$value->complain_id)}}"><center><button type="button" class="btn btn-info">Received</button></center></a></h4></td>
                                @endif

                                @if($value->state==1)
                                <td><h4><a href="{{URL('/solvedComplain'.$value->complain_id)}}"><center><button type="button" class="btn btn-success">Solved</button></center></a></h4></td>
                                @endif

                                @if($value->state==2)
                                <td><h4><a href="{{URL('/deleteComplain'.$value->complain_id)}}"><center><button type="button" class="btn btn-danger">Delete</button></center></a></h4></td>
                                @endif
                                
                            </tr>
                            
                           @endforeach
                           
                       </tbody>
                       </table>
                       </div>           
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br><br>
                
            
        </div>
    </div>
</div>
@endsection