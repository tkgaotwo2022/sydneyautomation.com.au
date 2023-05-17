@extends('website.addon.master',['title'=>'Contact Us - Sydney Automation'])
@section('content')
      <div class="inner-page contact-bg">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2>CONTACT US</h2>
              <ul class="list-unstyled p-0 m-0">
                <li>
                  <a href="<?= url('/'); ?>"><i class="las la-home"></i> Home</a>
                </li>
                <li>/</li>
                <li>Contact Us</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <section class="contact-info">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h2>Find Our Location</h2>
            </div>
          </div>

          <div class="row mt-4 text-center">
            <div class="col-md-4 mb-4 mb-md-0">
              <div class="contact-info-content">
                <div class="icon">
                  <i class="las la-map-marker"></i>
                </div>
                <div class="icon-info">
                  <h4 class="p-0 m-0">Our Location</h4>
                  <p class="p-0 m-0">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4 mb-md-0">
              <div class="contact-info-content">
                <div class="icon">
                  <i class="las la-envelope"></i>
                </div>
                <div class="icon-info">
                  <h4 class="p-0 m-0">Email Us</h4>
                  <p class="p-0 m-0">
                    <a href="mailto:sales@sydneyautomation.com.au"
                      >sales@sydneyautomation.com.au</a
                    >
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-info-content">
                <div class="icon">
                  <i class="las la-phone-volume"></i>
                </div>
                <div class="icon-info">
                  <h4 class="p-0 m-0">Call Us</h4>
                  <p class="p-0 m-0">
                    <a href="tel:0412 063 259 ">0412 063 259 </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="contact-page-form">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h2 class="p-0 m-0">WE WOULD LOVE TO HEAR</h2>
            </div>
          </div>

          <div class="row mt-5 form-content">
            <div class="col-12 col-md-9 m-auto">
              <form>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <input
                      type="text"
                      placeholder="Name"
                      class="form-control"
                    />
                  </div>

                  <div class="col-md-6 mb-4">
                    <input
                      type="email"
                      placeholder="Phone"
                      class="form-control"
                    />
                  </div>

                  <div class="col-12 mb-4">
                    <input
                      type="email"
                      placeholder="Email"
                      class="form-control"
                    />
                  </div>

                  <div class="col-12 mb-4">
                    <input
                      type="text"
                      placeholder="Your Address"
                      class="form-control"
                    />
                  </div>

                  <div class="col-12 mb-4">
                    <textarea
                      cols="30"
                      rows="6"
                      class="form-control"
                      placeholder="Message "
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