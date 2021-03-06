<?php $__env->startSection('content-header'); ?>
<h1>
    <?php echo e(trans('setting::settings.title.module name settings', ['module' => ucfirst($currentModule)])); ?>

</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo e(trans('core::core.breadcrumb.home')); ?></a></li>
    <li><a href="<?php echo e(route('admin.setting.settings.index')); ?>"><i class="fa fa-cog"></i> <?php echo e(trans('setting::settings.breadcrumb.settings')); ?></a></li>
    <li class="active"><i class="fa fa-cog"></i> <?php echo e(trans('setting::settings.breadcrumb.module settings', ['module' => ucfirst($currentModule)])); ?></li>
</ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo Form::open(['route' => ['admin.setting.settings.store'], 'method' => 'post']); ?>

<div class="row">
    <div class="sidebar-nav col-sm-2">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo e(trans('setting::settings.title.module settings')); ?></h3>
            </div>
            <style>
                a.active {
                    text-decoration: none;
                    background-color: #eee;
                }
            </style>
    		<ul class="nav nav-list">
    		  <?php foreach ($modulesWithSettings as $module => $settings): ?>
                  <li>
                    <a href="<?php echo e(route('dashboard.module.settings', [$module])); ?>"
                       class="<?php echo e($module === $currentModule->getName() ? 'active' : ''); ?>">
                        <?php echo e(ucfirst($module)); ?>

                        <small class="badge pull-right bg-blue"><?php echo e(count($settings)); ?></small>
                    </a>
                    </li>
              <?php endforeach; ?>
    		</ul>
    	</div>
    </div>
    <div class="col-md-10">
        <?php if ($translatableSettings): ?>
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><?php echo e(trans('core::core.title.translatable fields')); ?></h3>
                </div>
                <div class="box-body">
                    <div class="nav-tabs-custom">
                        <?php echo $__env->make('partials.form-tab-headers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <div class="tab-content">
                            <?php $i = 0; ?>
                            <?php foreach (LaravelLocalization::getSupportedLocales() as $locale => $language): ?>
                                <?php $i++; ?>
                                <div class="tab-pane <?php echo e(App::getLocale() == $locale ? 'active' : ''); ?>" id="tab_<?php echo e($i); ?>">
                                    <?php echo $__env->make('setting::admin.partials.fields', ['settings' => $translatableSettings], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($plainSettings): ?>
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo e(trans('core::core.title.non translatable fields')); ?></h3>
            </div>
            <div class="box-body">
                <?php echo $__env->make('setting::admin.partials.fields', ['settings' => $plainSettings], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <?php endif; ?>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary btn-flat"><?php echo e(trans('core::core.button.update')); ?></button>
            <a class="btn btn-danger pull-right btn-flat" href="<?php echo e(route('admin.setting.settings.index')); ?>"><i class="fa fa-times"></i> <?php echo e(trans('core::core.button.cancel')); ?></a>
        </div>
    </div>
</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js-stack'); ?>
<script>
$( document ).ready(function() {
    $('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({
        checkboxClass: 'icheckbox_flat-blue',
        radioClass: 'iradio_flat-blue'
    });

    $('input[type="checkbox"]').on('ifChecked', function(){
      $(this).parent().find('input[type=hidden]').remove();
    });

    $('input[type="checkbox"]').on('ifUnchecked', function(){
      var name = $(this).attr('name'),
          input = '<input type="hidden" name="' + name + '" value="0" />';
      $(this).parent().append(input);
    });
});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>