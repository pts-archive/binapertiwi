


<?php $__env->startSection('inputFields'); ?>

<?php echo $__env->make('partials.forms.edit.name', ['translated_name' => trans('admin/models/table.name'), 'required' => 'true'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.forms.edit.manufacturer-select', ['translated_name' => trans('general.manufacturer'), 'fieldname' => 'manufacturer_id', 'required' => 'true'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.forms.edit.category-select', ['translated_name' => trans('admin/categories/general.category_name'), 'fieldname' => 'category_id', 'required' => 'true', 'category_type' => 'asset'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.forms.edit.model_number', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.forms.edit.depreciation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- EOL -->

<div class="form-group <?php echo e($errors->has('eol') ? ' has-error' : ''); ?>">
    <label for="eol" class="col-md-3 control-label"><?php echo e(trans('general.eol')); ?></label>
    <div class="col-md-2">
        <div class="input-group">
            <input class="col-md-1 form-control" type="text" name="eol" id="eol" value="<?php echo e(Request::old('eol', isset($item->eol)) ? $item->eol : ''); ?>" />
            <span class="input-group-addon">
                <?php echo e(trans('general.months')); ?>

            </span>
        </div>
    </div>
    <div class="col-md-9 col-md-offset-3">
        <?php echo $errors->first('eol', '<span class="alert-msg" aria-hidden="true"><br><i class="fa fa-times"></i> :message</span>'); ?>

    </div>
</div>

<!-- Custom Fieldset -->
<div id="app">
    <div class="form-group <?php echo e($errors->has('custom_fieldset') ? ' has-error' : ''); ?>">
        <label for="custom_fieldset" class="col-md-3 control-label"><?php echo e(trans('admin/models/general.fieldset')); ?></label>
        <div class="col-md-7">
            <?php echo e(Form::select('custom_fieldset', \App\Helpers\Helper::customFieldsetList(),old('custom_fieldset', $item->fieldset_id), array('class'=>'select2 js-fieldset-field', 'style'=>'width:350px', 'aria-label'=>'custom_fieldset'))); ?>

            <?php echo $errors->first('custom_fieldset', '<span class="alert-msg" aria-hidden="true"><br><i class="fa fa-times"></i> :message</span>'); ?>

            <label class="m-l-xs">
                <?php echo e(Form::checkbox('add_default_values', 1, Request::old('add_default_values'), ['class' => 'js-default-values-toggler'])); ?>

                <?php echo e(trans('admin/models/general.add_default_values')); ?>

            </label>
        </div>
    </div>

    <fieldset-default-values
        model-id="<?php echo e($item->id ?: ''); ?>"
        fieldset-id="<?php echo e(!empty($item->fieldset) ? $item->fieldset->id : Request::old('custom_fieldset')); ?>"
        previous-input="<?php echo e(json_encode(Request::old('default_values'))); ?>">
    </fieldset-default-values>
</div>

<?php echo $__env->make('partials.forms.edit.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.forms.edit.requestable', ['requestable_text' => trans('admin/models/general.requestable')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Image -->
<?php if(($item->image) && ($item->image!='')): ?>
<div class="form-group <?php echo e($errors->has('image_delete') ? 'has-error' : ''); ?>">
    <label class="col-md-3 control-label" for="image_delete"><?php echo e(trans('general.image_delete')); ?></label>
    <div class="col-md-5">
        <label for="image_delete">
            <?php echo e(Form::checkbox('image_delete', '1', old('image_delete'), array('class' => 'minimal', 'aria-label'=>'required'))); ?>

        </label>
        <br>
        <img src="<?php echo e(url('/')); ?>/uploads/models/<?php echo e($item->image); ?>" alt="Image for <?php echo e($item->name); ?>" class="img-responsive">
        <?php echo $errors->first('image_delete', '<span class="alert-msg" aria-hidden="true"><br>:message</span>'); ?>

    </div>
</div>


<?php endif; ?>

<?php echo $__env->make('partials.forms.edit.image-upload', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
<script nonce="<?php echo e(csrf_token()); ?>">
    new Vue({
        el: '#app'
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/edit-form', [
    'createText' => trans('admin/models/table.create') ,
    'updateText' => trans('admin/models/table.update'),
    'topSubmit' => true,
    'helpPosition' => 'right',
    'helpText' => trans('admin/models/general.about_models_text'),
    'formAction' => (isset($item->id)) ? route('models.update', ['model' => $item->id]) : route('models.store'),
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/models/edit.blade.php ENDPATH**/ ?>