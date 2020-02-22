<div class="checkbox">
    <label for="<?php echo e($settingName); ?>">
        <input id="<?php echo e($settingName); ?>"
                name="<?php echo e($settingName); ?>"
                type="checkbox"
                class="flat-blue"
                <?php echo e(isset($dbSettings[$settingName]) && (bool)$dbSettings[$settingName]->plainValue == true ? 'checked' : ''); ?>

                value="1" />
        <?php echo e(trans($moduleInfo['description'])); ?>

    </label>
</div>
