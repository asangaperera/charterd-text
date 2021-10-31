
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <div class="card-header" >
      <h3 >Member List</h3>
    </div>
    <div class="card-body">
                <form method="get" action="{{route('add.team')}}">
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<body> <td>
          <h4> <a href="/post-team">Add Members|Home</a></h4>
    </td>

@if(Session::has('delete_team'))
<span>{{Session::get('team_update')}}</span>
@endif
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th><br>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Telephone</th>
            <th scope="col">Current Route</th>
            <th scope="col">Update</th>
            <th scope="col">View</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>

          @foreach($teams as $team)
       <tr>
           <td class="bg-primary">{{$team->id}}</td>
           <td class="bg-success">{{$team->FullName}}</td>
           <td class="bg-warning">{{$team->Email}}</td>
           <td class="bg-danger">{{$team->Telephone}}</td>
           <td class="bg-info">{{$team->CurrentRoute}}</td>
           <td>
           <button type="button" class="btn btn-warning"><a href="/edit-team/{{$team->id}}">EDIT</a></button>
              
           </td> 
           <td>
           <button type="button" class="btn btn-warning"><a href="/viewMember/{{$team->id}}">VIEW</a></button>
    </td>
           <td>
           <button type="button" class="btn btn-danger"><a href="/delete-team/{{$team->id}}">DELETE</a></button>
    </td>
    
  @endforeach
          <tr>
    
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>

