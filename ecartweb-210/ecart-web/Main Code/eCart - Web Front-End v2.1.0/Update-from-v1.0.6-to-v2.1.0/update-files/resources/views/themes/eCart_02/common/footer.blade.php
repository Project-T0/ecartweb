{{-- subscribe sec --}}
<section class="subscribe-news">
   <div class="newsletter">
      <div class="container">
         <div class="newsletter-inner center-sm">
            <div class="row justify-content-center align-items-center">
               <div class=" col-xl-10 col-md-12">
                  <div class="newsletter-bg">
                     <div class="row  align-items-center">
                        <div class="col-xl-6 col-lg-6">
                           <div class="d-lg-flex align-items-center">
                              <div class="newsletter-icon">
                                 <i class="far fa-envelope-open fa-3x"></i>
                              </div>
                              <div class="newsletter-title">
                                 <h2 class="main_title">{{ __('msg.subscribe_to_our_newsletter') }}</h2>
                                 <div class="sub-title">{{ __('msg.newsletter_line') }}
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                           <form action="{{ route('newsletter') }}" method="POST" class="ajax-form">
                              @csrf
                              <div class="formResponse"></div>
                              <div class="newsletter-box">
                                 <input type="email"  id="email" name="email" placeholder="Email Here..." required>
                                 <button title="Subscribe" name="submit" type="submit" class="btn-color">Subscribe</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
{{-- footer --}}
<footer class="footer" id="iconfooter3">
   <div class="container">
      <hr>
      <div class="footer-inner">
         <div class="footer-middle">
            <div class="row">
               <div class="col-lg-3 f-col">
                  <div class="footer-static-block">
                     <span class="opener plus"></span>
                     <div class="f-logo">
                        <a href="{{ route('home') }}" class="">
                        <img src="{{ _asset(Cache::get('web_logo')) }}" alt="Logo">
                        </a>
                     </div>
                     <div class="footer-respond">
                        <p>{{ Cache::get('common_meta_description', '') }}</p>
                        @if(trim(Cache::get('android_app_url', '')) != '')
                        <a target="_blank" href="{{ Cache::get('android_app_url', 'https://play.google.com') }}" class="app_button">
                        <img src="{{ _asset(Cache::get('google_play', theme('images/google1.png'))) }}" alt="Google Play Store">
                        </a>
                        @endif
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 f-col">
                  <div class="footer-static-block">
                     <span class="opener plus"></span>
                     <h3 class="title">{{ __('msg.customer_services') }} <span
                        class="animate-border animate-border border-black"></span><em
                        class="fas fa-angle-down arrowdown"></em></h3>
                     <ul class="collapse dont-collapse-sm link">
                        <li><a href="{{ route('page', 'privacy-policy') }}">{{ __('msg.privay_policy')}}</a></li>
                        <li><a href="{{ route('page', 'tnc') }}">{{ __('msg.terms_and_conditions')}}</a></li>
                        <li><a href="{{ route('page', 'refund-policy') }}">Refund Policy</a></li>
                        <li><a href="{{ route('page', 'shipping-policy') }}">shipping policy</a></li>
                        <li><a href="{{ route('page', 'delivery-returns-policy') }}">Delivery & Returns </a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 f-col">
                  <div class="footer-static-block">
                     <span class="opener plus"></span>
                     <h3 class="title">{{ __('msg.recent_blogs') }} <span
                        class="animate-border animate-border border-black"></span><em
                        class="fas fa-angle-down arrowdown"></em></h3>
                         <ul class="collapse dont-collapse-sm address-footer">
                           @if(Cache::has('getblog') && is_array(Cache::get('getblog')) && count(Cache::get('getblog')))
                           @foreach(Cache::get('getblog') as $bg)
                                 <li class="post_content1 wow fadeInRight">
                                    <div class="post_thumb">
                                          <a href="{{ route('blog-single', $bg->slug) }}"><img src="{{ $bg->image }}" alt="{{ $bg->title }}"></a>
                                    </div>
                                    <div class="post_info">
                                          <h4><a href="{{ route('blog-single', $bg->slug) }}">{{ $bg->title }}</a></h4>
                                          <span><em class="far fa-clock"></em> {{ date(" F j, Y", strtotime($bg->date_created)) }} </span>

                                    </div>
                                 </li>
                                 @endforeach
                                 @endif
                         </ul>
                  </div>
               </div>
               <div class="col-lg-3 f-col">
                  <div class="footer-static-block">
                     <span class="opener plus"></span>
                     <h3 class="title">ADDRESS <span
                        class="animate-border animate-border border-black"></span><em
                        class="fas fa-angle-down arrowdown"></em></h3>
                     <ul class="collapse dont-collapse-sm address-footer">
                        @php
                        $store_address = str_ireplace("<br>", ' ',  Cache::get('store_address') );
                        @endphp
                        @if(trim(Cache::get('store_address', '')) != '')
                        <li class="item">
                           <em class="fas fa-map-marker"> </em>
                           <p>{{ $store_address }}</p>
                        </li>
                        @endif
                        <li class="item">
                           <em class="fas fa-envelope"> </em>
                           <p> <a href="#">{{ Cache::get('support_email')}}</a> </p>
                        </li>
                        <li class="item">
                           <em class="fas fa-phone"> </em>
                           <p>{{ Cache::get('support_number')}}</p>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <hr>
         <div class="footer-bottom ">
            <div class="row mtb-30">
               <div class="col-lg-6 ">
                  <div class="copy-right ">{{__('msg.copyright')}} &copy; {{date('Y')}} {{__('msg.made')}} <a href="https://wrteam.in/" target="_blank">{{__('msg.wrteam')}}.</a>
                  </div>
               </div>
               <div class="col-lg-6 ">
                  @if(Cache::has('social_media') && is_array(Cache::get('social_media')) && count(Cache::get('social_media')))
                  <div class="footer_social pt-xs-15 center-sm">
                     <ul class="social-icon">
                        <li>
                           <div class="title">Follow us on :</div>
                        </li>
                        @foreach(Cache::get('social_media') as $i => $c)
                        <li><a href="{{ $c->link }}" target="_blank"><em class="fab {{ $c->icon }}"></em></a></li>
                        @endforeach
                     </ul>
                  </div>
                  @endif
               </div>
            </div>
            <hr>
            <div class="row text-center mtb-30 ">
               <div class="col-12 ">
                  <div class="site-link">
                     <ul>
                        <li><a href="{{ route('page', 'about') }}">{{ __('msg.about_us')}}</a></li>
                        <li><a href="{{ route('shop') }}">{{ __('msg.shop')}} </a></li>
                        <li><a href="{{ route('blog') }}">{{ __('msg.blog')}} </a></li>
                        <li><a href="{{ route('page', 'faq') }}">{{ __('msg.faq')}}</a></li>
                        <li><a href="{{ route('page', 'contact') }}">{{ __('msg.contact_us')}} </a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row text-center">
               <div class="col-12 ">
                  <div class="payment">
                     <div class="payment_icon">
                        <ul>
                           <li>
                              @if(isset(Cache::get('payment_methods')->cod_payment_method) && Cache::get('payment_methods')->cod_payment_method == 1)
                              <img src="{{URL::asset('images/cod.svg')}}" data-src="img/cards_all.svg" alt="" class="lazy">
                              @endif
                           </li>
                           <li>
                              @if(isset(Cache::get('payment_methods')->paypal_payment_method) && Cache::get('payment_methods')->paypal_payment_method == 1)
                              <img src="{{URL::asset('images/paypal.svg')}}" data-src="img/cards_all.svg" alt="" class="lazy">
                              @endif
                           </li>
                           <li>
                              @if(isset(Cache::get('payment_methods')->payumoney_payment_method) && Cache::get('payment_methods')->payumoney_payment_method == 1)
                              <img src="{{URL::asset('images/payu.svg')}}" data-src="img/cards_all.svg" alt="" class="lazy">
                              @endif
                           </li>
                           <li>
                              @if(isset(Cache::get('payment_methods')->razorpay_payment_method) && Cache::get('payment_methods')->razorpay_payment_method == 1)
                              <img src="{{URL::asset('images/rozerpay.svg')}}" data-src="img/cards_all.svg" alt="" class="lazy">
                              @endif
                           </li>
                           <li>
                              @if(isset(Cache::get('payment_methods')->stripe_payment_method) && Cache::get('payment_methods')->stripe_payment_method == 1)
                              <img src="{{URL::asset('images/stripe.svg')}}" data-src="img/cards_all.svg" alt="" class="lazy">
                              @endif
                           </li>
                           <li>
                              @if(isset(Cache::get('payment_methods')->midtrans_payment_method) && Cache::get('payment_methods')->midtrans_payment_method == 1)
                              <img src="{{URL::asset('images/midtrans.svg')}}" data-src="img/cards_all.svg" alt="" class="lazy">
                              @endif
                           </li>
                           <li>
                              @if(isset(Cache::get('payment_methods')->flutterwave_payment_method) && Cache::get('payment_methods')->flutterwave_payment_method == 1)
                              <img src="{{URL::asset('images/flutterwave.svg')}}" data-src="img/cards_all.svg" alt="" class="lazy">
                              @endif
                           </li>
                           <li>
                              @if(isset(Cache::get('payment_methods')->paystack_payment_method) && Cache::get('payment_methods')->paystack_payment_method == 1)
                              <img src="{{URL::asset('images/paystack.svg')}}" data-src="img/cards_all.svg" alt="" class="lazy">
                              @endif
                           </li>
                           <li>
                              @if(isset(Cache::get('payment_methods')->paytm_payment_method) && Cache::get('payment_methods')->paytm_payment_method == 1)
                              <img src="{{URL::asset('images/paytm.svg')}}" data-src="img/cards_all.svg" alt="" class="lazy">
                              @endif
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
</body>
</html>
<script src="{{ theme('js/cartajax.js') }}"></script>
<script src="{{ theme('js/jquery.countdown.js') }}"></script>
<script src="{{ theme('js/plugins.js') }}"></script>
<script src="{{ theme('js/semantic.min.js') }}"></script>
<script src="{{ theme('js/elevatezoom.js') }}"></script>
<script src="{{ theme('js/owl-carousel.js') }}"></script>
<script src="{{ theme('js/wow.js') }}"></script>
<script src="{{ theme('js/actionswitcher.js') }}"></script>
<script src="{{ theme('js/switcherdemo.js') }}"></script>
<script src="{{ theme('js/script.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

<div class="demo-style-switch" id="switch-style">
<a id="toggle-switcher" class="switch-button"><em class="far fa-sun fa-spin"></em></a>
<div class="switched-options">
  {{-- <ul>
      <li class="mh-demo-styles">
         <h4>Dark Mode</h4>
         <ul>
            <li>
               <button class="btn-toggle darkmodebtn">Dark Mode</button>
            </li>
         </ul>
         <h4>RTL</h4>
         <ul>
            <li>
               <a href="#" target="_blank"> <img src="{{theme('images/switcher.png')}}" alt=""
                  class="img-fluid"></a>
            </li>
         </ul>
      </li>
   </ul> --}}
   <div class="config-title">
      Colors :
   </div>
   <ul class="styles">
      <li>
         <a href="#" onclick="setActiveStyleSheet('blue'); return false;" title="Blue">
            <div class="blue"></div>
         </a>
      </li>
      <li>
         <a href="#" onclick="setActiveStyleSheet('orange'); return false;" title="Orange">
            <div class="orange"></div>
         </a>
      </li>
      <li>
         <a href="#" onclick="setActiveStyleSheet('green'); return false;" title="Green">
            <div class="green"></div>
         </a>
      </li>
      <li>
         <a href="#" onclick="setActiveStyleSheet('purplish'); return false;" title="purplish">
            <div class="purplish"></div>
         </a>
      </li>
      <li>
         <a href="#" onclick="setActiveStyleSheet('gold'); return false;" title="gold">
            <div class="gold"></div>
         </a>
      </li>
      <li>
         <a href="#" onclick="setActiveStyleSheet('red'); return false;" title="red">
            <div class="red"></div>
         </a>
      </li>
      <li>
         <a href="#" onclick="setActiveStyleSheet('yellow'); return false;" title="Yellow">
            <div class="yellow"></div>
         </a>
      </li>
      <li>
         <a href="#" onclick="setActiveStyleSheet('pink'); return false;" title="pink">
            <div class="pink"></div>
         </a>
      </li>
   </ul>
</div>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
<!-- TODO: Add SDKs for Firebase products that you want to use
   https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-firestore.js"></script>
<script>
   // Your web app's Firebase configuration
   // For Firebase JS SDK v7.20.0 and later, measurementId is optional
   var firebaseConfig = {
     apiKey: "AIzaSyBE5_pDbjFWfTT_XDn9Yxfv1QWlfBq6dVQ",
     authDomain: "ekart-2d9ee.firebaseapp.com",
     databaseURL: "https://ekart-2d9ee.firebaseio.com",
     projectId: "ekart-2d9ee",
     storageBucket: "ekart-2d9ee.appspot.com",
     messagingSenderId: "382070340183",
     appId: "1:382070340183:web:4ccd08f54d4fe1d0f7c112",
     measurementId: "G-GNBBH0JWLY"
   };
   // Initialize Firebase
   firebase.initializeApp(firebaseConfig);
   firebase.analytics();
</script>
