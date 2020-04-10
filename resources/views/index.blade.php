@extends('layouts.app', ['current_page'=>'Home'])

@section('body')
    <div class="container">
        <div class="row ">
            <div class="col-12 d-flex justify-content-center pb-3">
                <h1>Laravel Project - Products & Categories </h1>
            </div>
        </div>
        <div class="row border d-flex justify-content-center py-4">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Products Registration</h5>
                        <p class="card-text">
                            Here you can register products.
                            Dont forget to register first the categories for them.
                        </p>
                        <a href="/products/create" class="btn btn-primary">Register your product</a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Categories Registration</h5>
                        <p class="card-text">
                            Here you can register categories for your products.
                        </p>
                        <a href="/categories/create" class="btn btn-primary">Register your category</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer pt-3">
            <div class="col-12 d-flex justify-content-center">
                <p>Created by <a href="https://github.com/HugoNoWorries">Hugo Nogueira</a> using <a href="https://laravel.com/">Laravel Framework</a></p>
            </div>
        </div>
    </div>
@endsection
