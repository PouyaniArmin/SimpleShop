@extends('layouts.main')
@section('content')
<!-- product list-->
<div class="py-4" style="max-width:98%;">
    <div class="container pt-4 py-4">
        <div class="row">
            <div class="col-6">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner single-product">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{asset('images/02.jpg')}}" class="d-block" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="{{asset('images/01.jpeg')}}" class="d-block" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('images/lap.png')}}" class="d-block" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden" style="background-color:green;">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- description -->
            <div class="col-6">
                <!-- name -->
                <div class="py-2">
                    <h1 class="fs-2">Product Name</h1>
                </div>
                <!-- body -->
                <div class="text-muted">
                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</p>
                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</p>
                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</p>
                </div>
                <!-- buutom -->
                <div class="row py-2 text-center">
                    <div class="col-4">
                        <a href="#" class="btn btn-danger">Add To Cart</a>
                    </div>
                    <div class="col-5"><a href="" class="btn btn-primary"> Countinue Shopping</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop