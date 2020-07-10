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
              <a href="{{route('admin.products.index')}}">Volver a Listado</a>
            </div>
            <div class="col-md-6">Productos</div>
          </div>
        </div>
        <div class="card-body">
         <form class="needs-validation" action="{{ route('admin.product.update',$product->id)}}" method="post"  novalidate>
          @csrf 
          @method("put")
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="name" required value="{{$product->name}}">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                   <div class="col-md-4 mb-3">
                    <label for="validationCustom02">codigo</label>
                    <input type="text" class="form-control" id="validationCustom02" name="codigo" value="{{$product->codigo}}" required >
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03">Price compra</label>
                    <input type="text" class="form-control" id="validationCustom03" name="price_compra" value="{{$product->price_compra}}" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Price Venta</label>
                    <input type="text" class="form-control" id="validationCustom04" name="price_venta" value="{{$product->price_venta}}" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationCustom05">status</label>
                    <input type="text" class="form-control" id="validationCustom05" name="status" value="{{$product->status}}" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
    
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom06">Stock</label>
                    <input type="text" class="form-control" id="validationCustom06" name="stock"  value="{{$product->stock}}" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom07">Image</label>
                    <input type="text" class="form-control" id="validationCustom07" name="image"  value="{{$product->image}}" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-outline-primary" type="submit">Actualizar</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</body>
</html>