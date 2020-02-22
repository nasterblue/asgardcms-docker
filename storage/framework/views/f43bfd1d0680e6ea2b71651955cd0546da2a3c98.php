<nav class="navbar navbar-default <?php if(auth()->guard()->guest()): ?> navbar-fixed-top <?php endif; ?>" style="<?php if(auth()->guard()->check()): ?> margin-top: -52px <?php endif; ?>">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo e(URL::to('/')); ?>"><?php echo SettingDirective::show(['core::site-name']); ?></a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <?php echo MenuDirective::show(['main']); ?>
        </div>
    </div>
</nav>
