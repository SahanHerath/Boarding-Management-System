@extends('layouts.app')

@section('content')
<div class="container">
        <div class=" col-md-12 col-sm-12 col-6"> 
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}" class="breadcrumb-link text-white">Back</a></li>
                    <li class="breadcrumb-item" aria-current="text-white">Select Boarding</li>
                </ol>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User comment</div>
                
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
                                <th width="5"><center>No</center></th>
                                <th><center>User Email</center></th></div>
                                <th><center>No of Comments</center></th>
                                <th><center>No of blocked comments</center></th>
                                <th><center>Block</center></th>
                            </tr>
                       </thead>
                       <tbody>
                           @foreach($comment_user as $key=>$value)
                           
                            <tr>
                                <td style="color:black"><center>{{$key+1}}</center></td></div>
                                <td style="color:black"><center>{{$value->user_email}}</center></td>
                                <td style="color:black"><center>{{$value->no_of_comments}}</center></td>
                                <td style="color:black"><center>{{$value->no_of_blocked}}</center></td>
                                @if($value->blocked==1)
                                <td><h4><a href="{{URL('/unblockuser'.$value->mail_id)}}"><button type="button" class="btn btn-danger"><center>Unblock</center></button></a></h4></td>
                                @endif

                                @if($value->blocked==0)
                                <td><h4><a href="{{URL('/blockuser'.$value->mail_id)}}"><button type="button" class="btn btn-primary"><center>Block</center></button></a></h4></td>
                                @endif
                                
                            </tr>
                            
                           @endforeach
                           
                       </tbody>
                       </table>
                
            </div>
        </div>
    </div>
</div>
@endsection