<?php $__env->startSection('title'); ?>
    <?php echo e($page->title); ?> | ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta'); ?>
    <meta name="title" content="<?php echo e($page->meta_title); ?>" />
    <meta name="description" content="<?php echo e($page->meta_description); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <h1><?php echo e($page->title); ?></h1>
        <?php echo $page->body; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>