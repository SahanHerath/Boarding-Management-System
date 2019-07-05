<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">you are in!</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="alert alert-success">
                        <p>You are logged in as USERS</p>
                    </div>
                    <div class="user-avatar text-center d-block">
                        <a href="<?php echo e(url('/Profile')); ?>" class="btn btn-light"><img src="/uploads/profilepics/<?php echo e(Auth::user()->profilepic); ?>" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                        <p class="text-dark "><?php echo e(Auth::user()->name); ?>>>></p></a>
                    </div>
                   
                </div>
                
            </div>
            <br><br><br>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>