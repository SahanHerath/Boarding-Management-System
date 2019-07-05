@extends('layouts.app')

@section('content')
<div class="panel panel-primary col-md-3"></div>
<div class="panel panel-primary col-md-6">
    <div class="panel-heading">Boardings</div>
    <div class="panel-body">
    <div class="list-group">
    <ul class="list-group">
    @foreach($boardings as $boarding)
    <li class="list-group-item">{{$boarding->boarding_no}}</li>
    <li class="list-group-item">{{$boarding->address_of_boarding}}</li>
    @endforeach
  </ul>
  </div>
    </div>
</div>
@endsection

