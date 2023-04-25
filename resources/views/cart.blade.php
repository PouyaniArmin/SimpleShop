@extends('layouts.main')
@section('content')
<!-- product list-->
<div class="py-4" style="max-width:98%;">
    <h2 class="text-center py-4">Cart</h2>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th style="width: 30%;">Product</th>
                    <th style="width: 10%;">Price</th>
                    <th style="width: 30%;">Quantity</th>
                    <th style="width: 22%;">Subtotal</th>
                    <th style="width: 10%;"></th>
                </tr>
            </thead>
            <tbody>
                @php $total=0 @endphp
                @if (session('cart')!=null)
                @foreach(session('cart') as $id=>$details)
                @php $total+=$details['price']*$details['quantity'] @endphp
                <tr>
                    <th scope="row">1</th>
                    <td>{{$details['title']}}</td>
                    <td>{{$details['price']}}$</td>
                    <td>
                        <div class="row">
                            <div class="col-1">
                                <a href="{{route('cart.minus-cart',$id)}}" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="col-4 ms-2">
                                <input type="number" style="width: 70%;" value="{{$details['quantity']}}">
                            </div>
                            <div class="col">
                                <a href="{{route('cart.plus-cart',$id)}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </td>

                    <td>{{$details['price']*$details['quantity']}}$</td>
                    <td><a href="{{route('cart.remove-cart',$id)}}" class="btn btn-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
</svg>
                    </a></td>
                </tr>
                @endforeach
                @endif
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