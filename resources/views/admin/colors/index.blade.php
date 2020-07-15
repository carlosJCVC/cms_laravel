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
    <p class="font-weight-bold">List Colors</p>
    
    </h2>
    
    <input type ='button' class="btn btn-outline-primary" value='Create Color' onclick="location.href = '{{ route('admin.colors.create') }}'"/>
  <div>
  --
  </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>                
                <th scope="col">Status</th>
                <th scope="col">Stock</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($colors as $color)
                <tr>
                  <th scope="row">1</th>
                  <td>{{$color->name}}</td>
                  <td>{{$color->price}}</td>
                  <td>{{$color->status}}</td>
                  <td>{{$color->stock}}</td>
                  <td>
                      <a href="{{ route('admin.colors.edit', ['id' => $color->id]) }}">Edit</a>
                  
                      <a href="{{ route('admin.colors.destroy', ['id' => $color ->id]) }}">Delete</a>
                    
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>