@extends('layouts.app');
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

@section('content')
<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="edit.html" >Edit Profile</A>
           <br>
<p class=" text-info"> </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{{$username}}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                
              
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name:</td>
                        <td>{{$name}}</td>
                      </tr>
                      <tr>
                        <td>Address:</td>
                        <td>{{$address}}</td>
                      </tr>
                      <tr>
                        <td>NIC Number:</td>
                        <td>{{$nicno}}</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Contact No:</td>
                        <td>{{$contactno}}</td>
                      </tr>
                        
                      <tr>
                        <td>Email:</td>
                        <td><a href="">{{$email}}</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>{{$contactno}}</td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">Boarding1</a>
                  <a href="#" class="btn btn-primary">Boarding2</a>
                </div>
              </div>
            </div>
         </div>
        </div>
      </div>
    </div>
    @endsection