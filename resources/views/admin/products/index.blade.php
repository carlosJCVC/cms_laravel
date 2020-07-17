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
              <a href="{{route('admin.products.create')}}">Nuevo Producto</a>
            </div>
            <div class="col-md-6">Productos</div>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">codigo</th>
                <th scope="col">Price compra</th>
                <th scope="col">Price venta</th>
                <th scope="col">status</th>
                <th scope="col">stock</th>
                <th scope="col">image</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                <tr>
                  <th scope="row">1</th>
                  <td>{{$item->name}}</td>
                  <td>{{$item->codigo}}</td>
                  <td>{{$item->price_compra}}</td>
                  <td>{{$item->price_venta}}</td>
                  <td>{{$item->status}}</td>
                  <td>{{$item->stock}}</td>
                  <td>{{$item->image}}</td>
                  <td>
                      <a href="{{ route('admin.product.edit',$item->id)}}">Edit</a>
                      <a href="{{ route('admin.product.destroy',$item->id)}}">Delete</a>
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


