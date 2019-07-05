@extends('layouts.app')
<div style="background-color:cadetblue">

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Boarding Details</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('boarding.update',$boarding->id)}}">
                        <input type = "hidden" name = "_method" value = "put">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('address_of_boarding') ? ' has-error' : '' }}">
                            <label for="address_of_boarding" class="col-md-4 control-label">Address_Of_Boarding</label>

                            <div class="col-md-6">
                                <input id="address_of_boarding" type="text" class="form-control" name="address_of_boarding" value ="{{$boarding->address_of_boarding}}" required autofocus>

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
                                <input id="near_to" type="text" class="form-control" name="near_to" value ="{{$boarding->near_to}}"required autofocus>

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
                                    <label><input type="radio" name="accomadation_type" value="House" {{($boarding->accomadation_type == "House")? 'checked':''}}>House</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="accomadation_type" value="Room" {{($boarding->accomadation_type == "Room")? 'checked':''}}>Room</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="available_for" class="col-md-4 control-label">Available For</label>
                            <div class="col-md-6">
                                <div class="radio">
                                    <label><input type="radio" name="available_for" value="Girls" {{($boarding->available_for == "Girls")? 'checked':''}}>Girls</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="available_for" value="Boys" {{($boarding->available_for == "Boys")? 'checked':''}}>Boys</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('number_of_boarders') ? ' has-error' : '' }}">
                            <label for="number_of_boarders" class="col-md-4 control-label">Number Of Boarders</label>

                            <div class="col-md-6">
                                <input id="number_of_boarders" type="number" class="form-control" name="number_of_boarders" value ="{{$boarding->number_of_boarders}}" required>

                                @if ($errors->has('number_of_boarders'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('number_of_boarders') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Number Of Rooms and  facilities</label>
                            <div class="col-md-12" layout="row">
                                <div class="col-md-3" layout="column">
                                </div>
                                <div class="col-md-6" layout="column">
                                <div class="form-group">
                                        <label for="Attached_washroom" class="col-md-4 control-label">Attached Washroom</label>

                                        <div class="col-md-6">
                                            <input id="Attached_washroom" type="number" class="form-control" name="Attached_washroom"  value= "{{$room[0]['number_of_rooms']}}" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Washrooms" class="col-md-4 control-label">Washrooms</label>

                                        <div class="col-md-6">
                                            <input id="Washrooms" type="number" class="form-control" name="Washrooms" value ="{{$room[3]['number_of_rooms']}}" required>
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="Bedrooms" class="col-md-4 control-label">Bedrooms</label>

                                        <div class="col-md-6">
                                            <input id="Bedrooms" type="number" class="form-control" name="Bedrooms" value ="{{$room[1]['number_of_rooms']}}"required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Kitchen" class="col-md-4 control-label">Kitchen</label>

                                        <div class="col-md-6">
                                            <input id="Kitchen" type="number" class="form-control" name="Kitchen" value ="{{$room[2]['number_of_rooms']}}"required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Chairs" class="col-md-4 control-label">Chairs</label>

                                        <div class="col-md-6">
                                            <input id="Chairs" type="number" class="form-control" name="Chairs" value ="{{$facility[0]['number_of_facility']}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Tables" class="col-md-4 control-label">Tables</label>

                                        <div class="col-md-6">
                                            <input id="Tables" type="number" class="form-control" name="Tables" value ="{{$facility[4]['number_of_facility']}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Fans" class="col-md-4 control-label">Fans</label>

                                        <div class="col-md-6">
                                            <input id="Fans" type="number" class="form-control" name="Fans" value ="{{$facility[2]['number_of_facility']}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Cupboards" class="col-md-4 control-label">Cupboards</label>

                                        <div class="col-md-6">
                                            <input id="Cupboards" type="number" class="form-control" name="Cupboards" value ="{{$facility[5]['number_of_facility']}}" required >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="DoubleBed" class="col-md-4 control-label">Double Bed</label>

                                        <div class="col-md-6">
                                            <input id="DoubleBed" type="number" class="form-control" name="Double_Beds" value ="{{$facility[1]['number_of_facility']}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="SingleBed" class="col-md-4 control-label">Single Bed</label>

                                        <div class="col-md-6">
                                            <input id="SingleBed" type="number" class="form-control" name="Single_Beds" value ="{{$facility[3]['number_of_facility']}}" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3" layout="column">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="security_cam_available" class="col-md-4 control-label">Security Cam</label>
                            <div class="col-md-6">
                                <select id="security_cam_available" class="form-control" name="security_cam_available" required>
                                    <option value="Available" {{($boarding->security_cam_available == "Available")? 'selected':''}}>Available</option>
                                    <option value="Not Available"{{($boarding->security_cam_available == "Not Available")? 'selected':''}}>Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="electricity_bill" class="col-md-4 control-label">Electricity Bill</label>
                            <div class="col-md-6">
                                <select id="electricity_bill" class="form-control" name="electricity_bill" required>
                                    <option value="Include" {{($charge[0]['availability'] == "Include")? 'selected':''}}>Include</option>
                                    <option value="Not Include" {{($charge[0]['availability'] == "Not Include")? 'selected':''}} >Not Include</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Meals" class="col-md-4 control-label">Meals</label>
                            <div class="col-md-6">
                                <select id="Meals" class="form-control" name="Meals" required>
                                    <option value="Include" {{($charge[1]['availability']  == "Include")? 'selected':''}}>Include</option>
                                    <option value="Not Include"{{($charge[1]['availability']  == "Not Include")? 'selected':''}}>Not Include</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="Water" class="col-md-4 control-label">Water</label>
                            <div class="col-md-6">
                                <select id="Water" class="form-control" name="Water" required>
                                    <option value="Include" {{($charge[2]['availability']  == "Include")? 'selected':''}}>Include</option>
                                    <option value="Not Include" {{($charge[2]['availability']  == "Not Include")? 'selected':''}}>Not Include</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('rent') ? ' has-error' : '' }}">
                            <label for="rent" class="col-md-4 control-label">Monthly Boarding Charges</label>

                            <div class="col-md-6">
                                <input id="rent" type="number" class="form-control" name="rent" value ="{{$boarding->rent}}"required>

                                @if ($errors->has('rent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rent') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                           <div class="form-group{{ $errors->has('rules') ? ' has-error' : '' }}">
                            <label for="rules" class="col-md-4 control-label">Rules and Conditions</label>

                            <div class="col-md-6">
                                <input id="rules" type="text" class="form-control" name="rules"  value ="{{$boarding->rules}}" autofocus>

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
                                    Update
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
