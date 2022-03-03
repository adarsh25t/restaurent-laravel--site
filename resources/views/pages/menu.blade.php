@extends('layouts.app')

@include('sections.navbar')
@section("menu")

<div class="menu-wrapper">

    <form action="{{ route('search') }}" method="POST" class="search_menu">
        @csrf
        <input type="text" name="searchMenu" class="search_item" placeholder="Food Name or Category">
        <input type="submit" value="Search Food" class="search_btn">
    </form>

    <div class="menu-category">
        <div class="category"><a href="">Biriyani 0</a></div>
        <div class="category"><a href="">Arabic Grill</a></div>
        <div class="category"><a href="">Biriyani</a></div>
        <div class="category"><a href="">Biriyani 2</a></div>
        <div class="category"><a href="">Biriyani 1</a></div>
    </div>

    <div class="menu-list">
        @if (count($Foods) > 0)
            @foreach ($Foods as $food)
            <div class="list-menu" data-food="{{ $food }}">
                <div class="menu-image">
                    <img src="{{ asset('foodImage/'.$food->image_path) }}" alt="" class="image">
                </div>
                <div class="menu-details">
                    <h4 class="foodname">{{ $food->Title }}</h4>
                    <span class="category cate" id="categorys">{{ $food->category }}</span><br>
                    <span>{{ $food->price }}</span>
                </div>
            </div>
            @endforeach 
        @else
            <div class="noFood">
                <h4>No Food Is Found!</h4>
            </div>
        @endif
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('addtocart') }}" method="POST">
            @csrf
            <div class="modal-body">
                <input type="text" name="foodId" class="foodId" hidden>
                <img src="" alt="" class="menu_modal_image">
                <div class="menu_modal_details">
                    <h3 class="model_food_name"></h3>
                    <h3 class="model_food_category"></h3>
                    <h3 class="model_food_price">Rs<span></span></h3>
                </div>
            </div>
            <div class="modal-footer menu_modal_footer">
                <div class="qty">
                    <label for="Quantity">Quantity</label>
                    <input type="number" name="Quantity" value="1" id="Quantity">
                </div>
                <h4 class="menu_total" name="total">Total <span></span></h4>
            </div>
            <div class="modal-footer">
                <input type="submit" class="button" value="Add To Cart"></button>
              </div>
        </form>
      </div>
    </div>
  </div>
@include('sections.footer')

@endsection

<script >
    $(document).ready(function() {
        
        $(".menu-list").on('click','.list-menu',function(event){
            $("#exampleModal").modal('show');
            food = $(this).data('food').image_path
            $(".foodId").val($(this).data('food').id)

            var imag=$(this).data('food').image_path
	        var image_path="{{asset('foodImage')}}/";

            $(".menu_modal_image").attr("src",image_path+imag)

            $(".model_food_name").text($(this).data('food').Title);
            $(".model_food_category").text($(this).data('food').category)
            $(".model_food_price span").text($(this).data('food').price);
            $(".menu_total span").text($(this).data('food').price);

            
        })
        $("#Quantity").on("change",function(){
                $(".menu_total span").text(Number($(this).val() * $(".model_food_price span").text()));
            })
    });
</script>