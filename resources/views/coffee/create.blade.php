<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <title>Order Details</title>
</head>

<body>
    <div class="container">
        <div class="row mt-3" style="display: flex; justify-content: center">
            <h2 class="text-center">Place your Order</h2><br>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('coffee.index') }}" class="btn btn-info lg">Order History</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('coffee.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Coffee</label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group mt-3">
                                <label for="quantity">Quantity</label>
                                <input id="quantity" class="form-control" type="number" name="quantity">
                            </div>
                            <div class="form-group mt-3">
                                <label for="description">Description</label>
                                <input id="description" class="form-control" type="text" name="description">
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
