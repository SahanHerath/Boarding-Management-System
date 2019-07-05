<?php echo e($users); ?>

<hr>

<?php $__env->startSection('content'); ?>
    <table border = "1" >
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td>  <?php echo e($user->name); ?></td>
      <td>  <?php echo e($user->email); ?></td>
      <td>
          <form action= "<?php echo e(route('user.destroy',$student->id)); ?>" method = "post">
            <input type = "hidden" name = "_method" value = "delete">
            <?php echo e(csrf_field()); ?>

            <input type ="Submit" value = "Delete" >
          </form>
        </td>
        <td>
            
            <form action= "<?php echo e(route('student.edit',$student->id)); ?>" method = "get">
                
                <input type ="Submit" value = "Edit" >
            </form>
        </td>
        <td>
            <a href = "<?php echo e(route('student.show',$student->id)); ?>">Show</a>
        </td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <br><br>
        <form action= "<?php echo e(route('student.create')); ?>" method = get">
            <?php echo e(csrf_field()); ?>

            <input type ="Submit" value = "Add" >
        </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>