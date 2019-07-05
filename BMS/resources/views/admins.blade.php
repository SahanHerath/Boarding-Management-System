@extends('layouts.app')

@section('content')
<div class="container">
    <div class=" col-md-12 col-sm-12 col-6"> 
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}" class="breadcrumb-link text-white">Back</a></li>
                    <li class="breadcrumb-item" aria-current="text-white">Admins</li>
                </ol>
                <br>
            </div>
        </div>
</div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Admins</div> -->

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

                <h4><center class="text-dark">Admin</center></h4>
                   <table class="table table hover table-bordered text-dark">
                        <thead>
                             <tr>
                                 <th width="5"><center>No.</center></th>
                                 <th><center>Member Name</center></th>
                                 <th><center>Email</center></th>
                                 <th><center>Remove Admin</center></th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key =>$value)
                            @if($value->admin== 1)
                             <tr>
                                 <td><center>{{$key+1}}</center></td>
                                 <td><center>{{$value->name}}</center></td>
                                 <td><center>{{$value->email}}</center></td>
                                 @if($value->id==1)
                                 <td><center>Super Admin</center></td>
                                 @endif
                                 
                                 
                                 @if($value->id!=1)
                                 <td> <form action= "{{route('user.destroy',$value->id)}}" method = "post">
                                        <input type = "hidden" name = "_method" value = "delete">
                                        {{csrf_field()}}
                                        <center><input type ="Submit" class="btn btn-danger" value = "Remove" ></center> 
                                      </form></td>
                                @endif
                             </tr>
                             @endif
                            @endforeach
                        </tbody>
                    </table>
                    <h3><center><a href ="{{ route('register') }}"><button class="btn btn-primary" >Add new Admin</button></a></center></h3>
            </div>
        </div>
    </div>
</div>
<br>
<br>

@endsection