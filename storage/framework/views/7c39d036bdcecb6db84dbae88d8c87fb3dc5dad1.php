<!-- Asset -->
<div id="assigned_asset" class="form-group<?php echo e($errors->has($fieldname) ? ' has-error' : ''); ?>"<?php echo (isset($style)) ? ' style="'.e($style).'"' : ''; ?>>
    <?php echo e(Form::label($fieldname, $translated_name, array('class' => 'col-md-3 control-label'))); ?>

    <div class="col-md-7<?php echo e(((isset($required) && ($required =='true'))) ?  ' required' : ''); ?>">
        <select class="js-data-ajax select2" data-endpoint="hardware" data-placeholder="<?php echo e(trans('general.select_asset')); ?>" aria-label="<?php echo e($fieldname); ?>" name="<?php echo e($fieldname); ?>" style="width: 100%" id="<?php echo e((isset($select_id)) ? $select_id : 'assigned_asset_select'); ?>"<?php echo e((isset($multiple)) ? ' multiple' : ''); ?><?php echo (!empty($asset_status_type)) ? ' data-asset-status-type="' . $asset_status_type . '"' : ''; ?>>

            <?php if((!isset($unselect)) && ($asset_id = old($fieldname, (isset($asset) ? $asset->id  : (isset($item) ? $item->{$fieldname} : ''))))): ?>
                <option value="<?php echo e($asset_id); ?>" selected="selected" role="option" aria-selected="true"  role="option">
                    <?php echo e((\App\Models\Asset::find($asset_id)) ? \App\Models\Asset::find($asset_id)->present()->fullName : ''); ?>

                </option>
            <?php else: ?>
                <?php if(!isset($multiple)): ?>
                    <option value=""  role="option"><?php echo e(trans('general.select_asset')); ?></option>
                <?php endif; ?>
            <?php endif; ?>
        </select>
    </div>
    <?php echo $errors->first($fieldname, '<div class="col-md-8 col-md-offset-3"><span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span></div>'); ?>


</div>
<?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/partials/forms/edit/asset-select.blade.php ENDPATH**/ ?>