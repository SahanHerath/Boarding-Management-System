<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="alert alert-success">
                        <p>You are logged in as ADMINISTRATOR</p>
                    </div>
                    <h4><center>Owner</center></h4>
                   <table class="table table hover table-bordered">
                       <thead>
                            <tr>
                                <th width="5">No.</th>
                                <th>Member Name</th>
                                <th>Email</th>
                                <th>View Details</th>
                                <th>Delete Details</th>
                            </tr>
                       </thead>
                       <tbody>
                           <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php if($value->admin== 0): ?>
                            <tr>
                                <td><a href = "<?php echo e(route('user.show',$value->id)); ?>"><?php echo e($key+1); ?></a></td>
                                <td><?php echo e($value->name); ?></td>
                                <td><?php echo e($value->email); ?></td>
                                <td><a href="<?php echo e(route('user.show',$value->id)); ?>">View</a></td>
                                <td> <form action= "<?php echo e(route('user.destroy',$value->id)); ?>" method = "post">
                                        <input type = "hidden" name = "_method" value = "delete">
                                        <?php echo e(csrf_field()); ?>

                                        <input type ="Submit" value = "Delete" >
                                      </form></td>
                            </tr>
                            <?php endif; ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </tbody>
                   </table>
                   <h4><center>Admin</center></h4>
                   <table class="table table hover table-bordered">
                        <thead>
                             <tr>
                                 <th width="5">No.</th>
                                 <th>Member Name</th>
                                 <th>Email</th>
                             </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($value->admin== 1): ?>
                             <tr>
                                 <td><a href = <?php echo e(route('user.show',$value->id)); ?>><?php echo e($key+1); ?></a></td>
                                 <td><?php echo e($value->name); ?></td>
                                 <td><?php echo e($value->email); ?></td>
                             </tr>
                             <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <h3><center><a href ="<?php echo e(route('register')); ?>">Add new Admin</a></center></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>