
<!-- QTY -->
<div class="form-group <?php echo e($errors->has('qty') ? ' has-error' : ''); ?>">
    <label for="qty" class="col-md-3 control-label"><?php echo e(trans('general.quantity')); ?></label>
    <div class="col-md-7<?php echo e((\App\Helpers\Helper::checkIfRequired($item, 'qty')) ? ' required' : ''); ?>">
       <div class="col-md-2" style="padding-left:0px">
           <input class="form-control" type="text" name="qty" aria-label="qty" id="qty" value="<?php echo e(old('qty', $item->qty)); ?>" <?php echo (\App\Helpers\Helper::checkIfRequired($item, 'qty')) ? ' data-validation="required" required' : ''; ?>/>
       </div>
       <?php echo $errors->first('qty', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

   </div>
</div>
<?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/partials/forms/edit/quantity.blade.php ENDPATH**/ ?>