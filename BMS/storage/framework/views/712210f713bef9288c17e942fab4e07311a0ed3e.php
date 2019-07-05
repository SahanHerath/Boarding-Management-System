<?php $__env->startSection('content'); ?>
<div class="panel panel-primary col-md-3"></div>
<div class="panel panel-primary col-md-6">
    <div class="panel-heading">Boardings</div>
    <div class="panel-body">
    <div class="list-group">
    <ul class="list-group">
    <?php $__currentLoopData = $boardings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $boarding): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="list-group-item"><?php echo e($boarding->boarding_no); ?></li>
    <li class="list-group-item"><?php echo e($boarding->address_of_boarding); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
  </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>