@extends('layouts.app', ['current_page'=>'Products'])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title"> Products Registration</h5>
            @if (count($products)>0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Product Name</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Category ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $categories->find($product->category_id)->name}}</td>
                                <td>
                                    <a href="/products/edit/{{ $product->id }}" class="btn btn-primary">Edit</a>
                                    <a href="/products/delete/{{ $product->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            @endif

        </div>
        <div class="card-footer">
            <a href="/products/create" class="btn btn-primary" role=button>Add Product</a>
        </div>
    </div>
@endsection
