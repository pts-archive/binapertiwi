<!-- Notes -->
<div class="form-group <?php echo e($errors->has('notes') ? ' has-error' : ''); ?>">
    <label for="notes" class="col-md-3 control-label"><?php echo e(trans('admin/hardware/form.notes')); ?></label>
    <div class="col-md-7 col-sm-12">
        <textarea class="col-md-6 form-control" id="notes" aria-label="notes" name="notes"><?php echo e(old('notes', $item->notes)); ?></textarea>
        <?php echo $errors->first('notes', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>
    </div>
</div>
<?php /**PATH D:\asset.binapertiwi.co.id\resources\views/partials/forms/edit/notes.blade.php ENDPATH**/ ?>