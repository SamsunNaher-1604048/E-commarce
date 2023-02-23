@extends('backend.layouts.layout')
@section('content')
<div class="box">
  <div class="subbox">
    <p class="p-2">Show Category</p>
</div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Slack</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
          <tr class="data">
            <td>{{$category->title}}</td>
            <td>{{$category->slack}}</td>
            <td>
                <a type="button" class="btn btn-outline-success" href={{route('category.edit',$category->id)}}>Edit</a>
                <a type="button" class="btn btn-outline-danger" href={{route('category.destory',$category->id)}}>delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
<div>
@endsection