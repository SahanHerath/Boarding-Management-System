<?php $__env->startSection('content'); ?>
<div class="container">
        <div class=" col-md-12 col-sm-12 col-6"> 
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>" class="breadcrumb-link text-white">Back</a></li>
                    <li class="breadcrumb-item" aria-current="text-white">Comments</li>
                </ol>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body text-dark">
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
                                <td><center><?php echo e($key+1); ?></center></td>
                                <td><center><?php echo e($value->boarding_id); ?></center></td>
                                <td><center><?php echo e($value->user_email); ?></center></td>
                                <td><center><?php echo e($value->comment); ?></center></td>
                                <?php if($value->blocked==1): ?>
                                <td><center><a href="<?php echo e(url('/deleteComment',$value->id)); ?>"><center><button type="button" class="btn btn-danger">Blocked</button></a></center></td>
                                <?php endif; ?>

                                <?php if($value->blocked==0): ?>
                                <td><a href="<?php echo e(url('/deleteComment',$value->id)); ?>"><center><button type="button" class="btn btn-primary">Delete</button></a></center></td>
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