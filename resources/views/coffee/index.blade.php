<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Order</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Order Details</h2><br>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route("coffee.create")}}" class="btn btn-primary lg">Place an Order</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-stripped table-bordered">
                            <thead>
                            <tr>
                              <th>Coffee Type</th>
                              <th>Quantity</th>
                              <th>Description</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            {{-- @foreach($coffees as $coffee)
                              <tr>
                                <th>{{$coffee->name}}</th>
                                <th>{{$coffee->price}}</th>
                                <th>{{$coffee->description}}</th>
                                <th>
                                  <a href="{{route("coffee.edit",$coffee->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                  <form action="{{route("coffee.destroy")}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input class="btn btn-sm btn-danger" type="submit" value="Delete" />
                                 </form>
                                </th>
                              </tr>
                            @endforeach --}}
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
