@extends('backend.layouts.layout')
@section('content')

<div class="box">
    <div class="subbox">
        <p class="p-2">Create Category</p>
    </div>
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <div class="mt-4 col-6">
            <label for="title">Enter Category title:</label><br>
            <input type="text" name="title" class="form-control" placeholder="category"><br>
        </div>
        <button type="submit" class="btn submitbutton">submit</button>
    </form>
</div>

@endsection