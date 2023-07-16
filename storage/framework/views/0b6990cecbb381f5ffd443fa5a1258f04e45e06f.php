<?php $__env->startSection('inputFields'); ?>

<?php echo $__env->make('partials.forms.edit.name', ['translated_name' => trans('admin/depreciations/general.depreciation_name')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Months -->
<div class="form-group <?php echo e($errors->has('months') ? ' has-error' : ''); ?>">
    <label for="months" class="col-md-3 control-label">
        <?php echo e(trans('admin/depreciations/general.number_of_months')); ?>

    </label>
    <div class="col-md-7<?php echo e((\App\Helpers\Helper::checkIfRequired($item, 'months')) ? ' required' : ''); ?>">
        <div class="col-md-2" style="padding-left:0px">
            <input class="form-control" type="text" name="months" id="months" value="<?php echo e(Request::old('months', $item->months)); ?>" style="width: 80px;" />
        </div>
    </div>
    <?php echo $errors->first('months', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/edit-form', [
    'createText' => trans('admin/depreciations/general.create') ,
    'updateText' => trans('admin/depreciations/general.update'),
    'helpPosition'  => 'right',
    'helpText' => trans('help.depreciations'),
    'formAction' => (isset($item->id)) ? route('depreciations.update', ['depreciation' => $item->id]) : route('depreciations.store'),
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/depreciations/edit.blade.php ENDPATH**/ ?>