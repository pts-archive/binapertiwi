<?php $__env->startSection('title'); ?>
    Personal API Keys
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>


        <div class="row">
            <div class="col-md-8">

                 <?php if(!config('app.lock_passwords')): ?>
                    <passport-personal-access-tokens
                        token-url="<?php echo e(url('oauth/personal-access-tokens')); ?>"
                        scopes-url="<?php echo e(url('oauth/scopes')); ?>">
                    </passport-personal-access-tokens>
                 <?php else: ?>
                     <p class="help-block"><?php echo e(trans('general.feature_disabled')); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <div class="alert alert-warning"><i class="fa fa-warning faa-pulse animated"></i>
                    When generating an API token, be sure to copy it down immediately as they
                    will not be visible to you again. </div>

                <p>Your API base url is located at:<br>
                    <code><?php echo e(url('/api/v1')); ?>/&lt;endpoint&gt;</code></p>

                <p>API tokens are set to expire in:
                    <strong><?php echo e(config('passport.expiration_years')); ?> years</strong>.</p>


                <p>Please check the <a href="https://snipe-it.readme.io/reference" target="_blank">API reference</a> to
                    find specific API endpoints and additional API documentation.</p>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
<script nonce="<?php echo e(csrf_token()); ?>">
    new Vue({
        el: "#app",
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/account/api.blade.php ENDPATH**/ ?>