
<?php if(Cache::has('categories') && is_array(Cache::get('categories')) && count(Cache::get('categories'))): ?>
<div class="main-content mt-4 my-md-2">
   <section class="popular-categories mt-lg-5 mt-md-3 mt-sm-2 mt-3">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <div class="popular_title">
                  <h2>Popular Categories</h2>
                  <div class="pop_desc_title">
                     Add Popular Categories to weekly show up
                  </div>
               </div>
               <div class="popular_content">
                  <div class="popular-cat owl-carousel">
                     <?php  
                     $i=0;
                     ?>
                     <?php $__currentLoopData = Cache::get('categories'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <?php
                     $i++;
                     ?>
                     <?php if($i%2 !== 0): ?>
                     <div>
                        <?php if($c->web_image !== ''): ?>
                        <div class="pop_item-listcategories">
                           <div class="pop_list-categories">
                              <div class="pop_thumb-category">
                                 <a href="<?php echo e($c->image); ?>"><img
                                    src="<?php echo e($c->web_image); ?>" alt="<?php echo e($c->name ?? 'Category'); ?>"></a>
                              </div>
                              <div class="pop_desc_listcat">
                                 <div class="name_categories">
                                    <h4><?php echo e($c->name); ?></h4>
                                 </div>
                                 <div class="number_product"><?php echo e($c->subtitle); ?></div>
                                 <div class="view-more"><a href="<?php echo e(route('category', $i)); ?>"><?php echo e(__('msg.shop_now')); ?> &nbsp;<i
                                    class="fas fa-chevron-circle-right"></i></a></div>
                              </div>
                           </div>
                        </div>
                        <?php else: ?>
                        <div class="pop_item-listcategories">
                           <div class="pop_list-categories">
                              <div class="pop_thumb-category">
                                 <a href="<?php echo e($c->image); ?>"><img
                                    src="<?php echo e($c->image); ?>" alt="<?php echo e($c->name ?? 'Category'); ?>"></a>
                              </div>
                              <div class="pop_desc_listcat">
                                 <div class="name_categories">
                                    <h4><?php echo e($c->name); ?></h4>
                                 </div>
                                 <div class="number_product"><?php echo e($c->subtitle); ?></div>
                                 <div class="view-more"><a href="<?php echo e(route('category', $i)); ?>"><?php echo e(__('msg.shop_now')); ?> &nbsp;<i
                                    class="fas fa-chevron-circle-right"></i></a></div>
                              </div>
                           </div>
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php if($i%2 == 0): ?>
                        <?php if($c->web_image !== ''): ?>
                        <div class="pop_item-listcategories">
                           <div class="pop_list-categories">
                              <div class="pop_thumb-category">
                                 <a href="<?php echo e($c->image); ?>"><img
                                    src="<?php echo e($c->web_image); ?>" alt="<?php echo e($c->name ?? 'Category'); ?>"></a>
                              </div>
                              <div class="pop_desc_listcat">
                                 <div class="name_categories">
                                    <h4><?php echo e($c->name); ?></h4>
                                 </div>
                                 <div class="number_product"><?php echo e($c->subtitle); ?></div>
                                 <div class="view-more"><a href="<?php echo e(route('category', $i)); ?>"><?php echo e(__('msg.shop_now')); ?> &nbsp;<i
                                    class="fas fa-chevron-circle-right"></i></a></div>
                              </div>
                           </div>
                        </div>
                        <?php else: ?>
                        <div class="pop_item-listcategories">
                           <div class="pop_list-categories">
                              <div class="pop_thumb-category">
                                 <a href="<?php echo e($c->image); ?>"><img
                                    src="<?php echo e($c->image); ?>" alt="<?php echo e($c->name ?? 'Category'); ?>"></a>
                              </div>
                              <div class="pop_desc_listcat">
                                 <div class="name_categories">
                                    <h4><?php echo e($c->name); ?></h4>
                                 </div>
                                 <div class="number_product"><?php echo e($c->subtitle); ?></div>
                                 <div class="view-more"><a href="<?php echo e(route('category', $i)); ?>"><?php echo e(__('msg.shop_now')); ?> &nbsp;<i
                                    class="fas fa-chevron-circle-right"></i></a></div>
                              </div>
                           </div>
                        </div>
                        <?php endif; ?>
                     </div>
                     <?php endif; ?>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\ecarttest4\resources\views/themes/ekartfulllayout/parts/categories.blade.php ENDPATH**/ ?>