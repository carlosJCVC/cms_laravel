<div class="container">
        <div class="mt-5">
            <form class="needs-validation" action="{{ route('admin.product.update',$product->id)}}" method="post"  novalidate >
            @csrf @method("put")
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="name" value="{{old('name', $product->name ?? '')}}" required>
                    <div class="valid-feedback">
                      <!-- Looks good! -->
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Price</label>
                    <input type="text" class="form-control" id="validationCustom02" name="price" value="{{old('price', $product->price ?? '')}}" required>
                    <div class="valid-feedback">
                      <!-- Looks good! -->
                    </div>
                  </div>
    
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Category</label>
                    <input type="text" class="form-control" id="validationCustom02" name="category" value="{{old('category', $product->category ?? '')}}" required>
                    <div class="valid-feedback">
                      <!-- Looks good! -->
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