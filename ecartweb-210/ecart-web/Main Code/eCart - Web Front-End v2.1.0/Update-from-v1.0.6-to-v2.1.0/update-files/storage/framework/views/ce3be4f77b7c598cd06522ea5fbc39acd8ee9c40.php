<?php if(isset($data['breadcrumb'])): ?>
    <section class="page_title corner-title overflow-visible">

            <ol class="breadcrumb">
                <li class=" item-1"></li>
                <?php $__currentLoopData = $data['breadcrumb']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="breadcrumb-item"><a href="<?php echo e($b['link']); ?>"><?php echo strtoupper($b['title']); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>

    </section>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ecarttest4\resources\views/themes/ekart/parts/breadcrumb.blade.php ENDPATH**/ ?>