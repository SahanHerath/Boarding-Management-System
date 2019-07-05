<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size:9pt;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2><b>Rating Details</b></h2>
<table>
  
  <tr>
    <th>ID</th>
    <th>Email</th>
    <th>Boarding No</th>
    <th>Rating</th>
    
    
  </tr>

  <?php $__currentLoopData = $rating; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ratings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($ratings->rate_id); ?></td>
    <td><?php echo e($ratings->user_email); ?></td>
    <td><?php echo e($ratings->boarding_no); ?></td>
    <td><?php echo e($ratings->rating); ?></td>
    
    
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</table>

<h2><b>Boardings Rating Details</b></h2>
<table>
  
  <tr>
    <th>Boarding No</th>
    <th>Rate(5)</th>
  </tr>

  <?php $__currentLoopData = $rate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rates): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($rates->boarding_id); ?></td>
    <td><?php echo e($rates->rate); ?></td>
   
    
    
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</table>

</body>
</html>