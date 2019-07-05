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

<h2><b>Boarding Details</b></h2>
<table>
  
  <tr>
    <th>ID</th>
    <th>Address of the boarding</th>
    <th>Accomadation Type</th>
    <th>Available for</th>
    <th>Number of  Boarders</th>
    <th>Rent</th>
    <th>Security Cam Availability</th>
    <th>Near to</th>
    <th>Owner</th>
  </tr>

  <?php $__currentLoopData = $boarding; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $boardings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($boardings->id); ?></td>
    <td><?php echo e($boardings->address_of_boarding); ?></td>
    <td><?php echo e($boardings->accomadation_type); ?></td>
    <td><?php echo e($boardings->available_for); ?></td>
    <td><?php echo e($boardings->number_of_boarders); ?></td>
    <td><?php echo e($boardings->rent); ?></td>
    <td><?php echo e($boardings->security_cam_available); ?></td>
    <td><?php echo e($boardings->near_to); ?></td>
    <td><?php echo e($boardings->name); ?></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</table>


<h2><b>Room Details</b></h2>
<table>
  
  <tr>
    <th>ID</th>
    <th>Boarding No</th>
    <th>Room Type</th>
    <th>Number of rooms</th>
    
  </tr>

  <?php $__currentLoopData = $room; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rooms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($rooms->id); ?></td>
    <td><?php echo e($rooms->boarding_id); ?></td>
    <td><?php echo e($rooms->room_type); ?></td>
    <td><?php echo e($rooms->number_of_rooms); ?></td>
    
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</table>


<h2><b>Charge Details</b></h2>
<table>
  
  <tr>
    <th>ID</th>
    <th>Boarding No</th>
    <th>Charge Type</th>
    <th>Availability</th>
    
  </tr>

  <?php $__currentLoopData = $charge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $charges): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($charges->id); ?></td>
    <td><?php echo e($charges->boarding_id); ?></td>
    <td><?php echo e($charges->charge_type); ?></td>
    <td><?php echo e($charges->availability); ?></td>
    
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</table>

<h2><b>Facility Details</b></h2>
<table>
  
  <tr>
    <th>ID</th>
    <th>Boarding No</th>
    <th>Facility Type</th>
    <th>Number of Facility</th>
    
  </tr>

  <?php $__currentLoopData = $facility; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facilities): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($facilities->id); ?></td>
    <td><?php echo e($facilities->boarding_id); ?></td>
    <td><?php echo e($facilities->facility_type); ?></td>
    <td><?php echo e($facilities->number_of_facility); ?></td>
    
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </table>
</body>
</html> 