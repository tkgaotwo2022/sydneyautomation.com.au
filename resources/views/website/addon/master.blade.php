<!DOCTYPE html>
<html lang="en">
  <head>
      <title>{{$title}}</title> 
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
   <meta name="description" content="{{isset($desc)?$desc:''}}">
    <link rel="stylesheet" href="<?= url('/'); ?>/frontend/css/style.css" />
    <link rel="stylesheet" href="<?= url('/'); ?>/frontend/css/responsive.css" />
    <link rel="stylesheet" href="<?= url('/'); ?>/frontend/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= url('/'); ?>/frontend/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= url('/'); ?>/frontend/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?= url('/'); ?>/frontend/line-awesome-1.3.0/css/line-awesome.min.css" />
    <link rel="stylesheet" href="<?= url('/'); ?>/frontend/css/glightbox.min.css" />
     <link rel="stylesheet" href="{{asset('frontend/css/checkout.css')}}" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <div class="body">
    <body>
      <div class="scrollToTopBtn">
        <i class="las la-arrow-up"></i>
      </div>

      <div class="call-fixed">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <i class="las la-phone"></i>
              <a href="tel:  0412 063 259">+ 0412 063 259</a>
            </div>
          </div>
        </div>
      </div>

      <header class="large">
        <nav>
          <div class="container container-flex">
            <div class="logo">
              <a href="<?= url('/'); ?>"><img src="<?= url('/'); ?>/frontend/images/logo.png" alt="" /></a>
            </div>
            <div class="nav-right">
              <div class="nav-right-top">
                <div class="nav-right-top-el">
                  <a href="">
                    <img src="<?= url('/'); ?>/frontend/images/phn-icon.png" alt="" />
                    0412 063 259
                  </a>
                </div>
                <div class="nav-right-top-el">
                  <a href="" class="nav-social"
                    ><img src="<?= url('/'); ?>/frontend/images/insta.png" alt=""
                  /></a>
                  <a href="" class="nav-social"
                    ><img src="<?= url('/'); ?>/frontend/images/fb.png" alt=""
                  /></a>
                  <a href="" class="btnn">REQUEST A FREE QUOTE</a>
                </div>
              </div>

              <div class="nav-right-btm">
                <ul class="list-unstyled p-0 m-0">
                  <li><a href="{{route('home')}}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                  <li>
                    <a href="<?= url('products'); ?>" class="{{ request()->is('products') ? 'active' : '' }}">Products <i class="las la-angle-down"></i></a>
                    <div class="mega-menu">
                      <div class="row">
                          @foreach($secondmenu as $sm)
                        <div class="col-lg br">
                          <h4><a href="{{ route('product-category',['category'=>$sm->page_slug]) }}">{{$sm->page_title}}</a></h4>
                          <ul class="list-unstyled p-0 m-0">
                              @foreach($thirdmenu as $tm)
                              @if($tm->parent_id == $sm->id)
                            <li><a href="{{ route('product-category',['category'=>$sm->page_slug,'sub-category'=>$tm->page_slug]) }}">{{$tm->page_title}}</a></li>
                              @endif
                              @endforeach
                          </ul>
                        </div>
                          @endforeach
                      </div>
                    </div>
                  </li>
                  <li><a href="<?= url('support'); ?>" class="{{ request()->is('support') ? 'active' : '' }}"> Support</a></li>
                  <li><a href="<?= url('about'); ?>" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
                  <li><a href="<?= url('contact'); ?>" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </header>

      <header class="small">
        <div class="overlay"></div>
        <nav>
          <div class="container container-flex">
            <div class="logo">
              <a href="index.html"
                ><img src="<?= url('/'); ?>/frontend/images/logo.png" alt="" class="img-fluid"
              /></a>
            </div>
            <div class="menu">
              <i class="las la-bars"></i>
            </div>

            <div class="sidebar">
              <div class="times">
                <i class="las la-times"></i>
              </div>
              <ul class="list-unstyled p-0 m-0">
                <li><a href="{{route('home')}}" class="active">Home</a></li>
                <li class="link-sm">
                  <a href="<?= url('products'); ?>">Automation</a>
                  <i class="las la-angle-down"></i>
                  <ul class="list-unstyled p-0 m-0 sub-menu-sm">
                    <li class="link-sm-sub">
                      <a href="<?= url('category'); ?>/faac">FAAC</a>

                      <ul class="list-unstyled p-0 m-0 sub-menu-inner">
                        <li><a href="<?= url('category'); ?>/sliding">Sliding</a></li>
                        <li><a href="<?= url('category'); ?>/swinging">Swinging</a></li>
                        <li><a href="<?= url('category'); ?>/underground">Underground</a></li>
                        <li><a href="<?= url('category'); ?>/swinging">Swinging</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="<?= url('category'); ?>/eca">ECA</a>
                      <ul class="list-unstyled p-0 m-0 sub-menu-inner">
                        <li><a href="<?= url('category'); ?>/sliding">Sliding</a></li>
                        <li><a href="<?= url('category'); ?>/swinging">Swinging</a></li>
                        <li><a href="<?= url('category'); ?>/underground">Underground</a></li>
                        <li><a href="<?= url('category'); ?>/swinging">Swinging</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="<?= url('category'); ?>/canturian">Canturian</a>
                      <ul class="list-unstyled p-0 m-0 sub-menu-inner">
                        <li><a href="<?= url('category'); ?>/sliding">Sliding</a></li>
                        <li><a href="<?= url('category'); ?>/swinging">Swinging</a></li>
                        <li><a href="<?= url('category'); ?>/underground">Underground</a></li>
                        <li><a href="<?= url('category'); ?>/swinging">Swinging</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="<?= url('category'); ?>/bft">BFT</a>
                      <ul class="list-unstyled p-0 m-0 sub-menu-inner">
                        <li><a href="<?= url('category'); ?>/sliding">Sliding</a></li>
                        <li><a href="<?= url('category'); ?>/swinging">Swinging</a></li>
                        <li><a href="<?= url('category'); ?>/underground">Underground</a></li>
                        <li><a href="<?= url('category'); ?>/swinging">Swinging</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="<?= url('category'); ?>/nice">Nice</a>
                      <ul class="list-unstyled p-0 m-0 sub-menu-inner">
                        <li><a href="<?= url('category'); ?>/sliding">Sliding</a></li>
                        <li><a href="<?= url('category'); ?>/swinging">Swinging</a></li>
                        <li><a href="<?= url('category'); ?>/underground">Underground</a></li>
                        <li><a href="<?= url('category'); ?>/swinging">Swinging</a></li>
                      </ul>
                    </li>
                    <!--<li><a href="">Keypad</a></li>-->
                    <!--<li><a href="">Mobile Entry</a></li>-->
                    <!--<li><a href="">Key FOB Entry</a></li>-->
                  </ul>
                </li>
                <!--<li class="link-sm">-->
                <!--  <a href="access-control.html">Access Control</a>-->
                <!--  <i class="las la-angle-down"></i>-->
                <!--  <ul class="list-unstyled p-0 m-0 sub-menu-sm">-->
                <!--    <li><a href="remotes.html">Remotes</a></li>-->
                <!--    <li><a href="">Keypad</a></li>-->
                <!--    <li><a href="">Mobile Entry</a></li>-->
                <!--    <li><a href="">Key FOB Entry</a></li>-->
                <!--  </ul>-->
                <!--</li>-->
                <!--<li class="link-sm">-->
                <!--  <a href="hardware.html"> Hardware</a>-->
                <!--  <i class="las la-angle-down"></i>-->
                <!--  <ul class="list-unstyled p-0 m-0 sub-menu-sm">-->
                <!--    <li><a href="control-board.html">Control Board</a></li>-->
                <!--    <li><a href="">Gear Racks</a></li>-->
                <!--    <li><a href="">Guide Wheels</a></li>-->
                <!--    <li><a href="">Keypads</a></li>-->
                <!--    <li><a href="">Loop Detectors</a></li>-->
                <!--    <li><a href="">Nylon Blocks</a></li>-->
                <!--    <li><a href="">Recivers</a></li>-->
                <!--    <li><a href="">Remotes</a></li>-->
                <!--    <li><a href="">Safety Beams</a></li>-->
                <!--    <li><a href="">Gate Wheels</a></li>-->
                <!--    <li><a href="">Stoppers</a></li>-->
                <!--  </ul>-->
                <!--</li>-->
                <li><a href="<?= url('support'); ?>"> Support</a></li>
                <li><a href="<?= url('about'); ?>">About</a></li>
                <li><a href="<?= url('contact'); ?>">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
        
        @yield('content')
        
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
              <div class="footer-content">
                <div class="footer-logo">
                  <a href="index.html"><img src="<?= url('/'); ?>/frontend/images/logo.png" alt="" /></a>
                </div>
                <div class="footer-details">
                  <a href="tel:0412 063 259" class="phn-num">0412 063 259</a>
                  <a href="mailto:sales@sydneyautomation.com.au" class="mail"
                    >Email : sales@sydneyautomation.com.au</a
                  >
                </div>

                <div class="footer-social">
                  <a href="">
                    <img src="<?= url('/'); ?>/frontend/images/insta-white.png" alt="" />
                  </a>
                  <a href="">
                    <img src="<?= url('/'); ?>/frontend/images/fb-white.png" alt="" />
                  </a>
                </div>
              </div>
            </div>

           
            <div class="col-md-3 mb-4 mb-md-0">
              <div class="footer-content">
                <h4>Main Menu</h4>
                <ul class="list-unstyled p-0 m-0">
                  <li>
                    <a href="<?= url('/'); ?>"
                      ><i class="las la-angle-right"></i>Home</a
                    >
                  </li>
                  <li>
                    <a href="<?= url('products'); ?>"
                      ><i class="las la-angle-right"></i>Products</a
                    >
                  </li>
                  <!--<li>-->
                  <!--  <a href="access-control.html"-->
                  <!--    ><i class="las la-angle-right"></i>Access Control</a-->
                  <!--  >-->
                  <!--</li>-->
                  <!--<li>-->
                  <!--  <a href="hardware.html"-->
                  <!--    ><i class="las la-angle-right"></i>Hardware</a-->
                  <!--  >-->
                  <!--</li>-->
                  <li>
                    <a href="<?= url('support'); ?>"
                      ><i class="las la-angle-right"></i>Support</a
                    >
                  </li>
                  <li>
                    <a href="<?= url('about'); ?>"
                      ><i class="las la-angle-right"></i>About</a
                    >
                  </li>
                  <li>
                    <a href="<?= url('contact'); ?>"
                      ><i class="las la-angle-right"></i>Contact</a
                    >
                  </li>
                </ul>
              </div>
            </div>
           
          </div>
        </div>
      </footer>
      <hr
        class="p-0 m-0"
        style="background-color: rgba(255, 255, 255, 0.057)"
      />
      <div class="footer-btm">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <p class="p-0 m-0">
                Copyright {{now()->year}} © Sydneyautomation.com.au All rights Reserved.<br>
                Design and Development by 10horses.com (Whatsapp contact :+91 6290047104)
              </p>
            </div>
          </div>
        </div>
      </div>

      <script src="<?= url('/'); ?>/frontend/js/jquery-3.3.1.min.js"></script>
      <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.min.js"
        integrity="sha512-synHs+rLg2WDVE9U0oHVJURDCiqft60GcWOW7tXySy8oIr0Hjl3K9gv7Bq/gSj4NDVpc5vmsNkMGGJ6t2VpUMA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
      ></script>
      <script src="<?= url('/'); ?>/frontend/js/ResizeSensor.js"></script>
      <script src="<?= url('/'); ?>/frontend/js/theia-sticky-sidebar.js"></script>
      <script src="<?= url('/'); ?>/frontend/js/bootstrap.min.js"></script>
      <script src="<?= url('/'); ?>/frontend/js/glightbox.min.js"></script>
      <script src="<?= url('/'); ?>/frontend/js/owl.carousel.min.js"></script>
      <script src="<?= url('/'); ?>/frontend/js/isotope.pkgd.min.js"></script>
      <script src="<?= url('/'); ?>/frontend/js/jarallax.min.js"></script>
     
      <script>
        const menu = document.querySelector(".menu");
        const times = document.querySelector(".times");
        const small = document.querySelector(".small");
        const large = document.querySelector(".large");
        const overlay = document.querySelector(".overlay");
        const searchIcon = document.querySelector(".search-icon");
        const searchBox = document.querySelector(".search-box");
        const searchClose = document.querySelector(".search-close");
        const logoImg = document.querySelector(".logo-img");
        const searchSm = document.querySelector(".search-sm");
        const searchBoxSm = document.querySelector(".search-box-sm");
        const searchSmClose = document.querySelector(".search-close-sm");
        //  const overlay = document.querySelector('.overlay')

        const sec1Info = document.querySelector(".sec-info1");
        //const sec1InfoTop =window.pageYOffset+sec1Info.getBoundingClientRect().top;
        const sec1TopForm = document.querySelector(".sec-info1-content");
        //console.log(sec1InfoTop);

        // window.onscroll = function() {
        //   if(window.pageYOffset > sec1InfoTop) {
        //     console.log('ddd')
        //     sec1TopForm.classList.add('sticky')
        //   }
        //   else {
        //     sec1TopForm.classList.remove('sticky')
        //   }
        // }

        menu.addEventListener("click", function () {
          small.classList.add("show");
        });
        times.addEventListener("click", function () {
          small.classList.remove("show");
        });
        overlay.addEventListener("click", function () {
          small.classList.remove("show");
        });

        // window.onscroll = function () {
        //   if (window.pageYOffset > 1) {
        //     large.classList.add("fixed-nav");
        //     logoImg.src = "images/logo-dark.png";
        //   } else {
        //     large.classList.remove("fixed-nav");
        //     logoImg.src = "images/logo.png";
        //   }
        // };
      </script>

      <script>
        $(function () {
          $(".rightSidebar").theiaStickySidebar({
            sidebarBehavior: "modern",
            additionalMarginTop: 20,
            additionalMarginBottom: -70,
          });

          $(".jarallax").jarallax({
            type: "scroll",
            speed: 0.2,
          });
        });

        $(".testi-slider").owlCarousel({
          loop: true,
          margin: 20,
          nav: true,
          dots: false,
          navText: [
            "<i class='las la-angle-left'></i>",
            "<i class='las la-angle-right'></i>",
          ],
          responsive: {
            0: {
              items: 1,
            },
            600: {
              items: 1,
              nav: false,
            },
            1000: {
              items: 3,
            },
          },
        });
        $(".brand-slider").owlCarousel({
          loop: true,
          margin: 0,
          nav: true,
          dots: false,
          navText: [
            "<i class='las la-arrow-left'></i>",
            "<i class='las la-arrow-right'></i>",
          ],
          responsive: {
            0: {
              items: 1,
            },
            600: {
              items: 1,
              nav: false,
            },
            1000: {
              items: 4,
            },
          },
        });

        const lightbox = GLightbox({
          touchNavigation: true,
          loop: true,
          autoplayVideos: true,
          zoomable: true,
          draggable: true,
          touchNavigation: true,
        });
      </script>

      <script>
        var scrollToTopBtn = document.querySelector(".scrollToTopBtn");
        var rootElement = document.documentElement;

        function handleScroll() {
          // Do something on scroll
          var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;
          if (rootElement.scrollTop / scrollTotal > 0.05) {
            // Show button
            scrollToTopBtn.classList.add("showBtn");
          } else {
            // Hide button
            scrollToTopBtn.classList.remove("showBtn");
          }
        }

        function scrollToTop() {
          // Scroll to top logic
          rootElement.scrollTo({
            top: 0,
            behavior: "smooth",
          });
        }
        scrollToTopBtn.addEventListener("click", scrollToTop);
        document.addEventListener("scroll", handleScroll);
      </script>

      <script>
        const linkSms = document.querySelectorAll(".link-sm");
        linkSms.forEach((linkSm) => {
          //  console.log('lalal')
          linkSm.onclick = function () {
            const innerMenu = linkSm.children[2];
            console.log(innerMenu);
            if (innerMenu.style.maxHeight) {
              innerMenu.style.maxHeight = null;
            } else {
              innerMenu.style.maxHeight = innerMenu.scrollHeight + "px";
            }
          };
        });
      </script>
  
    
     
      <script>
         $(".updateQty").hide();
         $("input[name=quantity]").bind('keyup input', function(){
  $(".updateQty").show();

});
      </script>
     
      
    </body>
  </div>
</html>