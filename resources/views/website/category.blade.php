@extends('website.addon.master',['title'=>$allcontent->page_title])
@section('content')
     <div class="inner-page faac-bg">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2>{{$allcontent->page_title}}</h2>
              <ul class="list-unstyled p-0 m-0">
                <li>
                  <a href="<?= url('/'); ?>"><i class="las la-home"></i> Home</a>
                </li>
                <li>/</li>
                <li>{{$allcontent->page_title}}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

     <section class="inner-page-dropdown-sec1">
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    @foreach($products as $pr)
                    <div class="dropdown-content">
                        <div class="content-left mb-2 mb-md-0 content-img">
                            <img src="<?= url('/'); ?>/product_images/{{$pr->product_image}}" alt="{{$pr->product_name}}" height="300" weight="300" class="rounded">
                            <div class="heart">
                                <a href=""><i class="las la-heart"></i></a>
                            </div>
                        </div>

                        <div class="content-right">
                            <h3> <a href="{{route('single_product',['product'=>$pr->product_slug])}}">{{$pr->product_name}}</a></h3>
                            <div class="price">
                                <h4>US $90 - 100 <span> / Piece (FOB Price)</span></h4>
                            </div>
                            <div class="flex-content mt-2">
                                <div class="flex-content-left flex-content-style">
                                    <span>After sales service: <strong>Forever </strong></span>
                                    <br>
                                    <span>Structure: <strong>Wheeled </strong></span>
                                </div>
                                <div class="flex-content-right flex-content-style">
                                    <span>Warrenty: <strong>1 Year </strong></span>
                                    <br>
                                    <span>Type: <strong>Electromechanical </strong></span>
                                </div>
                            </div>

                            <div class="contact-now mt-3">
                                <a href="{{route('single_product',['product'=>$pr->product_slug])}}" class="btnn contact-now-btn"><i class="las la-envelope"></i>Contact Us Now</a>

                                <a href="{{route('show_cart',['random_id'=>Str::random(8)])}}" class="inquiry"><i class="las la-cart-arrow-down"></i> Inquiry Basket</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
               
            </div>
         </div>
         
     </section>
@endsection