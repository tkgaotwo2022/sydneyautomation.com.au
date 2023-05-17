@extends('website.addon.master',['title'=>'Products - Sydney Automation'])
@section('content')
      <div class="inner-page hard-bg">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2>Products</h2>
              <ul class="list-unstyled p-0 m-0">
                <li>
                  <a href="{{route('home')}}"><i class="las la-home"></i> Home</a>
                </li>
                <li>/</li>
                <li>Products</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <section class="inner-page-info1 automation-page-info1">
        <div class="container">
          <div class="row">
            <div class="col-md-7 mb-4 mb-md-0">
              <div class="inner-page-info1-content">
                <h3>Hardware</h3>

                <p class="mt-4">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad
                  facere odit odio quia, in laudantium quidem quas earum ut
                  ratione! Voluptatem impedit blanditiis, eveniet commodi
                  reprehenderit laudantium laboriosam vero quidem praesentium
                  earum ullam incidunt aliquam repudiandae reiciendis omnis
                  tempora? Aperiam eligendi, suscipit pariatur consectetur,
                  ipsam assumenda quod quo eaque repellendus tenetur beatae
                  harum sed iure voluptatem velit cumque eos unde.
                </p>

                <a href="" class="btnn">Get an Instant Quote</a>
              </div>

              <div class="inner-page-info1-content2 mt-5">
                <h3>Lorem ipsum dolor sit amet?</h3>
                <p class="mt-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Deserunt at obcaecati temporibus quas, beatae, nihil veritatis
                  nulla repudiandae cupiditate porro esse illo optio iste id
                  molestias excepturi consectetur consequatur magni explicabo
                  aperiam earum! Nesciunt aliquam, repudiandae nemo incidunt
                  perferendis blanditiis est eligendi neque sint eum cupiditate
                  amet dolore. Dolore, aliquid.
                </p>

                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Aliquam ab voluptates veniam molestias tenetur ex sapiente.
                  Illo, sapiente ut! Fugiat enim, id architecto sed nesciunt
                  recusandae nisi animi dignissimos placeat dolorem asperiores
                  tenetur mollitia aspernatur consectetur, hic ipsa error
                  provident.
                </p>

                <a href="" class="btnn">Know More</a>
              </div>

              <div class="inner-page-info1-content2 mt-5">
                <h3>Lorem ipsum dolor sit amet consectetur?</h3>
                <p class="mt-4">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Esse, odio at fuga enim dignissimos ut assumenda sunt, illo a
                  libero vel distinctio beatae qui? Dicta consequuntur, nemo,
                  iste molestiae enim explicabo sint quaerat voluptas expedita
                  ullam officia aliquid facere laborum quos nobis illo
                  laudantium unde. Explicabo aliquid error sapiente ut.
                </p>

                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Ullam quod obcaecati debitis, recusandae iure reprehenderit
                  maiores consequatur repellat rem nam nostrum doloribus
                  numquam, in nobis provident. Impedit doloremque voluptates
                  nostrum, adipisci, fugiat odit quis reiciendis voluptas
                  tempora voluptatum nobis dolores.
                </p>

                <a href="" class="btnn">Know More</a>
              </div>
            </div>

            <div class="col-md-5 mb-4 mb-md-0 rightSidebar">
              <div class="theiaStickySidebar">
                <div class="sec-info1-content">
                  <div class="sec-info1-top">
                    <!-- <div class="icon">
                          <img src="<?= url('/'); ?>/frontend/images/phn-white.png" alt="" class="img-fluid" />
                        </div> -->
                    <div class="info">
                      <span>Call Us Today</span>
                      <a href="tel:0412 063 259">0412 063 259</a>
                    </div>
                  </div>
                  <h5>Or Use Our Contact Request Form</h5>

                  <form action="">
                    <div class="row">
                      <div class="col-12 mb-3">
                        <input
                          type="text"
                          placeholder="Name"
                          class="form-control"
                        />
                      </div>
                      <div class="col-md-6 mb-3">
                        <input
                          type="email"
                          placeholder="Email"
                          class="form-control"
                        />
                      </div>
                      <div class="col-md-6 mb-3">
                        <input
                          type="text"
                          placeholder="Phone Number"
                          class="form-control"
                        />
                      </div>
                      <div class="col-12 mb-3">
                        <input
                          type="text"
                          placeholder="Address"
                          class="form-control"
                        />
                      </div>

                      <div class="col-12 mb-3">
                        <div class="select">
                          <select>
                            <option value="1">Select Product</option>
                            <option value="0">Sliding Gate</option>
                            <option value="0">Swing Gate</option>
                            <option value="0">Boom Gates</option>
                            <option value="0">Rising Ballards</option>
                            <option value="">Intercom Systems</option>
                            <option value="">Accessories</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-12 mb-3">
                        <textarea
                          name=""
                          id=""
                          cols="30"
                          rows="4"
                          class="form-control"
                          placeholder="Message"
                        ></textarea>
                      </div>

                      <div class="col-12">
                        <button type="submit">SUBMIT</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="sliding-page1">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 mb-4 mb-md-0 text-center text-md-start">
              <div class="sliding-page1-content">
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                <ul class="list-unstyled p-0 m-0">
                  <li>
                    <i class="las la-check-circle"></i>Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. At, consectetur!
                  </li>
                  <li>
                    <i class="las la-check-circle"></i>Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. Explicabo, perspiciatis.
                  </li>
                  <li>
                    <i class="las la-check-circle"></i>Lorem ipsum, dolor sit
                    amet consectetur adipisicing elit. Corporis, distinctio.
                  </li>
                  <li>
                    <i class="las la-check-circle"></i>Lorem ipsum, dolor sit
                    amet consectetur adipisicing elit. Facilis, tempora?
                  </li>
                  <li>
                    <i class="las la-check-circle"></i>Lorem ipsum dolor sit
                    amet consectetur, adipisicing elit. Adipisci, dolores!
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-5 text-center">
              <div class="sliding-page1-content">
                <img src="<?= url('/'); ?>/frontend/images/hardware1.jpg" alt="" class="img-fluid" />
              </div>
            </div>
          </div>

          <div class="row row-below align-items-center">
            <div class="col-md-5 text-center">
              <div class="sliding-page1-content">
                <img src="<?= url('/'); ?>/frontend/images/hardware2.jpg" alt="" class="img-fluid" />
              </div>
            </div>
            <div class="col-md-7 mb-4 mb-md-0 text-center text-md-start">
              <div class="sliding-page1-content">
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                <ul class="list-unstyled p-0 m-0">
                  <li>
                    <i class="las la-check-circle"></i>Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. At, consectetur!
                  </li>
                  <li>
                    <i class="las la-check-circle"></i>Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. Explicabo, perspiciatis.
                  </li>
                  <li>
                    <i class="las la-check-circle"></i>Lorem ipsum, dolor sit
                    amet consectetur adipisicing elit. Corporis, distinctio.
                  </li>
                  <li>
                    <i class="las la-check-circle"></i>Lorem ipsum, dolor sit
                    amet consectetur adipisicing elit. Facilis, tempora?
                  </li>
                  <li>
                    <i class="las la-check-circle"></i>Lorem ipsum dolor sit
                    amet consectetur, adipisicing elit. Adipisci, dolores!
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="row row-below align-items-center">
            <div class="col-md-7 mb-4 mb-md-0 text-center text-md-start">
              <div class="sliding-page1-content">
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                <ul class="list-unstyled p-0 m-0">
                  <li>
                    <i class="las la-check-circle"></i>Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. At, consectetur!
                  </li>
                  <li>
                    <i class="las la-check-circle"></i>Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. Explicabo, perspiciatis.
                  </li>
                  <li>
                    <i class="las la-check-circle"></i>Lorem ipsum, dolor sit
                    amet consectetur adipisicing elit. Corporis, distinctio.
                  </li>
                  <li>
                    <i class="las la-check-circle"></i>Lorem ipsum, dolor sit
                    amet consectetur adipisicing elit. Facilis, tempora?
                  </li>
                  <li>
                    <i class="las la-check-circle"></i>Lorem ipsum dolor sit
                    amet consectetur, adipisicing elit. Adipisci, dolores!
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-5 text-center">
              <div class="sliding-page1-content">
                <img src="<?= url('/'); ?>/frontend/images/hardware3.jpg" alt="" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection