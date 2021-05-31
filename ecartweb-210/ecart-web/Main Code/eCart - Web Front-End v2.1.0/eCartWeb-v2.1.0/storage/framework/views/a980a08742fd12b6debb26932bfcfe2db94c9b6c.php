<!--shop page -->
<section class="section-content padding-bottom mt-5">
    <a href="#" id="scroll"><span></span></a>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-4 col-xl-3 col-12 filter mb-3">
                <div class="card">
                    <div class="pt-4">
                        <legend class="mb-1 p-0 title-sec"><?php echo e(__('msg.filter_by')); ?></legend>
                        <hr class="line mb-0 pb-0">
                    </div>
                    <form action='#' method="GET" id='filter'>
                        <input type="hidden" name="s" value="<?php echo e(isset($_GET['s']) ? trim($_GET['s']) : ''); ?>">
                        <input type="hidden" name="section" value="<?php echo e(isset($_GET['section']) ? trim($_GET['section']) : ''); ?>">
                        <input type="hidden" name="category" value="<?php echo e(isset($_GET['category']) ? trim($_GET['category']) : ''); ?>">
                        <input type="hidden" name="sub-category" value="<?php echo e(isset($_GET['sub-category']) ? trim($_GET['sub-category']) : ''); ?>">
                        <input type="hidden" name="sort" value="<?php echo e(isset($_GET['sort']) ? trim($_GET['sort']) : ''); ?>">
                        <input type="hidden" name="discount_filter" value="<?php echo e(isset($_GET['discount_filter']) ? trim($_GET['discount_filter']) : ''); ?>">
						<input type="hidden" name="out_of_stock" value="<?php echo e(isset($_GET['out_of_stock']) ? trim($_GET['out_of_stock']) : ''); ?>">
                        <div>
                            
                            <br>
                            <h5 class="mb-3 name title-sec"><?php echo e(__('msg.price')); ?></h5>
                            <div class="row">
                                <div class="col">
                                    <div id="slider-range" data-min="<?php echo e(intval($data['total_min_price'])); ?>" data-max="<?php echo e(intval($data['total_max_price'])); ?>" data-selected-min="<?php echo e($data['total_min_price']); ?>" data-selected-max="<?php echo e($data['total_max_price']); ?>"></div>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="number" name="min_price" value="<?php echo e($data['total_min_price']); ?>" class="form-control">
                                </div>
                                <div class="col">
                                    <input type="number" name="max_price" value="<?php echo e($data['total_max_price']); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <br>
                                    <button type="submit" name="submit" class="btn btn-primary btn-block"><?php echo e(__('msg.filter')); ?></button>
                                </div>
                            </div>
                        </div>
                        <br>
                    </form>
                    <br>
                    <?php if(isset($data['categories']) && is_array($data['categories']) && count($data['categories'])): ?>
                    <div>
                        <h5 class="mb-3 name"><?php echo e(__('msg.category')); ?></h5>
                        <div class="text ml-4 ">
                            <?php $__currentLoopData = $data['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(isset($c->name) && trim($c->name) != ""): ?>
                                    <div class="custom-control custom-checkbox pb-2">
                                        <input type="checkbox" class="custom-control-input cats" id="cat-<?php echo e($c->id); ?>" value="<?php echo e($c->slug); ?>" <?php echo e((isset($data['selectedCategory']) && is_array($data['selectedCategory']) && in_array($c->slug, $data['selectedCategory'])) ? 'checked' : ''); ?>>
                                        <label class="custom-control-label" for="cat-<?php echo e($c->id); ?>"><?php echo e($c->name); ?></label>
                                        <?php if(isset($data['selectedCategory']) && is_array($data['selectedCategory'])  ): ?>
                        <?php $__currentLoopData = $data['selectedCategory']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(isset(Cache::get('categories',[])[$cat]) && isset(Cache::get('categories',[])[$cat]->childs) && $c->name == Cache::get('categories',[])[$cat]->name): ?>
                                <br>
                                <div>
                                    <!--<h5 class="mb-3 name"><?php echo e(Cache::get('categories',[])[$cat]->name); ?></h5>-->
                                    <div class="text ml-4">
                                        <?php $__currentLoopData = Cache::get('categories',[])[$cat]->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="custom-control custom-checkbox pb-2">
                                                <input type="checkbox" class="custom-control-input subs" id="sub-<?php echo e($c->id); ?>" value="<?php echo e($c->slug); ?>" <?php echo e((isset($data['selectedSubCategory']) && is_array($data['selectedSubCategory']) && in_array($c->slug, $data['selectedSubCategory'])) ? 'checked' : ''); ?>>
                                                <label class="custom-control-label" for="sub-<?php echo e($c->id); ?>"><?php echo e($c->name); ?></label>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <br>
                    <div>
                        <h5 class="mb-3 name title-sec">Discount</h5>
                        <div class="text ml-4 discount">
                            <div class="custom-control custom-radio pb-2">
                                <input type="radio" name="discount" class="custom-control-input discount_filter" id="discount-10" value="10" <?php echo e((isset($_GET['discount_filter']) && $_GET['discount_filter'] == '10') ? 'checked' : ''); ?> >
                                <label class="custom-control-label" for="discount-10">10% Off or more</label>
                            </div>
                            <div class="custom-control custom-radio pb-2">
                                <input type="radio" name="discount" class="custom-control-input discount_filter" id="discount-25" value="25" <?php echo e((isset($_GET['discount_filter']) && $_GET['discount_filter'] == '25') ? 'checked' : ''); ?> >
                                <label class="custom-control-label" for="discount-25">25% Off or more</label>
                            </div>
                            <div class="custom-control custom-radio pb-2">
                                <input type="radio" name="discount" class="custom-control-input discount_filter" id="discount-35" value="35" <?php echo e((isset($_GET['discount_filter']) && $_GET['discount_filter'] == '35') ? 'checked' : ''); ?> >
                                <label class="custom-control-label" for="discount-35">35% Off or more</label>
                            </div>
                            <div class="custom-control custom-radio pb-2">
                                <input type="radio" name="discount" class="custom-control-input discount_filter" id="discount-50" value="50" <?php echo e((isset($_GET['discount_filter']) && $_GET['discount_filter'] == '50') ? 'checked' : ''); ?> >
                                <label class="custom-control-label" for="discount-50">50% Off or more</label>
                            </div>
                        </div>
                    </div>
                     
                    <br>
                   
                    <div>
                        <h5 class="mb-3 name title-sec">Avaibility</h5>
                        <div class="text ml-4 out_of_stock">
                            <div class="custom-control custom-radio pb-2">
                                <input type="radio" name="out_of_stock" class="custom-control-input out_of_stock" id="out_of_stock" value="1" <?php echo e((isset($_GET['out_of_stock']) && $_GET['out_of_stock'] == '1') ? 'checked' : ''); ?> >
                                <label class="custom-control-label" for="out_of_stock">Out of Stock</label>
                            </div>
                           
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <div class="col-md-8 col-xl-9 col-lg-7 col-12 shopdetails">
                <nav class="navbar navbar-md navbar-light bg-white row gridviewdiv">
                    <div class="col-md-6 col-xs-3 col-6">
                        <div class="row">
                            <div id="list">
                                <em class= "fa fa-list fa-lg" data-view ="list-view"></em>
                            </div>
                            <div id="grid">
                                <em class="selected fa fa-th fa-lg" data-view ="grid-view"></em>
                            </div>
                            <?php
                                $number = 0;
                            ?>
                            <?php if(isset($data['list']) && isset($data['list']['data']) && is_array($data['list']['data']) && count($data['list']['data'])): ?>
                                <?php $__currentLoopData = $data['list']['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $number++ ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <div class="letter">
                                <small> <?php echo e($number.' Items out of '); ?><?php echo e((isset($data['total']) && intval($data['total'])) ?  $data['total'].' Items' : ''); ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="gridviewselect">
                            <div class="row">
                                <div class="select"> <?php echo e(__('msg.sort_by')); ?>:  </div>
                                <div class="select1">
                                    <select class="form-control innerselect1" id="sort">
                                        <option value=""> <?php echo e(__('msg.relevent')); ?> </option>
                                        <option value="new" <?php echo e((isset($_GET['sort']) && $_GET['sort'] == 'new') ? 'selected' : ''); ?>><?php echo e(__('msg.new')); ?></option>
                                        <option value="old" <?php echo e((isset($_GET['sort']) && $_GET['sort'] == 'old') ? 'selected' : ''); ?>><?php echo e(__('msg.old')); ?></option>
                                        <option value="low" <?php echo e((isset($_GET['sort']) && $_GET['sort'] == 'low') ? 'selected' : ''); ?>><?php echo e(__('msg.low_to_high')); ?></option>
                                        <option value="high" <?php echo e((isset($_GET['sort']) && $_GET['sort'] == 'high') ? 'selected' : ''); ?>><?php echo e(__('msg.high_to_low')); ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <?php if(isset($data['list']) && isset($data['list']['data']) && is_array($data['list']['data']) && count($data['list']['data'])): ?>
                <div id="products" class="row view-group">
                    <?php $__currentLoopData = $data['list']['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(count($p->variants)): ?>
                    <div class="item1 col-sm-12 col-lg-6 col-md-4">
                        <div class="add-to-fav">
                            <button type="button" class="btn <?php echo e((isset($p->is_favorite) && intval($p->is_favorite)) ? 'saved' : 'save'); ?>" data-id='<?php echo e($p->id); ?>' />
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
                                          </form> 
                                        
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
                    
                    <div class="col text-right shoppagination">
                        <?php
                        $number_of_pages = $data['number_of_pages'] + 1;
                        $currentpage = '0';
                        $currentpage = request()->input('page');
                        ?>
                        <?php for($page = max(1, $currentpage - 2); $page <= min($currentpage + 4, $number_of_pages); $page++): ?>

                        <?php $pageprevious = $page-1;
                        ?>
                        <?php if(request()->query('category') OR request()->query('min_price')): ?>
                        <a href="<?php echo e(Request::fullUrl()); ?>&page=<?php echo e($pageprevious); ?>" <?php if($currentpage == $pageprevious ): ?> class="active" <?php else: ?> class="btn btn-primary pull-right text-white" <?php endif; ?>> <?php echo e($page); ?> </a>
                        <?php else: ?>
                        <a href="shop?page=<?php echo e($pageprevious); ?>" <?php if($currentpage == $pageprevious ): ?> class="active" <?php else: ?> class="btn btn-primary pull-right text-white" <?php endif; ?>><?php echo e($page); ?>  </a>
                        <?php endif; ?>
                        <?php endfor; ?>

                    </div>

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
        </div>
    </div>
</section>
<!-- End shop page --><?php /**PATH /home3/wrteamin/public_html/webekart/eCart_02/resources/views/themes/eCart_01/shop.blade.php ENDPATH**/ ?>