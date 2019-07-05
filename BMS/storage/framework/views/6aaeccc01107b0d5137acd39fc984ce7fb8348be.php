<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading">Select Boarding</div>   
                    
                    
                    <form align="right" action="/search" method="get" >
                        <div class="col-md-4">
                        <div class="form-group">
                            <input type="search" class="form-control" name="search" align="right">
                            <span class="form-group-btn">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </span>
                        </div>
                        </div>
                        <div class="" align="right">
                                <a href="<?php echo e(url ('/AllBoardings')); ?>" title="Add new boarding"><button class="btn btn-primary" > Show All </button></a>
                        </div>
                    </form>
                    
                
                <br>
                <br>
                <br>
                <br>
                <br>
                
                <?php $__currentLoopData = $atts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $att): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <table class="table table-hover text-centered" border="0">
                <tbody>
                <div class="panel panel-default">              
                
                <div class="panel-body">Boarding No : <?php echo e($att->id); ?> </div><br>
                <div class="panel-body">
                <img src="/uploads/boardingpic/<?php echo e($att->picture); ?>" style="width:150px; border: 2px solid black; height:150px; float:left;  margin-right:25px;">
                <br>Address Of Boarding : <?php echo e($att->address_of_boarding); ?>

                <br>Accomadation Type : <?php echo e($att->accomadation_type); ?>

                <br>Available For : <?php echo e($att->available_for); ?>

                <br>Number Of Boarders : <?php echo e($att->number_of_boarders); ?>

                <br>Boarding Charges : <?php echo e($att->rent); ?>

                
                <tr>
                <td style="width:90%"></td>
                <td style="width:90%"><a href="<?php echo e(URL('/viewBoarding'.$att->id)); ?>"><button type="button" class="btn btn-primary">View Boarding</button><a></td>
                </div>
              
                
                
                </div>
                </tbody>
                 </table> 
                
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>