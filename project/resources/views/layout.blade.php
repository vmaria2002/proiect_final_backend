<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12 main-section">
                <div class="dropdown">
                    <?php $total = 0 ?>
                    @foreach((array) session('cart') as $id => $details)
                    <?php $total +=  $details['quantity'] ?>
                    @endforeach
                    <button type="button" class="btn btn-info" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ $total }}</span>
                    </button>

                    <div class="dropdown-menu">
                        <div class="row total-header-section">
                            <div class="col-lg-6 col-sm-6 col-6">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ $total }}</span>
                            </div>

                        </div>

                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)

                        <div class="card" style="width: 18rem;"><a href="{{ url('details/'.$id) }}">
                                <img class="card-img-top" src="{{ $details['photo'] }}" alt="Card image cap"></a>
                            <div class="card-body">
                                <p class="card-text">Name: {{ $details['name'] }}</p>
                                <p class="card-text">Price: {{ $details['price'] }}$ </p>
                                <p class="card-text">Quantity: {{ $details['quantity'] }}</p>

                            </div>
                        </div>

                        @endforeach
                        @endif
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>



            <div class="col-lg-12 col-sm-12 col-12 main-section">
                <div class="dropdown">
                    <?php $total = 0 ?>
                    @foreach((array) session('favorites') as $id => $details)
                    <?php $total +=  $details['quantity'] ?>
                    @endforeach
                    <button type="button" class="btn btn-danger" style="margin-top:-67px; margin-left:130px " data-toggle="dropdown">
                        <i class="fa fa-heart" aria-hidden="true"></i> Favorites<span class="badge badge-pill badge-warning">{{ $total }}</span>
                    </button>
                    <div class="dropdown-menu">



                        @if(session('favorites'))
                        @foreach(session('favorites') as $id => $details)

                        <div class="card" style="width: 18rem;"><a href="{{ url('details/'.$id) }}">
                                <img class="card-img-top" src="{{ $details['photo'] }}" alt="Card image cap"></a>
                            <div class="card-body">
                                <p class="card-text">Name: {{ $details['name'] }}</p>
                                <p class="card-text">Price: {{ $details['price'] }}$ </p>


                            </div>
                        </div>

                        @endforeach <div class="row">

                            @endif
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a href="{{ url('favorites') }}" class="btn btn-primary btn-block">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                
                <button type="button" class="btn btn-warning" style="margin-top:-115px; margin-left:1135px ">
                   
                    <a href="{{ url('/searchProducts') }}"></i> Search</a>
                           
                </button>

                <div class="col-12">

                 

                    

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="col-lg-12 col-sm-12 col-12 main-section">
                
                    <button type="button" class="btn btn-danger" style="margin-top:-115px; margin-left:1135px " data-toggle="dropdown">
                        <i class="fa fa-heart" aria-hidden="true"></i> Search<span class="badge badge-pill badge-warning">{{ $total }}</span>
                    </button>
        </div> -->



    </div>

    <div class="container page">
        @yield('content')
    </div>

    @yield('scripts')
    

</body>

</html>