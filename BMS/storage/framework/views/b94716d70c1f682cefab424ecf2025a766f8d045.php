<div style="background-color:cadetblue">
<?php $__env->startSection('content'); ?>
<div class="container">
      <div class=" col-md-12 col-sm-12 col-6"> 
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/owners')); ?>" class="breadcrumb-link text-white">Back</a></li>
                    <li class="breadcrumb-item" aria-current="text-white">User Details</li>
                </ol>
                <br>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-4 offset-3 text-dark">
          <center><img src="/uploads/profilepics/<?php echo e($user->profilepic); ?>" style="width:150px; height:150px; float:center; border-radius:50%; margin-right:75px;"></center>
        </div>
        
        <form action="<?php echo e(route('user.show',$user->id)); ?>"></form>
        <br>
        <div class="col-xl-4 offset-1"> 
        <div class="card  text-dark">
            <table class="table table-user-information">
              <h2><center><?php echo e($user->username); ?></center></h2>
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
              
              </tbody>
            </table>
        </div>
        </div>

        
        <div class="card text-dark">
          <h3><center>Boarding Details</center></h3>
          
            <table class="table table-user-information text-dark">
              <tbody>
                <?php $__currentLoopData = $boardings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $boarding): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><h4>Boarding <?php echo e($boarding->address_of_boarding); ?></h4></td>
                  <td><a href="<?php echo e(route('boarding.show',$boarding->id)); ?>"><button type="button" class="btn btn-primary">View</button></a></td>
                  <td><form action= "<?php echo e(route('boarding.destroy',$boarding->id)); ?>" method = "post">
                    <input type = "hidden" name = "_method" value = "delete">
                    <?php echo e(csrf_field()); ?>

                    <input type ="submit" class="btn btn-danger" value = "Remove" >
                  </form></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
        
    </div> 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>