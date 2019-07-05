@extends('layouts.app')

@section('content')
<div class="container">
        <div class=" col-md-12 col-sm-12 col-6"> 
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="breadcrumb-link text-white">home</a></li>
                    <li class="breadcrumb-item"><a href="/Profile" class="breadcrumb-link text-white">Profile</a></li>
                    <li class="breadcrumb-item" aria-current="text-white">Change boarding Pictures</li>
                </ol>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Boarding Picture</div>

                <table>
                <tbody>
                <tr>
                <td>
                @foreach($data as $data1)
                <img src="/uploads/boardingpic/{{$data1->picture}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;">
                @endforeach
                </td>
               </tr>
                
                <tr> 
                <td>
                    
                <form enctype="multipart/form-data" action="{{URL('/addnewpic'.$data1->boarding_id)}}" method="POST">
                <center><label>Add This Image</label>
                <input type="file" name="boarding_pic">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit"  class="btn btn-sm btn-primary">
                <center>
                </form>
                
                </td>
                </tr>
                
                </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
@endsection