@extends('layout')
@section('title', 'Products')
@section('content')
<div class="container products">
    <div class="row">
        @foreach($products as $product)

        <div class="col-xs-12 col-sm-6 col-md-3" style="padding-left: 8px; margin: 18px ;width:30px;">
            <div class="thumbnail">
                <div class="card" style="width: calc(11rem+12px);height:780px">
                    <img class="card-img-top" tyle="height:170px"src="{{ $product->photo }}">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name }}</h5>
                        <p class="card-text"style="height:170px!important">{{(strtolower($product->description)) }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Price: </strong> {{ $product->price }}$</li>
                    </ul>
                    <div class="card-body" style="margin-bottom:2px">
                        <p class="btn-danger"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-danger btn-block text-center" role="button">Add to cart</a> </p>

                    </div>
                </div>

            </div>
        </div>


        <!-- <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $product->photo }}" width="500" height="300">
                <div class="caption">
                    <h4>{{ $product->name }}</h4>
                    <p>{{ (strtolower($product->description)) }}</p>
                    <p><strong>Price: </strong> {{ $product->price }}$</p>
                    <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>

            </div>
        </div> -->
        @endforeach
    </div><!-- End row -->
</div>
@endsection