<?php if(isset($data['data'])  && is_array($data['data']) && count($data['data'])): ?>
<!-- breadcumb -->
<section class="page_title corner-title overflow-visible">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <h1><?php echo e($data['data'][0]->title); ?></h1>
            <ol class="breadcrumb">
               <li class="breadcrumb-item">
                  <a href="<?php echo e(route('blog')); ?>"><?php echo e(__('msg.blog')); ?></a>
               </li>
               <li class="breadcrumb-item active">
                  <?php echo e($data['data'][0]->title); ?>

               </li>
            </ol>
            <div class="divider-15 d-none d-xl-block"></div>
         </div>
      </div>
   </div>
</section>
<!-- eof breadcumb -->
<?php endif; ?>
<!-- blog-details -->
<div class="main-content">
<section class="blog_details">
   <div class="container-fluid">
      <div class="row">
         <?php if(isset($data['data'])  && is_array($data['data']) && count($data['data'])): ?>
         <div class="col-lg-9 col-md-12 ">
            <!--blog grid area start-->
            <div class="outer_blog_content wow fadeInLeftBig">
               <article class="single_blog_content">
                  <figure>
                     <div class="inner_post_header wow fadeInLeft">
                        <h3 class="inner_post_title wow fadeInLeft"><?php echo e($data['data'][0]->title); ?></h3>
                        <div class="blog_post_content wow fadeInLeft">
                           <div class="stats">
                              <p>Posted On : <?php echo e(date(" F j, Y", strtotime($data['data'][0]->date_created))); ?></p>
                           </div>
                        </div>
                        <div class="blog_thumb wow fadeInLeft">
                           <img src="<?php echo e($data['data'][0]->image); ?>" alt="blog">
                        </div>
                        <figcaption class="blog_content">
                           <h6 class="blog-category blog-text-success"><em class="far fa-newspaper"></em>
                              <?php echo e($data['data'][0]->category_name); ?>

                           </h6>
                           <div class="post_content wow fadeInLeft">
                              <p><?php echo e(strip_tags($data['data'][0]->description)); ?></p>
                           </div>
                           <div class="tag_content wow fadeInLeft">
                              <div class="social_icons wow fadeInLeft">
                                 <p>share this post:</p>
                                 <ul>
                                    <li><a href="javascript:void(0)"><em class="fab fa-instagram"></em></a></li>
                                    <li><a href="javascript:void(0)"><em class="fab fa-twitter"></em></a></li>
                                    <li><a href="javascript:void(0)"><em class="fab fa-google-plus-g"></em></a></li>
                                    <li><a href="javascript:void(0)"><em class="fab fa-facebook-f"></em></a></li>
                                    <li><a href="javascript:void(0)"><em class="fab fa-youtube"></em></a></li>
                                 </ul>
                              </div>
                           </div>
                        </figcaption>
                  </figure>
               </article>
               </div>
               <!--blog grid area start-->
            </div>
            <?php endif; ?>
            <div class="col-lg-3 col-md-12">
               <div class="blog_sidebar_content1">
                  <div class="content_list widget_post">
                     <?php if(isset($data['blogcategories'])  && is_array($data['blogcategories']) && count($data['blogcategories'])): ?>
                     <div class="widget_title wow fadeInRight">
                        <h3><?php echo e(__('msg.categories')); ?></h3>
                     </div>
                     <ul>
                        <?php $__currentLoopData = $data['blogcategories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b =>$bg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('blog-category', $bg->slug)); ?>"><?php echo e($bg->name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
                     <?php endif; ?>
                  </div>
                  <div class="content_list widget_post">
                     <?php if(isset($data['datarecentblog'])  && is_array($data['datarecentblog']) && count($data['datarecentblog'])): ?>
                     <div class="widget_title wow fadeInRight">
                        <h3><?php echo e(__('msg.recent_blogs')); ?></h3>
                     </div>
                     <?php $__currentLoopData = $data['datarecentblog']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b =>$bg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="post_content1 wow fadeInRight">
                        <div class="post_thumb">
                           <a href="<?php echo e(route('blog-single', $bg->slug)); ?>"><img src="<?php echo e($bg->image); ?>" alt="<?php echo e($bg->title); ?>"></a>
                        </div>
                        <div class="post_info">
                           <h4><a href="<?php echo e(route('blog-single', $bg->slug)); ?>"><?php echo e($bg->title); ?></a></h4>
                           <span><em class="far fa-clock"></em> <?php echo e(date(" F j, Y", strtotime($bg->date_created))); ?> </span>
                        </div>
                     </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
</section>
</div><?php /**PATH /home3/wrteamin/public_html/webekart/ekartfulllayout/resources/views/themes/ekartfulllayout/blogsingle.blade.php ENDPATH**/ ?>