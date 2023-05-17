@extends('website.addon.master',['title'=>'About Us - Sydney Automation'])
@section('content')
      <div class="inner-page about-bg">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2>ABOUT US</h2>
              <ul class="list-unstyled p-0 m-0">
                <li>
                  <a href="<?= url('/'); ?>"><i class="las la-home"></i> Home</a>
                </li>
                <li>/</li>
                <li>About Us</li>
              </ul>
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

      <section class="sec-info1 sec-info1-inner">
        <div class="container">
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