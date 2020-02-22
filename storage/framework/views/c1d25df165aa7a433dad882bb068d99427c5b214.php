<div class="form-group">
    <label for="<?php echo e($settingName); ?>"><?php echo e(trans($moduleInfo['description'])); ?></label>
    <select class="form-control" name="<?php echo e($settingName); ?>" id="<?php echo e($settingName); ?>">
        <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($name); ?>" <?php echo e(isset($dbSettings[$settingName]) && $dbSettings[$settingName]->plainValue == $name ? 'selected' : ''); ?>>
                <?php echo e($theme->getName()); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
