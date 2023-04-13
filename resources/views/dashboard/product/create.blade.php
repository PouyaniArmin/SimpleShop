@extends('dashboard')
@section('contentDashboard')
<div class="container py-4">
    <h1>Create new Product</h1>
    <!-- form -->
    <!-- details products -->
    <form class="py-4" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-sm-7">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col-sm-5">
                <input type="number" name="price" step="0.01" class="form-control" placeholder="Price">
            </div>
            <div class="mb-3 py-4">
                <label for="formFile" class="form-label">Upload Image</label>
                <input class="form-control" name="image" type="file" id="formFile">
            </div>
            <div class="form-floating mt-4">
                <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
                <label for="floatingTextarea2">Descriptions</label>
            </div>
            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-outline-primary">Save</button>
            </div>
    </form>
</div>
@stop