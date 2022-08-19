<main id="main" class="main-site left-sidebar">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"> <a href="#" class="link"> Home</a></li>
                <li class="item-link"> <a href="#" class="link"> Digital and electronics</a></li>
            </ul>
        </div>
<div class="row">
    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main content-area">
        <div class="banner-shop">
            <a href="#" class="banner-link">
                <figure><img src="asserts/images/shop-banner.jpg"></figure>
            </a>
        </div>
    
<div class="wrap-shop-control">
<h1 class="shop-title">Digital & electronics</h1>
<div class="wrap-right">
<div class="sort-item orderby">
    <select name="orderby" class="use-chosen">
        <option value="menu_order" selected="selected">Default select </option>
        <option value="popularity">Sort by popularity </option>
        <option value="rating">Sort by averadge rating </option>
        <option value="date">Sort by newness </option>
        <option value="price">Sort by price </option>
        <option value="price_desc">Sort by price: high to low </option>
    </select>
    </div>

    <div class="sort-item product-per-page">
    <select name="post-per-page" class="use-chosen">
        <option value="12" selected="selected"> 12 per page </option>
        <option value="16"> 16 per page </option>
        <option value="18"> 18  per page</option>
        <option value="21"> 21 per page </option>
        <option value="24"> 24 per page </option>
        <option value="30"> 30 per page </option>
    </select>  
    </div>


    <div class="change-display-mode">
    <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
    <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>         
    </div>

</div>
</div>

<div class="row">
    <!-- <ul class="product-list grid-products equal-container">
        @foreach($products as $product)
    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 main content-area">
    <div class="product product-style-3 equal-elem">
    <div class="product-thumnail">
        <a href="detail.html" title=>{{$product->name}}<>
        <figure><img src="{{ assert {'asserts/images/products') }}/{{ $product->image }}">alt=>{{$product->name}}</figure>
        </a>
        </div>

        <div class="product-info">
        <a href="#" class="product-name"><span>{{$product->name}}</span></a>
        <div class="wrap-price"><span class="product-price">{{$product->regular_price}}</span></div>
        <a href="#" class="btn add-to-cart">Add to cart</a>  
    </div>

    </div>

    </li>
@endforeach


 




    </ul>
    </div>

    <div class="wrap-pagination-info">
        {{products->links()}}
    </div>
</div> -->


    </div>
</div>

    </div>
</main>