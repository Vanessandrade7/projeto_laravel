@extends('layouts.app')

@section('title', 'List of Products')

@section('content')
    <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">Add New Product</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Content</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">
                {{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->content }}</td>
                <td><a href="{{ route('product.show', $product->id) }}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
