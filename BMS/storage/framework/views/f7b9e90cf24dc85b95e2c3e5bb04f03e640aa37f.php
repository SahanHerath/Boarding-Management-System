<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Boarding Details</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/confirm">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('address_of_boarding') ? ' has-error' : ''); ?>">
                            <label for="address_of_boarding" class="col-md-4 control-label">Address_Of_Boarding</label>

                            <div class="col-md-6">
                                <input id="address_of_boarding" type="text" class="form-control" name="address_of_boarding" required autofocus>

                                <?php if($errors->has('address_of_boarding')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('address_of_boarding')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('near_to') ? ' has-error' : ''); ?>">
                            <label for="near_to" class="col-md-4 control-label">Near To</label>

                            <div class="col-md-6">
                                <input id="near_to" type="text" class="form-control" name="near_to" required autofocus>

                                <?php if($errors->has('near_to')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('near_to')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="accomadation_type" class="col-md-4 control-label">Accomadation Type</label>
                            <div class="col-md-6">
                                <div class="radio">
                                    <label><input type="radio" name="accomadation_type" value="House" checked>House</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="accomadation_type" value="Room">Room</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="available_for" class="col-md-4 control-label">Available For</label>
                            <div class="col-md-6">
                                <div class="radio">
                                    <label><input type="radio" name="available_for" value="Girls" checked>Girls</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="available_for" value="Boys">Boys</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('number_of_boarders') ? ' has-error' : ''); ?>">
                            <label for="number_of_boarders" class="col-md-4 control-label">Number Of Boarders</label>

                            <div class="col-md-6">
                                <input id="number_of_boarders" type="number" class="form-control" name="number_of_boarders" required>

                                <?php if($errors->has('number_of_boarders')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('number_of_boarders')); ?></strong>
                                    </span>
                                <?php endif; ?>
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
                                            <input id="Attached_washroom" type="number" class="form-control" name="Attached_washroom" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Washrooms" class="col-md-4 control-label">Washrooms</label>

                                        <div class="col-md-6">
                                            <input id="Washrooms" type="number" class="form-control" name="Washrooms" >
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="Bedrooms" class="col-md-4 control-label">Bedrooms</label>

                                        <div class="col-md-6">
                                            <input id="Bedrooms" type="number" class="form-control" name="Bedrooms" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Kitchen" class="col-md-4 control-label">Kitchen</label>

                                        <div class="col-md-6">
                                            <input id="Kitchen" type="number" class="form-control" name="Kitchen" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Fans" class="col-md-4 control-label">Fans</label>

                                        <div class="col-md-6">
                                            <input id="Fans" type="number" class="form-control" name="Fans" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Cupboards" class="col-md-4 control-label">Cupboards</label>

                                        <div class="col-md-6">
                                            <input id="Cupboards" type="number" class="form-control" name="Cupboards" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Chairs" class="col-md-4 control-label">Chairs</label>

                                        <div class="col-md-6">
                                            <input id="Chairs" type="number" class="form-control" name="Chairs" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Tables" class="col-md-4 control-label">Tables</label>

                                        <div class="col-md-6">
                                            <input id="Tables" type="number" class="form-control" name="Tables" >
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
                                <select id="security_cam_available" class="form-control" name="security_cam_available">
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Include">Available</option>
                                    <option value="Not Include">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="electricity_bill" class="col-md-4 control-label">Electricity Bill</label>
                            <div class="col-md-6">
                                <select id="electricity_bill" class="form-control" name="electricity_bill">
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Include">Include</option>
                                    <option value="Not Include">Not Include</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Meals" class="col-md-4 control-label">Meals</label>
                            <div class="col-md-6">
                                <select id="Meals" class="form-control" name="Meals">
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Include">Include</option>
                                    <option value="Not Include">Not Include</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="Water" class="col-md-4 control-label">Water</label>
                            <div class="col-md-6">
                                <select id="Water" class="form-control" name="Water">
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Include">Include</option>
                                    <option value="Not Include">Not Include</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('rent') ? ' has-error' : ''); ?>">
                            <label for="rent" class="col-md-4 control-label">Monthly Boarding Charges</label>

                            <div class="col-md-6">
                                <input id="rent" type="number" class="form-control" name="rent" required>

                                <?php if($errors->has('rent')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('rent')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <center><label for="boarding_pics" class="col-md-4 control_label "><?php echo e(('Boarding Picture')); ?></label></center>
    
                            <div class="col-md-6">
                                <input type="file" name="boarding_pics" id="boarding_pics">
                            </div>
                        </div>

                           <div class="form-group<?php echo e($errors->has('rules') ? ' has-error' : ''); ?>">
                            <label for="rules" class="col-md-4 control-label">Rules and Conditions</label>

                            <div class="col-md-6">
                                <input id="rules" type="text" class="form-control" name="rules"  autofocus>

                                <?php if($errors->has('rules')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('rules')); ?></strong>
                                    </span>
                                <?php endif; ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>