@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
    <form action="{{ route('product.create') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="product-name">Product name</label>
            <input type="text" id="product-name" name="name" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="product-description">Description</label>
            <textarea id="product-description" name="content" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
