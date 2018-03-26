@extends('admin.layout.admin')
@section('content')
    <h3>Product List</h3>
    <ul>
        @forelse ($products as $product)
            <li>
                <h4>Name of Product {{$product->name}} </h4>
            </li>
        @empty
            <h3>No Products</h3>
        @endforelse
    </ul>
@endsection