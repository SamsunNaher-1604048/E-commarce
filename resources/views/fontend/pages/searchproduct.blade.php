@extends('fontend.layouts.layout')
@section('content')

<div class="container-fluid">
    <table class="table  table-striped">
        <thead>
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Regular Price</th>
            <th scope="col">Sell Price</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th><img src="{{asset($product->image)}}" alt="cart products" style="height:100px; width:100px;"></th>
                <td>{{$product->name}}</td>
                <th>{{$product->regular_price}}</th>
                <th>{{$product->sell_price}}</th>
                <th>
                    <a type="button" class="btn btn-outline-success" href="{{route('home.product.show', $product->id)}}">Show Product</a>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection