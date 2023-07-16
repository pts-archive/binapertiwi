<!-- Order Number -->
<div class="form-group <?php echo e($errors->has('order_number') ? ' has-error' : ''); ?>">
   <label for="order_number" class="col-md-3 control-label"><?php echo e(trans('general.order_number')); ?></label>
   <div class="col-md-7 col-sm-12">
       <input class="form-control" type="text" name="order_number" aria-label="order_number" id="order_number" value="<?php echo e(old('order_number', $item->order_number)); ?>" />
       <?php echo $errors->first('order_number', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

   </div>
</div>
<?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/partials/forms/edit/order_number.blade.php ENDPATH**/ ?>