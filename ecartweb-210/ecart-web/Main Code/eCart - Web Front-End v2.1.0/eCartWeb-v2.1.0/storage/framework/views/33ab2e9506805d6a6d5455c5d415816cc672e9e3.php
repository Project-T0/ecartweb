<section class="footerfix section-content mt-5">
    <a href="#" id="scroll"><span></span></a>
    <div class="container padding-bottom">
        <div class="card p-3">
            <h3><?php echo e($data['title']); ?></h3>
            <p>
                <?php echo $data['content']; ?>

            </p>
        </div>
        <br><br>
        <a href="javascript: history.back()" class="btn btn-default"> « <?php echo e(__('msg.go_back')); ?></a>   
    </div>
</section>
<?php /**PATH /home3/wrteamin/public_html/webekart/eCart_02/resources/views/themes/eCart_01/page.blade.php ENDPATH**/ ?>