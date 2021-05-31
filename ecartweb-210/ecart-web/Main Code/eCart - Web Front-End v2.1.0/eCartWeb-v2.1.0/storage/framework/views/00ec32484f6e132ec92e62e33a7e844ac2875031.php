<body>
    <footer class="footer-area">
        <div class="footer-big">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="footer-widget d-flex justify-content-center">
                            <div class="widget-about">
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(_asset(Cache::get('web_logo'))); ?>" alt="Logo"></a>
                                </div>
                                <?php if(trim(Cache::get('android_app_url', '')) != ''): ?>
                                <div class="col-12">
                                    <div class="google-apple1">
                                        <a target="_blank" href="<?php echo e(Cache::get('android_app_url', 'https://play.google.com')); ?>">
                                            <img src="<?php echo e(_asset(Cache::get('google_play', theme('images/google1.png')))); ?>" alt="Google Play Store">
                                        </a>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if(Cache::has('social_media') && is_array(Cache::get('social_media')) && count(Cache::get('social_media'))): ?>
                                <div class="col-12 mt-2">
                                    <div class="row d-flex justify-content-center">
                                        <div class="social-button">
                                            <ul>
                                                <?php $__currentLoopData = Cache::get('social_media'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="social-icon">
                                                    <a href="<?php echo e($c->link); ?>" target="_blank"><em class="fab <?php echo e($c->icon); ?>"></em></a>
                                                </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-widget text-center d-flex justify-content-center">
                            <div class="footer-menu no-padding">
                                <h4 class="footer-widget-title  m-0"> <?php echo e(__('msg.customer_services')); ?></h4>
                                <ul>
                                    <li><a href="<?php echo e(route('page', 'about')); ?>"> <?php echo e(__('msg.about_us')); ?></a>
                                    <li><a href="<?php echo e(route('page', 'faq')); ?>"><?php echo e(__('msg.faq')); ?></a>
                                    <li><a href="<?php echo e(route('page', 'privacy-policy')); ?>"><?php echo e(__('msg.privay_policy')); ?></a>
                                    <li><a href="<?php echo e(route('page', 'tnc')); ?>"> <?php echo e(__('msg.terms_and_conditions')); ?></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-widget text-center d-flex justify-content-center">
                            <div class="footer-menu  no-padding">
                                <h4 class="footer-widget-title  m-0"><?php echo e(__('msg.contact_us')); ?></h4>
                                <ul>
                                    <?php if(trim(Cache::get('whatsapp_number', '')) != ''): ?>
                                    <li><a class="noHover"><?php echo e(__('msg.whatsApp_us', ['number' => Cache::get('whatsapp_number')])); ?></a></li>
                                    <?php endif; ?>
                                    <?php if(trim(Cache::get('support_number', '')) != ''): ?>
                                    <li><a class="noHover"><?php echo e(__('msg.call_us', ['number' => Cache::get('support_number')])); ?></a></li>
                                    <?php endif; ?>
                                    <?php if(trim(Cache::get('support_timings', '')) != ''): ?>
                                    <li><a class="noHover">Hours: <?php echo e(Cache::get('support_timings')); ?></a></li>
                                    <?php endif; ?>
                                    <?php if(trim(Cache::get('support_email', '')) != ''): ?>
                                    <li><a class="noHover"><?php echo e(__('msg.email_id', ['email' => Cache::get('support_email')])); ?></a></li>
                                    <?php endif; ?>
                                    <?php
                                    $store_address = str_ireplace("<br>", ' ',  Cache::get('store_address') );
                                    ?>
                                    <?php if(trim(Cache::get('store_address', '')) != ''): ?>
                                    <li><a class="noHover"><?php echo e(__('msg.store_address')); ?> <?php echo e($store_address); ?></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-widget">
                            <div class="footer-menu  no-padding">
                                <h4 class="footer-widget-title  m-0 row justify-content-center"> <?php echo e(__('msg.newsletter')); ?></h4>
                                <div class="row justify-content-center mt-2">
                                    <em class="far fa-envelope-open fa-3x envelope mb-2"></em>
                                </div>
                                <h5 class="mt-2 d-flex justify-content-center subscribeletter"><?php echo e(__('msg.subscribe_to_our_newsletter')); ?></h5>
                                <div class="well1">
                                    <form action="<?php echo e(route('newsletter')); ?>" method="POST" class="ajax-form">
                                        <?php echo csrf_field(); ?>
                                        <div class="formResponse"></div>
                                        <div class="input-group">
                                            <input class="btn btn-lg border border-info" name="email" id="email" type="email" placeholder="Enter Your Email.." required>
                                            <button class="btn btn-lg" type="submit" name="submit" value="submit"><em class="fas fa-paper-plane"></em></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="line-footer">
                            <hr>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12 footer-center">
                                <p class="copyright-text"><?php echo e(__('msg.copyright')); ?> &copy; <?php echo e(date('Y')); ?> <?php echo e(__('msg.made')); ?>

                                        <a target="_blank" href="https://wrteam.in/" class="companyname"> <?php echo e(__('msg.wrteam')); ?>.</a>
                                    </p>
                                </div>
                             <div class="col-lg-6 col-md-12 col-12 footer-center footer-payment-icons">
                                    <ul class="footer-selector clearfix">
                                        <li><h6 class="we-accept"><?php echo e(__('msg.we_accept')); ?></h6>

                                            <?php if(isset(Cache::get('payment_methods')->cod_payment_method) && Cache::get('payment_methods')->cod_payment_method == 1): ?>
                                                <img src="<?php echo e(URL::asset('images/cod.svg')); ?>" data-src="img/cards_all.svg" alt="" class="lazy">
                                            <?php endif; ?>
                                            <?php if(isset(Cache::get('payment_methods')->paypal_payment_method) && Cache::get('payment_methods')->paypal_payment_method == 1): ?>
                                                <img src="<?php echo e(URL::asset('images/paypal.svg')); ?>" data-src="img/cards_all.svg" alt="" class="lazy">
                                            <?php endif; ?>
                                            <?php if(isset(Cache::get('payment_methods')->payumoney_payment_method) && Cache::get('payment_methods')->payumoney_payment_method == 1): ?>
                                                <img src="<?php echo e(URL::asset('images/payu.svg')); ?>" data-src="img/cards_all.svg" alt="" class="lazy">
                                            <?php endif; ?>
                                            <?php if(isset(Cache::get('payment_methods')->razorpay_payment_method) && Cache::get('payment_methods')->razorpay_payment_method == 1): ?>
                                                <img src="<?php echo e(URL::asset('images/rozerpay.svg')); ?>" data-src="img/cards_all.svg" alt="" class="lazy">
                                            <?php endif; ?>
                                            <?php if(isset(Cache::get('payment_methods')->stripe_payment_method) && Cache::get('payment_methods')->stripe_payment_method == 1): ?>
                                                <img src="<?php echo e(URL::asset('images/stripe.svg')); ?>" data-src="img/cards_all.svg" alt="" class="lazy">
                                            <?php endif; ?>
                                            <?php if(isset(Cache::get('payment_methods')->midtrans_payment_method) && Cache::get('payment_methods')->midtrans_payment_method == 1): ?>
                                                <img src="<?php echo e(URL::asset('images/midtrans.svg')); ?>" data-src="img/cards_all.svg" alt="" class="lazy">
                                            <?php endif; ?>
                                            <?php if(isset(Cache::get('payment_methods')->flutterwave_payment_method) && Cache::get('payment_methods')->flutterwave_payment_method == 1): ?>
                                                <img src="<?php echo e(URL::asset('images/flutterwave.svg')); ?>" data-src="img/cards_all.svg" alt="" class="lazy">
                                            <?php endif; ?>
                                            <?php if(isset(Cache::get('payment_methods')->paystack_payment_method) && Cache::get('payment_methods')->paystack_payment_method == 1): ?>
                                                <img src="<?php echo e(URL::asset('images/paystack.svg')); ?>" data-src="img/cards_all.svg" alt="" class="lazy">
                                            <?php endif; ?>
                                            <?php if(isset(Cache::get('payment_methods')->paytm_payment_method) && Cache::get('payment_methods')->paytm_payment_method == 1): ?>
                                                <img src="<?php echo e(URL::asset('images/paytm.svg')); ?>" data-src="img/cards_all.svg" alt="" class="lazy">
                                            <?php endif; ?>
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
</html>
<?php /**PATH /home3/wrteamin/public_html/webekart/eCart_02/resources/views/themes/eCart_01/common/footer.blade.php ENDPATH**/ ?>