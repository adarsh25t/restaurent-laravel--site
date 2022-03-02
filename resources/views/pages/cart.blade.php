@extends('layouts.app')

@section('cart')
@include('sections.navbar')

<form action="{{ route('confirmOrder') }}" method="POST">
    @csrf
    <div class="cart-table">
        <div class="cart-item">
            <div>
                <h4>Image</h4>
                <h4>Food Name</h4>
                <h4>Price</h4>
                <h4>Quantity</h4>
                <h4>Total Price</h4>
                <h4>Action</h4>
            </div>
            @foreach ($data as $food)
                <div>
                    <h4><img src="{{ asset('foodImage/'.$food->image_path) }}" alt=""></h4>
                    <h4>{{ $food->Title }}
                        <input type="text" value="{{ $food->Title }}" name="foodname[]" hidden>
                    </h4>
                    <h4>{{ $food->price }}
                        <input type="text" value="{{ $food->price }}" name="foodprice[]" hidden>
                    </h4>
                    <h4>{{ $food->quantity }}
                        <input type="text" value="{{ $food->quantity }}" name="foodquantity[]" hidden>
                    </h4>
                    <h4>{{ $food->price * $food->quantity}}
                        <input type="text" value="{{ $food->price * $food->quantity }}" name="foodtotal[]" hidden>
                    </h4>
                </div>
            @endforeach
    
            <div class="cart-action">
                @foreach ($data2 as $action)
                <h4 class="action_cart"><a href="{{ route('removeCart',$action->id) }}">Delete</a></h4>
            @endforeach
            </div>
        </div>
        <div class="conform-order">
                <label for="">Name</label>
                <input type="text" name="name" placeholder="name">
                <label for="">Phone</label>
                <input type="number" name="phone" placeholder="phone number">
    
                <label for="">Address</label>
                <input type="text" name="address" placeholder="address">
    
                <input type="submit" value="Confirm Order" class="confirm-order">
        </div>
    </div>
    <button class="Checkout" type="button">Order Now</button>
</form>

<script type="text/javascript">
      $(document).ready(function() {
        $(".conform-order").hide();
        $(".Checkout").on("click",function(){
            $(".conform-order").show();
        })
    })
</script>
@endsection
