@extends('layouts.app')
<div style="background-color:cadetblue">
@section('content')
<div class="container">
        <div class=" col-md-12 col-sm-12 col-6"> 
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}" class="breadcrumb-link text-white">Back</a></li>
                    <li class="breadcrumb-item" aria-current="text-white">Comments</li>
                </ol>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Boarding Details</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('boarding.store')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('address_of_boarding') ? ' has-error' : '' }}">
                            <label for="address_of_boarding" class="col-md-4 control-label">Address_Of_Boarding</label>

                            <div class="col-md-6">
                                <input id="address_of_boarding" type="text" class="form-control" name="address_of_boarding" value="{{ old('address_of_boarding') }}"autofocus>

                                @if ($errors->has('address_of_boarding'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_of_boarding') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('near_to') ? ' has-error' : '' }}">
                            <label for="near_to" class="col-md-4 control-label">Near To</label>

                            <div class="col-md-6">
                                <input id="near_to" type="text" class="form-control" name="near_to"  value="{{ old('near_to') }}"autofocus>

                                @if ($errors->has('near_to'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('near_to') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="accomadation_type" class="col-md-4 control-label">Accomadation Type</label>
                            <div class="col-md-6">
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="accomadation_type" value="House" checked><span class="custom-control-label">House</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="accomadation_type" value="Room"><span class="custom-control-label">Room</span></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="available_for" class="col-md-4 control-label">Available For</label>
                            <div class="col-md-6">
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="available_for" value="Girls" checked><span class="custom-control-label">Girls</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="available_for" value="Boys"><span class="custom-control-label">Boys</span></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('number_of_boarders') ? ' has-error' : '' }}">
                            <label for="number_of_boarders" class="col-md-4 control-label">Number Of Boarders</label>

                            <div class="col-md-6">
                                <input id="number_of_boarders" type="number" min="0" class="form-control" name="number_of_boarders" value="{{ old('number_of_boarders') }}">

                                @if ($errors->has('number_of_boarders'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('number_of_boarders') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-6">Number Of Rooms and  facilities</label><br><br>
                            <div class="col-md-12" layout="row">
                                
                                <div class="col-md-6 offset-3" layout="column">
                                <div class="form-group{{ $errors->has('Attached_washroom') ? ' has-error' : '' }}">
                                        <label for="Attached_washroom" class="col-md-4 control-label">Attached Washroom</label>

                                        <div class="col-md-6">
                                            <input id="Attached_washroom" type="number" min="0" class="form-control" name="Attached_washroom" value="{{ old('Attached_washroom') }}">

                                            @if ($errors->has('Attached_washroom'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('Attached_washroom') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('Washrooms') ? ' has-error' : '' }}">
                                        <label for="Washrooms" class="col-md-4 control-label">Washrooms</label>

                                        <div class="col-md-6">
                                            <input id="Washrooms" type="number" min="0" class="form-control" name="Washrooms" value="{{ old('Washrooms') }}" >

                                            @if ($errors->has('Washrooms'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('Washrooms') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                    </div>
                                
                                    <div class="form-group{{ $errors->has('Bedrooms') ? ' has-error' : '' }}">
                                        <label for="Bedrooms" class="col-md-4 control-label">Bedrooms</label>

                                        <div class="col-md-6">
                                            <input id="Bedrooms" type="number" min="0" class="form-control" name="Bedrooms" value="{{ old('Bedrooms') }}">

                                            @if ($errors->has('Bedrooms'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('Bedrooms') }}</strong>
                                            </span>
                                            @endif

                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('Kitchen') ? ' has-error' : '' }}">
                                        <label for="Kitchen" class="col-md-4 control-label">Kitchen</label>

                                        <div class="col-md-6">
                                            <input id="Kitchen" type="number" min="0" class="form-control" name="Kitchen" value="{{ old('Kitchen') }}">

                                            @if ($errors->has('Kitchen'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('Kitchen') }}</strong>
                                            </span>
                                        @endif

                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('Chairs') ? ' has-error' : '' }}">
                                        <label for="Chairs" class="col-md-4 control-label">Chairs</label>

                                        <div class="col-md-6">
                                            <input id="Chairs" type="number" min="0" class="form-control" name="Chairs" value="{{ old('Chairs') }}">
                                            @if ($errors->has('Chairs'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('Chairs') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('Tables') ? ' has-error' : '' }}">
                                        <label for="Tables" class="col-md-4 control-label">Tables</label>

                                        <div class="col-md-6">
                                            <input id="Tables" type="number" min="0" class="form-control" name="Tables" value="{{ old('Tables') }}">
                                            @if ($errors->has('Tables'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('Tables') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('Fans') ? ' has-error' : '' }}">
                                        <label for="Fans" class="col-md-4 control-label">Fans</label>

                                        <div class="col-md-6">
                                            <input id="Fans" type="number" min="0" class="form-control" name="Fans" value="{{ old('Fans') }}">
                                            @if ($errors->has('Fans'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('Fans') }}</strong>
                                            </span>
                                        @endif

                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('Cupboards') ? ' has-error' : '' }}">
                                        <label for="Cupboards" class="col-md-4 control-label">Cupboards</label>

                                        <div class="col-md-6">
                                            <input id="Cupboards" type="number" min="0" class="form-control" name="Cupboards" value="{{ old('Cupboards') }}">
                                            @if ($errors->has('Cupboards'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('Cupboards') }}</strong>
                                            </span>
                                        @endif

                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('Double_Beds') ? ' has-error' : '' }}">
                                        <label for="DoubleBed" class="col-md-4 control-label">Double Bed</label>

                                        <div class="col-md-6">
                                            <input id="DoubleBed" type="number" min="0" class="form-control" name="Double_Beds" value="{{ old('Double_Beds') }}">
                                            @if ($errors->has('Double_Beds'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('Double_Beds') }}</strong>
                                            </span>
                                        @endif

                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('Single_Beds') ? ' has-error' : '' }}">
                                        <label for="SingleBed" class="col-md-4 control-label">Single Bed</label>

                                        <div class="col-md-6">
                                            <input id="SingleBed" type="number" min="0" class="form-control" name="Single_Beds" value="{{ old('Single_Beds') }}">
                                            @if ($errors->has('Single_Beds'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('Single_Beds') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                    </div>

                                </div>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="security_cam_available" class="col-md-4 control-label">Security Cam</label>
                            
                            <div class="col-md-6">
                                <select id="security_cam_available" class="form-control" name="security_cam_available" value="{{ old('security_cam_available') }}">
                                    <option value="" >--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <label>Select "Include" if the monthly boarding charge include mentioned payments below</label><br><br>
                        <div class="form-group">
                            
                            <label for="electricity_bill" class="col-md-4 control-label">Electricity Bill</label>
                            <div class="col-md-6">
                                <select id="electricity_bill" class="form-control" name="electricity_bill" value="{{ old('electricity_bill') }}">
                                    <option value="" disabled selected id="op1">--Select Type--</option>
                                    <option value="Include">Include</option>
                                    <option value="Not Include">Not Include</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Meals" class="col-md-4 control-label">Meals</label>
                            <div class="col-md-6">
                                <select id="Meals" class="form-control" name="Meals" value="{{ old('Meals') }}">
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Include">Include</option>
                                    <option value="Not Include">Not Include</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="Water" class="col-md-4 control-label">Water</label>
                            <div class="col-md-6">
                                <select id="Water" class="form-control" name="Water" value="{{ old('Water') }}">
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Include">Include</option>
                                    <option value="Not Include">Not Include</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('rent') ? ' has-error' : '' }}">
                            <label for="rent" class="col-md-4 control-label">Monthly Boarding Charges</label>

                            <div class="col-md-6">
                                <input id="rent" type="number" min="0" class="form-control" name="rent" value="{{ old('rent') }}">

                                @if ($errors->has('rent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rent') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('main_pic') ? ' has-error' : '' }}">
                            <label for="main_pic" class="col-md-4 control-label ">{{('Main Boarding Picture') }}</label>
    
                            <div class="col-md-6">
                                <input type="file" name="main_pic" id="main_pic" value="{{ old('main_pic') }}">

                                    @if ($errors->has('main_pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('main_pic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
    
                        <div class="form-group row" >
                            <label for="boarding_pics" class="col-md-4 control-label ">{{('Other Boarding Pictures') }}</label>
    
                            <div class="col-md-6">
                                <input type="file" name="img[]" id="img[]"  multiple="true">
                            </div>
                        </div>
    

                        <div class="form-group{{ $errors->has('rules') ? ' has-error' : '' }}">
                            <label for="rules" class="col-md-4 control-label">Rules and Conditions</label>

                            <div class="col-md-6">
                                <input id="rules" type="text" class="form-control" name="rules"  value="{{ old('rules') }}" autofocus>

                                @if ($errors->has('rules'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rules') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
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


