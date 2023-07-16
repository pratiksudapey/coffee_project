<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Order Details</title>
</head>
<body>
    <div class="container">
        <div class="row mt-3" style="display: flex; justify-content: center">
            <h2 class="text-center">Place your Order</h2><br>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route(coffee.index)}}" class="btn btn-primary lg">Order History</a>
                    </div>
                    <div class="card-body">
                      <form action="{{route("coffee.store")}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                              <label for="name">Coffee</label>
                              <input id="name" class="form-control" type="text" name="name" placeholder=" Enter product name">
                          </div>
                          <div class="form-group mt-3">
                              <label for="quantity">Quantity</label>
                              <input id="quantity" class="form-control" type="number" name="quantity" placeholder="Enter Price">
                          </div>
                          <div class="form-group mt-3">
                              <label for="description">Description</label>
                              <input id="description" class="form-control" type="text" name="description" placeholder="Enter Description">
                          </div>
                          <button type="submit" class="btn btn-primary mt-3">Submit</button>
                      </form>
                    </div>
                </div>
            </div>
          </div>
    </div>



</body>
</html>
