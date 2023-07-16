<!-- Datepicker -->
<div class="form-group<?php echo e($errors->has($fieldname) ? ' has-error' : ''); ?>">
    <?php echo e(Form::label($fieldname, $translated_name, array('class' => 'col-md-3 control-label'))); ?>

    <div class="input-group col-md-3">
        <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd"  data-autoclose="true">
            <input type="text" class="form-control" placeholder="<?php echo e(trans('general.select_date')); ?>" name="<?php echo e($fieldname); ?>" id="<?php echo e($fieldname); ?>" value="<?php echo e(old($fieldname, ($item->{$fieldname}) ? $item->{$fieldname}->format('Y-m-d') : '')); ?>">
            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
        </div>
        <?php echo $errors->first($fieldname, '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

    </div>
</div>

<?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/partials/forms/edit/datepicker.blade.php ENDPATH**/ ?>