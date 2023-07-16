<!-- Location -->
<div id="<?php echo e($fieldname); ?>" class="form-group<?php echo e($errors->has($fieldname) ? ' has-error' : ''); ?>"<?php echo (isset($style)) ? ' style="'.e($style).'"' : ''; ?>>

    <?php echo e(Form::label($fieldname, $translated_name, array('class' => 'col-md-3 control-label'))); ?>

    <div class="col-md-6<?php echo e(((isset($required) && ($required =='true'))) ?  ' required' : ''); ?>">
        <select class="js-data-ajax" data-endpoint="locations" data-placeholder="<?php echo e(trans('general.select_location')); ?>" name="<?php echo e($fieldname); ?>" style="width: 100%" id="<?php echo e($fieldname); ?>_location_select" aria-label="<?php echo e($fieldname); ?>" <?php echo ((isset($item)) && (\App\Helpers\Helper::checkIfRequired($item, $fieldname))) ? ' data-validation="required" required' : ''; ?>>
            <?php if($location_id = old($fieldname, (isset($item)) ? $item->{$fieldname} : '')): ?>
                <option value="<?php echo e($location_id); ?>" selected="selected" role="option" aria-selected="true"  role="option">
                    <?php echo e((\App\Models\Location::find($location_id)) ? \App\Models\Location::find($location_id)->name : ''); ?>

                </option>
            <?php else: ?>
                <option value=""  role="option"><?php echo e(trans('general.select_location')); ?></option>
            <?php endif; ?>
        </select>
    </div>

    <div class="col-md-1 col-sm-1 text-left">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', \App\Models\Location::class)): ?>
            <?php if((!isset($hide_new)) || ($hide_new!='true')): ?>
            <a href='<?php echo e(route('modal.show', 'location')); ?>' data-toggle="modal"  data-target="#createModal" data-select='<?php echo e($fieldname); ?>_location_select' class="btn btn-sm btn-primary">New</a>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <?php echo $errors->first($fieldname, '<div class="col-md-8 col-md-offset-3"><span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span></div>'); ?>


    <?php if(isset($help_text)): ?>
    <div class="col-md-7 col-sm-11 col-md-offset-3">
        <p class="help-block"><?php echo e($help_text); ?></p>
    </div>
    <?php endif; ?>


</div>



<?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/partials/forms/edit/location-select.blade.php ENDPATH**/ ?>