@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Complaint</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/newComplain">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('user_mail') ? ' has-error' : '' }}">
                            <label for="user_mail" class="col-md-4 control-label">User Email</label>

                            <div class="col-md-6">
                                <input id="user_mail" type="text" class="form-control" name="user_mail" value="{{ old('username') }}"  autofocus>

                                @if ($errors->has('user_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @foreach($data as $data7)
                        <input type="hidden" id="id" name="id" value="{{$data7->id}}">
                        @endforeach

                        <div class="form-group{{ $errors->has('complain_about') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label for="Water" class="col-md-4 control-label">Complaint About</label>
                            <div class="col-md-6">
                                <select id="complain_about" class="form-control" name="complain_about" >
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Rooms">Rooms</option>
                                    <option value="Facilities">Facilities</option>
                                    <option value="Charges">Charges</option>
                                    <option value="Owner">Owner</option>
                                    <option value="Venue">Venue</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        </div>

                        <div class="form-group{{ $errors->has('complain') ? ' has-error' : '' }}">
                        <div class="form-group">
                        <label for="complain" class="col-md-4 control-label">Complaint</label>
                        <div class="col-md-6">
                        <textarea name='complain' cols='50' rows='10' id='complain'></textarea>
                        </div>
                        </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection