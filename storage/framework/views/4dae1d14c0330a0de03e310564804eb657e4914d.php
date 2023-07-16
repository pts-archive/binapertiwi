<?php $__env->startSection('inputFields'); ?>

    <?php echo $__env->make('partials.forms.edit.name', ['translated_name' => trans('admin/departments/table.name')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Company -->
    <?php if(\App\Models\Company::canManageUsersCompanies()): ?>
        <?php echo $__env->make('partials.forms.edit.company-select', ['translated_name' => trans('general.company'), 'fieldname' => 'company_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>


    <!-- Manager -->
    <?php echo $__env->make('partials.forms.edit.user-select', ['translated_name' => trans('admin/users/table.manager'), 'fieldname' => 'manager_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Location -->
    <?php echo $__env->make('partials.forms.edit.location-select', ['translated_name' => trans('general.location'), 'fieldname' => 'location_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Image -->
    <?php if($item->image): ?>
        <div class="form-group <?php echo e($errors->has('image_delete') ? 'has-error' : ''); ?>">
            <label class="col-md-3 control-label" for="image_delete"><?php echo e(trans('general.image_delete')); ?></label>
            <div class="col-md-5">
                <?php echo e(Form::checkbox('image_delete')); ?>

                <img src="<?php echo e(Storage::disk('public')->url(app('departments_upload_path').e($item->image))); ?>" class="img-responsive" />
                <?php echo $errors->first('image_delete', '<span class="alert-msg">:message</span>'); ?>

            </div>
        </div>
    <?php endif; ?>

    <?php echo $__env->make('partials.forms.edit.image-upload', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/edit-form', [
    'createText' => trans('admin/departments/table.create') ,
    'updateText' => trans('admin/departments/table.update'),
    'formAction' => (isset($item->id)) ? route('departments.update', ['department' => $item->id]) : route('departments.store'),
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/departments/edit.blade.php ENDPATH**/ ?>