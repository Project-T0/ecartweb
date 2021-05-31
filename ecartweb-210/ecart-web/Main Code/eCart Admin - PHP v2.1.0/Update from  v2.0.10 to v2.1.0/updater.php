<?php
session_start();
error_reporting(true);
$latest_version = "v2.1.0";
/*
*	Update script for eCart PHP Admin Panel from v2.0.8.2 to v2.0.9
*	All Right reserved to WRTeam.in
*	
*/
// sleep(5);
// include "convert-latin1-to-utf8.php";
if (!isset($_SESSION["count"]) && $_SESSION["count"] != "applied") {
    include('../includes/crud.php');
    $db = new Database();
    $db->connect();

    /* adding columns and altering fields in database table */

    $db->sql("SELECT * FROM `updates` where `version`='$latest_version' ");
    $res = $db->getResult();
    if (empty($res)) {
        $db->sql("INSERT INTO `updates` (`version`) VALUES ('$latest_version')");
    }

    $db->sql("CREATE TABLE `blogs` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `title` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL , `image` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL , `description` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL , `status` TINYINT(2) NULL DEFAULT '1' , `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
    $db->sql("CREATE TABLE `product_ads` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `ad1` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL , `ad2` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL , `ad3` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL , `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;");

    $db->sql("ALTER TABLE `slider` ADD `image2` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL AFTER `image`;");

    $db->sql("CREATE TABLE `blog_categories` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` TEXT NULL DEFAULT NULL , `image` TEXT NULL DEFAULT NULL , `status` INT(2) NOT NULL DEFAULT '1' , `date_added` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;");

    $db->sql("ALTER TABLE `blog_categories` CHANGE `name` `name` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;");

    $db->sql("ALTER TABLE `blog_categories` CHANGE `image` `image` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;");

    $db->sql("ALTER TABLE `blogs` ADD `category_id` INT(11) NULL DEFAULT NULL AFTER `id`;");

    $db->sql("ALTER TABLE `blogs` ADD `slug` VARCHAR(120) CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `title`;");

    $db->sql("CREATE TABLE `product_reviews` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `product_id` INT(11) NOT NULL , `user_id` INT(11) NOT NULL , `rate` DECIMAL(2,2) NOT NULL , `review` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `status` INT(2) NOT NULL DEFAULT '1' , `date_added` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;");

    $db->sql("ALTER TABLE `product_reviews` CHANGE `rate` `rate` INT NOT NULL;");

    $db->sql("ALTER TABLE `products` ADD `ratings` FLOAT(3,2) NOT NULL DEFAULT '0' AFTER `status`;");

    $db->sql("ALTER TABLE `products` CHANGE `ratings` `ratings` FLOAT(2,1) NOT NULL DEFAULT '0.0';");

    $db->sql("ALTER TABLE `products` ADD `number_of_ratings` INT NULL DEFAULT '0' AFTER `ratings`;");

    $db->sql("CREATE TABLE `flash_sales` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `title` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `short_description` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `status` TINYINT NOT NULL DEFAULT '1' , `date_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`)) ENGINE = InnoDB;");

    $db->sql("CREATE TABLE `flash_sales_products` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `flash_sales_id` INT(11) NOT NULL , `product_id` INT(11) NOT NULL , `product_variant_id` INT(11) NOT NULL , `price` FLOAT NOT NULL , `discounted_price` FLOAT NOT NULL , `start_date` DATETIME NOT NULL , `end_date` DATETIME NOT NULL , `date_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;");

    $db->sql("ALTER TABLE `flash_sales_products` ADD `status` TINYINT(2) NOT NULL DEFAULT '1' AFTER `date_created`;");

    $db->sql("ALTER TABLE `products` ADD `shipping_delivery` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `description`;");

    $db->sql("ALTER TABLE `flash_sales` ADD `slug` VARCHAR(120) NOT NULL AFTER `title`;");

    $db->sql("ALTER TABLE `products` ADD `size_chart` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `other_images`;");

    $db->sql("ALTER TABLE `slider` ADD `title` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL AFTER `type_id`, ADD `short_description` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL AFTER `title`;");

    $db->sql("ALTER TABLE `product_reviews` CHANGE `date_added` `date_added` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;");

    $db->sql("ALTER TABLE `complaint_comments` ADD `type` TEXT NOT NULL AFTER `complaint_id`;");


    /* admin-app starts here */
    copy('update-files/admin-app/api/api-v1-docs.txt', '../admin-app/api/api-v1-docs.txt');
    copy('update-files/admin-app/api/api-v1.php', '../admin-app/api/api-v1.php');
    copy('update-files/admin-app/api/api-v2.php', '../admin-app/api/api-v2.php');
    copy('update-files/admin-app/api/api-v2-docs.txt', '../admin-app/api/api-v2-docs.txt');
    copy('update-files/admin-app/api/verify-token.php', '../admin-app/api/verify-token.php');
    /* admin-app ends here */

    /* api-firebase starts here */
    copy('update-files/api-firebase/ajax-data.php', '../api-firebase/ajax-data.php');
    copy('update-files/api-firebase/api-docs.txt', '../api-firebase/api-docs.txt');
    copy('update-files/api-firebase/cart.php', '../api-firebase/cart.php');
    copy('update-files/api-firebase/complaint.php', '../api-firebase/complaint.php');
    copy('update-files/api-firebase/create-razorpay-order.php', '../api-firebase/create-razorpay-order.php');
    copy('update-files/api-firebase/favorites.php', '../api-firebase/favorites.php');
    copy('update-files/api-firebase/get-all-data.php', '../api-firebase/get-all-data.php');
    copy('update-files/api-firebase/get-all-products.php', '../api-firebase/get-all-products.php');
    copy('update-files/api-firebase/get-user-transactions.php', '../api-firebase/get-user-transactions.php');
    copy('update-files/api-firebase/get-areas-by-city-id.php', '../api-firebase/get-areas-by-city-id.php');
    copy('update-files/api-firebase/get-bootstrap-table-data.php', '../api-firebase/get-bootstrap-table-data.php');
    copy('update-files/api-firebase/get-bootstrap-web-category-table-data.php', '../api-firebase/get-bootstrap-web-category-table-data.php');
    copy('update-files/api-firebase/get-categories.php', '../api-firebase/get-categories.php');
    copy('update-files/api-firebase/get-cities.php', '../api-firebase/get-cities.php');
    copy('update-files/api-firebase/get-faqs.php', '../api-firebase/get-faqs.php');
    copy('update-files/api-firebase/get-product-by-id.php', '../api-firebase/get-product-by-id.php');
    copy('update-files/api-firebase/get-products-by-category-id.php', '../api-firebase/get-products-by-category-id.php');
    copy('update-files/api-firebase/get-products-by-subcategory-id.php', '../api-firebase/get-products-by-subcategory-id.php');
    copy('update-files/api-firebase/get-products-offline.php', '../api-firebase/get-products-offline.php');
    copy('update-files/api-firebase/get-similar-products.php', '../api-firebase/get-similar-products.php');
    copy('update-files/api-firebase/get-social-media.php', '../api-firebase/get-social-media.php');
    copy('update-files/api-firebase/get-subcategories-by-category-id.php', '../api-firebase/get-subcategories-by-category-id.php');
    copy('update-files/api-firebase/get-user-data.php', '../api-firebase/get-user-data.php');
    copy('update-files/api-firebase/get-user-transactions.php', '../api-firebase/get-user-transactions.php');
    copy('update-files/api-firebase/get-variants-offline.php', '../api-firebase/get-variants-offline.php');
    copy('update-files/api-firebase/login.php', '../api-firebase/login.php');
    copy('update-files/api-firebase/offer-images.php', '../api-firebase/offer-images.php');
    copy('update-files/api-firebase/order-process.php', '../api-firebase/order-process.php');
    copy('update-files/api-firebase/payment-request.php', '../api-firebase/payment-request.php');
    copy('update-files/api-firebase/products-search.php', '../api-firebase/products-search.php');
    copy('update-files/api-firebase/store-fcm-id.php', '../api-firebase/store-fcm-id.php');
    copy('update-files/api-firebase/remove-fcm-id.php', '../api-firebase/remove-fcm-id.php');
    copy('update-files/api-firebase/sections.php', '../api-firebase/sections.php');
    copy('update-files/api-firebase/send-email.php', '../api-firebase/send-email.php');
    copy('update-files/api-firebase/send-sms.php', '../api-firebase/send-sms.php');
    copy('update-files/api-firebase/settings.php', '../api-firebase/settings.php');
    copy('update-files/api-firebase/slider-images.php', '../api-firebase/slider-images.php');
    copy('update-files/api-firebase/user-addresses.php', '../api-firebase/user-addresses.php');
    copy('update-files/api-firebase/user-registration.php', '../api-firebase/user-registration.php');
    copy('update-files/api-firebase/validate-promo-code.php', '../api-firebase/validate-promo-code.php');
    copy('update-files/api-firebase/verify-token.php', '../api-firebase/verify-token.php');
    copy('update-files/api-firebase/withdrawal-requests.php', '../api-firebase/withdrawal-requests.php');
    copy('update-files/api-firebase/newsletter.php', '../api-firebase/newsletter.php');
    copy('update-files/api-firebase/faq.php', '../api-firebase/faq.php');
    copy('update-files/api-firebase/shop.php', '../api-firebase/shop.php');
    copy('update-files/api-firebase/flash-sales.php', '../api-firebase/flash-sales.php');
    copy('update-files/api-firebase/get-blogs.php', '../api-firebase/get-blogs.php');
    copy('update-files/api-firebase/get-product-advt.php', '../api-firebase/get-product-advt.php');
    /* api-firebase ends here */

    /* api-firebase/email-templates starts here */
    copy('update-files/api-firebase/email-templates/order-receipt.php', '../api-firebase/email-templates/order-receipt.php');
    /* api-firebase/email-templates ends here */

    /* api-firebase/razorpay starts here */
    copy('update-files/api-firebase/razorpay/Razorpay.php', '../api-firebase/razorpay/Razorpay.php');
    /* api-firebase/razorpay ends here */


    /* delivery boy files starts */
    copy('update-files/delivery-boy/api/api-v1.php', '../delivery-boy/api/api-v1.php');
    copy('update-files/delivery-boy/api/api-v1-docs.txt', '../delivery-boy/api/api-v1-docs.txt');
    copy('update-files/delivery-boy/api/verify-token.php', '../delivery-boy/api/verify-token.php');
    copy('update-files/delivery-boy/api/send-email.php', '../delivery-boy/api/send-email.php');

    copy('update-files/delivery-boy/db-operation.php', '../delivery-boy/db-operation.php');
    copy('update-files/delivery-boy/delete-order.php', '../delivery-boy/delete-order.php');
    copy('update-files/delivery-boy/delivery-boy-profile.php', '../delivery-boy/delivery-boy-profile.php');
    copy('update-files/delivery-boy/footer.php', '../delivery-boy/footer.php');
    copy('update-files/delivery-boy/fund-transfers.php', '../delivery-boy/fund-transfers.php');
    copy('update-files/delivery-boy/get-bootstrap-table-data.php', '../delivery-boy/get-bootstrap-table-data.php');
    copy('update-files/delivery-boy/header.php', '../delivery-boy/header.php');
    copy('update-files/delivery-boy/home.php', '../delivery-boy/home.php');
    copy('update-files/delivery-boy/index.php', '../delivery-boy/index.php');
    copy('update-files/delivery-boy/invoice.php', '../delivery-boy/invoice.php');
    copy('update-files/delivery-boy/login-form.php', '../delivery-boy/login-form.php');
    copy('update-files/delivery-boy/logout.php', '../delivery-boy/logout.php');
    copy('update-files/delivery-boy/order-detail.php', '../delivery-boy/order-detail.php');
    copy('update-files/delivery-boy/orders.php', '../delivery-boy/orders.php');

    copy('update-files/delivery-boy/public/confirm-delete-order.php', '../delivery-boy/public/confirm-delete-order.php');
    copy('update-files/delivery-boy/public/fund-transfer-table.php', '../delivery-boy/public/fund-transfer-table.php');
    copy('update-files/delivery-boy/public/invoice-print.php', '../delivery-boy/public/invoice-print.php');
    copy('update-files/delivery-boy/public/orders-data.php', '../delivery-boy/public/orders-data.php');
    copy('update-files/delivery-boy/public/orders-table.php', '../delivery-boy/public/orders-table.php');

    copy('update-files/delivery-boy-play-store-privacy-policy.php', '../delivery-boy-play-store-privacy-policy.php');
    copy('update-files/delivery-boy-play-store-terms-conditions.php', '../delivery-boy-play-store-terms-conditions.php');
    copy('update-files/delivery-boy-privacy-policy.php', '../delivery-boy-privacy-policy.php');
    /* delivery boy files ends */

    /* dist files start */
    copy('update-files/dist/js/covert.js', '../dist/js/covert.js');
    copy('update-files/dist/css/AdminLTE.min.css', '../dist/css/AdminLTE.min.css');
    /* dist files end */

    /* includes files start */
    copy('update-files/includes/custom-functions.php', '../includes/custom-functions.php');
    copy('update-files/includes/firebase.php', '../includes/firebase.php');
    copy('update-files/includes/functions.php', '../includes/functions.php');
    copy('update-files/includes/push.php', '../includes/push.php');
    copy('update-files/includes/variables.php', '../includes/variables.php');
    /* includes files end */

    /* library starts here */
    copy('update-files/library/class.phpmailer.php', '../library/class.phpmailer.php');
    copy('update-files/library/class.smtp.php', '../library/class.smtp.php');
    copy('update-files/library/jwt.php', '../library/jwt.php');
    copy('update-files/library/products.csv', '../library/products.csv');
    copy('update-files/library/products.txt', '../library/products.txt');
    copy('update-files/library/update-products.csv', '../library/update-products.csv');
    copy('update-files/library/update-products.txt', '../library/update-products.txt');
    copy('update-files/library/update-variants.csv', '../library/update-variants.csv');
    copy('update-files/library/update-variants.txt', '../library/update-variants.txt');
    copy('update-files/library/variants.csv', '../library/variants.csv');
    copy('update-files/library/variants.txt', '../library/variants.txt');
    /* library ends here */

    /* midtrans starts */
    copy('update-files/midtrans/create-payment.php', '../midtrans/create-payment.php');
    copy('update-files/midtrans/midtrans.php', '../midtrans/midtrans.php');
    copy('update-files/midtrans/notification-handler.php', '../midtrans/notification-handler.php');
    copy('update-files/midtrans/payment-process.php', '../midtrans/payment-process.php');
    /* midtrans ends */

    /* paypal starts */
    copy('update-files/paypal/create-payment.php', '../paypal/create-payment.php');
    copy('update-files/paypal/data.txt', '../paypal/data.txt');
    copy('update-files/paypal/ipn.php', '../paypal/ipn.php');
    copy('update-files/paypal/payment_status.php', '../paypal/payment_status.php');
    /* paypal end */


    /* stripe starts */
    copy('update-files/stripe/create-payment.php', '../stripe/create-payment.php');
    copy('update-files/stripe/index.php', '../stripe/index.php');
    copy('update-files/stripe/payment-process.php', '../stripe/payment-process.php');
    copy('update-files/stripe/script.js', '../stripe/script.js');
    copy('update-files/stripe/stripe.php', '../stripe/stripe.php');
    copy('update-files/stripe/webhook.php', '../stripe/webhook.php');
    /* stripe end */

    /* public starts */
    copy('update-files/public/add-area-form.php', '../public/add-area-form.php');
    copy('update-files/public/add-blog-category-form.php', '../public/add-blog-category-form.php');
    copy('update-files/public/add-blog-form.php', '../public/add-blog-form.php');
    copy('update-files/public/add-category-form.php', '../public/add-category-form.php');
    copy('update-files/public/add-city-form.php', '../public/add-city-form.php');
    copy('update-files/public/add-image-form.php', '../public/add-image-form.php');
    copy('update-files/public/add-product-advt-form.php', '../public/add-product-advt-form.php');
    copy('update-files/public/add-product-form.php', '../public/add-product-form.php');
    copy('update-files/public/add-subcategory-form.php', '../public/add-subcategory-form.php');
    copy('update-files/public/add-tax-form.php', '../public/add-tax-form.php');
    copy('update-files/public/add-unit-form.php', '../public/add-unit-form.php');
    copy('update-files/public/blog-category-table.php', '../public/blog-category-table.php');
    copy('update-files/public/blog-table.php', '../public/blog-table.php');
    copy('update-files/public/area-table.php', '../public/area-table.php');
    copy('update-files/public/bulk-update-form.php', '../public/bulk-update-form.php');
    copy('update-files/public/bulk-upload-form.php', '../public/bulk-upload-form.php');
    copy('update-files/public/category-table.php', '../public/category-table.php');
    copy('update-files/public/city-table.php', '../public/city-table.php');
    copy('update-files/public/confirm-delete-area.php', '../public/confirm-delete-area.php');
    copy('update-files/public/confirm-delete-blog.php', '../public/confirm-delete-blog.php');
    copy('update-files/public/confirm-delete-blog-category.php', '../public/confirm-delete-blog-category.php');
    copy('update-files/public/confirm-delete-category.php', '../public/confirm-delete-category.php');
    copy('update-files/public/confirm-delete-city.php', '../public/confirm-delete-city.php');
    copy('update-files/public/confirm-delete-login-user.php', '../public/confirm-delete-login-user.php');
    copy('update-files/public/confirm-delete-order.php', '../public/confirm-delete-order.php');
    copy('update-files/public/confirm-delete-product.php', '../public/confirm-delete-product.php');
    copy('update-files/public/confirm-delete-product-advt.php', '../public/confirm-delete-product-advt.php');
    copy('update-files/public/confirm-delete-query.php', '../public/confirm-delete-query.php');
    copy('update-files/public/confirm-delete-subcategory.php', '../public/confirm-delete-subcategory.php');
    copy('update-files/public/confirm-delete-tax.php', '../public/confirm-delete-tax.php');
    copy('update-files/public/customer-report-table.php', '../public/customer-report-table.php');
    copy('update-files/public/customers-table.php', '../public/customers-table.php');
    copy('update-files/public/db-operation.php', '../public/db-operation.php');
    copy('update-files/public/delete-other-images.php', '../public/delete-other-images.php');
    copy('update-files/public/delievery-charge-form.php', '../public/delievery-charge-form.php');
    copy('update-files/public/delivery-boy-table.php', '../public/delivery-boy-table.php');
    copy('update-files/public/edit-area-form.php', '../public/edit-area-form.php');
    copy('update-files/public/edit-blog-category-form.php', '../public/edit-blog-category-form.php');
    copy('update-files/public/edit-blog-form.php', '../public/edit-blog-form.php');
    copy('update-files/public/edit-category-form.php', '../public/edit-category-form.php');
    copy('update-files/public/edit-city-form.php', '../public/edit-city-form.php');
    copy('update-files/public/edit-image-form.php', '../public/edit-image-form.php');
    copy('update-files/public/edit-product-advt-form.php', '../public/edit-product-advt-form.php');
    copy('update-files/public/edit-product-form.php', '../public/edit-product-form.php');
    copy('update-files/public/edit-query-form.php', '../public/edit-query-form.php');
    copy('update-files/public/edit-slider-form.php', '../public/edit-slider-form.php');
    copy('update-files/public/edit-subcategory-form.php', '../public/edit-subcategory-form.php');
    copy('update-files/public/edit-tax-form.php', '../public/edit-tax-form.php');
    copy('update-files/public/edit-unit-form.php', '../public/edit-unit-form.php');
    copy('update-files/public/email-send.php', '../public/email-send.php');
    copy('update-files/public/front-end-setting-form.php', '../public/front-end-setting-form.php');
    copy('update-files/public/fund-transfer-table.php', '../public/fund-transfer-table.php');
    copy('update-files/public/get-list-web-category.php', '../public/get-list-web-category.php');
    copy('update-files/public/invoice-print.php', '../public/invoice-print.php');
    copy('update-files/public/invoice-table.php', '../public/invoice-table.php');
    copy('update-files/public/login-form.php', '../public/login-form.php');
    copy('update-files/public/low-stock-products-table.php', '../public/low-stock-products-table.php');
    copy('update-files/public/newsletter-table.php', '../public/newsletter-table.php');
    copy('update-files/public/manage-customer-wallet-table.php', '../public/manage-customer-wallet-table.php');
    copy('update-files/public/orders-data.php', '../public/orders-data.php');
    copy('update-files/public/orders-table.php', '../public/orders-table.php');
    copy('update-files/public/payment-requests-table.php', '../public/payment-requests-table.php');
    copy('update-files/public/product-advt-table.php', '../public/product-advt-table.php');
    copy('update-files/public/privacypolicy.php', '../public/privacypolicy.php');
    copy('update-files/public/product-data.php', '../public/product-data.php');
    copy('update-files/public/product-sales-report-table.php', '../public/product-sales-report-table.php');
    copy('update-files/public/products-table.php', '../public/products-table.php');
    copy('update-files/public/products-taxes-table.php', '../public/products-taxes-table.php');
    copy('update-files/public/promo-code-table.php', '../public/promo-code-table.php');
    copy('update-files/public/purchase-code-form.php', '../public/purchase-code-form.php');
    copy('update-files/public/purchase-code-validator.php', '../public/purchase-code-validator.php');
    copy('update-files/public/reset-password.php', '../public/reset-password.php');
    copy('update-files/public/return-requests-table.php', '../public/return-requests-table.php');
    copy('update-files/public/sales-report-table.php', '../public/sales-report-table.php');
    copy('update-files/public/send-forgot-password-mail.php', '../public/send-forgot-password-mail.php');
    copy('update-files/public/send-message.php', '../public/send-message.php');
    copy('update-files/public/setting-form.php', '../public/setting-form.php');
    copy('update-files/public/social-media-table.php', '../public/social-media-table.php');
    copy('update-files/public/support-system-table.php', '../public/support-system-table.php');
    copy('update-files/public/support-view-data.php', '../public/support-view-data.php');
    copy('update-files/public/sold-out-products-table.php', '../public/sold-out-products-table.php');
    copy('update-files/public/subcategory-table.php', '../public/subcategory-table.php');
    copy('update-files/public/system-users-form.php', '../public/system-users-form.php');
    copy('update-files/public/time-slots-table.php', '../public/time-slots-table.php');
    copy('update-files/public/transaction-table.php', '../public/transaction-table.php');
    copy('update-files/public/units-table.php', '../public/units-table.php');
    copy('update-files/public/update-file.php', '../public/update-file.php');
    copy('update-files/public/wallet-transactions-table.php', '../public/wallet-transactions-table.php');
    copy('update-files/public/web-category.php', '../public/web-category.php');
    copy('update-files/public/web-header-form.php', '../public/web-header-form.php');
    copy('update-files/public/withdrawal-requests-table.php', '../public/withdrawal-requests-table.php');
    /* public end */

    /* rppt files start here */
    copy('update-files/about-us.php', '../about-us.php');
    copy('update-files/add-area.php', '../add-area.php');
    copy('update-files/add-blog.php', '../add-blog.php');
    copy('update-files/add-blog-category.php', '../add-blog-category.php');
    copy('update-files/add-category.php', '../add-category.php');
    copy('update-files/add-city.php', '../add-city.php');
    copy('update-files/add-delivery-boy.php', '../add-delivery-boy.php');
    copy('update-files/add-image.php', '../add-image.php');
    copy('update-files/add-media.php', '../add-media.php');
    copy('update-files/add-product.php', '../add-product.php');
    copy('update-files/add-product-advt.php', '../add-product-advt.php');
    copy('update-files/add-unit.php', '../add-unit.php');
    copy('update-files/api-key.php', '../api-key.php');
    copy('update-files/add-subcategory.php', '../add-subcategory.php');
    copy('update-files/add-tax.php', '../add-tax.php');
    copy('update-files/admin-profile.php', '../admin-profile.php');
    copy('update-files/api-docs.txt', '../api-docs.txt');
    copy('update-files/areas.php', '../areas.php');
    copy('update-files/bulk-update.php', '../bulk-update.php');
    copy('update-files/bulk-upload.php', '../bulk-upload.php');
    copy('update-files/blog-category.php', '../blog-category.php');
    copy('update-files/blogs.php', '../blogs.php');
    copy('update-files/categories.php', '../categories.php');
    copy('update-files/categories-order.php', '../categories-order.php');
    copy('update-files/city.php', '../city.php');
    copy('update-files/contact.php', '../contact.php');
    copy('update-files/contact-us.php', '../contact-us.php');
    copy('update-files/customer-report.php', '../customer-report.php');
    copy('update-files/customers.php', '../customers.php');
    copy('update-files/delete-area.php', '../delete-area.php');
    copy('update-files/delete-blog.php', '../delete-blog.php');
    copy('update-files/delete-blog-category.php', '../delete-blog-category.php');
    copy('update-files/delete-category.php', '../delete-category.php');
    copy('update-files/delete-city.php', '../delete-city.php');
    copy('update-files/delete-order.php', '../delete-order.php');
    copy('update-files/delete-product.php', '../delete-product.php');
    copy('update-files/delete-product-advt.php', '../delete-product-advt.php');
    copy('update-files/delete-query.php', '../delete-query.php');
    copy('update-files/delete-subcategory.php', '../delete-subcategory.php');
    copy('update-files/delete-tax.php', '../delete-tax.php');
    copy('update-files/delieverycharge.php', '../delieverycharge.php');
    copy('update-files/delivery-boy-play-store-privacy-policy.php', '../delivery-boy-play-store-privacy-policy.php');
    copy('update-files/delivery-boy-play-store-terms-conditions.php', '../delivery-boy-play-store-terms-conditions.php');
    copy('update-files/delivery-boy-privacy-policy.php', '../delivery-boy-privacy-policy.php');
    copy('update-files/delivery-boys.php', '../delivery-boys.php');
    copy('update-files/edit-area.php', '../edit-area.php');
    copy('update-files/edit-blog.php', '../edit-blog.php');
    copy('update-files/edit-blog-category.php', '../edit-blog-category.php');
    copy('update-files/edit-category.php', '../edit-category.php');
    copy('update-files/edit-city.php', '../edit-city.php');
    copy('update-files/edit-image.php', '../edit-image.php');
    copy('update-files/edit-product.php', '../edit-product.php');
    copy('update-files/edit-product-advt.php', '../edit-product-advt.php');
    copy('update-files/edit-query.php', '../edit-query.php');
    copy('update-files/edit-subcategory.php', '../edit-subcategory.php');
    copy('update-files/edit-slider.php', '../edit-slider.php');
    copy('update-files/edit-tax.php', '../edit-tax.php');
    copy('update-files/edit-unit.php', '../edit-unit.php');
    copy('update-files/email.php', '../email.php');
    copy('update-files/faq.php', '../faq.php');
    copy('update-files/flash-sales.php', '../flash-sales.php');
    copy('update-files/flash-sales-products.php', '../flash-sales-products.php');
    copy('update-files/footer.php', '../footer.php');
    copy('update-files/front-end-play-store-delivery-return-policy.php', '../front-end-play-store-delivery-return-policy.php');
    copy('update-files/front-end-play-store-refund-policy.php', '../front-end-play-store-refund-policy.php');
    copy('update-files/front-end-play-store-shipping-policy.php', '../front-end-play-store-shipping-policy.php');
    copy('update-files/front-end-policies.php', '../front-end-policies.php');
    copy('update-files/forgot-password.php', '../forgot-password.php');
    copy('update-files/front-end-settings.php', '../front-end-settings.php');
    copy('update-files/fund-transfers.php', '../fund-transfers.php');
    copy('update-files/header.php', '../header.php');
    copy('update-files/home.php', '../home.php');
    copy('update-files/index.php', '../index.php');
    copy('update-files/info.php', '../info.php');
    copy('update-files/invoice.php', '../invoice.php');
    copy('update-files/invoices.php', '../invoices.php');
    copy('update-files/loginusers.php', '../loginusers.php');
    copy('update-files/logout.php', '../logout.php');
    copy('update-files/low-stock-products.php', '../low-stock-products.php');
    copy('update-files/main-slider.php', '../main-slider.php');
    copy('update-files/manage-customer-wallet.php', '../manage-customer-wallet.php');
    copy('update-files/manager-app-play-store-privacy-policy.php', '../manager-app-play-store-privacy-policy.php');
    copy('update-files/manager-app-play-store-terms-conditions.php', '../manager-app-play-store-terms-conditions.php');
    copy('update-files/manager-app-privacy-policy.php', '../manager-app-privacy-policy.php');
    copy('update-files/media.php', '../media.php');
    copy('update-files/new-offers.php', '../new-offers.php');
    copy('update-files/notification.php', '../notification.php');
    copy('update-files/newsletter.php', '../newsletter.php');
    copy('update-files/notification-settings.php', '../notification-settings.php');
    copy('update-files/order-detail.php', '../order-detail.php');
    copy('update-files/orders.php', '../orders.php');
    copy('update-files/payment-methods-settings.php', '../payment-methods-settings.php');
    copy('update-files/payment-requests.php', '../payment-requests.php');
    copy('update-files/play-store-privacy-policy.php', '../play-store-privacy-policy.php');
    copy('update-files/privacy-policy.php', '../privacy-policy.php');
    copy('update-files/product-detail.php', '../product-detail.php');
    copy('update-files/products.php', '../products.php');
    copy('update-files/products-advt.php', '../products-advt.php');
    copy('update-files/product-sales-report.php', '../product-sales-report.php');
    copy('update-files/products-order.php', '../products-order.php');
    copy('update-files/products-taxes.php', '../products-taxes.php');
    copy('update-files/promo-code.php', '../promo-code.php');
    copy('update-files/purchase-code.php', '../purchase-code.php');
    copy('update-files/reset-password.php', '../reset-password.php');
    copy('update-files/return-requests.php', '../return-requests.php');
    copy('update-files/sales-report.php', '../sales-report.php');
    copy('update-files/sections.php', '../sections.php');
    copy('update-files/send-multiple-push.php', '../send-multiple-push.php');
    copy('update-files/settings.php', '../settings.php');
    copy('update-files/social-media.php', '../social-media.php');
    copy('update-files/sold-out-products.php', '../sold-out-products.php');
    copy('update-files/subcategories.php', '../subcategories.php');
    copy('update-files/system-users.php', '../system-users.php');
    copy('update-files/support-system.php', '../support-system.php');
    copy('update-files/support-view.php', '../support-view.php');
    copy('update-files/terms-conditions.php', '../terms-conditions.php');
    copy('update-files/time-slots.php', '../time-slots.php');
    copy('update-files/transaction.php', '../transaction.php');
    copy('update-files/units.php', '../units.php');
    copy('update-files/update.php', '../update.php');
    copy('update-files/view-category-product.php', '../view-category-product.php');
    copy('update-files/view-city-area.php', '../view-city-area.php');
    copy('update-files/view-product.php', '../view-product.php');
    copy('update-files/view-product-variants.php', '../view-product-variants.php');
    copy('update-files/view-subcategory.php', '../view-subcategory.php');
    copy('update-files/view-subcategory-product.php', '../view-subcategory-product.php');
    copy('update-files/wallet-transactions.php', '../wallet-transactions.php');
    copy('update-files/web-category.php', '../web-category.php');
    copy('update-files/web-header.php', '../web-header.php');
    copy('update-files/web-footer.php', '../web-footer.php');
    copy('update-files/withdrawal-requests.php', '../withdrawal-requests.php');
    /* root files end here */

    echo "Congratulations! You have successfully upgraded your system!<br/><h4>If you liked our Auto Update system</h4>";

    $_SESSION['count'] = "applied";
    echo "Operation done successfully! Do not perform this second time! ";
} else {

    exit("Operation already applied! Cannot perform this second time! Please now delete the <b>/update</b> folder from your server directory");
}
