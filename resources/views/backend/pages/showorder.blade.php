@extends('backend.layouts.layout')
@section('content')
<div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Order Id</th>
            <th scope="col">Coustomer</th>
            <th scope="col">Total Amount</th>
            <th scope="col">Area</th>
            <th scope="col">Order Item</th>
            <th scope="col">Order Amount</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{$order->id}}</th>
                <td><P>{{$order->customer_name}}</P><br>
                    <p>{{$order->phone}}</p></td>
                <td>{{$order->total_price}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->product_name}}</td>
                <td>{{$order->quantity}}</td>
                <td>
                    <a type="button" class="btn btn-outline-secondary" href="{{route('admin.order.edit',[$order->id])}}">Edit</a>
                    <a type="button" class="btn btn-outline-danger" href="{{route('admin.order.delete',[$order->id])}}">Delete</a>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection