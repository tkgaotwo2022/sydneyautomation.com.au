@extends('website.addon.master',['title'=>'Cart - Sydney Automation'])
@section('content')
    <div class="inner-page hard-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Cart</h2>
                    <ul class="list-unstyled p-0 m-0">
                        <li>
                            <a href="{{ route('home') }}"><i class="las la-home"></i> Home</a>
                        </li>
                        <li>/</li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
    
 
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">
        <div class="d-flex justify-content-end  align-items-right mt-5 mb-5">
         
          <div>
              @if($cartItem->count() > 0)
            <a href="{{route('all.remove.from.cart')}}">  
            <input class="btn btn-outline-danger" name="clear_cart" type="submit" value="Clear Cart">
            </a>
            @endif
          </div>
        </div>
        
       @if($cartItem->count() > 0)
        <table class="table  table-hover">
<thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  
  <tbody>
      @php $total=0 @endphp
        
       @foreach($cartItem as $c)
       
       @php
      
       $total+=$c->price*$c->quantity @endphp
     
    <tr>
        
        <td>
           @isset($c->img)
                        <img src="{{ asset('product_images/' . $c->img) }}"
                  class="rounded-3" alt="{{$c->name}}" height="180"  weight="180">
                @endisset
        </td>
      <th scope="row">{{$c->name}}<br><br>
      <div class="row">
                         
                <div class="col-md-2" >
                    
                           <form action="{{route('update.cart',['update_product'=>encrypt($c->id)])}}" method="POST">
                      @csrf
                   <input min="0" name="quantity" value="{{$c->quantity}}" type="number"
                  class="form-control form-control-sm" data-id="{{Str::random()}}"/>  
                </div>
                 
                  <div class="col-md-2">
                <button class="btn btn-outline-info updateQty" type="submit">
                    Update
                 </button>
                  </form>
                      </div> 
                     
                      
          
                      
                      
                       <div class="col-md-1">
                <a href="{{route('remove.from.cart',['remove_product'=>encrypt($c->id)])}}" class="btn btn-outline-danger">
                    Delete
</a>
                 </div>
                
                 
                      
                </div>
                  
      </th>
      <td id="product_price">${{ number_format($c->price,2)}}</td>
     
      
    </tr>
      @endforeach
     
      <th style="border-style:none;"></th>
       <th class="colspan-6" style="border-style:none;" id="product_total">
              Subtotal({{$cartItem->count()}} items):&nbsp;&nbsp;&nbsp;&nbsp;${{number_format($total, 2)}}
            
           </th>
           <th style="border-style:none;">
               <a href="{{route('check_out',['shipping-details'=>Str::random(20)])}}" class="btn btn-outline-warning">Proceed to Checkout({{$cartItem->count()}} items)<i class="fa-solid fa-angle-right"></i></a>
           </th>
          
  </tbody>
 
   
           
  
         </table>
         @endif
         

      </div>
    </div>
 

    </div><br><br>
    
    @endsection