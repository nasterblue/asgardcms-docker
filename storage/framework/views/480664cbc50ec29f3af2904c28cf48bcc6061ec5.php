<div class="form-group">
    <label for="<?php echo e($settingName); ?>"><?php echo e(trans($moduleInfo['description'])); ?></label>
    <select multiple class="locales" name="<?php echo e($settingName); ?>[]" id="<?php echo e($settingName); ?>">
        <?php $__currentLoopData = $locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($id); ?>" <?php echo e(isset($dbSettings[$settingName]) && isset(array_flip(json_decode($dbSettings[$settingName]->plainValue))[$id]) ? 'selected' : ''); ?>>
            <?php echo e(array_get($locale, 'name')); ?>

        </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<script>
    $( document ).ready(function() {
        $('.locales').selectize({
            delimiter: ',',
            plugins: ['remove_button']
        });
    });
</script>
