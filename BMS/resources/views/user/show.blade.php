@extends('layouts.app')
<div style="background-color:cadetblue">
@section('content')
<div class="container">
      <div class=" col-md-12 col-sm-12 col-6"> 
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/owners') }}" class="breadcrumb-link text-white">Back</a></li>
                    <li class="breadcrumb-item" aria-current="text-white">User Details</li>
                </ol>
                <br>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-4 offset-3 text-dark">
          <center><img src="/uploads/profilepics/{{$user->profilepic}}" style="width:150px; height:150px; float:center; border-radius:50%; margin-right:75px;"></center>
        </div>
        
        <form action="{{route('user.show',$user->id)}}"></form>
        <br>
        <div class="col-xl-4 offset-1"> 
        <div class="card  text-dark">
            <table class="table table-user-information">
              <h2><center>{{$user->username }}</center></h2>
              <tbody>
              
                <tr>
                  <td><h4>Name:</td></h4> 
                  <td><h4>{{$user->name}}</td></h4>
                </tr>
                <tr>
                  <td><h4>Address:</h4></td>
                  <td><h4>{{$user->address}}</h4></td>
                </tr>
                <tr>
                  <td><h4>NIC Number:</h4></td>
                  <td><h4>{{$user->nicno}}</h4></td>
                </tr>
              
                
                <tr>
                  <td><h4>Contact No:</h4></td>
                  <td><h4>{{$user->contactno}}</h4></td>
                </tr>
                  
                <tr>
                  <td><h4>Email:</h4></td>
                  <td><h4><a href="">{{$user->email}}</a></h4></td>
                </tr>
              
              </tbody>
            </table>
        </div>
        </div>

        
        <div class="card text-dark">
          <h3><center>Boarding Details</center></h3>
          
            <table class="table table-user-information text-dark">
              <tbody>
                @foreach ($boardings as $boarding)
                <tr>
                  <td><h4>Boarding {{$boarding->address_of_boarding}}</h4></td>
                  <td><a href="{{route('boarding.show',$boarding->id)}}"><button type="button" class="btn btn-primary">View</button></a></td>
                  <td><form action= "{{route('boarding.destroy',$boarding->id)}}" method = "post">
                    <input type = "hidden" name = "_method" value = "delete">
                    {{csrf_field()}}
                    <input type ="submit" class="btn btn-danger" value = "Remove" >
                  </form></td>
                </tr>
                @endforeach
              </tbody>
            </table>
        
    </div> 
</div>

@endsection