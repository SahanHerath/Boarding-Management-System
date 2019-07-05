@extends('layouts.app')

@section('content')
<div class="container">
        <div class=" col-md-12 col-sm-12 col-6"> 
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}" class="breadcrumb-link text-white">Back</a></li>
                    <li class="breadcrumb-item" aria-current="text-white">Boarding Ratings</li>
                </ol>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body text-dark">
                    <h4><center>Ratings of boarding</center></h4>
                    
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
                   <table class="table table hover table-bordered text-dark">
                       <thead>
                            <tr>
                                <th><center>No</th>
                                <th width="5"><center>Boarding No.</center></th>
                                <th><center>Address of Boarding</center></th>
                                <th><center>Rating(5)</center></th>
                                
                            </tr>
                       </thead>
                       <tbody>
                           @foreach($data as $key =>$value)
                            <tr>
                                <td><center>{{$key+1}}</center></td>
                                <td><center>{{$value->boarding_id}}</center></td>
                                <td><center>{{$value->address_of_boarding}}</center></td>
                                <td><center>{{$value->rate}}</center></td>
                                
                            </tr>
                           @endforeach
                       </tbody>
                   </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection