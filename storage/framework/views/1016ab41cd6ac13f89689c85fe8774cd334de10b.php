<div class='form-group'>
    <?php echo Form::label($settingName, trans($moduleInfo['description'])); ?>

    <?php if (isset($dbSettings[$settingName]) && $dbSettings[$settingName]->plainValue !== null): ?>
        <?php echo Form::textarea($settingName, old($settingName, $dbSettings[$settingName]->plainValue), ['class' => 'form-control', 'placeholder' => trans($moduleInfo['description'])]); ?>

    <?php else: ?>
        <?php echo Form::textarea($settingName, old($settingName), ['class' => 'form-control', 'placeholder' => trans($moduleInfo['description'])]); ?>

    <?php endif; ?>
</div>
