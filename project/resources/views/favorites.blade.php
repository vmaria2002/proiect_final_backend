@extends('layout')
@section('title', 'Favorites')
@section('content')

<div class="container products">
    <div class="row">
        @if(session('favorites'))
        @foreach(session('favorites') as $id => $details)

        <div class="col-xs-12 col-sm-6 col-md-3" style="padding-left: 8px; margin: 18px ;width:30px;">
            <div class="thumbnail">
                <div class="card" style="width: calc(11rem+12px);height:780px">
                    <a href="{{ url('details/'.$id) }}">
                        <img class="card-img-top" tyle="height:170px" src="{{ $details['photo'] }}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"> {{ $details['name'] }}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Price: </strong> {{ $details['price'] }}$</li>
                    </ul>
                    <div class="card-body">
                        <p class="btn-danger"><a href="{{ url('add-to-cart/'.$id) }}" class="btn btn-danger btn-block text-center" role="button"><i class="fa fa-shopping-cart "></i> Add to cart</a> </p>
                 
                        <p class="btn-success"><a href="{{ url('details/'.$id) }}" class="btn btn-success btn-block text-center" role="button"><i class="fa fa-list-ul"></i> Details</a> </p>
                  
                        <p class="btn-dark"><a href="{{ url('remove-from-favorites/'.$id) }}" class="btn btn-dark btn-block text-center" role="button"><i class="fa fa-heart"></i>Remove from favorite</a> </p>

                    </div>
                </div>

            </div>
        </div>

        @endforeach
        @endif

    </div>
</div>
        

            <tr>
                <td><a href="{{ url('onlineshopping') }}" class="btn btn-success"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
            </tr>
      


@endsection