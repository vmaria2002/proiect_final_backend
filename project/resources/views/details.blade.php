<style>
   
    body {
        background-color: #000
    }

    .card {
        border: none
    }

    .product {
        background-color: #eee
    }

    .brand {
        font-size: 13px
    }

    .act-price {
        color: red;
        font-weight: 700
    }

    .dis-price {
        text-decoration: line-through
    }

    .about {
        font-size: 14px
    }

    .color {
        margin-bottom: 10px
    }

    label.radio {
        cursor: pointer
    }

    label.radio input {
        position: absolute;
        top: 0;
        left: 0;
        visibility: hidden;
        pointer-events: none
    }

    label.radio span {
        padding: 2px 9px;
        border: 2px solid #ff0000;
        display: inline-block;
        color: #ff0000;
        border-radius: 3px;
        text-transform: uppercase
    }

    label.radio input:checked+span {
        border-color: #ff0000;
        background-color: #ff0000;
        color: #fff
    }

    .btn-danger {
        background-color: #ff0000 !important;
        border-color: #ff0000 !important
    }

    .btn-danger:hover {
        background-color: #da0606 !important;
        border-color: #da0606 !important
    }

    .btn-danger:focus {
        box-shadow: none
    }

    .cart i {
        margin-right: 10px
    }
</style>

@extends('layout')
@section('title', 'Products')
@section('content')


<section style="background-color: white;">
    <button type="button" class="btn btn-danger" style="margin-top:-36px!important; margin-left:130px!important " data-toggle="dropdown">
        <i class="fa fa-heart" aria-hidden="true"></i> Favorites
    </button>
    <div class="container my-5 py-5 text-dark">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">

                            <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <div class="carousel-item active" data-mdb-interval="0">
                                        <img src="{{ $product->photo }}" width="250"  class="d-block w-100" alt="Wild Landscape" />
                                    </div>
                                    <div class="carousel-item" data-mdb-interval="0">
                                        <img src="{{ $product->photo }}" width="250"  class="d-block w-100" alt="Camera" />
                                    </div>
                                    <div class="carousel-item"data-mdb-interval="0">
                                        <img src="{{ $product->photo }}" width="250"  class="d-block w-100" alt="Exotic Fruits" />
                                    </div>
                                </div>

                            </div>

                            <!-- <div class="images p-3">
                                <div class="text-center p-4"> <img id="main-image" src="{{ $product->photo }}" width="250" /> </div>
                                <div class="thumbnail text-center"> <img onclick="change_image(this)" src="{{ $product->photo }}" width="70"> <img onclick="change_image(this)" src="{{ $product->photo }}" width="70"> </div>
                            </div> -->
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center"><a href="{{ url('onlineshopping') }}"> <i class="fa fa-long-arrow-left"><button class="btn">Back</button></a> </i></div>
                                </div>
                                <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Phone</span>
                                    <h5 class="text-uppercase">{{$product->name }}</h5>
                                    <div class="price d-flex flex-row align-items-center"> <span class="act-price"> {{ $product->price }}$</span>

                                    </div>
                                </div>
                                <p class="about"> {{(strtolower($product->description)) }}</p>
                                <div class="cart mt-4 align-items-center"><a href="{{ url('add-to-cart/'.$product->id) }}"> <button class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button></a></div>

                                <p class="cart mt-4 align-items-center"><a href="{{ url('addToFavorites/'.$product->id) }}" class="btn btn-danger text-uppercase mr-2 px-4" role="button"><i class="fa fa-heart text-muted"></i> Add to favorite</a> </p>
                               
                                <!-- <div class="cart mt-4 align-items-center"><a href="{{ url('addToFavorites/'.$product->id) }}"> <button class="btn btn-danger text-uppercase mr-2 px-4"><i class="fa fa-heart text-muted" style="color:#fff">Add to cart</i></button></a> </div>
                               -->
                                <!-- addToFavorites/{id}
                                <div class="card-body">
                                    <p class="btn-success"><a href="{{ url('details/'.$product->id) }}" class="btn btn-success btn-block text-center" role="button"><i class=" fa-heart text-muted""></i> Add to Favorites</a> </p>
                                </div> -->
                            </div>
                         
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #ad655f;">
    <div class="container my-5 py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="card text-dark">
                    <div class="card-body p-4">
                        <h4 class="mb-0">All comments</h4>


                    </div>

                    <hr class="my-0" />

                    <div class="card-body p-4">
                        <div class="d-flex flex-start">
                            <img class="rounded-circle shadow-1-strong me-3" height="60" />
                            <div>
                                <h6 class="fw-bold mb-1">Lara Stewart</h6>

                                <p class="mb-0">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                    has roots in a piece of classical Latin literature from 45 BC, making it
                                    over 2000 years old. Richard McClintock, a Latin professor at
                                    Hampden-Sydney College in Virginia, looked up one of the more obscure
                                    Latin words, consectetur, from a Lorem Ipsum passage, and going through
                                    the cites.
                                </p>
                            </div>
                        </div>
                    </div>

                    <hr class="my-0" style="height: 1px;" />

                    <div class="card-body p-4">
                        <div class="d-flex flex-start">

                            <div>
                                <h6 class="fw-bold mb-1">Alexa Bennett</h6>

                                <p class="mb-0">
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable. If you are
                                    going to use a passage of Lorem Ipsum, you need to be sure.
                                </p>
                            </div>
                        </div>
                    </div>

                    <hr class="my-0" />

                    <div class="card-body p-4">
                        <div class="d-flex flex-start">

                            <div>
                                <h6 class="fw-bold mb-1"><b> {{ Auth::user()->name}} </b></h6>

                                <p id="data"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section style="background-color: #ad655f;">
    <div class="container my-5 py-5 text-dark">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="d-flex flex-start w-100">
                            <div class="w-100">
                                <h5>Add a comment, {{ Auth::user()->name}} ({{ Auth::user()->email}})</h5>

                                <div class="form-outline">
                                <textarea id ="userComment" rows="4" cols="50" name="comment"> Enter comment here...</textarea>
         <br><br>                             </div>
                                <div class="d-flex justify-content-between mt-3">
                                <input type="button" onclick="myFunction()" value="Submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<script>
// Activate Carousel
$("#myCarousel").carousel();

// Enable Carousel Indicators
$(".item").click(function(){
  $("#").carousel(1);
});

// Enable Carousel Controls
$(".carousel-control-prev").click(function(){
  $("#myCarousel").carousel("prev");
});

</script>
<script>
         function myFunction(){
          let data = "";  
          let comment = document.getElementById("userComment").value
         
         data = comment+"</br>"
         
         document.getElementById("data").innerHTML = data  // display data to paragraph
         }
      </script>

