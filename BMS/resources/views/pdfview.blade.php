

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

<h5>Date and Time:{{$time}}<h5>
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

  @foreach($user as $users)
  <tr>
    <td>{{$users->id}}</td>
    <td>{{$users->nicno}}</td>
    <td>{{$users->name}}</td>
    <td>{{$users->address}}</td>
    <td>{{$users->contactno}}</td>
    <td>{{$users->email}}</td>
  </tr>
  @endforeach
 
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

  @foreach($boarding as $boardings)
  <tr>
    <td>{{$boardings->id}}</td>
    <td>{{$boardings->address_of_boarding}}</td>
    <td>{{$boardings->accomadation_type}}</td>
    <td>{{$boardings->available_for}}</td>
    <td>{{$boardings->number_of_boarders}}</td>
    <td>{{$boardings->rent}}</td>
    <td>{{$boardings->security_cam_available}}</td>
    <td>{{$boardings->near_to}}</td>
    <td>{{$boardings->name}}</td>
  </tr>
  @endforeach
  
</table>


<h2><b>Room Details</b></h2>
<table>
  
  <tr>
    <th>ID</th>
    <th>Boarding No</th>
    <th>Room Type</th>
    <th>Number of rooms</th>
    
  </tr>

  @foreach($room as $rooms)
  <tr>
    <td>{{$rooms->id}}</td>
    <td>{{$rooms->boarding_id}}</td>
    <td>{{$rooms->room_type}}</td>
    <td>{{$rooms->number_of_rooms}}</td>
    
  </tr>
  @endforeach
  
</table>


<h2><b>Charge Details</b></h2>
<table>
  
  <tr>
    <th>ID</th>
    <th>Boarding No</th>
    <th>Charge Type</th>
    <th>Availability</th>
    
  </tr>

  @foreach($charge as $charges)
  <tr>
    <td>{{$charges->id}}</td>
    <td>{{$charges->boarding_id}}</td>
    <td>{{$charges->charge_type}}</td>
    <td>{{$charges->availability}}</td>
    
  </tr>
  @endforeach
  
</table>

<h2><b>Facility Details</b></h2>
<table>
  
  <tr>
    <th>ID</th>
    <th>Boarding No</th>
    <th>Facility Type</th>
    <th>Number of Facility</th>
    
  </tr>

  @foreach($facility as $facilities)
  <tr>
    <td>{{$facilities->id}}</td>
    <td>{{$facilities->boarding_id}}</td>
    <td>{{$facilities->facility_type}}</td>
    <td>{{$facilities->number_of_facility}}</td>
    
  </tr>
  @endforeach
  
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

  @foreach($comment as $comments)
  <tr>
    <td>{{$comments->id}}</td>
    <td>{{$comments->user_email}}</td>
    <td>{{$comments->boarding_id}}</td>
    <td>{{$comments->comment}}</td>
    <td>{{$comments->blocked}}</td>
  </tr>
  @endforeach
  
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

  @foreach($complain as $complains)
  <tr>
    <td>{{$complains->complain_id}}</td>
    <td>{{$complains->user_email}}</td>
    <td>{{$complains->boarding_no}}</td>
    <td>{{$complains->complain_about}}</td>
    <td>{{$complains->complain}}</td>
    <td>{{$complains->state}}</td>
  </tr>
  @endforeach
  
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

  @foreach($user_comment as $user_comments)
  <tr>
    <td>{{$user_comments->mail_id}}</td>
    <td>{{$user_comments->user_email}}</td>
    <td>{{$user_comments->no_of_comments}}</td>
    <td>{{$user_comments->no_of_blocked}}</td>
    <td>{{$user_comments->blocked}}</td>
    
  </tr>
  @endforeach
  
</table>

<h2><b>Rating Details</b></h2>
<table>
  
  <tr>
    <th>ID</th>
    <th>Email</th>
    <th>Boarding No</th>
    <th>Rating</th>
    
    
  </tr>

  @foreach($rating as $ratings)
  <tr>
    <td>{{$ratings->rate_id}}</td>
    <td>{{$ratings->user_email}}</td>
    <td>{{$ratings->boarding_no}}</td>
    <td>{{$ratings->rating}}</td>
    
    
  </tr>
  @endforeach
  
</table>

</table>

<h2><b>Boardings Rating Details</b></h2>
<table>
  
  <tr>
    <th>Boarding No</th>
    <th>Rate(5)</th>
  </tr>

  @foreach($rate as $rates)
  <tr>
    <td>{{$rates->boarding_id}}</td>
    <td>{{$rates->rate}}</td>
   
    
    
  </tr>
  @endforeach
  
</table>

</body>
</html>