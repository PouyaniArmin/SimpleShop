@extends('layouts.main')
@section('content')
<!-- product list-->
<div class="py-4" style="max-width:98%;">
    <div class="container sproduct my-5 pt-5">
        <div class="row mt-5">
            <div class="main col-lg-5 col-md-12 col-sm-12">
                <!-- big image -->
                <img src="{{asset($product['pictures'][0]['path'])}}" class="big img-fluid w-100 border" id="MainImg" alt="">

                <div class="small-img-group pt-2">
                    <!-- small image -->
                    @foreach($product->pictures as $pic)
                    <div class="small-img-col" id="slider">
                        <img src="{{asset($pic->path)}}" width="100%" onclick="this.src='path'" class="each small-img active" alt="">
                    </div>
                    @endforeach

                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3 class="my-4">{{$product->title}}</h3>

                <h4 class="mt-5">Product Details</h4>
                <span>{{$product->description}}</span>
                <div class="py-4">
                    <input type="number" value="1">
                    <button class="btn btn-dark">Add To Cart</button>

                </div>
            </div>


        </div>
    </div>
</div>
<script>
    var main = document.querySelector(".main"),
        big = main.querySelector(".big"),
        smalls = main.querySelectorAll(".each")
    big.setAttribute("src", smalls[0].getAttribute("src"))
    smalls.forEach(each => {
        each.onclick = function() {
            smalls.forEach(ss => ss.classList.remove("active"))
            each.classList.add("active")
            big.setAttribute("src", each.getAttribute("src"))
        }
    });
</script>
@stop