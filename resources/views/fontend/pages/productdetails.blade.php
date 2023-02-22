@extends('fontend.layouts.layout')
@section('content')
<?php 
$carts = Cart::content();
$collections = collect($carts);
?>


<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Single Product</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- content-wraper start -->
<input type="hidden" id='product_id' value="{{$product->id}}">
<div class="content-wraper">
    <div class="container">
        <div class="row single-product-area">
            <div class="col-lg-5 col-md-6">
               <!-- Product Details Left -->
                <div class="product-details-left">
                    <div class="product-details-images slider-navigation-1">
                        <div class="lg-image mt-4">
                            <a class="popup-img venobox vbox-item" href="images/product/large-size/1.jpg" data-gall="myGallery">
                                <img src={{asset($product->image)}} alt="product image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="product-details-view-content pt-60">
                    <div class="product-info">
                        <h2>{{$product->name}}</h2>
                        <div class="price-box pt-20">
                            <span class="new-price new-price-2">${{$product->sell_price}}</span>
                        </div>
                        <div class="product-desc">
                            <p>
                                <span>{!!$product->description!!}</span>
                            </p>
                        </div>


                        <div class="single-add-to-cart cart-quantity">
                            <button class="add-to-cart" type="button" id='cartbutton'> Add to cart</button>
                        </div>
                        <div class="product-additional-info pt-25">
                          
                            <div class="product-social-sharing pt-25">
                                <ul>
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                    <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="block-reassurance">
                            <ul>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-check-square-o"></i>
                                        </div>
                                        <p>Security policy (edit with Customer reassurance module)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <p>Delivery policy (edit with Customer reassurance module)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-exchange"></i>
                                        </div>
                                        <p> Return policy (edit with Customer reassurance module)</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- content-wraper end -->

<!-- Product Area End Here -->
<!-- Begin Li's Laptop Product Area -->
<section class="product-area li-laptop-product pt-30 pb-50">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Other products in the same category:</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        @foreach($products as $product)
                        <div class="col-lg-12">
                            <div class="single-product-wrap">

                                <div class="product-image">
                                    <a href="{{route('home.product.show',$product->id)}}">
                                        <img src={{asset($product->image)}} alt="Li's Product Image">
                                    </a>
                                    
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <h4><a class="product_name" href="{{route('home.product.show',$product->id)}}">{{$product->name}}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">${{$product->sell_price}}</span>
                                        </div>

                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link mt-3">
                                            <div class="single-add-to-cart cart-quantity">
                                                <a type="button" class="btn btn-warning addtocartButton" href="{{route('home.product.show',($product->id))}}">View product</a>
                                           </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
        $('#cartbutton').click(function(){
            const id = $('#product_id').val();
            $.ajax({  
                type: 'GET',
                url: '/add-to-cart/'+id, 
                dataType:'JSON',
                success:function(response) {
                    window.location = "/addtocart/show";
                }
            });
        })

    })
</script>

@endsection