<!DOCTYPE html>
<html>
<head>
    <base src="<?php echo e(URL::asset('/')); ?>" />
    <meta charset="UTF-8">
    <title>
        <?php $__env->startSection('title'); ?>
            <?php echo SettingDirective::show(['core::site-name']); ?> | Admin
        <?php echo $__env->yieldSection(); ?>
    </title>
    <meta id="token" name="token" value="<?php echo e(csrf_token()); ?>" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="user-api-token" content="<?php echo e($currentUser->getFirstApiKey()); ?>">
    <meta name="current-locale" content="<?php echo e(locale()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
    <?php $__currentLoopData = $cssFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $css): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(URL::asset($css)); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
    <?php echo Theme::script('vendor/jquery/jquery.min.js'); ?>

    <?php echo $__env->make('partials.asgard-globals', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->startSection('styles'); ?>
    <?php echo $__env->yieldSection(); ?>
    <?php echo $__env->yieldPushContent('css-stack'); ?>
    <?php echo $__env->yieldPushContent('translation-stack'); ?>

    <script>
        $.ajaxSetup({
            headers: { 'Authorization': 'Bearer <?php echo e($currentUser->getFirstApiKey()); ?>' }
        });
        var AuthorizationHeaderValue = 'Bearer <?php echo e($currentUser->getFirstApiKey()); ?>';
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
</head>
<body class="<?php echo e(config('asgard.core.core.skin', 'skin-blue')); ?> sidebar-mini" style="padding-bottom: 0 !important;">
<div class="wrapper" id="app">
    <header class="main-header">
        <a href="<?php echo e(route('dashboard.index')); ?>" class="logo">
            <span class="logo-mini">
                <?php echo SettingDirective::show(['core::site-name-mini']); ?>
            </span>
            <span class="logo-lg">
                <?php echo SettingDirective::show(['core::site-name']); ?>
            </span>
        </a>
        <?php echo $__env->make('partials.top-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>
    <?php echo $__env->make('partials.sidebar-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <aside class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <?php echo $__env->yieldContent('content-header'); ?>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php echo $__env->make('partials.notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
            <router-view></router-view>
        </section><!-- /.content -->
    </aside><!-- /.right-side -->
    <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials.right-sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div><!-- ./wrapper -->

<?php $__currentLoopData = $jsFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $js): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <script src="<?php echo e(URL::asset($js)); ?>" type="text/javascript"></script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<script>
    window.AsgardCMS = {
        translations: <?php echo $staticTranslations; ?>,
        locales: <?php echo json_encode(LaravelLocalization::getSupportedLocales()); ?>,
        currentLocale: '<?php echo e(locale()); ?>',
        editor: '<?php echo e($activeEditor); ?>',
        adminPrefix: '<?php echo e(config('asgard.core.core.admin-prefix')); ?>',
        hideDefaultLocaleInURL: '<?php echo e(config('laravellocalization.hideDefaultLocaleInURL')); ?>',
        filesystem: '<?php echo e(config('asgard.media.config.filesystem')); ?>'
    };
</script>

<script src="<?php echo e(mix('js/app.js')); ?>"></script>

<?php if (is_module_enabled('Notification')): ?>
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script src="<?php echo e(Module::asset('notification:js/pusherNotifications.js')); ?>"></script>
    <script>
        $('.notifications-list').pusherNotifications({
            pusherKey: '<?php echo e(config('broadcasting.connections.pusher.key')); ?>',
            pusherCluster: '<?php echo e(config('broadcasting.connections.pusher.options.cluster')); ?>',
            pusherEncrypted: <?php echo e(config('broadcasting.connections.pusher.options.encrypted')); ?>,
            loggedInUserId: <?php echo e($currentUser->id); ?>,
        });
    </script>
<?php endif; ?>

<?php if (config('asgard.core.core.ckeditor-config-file-path') !== ''): ?>
    <script>
        $('.ckeditor').each(function() {
            CKEDITOR.replace($(this).attr('name'), {
                customConfig: '<?php echo e(config('asgard.core.core.ckeditor-config-file-path')); ?>'
            });
        });
    </script>
<?php endif; ?>
<?php $__env->startSection('scripts'); ?>
<?php echo $__env->yieldSection(); ?>
<?php echo $__env->yieldPushContent('js-stack'); ?>
</body>
</html>
