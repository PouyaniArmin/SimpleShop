@extends('layouts.main')
@section('content')
<div class="container py-4">
    <h2 class=" text-center">Contact Us</h2>
    <!-- form -->
    <div class="contact-form py-4">
        <form>
            <div class="row g-3 mb-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
            </div>
            <div class="mb-3">
                <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
            <textarea name="" class="form-control" id="" cols="30" placeholder="Message" rows="5"></textarea>    
        </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</div>
@stop