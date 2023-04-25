@extends('layouts.main')
@section('content')
<!-- product list-->
<div class="py-4" style="max-width:98%;">
    <!-- alert -->
    <div class="position-absolute start-50 translate-middle pt-2">

        @if(session()->has('cart-success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
    <div class="row">
        <!-- side bar -->
        <div class="col-3 col-md-3 col-md-3 sticky-top product-sidebar-left">
            <div class="contianer">
                <div class="text-center pt-3">
                    <h5>Filter</h5>
                </div>
                <!-- section category -->
                <div class="product-category p-2">
                    <h6 class="text-muted ms-2">Categort</h6>
                    <ol class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto text-secondary">
                                <a href="#" class="nav-link fw-bold">Phone</a>
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto text-secondary">
                                <a href="#" class="nav-link fw-bold">Bag</a>
                            </div>
                            <span class="badge bg-primary rounded-pill">16</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto text-secondary">
                                <a href="#" class="nav-link fw-bold">Laptop</a>
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                    </ol>
                </div>
                <!-- section price -->
                <div class="product-price p-3">
                    <h6 class="text-muted">Price</h6>
                    <select class="form-select text-secondary" aria-label="Default select example">
                        <option selected>Choes Price</option>
                        <option value="1">100$</option>
                        <option value="2">400$</option>
                        <option value="3">600$</option>
                    </select>
                </div>
                <div class="text-center p-3">
                    <button class="btn btn-primary btn-sm w-100">Apply</button>
                </div>
            </div>
        </div>
        <!-- product items -->
        <div class="col-lg-9">
            <h3 class="ms-2">Products</h3>
            <div class="container">
                <!-- best items products-->
                <h4 class="text-muted py-2">Best Items</h4>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach($products as $data)

                    <div class="col">
                        <div class="card">
                            <img src="{{asset($data['pictures'][0]['path'])}}" class="card-img-top product-best-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$data->title}}</h5>
                                <p class="card-text text-truncate">{{$data->description}}</p>
                                <p class="card-text text-truncate">{{$data->price}} $</p>
                                <a class="icon-link icon-link-hover link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{route('product.info',$data->id)}}">
                                    Read More
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </a>

                                <a href="{{route('cart.add',$data->id)}}" class="mx-4 link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill mb-1 mx-2" viewBox="0 0 16 16">
                                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
                                    </svg>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- new Products -->
                <h3 class="text-muted py-4">New Products</h3>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="{{asset('images/01.jpeg')}}" class="card-img-top product-best-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text-truncate">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a class="icon-link icon-link-hover" href="#">
                                    Read More
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{asset('images/iphone.jpeg')}}" class="card-img-top product-best-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text-truncate">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a class="icon-link icon-link-hover" href="#">
                                    Read More
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{asset('images/lap.png')}}" class="card-img-top product-best-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text-truncate">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                <a class="icon-link icon-link-hover" href="#">
                                    Read More
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop