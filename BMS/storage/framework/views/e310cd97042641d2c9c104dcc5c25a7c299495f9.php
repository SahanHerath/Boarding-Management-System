<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-8 offset-2">
            <div class="panel panel-default">

                <h4><center class="text-dark">Owner</center></h4>
                   <table class="table table hover table-bordered text-dark">
                       <thead>
                            <tr>
                                <th width="5"><center>No.</center></th>
                                <th><center>Member Name</center></th>
                                <th><center>Email</center></th>
                                <th><center>View Details</center></th>
                                <th><center>Delete Details</center></th>
                            </tr>
                       </thead>
                       <tbody>
                           <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php if($value->admin== 0): ?>
                            <tr>
                                <td><a href = "<?php echo e(route('user.show',$value->id)); ?>"><?php echo e($key+1); ?></a></td>
                                <td><?php echo e($value->name); ?></td>
                                <td><?php echo e($value->email); ?></td>
                                <td><a href="<?php echo e(route('user.show',$value->id)); ?>"><center><button type="button" class="btn btn-primary">View</button></center></a></td>
                                <td> <form action= "<?php echo e(route('user.destroy',$value->id)); ?>" method = "post">
                                        <input type = "hidden" name = "_method" value = "delete">
                                        <?php echo e(csrf_field()); ?>

                                        <center><input type ="Submit" class="btn btn-danger" value = "Delete" ></center>
                                      </form></td>
                            </tr>
                            <?php endif; ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </tbody>
                   </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>