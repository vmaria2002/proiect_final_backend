@extends('layout')
@section('title', 'Cart')
@section('content')
<div class="row total-header-section">
                      
                        
                        
                    </div>
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
        <?php $total = 0 ?>
      
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                <?php $total += $details['price'] * $details['quantity'] ?>
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" id="quantity" name="quantity"  value="{{ $details['quantity'] }}" class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                    
                    <br></br>
                    <td class="actions" data-th="">
                
                        <!-- <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-update-cart"></i></button> -->
                         <p class="btn btn-info btn-sm"><a href="{{ url('update-cart/'.$id.'/'.$details['quantity']) }}" class="btn btn-info btn-block text-center" role="button">Add one</a> </p>
                        
                         <p class="btn-danger"><a href="{{ url('remove-from-cart/'.$id) }}" class="btn btn-danger btn-block text-center" role="button">Remove all</a> </p>

                         <p class="btn-holder"><a href="{{ url('delete-from-cart/'.$id) }}" class="btn btn-warning btn-block text-center" role="button">Delete one</a> </p>

                         <!-- <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button> -->
                    
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total {{ $total }}</strong></td>
        </tr>
        <tr>
            <td><a href="{{ url('onlineshopping') }}" class="btn btn-success"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
        </tr>
        </tfoot>
    </table>
@endsection