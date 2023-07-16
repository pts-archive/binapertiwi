<?php $__env->startSection('title'); ?>
    <?php echo e(trans('general.audit')); ?>

    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <style>

        .input-group {
            padding-left: 0px !important;
        }
    </style>

    <div class="row">
        <!-- left column -->
        <div class="col-md-7">
            <div class="box box-default">

                <?php echo e(Form::open([
                  'method' => 'POST',
                  'route' => ['asset.audit.store', $asset->id],
                  'files' => true,
                  'class' => 'form-horizontal' ])); ?>


                    <div class="box-header with-border">
                        <h2 class="box-title"> <?php echo e(trans('admin/hardware/form.tag')); ?> <?php echo e($asset->asset_tag); ?></h2>
                    </div>
                    <div class="box-body">
                    <?php echo e(csrf_field()); ?>

                    <?php if($asset->model->name): ?>
                        <!-- Asset name -->
                            <div class="form-group <?php echo e($errors->has('name') ? 'error' : ''); ?>">
                                <?php echo e(Form::label('name', trans('admin/hardware/form.model'), array('class' => 'col-md-3 control-label'))); ?>

                                <div class="col-md-8">
                                    <p class="form-control-static"><?php echo e($asset->model->name); ?></p>
                                </div>
                            </div>
                    <?php endif; ?>

                    <!-- Asset Name -->
                        <div class="form-group <?php echo e($errors->has('name') ? 'error' : ''); ?>">
                            <?php echo e(Form::label('name', trans('admin/hardware/form.name'), array('class' => 'col-md-3 control-label'))); ?>

                            <div class="col-md-8">
                                <p class="form-control-static"><?php echo e($asset->name); ?></p>
                            </div>
                        </div>

                        <!-- Locations -->
                    <?php echo $__env->make('partials.forms.edit.location-select', ['translated_name' => trans('general.location'), 'fieldname' => 'location_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <!-- Update location -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-md-9">
                                <label>
                                    <input type="checkbox" value="1" name="update_location" class="minimal" <?php echo e(Request::old('update_location') == '1' ? ' checked="checked"' : ''); ?>> Update asset location
                                </label>

                                <?php echo $__env->make('partials.more-info', ['helpText' => trans('help.audit_help'), 'helpPosition' => 'right'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



                            </div>
                        </div>


                        <!-- Next Audit -->
                        <div class="form-group <?php echo e($errors->has('next_audit_date') ? 'error' : ''); ?>">
                            <?php echo e(Form::label('name', trans('general.next_audit_date'), array('class' => 'col-md-3 control-label'))); ?>

                            <div class="col-md-9">
                                <div class="input-group date col-md-5" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                                    <input type="text" class="form-control" placeholder="<?php echo e(trans('general.next_audit_date')); ?>" name="next_audit_date" id="next_audit_date" value="<?php echo e(old('next_audit_date', $next_audit_date)); ?>">
                                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                                <?php echo $errors->first('next_audit_date', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

                            </div>
                        </div>


                        <!-- Note -->
                        <div class="form-group <?php echo e($errors->has('note') ? 'error' : ''); ?>">
                            <?php echo e(Form::label('note', trans('admin/hardware/form.notes'), array('class' => 'col-md-3 control-label'))); ?>

                            <div class="col-md-8">
                                <textarea class="col-md-6 form-control" id="note" name="note"><?php echo e(old('note', $asset->note)); ?></textarea>
                                <?php echo $errors->first('note', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

                            </div>
                        </div>


                        <!-- Images -->
                        <?php echo $__env->make('partials.forms.edit.image-upload', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>






                    </div> <!--/.box-body-->
                    <div class="box-footer">
                        <a class="btn btn-link" href="<?php echo e(URL::previous()); ?>"> <?php echo e(trans('button.cancel')); ?></a>
                        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-check icon-white" aria-hidden="true"></i> <?php echo e(trans('general.audit')); ?></button>
                    </div>
                </form>
            </div>
        </div> <!--/.col-md-7-->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/hardware/audit.blade.php ENDPATH**/ ?>