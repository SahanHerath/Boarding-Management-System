<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/profilepics/<?php echo e($user->profilepic); ?>" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2><?php echo e($user->username); ?></h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="profilepic">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="submit"  class="pull-right btn btn-sm btn-primary">
        </div>

        <div class=" col-md-10 col-md-offset-1 "> 
                  <table class="table table-user-information">
                    <tbody>
                    
                      <tr>
                        <td><h4>Name:</td></h4>
                        <td><h4><?php echo e($user->name); ?></td></h4>
                      </tr>
                      <tr>
                        <td><h4>Address:</h4></td>
                        <td><h4><?php echo e($user->address); ?></h4></td>
                      </tr>
                      <tr>
                        <td><h4>NIC Number:</h4></td>
                        <td><h4><?php echo e($user->nicno); ?></h4></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td><h4>Contact No:</h4></td>
                        <td><h4><?php echo e($user->contactno); ?></h4></td>
                      </tr>
                        
                      <tr>
                        <td><h4>Email:</h4></td>
                        <td><h4><a href=""><?php echo e($user->email); ?></a></h4></td>
                      </tr>
                       
                           
                      </tr>
                    
                    </tbody>
                  </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>