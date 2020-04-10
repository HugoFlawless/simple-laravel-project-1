@extends('layouts.app', ['current_page'=>'Products'])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/products" method="POST">
                @csrf
                <div class="form-group">
                    <label for="productName">Name</label>
                    <input type="text" class="form-control" name="productName" id="productName"
                    placeholder="Product Name">
                    <br>
                    <label for="productStock">Stock</label>
                    <input type="text" class="form-control" name="productStock" id="productStock"
                    placeholder="0">
                    <br>
                    <label for="productPrice">Price</label>
                    <input type="text" class="form-control" name="productPrice" id="productPrice"
                    placeholder="€">
                    <br>
                    <select class="custom-select" name="productCategoryId">
                        <option selected>Choose a Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-primary btn-sm">Create</button>
            </form>
        </div>
    </div>
@endsection
