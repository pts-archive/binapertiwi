<?php $__env->startComponent('mail::layout'); ?>

<?php $__env->slot('header'); ?>
<?php $__env->startComponent('mail::header', ['url' => config('app.url')]); ?>
<?php if(isset($snipeSettings) && ($snipeSettings->show_images_in_email=='1' ) && ($snipeSettings::setupCompleted())): ?>

<?php if($snipeSettings->brand == '3'): ?>

<?php if($snipeSettings->email_logo!=''): ?>
<img style="max-height: 100px; vertical-align:middle;" src="<?php echo e(\Storage::disk('public')->url(e($snipeSettings->email_logo))); ?>">
<?php elseif($snipeSettings->logo!=''): ?>
<img style="max-height: 100px; vertical-align:middle;" src="<?php echo e(\Storage::disk('public')->url(e($snipeSettings->logo))); ?>">
<?php endif; ?>
<?php echo e($snipeSettings->site_name); ?>

<br><br>

<?php elseif($snipeSettings->brand == '2'): ?>
<?php if($snipeSettings->email_logo!=''): ?>

<img style="max-width: 100px; vertical-align:middle;" src="<?php echo e(\Storage::disk('public')->url(e($snipeSettings->email_logo))); ?>">
<?php elseif($snipeSettings->logo!=''): ?>
<img style="max-width: 100px; vertical-align:middle;" src="<?php echo e(\Storage::disk('public')->url(e($snipeSettings->logo))); ?>">
<?php endif; ?>

<?php else: ?>
<?php echo e($snipeSettings->site_name); ?>

<?php endif; ?>

<?php else: ?>
Snipe-IT
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php $__env->endSlot(); ?>


<?php echo e($slot); ?>



<?php if(isset($subcopy)): ?>
<?php $__env->slot('subcopy'); ?>
<?php $__env->startComponent('mail::subcopy'); ?>
<?php echo e($subcopy); ?>

<?php echo $__env->renderComponent(); ?>
<?php $__env->endSlot(); ?>
<?php endif; ?>


<?php $__env->slot('footer'); ?>
<?php $__env->startComponent('mail::footer'); ?>
<?php if($snipeSettings::setupCompleted()): ?>
© <?php echo e(date('Y')); ?> <?php echo e($snipeSettings->site_name); ?>. All rights reserved.
<?php else: ?>
© <?php echo e(date('Y')); ?> Snipe-IT. All rights reserved.
<?php endif; ?>

<?php if($snipeSettings->privacy_policy_link!=''): ?>
<a href="<?php echo e($snipeSettings->privacy_policy_link); ?>"><?php echo e(trans('admin/settings/general.privacy_policy')); ?></a>
<?php endif; ?>

<?php echo $__env->renderComponent(); ?>
<?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/vendor/mail/html/message.blade.php ENDPATH**/ ?>