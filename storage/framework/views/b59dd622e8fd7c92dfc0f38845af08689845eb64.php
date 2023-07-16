<div class="form-group <?php echo e($errors->has($logoVariable) ? 'has-error' : ''); ?>">
    <div class="col-md-3">
        <strong><?php echo e($logoLabel); ?></strong>
    </div>

        <?php if(($setting->$logoVariable!='') && (Storage::disk('public')->exists(e($snipeSettings->$logoVariable)))): ?>
        <div class="col-md-9">

            <label for="<?php echo e($logoClearVariable); ?>" style="font-weight: normal">
                <?php echo e(Form::checkbox($logoClearVariable, '1', Request::old($logoClearVariable),array('class' => 'minimal'))); ?>

                Remove current <?php echo e(str_replace('_', ' ', $logoVariable)); ?> image

            </label>


                <br>
                <?php if($logoVariable!='favicon'): ?>
                    <a href="<?php echo e(Storage::disk('public')->url(e($snipeSettings->$logoVariable))); ?>" data-toggle="lightbox">
                        <img style="max-height: 60px; padding-top: 10px; padding-bottom: 10px; " alt="" src="<?php echo e(Storage::disk('public')->url(e($snipeSettings->$logoVariable))); ?>">
                    </a>
                <?php else: ?>
                    <img style="max-height: 50px; padding-top: 10px; padding-bottom: 10px; " alt="" src="<?php echo e(Storage::disk('public')->url(e($snipeSettings->$logoVariable))); ?>">
                <?php endif; ?>

        </div>
        <div class="col-md-9 col-md-offset-3">
            <?php else: ?>
                <div class="col-md-9">
        <?php endif; ?>




        <label class="btn btn-default">
            <?php echo e(trans('button.select_file')); ?>

            <input type="file" name="<?php echo e($logoVariable); ?>" class="js-uploadFile" id="<?php echo e($logoId); ?>"
                data-maxsize="<?php echo e($maxSize ?? \App\Helpers\Helper::file_upload_max_size()); ?>"
                accept="<?php echo e($allowedTypes ?? 'image/gif,image/jpeg,image/png,image/svg,image/svg+xml'); ?>" style="display:none; max-width: 90%">
        </label>
        <span class='label label-default' id="<?php echo e($logoId); ?>-info"></span>

        <p class="help-block" id="<?php echo e($logoId); ?>-status">
            <?php echo e($helpBlock); ?>

        </p>

        <?php if(config('app.lock_passwords')===true): ?>
            <p class="text-warning"><i class="fa fa-lock"></i> <?php echo e(trans('general.feature_disabled')); ?></p>
        <?php endif; ?>
        <?php echo $errors->first($logoVariable, '<span class="alert-msg">:message</span>'); ?>


    </div>
    <div class="col-md-9 col-md-offset-3">
        <img id="<?php echo e($logoId); ?>-imagePreview" style="max-width: 500px; max-height: 50px;">
    </div>


</div>
<?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/partials/forms/edit/uploadLogo.blade.php ENDPATH**/ ?>