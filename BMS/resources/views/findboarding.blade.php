@extends('layouts.app')

@section('content')
<div class="container">
<div class=" col-md-12 col-sm-12 col-6"> 
            <div class="page-breadcrumb">
                <nav >
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="breadcrumb-link text-light ">home</a></li>
                        <li class="breadcrumb-item" aria-current="text-white ">Find Boarding</li>
                    </ol>
                </nav>
            </div>
        </div></div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Find Boarding</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/find" enctype="multipart/form-data" >
                        {{ csrf_field() }}

                        
                        
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


                        <div class="form-group">
                            <label for="numbers_of_boarders" class="col-md-4 control-label">Number of Boarders</label>
                            <div class="col-md-6">
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="numbers_of_boarders" value="a1" checked><span class="custom-control-label">0-5</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="numbers_of_boarders" value="a2"><span class="custom-control-label">5-10</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="numbers_of_boarders" value="a3"><span class="custom-control-label">10-20</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="numbers_of_boarders" value="a4"><span class="custom-control-label">more than 20</span></label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="rent" class="col-md-4 control-label">Rent for one person</label>
                            <div class="col-md-6">
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="rent" value="b1" checked><span class="custom-control-label">below 1500</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="rent" value="b2"><span class="custom-control-label">1500-2500</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="rent" value="b3"><span class="custom-control-label">over 2500</span></label>
                                </div>
                               
                            </div>
                        </div>

                        

                        


                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Search
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