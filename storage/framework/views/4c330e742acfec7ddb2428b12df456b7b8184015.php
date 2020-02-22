<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="navbar-btn sidebar-toggle" data-toggle="push-menu" role="button" style="margin: 0;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <?php if (is_module_enabled('Notification')): ?>
            <?php echo $__env->make('notification::partials.notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>
            <li>
                <a href="" class="publicUrl" style="display: none">
                    <i class="fa fa-eye"></i> <?php echo e(trans('page::pages.view-page')); ?>

                </a>
            </li>
            <li><a href="<?php echo e(url('/')); ?>"><i class="fa fa-eye"></i> <?php echo e(trans('core::core.general.view website')); ?></a></li>
            <?php if(count(LaravelLocalization::getSupportedLocales())>1): ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-flag"></i>
                    <span>
                        <?php echo e(LaravelLocalization::getCurrentLocaleName()); ?>

                        <i class="caret"></i>
                    </span>
                </a>
                <ul class="dropdown-menu language-menu">
                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="<?php echo e(App::getLocale() == $localeCode ? 'active' : ''); ?>">
                            <a rel="alternate" lang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode)); ?>">
                                <?php echo $properties['native']; ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
            <?php endif; ?>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i>
                    <span>
                        <?php if ($user->present()->fullname() != ' '): ?>
                            <?php echo e($user->present()->fullName()); ?>

                        <?php else: ?>
                            <em><?php echo e(trans('core::core.general.complete your profile')); ?>.</em>
                        <?php endif; ?>
                        <i class="caret"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header bg-light-blue">
                        <img src="<?php echo e($user->present()->gravatar()); ?>" class="img-circle" alt="User Image" />
                        <p>
                            <?php if ($user->present()->fullname() != ' '): ?>
                                <?php echo e($user->present()->fullname()); ?>

                            <?php else: ?>
                                <em><?php echo e(trans('core::core.general.complete your profile')); ?>.</em>
                            <?php endif; ?>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="<?php echo e(route('admin.account.profile.edit')); ?>" class="btn btn-default btn-flat">
                                <?php echo e(trans('core::core.general.profile')); ?>

                            </a>
                        </div>
                        <div class="pull-right">
                            <a href="<?php echo e(route('logout')); ?>" class="btn btn-danger btn-flat">
                                <?php echo e(trans('core::core.general.sign out')); ?>

                            </a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
