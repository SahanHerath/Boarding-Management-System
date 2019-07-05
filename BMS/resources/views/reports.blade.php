@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-3">
            <div class="panel panel-default">
                <div class="panel-heading">Reports and backups</div>
                
                <div class="offset-10">
                    <a href ="{{ URL('/fullReport') }}"><button class="btn btn-primary">Full Report</button></a>
                    <a href ="{{ URL('/backup') }}"><button class="btn btn-danger">Backup</button></a>
  
                </div>
                <br>
                <br>
                <div class="panel panel-success">
                <div class="panel-heading">Reports</div>
                <div class="panel-body">
                
                
                
                <table class="table table hover table-bordered">
                <tbody>
                    <tr>
                    <td style="color:black;">User Details Report</td>
                    
                    <td><a href ="{{ URL('/userReport') }}"><button class="btn btn-warning">Report</button></a></td>
                    </tr>

                    <tr>
                    <td style="color:black;">Boarding Details Report</td>
                    
                    <td><a href ="{{ URL('/boardingReport') }}"><button class="btn btn-warning">Report</button></a></td>
                    </tr>

                    <tr>
                    <td style="color:black;">Comment Details Report</td>
                    
                    <td><a href ="{{ URL('/commentReport') }}"><button class="btn btn-warning">Report</button></a></td>
                    </tr>

                    <tr>
                    <td style="color:black;">Complain Details Report</td>
                    
                    <td><a href ="{{ URL('/complainReport') }}"><button class="btn btn-warning">Report</button></a></td>
                    </tr>

                    <tr>
                    <td style="color:black;">Rating Details Report</td>
                    
                    <td><a href ="{{ URL('/ratingReport') }}"><button class="btn btn-warning">Report</button></a></td>
                    </tr>
                </div>
                </div>


                </tbody>
                </table>
               
                    
                
                
            </div>
            <br><br><br>
        </div>
    </div>
</div>
@endsection