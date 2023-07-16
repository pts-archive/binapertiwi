<?php $__env->startComponent('mail::message'); ?>
# <?php echo e(trans('mail.hello')); ?> <?php echo e($target->present()->fullName()); ?>,

<?php echo e(trans('mail.the_following_item')); ?>


<?php if($item->getImageUrl()): ?>
<center><img src="<?php echo e($item->getImageUrl()); ?>" alt="Asset" style="max-width: 570px;"></center>
<?php endif; ?>

<?php $__env->startComponent('mail::table'); ?>
|        |          |
| ------------- | ------------- |
<?php if((isset($item->name)) && ($item->name!='')): ?>
| **<?php echo e(trans('mail.asset_name')); ?>** | <?php echo e($item->name); ?> |
<?php endif; ?>
| **<?php echo e(trans('mail.asset_tag')); ?>** | <?php echo e($item->asset_tag); ?> |
<?php if(isset($item->manufacturer)): ?>
| **<?php echo e(trans('general.manufacturer')); ?>** | <?php echo e($item->manufacturer->name); ?> |
<?php endif; ?>
<?php if(isset($item->model)): ?>
| **<?php echo e(trans('general.asset_model')); ?>** | <?php echo e($item->model->name); ?> |
<?php endif; ?>
<?php if(isset($item->model->model_number)): ?>
| **<?php echo e(trans('general.model_no')); ?>** | <?php echo e($item->model->model_number); ?> |
<?php endif; ?>
<?php if(isset($item->serial)): ?>
| **<?php echo e(trans('mail.serial')); ?>** | <?php echo e($item->serial); ?> |
<?php endif; ?>
<?php if(isset($last_checkout)): ?>
| **<?php echo e(trans('mail.checkout_date')); ?>** | <?php echo e($last_checkout); ?> |
<?php endif; ?>
<?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if(($item->{ $field->db_column_name() }!='') && ($field->show_in_email) && ($field->field_encrypted=='0')): ?>
| **<?php echo e($field->name); ?>** | <?php echo e($item->{ $field->db_column_name() }); ?> |
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if($admin): ?>
| **<?php echo e(trans('general.administrator')); ?>** | <?php echo e($admin->present()->fullName()); ?> |
<?php endif; ?>
<?php if($note): ?>
| **<?php echo e(trans('mail.additional_notes')); ?>** | <?php echo e($note); ?> |
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php echo e(trans('mail.best_regards')); ?>


<?php echo e($snipeSettings->site_name); ?>


<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/notifications/markdown/checkin-asset.blade.php ENDPATH**/ ?>