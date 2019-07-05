

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
</body>
</html>


