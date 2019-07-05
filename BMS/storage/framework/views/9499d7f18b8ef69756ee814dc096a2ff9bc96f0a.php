<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Admins</div>

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
                                 <td> <form action= "<?php echo e(route('user.destroy',$value->id)); ?>" method = "post">
                                        <input type = "hidden" name = "_method" value = "delete">
                                        <?php echo e(csrf_field()); ?>

                                        <center><input type ="Submit" class="btn btn-danger" value = "Remove" ></center> 
                                      </form></td>
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
@endsectio
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>