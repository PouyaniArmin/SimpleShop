@extends('layouts.main')
@section('content')
<!-- product list-->
<div class="py-4" style="max-width:98%;">
    <h2 class="text-center py-4">Cart</h2>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th style="width: 40%;">Product</th>
                    <th style="width: 10%;">Price</th>
                    <th style="width: 18%;">Quantity</th>
                    <th style="width: 22%;">Subtotal</th>
                    <th style="width: 10%;"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Hp pro11</td>
                    <td>560$</td>
                    <td><input type="number" style="width: 70%;" value="1"></td>
                    <td>560$</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
                <a href="/product" class="btn btn-primary">Countinue Shopping</a>
            </div>
            <div class="col-3" style="margin-left: -100px;">
            <a href="#" class="btn btn-danger">Checkout</a>
            </div>
        </div>
    </div>
</div>
@stop