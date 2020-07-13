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
    <p class="font-weight-bold">Lista de productos</p>
    
    </h2>
    
    <input type ='button' class="btn btn-outline-primary" value='Create Product' onclick="location.href = '{{ route('admin.products.create') }}'"/>
  <div>
  --
  </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Codigo</th>
                <th scope="col">Price Compra</th>
                <th scope="col">Price Venta</th>
                <th scope="col">Status</th>
                <th scope="col">Stock</th>
                <th scope="col">Image</th>
                <th scope="col">Categoria_id</th>
                <th scope="col">User_id</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                <tr>
                  <th scope="row">1</th>
                  <td>{{$item->name}}</td>
                  <td>{{$item->code}}</td>
                  <td>{{$item->price_compra}}</td>
                  <td>{{$item->price_venta}}</td>
                  <td>{{$item->status}}</td>
                  <td>{{$item->stock}}</td>
                 
                  @if($item->image)
                  <td>
                  <img src="{{ asset( 'images/' . $item->image)}}" width=150>
                  </td>
                  @else
                  <td>Sin foto</td>
                  @endif
                  
                  <td>{{$item->category_id}}</td>
                  <td>{{$item->user_id}} </td>
                  <td>
                      <a href="{{ route('admin.products.edit', ['id' => $item->id]) }}">Edit</a>
                  
                      <a href="{{ route('admin.products.destroy', ['id' => $item->id]) }}">Delete</a>
                      
                     
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>