<?php $__env->startSection('inputFields'); ?>

<?php echo $__env->make('partials.forms.edit.name', ['translated_name' => trans('admin/suppliers/table.name')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.forms.edit.address', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="form-group <?php echo e($errors->has('contact') ? ' has-error' : ''); ?>">
    <?php echo e(Form::label('contact', trans('admin/suppliers/table.contact'), array('class' => 'col-md-3 control-label'))); ?>

    <div class="col-md-7">
        <?php echo e(Form::text('contact', old('contact', $item->contact), array('class' => 'form-control'))); ?>

        <?php echo $errors->first('contact', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

    </div>
</div>

<?php echo $__env->make('partials.forms.edit.phone', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="form-group <?php echo e($errors->has('fax') ? ' has-error' : ''); ?>">
    <?php echo e(Form::label('fax', trans('admin/suppliers/table.fax'), array('class' => 'col-md-3 control-label'))); ?>

    <div class="col-md-7">
        <?php echo e(Form::text('fax', old('fax', $item->fax), array('class' => 'form-control'))); ?>

        <?php echo $errors->first('fax', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

    </div>
</div>

<?php echo $__env->make('partials.forms.edit.email', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="form-group <?php echo e($errors->has('url') ? ' has-error' : ''); ?>">
    <?php echo e(Form::label('url', trans('admin/suppliers/table.url'), array('class' => 'col-md-3 control-label'))); ?>

    <div class="col-md-7">
        <?php echo e(Form::text('url', old('url', $item->url), array('class' => 'form-control'))); ?>

        <?php echo $errors->first('url', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

    </div>
</div>

<?php echo $__env->make('partials.forms.edit.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Image -->
<?php if(($item->image) && ($item->image!='')): ?>
    <div class="form-group <?php echo e($errors->has('image_delete') ? 'has-error' : ''); ?>">
        <label class="col-md-3 control-label" for="image_delete"><?php echo e(trans('general.image_delete')); ?></label>
        <div class="col-md-5">
            <label for="image_delete">
                <?php echo e(Form::checkbox('image_delete', '1', old('image_delete'), array('class' => 'minimal', 'aria-label'=>'required'))); ?>

            </label>
            <br>
            <img src="<?php echo e(url('/')); ?>/uploads/suppliers/<?php echo e($item->image); ?>" alt="Image for <?php echo e($item->name); ?>" class="img-responsive">
            <?php echo $errors->first('image_delete', '<span class="alert-msg" aria-hidden="true"><br>:message</span>'); ?>

        </div>
    </div>


<?php endif; ?>

<?php echo $__env->make('partials.forms.edit.image-upload', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/edit-form', [
    'createText' => trans('admin/suppliers/table.create') ,
    'updateText' => trans('admin/suppliers/table.update'),
    'helpTitle' => trans('admin/suppliers/table.about_suppliers_title'),
    'helpText' => trans('admin/suppliers/table.about_suppliers_text'),
    'formAction' => (isset($item->id)) ? route('suppliers.update', ['supplier' => $item->id]) : route('suppliers.store'),
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/suppliers/edit.blade.php ENDPATH**/ ?>