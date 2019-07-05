<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-10 offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
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
        <div class="panel-body">
            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <div class="alert alert-success">
                <p>You are logged in as ADMINISTRATOR</p>
            </div>
        </div>
    </div>
</div>
</div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section-block" id="cards">
                <h3 class="section-title">Options</h3>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-dark">
                    <h3 class="card-title">Owners</h3>
                    <p class="card-text">Admin can view,delete owner's profiles or owner's boardings according to the complaints.</p>
                    <a href="/owners" class="btn btn-primary"style="background-color:darkblue">Click Here</a>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-dark">
                    <h3 class="card-title">Admins</h3>
                    <p class="card-text">Admin can add another admin and remove the existing admins according to the situation.</p>
                    <a href="/admins" class="btn btn-primary" style="background-color:darkblue">Click Here</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-dark">
                    <h3 class="card-title">Commented Users</h3>
                    <p class="card-text">Admin will keep the records of a particular commented user.Admin can block/unblock them.</p>
                    <a href="/usercomment" class="btn btn-primary" style="background-color:darkblue">Click here</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-dark">
                    <h3 class="card-title">Complaints</h3>
                    <p class="card-text">Admin will view the user complaints and take measures according to that.</p>
                    <a href="/complainsView" class="btn btn-primary"style="background-color:darkblue">Click Here</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-dark">
                    <h3 class="card-title">User Comments</h3>
                    <p class="card-text">Admin can view user comments and block or delete them.</p>
                    <a href="/commentView" class="btn btn-primary" style="background-color:darkblue">Click Here</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-dark">
                    <h3 class="card-title">Ratings</h3>
                    <p class="card-text">Admin can view the ratings of each and every boarding.</p>
                    <a href="/rateboarding" class="btn btn-primary"style="background-color:darkblue">Click Here</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-dark">
                    <h3 class="card-title">Reports and Backups</h3>
                    <p class="card-text">Admin will be able to take reports of the system and backup the data.</p>
                    <a href="/Reports" class="btn btn-primary"style="background-color:darkblue">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>