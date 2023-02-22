@extends('backend.layouts.layout')
@section('content')
<div class="box">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($slides as $slide)
          <tr class="data">
            <td>{{$slide->title}}</td>
            <td><a type="button" class="btn btn-outline-secondary" href={{asset($slide->image)}}>Show Image</a></td>
            <td>
                <a type="button" class="btn btn-outline-success" href={{route('slide.edit',$slide->id)}}>Edit</a>
                <a type="button" class="btn btn-outline-danger" href={{route('slide.destory',$slide->id)}}>delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
<div>
@endsection
