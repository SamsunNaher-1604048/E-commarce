@extends('fontend.layouts.layout')
@section('content')
    <div class="container-fluid">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Unit Price</th>
                <th scope='col'>Quantity</th>
                <th scope='col'>Quantity Update</th>
                <th scope='col'>Total Price</th>
                <th scope="col">Remove</th>
              </tr>
            </thead>
            <tbody>
                <?php $carts = Cart::Content();?>
                @foreach($carts as $cart)
                    <tr>
                        <form action="{{ route('add-to-cart.update') }}" method='post' id="updateForm">
                            @csrf
                            <th>
                                <img src="{{asset($cart->options->image)}}" alt="cart products" style="height:100px; width:100px;"></th>
                            <th>{{$cart->name}}</th>
                            <td>${{$cart->price}}</td>
                            <td>
                                <div class="cart-plus-minus">
                                    <input  value="{{$cart->qty}}" type="text" name="quality" >
                                </div>
                            </td>
                            <td><button class="btn btn-secondary btn-sm" type="submit">update</button></td>
                            <td>{{$cart->price * $cart->qty}}</td>
                            {{-- <td><a href="{{route('add-to-cart.remove',($cart->rowId))}}"><i class="fa fa-close"></i></a></td> --}}
                            <td><button type="button" id='cartdeletebutton' class="btnstyle"><i class="fa fa-close"></i></button></td>
                            <input type="hidden" value="{{$cart->rowId}}" name="rowid" id="input">
                        </form>
                    </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    <script>
        $(document).ready(function(){
        $('#cartdeletebutton').click(function(){
            const id = $('#input').val();
            console.log(id);
            $.ajax({  
                type: 'GET',
                url: '/addtocart/remove/'+id, 
                dataType:'JSON',
                success:function(response) {
                    window.location = "/addtocart/show";
                    //console.log(response);
                }
            });

        })

    })
    </script>
@endsection

