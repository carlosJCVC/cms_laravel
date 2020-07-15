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
            <form class="needs-validation" action="{{ route('admin.products.store')}}" enctype="multipart/form-data" method="POST" novalidate>
            {{csrf_field()}}
            
            <div class="col-md-12 mb-3">

                      <input type="file" name="image">
            </div>    
              
              <div class="form-row">
  
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Name</label>
                    <input type="text" class="form-control {{ $errors->first('name')? 'is-invalid' : '' }}" id="validationCustom01" name="name" required>
                    <div class="invalid-feedback">
                      {{ $errors->first('name') }}
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Codigo</label>
                    <input type="text" class="form-control" id="validationCustom01" name="code" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Precio de compra</label>
                    <input type="text" class="form-control" id="validationCustom01" name="price_compra" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Precio de venta</label>
                    <input type="text" class="form-control" id="validationCustom02" name="price_venta" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
    
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">status</label>
                    <input type="text" class="form-control" id="validationCustom01" name="status" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Stock</label>
                    <input type="text" class="form-control" id="validationCustom01" name="stock" required>
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

    <script src="/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <script>
      $('#validationCustom01').keyup(function(e) {
        e.preventDefault()

        if ($(this).val() == '') {
          $('#validationCustom01').removeClass('is-valid');
          $('#validationCustom01').addClass('is-invalid');
        } else {
          $('#validationCustom01').removeClass('is-invalid');
          $('#validationCustom01').addClass('is-valid');
        }
      })
    </script>
</body>
</html>