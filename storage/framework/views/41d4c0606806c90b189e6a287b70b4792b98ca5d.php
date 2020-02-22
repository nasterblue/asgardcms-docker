<script>
    var Asgard = {
        backendUrl: '<?php echo e(config('asgard.core.core.admin-prefix')); ?>',
        mediaGridCkEditor : '<?php echo e(route('media.grid.ckeditor')); ?>',
        mediaGridSelectUrl: '<?php echo e(route('media.grid.select')); ?>',
        dropzonePostUrl: '<?php echo e(route('api.media.store-dropzone')); ?>',
        mediaSortUrl: '<?php echo e(route('api.media.sort')); ?>',
        mediaLinkUrl: '<?php echo e(route('api.media.link')); ?>',
        mediaUnlinkUrl: '<?php echo e(route('api.media.unlink')); ?>'
    };
</script>
