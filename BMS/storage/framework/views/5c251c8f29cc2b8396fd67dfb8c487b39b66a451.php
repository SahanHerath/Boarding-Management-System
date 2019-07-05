<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Complaint</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/newComplain">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('user_mail') ? ' has-error' : ''); ?>">
                            <label for="user_mail" class="col-md-4 control-label">User Email</label>

                            <div class="col-md-6">
                                <input id="user_mail" type="text" class="form-control" name="user_mail" value="<?php echo e(old('username')); ?>"  autofocus>

                                <?php if($errors->has('user_email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('user_email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data7): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="hidden" id="id" name="id" value="<?php echo e($data7->id); ?>">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="form-group<?php echo e($errors->has('complain_about') ? ' has-error' : ''); ?>">
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

                        <div class="form-group<?php echo e($errors->has('complain') ? ' has-error' : ''); ?>">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>