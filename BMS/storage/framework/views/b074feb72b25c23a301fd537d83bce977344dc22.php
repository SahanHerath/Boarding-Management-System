<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Change Boarding Picture</div>

                
                
                
                <table class="table table hover table-bordered">
                       <thead>
                            <tr>
                                <th width="5">Picture</th>
                                <th width="5">Change Picture</th>
                            </tr>
                       </thead>
                       <tbody>
                       <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <img src="/uploads/boardingpic/<?php echo e($data1->picture); ?>" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="<?php echo e(URL('/boardingpic'.$data1->id)); ?>" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="boarding_pic">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="submit"  class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>
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