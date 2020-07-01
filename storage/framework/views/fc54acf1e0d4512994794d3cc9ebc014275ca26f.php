<!DOCTYPE html>
<html lang="<?php echo e(locale()); ?>">
    <head>
        <base href="<?php echo e(config('app.url')); ?>">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

        <title>
            <?php if (! empty(trim($__env->yieldContent('title')))): ?>
                <?php echo $__env->yieldContent('title'); ?> - <?php echo e(setting('store_name')); ?>

            <?php else: ?>
                <?php echo e(setting('store_name')); ?>

            <?php endif; ?>
        </title>

        <?php echo $__env->yieldPushContent('meta'); ?>

        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500&display=swap" rel="stylesheet">

        <?php if(is_rtl()): ?>
            <link rel="stylesheet" href="<?php echo e(v(Theme::url('public/css/app.rtl.css'))); ?>">
        <?php else: ?>
            <link rel="stylesheet" href="<?php echo e(v(Theme::url('public/css/app.css'))); ?>">
        <?php endif; ?>

        <link rel="shortcut icon" href="<?php echo e($favicon); ?>" type="image/x-icon">

        <?php echo $__env->yieldPushContent('styles'); ?>

        <?php echo setting('custom_header_assets'); ?>


        <script>
            window.FleetCart = {
                baseUrl: '<?php echo e(config("app.url")); ?>',
                rtl: <?php echo e(is_rtl() ? 'true' : 'false'); ?>,
                loggedIn: <?php echo e(auth()->check() ? 'true' : 'false'); ?>,
                csrfToken: '<?php echo e(csrf_token()); ?>',
                stripePublishableKey: '<?php echo e(setting("stripe_publishable_key")); ?>',
                cart: <?php echo $cart; ?>,
                wishlist: <?php echo $wishlist; ?>,
                compareList: <?php echo $compareList; ?>,
                langs: {
                    'storefront::layout.next': '<?php echo e(trans("storefront::layout.next")); ?>',
                    'storefront::layout.prev': '<?php echo e(trans("storefront::layout.prev")); ?>',
                    'storefront::layout.search_for_products': '<?php echo e(trans("storefront::layout.search_for_products")); ?>',
                    'storefront::layout.all_categories': '<?php echo e(trans("storefront::layout.all_categories")); ?>',
                    'storefront::layout.most_searched': '<?php echo e(trans("storefront::layout.most_searched")); ?>',
                    'storefront::layout.search_for_products': '<?php echo e(trans("storefront::layout.search_for_products")); ?>',
                    'storefront::layout.category_suggestions': '<?php echo e(trans("storefront::layout.category_suggestions")); ?>',
                    'storefront::layout.product_suggestions': '<?php echo e(trans("storefront::layout.product_suggestions")); ?>',
                    'storefront::layout.product_suggestions': '<?php echo e(trans("storefront::layout.product_suggestions")); ?>',
                    'storefront::layout.more_results': '<?php echo e(trans("storefront::layout.more_results")); ?>',
                    'storefront::product_card.out_of_stock': '<?php echo e(trans("storefront::product_card.out_of_stock")); ?>',
                    'storefront::product_card.new': '<?php echo e(trans("storefront::product_card.new")); ?>',
                    'storefront::product_card.add_to_cart': '<?php echo e(trans("storefront::product_card.add_to_cart")); ?>',
                    'storefront::product_card.view_options': '<?php echo e(trans("storefront::product_card.view_options")); ?>',
                    'storefront::product_card.compare': '<?php echo e(trans("storefront::product_card.compare")); ?>',
                    'storefront::product_card.wishlist': '<?php echo e(trans("storefront::product_card.wishlist")); ?>',
                    'storefront::product_card.available': '<?php echo e(trans("storefront::product_card.available")); ?>',
                    'storefront::product_card.sold': '<?php echo e(trans("storefront::product_card.sold")); ?>',
                },
            };
        </script>

        <?php echo $schemaMarkup->toScript(); ?>


        <?php echo $__env->yieldPushContent('globals'); ?>

        <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
    </head>

    <body class="<?php echo e($theme); ?> <?php echo e(is_rtl() ? 'rtl' : 'ltr'); ?>">
        <div class="wrapper" id="app">
            <?php echo $__env->make('public.layout.top_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('public.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('public.layout.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('public.layout.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>

            <?php echo $__env->make('public.home.sections.subscribe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('public.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="overlay"></div>

            <?php echo $__env->make('public.layout.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('public.layout.sidebar_cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('public.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('public.layout.newsletter_popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('public.layout.cookie_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <?php echo $__env->yieldPushContent('pre-scripts'); ?>

        <script src="<?php echo e(v(Theme::url('public/js/app.js'))); ?>"></script>

        <?php echo $__env->yieldPushContent('scripts'); ?>

        <?php echo setting('custom_footer_assets'); ?>

    </body>
</html>
<?php /**PATH /var/www/html/fleetcart/Themes/Storefront/views/public/layout.blade.php ENDPATH**/ ?>