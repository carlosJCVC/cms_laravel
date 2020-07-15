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
            <form class="needs-validation" action="{{ route('admin.users.store')}}" enctype="multipart/form-data" method="POST" novalidate>
            {{csrf_field()}}
            
 
              <div class="form-row">
  
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">First_Name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="first_name" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Last_name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="last_name" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">CI</label>
                    <input type="text" class="form-control" id="validationCustom01" name="ci" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Phone</label>
                    <input type="text" class="form-control" id="validationCustom02" name="phone" required>
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
                    <label for="validationCustom01">Email</label>
                    <input type="text" class="form-control" id="validationCustom01" name="email" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                                
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Password</label>
                    <input type="password" class="form-control" id="validationCustom01" name="password" required>
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

</body>
</html>