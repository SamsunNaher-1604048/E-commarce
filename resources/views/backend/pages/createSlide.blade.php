@extends('backend.layouts.layout')

@section('content')
<div class="box">
    <div class="subbox">
        <p class="p-2">Create Slide</p>
    </div>
    <form action="{{route('slide.store')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="mt-4 col-6">
            <label for="title">Enter Title:</label><br>
            <input type="text" id="title" name="title" class="form-control" ><br>
        </div>
        <div class="col-6">
            <label for="link">Enter Link:</label><br>
            <input type="text" id="link" name="link" class="form-control"><br>
        </div>
        <div class="mb-5">
            <input type="file" id="image" name="image" class="imagesubmit" ><br>
        </div>
        <button type="submit" class="btn submitbutton">submit</button>
    </form>
</div>
@endsection
