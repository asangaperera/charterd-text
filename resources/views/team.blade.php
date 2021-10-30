
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Details</title>
    <div class="card-header" >
      <h1 >Team List</h1>
    </div>
    <div class="card-body">
                <form method="get" action="{{route('viewmember')}}">
                        
                        <input type="hidden" name="id" value="{{$team->id}}">
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<body>
@if(Session::has('delete_team'))
<span>{{Session::get('team_update')}}</span>
@endif
    <a style="float:left" href="{{route('add.team')}}">Add New </a><br>
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
            <th scope="col">Email</th>
            <br>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <td>{{$team->id}}</td>
           <td>{{$team->FullName}}</td>
           <td>{{$team->Email}}</td>
           <td>{{$team->Telephone}}</td>
           <td>{{$team->CurrentRoute}}</td>
           <td>
          @foreach($teams as $team)
       <tr>
           <td class="bg-primary">{{$team->$id}}</td>
           <td class="bg-success">{{$team->FullName}}</td>
           <td class="bg-warning">{{$team->Email}}</td>
           <td class="bg-danger">{{$team->Telephone}}</td>
           <td class="bg-info">{{$team->CurrentRoute}}</td>
           <td>
           <button type="button" class="btn btn-warning"><a href="/edit-team/{{$team->id}}">UPDATE</a></button>
              
           </td> 
           <td>
           <button type="button" class="btn btn-danger"><a href="/delete-team/{{$team->id}}">DELETE</a></button>
    </td>
    <td>
           <button type="button" class="btn btn-warning"><a href="/viewMember/{{$team->id}}">VIEW</a></button>
              
           </td>
           <a href="/viewMember/{{$team->id}}">View</a>
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

