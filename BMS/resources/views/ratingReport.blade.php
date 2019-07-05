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

  @foreach($rating as $ratings)
  <tr>
    <td>{{$ratings->rate_id}}</td>
    <td>{{$ratings->user_email}}</td>
    <td>{{$ratings->boarding_no}}</td>
    <td>{{$ratings->rating}}</td>
    
    
  </tr>
  @endforeach
  
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