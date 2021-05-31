

<div class="main-slider-sec">
   <?php if(Cache::has('sliders') && is_array(Cache::get('sliders')) && count(Cache::get('sliders'))): ?>
   <div class="slider-activation owl-carousel nav-style dot-style nav-dot-left">
      <?php $__currentLoopData = Cache::get('sliders'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($s->type == 'product'): ?>
      <a href="<?php echo e(route('product-single', $s->slug ?? '-')); ?>">
         <div class="single-slider-content height-100vh bg-img" data-dot="0<?php echo e($i+1); ?>"
            style="background-image:url('<?php echo e($s->image); ?>');">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-5 col-md-6 col-12 col-sm-6">
                     <div class="inner-slider-img slider-animated-content">
                        <img class="animated" src="<?php echo e($s->image2); ?>" alt="">
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-6 col-12 col-sm-6">
                     <div class="slider-content slider-animated-content ml-70">
                        <h1 class="animated">11</h1>
                        <p class="animated"></p>
                        <div class="btn-hover">
                           <a class="animated norm-btn" href="product-details.html">SHOP NOW</a>
                        </div>
                      </div>
                  </div>
               </div>
            </div>
         </div>
      </a>
      <?php elseif($s->type == 'category'): ?>
      <a href="<?php echo e(route('category', $s->slug ?? '-')); ?>">
         <div class="single-slider-content height-100vh bg-img" data-dot="0<?php echo e($i+1); ?>"
            style="background-image:url('<?php echo e($s->image); ?>');">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-5 col-md-6 col-12 col-sm-6">
                     <div class="inner-slider-img slider-animated-content">
                        <img class="animated" src="<?php echo e($s->image2); ?>" alt="">
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-6 col-12 col-sm-6">
                     <div class="slider-content slider-animated-content ml-70">
                        <h1 class="animated">zz</h1>
                        <p class="animated">dd</p>
                        <div class="btn-hover">
                           <a class="animated norm-btn" href="product-details.html">SHOP NOW</a>
                        </div>
                      </div>
                  </div>
               </div>
            </div>
         </div>
      </a>
      <?php else: ?>
      <a href="">
         <div class="single-slider-content height-100vh bg-img" data-dot="0<?php echo e($i+1); ?>"
            style="background-image:url('<?php echo e($s->image); ?>');">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-5 col-md-6 col-12 col-sm-6">
                     <div class="inner-slider-img slider-animated-content">
                        <img class="animated" src="<?php echo e($s->image2); ?>" alt="">
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-6 col-12 col-sm-6">
                     <div class="slider-content slider-animated-content ml-70">
                        <h1 class="animated">ww</h1>
                        <p class="animated">aa</p>
                        <div class="btn-hover">
                           <a class="animated norm-btn" href="product-details.html">SHOP NOW</a>
                        </div>
                      </div>
                  </div>
               </div>
            </div>
         </div>
      </a>
      <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
   <?php endif; ?>
</div>

<section class="shipping-content">
   <div class="container">
      <div class="shipping_inner_content">
         <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
               <div class="single_shipping_content">
                  <div class="shipping_icon">
                     <em class="far fa-<?php echo e(__('msg.iconbox1_i')); ?>"></em>
                  </div>
                  <div class="shipping_content">
                     <h2><?php echo e(__('msg.iconbox1_h2')); ?></h2>
                     <p><?php echo e(__('msg.iconbox1_p')); ?></p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="single_shipping_content">
                  <div class="shipping_icon">
                     <em class="fab fa-<?php echo e(__('msg.iconbox2_i')); ?>"></em>
                  </div>
                  <div class="shipping_content">
                     <h2><?php echo e(__('msg.iconbox2_h2')); ?></h2>
                     <p><?php echo e(__('msg.iconbox2_p')); ?></p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="single_shipping_content">
                  <div class="shipping_icon">
                     <em class="fas fa-<?php echo e(__('msg.iconbox3_i')); ?>"></em>
                  </div>
                  <div class="shipping_content">
                     <h2><?php echo e(__('msg.iconbox3_h2')); ?></h2>
                     <p><?php echo e(__('msg.iconbox3_p')); ?></p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="single_shipping_content">
                  <div class="shipping_icon">
                     <em class="fas fa-<?php echo e(__('msg.iconbox4_i')); ?>"></em>
                  </div>
                  <div class="shipping_content">
                     <h2><?php echo e(__('msg.iconbox4_h2')); ?></h2>
                     <p><?php echo e(__('msg.iconbox4_p')); ?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- newsletter pop -->
<section class="shipping-content" id="dialog">
   <div class="popup_box ">
      <div class="popup_content newsletter">
         <span class="popup_close">Close</span>
         <div class="content">
            <img src="<?php echo e(theme('images/newsletter.png')); ?>" alt="">
            <div class="wrapper1">
               <div class="newletter-title">
                  <h2>Newsletter</h2>
               </div>
               <div class="box-content newleter-content">
                  <label class="newletter-label">Enter your email address to subscribe our notification of our
                  new post &amp; features by email.</label>
                  <div id="subscribe-form">
                     <form name="subscribe" id="subscribe_popup" action="<?php echo e(route('newsletter')); ?>" method="POST" class="ajax-form">
                        <?php echo csrf_field(); ?>
                        <div class="formResponse"></div>
                        <input type="email"  name="email" id="subscribe_pemail"
                           placeholder="Enter Your Email.." class="text-center">
                        <input type="hidden" value="" name="subscribe_pname" id="subscribe_pname">
                        <div id="notification"></div>
                        <a class="subscribe-btn-outline"><button type="submit" name="submit">Subscribe</button></a>
                     </form>
                     <div class="subscribe-bottom">
                        <input type="checkbox" id="newsletter_popup_dont_show_again" class="no">
                        <label for="newsletter_popup_dont_show_again">Don't show this popup again</label>
                     </div>
                  </div>
                  <!-- subscribe-form -->
               </div>
               <!-- box-content -->
            </div>
         </div>
         <!-- row -->
      </div>
   </div>
</section>
<!-- /Newsletter Popup -->

<?php /**PATH C:\xampp\htdocs\ecarttest4\resources\views/themes/ekartfulllayout/home.blade.php ENDPATH**/ ?>