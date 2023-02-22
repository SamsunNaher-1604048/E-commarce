@extends('backend.layouts.layout')
@section('content')

<div class="box mt-5">
    <div>Edit From of: {{$orderitem->product_name}}</div>
    <form action="{{route('admin.order.update')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <input type='hidden' name='orderitem_id' value="{{$orderitem->id}}">
        <input type="hidden" name='order_id' value="{{$order->id}}">
        <div class="mt-4 col-6">
            <label for="title">Enter New Area</label><br>
            <input type="text" name="address" class="form-control" value="{{$order->address}}"><br>
        </div>
        <div class="col-6">
            <label for="link">Enter Quantity</label><br>
            <input type="text" name="quantity" class="form-control" value="{{$orderitem->quantity}}"><br>
        </div>
        <button type="submit" class="btn submitbutton">submit</button>
    </form>
</div>

@endsection