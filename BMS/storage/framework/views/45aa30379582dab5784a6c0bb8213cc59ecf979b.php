<?php $__env->startSection('content'); ?>
<div class="container">
        <div class=" col-md-12 col-sm-12 col-6"> 
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>" class="breadcrumb-link text-white">home</a></li>
                    <li class="breadcrumb-item"><a href="/Profile" class="breadcrumb-link text-white">Profile</a></li>
                    <li class="breadcrumb-item" aria-current="text-white">Change boarding Pictures</li>
                </ol>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Boarding Picture</div>

                <table>
                <tbody>
                <tr>
                <td>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="/uploads/boardingpic/<?php echo e($data1->picture); ?>" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
               </tr>
                
                <tr> 
                <td>
                    
                <form enctype="multipart/form-data" action="<?php echo e(URL('/addnewpic'.$data1->boarding_id)); ?>" method="POST">
                <center><label>Add This Image</label>
                <input type="file" name="boarding_pic">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="submit"  class="btn btn-sm btn-primary">
                <center>
                </form>
                
                </td>
                </tr>
                
                </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>