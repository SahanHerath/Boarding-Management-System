<?php $__env->startSection('content'); ?>
<div class="container">

    <div class=" col-md-12 col-sm-12 col-6"> 
        <div class="page-breadcrumb">
            <nav >
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>" class="breadcrumb-link text-light">home</a></li>
                    <li class="breadcrumb-item" aria-current="text-white ">Select Boarding</li>

                    <div class="offset-6">
                        <div class="search-container">
                        <form align="right" action="/search" method="get" >
                                <input type="text" class="text-dark" placeholder="Search.." name="search" align="left">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </ol>
                <br> 
            </nav>
        </div>
    </div>
</div>
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-15">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Select Boarding</h4>
                    <div class="" align="right">
                        <a href="<?php echo e(url ('/AllBoardings')); ?>" title="Show all"><button class="btn btn-primary" > Show All </button></a>
                    </div>
                </div>   
                
                <?php $__currentLoopData = $atts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $att): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <table class="table table-hover text-centered">
                <tbody>
                    <div class="panel panel-default p-3 mb-2">
                        <h5 class="panel-header text-dark mb-1">Boarding No : <?php echo e($att->id); ?> </h5>
                        
                        <img src="/uploads/boardingpic/<?php echo e($att->picture); ?>" style="width:150px; border: 2px solid black; height:150px; float:left;  margin-right:25px;">
                        <div class="text-dark">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-fw fa-map-marker-alt mr-3"></i>Address Of Boarding :- <?php echo e($att->address_of_boarding); ?></li>
                                <li class="mb-2"><i class="fas fa-bed mr-3"></i>Accomadation Type :- <?php echo e($att->accomadation_type); ?></li>
                                <li class="mb-2"><i class="fas fa-male mr-4"></i>    Available For :- <?php echo e($att->available_for); ?></li>
                                <li class="mb-2"><i class="fas fa-window-maximize mr-3"></i>Number Of Boarders :- <?php echo e($att->number_of_boarders); ?></li>
                                <li class="mb-2"><i class="fas fa-money-bill-alt mr-2"></i>Boarding Charges :- <?php echo e($att->rent); ?></li>
                                <br>
                                <br><a href="<?php echo e(route('boarding.show',$att->id)); ?>" ><div align="right"><button type="button" class="btn btn-dark">View Boarding</button></div><a>
                            </ul>
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