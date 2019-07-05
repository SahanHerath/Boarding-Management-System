@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">you are in!</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success">
                        <p>You are logged in as USERS</p>
                    </div>
                    <div class="user-avatar text-center d-block">
                        <a href="{{url('/Profile')}}" class="btn btn-light"><img src="/uploads/profilepics/{{Auth::user()->profilepic}}" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                        <p class="text-dark ">{{ Auth::user()->name }}>>></p></a>
                    </div>
                   
                </div>
                
            </div>
            <br><br><br>
        </div>
    </div>
</div>
@endsection
