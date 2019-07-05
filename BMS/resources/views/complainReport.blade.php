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
</body>
</html>