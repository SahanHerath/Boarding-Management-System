<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/profilepics/<?php echo e($user->profilepic); ?>" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2><?php echo e($user->username); ?></h2>
            <form enctype="multipart/form-data" action="/Profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="profilepic">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <center><input type="submit" class="pull-right btn btn-sm btn-primary"></center>
            </form>
            <br><br>
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
                        <td><h4>Contact No:</h4></td>
                        <td><h4><?php echo e($user->contactno); ?></h4></td>
                      </tr>
                        
                      <tr>
                        <td><h4>Email:</h4></td>
                        <td><h4><a href=""><?php echo e($user->email); ?></a></h4></td>
                      </tr>
                       
                      
                      <?php if($user->admin== 0): ?>
                        <tr><td><h4>Boarding</h4></td>
                        <td><a href="<?php echo e(route('boarding.create')); ?>" title="Add new boarding"><button class="btn btn-primary" >Add Boarding</button></a></td>
                        <td><a href="<?php echo e(route('user.edit',$user->id)); ?>" title="Edit your profile details"><button class="btn btn-success" >Edit Profile</button></a></td></tr>

                        <?php $__currentLoopData = $boardings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $boarding): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                          <td><h4>Boarding <?php echo e($boarding->address_of_boarding); ?></h4></td>
                          <td><h4><a href="<?php echo e(route('boarding.show',$boarding->id)); ?>"><button type="button" class="btn btn-primary">View</button></a></h4></td>
                          <td><h4><a href="<?php echo e(route('boarding.edit',$boarding->id)); ?>"><button type="button" class="btn btn-success">Edit</button></a></h4></td>
                          <td><h4> <form action= "<?php echo e(route('boarding.destroy',$boarding->id)); ?>" method = "post">
                              <input type = "hidden" name = "_method" value = "delete">
                              <?php echo e(csrf_field()); ?>

                              <input type ="submit" class="btn btn-danger" value = "Delete" >
                            </form></h4></td></tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                      <?php endif; ?>
                    </tbody>
                  </table>
              </div>
    </div>    
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>