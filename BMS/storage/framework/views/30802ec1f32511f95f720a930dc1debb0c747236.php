<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Complaints</div>
                
                
                <?php if(Session::has('flash_message')): ?>  
                <div class="alert alert-success">
                    <span class="glyphicon glyphicon-ok"></span>
                    <?php echo session('flash_message'); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                </div>
                 <?php endif; ?>

            <?php if(Session::has('warning_message')): ?>
                    <div class="alert alert-warning">
                        <span class="glyphicon glyphicon-ok"></span>
                        <?php echo session('warning_message'); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                    </div>
            <?php endif; ?>
                <table class="table table hover table-bordered">
                       <thead>
                            <tr>
                                <th width="5">Complaint No</th>
                                <th>Boarding No</th>
                                <th> User Email</th>
                                <th>Complaint About</th>
                                <th>Complaint</th>
                                <th>State</th>
                            </tr>
                       </thead>
                       <tbody>
                           <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="color:black"><?php echo e($key+1); ?></td>
                                <td style="color:black"><?php echo e($value->boarding_no); ?></td>
                                <td style="color:black"><?php echo e($value->user_email); ?></td>
                                <td style="color:black"><?php echo e($value->complain_about); ?></td>
                                <td style="color:black"><?php echo e($value->complain); ?></td>
                                <?php if($value->state==0): ?>
                                <td><h4><a href="<?php echo e(URL('/receiveComplain'.$value->complain_id)); ?>"><button type="button" class="btn btn-info">Received</button></a></h4></td>
                                <?php endif; ?>

                                <?php if($value->state==1): ?>
                                <td><h4><a href="<?php echo e(URL('/solvedComplain'.$value->complain_id)); ?>"><button type="button" class="btn btn-success">Solved</button></a></h4></td>
                                <?php endif; ?>

                                <?php if($value->state==2): ?>
                                <td><h4><a href="<?php echo e(URL('/deleteComplain'.$value->complain_id)); ?>"><button type="button" class="btn btn-danger">Delete</button></a></h4></td>
                                <?php endif; ?>
                                
                            </tr>
                            
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                       </tbody>
                       </table>
                
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>