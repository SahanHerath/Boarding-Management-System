<?php $__env->startSection('content'); ?>
<div class="container">
    <div class=" col-md-12 col-sm-12 col-6"> 
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>" class="breadcrumb-link text-white">Back</a></li>
                    <li class="breadcrumb-item" aria-current="text-white">Admins</li>
                </ol>
                <br>
            </div>
        </div>
</div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Admins</div> -->

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

                <h4><center class="text-dark">Admin</center></h4>
                   <table class="table table hover table-bordered text-dark">
                        <thead>
                             <tr>
                                 <th width="5"><center>No.</center></th>
                                 <th><center>Member Name</center></th>
                                 <th><center>Email</center></th>
                                 <th><center>Remove Admin</center></th>
                             </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($value->admin== 1): ?>
                             <tr>
                                 <td><center><?php echo e($key+1); ?></center></td>
                                 <td><center><?php echo e($value->name); ?></center></td>
                                 <td><center><?php echo e($value->email); ?></center></td>
                                 <?php if($value->id==1): ?>
                                 <td><center>Super Admin</center></td>
                                 <?php endif; ?>
                                 
                                 
                                 <?php if($value->id!=1): ?>
                                 <td> <form action= "<?php echo e(route('user.destroy',$value->id)); ?>" method = "post">
                                        <input type = "hidden" name = "_method" value = "delete">
                                        <?php echo e(csrf_field()); ?>

                                        <center><input type ="Submit" class="btn btn-danger" value = "Remove" ></center> 
                                      </form></td>
                                <?php endif; ?>
                             </tr>
                             <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <h3><center><a href ="<?php echo e(route('register')); ?>"><button class="btn btn-primary" >Add new Admin</button></a></center></h3>
            </div>
        </div>
    </div>
</div>
<br>
<br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>