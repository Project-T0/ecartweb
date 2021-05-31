<?php

session_start();
error_reporting(true);
$latest_version = "v2.1.0";
/*
 *  Update script for Web eCart from v1.0.6 to v2.1.0
 *  All Right reserved to WRTeam.in
 *  
 */

	/* app folder starts */
    copy('update-files/app/Console/Kernel.php', '../app/Console/Kernel.php');
    copy('update-files/app/Exceptions/Handler.php', '../app/Exceptions/Handler.php');
    copy('update-files/app/Helpers/helper.php', '../app/Helpers/helper.php');
    copy('update-files/app/Http/Controllers/Payments/FlutterwaveController.php', '../app/Http/Controllers/Payments/FlutterwaveController.php');
    copy('update-files/app/Http/Controllers/Payments/MidtransController.php', '../app/Http/Controllers/Payments/MidtransController.php');
    copy('update-files/app/Http/Controllers/Payments/PaystackController.php', '../app/Http/Controllers/Payments/PaystackController.php');
    copy('update-files/app/Http/Controllers/Payments/PaytmController.php', '../app/Http/Controllers/Payments/PaytmController.php');
    copy('update-files/app/Http/Controllers/Payments/StripeController.php', '../app/Http/Controllers/Payments/StripeController.php');
    copy('update-files/app/Http/Controllers/MailController.php', '../app/Http/Controllers/MailController.php');
    copy('update-files/app/Http/Controllers/FavouriteController.php', '../app/Http/Controllers/FavouriteController.php');
    copy('update-files/app/Http/Controllers/CheckoutController.php', '../app/Http/Controllers/CheckoutController.php');
    copy('update-files/app/Http/Controllers/Controller.php', '../app/Http/Controllers/Controller.php');
    copy('update-files/app/Http/Controllers/UserController.php', '../app/Http/Controllers/UserController.php');
    copy('update-files/app/Http/Controllers/HomeController.php', '../app/Http/Controllers/HomeController.php');
    copy('update-files/app/Http/Controllers/CartController.php', '../app/Http/Controllers/CartController.php');
    copy('update-files/app/Http/Middleware/Authenticate.php', '../app/Http/Middleware/Authenticate.php');
    copy('update-files/app/Http/Middleware/CheckForMaintenanceMode.php', '../app/Http/Middleware/CheckForMaintenanceMode.php');
    copy('update-files/app/Http/Middleware/EncryptCookies.php', '../app/Http/Middleware/EncryptCookies.php');
    copy('update-files/app/Http/Middleware/Loggedin.php', '../app/Http/Middleware/Loggedin.php');
    copy('update-files/app/Http/Middleware/RedirectIfAuthenticated.php', '../app/Http/Middleware/RedirectIfAuthenticated.php');
    copy('update-files/app/Http/Middleware/TrimStrings.php', '../app/Http/Middleware/TrimStrings.php');
    copy('update-files/app/Http/Middleware/TrustHosts.php', '../app/Http/Middleware/TrustHosts.php');
    copy('update-files/app/Http/Middleware/TrustProxies.php', '../app/Http/Middleware/TrustProxies.php');
    copy('update-files/app/Http/Middleware/VerifyCsrfToken.php', '../app/Http/Middleware/VerifyCsrfToken.php');
    copy('update-files/app/Http/Kernel.php', '../app/Http/Kernel.php');
    copy('update-files/app/Providers/AppServiceProvider.php', '../app/Providers/AppServiceProvider.php');
    copy('update-files/app/Providers/AuthServiceProvider.php', '../app/Providers/AuthServiceProvider.php');
    copy('update-files/app/Providers/BroadcastServiceProvider.php', '../app/Providers/BroadcastServiceProvider.php');
    copy('update-files/app/Providers/EventServiceProvider.php', '../app/Providers/EventServiceProvider.php');
    copy('update-files/app/Providers/RouteServiceProvider.php', '../app/Providers/RouteServiceProvider.php');
    copy('update-files/app/Providers/RouteServiceProvider.php', '../app/Providers/RouteServiceProvider.php');
    copy('update-files/app/User.php', '../app/User.php');
    copy('update-files/app/helper.php', '../app/helper.php');
    /* app folder end */

    /* bootstrap folder starts */
    copy('update-files/bootstrap/cache/packages.php', '../bootstrap/cache/packages.php');
    copy('update-files/bootstrap/cache/services.php', '../bootstrap/cache/services.php');
    copy('update-files/bootstrap/app.php', '../bootstrap/app.php');
    /* bootstrap folder end */

    /* config folder starts */
    copy('update-files/config/app.php', '../config/app.php');
    copy('update-files/config/auth.php', '../config/auth.php');
    copy('update-files/config/broadcasting.php', '../config/broadcasting.php');
    copy('update-files/config/cache.php', '../config/cache.php');
	copy('update-files/config/ekart.php', '../config/ekart.php');
    copy('update-files/config/cors.php', '../config/cors.php');
    copy('update-files/config/database.php', '../config/database.php');
    copy('update-files/config/filesystems.php', '../config/filesystems.php');
    copy('update-files/config/flare.php', '../config/flare.php');
    copy('update-files/config/hashing.php', '../config/hashing.php');
    copy('update-files/config/ignition.php', '../config/ignition.php');
    copy('update-files/config/logging.php', '../config/logging.php');
    copy('update-files/config/queue.php', '../config/queue.php');
    copy('update-files/config/services.php', '../config/services.php');
    copy('update-files/config/session.php', '../config/session.php');
    copy('update-files/config/tinker.php', '../config/tinker.php');
    copy('update-files/config/trustedproxy.php', '../config/trustedproxy.php');
    copy('update-files/config/view.php', '../config/view.php');
    /* config folder end */
   
    /* public folder starts */
    if (!is_dir('../public/themes/eCart_01')) {
            mkdir('../public/themes/eCart_01', 0777, true);
        }
		if (!is_dir('../public/themes/eCart_01/css')) {
            mkdir('../public/themes/eCart_01/css', 0777, true);
        }
    copy('update-files/public/themes/eCart_01/css/bootstrap.min.css', '../public/themes/eCart_01/css/bootstrap.min.css');
    copy('update-files/public/themes/eCart_01/css/calender.css', '../public/themes/eCart_01/css/calender.css');
    copy('update-files/public/themes/eCart_01/css/cart.css', '../public/themes/eCart_01/css/cart.css');
    copy('update-files/public/themes/eCart_01/css/custom.css', '../public/themes/eCart_01/css/custom.css');
    copy('update-files/public/themes/eCart_01/css/error.css', '../public/themes/eCart_01/css/error.css');
    copy('update-files/public/themes/eCart_01/css/intlTelInput.css', '../public/themes/eCart_01/css/intlTelInput.css');
    copy('update-files/public/themes/eCart_01/css/jquery-ui.css', '../public/themes/eCart_01/css/jquery-ui.css');
    copy('update-files/public/themes/eCart_01/css/jquery-ui.min.css', '../public/themes/eCart_01/css/jquery-ui.min.css');
    copy('update-files/public/themes/eCart_01/css/plugins.css', '../public/themes/eCart_01/css/plugins.css');
    copy('update-files/public/themes/eCart_01/css/responsive.css', '../public/themes/eCart_01/css/responsive.css');
    copy('update-files/public/themes/eCart_01/css/select2.min.css', '../public/themes/eCart_01/css/select2.min.css');
    copy('update-files/public/themes/eCart_01/css/stepper.css', '../public/themes/eCart_01/css/stepper.css');
    copy('update-files/public/themes/eCart_01/css/ui.css', '../public/themes/eCart_01/css/ui.css');
	if (!is_dir('../public/themes/eCart_01/images')) {
            mkdir('../public/themes/eCart_01/images', 0777, true);
        }
    copy('update-files/public/themes/eCart_01/images/3.png', '../public/themes/eCart_01/images/3.png');
    copy('update-files/public/themes/eCart_01/images/cart.png', '../public/themes/eCart_01/images/cart.png');
    copy('update-files/public/themes/eCart_01/images/flags.png', '../public/themes/eCart_01/images/flags.png');
    copy('update-files/public/themes/eCart_01/images/google1.png', '../public/themes/eCart_01/images/google1.png');
    copy('update-files/public/themes/eCart_01/images/login.png', '../public/themes/eCart_01/images/login.png');
    copy('update-files/public/themes/eCart_01/images/phone.png', '../public/themes/eCart_01/images/phone.png');
    copy('update-files/public/themes/eCart_01/images/search.png', '../public/themes/eCart_01/images/search.png');
	copy('update-files/public/themes/eCart_01/images/cod.svg', '../public/themes/eCart_01/images/cod.svg');
	copy('update-files/public/themes/eCart_01/images/flutterwave.svg', '../public/themes/eCart_01/images/flutterwave.svg');
	copy('update-files/public/themes/eCart_01/images/midtrans.svg', '../public/themes/eCart_01/images/midtrans.svg');
	copy('update-files/public/themes/eCart_01/images/paypal.svg', '../public/themes/eCart_01/images/paypal.svg');
	copy('update-files/public/themes/eCart_01/images/paystack.svg', '../public/themes/eCart_01/images/paystack.svg');
	copy('update-files/public/themes/eCart_01/images/paytm.svg', '../public/themes/eCart_01/images/paytm.svg');
	copy('update-files/public/themes/eCart_01/images/payu.svg', '../public/themes/eCart_01/images/payu.svg');
	copy('update-files/public/themes/eCart_01/images/rozerpay.svg', '../public/themes/eCart_01/images/rozerpay.svg');
	copy('update-files/public/themes/eCart_01/images/stripe.svg', '../public/themes/eCart_01/images/stripe.svg');
	copy('update-files/public/themes/eCart_01/images/vag.svg', '../public/themes/eCart_01/images/vag.svg');
	copy('update-files/public/themes/eCart_01/images/nonvag.svg', '../public/themes/eCart_01/images/nonvag.svg');
    copy('update-files/public/themes/eCart_01/images/ui-icons_444444_256x240.png', '../public/themes/eCart_01/images/ui-icons_444444_256x240.png');
	if (!is_dir('../public/themes/eCart_01/js')) {
            mkdir('../public/themes/eCart_01/js', 0777, true);
        }
    copy('update-files/public/themes/eCart_01/js/bootstrap.min.js', '../public/themes/eCart_01/js/bootstrap.min.js');
    copy('update-files/public/themes/eCart_01/js/cartajax.js', '../public/themes/eCart_01/js/cartajax.js');
    copy('update-files/public/themes/eCart_01/js/cartpageajax.js', '../public/themes/eCart_01/js/cartpageajax.js');
    copy('update-files/public/themes/eCart_01/js/home.js', '../public/themes/eCart_01/js/home.js');
    copy('update-files/public/themes/eCart_01/js/intlTelInput.js', '../public/themes/eCart_01/js/intlTelInput.js');
    copy('update-files/public/themes/eCart_01/js/jquery-3.5.1.min.js', '../public/themes/eCart_01/js/jquery-3.5.1.min.js');
    copy('update-files/public/themes/eCart_01/js/jquery-ui.min.js', '../public/themes/eCart_01/js/jquery-ui.min.js');
    copy('update-files/public/themes/eCart_01/js/plugins.js', '../public/themes/eCart_01/js/plugins.js');
    copy('update-files/public/themes/eCart_01/js/select2.min.js', '../public/themes/eCart_01/js/select2.min.js');
    copy('update-files/public/js/script.js', '../public/js/script.js');
	copy('update-files/public/js/accounts.js', '../public/js/accounts.js');
	copy('update-files/public/js/address.js', '../public/js/address.js');
	copy('update-files/public/js/checkout-payment.js', '../public/js/checkout-payment.js');
	copy('update-files/public/js/firebase.js', '../public/js/firebase.js');
	copy('update-files/public/js/firebase-analytics.js', '../public/js/firebase-analytics.js');
	copy('update-files/public/js/firebase-app.js', '../public/js/firebase-app.js');
	copy('update-files/public/js/firebase-auth.js', '../public/js/firebase-auth.js');
	copy('update-files/public/js/firebase-firestore.js', '../public/js/firebase-firestore.js');
	copy('update-files/public/js/jquery.combostars.js', '../public/js/jquery.combostars.js');
	copy('update-files/public/js/login.js', '../public/js/login.js');
	copy('update-files/public/js/payment-gateway-paypal.js', '../public/js/payment-gateway-paypal.js');
	copy('update-files/public/js/payment-gateway-payumoney.js', '../public/js/payment-gateway-payumoney.js');
	copy('update-files/public/js/payment-gateway-razorpay.js', '../public/js/payment-gateway-razorpay.js');
	copy('update-files/public/js/register.js', '../public/js/register.js');
	copy('update-files/public/images/stars.png', '../public/images/stars.png');
	copy('update-files/public/images/no-image.png', '../public/images/no-image.png');
	copy('update-files/public/images/loading.gif', '../public/images/loading.gif');
	copy('update-files/public/images/1614235219.png', '../public/images/1614235219.png');
	copy('update-files/public/images/1613622694.png', '../public/images/1613622694.png');
	copy('update-files/public/images/cod.svg', '../public/images/cod.svg');
	copy('update-files/public/images/flutterwave.svg', '../public/images/flutterwave.svg');
	copy('update-files/public/images/midtrans.svg', '../public/images/midtrans.svg');
	copy('update-files/public/images/paypal.svg', '../public/images/paypal.svg');
	copy('update-files/public/images/paystack.svg', '../public/images/paystack.svg');
	copy('update-files/public/images/paytm.svg', '../public/images/paytm.svg');
	copy('update-files/public/images/payu.svg', '../public/images/payu.svg');
	copy('update-files/public/images/rozerpay.svg', '../public/images/rozerpay.svg');
	copy('update-files/public/images/stripe.svg', '../public/images/stripe.svg');
	copy('update-files/public/images/vag.svg', '../public/images/vag.svg');
	copy('update-files/public/images/nonvag.svg', '../public/images/nonvag.svg');
	/* public folder end */

    /* resources folder end */
    copy('update-files/resources/lang/en/auth.php', '../resources/lang/en/auth.php');
    copy('update-files/resources/lang/en/msg.php', '../resources/lang/en/msg.php');
    copy('update-files/resources/lang/en/validation.php', '../resources/lang/en/validation.php');
    copy('update-files/resources/sass/app.scss', '../resources/sass/app.scss');
	if (!is_dir('../resources/views/themes/eCart_01')) {
            mkdir('../resources/views/themes/eCart_01', 0777, true);
        }
		if (!is_dir('../resources/views/themes/eCart_01/common')) {
            mkdir('../resources/views/themes/eCart_01/common', 0777, true);
        }
    copy('update-files/resources/views/themes/eCart_01/common/header.blade.php', '../resources/views/themes/eCart_01/common/header.blade.php');
	copy('update-files/resources/views/themes/eCart_01/common/footer.blade.php', '../resources/views/themes/eCart_01/common/footer.blade.php');
    copy('update-files/resources/views/themes/eCart_01/common/msg.blade.php', '../resources/views/themes/eCart_01/common/msg.blade.php');
    copy('update-files/resources/views/themes/eCart_01/common/sub-header.blade.php', '../resources/views/themes/eCart_01/common/sub-header.blade.php');
	if (!is_dir('../resources/views/themes/eCart_01/parts')) {
            mkdir('../resources/views/themes/eCart_01/parts', 0777, true);
        }
    copy('update-files/resources/views/themes/eCart_01/parts/breadcrumb.blade.php', '../resources/views/themes/eCart_01/parts/breadcrumb.blade.php');
    copy('update-files/resources/views/themes/eCart_01/parts/categories.blade.php', '../resources/views/themes/eCart_01/parts/categories.blade.php');
    copy('update-files/resources/views/themes/eCart_01/parts/offers.blade.php', '../resources/views/themes/eCart_01/parts/offers.blade.php');
    copy('update-files/resources/views/themes/eCart_01/parts/style_1.blade.php', '../resources/views/themes/eCart_01/parts/style_1.blade.php');
    copy('update-files/resources/views/themes/eCart_01/parts/style_2.blade.php', '../resources/views/themes/eCart_01/parts/style_2.blade.php');
    copy('update-files/resources/views/themes/eCart_01/parts/style_3.blade.php', '../resources/views/themes/eCart_01/parts/style_3.blade.php');
	if (!is_dir('../resources/views/themes/eCart_01/user')) {
            mkdir('../resources/views/themes/eCart_01/user', 0777, true);
        }
    copy('update-files/resources/views/themes/eCart_01/user/account.blade.php', '../resources/views/themes/eCart_01/user/account.blade.php');
    copy('update-files/resources/views/themes/eCart_01/user/addresses.blade.php', '../resources/views/themes/eCart_01/user/addresses.blade.php');
    copy('update-files/resources/views/themes/eCart_01/user/favorites.blade.php', '../resources/views/themes/eCart_01/user/favorites.blade.php');
    copy('update-files/resources/views/themes/eCart_01/user/notification.blade.php', '../resources/views/themes/eCart_01/user/notification.blade.php');
    copy('update-files/resources/views/themes/eCart_01/user/orders.blade.php', '../resources/views/themes/eCart_01/user/orders.blade.php');
    copy('update-files/resources/views/themes/eCart_01/user/order-sidebar.blade.php', '../resources/views/themes/eCart_01/user/order-sidebar.blade.php');
    copy('update-files/resources/views/themes/eCart_01/user/order-track.blade.php', '../resources/views/themes/eCart_01/user/order-track.blade.php');
    copy('update-files/resources/views/themes/eCart_01/user/password.blade.php', '../resources/views/themes/eCart_01/user/password.blade.php');
    copy('update-files/resources/views/themes/eCart_01/user/refer-earn.blade.php', '../resources/views/themes/eCart_01/user/refer-earn.blade.php');
    copy('update-files/resources/views/themes/eCart_01/user/sidebar.blade.php', '../resources/views/themes/eCart_01/user/sidebar.blade.php');
    copy('update-files/resources/views/themes/eCart_01/user/transaction-history.blade.php', '../resources/views/themes/eCart_01/user/transaction-history.blade.php');
    copy('update-files/resources/views/themes/eCart_01/user/wallet-history.blade.php', '../resources/views/themes/eCart_01/user/wallet-history.blade.php');
    copy('update-files/resources/views/themes/eCart_01/mail.blade.php', '../resources/views/themes/eCart_01/mail.blade.php');
    copy('update-files/resources/views/themes/eCart_01/page.blade.php', '../resources/views/themes/eCart_01/page.blade.php');
    copy('update-files/resources/views/themes/eCart_01/error.blade.php', '../resources/views/themes/eCart_01/error.blade.php');
    copy('update-files/resources/views/themes/eCart_01/sub-categories.blade.php', '../resources/views/themes/eCart_01/sub-categories.blade.php');
    copy('update-files/resources/views/themes/eCart_01/home.blade.php', '../resources/views/themes/eCart_01/home.blade.php');
    copy('update-files/resources/views/themes/eCart_01/faq.blade.php', '../resources/views/themes/eCart_01/faq.blade.php');
    copy('update-files/resources/views/themes/eCart_01/contact.blade.php', '../resources/views/themes/eCart_01/contact.blade.php');
    copy('update-files/resources/views/themes/eCart_01/register.blade.php', '../resources/views/themes/eCart_01/register.blade.php');
    copy('update-files/resources/views/themes/eCart_01/login.blade.php', '../resources/views/themes/eCart_01/login.blade.php');
    copy('update-files/resources/views/themes/eCart_01/checkout_summary.blade.php', '../resources/views/themes/eCart_01/checkout_summary.blade.php');
    copy('update-files/resources/views/themes/eCart_01/shop.blade.php', '../resources/views/themes/eCart_01/shop.blade.php');
    copy('update-files/resources/views/themes/eCart_01/checkout_payment.blade.php', '../resources/views/themes/eCart_01/checkout_payment.blade.php');
    copy('update-files/resources/views/themes/eCart_01/product.blade.php', '../resources/views/themes/eCart_01/product.blade.php');
    copy('update-files/resources/views/themes/eCart_01/checkout_address.blade.php', '../resources/views/themes/eCart_01/checkout_address.blade.php');
    copy('update-files/resources/views/payment-gateways/flutterwave.blade.php', '../resources/views/payment-gateways/flutterwave.blade.php');
    copy('update-files/resources/views/payment-gateways/midtrans.blade.php', '../resources/views/payment-gateways/midtrans.blade.php');
    copy('update-files/resources/views/payment-gateways/paypal.blade.php', '../resources/views/payment-gateways/paypal.blade.php');
    copy('update-files/resources/views/payment-gateways/paystack.blade.php', '../resources/views/payment-gateways/paystack.blade.php');
    copy('update-files/resources/views/payment-gateways/payu-bolt.blade.blade.php', '../resources/views/payment-gateways/payu-bolt.blade.php');
    copy('update-files/resources/views/payment-gateways/pgRedirect.blade.php', '../resources/views/payment-gateways/pgRedirect.blade.php');
    copy('update-files/resources/views/payment-gateways/razorpay.blade.php', '../resources/views/payment-gateways/razorpay.blade.php');
    copy('update-files/resources/views/payment-gateways/stripe.blade.php', '../resources/views/payment-gateways/stripe.blade.php');
    copy('update-files/resources/views/payment-gateways/txnTest.blade.php', '../resources/views/payment-gateways/txnTest.blade.php');
    copy('update-files/resources/views/errors/401.blade.php', '../resources/views/errors/401.blade.php');
    copy('update-files/resources/views/errors/403.blade.php', '../resources/views/errors/403.blade.php');
    copy('update-files/resources/views/errors/404.blade.php', '../resources/views/errors/404.blade.php');
    copy('update-files/resources/views/errors/419.blade.php', '../resources/views/errors/419.blade.php');
    copy('update-files/resources/views/errors/429.blade.php', '../resources/views/errors/429.blade.php');
    copy('update-files/resources/views/errors/500.blade.php', '../resources/views/errors/500.blade.php');
    copy('update-files/resources/views/errors/503.blade.php', '../resources/views/errors/503.blade.php');
    copy('update-files/resources/views/errors/illustrated-layout.blade.php', '../resources/views/errors/illustrated-layout.blade.php');
    copy('update-files/resources/views/errors/layout.blade.php', '../resources/views/errors/layout.blade.php');
    copy('update-files/resources/views/errors/minimal.blade.php', '../resources/views/errors/minimal.blade.php');
    copy('update-files/resources/views/payment-failed.blade.php', '../resources/views/payment-failed.blade.php');
    copy('update-files/resources/views/order-complete.blade.php', '../resources/views/order-complete.blade.php');
    copy('update-files/resources/views/checkout.blade.php', '../resources/views/checkout.blade.php');
    /* resources folder end */
/* routes folder starts */
    copy('update-files/routes/api.php', '../routes/api.php');
    copy('update-files/routes/channels.php', '../routes/channels.php');
    copy('update-files/routes/console.php', '../routes/console.php');
    copy('update-files/routes/web.php', '../routes/web.php');
    /* routes folder end */

    /* root files start here */
    copy('update-files/artisan', '../artisan');
    copy('update-files/composer.json', '../composer.json');
    copy('update-files/composer.lock', '../composer.lock');
    copy('update-files/index.php', '../index.php');
    copy('update-files/package.json', '../package.json');
    copy('update-files/package-lock.json', '../package-lock.json');
    copy('update-files/phpunit.xml', '../phpunit.xml');
    copy('update-files/server.php', '../server.php');
    copy('update-files/webpack.mix.js', '../webpack.mix.js');
    copy('update-files/.editorconfig', '../.editorconfig');
    copy('update-files/.styleci.yml', '../.styleci.yml');
	
	/* root files end here */
	
	/* eCart_02 public files start here */
	if (!is_dir('../public/themes/eCart_02')) {
            mkdir('../public/themes/eCart_02', 0777, true);
        }
	if (!is_dir('../public/themes/eCart_02/css')) {
            mkdir('../public/themes/eCart_02/css', 0777, true);
        }
	 copy('update-files/public/themes/eCart_02/css/colors/blue.css', '../public/themes/eCart_02/css/colors/blue.css');
	 copy('update-files/public/themes/eCart_02/css/colors/gold.css', '../public/themes/eCart_02/css/colors/gold.css');
	 copy('update-files/public/themes/eCart_02/css/colors/green.css', '../public/themes/eCart_02/css/colors/green.css');
	 copy('update-files/public/themes/eCart_02/css/colors/orange.css', '../public/themes/eCart_02/css/colors/orange.css');
	 copy('update-files/public/themes/eCart_02/css/colors/pink.css', '../public/themes/eCart_02/css/colors/pink.css');
	 copy('update-files/public/themes/eCart_02/css/colors/purplish.css', '../public/themes/eCart_02/css/colors/purplish.css');
	 copy('update-files/public/themes/eCart_02/css/colors/red.css', '../public/themes/eCart_02/css/colors/red.css');
	 copy('update-files/public/themes/eCart_02/css/colors/yellow.css', '../public/themes/eCart_02/css/colors/yellow.css');
	 copy('update-files/public/themes/eCart_02/css/animate.css', '../public/themes/eCart_02/css/animate.css');
	 copy('update-files/public/themes/eCart_02/css/bootstrap.min.css', '../public/themes/eCart_02/css/bootstrap.min.css');
	 copy('update-files/public/themes/eCart_02/css/custom.css', '../public/themes/eCart_02/css/custom.css');
	 copy('update-files/public/themes/eCart_02/css/darkmode.css', '../public/themes/eCart_02/css/darkmode.css');
	 copy('update-files/public/themes/eCart_02/css/intlTelInput.css', '../public/themes/eCart_02/css/intlTelInput.css');
	 copy('update-files/public/themes/eCart_02/css/jquery-ui.min.css', '../public/themes/eCart_02/css/jquery-ui.min.css');
	 copy('update-files/public/themes/eCart_02/css/owl-carousel.css', '../public/themes/eCart_02/css/owl-carousel.css');
	 copy('update-files/public/themes/eCart_02/css/plugin.css', '../public/themes/eCart_02/css/plugin.css');
	 copy('update-files/public/themes/eCart_02/css/rtlcustom.css', '../public/themes/eCart_02/css/rtlcustom.css');
	 copy('update-files/public/themes/eCart_02/css/select2.min.css', '../public/themes/eCart_02/css/select2.min.css');
	 copy('update-files/public/themes/eCart_02/css/semantic.min.css', '../public/themes/eCart_02/css/semantic.min.css');
	 copy('update-files/public/themes/eCart_02/css/sweetalert2.css', '../public/themes/eCart_02/css/sweetalert2.css');
	 copy('update-files/public/themes/eCart_02/css/switcherdemo.css', '../public/themes/eCart_02/css/switcherdemo.css');
	 copy('update-files/public/themes/eCart_02/css/ui.css', '../public/themes/eCart_02/css/ui.css');
	 if (!is_dir('../public/themes/eCart_02/fontawesome')) {
            mkdir('../public/themes/eCart_02/fontawesome', 0777, true);
        }
		if (!is_dir('../public/themes/eCart_02/fontawesome/css')) {
            mkdir('../public/themes/eCart_02/fontawesome/css', 0777, true);
        }
	 copy('update-files/public/themes/eCart_02/fontawesome/css/all.min.css', '../public/themes/eCart_02/fontawesome/css/all.min.css');
	if (!is_dir('../public/themes/eCart_02/fontawesome/webfonts')) {
            mkdir('../public/themes/eCart_02/fontawesome/webfonts', 0777, true);
        }
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-brands-400.eot', '../public/themes/eCart_02/fontawesome/webfonts/fa-brands-400.eot');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-brands-400.html', '../public/themes/eCart_02/fontawesome/webfonts/fa-brands-400.html');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-brands-400.svg', '../public/themes/eCart_02/fontawesome/webfonts/fa-brands-400.svg');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-brands-400.ttf', '../public/themes/eCart_02/fontawesome/webfonts/fa-brands-400.ttf');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-brands-400.woff', '../public/themes/eCart_02/fontawesome/webfonts/fa-brands-400.woff');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-brands-400d41d.eot', '../public/themes/eCart_02/fontawesome/webfonts/fa-brands-400d41d.eot');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-regular-400.eot', '../public/themes/eCart_02/fontawesome/webfonts/fa-regular-400.eot');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-regular-400.html', '../public/themes/eCart_02/fontawesome/webfonts/fa-regular-400.html');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-regular-400.svg', '../public/themes/eCart_02/fontawesome/webfonts/fa-regular-400.svg');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-regular-400.ttf', '../public/themes/eCart_02/fontawesome/webfonts/fa-regular-400.ttf');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-regular-400.woff', '../public/themes/eCart_02/fontawesome/webfonts/fa-regular-400.woff');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-regular-400d41d.eot', '../public/themes/eCart_02/fontawesome/webfonts/fa-regular-400d41d.eot');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-solid-900.eot', '../public/themes/eCart_02/fontawesome/webfonts/fa-solid-900.eot');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-solid-900.html', '../public/themes/eCart_02/fontawesome/webfonts/fa-solid-900.html');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-solid-900.svg', '../public/themes/eCart_02/fontawesome/webfonts/fa-solid-900.svg');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-solid-900.ttf', '../public/themes/eCart_02/fontawesome/webfonts/fa-solid-900.ttf');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-solid-900.woff', '../public/themes/eCart_02/fontawesome/webfonts/fa-solid-900.woff');
	 copy('update-files/public/themes/eCart_02/fontawesome/webfonts/fa-solid-900d41d.eot', '../public/themes/eCart_02/fontawesome/webfonts/fa-solid-900d41d.eot');
	 
	 if (!is_dir('../public/themes/eCart_02/images')) {
            mkdir('../public/themes/eCart_02/images', 0777, true);
        }
	 copy('update-files/public/themes/eCart_02/images/darkmodegrid.png', '../public/themes/eCart_02/images/darkmodegrid.png');
	copy('update-files/public/themes/eCart_02/images/darkmodelist.png', '../public/themes/eCart_02/images/darkmodelist.png');
	copy('update-files/public/themes/eCart_02/images/darkmodephone.png', '../public/themes/eCart_02/images/darkmodephone.png');
	copy('update-files/public/themes/eCart_02/images/dashprofile.png', '../public/themes/eCart_02/images/dashprofile.png');
	copy('update-files/public/themes/eCart_02/images/grid.png', '../public/themes/eCart_02/images/grid.png');
	copy('update-files/public/themes/eCart_02/images/headerlogo.png', '../public/themes/eCart_02/images/headerlogo.png');
	copy('update-files/public/themes/eCart_02/images/list.png', '../public/themes/eCart_02/images/list.png');
	copy('update-files/public/themes/eCart_02/images/map.png', '../public/themes/eCart_02/images/map.png');
	copy('update-files/public/themes/eCart_02/images/phone.png', '../public/themes/eCart_02/images/phone.png');
	copy('update-files/public/themes/eCart_02/images/recentauthor.png', '../public/themes/eCart_02/images/recentauthor.png');
	copy('update-files/public/themes/eCart_02/images/team.png', '../public/themes/eCart_02/images/team.png');
	copy('update-files/public/themes/eCart_02/images/team-2.png', '../public/themes/eCart_02/images/team-2.png');
	copy('update-files/public/themes/eCart_02/images/team-3.png', '../public/themes/eCart_02/images/team-3.png');
	copy('update-files/public/themes/eCart_02/images/team-4.png', '../public/themes/eCart_02/images/team-4.png');
	copy('update-files/public/themes/eCart_02/images/testimonial.png', '../public/themes/eCart_02/images/testimonial.png');
	copy('update-files/public/themes/eCart_02/images/testimonial-1.png', '../public/themes/eCart_02/images/testimonial-1.png');
	copy('update-files/public/themes/eCart_02/images/testimonial-2.png', '../public/themes/eCart_02/images/testimonial-2.png');
	copy('update-files/public/themes/eCart_02/images/testimonial-3.png', '../public/themes/eCart_02/images/testimonial-3.png');
	copy('update-files/public/themes/eCart_02/images/aboutus.png', '../public/themes/eCart_02/images/aboutus.png');
	copy('update-files/public/themes/eCart_02/images/breadcrumbs.png', '../public/themes/eCart_02/images/breadcrumbs.png');
	copy('update-files/public/themes/eCart_02/images/brandpartners.png', '../public/themes/eCart_02/images/brandpartners.png');
	copy('update-files/public/themes/eCart_02/images/tomato.gif', '../public/themes/eCart_02/images/tomato.gif');
	if (!is_dir('../public/themes/eCart_02/js')) {
            mkdir('../public/themes/eCart_02/js', 0777, true);
        }
	copy('update-files/public/themes/eCart_02/js/actionswitcher.js', '../public/themes/eCart_02/js/actionswitcher.js');
	copy('update-files/public/themes/eCart_02/js/bootstrap.min.js', '../public/themes/eCart_02/js/bootstrap.min.js');
	copy('update-files/public/themes/eCart_02/js/cartajax.js', '../public/themes/eCart_02/js/cartajax.js');
	copy('update-files/public/themes/eCart_02/js/counterup.js', '../public/themes/eCart_02/js/counterup.js');
	copy('update-files/public/themes/eCart_02/js/elevatezoom.js', '../public/themes/eCart_02/js/elevatezoom.js');
	copy('update-files/public/themes/eCart_02/js/intlTelInput.js', '../public/themes/eCart_02/js/intlTelInput.js');
	copy('update-files/public/themes/eCart_02/js/jquery.countdown.js', '../public/themes/eCart_02/js/jquery.countdown.js');
	copy('update-files/public/themes/eCart_02/js/jquery-3.5.1.min.js', '../public/themes/eCart_02/js/jquery-3.5.1.min.js');
	copy('update-files/public/themes/eCart_02/js/jquery-ui.min.js', '../public/themes/eCart_02/js/jquery-ui.min.js');
	copy('update-files/public/themes/eCart_02/js/owl-carousel.js', '../public/themes/eCart_02/js/owl-carousel.js');
	copy('update-files/public/themes/eCart_02/js/plugins.js', '../public/themes/eCart_02/js/plugins.js');
	copy('update-files/public/themes/eCart_02/js/script.js', '../public/themes/eCart_02/js/script.js');
	copy('update-files/public/themes/eCart_02/js/select2.min.js', '../public/themes/eCart_02/js/select2.min.js');
	copy('update-files/public/themes/eCart_02/js/semantic.min.js', '../public/themes/eCart_02/js/semantic.min.js');
	copy('update-files/public/themes/eCart_02/js/sweet-alert.init.js', '../public/themes/eCart_02/js/sweet-alert.init.js');
	copy('update-files/public/themes/eCart_02/js/sweetalert2.all.js', '../public/themes/eCart_02/js/sweetalert2.all.js');
	copy('update-files/public/themes/eCart_02/js/swiper-bundle.min.js', '../public/themes/eCart_02/js/swiper-bundle.min.js');
	copy('update-files/public/themes/eCart_02/js/switcherdemo.js', '../public/themes/eCart_02/js/switcherdemo.js');
	copy('update-files/public/themes/eCart_02/js/wow.js', '../public/themes/eCart_02/js/wow.js');
	/* eCart_02 public files end here */
	
	/* eCart_02 resources files start here */
	if (!is_dir('../resources/views/themes/eCart_02')) {
            mkdir('../resources/views/themes/eCart_02', 0777, true);
        }
	if (!is_dir('../resources/views/themes/eCart_02/common')) {
           mkdir('../resources/views/themes/eCart_02/common', 0777, true);
    }
	copy('update-files/resources/views/themes/eCart_02/common/header.blade.php', '../resources/views/themes/eCart_02/common/header.blade.php');
	copy('update-files/resources/views/themes/eCart_02/common/footer.blade.php', '../resources/views/themes/eCart_02/common/footer.blade.php');
	copy('update-files/resources/views/themes/eCart_02/common/msg.blade.php', '../resources/views/themes/eCart_02/common/msg.blade.php');
	if (!is_dir('../resources/views/themes/eCart_02/parts')) {
           mkdir('../resources/views/themes/eCart_02/parts', 0777, true);
    }
	copy('update-files/resources/views/themes/eCart_02/parts/advertisement_banner.blade.php', '../resources/views/themes/eCart_02/parts/advertisement_banner.blade.php');
	copy('update-files/resources/views/themes/eCart_02/parts/categories.blade.php', '../resources/views/themes/eCart_02/parts/categories.blade.php');
	copy('update-files/resources/views/themes/eCart_02/parts/offers.blade.php', '../resources/views/themes/eCart_02/parts/offers.blade.php');
	copy('update-files/resources/views/themes/eCart_02/parts/style_1.blade.php', '../resources/views/themes/eCart_02/parts/style_1.blade.php');
	copy('update-files/resources/views/themes/eCart_02/parts/style_2.blade.php', '../resources/views/themes/eCart_02/parts/style_2.blade.php');
	copy('update-files/resources/views/themes/eCart_02/parts/style_3.blade.php', '../resources/views/themes/eCart_02/parts/style_3.blade.php');
	if (!is_dir('../resources/views/themes/eCart_02/user')) {
           mkdir('../resources/views/themes/eCart_02/user', 0777, true);
    }
	copy('update-files/resources/views/themes/eCart_02/user/account.blade.php', '../resources/views/themes/eCart_02/user/account.blade.php');
	copy('update-files/resources/views/themes/eCart_02/user/addresses.blade.php', '../resources/views/themes/eCart_02/user/addresses.blade.php');
	copy('update-files/resources/views/themes/eCart_02/user/favorites.blade.php', '../resources/views/themes/eCart_02/user/favorites.blade.php');
	copy('update-files/resources/views/themes/eCart_02/user/notification.blade.php', '../resources/views/themes/eCart_02/user/notification.blade.php');
	copy('update-files/resources/views/themes/eCart_02/user/orders.blade.php', '../resources/views/themes/eCart_02/user/orders.blade.php');
	copy('update-files/resources/views/themes/eCart_02/user/order-sidebar.blade.php', '../resources/views/themes/eCart_02/user/order-sidebar.blade.php');
	copy('update-files/resources/views/themes/eCart_02/user/order-track.blade.php', '../resources/views/themes/eCart_02/user/order-track.blade.php');
	copy('update-files/resources/views/themes/eCart_02/user/password.blade.php', '../resources/views/themes/eCart_02/user/password.blade.php');
	copy('update-files/resources/views/themes/eCart_02/user/sidebar.blade.php', '../resources/views/themes/eCart_02/user/sidebar.blade.php');
	copy('update-files/resources/views/themes/eCart_02/user/transaction-history.blade.php', '../resources/views/themes/eCart_02/user/transaction-history.blade.php');
	copy('update-files/resources/views/themes/eCart_02/about.blade.php', '../resources/views/themes/eCart_02/about.blade.php');
	copy('update-files/resources/views/themes/eCart_02/blog.blade.php', '../resources/views/themes/eCart_02/blog.blade.php');
	copy('update-files/resources/views/themes/eCart_02/blogcategory.blade.php', '../resources/views/themes/eCart_02/blogcategory.blade.php');
	copy('update-files/resources/views/themes/eCart_02/checkout_address.blade.php', '../resources/views/themes/eCart_02/checkout_address.blade.php');
	copy('update-files/resources/views/themes/eCart_02/checkout_payment.blade.php', '../resources/views/themes/eCart_02/checkout_payment.blade.php');
	copy('update-files/resources/views/themes/eCart_02/checkout_summary.blade.php', '../resources/views/themes/eCart_02/checkout_summary.blade.php');
	copy('update-files/resources/views/themes/eCart_02/contact.blade.php', '../resources/views/themes/eCart_02/contact.blade.php');
	copy('update-files/resources/views/themes/eCart_02/error.blade.php', '../resources/views/themes/eCart_02/error.blade.php');
	copy('update-files/resources/views/themes/eCart_02/faq.blade.php', '../resources/views/themes/eCart_02/faq.blade.php');
	copy('update-files/resources/views/themes/eCart_02/flash-sales.blade.php', '../resources/views/themes/eCart_02/flash-sales.blade.php');
	copy('update-files/resources/views/themes/eCart_02/home.blade.php', '../resources/views/themes/eCart_02/home.blade.php');
	copy('update-files/resources/views/themes/eCart_02/login.blade.php', '../resources/views/themes/eCart_02/login.blade.php');
	copy('update-files/resources/views/themes/eCart_02/mail.blade.php', '../resources/views/themes/eCart_02/mail.blade.php');
	copy('update-files/resources/views/themes/eCart_02/page.blade.php', '../resources/views/themes/eCart_02/page.blade.php');
	copy('update-files/resources/views/themes/eCart_02/product.blade.php', '../resources/views/themes/eCart_02/product.blade.php');
	copy('update-files/resources/views/themes/eCart_02/register.blade.php', '../resources/views/themes/eCart_02/register.blade.php');
	copy('update-files/resources/views/themes/eCart_02/shop.blade.php', '../resources/views/themes/eCart_02/shop.blade.php');
	copy('update-files/resources/views/themes/eCart_02/sub-categories.blade.php', '../resources/views/themes/eCart_02/sub-categories.blade.php');
	 
	/* eCart_02 resources files end here */

	echo "Congratulations! You have successfully upgraded your system!<br/><h4>If you liked our Auto Update system</h4>";

	
	echo "Operation done successfully! Do not perform this second time! ";

