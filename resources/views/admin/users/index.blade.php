<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2>
    <p class="font-weight-bold">List Users</p>
    
    </h2>
    
    <input type ='button' class="btn btn-outline-primary" value='Create User' onclick="location.href = '{{ route('admin.users.create') }}'"/>
  <div>
  --
  </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">ci</th>
                <th scope="col">Phone</th>
                <th scope="col">Status</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                  <th scope="row">1</th>
                  <td>{{$user->first_name}}</td>
                  <td>{{$user->last_name}}</td>
                  <td>{{$user->ci}}</td>
                  <td>{{$user->phone}}</td>
                  <td>{{$user->status}}</td>
                  <td>{{$user->email}}</td>
                  <td>
                      <a href="{{ route('admin.users.edit', ['id' => $user->id]) }}">Edit</a>
                  
                      <a href="{{ route('admin.users.destroy', ['id' => $user->id]) }}">Delete</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>