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
</body>
</html> 