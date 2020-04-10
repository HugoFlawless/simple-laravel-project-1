@extends('layouts.app', ['current_page'=>'Categories'])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title"> Categories Registration</h5>
            @if (count($categories)>0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Category Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="/categories/edit/{{ $category->id }}" class="btn btn-primary">Edit</a>
                                    <a href="/categories/delete/{{ $category->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            @endif

        </div>
        <div class="card-footer">
            <a href="/categories/create" class="btn btn-primary" role=button>Add Category</a>
        </div>
    </div>
@endsection
