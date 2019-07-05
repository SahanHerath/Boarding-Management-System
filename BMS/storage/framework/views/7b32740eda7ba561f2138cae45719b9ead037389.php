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

<h2><center>Reports and Data</center></h2>

<h5>Date and Time:<?php echo e($time); ?><h5>
<br>
<br>

<h2><b>Complain Details</b></h2>
<table>
  
  <tr>
    <th>ID</th>
    <th>Email</th>
    <th>Boarding No</th>
    <th>Complain About</th>
    <th>Complain</th>
    <th>State(0=received, 1=reviewed ,2=solved)</th>
  </tr>

  <?php $__currentLoopData = $complain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $complains): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($complains->complain_id); ?></td>
    <td><?php echo e($complains->user_email); ?></td>
    <td><?php echo e($complains->boarding_no); ?></td>
    <td><?php echo e($complains->complain_about); ?></td>
    <td><?php echo e($complains->complain); ?></td>
    <td><?php echo e($complains->state); ?></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</table>
</body>
</html>