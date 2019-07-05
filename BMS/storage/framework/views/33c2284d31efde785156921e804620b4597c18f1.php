<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                
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
                                <th width="5">No</th>
                                <th>User Email</th></div>
                                <th>No of Comments</th>
                                <th>No of blocked comments</th>
                                <th>Block</th>
                            </tr>
                       </thead>
                       <tbody>
                           <?php $__currentLoopData = $comment_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                            <tr>
                                <td style="color:black"><?php echo e($key+1); ?></td></div>
                                <td style="color:black"><?php echo e($value->user_email); ?></td>
                                <td style="color:black"><?php echo e($value->no_of_comments); ?></td>
                                <td style="color:black"><?php echo e($value->no_of_blocked); ?></td>
                                <?php if($value->blocked==1): ?>
                                <td><h4><a href="<?php echo e(URL('/unblockuser'.$value->mail_id)); ?>"><button type="button" class="btn btn-danger">Unblock</button></a></h4></td>
                                <?php endif; ?>

                                <?php if($value->blocked==0): ?>
                                <td><h4><a href="<?php echo e(URL('/blockuser'.$value->mail_id)); ?>"><button type="button" class="btn btn-primary">Block</button></a></h4></td>
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