@extends('website.addon.master',['title'=>'Sydney Automation'])
@section('content')
      <div class="showcase">
        <div class="row g-0">
          <div class="col-md-7">
            <div class="showcase-content showcase-content-sm border-right">
              <img src="<?= url('/'); ?>/frontend/images/showcase-left.png" alt="" />

              <div class="showcase-content-left">
                <h4>
                  RESIDENTIAL GATE <br />
                  COMMERCIAL GATE <br />
                  INDUSTRIAL GATE <br />
                  AUTOMATION & ACCESS CONTROL
                </h4>
              </div>
            </div>
          </div>

          <div class="col-md-5">
            <div class="showcase-content showcase-content2">
              <div class="showcase-content-inner">
                <div class="showcase-content-inner-img">
                  <img src="<?= url('/'); ?>/frontend/images/showcase-right1.png" alt="" />
                </div>
                <div class="showcase-content-right-info">
                  <h4>
                    <a href="{{route('sliding_swinging')}}"
                      >SLIDING AND SWINGING ELECTRIC GATES</a
                    >
                  </h4>
                </div>
              </div>
              <div class="showcase-content-inner">
                <div class="showcase-content-inner-img">
                  <img src="<?= url('/'); ?>/frontend/images/showcase-right2.png" alt="" />
                </div>
                <div class="showcase-content-right-info">
                  <h4><a href="{{route('access_control_systems')}}">ACCESS CONTROL SYSTEMS</a></h4>
                </div>
              </div>
              <div class="showcase-content-inner">
                <div class="showcase-content-inner-img">
                  <img src="<?= url('/'); ?>/frontend/images/showcase-right3.png" alt="" />
                </div>
                <div class="showcase-content-right-info">
                  <h4><a href="{{route('boom_industrial')}}">BOOM GATES AND INDUSTRIAL GATES</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="sec-info-top">
        <div class="container">
          <div class="row">
            <div class="col-12 top-heading text-center">
              <h2>Lorem Ipsum is simply dummy text of</h2>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content of a page when looking at its layout.
                The
              </p>
              <div class="btns">
                <a href="">REQUEST A NEW QUOTE</a>
                <a href="">REQUEST A SERVICE CALL</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="sec-info1">
        <div class="container">
          <div class="row">
            <div class="col-md-7 mb-4 mb-md-0 top-heading">
              <h2>Lorem Ipsum is simply dummy text of</h2>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis
                iure temporibus eius deserunt quos enim, eaque dicta blanditiis
                cupiditate ratione perferendis doloremque ut sequi quae
                recusandae nisi inventore odio laborum magni suscipit provident
                praesentium, veritatis non aliquid! Maiores esse facere nam fuga
                veniam quas dignissimos voluptatum ipsam nulla consectetur
                magnam consequatur quae provident distinctio soluta commodi
                nihil, amet recusandae magni fugiat, nesciunt corrupti delectus.
                Asperiores provident nemo nostrum, repellat ullam delectus ea
                laboriosam iure commodi explicabo totam recusandae placeat
                voluptas saepe veritatis quia iste, suscipit dolore minus.
                Fugiat, aut voluptatum ipsa voluptatibus, labore reiciendis,
                commodi asperiores minus doloribus dolor ab?
              </p>

              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                porro, explicabo ex nobis blanditiis quis cum error non quisquam
                sit illum est laborum voluptatem officia cupiditate numquam
                officiis soluta sed rerum repellat vero aliquid. Id ad vero
              </p>
            </div>

            <div class="col-md-5 mb-4 mb-md-0 rightSidebar">
              <div class="theiaStickySidebar">
                <div class="sec-info1-content">
                  <div class="sec-info1-top">
                    <!-- <div class="icon">
                        <img src="images/phn-white.png" alt="" class="img-fluid" />
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
                        <textarea
                          name=""
                          id=""
                          cols="30"
                          rows="6"
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

          <div
            class="row row-below align-items-center sec-info1-btm text-center m-auto"
          >
            <div class="col-4">
              <img src="<?= url('/'); ?>/frontend/images/sec1img2.png" alt="" class="img-fluid" />
            </div>
            <div class="col-4">
              <img src="<?= url('/'); ?>/frontend/images/sec1img3.png" alt="" class="img-fluid" />
            </div>
            <div class="col-4">
              <img src="<?= url('/'); ?>/frontend/images/sec1img1.png" alt="" class="img-fluid" />
            </div>
          </div>
        </div>
      </section>

      <section class="services">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-2 col-6 mb-4">
              <div class="services-content">
                <h4><a href="">SLIDING GATES AUTOMATION</a></h4>
              </div>
            </div>
            <div class="col-lg-2 col-6 mb-4">
              <div class="services-content">
                <h4><a href="">SWINGING AUTOMATION</a></h4>
              </div>
            </div>
            <div class="col-lg-2 col-12 mb-4">
              <div class="services-content">
                <h4><a href="">ACCESS CONTROL</a></h4>
              </div>
            </div>
            <div class="col-lg-2 col-6 mb-4">
              <div class="services-content">
                <h4><a href="">ACCESSORIES</a></h4>
              </div>
            </div>
            <div class="col-lg-2 col-6 mb-4">
              <div class="services-content">
                <h4><a href="">BOOM GATES</a></h4>
              </div>
            </div>
          </div>

          <div class="row services-btm">
            <div class="col-12 text-center">
              <h4>
                WE DESIGN AND INSTALL DOMESTIC, COMMERCIAL AND INUSTRIAL GATE
                MOTORS.
              </h4>

              <h4>INHOUSE MANUFACTURING BEST BRAND ITALIAN GATE MOTORS ONLY</h4>
            </div>
          </div>
        </div>
      </section>

      <section class="free-quote">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <p class="p-0 m-0">
                <a href="tel:0412 063 259">Call 0412 063 259</a> or
                <a href="">EMAIL US now for a free quote</a>
              </p>
            </div>
          </div>
        </div>
      </section>

      <div class="two-col">
        <div class="row g-0">
          <div class="col-md-6">
            <div class="two-col-content">
              <div class="two-col-inner two-col-inner-left">
                <h3>Lorem ipsum dolor, sit amet consectetur adipisicing.</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Placeat suscipit aliquam nesciunt veritatis vero, nam
                  voluptatum repudiandae, inventore atque maiores at, magnam
                  asperiores. Asperiores dolorem, reprehenderit totam nam
                  accusamus, cum odio, nulla facilis vitae modi assumenda fuga
                  voluptatibus nobis natus.
                </p>
                <a href="" class="btnn">GET A QUOTE</a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="two-col-content">
              <img src="<?= url('/'); ?>/frontend/images/img-right.png" alt="" />
            </div>
          </div>
        </div>

        <div class="row g-0">
          <div class="col-md-6 order-1 order-md-2">
            <div class="two-col-content">
              <div class="two-col-inner two-col-inner-right">
                <h3>Lorem ipsum dolor, sit amet consectetur adipisicing.</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Placeat suscipit aliquam nesciunt veritatis vero, nam
                  voluptatum repudiandae, inventore atque maiores at, magnam
                  asperiores. Asperiores dolorem, reprehenderit totam nam
                  accusamus, cum odio, nulla facilis vitae modi assumenda fuga
                  voluptatibus nobis natus.
                </p>
                <a href="" class="btnn">GET A QUOTE</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 order-2 order-md-1">
            <div class="two-col-content">
              <img src="<?= url('/'); ?>/frontend/images/img-left.png" alt="" />
            </div>
          </div>
        </div>
      </div>

      <section class="free-quote">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <p class="p-0 m-0">
                <a href="tel:0412 063 259">Call 0412 063 259</a> or
                <a href="">EMAIL US now for a free quote</a>
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="testi">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center top-heading">
              <h2>What Customers Say About Our Service</h2>
            </div>
          </div>

          <div class="row row-below">
            <div class="col-12">
              <div class="owl-carousel testi-slider owl-theme">
                <div class="item">
                  <div class="testi-content">
                    <h4>Lorem Ipsum Is</h4>
                    <span>It is a long estabalished</span>
                    <ul class="list-unstyled p-0 m-0">
                      <li><i class="las la-star"></i></li>
                      <li><i class="las la-star"></i></li>
                      <li><i class="las la-star"></i></li>
                      <li><i class="las la-star"></i></li>
                      <li><i class="las la-star"></i></li>
                    </ul>

                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s, when an unknown
                      printer took a galley of type and scrambled
                    </p>
                  </div>
                </div>

                <div class="item">
                  <div class="testi-content">
                    <h4>Lorem Ipsum Is</h4>
                    <span>It is a long estabalished</span>
                    <ul class="list-unstyled p-0 m-0">
                      <li><i class="las la-star"></i></li>
                      <li><i class="las la-star"></i></li>
                      <li><i class="las la-star"></i></li>
                      <li><i class="las la-star"></i></li>
                      <li><i class="las la-star"></i></li>
                    </ul>

                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s, when an unknown
                      printer took a galley of type and scrambled
                    </p>
                  </div>
                </div>

                <div class="item">
                  <div class="testi-content">
                    <h4>Lorem Ipsum Is</h4>
                    <span>It is a long estabalished</span>
                    <ul class="list-unstyled p-0 m-0">
                      <li><i class="las la-star"></i></li>
                      <li><i class="las la-star"></i></li>
                      <li><i class="las la-star"></i></li>
                      <li><i class="las la-star"></i></li>
                      <li><i class="las la-star"></i></li>
                    </ul>

                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s, when an unknown
                      printer took a galley of type and scrambled
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="testi-content">
                    <h4>Lorem Ipsum Is</h4>
                    <span>It is a long estabalished</span>
                    <ul class="list-unstyled p-0 m-0">
                      <li><i class="las la-star"></i></li>
                      <li><i class="las la-star"></i></li>
                      <li><i class="las la-star"></i></li>
                      <li><i class="las la-star"></i></li>
                      <li><i class="las la-star"></i></li>
                    </ul>

                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s, when an unknown
                      printer took a galley of type and scrambled
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="map">
        <div class="row">
          <div class="col-12">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424146.1029742245!2d150.65178097002797!3d-33.847356657236915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%20NSW%2C%20Australia!5e0!3m2!1sen!2sin!4v1641985677427!5m2!1sen!2sin"
              width="100%"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
        </div>
      </div>
@endsection