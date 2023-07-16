<?php $__env->startSection('title'); ?>
  <?php echo e(trans('admin/custom_fields/general.create_fieldset')); ?>

##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
<a href="<?php echo e(URL::previous()); ?>" class="btn btn-primary pull-right">
  <?php echo e(trans('general.back')); ?></a>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-9">

  <?php echo e(Form::open(['route' => 'fieldsets.store', 'class'=>'form-horizontal'])); ?>

    <!-- Horizontal Form -->
    <div class="box box-default">
      <div class="box-body">

          <!-- Name -->
        <div class="form-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
          <label for="name" class="col-md-4 control-label">
            <?php echo e(trans('admin/custom_fields/general.fieldset_name')); ?>

            <i class='fa fa-asterisk'></i>
          </label>
          <div class="col-md-6">
            <input class="form-control" type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" />
            <?php echo $errors->first('name', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

          </div>
        </div>

      </div> <!-- /.box-body-->
      <div class="box-footer text-right">
        <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white" aria-hidden="true"></i> <?php echo e(trans('general.save')); ?></button>
      </div>

    </div> <!-- /.box.box-default-->
    <?php echo e(Form::close()); ?>

  </div>
  <div class="col-md-3">
    <h2>About Fieldsets</h4>
    <p>Fieldsets work like containers of the custom fields you've created. This allows you to group commonly used custom attributes together for easy associations. </p>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/custom_fields/fieldsets/edit.blade.php ENDPATH**/ ?>