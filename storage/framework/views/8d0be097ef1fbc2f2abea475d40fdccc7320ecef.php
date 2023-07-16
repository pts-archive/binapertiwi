<?php $__env->startSection('title'); ?>
   OAuth API Settings
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
    <a href="<?php echo e(route('settings.index')); ?>" class="btn btn-default pull-right"><?php echo e(trans('general.back')); ?></a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php if(!config('app.lock_passwords')): ?>
        <div id="app">
            <passport-clients clients-url="<?php echo e(url('oauth/clients')); ?>"></passport-clients>
            <passport-authorized-clients clients-url="<?php echo e(url('oauth/clients')); ?>" tokens-url="<?php echo e(url('oauth/tokens')); ?>"></passport-authorized-clients>
        </div>
    <?php else: ?>
        <p class="text-warning"><i class="fa fa-lock"></i> <?php echo e(trans('general.feature_disabled')); ?></p>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
<script nonce="<?php echo e(csrf_token()); ?>">
    new Vue({
        el: "#app",
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/settings/api.blade.php ENDPATH**/ ?>