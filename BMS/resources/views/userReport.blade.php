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
</body>
</html>