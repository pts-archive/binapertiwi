<?php $__env->startSection('content'); ?>
<style>
    .input-group-addon {
        width: 30px;
    }
</style>

##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('inputFields'); ?>

<?php echo $__env->make('partials.forms.edit.name', ['translated_name' => trans('general.name')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Label type -->
<div class="form-group<?php echo e($errors->has('statuslabel_types') ? ' has-error' : ''); ?>">
    <label for="statuslabel_types" class="col-md-3 control-label"><?php echo e(trans('admin/statuslabels/table.status_type')); ?> </label>
    <div class="col-md-7 required">
        <?php echo e(Form::select('statuslabel_types', $statuslabel_types, $item->getStatuslabelType(), array('class'=>'select2', 'style'=>'min-width:400px', 'aria-label'=>'statuslabel_types'))); ?>

        <?php echo $errors->first('statuslabel_types', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

    </div>
</div>

<!-- Chart color -->
<div class="form-group<?php echo e($errors->has('color') ? ' has-error' : ''); ?>">
    <?php echo e(Form::label('color', trans('admin/statuslabels/table.color'), ['class' => 'col-md-3 control-label'])); ?>

    <div class="col-md-2">
        <div class="input-group color">
            <?php echo e(Form::text('color', Request::old('color', $item->color), array('class' => 'form-control', 'style' => 'width: 100px;', 'maxlength'=>'10'))); ?>

            <div class="input-group-addon"><i></i></div>
        </div><!-- /.input group -->
        <?php echo $errors->first('header_color', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

    </div>
</div>

<?php echo $__env->make('partials.forms.edit.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Show in Nav -->
<div class="form-group<?php echo e($errors->has('notes') ? ' has-error' : ''); ?>">

    <label class="col-md-offset-3" style="padding-left: 15px;">
        <input type="checkbox" value="1" name="show_in_nav" id="show_in_nav" class="minimal" <?php echo e(Request::old('show_in_nav', $item->show_in_nav) == '1' ? ' checked="checked"' : ''); ?>> <?php echo e(trans('admin/statuslabels/table.show_in_nav')); ?>

    </label>
</div>

<!-- Set as Default -->
<div class="form-group<?php echo e($errors->has('default_label') ? ' has-error' : ''); ?>">

    <label class="col-md-offset-3" style="padding-left: 15px;">
        <input type="checkbox" value="1" name="default_label" id="default_label" class="minimal" <?php echo e(Request::old('default_label', $item->default_label) == '1' ? ' checked="checked"' : ''); ?>> <?php echo e(trans('admin/statuslabels/table.default_label')); ?>

    </label>
    <p class="col-md-offset-3 help-block"> <?php echo e(trans('admin/statuslabels/table.default_label_help')); ?></p>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
    <!-- bootstrap color picker -->
    <script nonce="<?php echo e(csrf_token()); ?>">
        //color picker with addon
        $(".color").colorpicker();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/edit-form', [
    'createText' => trans('admin/statuslabels/table.create') ,
    'updateText' => trans('admin/statuslabels/table.update'),
    'helpTitle' => trans('admin/statuslabels/table.about'),
    'helpText' => trans('admin/statuslabels/table.info'),
    'formAction' => (isset($item->id)) ? route('statuslabels.update', ['statuslabel' => $item->id]) : route('statuslabels.store'),
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/statuslabels/edit.blade.php ENDPATH**/ ?>