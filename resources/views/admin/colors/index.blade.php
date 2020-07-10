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
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-6">
              <a href="{{route('admin.colors.create')}}">Nuevo Color</a>
            </div>
            <div class="col-md-6">Colors</div>
          </div>
        </div>
        <div class="card-body">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">codigo</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($colors as $color)
                <tr>
                  <th scope="row">1</th>
                  <td>{{$color->name}}</td>
                  <td>
                      <a href="{{route('admin.colors.edit',$color->id)}}">Edit</a>
                      <a href="{{route('admin.colors.destroy',$color->id)}}">Delete</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>
</html>
        