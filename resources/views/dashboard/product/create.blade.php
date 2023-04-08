@extends('dashboard')
@section('contentDashboard')
<div class="container py-4">
    <h1>Create new Product</h1>
    <!-- form -->
    <form class="py-4">
        <div class="row g-3">
            <div class="col-sm-7">
                <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="col-sm-5">
                <input type="number" class="form-control" placeholder="Price">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class="form-floating mt-4">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
            </div>
            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-outline-primary">Save</button>
            </div>
    </form>
</div>
@stop