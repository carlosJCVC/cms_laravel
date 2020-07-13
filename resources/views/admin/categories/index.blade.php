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
    <p class="font-weight-bold">List Category</p>
    
    </h2>
    
    <input type ='button' class="btn btn-outline-primary" value='Create Category' onclick="location.href = '{{ route('admin.categories.create') }}'"/>
  <div>
  --
  </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Codigo</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                  <th scope="row">1</th>
                  <td>{{$category->name}}</td>
                  <td>{{$category->code}}</td>
                 
                  <td>
                      <a href="{{ route('admin.categories.edit', ['id' => $category->id]) }}">Edit</a>
                  
                      <a href="{{ route('admin.categories.destroy', ['id' => $category->id]) }}">Delete</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>