<?php $__env->startSection('title'); ?>
    <?php echo e(trans('admin/settings/general.purge')); ?>

##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
<a href="<?php echo e(URL::previous()); ?>" class="btn btn-primary pull-right">
  <?php echo e(trans('general.back')); ?></a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-9">
		<div class="box box-default">
			<div class="box-body">
				<?php echo nl2br($output); ?>

			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/settings/purge.blade.php ENDPATH**/ ?>