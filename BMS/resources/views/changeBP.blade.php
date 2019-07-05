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
                <div class="panel-heading">Change Boarding Picture</div>

                
                
                
                <table class="table table hover table-bordered">
                       <thead>
                            <tr>
                                <th width="5">Picture</th>
                                <th width="5">Change Picture</th>
                                <th width="5">Remove Picture</th>
                            </tr>
                       </thead>
                       <tbody>
                       @foreach($data as $data1)
                            <tr>
                                <td> <img src="/uploads/boardingpic/{{$data1->picture}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/boardingpic'.$data1->id)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="boarding_pic">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit"  class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                @if($data1->main_pic==0)
                                <td>
                                <h4><a href="{{URL('/deletePicture'.$data1->id)}}"><center><button type="button" class="btn btn-danger">Delete</button></center></a></h4>
                                </td>
                                @endif

                                @if($data1->main_pic==1)
                                <td style="color:black">
                                <h4>
                                <b>Main Picture</b>
                                </h4>
                                <h6>
                                This picture can only be replaced
                                </td>
                                @endif
                            </tr>
                        @endforeach    
                           
                           
                       </tbody>
                         </table>
                        @foreach($data as $data2)
                        @endforeach
                       <h3><center><a href ="{{URL('/addnewpicture'.$data2->boarding_id)}}"><button class="btn btn-primary" >Add new Picture</button></a></center></h3>
                        


                

                
            </div>
        </div>
    </div>
</div>
@endsection