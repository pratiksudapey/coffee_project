@extends('template.master')
@section('body_section')
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
                        <a href="{{ route('coffees.index') }}" class="btn btn-info lg">Order History</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('coffees.store') }}" method="post" enctype="multipart/form-data">
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
@endsection
