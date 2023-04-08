@extends('dashboard')
@section('contentDashboard')
<div class="container py-4">
    <h1 class="fs-3">Management User</h1>
    <!-- form -->
        <form class="row gy-2 gx-3 align-items-center">
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInput">Name</label>
                <input type="text" class="form-control" id="autoSizingInput" placeholder="Username">
            </div>
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                <div class="input-group">
                    <div class="input-group-text">@</div>
                    <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Email">
                </div>
            </div>
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                <select class="form-select" id="autoSizingSelect">
                    <option selected>Choose...</option>
                    <option value="1">User</option>
                    <option value="2">Author</option>
                    <option value="3">Admin</option>
                </select>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-outline-primary">Save</button>
            </div>
        </form>
</div>
@stop