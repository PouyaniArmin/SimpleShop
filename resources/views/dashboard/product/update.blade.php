@extends('dashboard')
@section('contentDashboard')
<div class="container py-4">
    <h1>Update Product</h1>
    <div class="container py-4">
        <h1>Create new Product</h1>
        <!-- form -->
        <!-- details products -->
        <form class="py-4" action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-sm-7">
                    <input type="text" name="title" value="{{$product->title}}" class="form-control" placeholder="Title">
                </div>
                <div class="col-sm-5">
                    <input type="number" name="price" value="{{$product->price}}" step="0.01" class="form-control" placeholder="Price">
                </div>
                <div class="form-floating mt-4">
                    <textarea class="form-control" name="description" id="floatingTextarea2" style="height: 150px">
                    {{$product->description}}
                    </textarea>
                    <label for="floatingTextarea2">Descriptions</label>
                </div>
                <div class="mb-3 py-4">
                    <label for="formFile" class="form-label">Upload Image</label>
                    <input multiple="multiple" class="form-control" name="image[]" type="file" id="formFile">
                </div>
                <!-- show images -->
                <div class="row">
                    <p>Remove Imgage Gallery product</p>
                    @foreach($product->pictures as $item)
                    <div class="col" style="max-width:250px ;">
                        <img src="{{asset($item->path)}}" alt="">
                        <div style="padding-top: 5px;">
                            <a href="{{route('product.remove.image',$item->id)}}" class="text-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- end section show image -->
                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-outline-primary">Save</button>
                </div>
        </form>
    </div>

</div>
@stop