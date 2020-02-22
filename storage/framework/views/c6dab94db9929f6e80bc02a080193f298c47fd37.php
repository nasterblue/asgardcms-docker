<?php $__env->startSection('content-header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
<?php $__env->stopSection(); ?>
<?php $__env->startSection('shortcuts'); ?>
    <dl class="dl-horizontal">
        <dt><code>c</code></dt>
        <dd><?php echo e(trans('user::users.button.new-user')); ?></dd>
    </dl>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>