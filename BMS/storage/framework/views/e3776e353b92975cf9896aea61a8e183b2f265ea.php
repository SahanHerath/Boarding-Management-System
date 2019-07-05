<?php $__env->startSection('content'); ?>
                <?php if(Session::has('flash_message')): ?>  
                        <div class="alert alert-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <?php echo session('flash_message'); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                        </div>
                <?php endif; ?>

                <?php if(Session::has('warning_message')): ?>
                        <div class="alert alert-warning">
                            <span class="glyphicon glyphicon-ok"></span>
                            <?php echo session('warning_message'); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                        </div>
                <?php endif; ?>
<div class="container">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class=" col-md-12 col-sm-12 col-6">
            <div>
                <h4 class=" text-light ">Users Profile </h4>
                
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>" class="breadcrumb-link text-light ">home</a></li>
                            <li class="breadcrumb-item" aria-current="text-light ">Users Profile</li>
                        </ol>
                        <br>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- ============================================================== -->
        <!-- profile -->
        <!-- ============================================================== -->
        <div class="col-xl-4 col-lg-3 col-md-5 col-sm-12 col-12">
            <!-- ============================================================== -->
            <!-- card profile -->
            <!-- ============================================================== -->
            <div class="card">
            <div class="card-body">
                <div class="user-avatar text-center d-block">
                    <img src="/uploads/profilepics/<?php echo e($user->profilepic); ?>" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                    
                    <form enctype="multipart/form-data" action="/Profile" method="POST">
                    <label>Update Profile Image</label>
                        <input type="file" name="profilepic">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <center><input type="submit" class="center btn btn-sm btn-primary"></center>
                    </form>
                </div>
                <div class="text-center">
                    <h2 class="font-24 mb-10 text-dark"><?php echo e($user->name); ?></h2>
                </div>
            </div>
            <div class="card-body border-top ">
                <h3 class="font-16 text-dark">Contact Information</h3>
                <div class="">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2 text-dark"><i class="fas fa-address-card mr-3"></i><?php echo e($user->nicno); ?></li>
                        <li class="mb-2 text-dark"><i class="fas fa-fw fa-home mr-3"></i><?php echo e($user->address); ?></li>
                        <li class="mb-2 text-dark"><i class="fas fa-fw fa-envelope mr-3"></i><?php echo e($user->email); ?></li>
                        <li class="mb-2 text-dark"><i class="fas fa-fw fa-phone mr-3"></i><?php echo e($user->contactno); ?></li>
                    </ul>
                </div>
                   
                <a href="<?php echo e(URL('/deactivateAccount'.$user->id)); ?>" title="deactivate account"><button class="btn btn-danger" title="Deactivate Account" onclick="return confirm(&quot;Deactivate Account?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Deactivate Account</button></a>
                  <a href="<?php echo e(URL('/EditProfile'.$user->id)); ?>" title="Edit your profile details"><button class="btn btn-success offset-2" >Edit Profile</button></a>
                  
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- end card profile -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end profile -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- campaign data -->
        <!-- ============================================================== -->
        <div class="col-xl-8 col-lg-9 col-md-7 col-sm-12 col-12">
        <!-- ============================================================== -->
        <!-- campaign tab one -->
        <!-- ============================================================== -->
        <div class="influence-profile-content pills-regular">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane  show active" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                  
                    <?php if($user -> admin ==0): ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="media influencer-profile-data d-flex align-items-center p-2 text-light">
                                        
                                        <div class="media-body">
                                              <h3 class="m-b-10 text-light"><a href="<?php echo e(route('boarding.create')); ?>">Add New Boarding</a></h3>
                                              
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="section-block">
                        <h3 class="section-title">Boarding List</h3>
                    </div>
                    <?php $__currentLoopData = $boardings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $boarding): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="media influencer-profile-data d-flex align-items-center p-2">
                                        <div class="media-body ">
                                            <div class="influencer-profile-data">
                                                <h3 class="m-b-10"><a href="<?php echo e(route('boarding.show',$boarding->id)); ?>">Boarding <?php echo e($boarding->address_of_boarding); ?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  class="border-top card-footer p-0">
                            <div class="campaign-metrics d-xl-inline-block">
                                <form action= "<?php echo e(route('boarding.destroy',$boarding->id)); ?>" method = "post">
                                <p class="text-dark"><input type ="hidden" name = "_method" value = "delete">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <input class="btn btn-rounded btn-danger" type ="Submit" value = "Delete" title="Delete Boarding" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                </p>
                                </form>
                            </div>
                            <div class=" d-xl-inline-block">
                                <form action= "<?php echo e(route('boarding.edit',$boarding->id)); ?>" method = "get">
                                <?php echo e(csrf_field()); ?>

                                <input class="btn btn-rounded btn-info" type ="Submit" value = "Edit" >
                                
                                </form>
                            </div>
                            <div class="campaign-metrics d-xl-inline-block">
                                <form action= "<?php echo e(URL('/changeBoardingPicture'.$boarding->id)); ?>" method = "get">
                                
                                <input class="btn btn-rounded btn-warning" type ="Submit" value = "Change Boarding Picture" >
                                </p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end campaign data -->
        <!-- ============================================================== -->
    </div>
    
</div>
<?php echo e(method_field('DELETE')); ?>


<!-- ============================================================== -->
<!-- end content -->
<!-- ============================================================== -->   
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>