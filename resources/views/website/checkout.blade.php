@extends('website.addon.master',['title'=>'Checkout - Sydney Automation'])
@section('content')


<section class="bg-light py-5">
  <div class="container">
    <div class="row">
      <div class="col-xl-8 col-lg-8 mb-4">
        <!--<div class="card mb-4 border shadow-0">-->
        <!--  <div class="p-4 d-flex justify-content-between">-->
        <!--    <div class="">-->
        <!--      <h5>Have an account?</h5>-->
        <!--      <p class="mb-0 text-wrap ">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>-->
        <!--    </div>-->
        <!--    <div class="d-flex align-items-center justify-content-center flex-column flex-md-row">-->
        <!--      <a href="#" class="btn btn-outline-primary me-0 me-md-2 mb-2 mb-md-0 w-100">Register</a>-->
        <!--      <a href="#" class="btn btn-primary shadow-0 text-nowrap w-100">Sign in</a>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->

        <!-- Checkout -->
        
        <form action="{{route('shipping')}}" method="post">
            @csrf
        <div class="card shadow-0 border">
          <div class="p-4">
            <h5 class="card-title mb-3">Guest checkout</h5>
            <div class="row">
              <div class="col-6 mb-3">
                <div class="form-outline">
                  <input type="text" id="typeText" name="chk_fname" placeholder="First name" class="form-control"/>
                  @error('chk_fname')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                </div>
              </div>

              <div class="col-6">
                <div class="form-outline">
                  <input type="text" id="typeText" placeholder="Last name" name="chk_lname" class="form-control" />
                   @error('chk_lname')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                </div>
              </div>

              <div class="col-6 mb-3">
                <div class="form-outline">
                  <input type="text" id="typePhone" name="chk_phone"  class="form-control" placeholder="Phone"/>
                    @error('chk_phone')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                </div>
              </div>

              <div class="col-6 mb-3">
                <div class="form-outline">
                  <input type="email" id="typeEmail" placeholder="Email" name="chk_email" class="form-control" />
                   @error('chk_email')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                </div>
              </div>
            </div>

           

            <hr class="my-4" />

            <h5 class="card-title mb-3">Shipping info</h5>

            <!--<div class="row mb-3">-->
            <!--  <div class="col-lg-4 mb-3">-->
                <!-- Default checked radio -->
            <!--    <div class="form-check h-100 border rounded-3">-->
            <!--      <div class="p-3">-->
            <!--        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked />-->
            <!--        <label class="form-check-label" for="flexRadioDefault1">-->
            <!--          Express delivery <br />-->
            <!--          <small class="text-muted">3-4 days via Fedex </small>-->
            <!--        </label>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div class="col-lg-4 mb-3">-->
                <!-- Default radio -->
            <!--    <div class="form-check h-100 border rounded-3">-->
            <!--      <div class="p-3">-->
            <!--        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />-->
            <!--        <label class="form-check-label" for="flexRadioDefault2">-->
            <!--          Post office <br />-->
            <!--          <small class="text-muted">20-30 days via post </small>-->
            <!--        </label>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div class="col-lg-4 mb-3">-->
                <!-- Default radio -->
            <!--    <div class="form-check h-100 border rounded-3">-->
            <!--      <div class="p-3">-->
            <!--        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" />-->
            <!--        <label class="form-check-label" for="flexRadioDefault3">-->
            <!--          Self pick-up <br />-->
            <!--          <small class="text-muted">Come to our shop </small>-->
            <!--        </label>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->

            <div class="row">
              <div class="col-sm-8 mb-3">
                <div class="form-outline">
                  <input type="text" id="typeText" placeholder="Street Address" name="chk_address[]" class="form-control" />
                  @error('chk_address.*')
                                <div class="alert alert-danger mt-2">{{ 'Street address is required' }}</div>
                            @enderror
                </div>
              </div>

              <!--<div class="col-sm-4 mb-3">-->
              <!--  <p class="mb-0">City</p>-->
              <!--  <select class="form-select">-->
              <!--    <option value="1">New York</option>-->
              <!--    <option value="2">Moscow</option>-->
              <!--    <option value="3">Samarqand</option>-->
              <!--  </select>-->
              <!--</div>-->
              
               <div class="col-sm-4 mb-3">
                <div class="form-outline">
                  <input type="text" id="typeText" placeholder="City" name="chk_address[]" class="form-control" />
                  @error('chk_address.*')
                                <div class="alert alert-danger mt-2">{{ 'City is required' }}</div>
                            @enderror
                </div>
              </div>
              

              <div class="col-sm-4 mb-3">
                <div class="form-outline">
                  <input type="text" id="typeText" placeholder="House" name="chk_address[]" class="form-control" />
                  @error('chk_address.*')
                                <div class="alert alert-danger mt-2">{{ 'House no is required' }}</div>
                            @enderror
                </div>
              </div>

              <div class="col-sm-4 col-6 mb-3">
                <div class="form-outline">
                  <input type="text" id="typeText" class="form-control" placeholder="Postal code" name="chk_address[]" />
                   @error('chk_address.*')
                                <div class="alert alert-danger mt-2">{{ 'Postal code is required' }}</div>
                            @enderror
                </div>
              </div>

             
            </div>

            <!--<div class="form-check mb-3">-->
            <!--  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" />-->
            <!--  <label class="form-check-label" for="flexCheckDefault1">Save this address</label>-->
            <!--</div>-->

            <!--<div class="mb-3">-->
            <!--  <p class="mb-0">Message to seller</p>-->
            <!--  <div class="form-outline">-->
            <!--    <textarea class="form-control" id="textAreaExample1" rows="2"></textarea>-->
            <!--  </div>-->
            <!--</div>-->

            <div class="float-end">
              <button class="btn btn-light border">Cancel</button>
              
              <button class="btn btn-success shadow-0 border" type="submit">Place Order</button>
            </div>
          </div>
        </div>
        
        <!-- Checkout -->
      </div>
      <div class="col-xl-4 col-lg-4 d-flex justify-content-center justify-content-lg-end">
        <div class="ms-lg-4 mt-4 mt-lg-0" style="max-width: 320px;">
          

         
          <h6 class="text-dark my-4">Items in cart</h6>
           @php $total=0 @endphp
          @foreach($cartItem as $c)
          @php $total+=$c->price*$c->quantity @endphp
     

          <div class="d-flex align-items-center mb-4">
            <div class="me-3 position-relative">
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill badge-secondary">
                1
              </span>
               @isset($c->img)
              <img src="{{ asset('product_images/' . $c->img) }}" 
              style="height: 96px; width: 96x;" class="img-sm rounded border" alt="{{$c->name}}" />
              @endisset
            </div>
            <div class="">
              
               {{$c->name}}
             
              <div class="price text-muted">Total: ${{number_format($c->price*$c->quantity,2)}}</div>
            </div>
          </div>
          
          @endforeach
          
           <hr />
<h6 class="mb-3">Summary</h6>
          <div class="d-flex justify-content-between">
            <p class="mb-2">Total price:</p>
            <input type="hidden" name="total_amount" value="{{$total}}">
            <p class="mb-2 fw-bold">${{number_format($total,2)}}</p>
          </div>
          <!--<div class="d-flex justify-content-between">-->
          <!--  <p class="mb-2">Discount:</p>-->
          <!--  <p class="mb-2 text-danger">- $60.00</p>-->
          <!--</div>-->
          <!--<div class="d-flex justify-content-between">-->
          <!--  <p class="mb-2">Shipping cost:</p>-->
          <!--  <p class="mb-2">+ $14.00</p>-->
          <!--</div>-->
          <!--<hr />-->
          <!--<div class="d-flex justify-content-between">-->
          <!--  <p class="mb-2">Total price:</p>-->
          <!--  <p class="mb-2 fw-bold">$149.90</p>-->
          <!--</div>-->

          <!--<div class="input-group mt-3 mb-4">-->
          <!--  <input type="text" class="form-control border" name="" placeholder="Promo code" />-->
          <!--  <button class="btn btn-light text-primary border">Apply</button>-->
          <!--</div>-->
        
        </div>
        </form> 
      </div>
    </div>
  </div>
</section>






@endsection