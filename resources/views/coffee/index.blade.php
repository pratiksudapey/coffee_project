@extends('template.master')
@section('body_section')
<body>
    <div class="container">
        <h2 class="text-center">Order Details</h2><br>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('coffees.create') }}" class="btn btn-info lg">Place your Order</a>
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
                                            <a href="{{ route('coffees.edit', $coffee->id) }}"
                                                class="btn btn-sm btn-success">Edit</a>
                                                @can('delete_order')
                                                <form action="{{ route('coffees.destroy', $coffee->id) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input class="btn btn-sm btn-danger" type="submit" value="Delete" />
                                                </form>
                                                @endcan
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
@endsection
