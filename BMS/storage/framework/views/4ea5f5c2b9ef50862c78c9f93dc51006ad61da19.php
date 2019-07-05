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

<h2><b>Owner Details</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>NIC Number</th>
    <th>Name</th>
    <th>Address</th>
    <th>Contact No</th>
    <th>Email</th>
  </tr>

  <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($users->id); ?></td>
    <td><?php echo e($users->nicno); ?></td>
    <td><?php echo e($users->name); ?></td>
    <td><?php echo e($users->address); ?></td>
    <td><?php echo e($users->contactno); ?></td>
    <td><?php echo e($users->email); ?></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
</table>
</body>
</html>