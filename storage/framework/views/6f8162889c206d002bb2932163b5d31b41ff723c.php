<?php $__env->startSection('content-header'); ?>
    <h1>
        <?php echo e(trans('dashboard::dashboard.name')); ?>

    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <?php if(setting('dashboard::welcome-enabled') === '1'): ?>
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">
                            <?php echo SettingDirective::show(['dashboard::welcome-title']); ?>
                        </h3>
                    </div>
                    <div class="box-body">
                        <p><?php echo SettingDirective::show(['dashboard::welcome-description']); ?></p>
                    </div>
                    <?php if(setting('core::site-name') === ''): ?>
                    <div class="box-footer">
                        <a class="btn btn-primary btn-flat" href="<?php echo e(route('dashboard.module.settings', 'core')); ?>">
                            <i class="fa fa-cog"></i> <?php echo e(trans('dashboard::dashboard.configure your website')); ?>

                        </a>
                        <a class="btn btn-default btn-flat" href="<?php echo e(route('admin.page.page.index')); ?>">
                            <?php echo e(trans('dashboard::dashboard.add pages')); ?>

                        </a>
                        <a class="btn btn-default btn-flat" href="<?php echo e(route('admin.menu.menu.index')); ?>">
                            <?php echo e(trans('dashboard::dashboard.add menus')); ?>

                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>