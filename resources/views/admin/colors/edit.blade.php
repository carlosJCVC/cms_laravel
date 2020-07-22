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
              <a href="{{route('admin.colors.index')}}">Volver a Listado</a>
            </div>
            <div class="col-md-6">Usuarios</div>
          </div>
        </div>
        <div class="card-body">
          <form class="needs-validation" action="{{ route('admin.colors.store')}}" novalidate>
                <div class="form-row">
                  
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="name"  value="{{$color->name}}" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                 
                 
                </div>
                <div class="text-center">
                    <button class="btn btn-outline-primary" type="submit">Submit form</button>
                </div>
            </form>

        </div>
      </div>
    </div>
</body>
</html>




