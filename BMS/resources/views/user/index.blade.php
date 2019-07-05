{{$users}}
<hr>
@extends('layouts.master')
@section('content')
    <table border = "1" >
    @foreach($users as $user)
    <tr>
      <td>  {{$user->name}}</td>
      <td>  {{$user->email}}</td>
      <td>
          <form action= "{{route('user.destroy',$student->id)}}" method = "post">
            <input type = "hidden" name = "_method" value = "delete">
            {{csrf_field()}}
            <input type ="Submit" value = "Delete" >
          </form>
        </td>
        <td>
            {{--<a href = "{{route('student.edit',$student->id)}}">Edit</a>--}}
            <form action= "{{route('student.edit',$student->id)}}" method = "get">
                
                <input type ="Submit" value = "Edit" >
            </form>
        </td>
        <td>
            <a href = "{{route('student.show',$student->id)}}">Show</a>
        </td>

    </tr>
    @endforeach
    </table>
    <br><br>
        <form action= "{{route('student.create')}}" method = get">
            {{csrf_field()}}
            <input type ="Submit" value = "Add" >
        </form>
@endsection