@extends('template.master')
@section('body_section')
<body>
    <div class="container">
        <div class="row mt-3" style="display: flex; justify-content: center">
            <h2 class="text-center">Update your Order</h2><br>

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
                        <form action="{{ route('coffees.update', $coffee->id) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="name">Coffee</label>
                                <input id="name" class="form-control" type="text" name="name"
                                    value="{{ $coffee->name }}">
                            </div>
                            <div class="form-group mt-3">
                                <label for="quantity">Quantity</label>
                                <input id="quantity" class="form-control" type="number" name="quantity"
                                    value="{{ $coffee->quantity }}">
                            </div>
                            <div class="form-group mt-3">
                                <label for="description">Description</label>
                                <input id="description" class="form-control" type="text" name="description"
                                    value="{{ $coffee->description }}">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
