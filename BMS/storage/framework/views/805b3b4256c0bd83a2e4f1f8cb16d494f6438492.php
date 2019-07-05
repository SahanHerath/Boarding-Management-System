

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