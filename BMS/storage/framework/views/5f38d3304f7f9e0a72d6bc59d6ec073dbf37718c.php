<?php $__env->startSection('content'); ?>
<div class="container">
        <div class=" col-md-12 col-sm-12 col-6"> 
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>" class="breadcrumb-link text-white">Back</a></li>
                    <li class="breadcrumb-item" aria-current="text-white">Select Boarding</li>
                </ol>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User comment</div>
                
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
                                <th width="5"><center>No</center></th>
                                <th><center>User Email</center></th></div>
                                <th><center>No of Comments</center></th>
                                <th><center>No of blocked comments</center></th>
                                <th><center>Block</center></th>
                            </tr>
                       </thead>
                       <tbody>
                           <?php $__currentLoopData = $comment_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                            <tr>
                                <td style="color:black"><center><?php echo e($key+1); ?></center></td></div>
                                <td style="color:black"><center><?php echo e($value->user_email); ?></center></td>
                                <td style="color:black"><center><?php echo e($value->no_of_comments); ?></center></td>
                                <td style="color:black"><center><?php echo e($value->no_of_blocked); ?></center></td>
                                <?php if($value->blocked==1): ?>
                                <td><h4><a href="<?php echo e(URL('/unblockuser'.$value->mail_id)); ?>"><button type="button" class="btn btn-danger"><center>Unblock</center></button></a></h4></td>
                                <?php endif; ?>

                                <?php if($value->blocked==0): ?>
                                <td><h4><a href="<?php echo e(URL('/blockuser'.$value->mail_id)); ?>"><button type="button" class="btn btn-primary"><center>Block</center></button></a></h4></td>
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