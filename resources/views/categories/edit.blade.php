@extends('layouts.app', ['current_page'=>'Categories'])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/categories/{{ $category->id }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="categoryName">Category Name</label>
                    <input type="text" class="form-control" name="categoryName" id="categoryName"
                value="{{ $category->name }}"
                    placeholder="Category">
                </div>
                <button class="btn btn-primary btn-sm">Edit</button>
            </form>
        </div>
    </div>
@endsection
