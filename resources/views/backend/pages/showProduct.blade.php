@extends('backend.layouts.layout')
@section('content')
<div class="box">
  <div class="subbox">
    <p class="p-2">Show Product</p>
  </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Regular Price</th>
            <th scope="col">Sell Price</th>
            <th scope="col">Badge</th>
            <th scope="col">Tag</th>
            <th scope="col"> Description</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datas as $data)
          <tr class="data">
            <td>{{$data->name}}</td>
            <td>{{$data->title}}</td>
            <th>{{$data->regular_price}}</th>
            <th>{{$data->sell_price}}</th>
            <th>{{$data->badge}}</th>
            <th>{{$data->tag}}</th>
            <th>{!!$data->description!!}</th>
            <th><a href="{{asset($data->image)}}"  type="button" class="btn btn-outline-secondary">Show image</a></th>
            <th>
                <a type="button" class="btn btn-outline-success" href={{route('product.edit',$data->id)}}>Edit</a>
                <a type="button" class="btn btn-outline-danger" href={{route('product.destory',$data->id)}}>delete</a>
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection