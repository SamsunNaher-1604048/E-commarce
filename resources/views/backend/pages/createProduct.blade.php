@extends('backend.layouts.layout')
@section('content')
<div class="box">
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="name">Enter name of Product :</label><br>
                <input type="text" name="name" class="form-control" placeholder="Title">
            </div>
            <div class="col-6">
                <label for="category">Enter name of Category:</label><br>
                <select class="form-select" aria-label="Default select example" name="category" class="form-control">
                    @foreach($categorys as $category)
                        <option value={{$category['id']}}>{{$category['title']}}</option>
                    @endforeach
                  </select>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-6">
                <label for="regular-price">Enter Regular price:</label><br>
                <input type="text" name="regular_price" class="form-control" placeholder="Title">
            </div>
            <div class="col-6">
                <label for="sell-price">Enter Sell price:</label><br>
                <input type="text" name="sell_price" class="form-control" placeholder="category">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-6">
                <label for="description">Enter Description of product</label><br>
                <textarea rows = "6" cols = "40" name = "description" class="form-control"  id="editor"  placeholder="Enter details here...">
                    
                 </textarea><br>
            </div>
            <div class="col-6">
                    <div>
                        <label for="badge">Enter Badge of Product:</label><br>
                        <select class="form-select" aria-label="Default select example" name="badge"  class="form-control">
                            <option value="NEW">NEW</option>
                          </select>
                    </div>
                    <div>
                        <label for="tag">Enter Tag of this product</label><br>
                        <select class="form-select" aria-label="Default select example" name="tag" class="form-control">
                            <option value="Trendding Products">Trendding Products</option>
                            <option value="Bestsellers">Bestsellers</option>
                          </select>
                    </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <button type="submit" class="btn submitbutton">submit</button>
            </div>
            <div class="col-6">
                <input type="file" name="image"  class="imagesubmit"><br> 
            </div>
        </div>
    </form>
<div>
@section('js')
<script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) );
</script>
@endsection

@endsection