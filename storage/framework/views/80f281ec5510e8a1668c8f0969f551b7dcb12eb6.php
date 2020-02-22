<!DOCTYPE html>
<html>
<head lang="<?php echo e(LaravelLocalization::setLocale()); ?>">
    <meta charset="UTF-8">
    <?php $__env->startSection('meta'); ?>
        <meta name="description" content="<?php echo SettingDirective::show(['core::site-description']); ?>"/>
    <?php echo $__env->yieldSection(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $__env->startSection('title'); ?><?php echo SettingDirective::show(['core::site-name']); ?><?php echo $__env->yieldSection(); ?></title>
    <?php $__currentLoopData = $alternate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alternateLocale=>$alternateSlug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <link rel="alternate" hreflang="<?php echo e($alternateLocale); ?>" href="<?php echo e(url($alternateLocale.'/'.$alternateSlug)); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <link rel="canonical" href="<?php echo e(url()->current()); ?>" />
    <link rel="shortcut icon" href="<?php echo e(Theme::url('favicon.ico')); ?>">

    <?php echo Theme::style('css/main.css'); ?>

    <?php echo $__env->yieldPushContent('css-stack'); ?>
</head>
<body>

<?php if(auth()->guard()->check()): ?>
    <?php echo $__env->make('partials.admin-bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<?php echo $__env->make('partials.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>
<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo Theme::script('js/all.js'); ?>

<?php echo $__env->yieldContent('scripts'); ?>

<?php if (Setting::has('core::analytics-script')): ?>
<?php echo Setting::get('core::analytics-script'); ?>

<?php endif; ?>
<?php echo $__env->yieldPushContent('js-stack'); ?>
</body>
</html>
