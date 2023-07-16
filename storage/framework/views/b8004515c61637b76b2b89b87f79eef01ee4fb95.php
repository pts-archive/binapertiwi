<div class="form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
    <?php echo e(Form::label('email', trans('admin/suppliers/table.email'), array('class' => 'col-md-3 control-label'))); ?>

    <div class="col-md-7">
    <?php echo e(Form::text('email', old('email', $item->email), array('class' => 'form-control'))); ?>

        <?php echo $errors->first('email', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

    </div>
</div>
<?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/partials/forms/edit/email.blade.php ENDPATH**/ ?>