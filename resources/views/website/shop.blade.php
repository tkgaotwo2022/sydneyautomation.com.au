@extends('website.addon.master',['title'=>$inner_product->product_name,'desc'=> $inner_product->product_description])
@section('content')
    <div class="inner-page hard-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{$inner_product->product_name}}</h2>
                    <ul class="list-unstyled p-0 m-0">
                        <li>
                            <a href="{{ route('home') }}"><i class="las la-home"></i> Home</a>
                        </li>
                        <li>/</li>
                        <li>{{$inner_product->product_name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                @isset($inner_product->product_image)
                    <img src="{{ asset('product_images/' . $inner_product->product_image) }}" width="500" height="500"
                        class="img-fluid" />
                @endisset<br>
                
              
                
                 @isset($product_gallery)
                 @foreach($product_gallery as $pr_gallery)
                 <img src="{{ asset('product_images/' . $pr_gallery->images) }}" width="100" height="100"
                        class="img-fluid mt-1" />
                        @endforeach
                  
                 @endisset
                

            </div>
            <div class="col-md-6">
                <h1 class="text-uppercase">{{$inner_product->product_name}}</h1>
                {!! $inner_product->product_description !!}
            <text style="color:red">This product is currently out of stock and unavailable.</text><br><br>
                 {{ ($inner_product->sku=='')?'SKU:N/A' :''}}   Categories:
                
                   
                   @foreach ($all_cat as $all_c)
                   <div class="col-xs-2">
                     <a href="{{ route('product-category',['category'=>$all_c->page_slug]) }}">{{$all_c->page_title}}</a>,
                    
                      @foreach ($all_subcat as $all_s)
                       @if($all_s->parent_id==$all_c->id)
                     <a href="{{ route('product-category',['category'=>$all_c->page_slug,'sub-category'=>$all_s->page_slug]) }}">{{$all_s->page_title}}</a> 
                     @if( !$loop->last)
                        ,
                       @endif
                  @endif
                 @endforeach
                
                 </div>
                 @endforeach<br>
                 
                  <div class="col-xs-2">
                      <form action="{{route('add_cart')}}" method="post" enctype="multipart/form-data">
                          @csrf
                      <input type="number" name="pro_cart_qty" min="1" value="1"  class="p-2" size="2"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">&nbsp;&nbsp;&nbsp;
                      <input type="hidden" name="pro_cart_id" value="{{ encrypt($inner_product->id)}}">
                      <input type="hidden" name="pro_cart_name" value="{{$inner_product->product_name}}">
                      <input type="hidden" name="pro_cart_price" value="90">
                      <input type="hidden" name="pro_cart_img" value="@isset($inner_product->product_image){{$inner_product->product_image}}@endisset">
                      <input type="hidden" name="guest_id" value="{{Session::getId()}}">
                      <button type="submit" class="p-2 bg-success fw-bold bg-opacity-75 rounded text-white">Add to cart</a>
                      </form>
                      
                      
                      </div><br>
            
        </div><br>

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item col-4" role="presentation">
                <button class="nav-link active w-100 fw-bold" id="pills-description-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description"
                    aria-selected="true">Description</button>
            </li>
            
            @if($inner_product->product_type=="Variable Product")
            <li class="nav-item col-4" role="presentation">
                <button class="nav-link w-100 fw-bold" id="pills-additional-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-additional" type="button" role="tab" aria-controls="pills-additional"
                    aria-selected="false">Additional information</button>
            </li>
            @endif
            <li class="nav-item col-4" role="presentation">
                <button class="nav-link w-100 fw-bold" id="pills-review-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-review" type="button" role="tab" aria-controls="pills-review"
                    aria-selected="false">Reviews</button>
            </li>
        </ul>
        <div class="tab-content w-100" id="pills-tabContent">
            <div class="tab-pane fade show active w-100" id="pills-description" role="tabpanel"
                aria-labelledby="pills-description-tab">
                <text class="text-success fw-bold fs-1">Description</text>
                {!! $inner_product->product_description !!}
            </div>
            <div class="tab-pane fade" id="pills-additional" role="tabpanel" aria-labelledby="pills-additional-tab">
                <text class="text-success fw-bold fs-1">Additional Information</text><br>
                <table class="table table-borderless">
                    @foreach($variant_inner_product as $vip)
                    <tr>
                        <th>
                             {{ $vip->variant_names }}
                        </th>
                        <td>
                            {{ $vip->variant_prices }}
                        </td>
                    </tr>
                    @endforeach

                </table>

            </div>
            <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
               
                <form method="post" action="{{route('review_product',['product'=>$inner_product->product_slug])}}">
                    @csrf
                    <div class="col-lg-8 mb-3">
                        <input type="text" name="nm" class="form-control" placeholder="Name">
                        
                    </div>
                     @error('nm')
                                <div class="alert alert-danger col-md-8">{{ $message }}</div>
                            @enderror
                    <div class="col-lg-8 mb-3">
                        <input type="email" name="em" class="form-control" placeholder="Email" >
                    </div>
                     @error('em')
                                <div class="alert alert-danger col-md-8">{{ $message }}</div>
                            @enderror

                    <div class="col-lg-8 mb-3">
                        <textarea name="rev" class="form-control" rows="5" placeholder="Review" ></textarea>
                    </div>
                     @error('rev')
                                <div class="alert alert-danger col-md-8">{{ $message }}</div>
                            @enderror

                    <div class="col-lg-8 mb-3">

                        Your Rating:

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rate" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rate" id="inlineRadio2" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rate" id="inlineRadio3"
                                value="3">
                            <label class="form-check-label" for="inlineRadio3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rate" id="inlineRadio4"
                                value="4">
                            <label class="form-check-label" for="inlineRadio4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rate" id="inlineRadio5"
                                value="5">
                            <label class="form-check-label" for="inlineRadio5">5</label>
                        </div>
                    </div>

                     <input class="btn btn-outline-success col-md-8" type="submit" name="review_form" value="Submit">
                   

                </form>
     <hr class="hr hr-blurry" />
     
              <p class="text-success fw-bold fs-1 text-center">Reviews</p>       
                @foreach($review as $r)
                <div class="col-md-8 ml-4">
                    {{$r->name}}<br>
                     @for ($i =0; $i <$r->rating; $i++)
                    <i class="las la-star text-warning"></i>
                        @endfor <br>
                    {{$r->review}}
                </div>
                
                
                @endforeach
                
                 <hr class="hr hr-blurry" />
                
            </div>
        </div>
    </div></div><br><br><br>
@endsection
