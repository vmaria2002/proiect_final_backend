


@extends('layout')
@section('title', 'Products')
@section('content')
<div class="container products">
    <div class="row">
        @foreach($products as $product)

        <div class="col-xs-12 col-sm-6 col-md-3" style="padding-left: 8px; margin: 18px ;width:30px;">
            <div class="thumbnail">
                <div class="card" style="width: calc(11rem+12px);height:780px">
                    <a href="{{ url('details/'.$product->id) }}">
                        <img class="card-img-top" tyle="height:170px" src="{{ $product->photo }}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name }}</h5>
                        <p class="card-text" style="height:170px!important">{{(strtolower($product->description)) }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Price: </strong> {{ $product->price }}$</li>
                    </ul>
                    <div class="card-body">
                        <p class="btn-danger"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-danger btn-block text-center" role="button"><i class="fa fa-shopping-cart "></i> Add to cart</a> </p>
                 
                        <p class="btn-success"><a href="{{ url('details/'.$product->id) }}" class="btn btn-success btn-block text-center" role="button"><i class="fa fa-list-ul"></i> Details</a> </p>
                    </div>


                </div>

            </div>
        </div>



        @endforeach
    </div>
</div>
@endsection