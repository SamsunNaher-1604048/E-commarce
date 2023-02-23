@extends('backend.layouts.layout')
@section('content')

<div class="row p-3">
    <div class="col-3 m-2 subbox d-flex justify-content-center">
        <p class="p-5">Total User: {{$user}}</p>
    </div>
    <div class="col-3 m-2 subbox d-flex justify-content-center">
        <a href="{{route('category.show')}}" class="p-5">Total Category: {{$totalcat}}</a>
    </div>
    <div class="col-3 m-2 subbox d-flex justify-content-center">
        <a href="{{route('product.show')}}" class="p-5">Total Product: {{$totalpro}}</a>
    </div>
</div>

@endsection