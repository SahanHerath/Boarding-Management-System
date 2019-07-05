
@extends('layouts.app')

@section('content')
<div class="container">
        <div class=" col-md-12 col-sm-12 col-6"> 
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}" class="breadcrumb-link text-white">Back</a></li>
                    <li class="breadcrumb-item" aria-current="text-white">Owners</li>
                </ol>
                <br>
            </div>
        </div>
</div>
    <div class="row">
        <div class="col-md-6 col-md-8 offset-2">
            <div class="panel panel-default">

                <h4><center class="text-dark">Owner</center></h4>
                   <table class="table table hover table-bordered text-dark">
                       <thead>
                            <tr>
                                <th width="5"><center>No.</center></th>
                                <th><center>Member Name</center></th>
                                <th><center>Email</center></th>
                                <th><center>View Details</center></th>
                                <th><center>Delete Details</center></th>
                            </tr>
                       </thead>
                       <tbody>
                           @foreach($users as $key =>$value)
                           @if($value->admin== 0)
                            <tr>
                                <td><a href = "{{route('user.show',$value->id)}}">{{$key+1}}</a></td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td><a href="{{route('user.show',$value->id)}}"><center><button type="button" class="btn btn-primary">View</button></center></a></td>
                                <td> <form action= "{{route('user.destroy',$value->id)}}" method = "post">
                                        <input type = "hidden" name = "_method" value = "delete">
                                        {{csrf_field()}}
                                        <center><input type ="Submit" class="btn btn-danger" value = "Delete" ></center>
                                      </form></td>
                            </tr>
                            @endif
                           @endforeach
                       </tbody>
                   </table>
            </div>
        </div>
    </div>
</div>
@endsection