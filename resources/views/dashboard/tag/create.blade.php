@extends('dashboard')
@section('contentDashboard')
<div class="container py-4">
    <h1>Create new Tag</h1>
    <!-- form -->
    <form class="py-4">
        <div class="row g-3">
            <div class="col-sm-7">
                <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-outline-primary">Save</button>
            </div>
    </form>
</div>
@stop