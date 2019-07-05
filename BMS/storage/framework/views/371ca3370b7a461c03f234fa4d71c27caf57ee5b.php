<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Select Boarding</div>
                <?php $__currentLoopData = $atts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $att): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="panel panel-default">

                <table class="table table-hover text-centered">
                <tbody>
                <tr>
                <td style="width:90%"><div class="panel-body">Boarding No : <?php echo e($att->id); ?> ||||||| Address : <?php echo e($att->address_of_boarding); ?></div><td>
                <td style="width:90%"><a href="<?php echo e(url('/showBoarding',$att->id)); ?>"><button type="button" class="btn btn-primary">View Boarding</button><a></td>
                </div>
                </tbody>
                </table> 
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>