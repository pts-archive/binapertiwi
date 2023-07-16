<?php $__env->startSection('inputFields'); ?>
<?php echo $__env->make('partials.forms.edit.name', ['translated_name' => trans('admin/companies/table.name')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Image -->
<?php if($item->image): ?>
    <div class="form-group <?php echo e($errors->has('image_delete') ? 'has-error' : ''); ?>">
        <label class="col-md-3 control-label" for="image_delete"><?php echo e(trans('general.image_delete')); ?></label>
        <div class="col-md-5">
            <?php echo e(Form::checkbox('image_delete')); ?>

            <img src="<?php echo e(Storage::disk('public')->url(app('companies_upload_path').e($item->image))); ?>" class="img-responsive" />
            <?php echo $errors->first('image_delete', '<span class="alert-msg">:message</span>'); ?>

        </div>
    </div>
<?php endif; ?>

<?php echo $__env->make('partials.forms.edit.image-upload', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/edit-form', [
    'createText' => trans('admin/companies/table.create') ,
    'updateText' => trans('admin/companies/table.update'),
    'helpPosition'  => 'right',
    'helpText' => trans('help.companies'),
    'formAction' => (isset($item->id)) ? route('companies.update', ['company' => $item->id]) : route('companies.store'),
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/companies/edit.blade.php ENDPATH**/ ?>