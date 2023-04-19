@extends('dashboard')
@section('contentDashboard')
<div class="container py-4">
    <h1>Update Category</h1>
    <!-- form -->
    <form class="py-4" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-sm-7">
                <input type="text" name="title" class="form-control" value="{{$category->title}}" placeholder="Name">
            </div>

            <div class="mb-3 py-4">
                <label for="formFile" class="form-label">Upload Image</label>
                <input  class="form-control" name="image" type="file" id="formFile">
            </div>

            <div class="row pt-4 pb-4">
                <div class="col" style="max-width:250px ;">
                    <img src="{{asset($category->pic)}}" alt="">
                    <div style="padding-top: 5px;">
                        <a href="" class="text-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-outline-primary">Save</button>
            </div>

    </form>
</div>
@stop