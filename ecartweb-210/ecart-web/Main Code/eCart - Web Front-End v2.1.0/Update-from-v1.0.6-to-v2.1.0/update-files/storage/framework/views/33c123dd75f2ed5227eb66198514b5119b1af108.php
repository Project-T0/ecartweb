<section class="footerfix section-content padding-bottom">
    <a href="#" id="scroll"><span></span></a>
    <div class="container">
        <nav class="row row-eq-height">
            <?php if(isset($data['sub-categories'])): ?>
            <?php $__currentLoopData = $data['sub-categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 mt-2">
                <a href="<?php echo e(route('shop', ['category' => $data['category']->slug, 'sub-category' => $c->slug])); ?>">
                    <div class="card card-category eq-height-element">
                        <div class="img-wrap">
                            <img src="<?php echo e($c->image); ?>" alt="<?php echo e($c->name ?? ''); ?>">
                        </div>
                        <div class="card-body1234 text-center">
                            <h4 class="card-title"><?php echo e($c->name); ?></h4>
                            <p><?php echo e($c->subtitle); ?></p>
                        </div>
                    </div>
                </a>
            </div>               
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <div class="row">
                <div class="col">
                    <br><br>
                    <h1 class="text-center"><?php echo e(__('msg.no_subcategory_found')); ?></h1>
                </div>
            </div>
            <?php endif; ?>
        </nav>
        <?php if(isset($data['list']) && isset($data['list']) && is_array($data['list']) && count($data['list'])): ?>
        
                <div id="products" class="row view-group">
                    <?php $__currentLoopData = $data['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(isset($p->variants) && count($p->variants)): ?>
                    <div class="item1 col-sm-12 col-lg-6 col-md-4">
                        <div class="add-to-fav">
                            
                        </div>
                        <a href="<?php echo e(route('product-single', $p->slug ?? '-')); ?>">
                            <div class="thumbnail card-sm">
                                <a href="<?php echo e(route('product-single', $p->slug ?? '-')); ?>">
                                    <div class="img-event">
                                        <img class="group list-group-image img-fluid" src="<?php echo e($p->image); ?>" alt="<?php echo e($p->image); ?>">
                                    </div>
                                </a>
                                <div class="caption card-body">
                                    <div class="text-wrap text-center">
                                        <a href="<?php echo e(route('product-single', $p->slug ?? '-')); ?>" class="title font-weight-bold product-name"><?php echo e($p->name); ?></a>

                                        <span class="text-muted description1"><?php if(strlen(strip_tags($p->description)) > 18): ?> <?php echo substr(strip_tags($p->description), 0,18) ."..."; ?> <?php else: ?> <?php echo substr(strip_tags($p->description), 0,18); ?> <?php endif; ?></span>
                                        <div class="price mt-1 ">
                                            <strong id="price_<?php echo e($p->id); ?>"><?php echo print_price($p); ?></strong> &nbsp; <s class="text-muted" id="mrp_<?php echo e($p->id); ?>"><?php echo print_mrp($p); ?></s>
                                            <small class="text-success" id="savings_<?php echo e($p->id); ?>"> <?php echo e(get_savings_varients($p->variants[0])); ?> </small>
                                        </div>
                                    </div>
                                    <?php if(count(getInStockVarients($p))): ?>
                                    <span class="inner text-center d-block m-auto product_data">
                                        
                                        <form action='<?php echo e(route('cart-add-single-varient')); ?>' method="POST"> 
                                            <input type="hidden" class="id" name="id" value="<?php echo e($p->id); ?>" data-id="<?php echo e($p->id); ?>">
                                            <input type="hidden" name="qty" value="1" class="qty" data-qty="1">

                                                <?php $__currentLoopData = getInStockVarients($p); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <input type="hidden" class="varient" data-varient="<?php echo e($v->id); ?>" name="varient" value="<?php echo e($v->id); ?>"  data-price='<?php echo e(get_price(get_price_varients($v))); ?>' data-mrp='<?php echo e(get_price(get_mrp_varients($v))); ?>' data-savings='<?php echo e(get_savings_varients($v)); ?>' checked>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <input type="hidden" class="slug" value="<?php echo e($p->slug); ?>" data-slug="<?php echo e($p->slug); ?>">
                                            <?php if(count(getInStockVarients($p))>1): ?>
                                                <button type="submit"  class="btn cart-1 fa fa-shopping-cart productmodal"><span>&nbsp;&nbsp;<?php echo e(__('msg.add_to_cart')); ?></span></button>
                                            <?php else: ?>
                                                <button type="submit"  class="btn cart-1 fa fa-shopping-cart addtocart_single" data-id="<?php echo e($p->id); ?>" data-varient="<?php echo e($v->id); ?>" data-qty="1"><span>&nbsp;&nbsp;<?php echo e(__('msg.add_to_cart')); ?></span></button>
                                            <?php endif; ?>

                                        
                                    </span>
                                    <?php else: ?>
                                    <span class="sold-out"><?php echo e(__('msg.sold_out')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <div class="col"><br></div>
                </div>
                <div class="row">
                    <!-- <div class="col">
                         <?php if(isset($data['last']) && $data['last'] != ""): ?>
                             <a href="<?php echo e($data['last']); ?>" class="btn btn-primary pull-left text-white"><em class="fa fa-arrow-left"></em> <?php echo e(__('msg.previous')); ?></a>
                         <?php endif; ?>
                     </div>
                     <div class="col text-right">
                         <?php if(isset($data['next']) && $data['next'] != ""): ?>
                             <a href="<?php echo e($data['next']); ?>" class="btn btn-primary pull-right text-white"><?php echo e(__('msg.next')); ?> <em class="fa fa-arrow-right"></em></a>
                         <?php endif; ?>
                     </div>-->
                     

                    <?php else: ?>
                    <div class="row">
                        <div class="col">
                            <br><br>
                            <h1 class="text-center"><?php echo e(__('msg.no_product_found')); ?></h1>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
    </div>
</section><?php /**PATH C:\xampp\htdocs\ecarttest4\resources\views/themes/ekart/sub-categories.blade.php ENDPATH**/ ?>