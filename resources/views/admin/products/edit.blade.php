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
        <div class="mt-5">
            <form class="needs-validation" action="{{ route('admin.products.update', ['id' => $product->id]) }}" enctype="multipart/form-data"  method="POST" novalidate>
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            <div class="col-md-12 mb-3">

                @if($product->image)
                    <img src="{{ asset( 'images/' . $product->image)}}" width=150>  
                @else
                    <p>Sin foto</p> 
                @endif
            </div>

            <div class="col-md-12 mb-3">
                <input type="file" name="image" value="{{$product->image}}">
            </div>    


              
              <div class="form-row">
  
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="name" value="{{$product->name}}" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Codigo</label>
                    <input type="text" class="form-control" id="validationCustom01" name="code" value="{{$product->code}}" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Precio de compra</label>
                    <input type="text" class="form-control" id="validationCustom01" name="price_compra" value="{{$product->price_compra}}" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Precio de venta</label>
                    <input type="text" class="form-control" id="validationCustom02" name="price_venta" value="{{$product->price_venta}}" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
    
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Category</label>
                    <input type="text" class="form-control" id="validationCustom02" name="category" value="{{old('category_id', $product->category ?? '')}}" required>
                    <div class="valid-feedback">
                      <!-- Looks good! -->
                    </div>
                  </div>
                </div>
                    <label for="validationCustom01">status</label>
                    <input type="text" class="form-control" id="validationCustom01" name="status" value="{{$product->status}}" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Stock</label>
                    <input type="text" class="form-control" id="validationCustom01" name="stock" value="{{$product->stock}}" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Category</label>
                        <select class="custom-select" name="category_id" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                              @foreach($categories as $categorie)
                                <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                              @endforeach
                        </select>
                      <div class="valid-feedback">
                           Looks good!
                       </div>
                   </div>

                   <div class="col-md-4 mb-3">
                    <label for="validationCustom02">User</label>
                        <select class="custom-select" name="user_id" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                              @foreach($users as $user)
                                <option value="{{$user->id}}"> {{$user->first_name}}</option>
                              @endforeach
                        </select>
                      <div class="valid-feedback">
                           Looks good!
                       </div>
                   </div>

                                

              </div>

                <div class="text-center">
                    <button class="btn btn-outline-primary" type="submit">Submit form</button>
                </div>
            </form>

            {{$errors}}
        </div>
    </div>
    </div>

</body>
</html>

