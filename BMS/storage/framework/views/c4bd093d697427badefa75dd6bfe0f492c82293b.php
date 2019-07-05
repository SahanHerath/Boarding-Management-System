<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    <h4><center>Comments</center></h4>
                    
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
                   <table class="table table hover table-bordered text-dark">
                       <thead>
                            <tr>
                                <th><center>No</th>
                                <th width="5"><center>Boarding No.</center></th>
                                <th><center>User Email</center></th>
                                <th><center>Comment</center></th>
                                <th><center>Block</center></th>
                            </tr>
                       </thead>
                       <tbody>
                           <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key+1); ?></td>
                                <td><?php echo e($value->boarding_id); ?></td>
                                <td><?php echo e($value->user_email); ?></td>
                                <td><?php echo e($value->comment); ?></td>
                                <?php if($value->blocked==1): ?>
                                <td><center><a href="<?php echo e(url('/deleteComment',$value->id)); ?>"><button type="button" class="btn btn-danger">Blocked</button></a></center></td>
                                <?php endif; ?>

                                <?php if($value->blocked==0): ?>
                                <td><a href="<?php echo e(url('/deleteComment',$value->id)); ?>"><button type="button" class="btn btn-primary">Delete</button></a></center></td>
                                <?php endif; ?>
                            </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </tbody>
                   </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>