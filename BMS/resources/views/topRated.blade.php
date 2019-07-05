@extends('layouts.app')

@section('content')
<div class="container">

    <div class=" col-md-12 col-sm-12 col-6"> 
        <div class="page-breadcrumb">
            <nav >
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="breadcrumb-link text-light">home</a></li>
                    <li class="breadcrumb-item" aria-current="text-white ">Top Rated</li>

                    
                </ol>
                <br> 
            </nav>
        </div>
    </div>
</div>
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-15">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Top Rated Boardings</h4>
                    <div class="" align="right">
                        <a href="{{url ('/AllBoardings')}}" title="Show all"><button class="btn btn-primary" > Show All </button></a>
                    </div>
                </div>   
                
                @foreach($data as $att)

                <table class="table table-hover text-centered">
                <tbody>
                    <div class="panel panel-default p-3 mb-2">
                        <h5 class="panel-header text-dark mb-1">Boarding No : {{$att->id}} </h5>
                        
                        <img src="/uploads/boardingpic/{{$att->picture}}" style="width:150px; border: 2px solid black; height:150px; float:left;  margin-right:25px;">
                        <div class="text-dark">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-fw fa-map-marker-alt mr-3"></i>Address Of Boarding :- {{$att->address_of_boarding}}</li>
                                <li class="mb-2"><i class="fas fa-bed mr-3"></i>Accomadation Type :- {{$att->accomadation_type}}</li>
                                <li class="mb-2"><i class="fas fa-male mr-4"></i>    Available For :- {{$att->available_for}}</li>
                                <li class="mb-2"><i class="fas fa-window-maximize mr-3"></i>Number Of Boarders :- {{$att->number_of_boarders}}</li>
                                <li class="mb-2"><i class="fas fa-money-bill-alt mr-2"></i>Boarding Charges :- {{$att->rent}}</li>
                                <li class="mb-2"><i class="fas fa-star"></i> Rating :- {{$att->rate}}/5</li>
                                <br>
                                <br><a href="{{URL('/viewBoarding'.$att->id)}}" ><div align="right"><button type="button" class="btn btn-dark">View Boarding</button></div><a>
                            </ul>
                        </div>
                    
                    {{-- td style="width:90%"><a href="{{ URL('/viewBoarding'.$att->boarding_no) }}"><button type="button" class="btn btn-primary">View Boarding</button><a></td --}}
                    </div>
                </tbody>
                </table> 
                
                
                @endforeach
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection