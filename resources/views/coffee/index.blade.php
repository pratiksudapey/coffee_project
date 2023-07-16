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
    <title>Order</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Order Details</h2><br>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('coffee.create') }}" class="btn btn-info lg">Place an Order</a>
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
                                @foreach ($coffees as $coffee)
                                    <tr>
                                        <th>{{ $coffee->name }}</th>
                                        <th>{{ $coffee->quantity }}</th>
                                        <th>{{ $coffee->description }}</th>
                                        <th>
                                            <a href="{{ route('coffee.edit', $coffee->id) }}"
                                                class="btn btn-sm btn-success">Edit</a>
                                            <form action="{{ route('coffee.destroy',$coffee->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <input class="btn btn-sm btn-danger" type="submit" value="Delete" />
                                            </form>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
