

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

<h2><b>Comment Details</b></h2>
<table>
  
  <tr>
    <th>ID</th>
    <th>Email</th>
    <th>Boarding No</th>
    <th>Comment</th>
    <th>Blocked</th>
  </tr>

  <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comments): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($comments->id); ?></td>
    <td><?php echo e($comments->user_email); ?></td>
    <td><?php echo e($comments->boarding_id); ?></td>
    <td><?php echo e($comments->comment); ?></td>
    <td><?php echo e($comments->blocked); ?></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</table>

<h2><b>Commented Users Details</b></h2>
<table>
  
  <tr>
    <th>ID</th>
    <th>Email</th>
    <th>No of comments</th>
    <th>No of blocked comments</th>
    <th>User Blocked</th>
    
  </tr>

  <?php $__currentLoopData = $user_comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_comments): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($user_comments->mail_id); ?></td>
    <td><?php echo e($user_comments->user_email); ?></td>
    <td><?php echo e($user_comments->no_of_comments); ?></td>
    <td><?php echo e($user_comments->no_of_blocked); ?></td>
    <td><?php echo e($user_comments->blocked); ?></td>
    
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</table>
</body>
</html>


