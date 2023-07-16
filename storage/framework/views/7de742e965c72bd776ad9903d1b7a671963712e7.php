<?php $__env->startSection('title'); ?>
    Update Asset Tag Settings
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
    <a href="<?php echo e(route('settings.index')); ?>" class="btn btn-primary"> <?php echo e(trans('general.back')); ?></a>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <style>
        .checkbox label {
            padding-right: 40px;
        }
    </style>


    <?php echo e(Form::open(['method' => 'POST', 'files' => false, 'autocomplete' => 'off', 'class' => 'form-horizontal', 'role' => 'form' ])); ?>

    <!-- CSRF Token -->
    <?php echo e(csrf_field()); ?>


    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">


            <div class="panel box box-default">
                <div class="box-header with-border">
                    <h2 class="box-title">
                        <i class="fa fa-list-ol"></i> Asset Tags
                    </h4>
                </div>
                <div class="box-body">


                    <div class="col-md-11 col-md-offset-1">

                        <!-- auto ids -->
                        <div class="form-group">
                            <div class="col-md-5">
                                <?php echo e(Form::label('auto_increment_assets', trans('admin/settings/general.asset_ids'))); ?>

                            </div>
                            <div class="col-md-7">
                                <?php echo e(Form::checkbox('auto_increment_assets', '1', old('auto_increment_assets', $setting->auto_increment_assets),array('class' => 'minimal', 'aria-label'=>'auto_increment_assets'))); ?>

                                <?php echo e(trans('admin/settings/general.auto_increment_assets')); ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-5">
                                <?php echo e(Form::label('next_auto_tag_base', trans('admin/settings/general.next_auto_tag_base'))); ?>

                            </div>
                            <div class="col-md-7">
                                <?php echo e(Form::text('next_auto_tag_base', old('next_auto_tag_base', $setting->next_auto_tag_base), array('class' => 'form-control', 'style'=>'width: 150px;', 'aria-label'=>'next_auto_tag_base'))); ?>

                                <?php echo $errors->first('next_auto_tag_base', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            </div>
                        </div>


                        <!-- auto prefix -->
                        <div class="form-group <?php echo e($errors->has('auto_increment_prefix') ? 'error' : ''); ?>">
                            <div class="col-md-5">
                                <?php echo e(Form::label('auto_increment_prefix', trans('admin/settings/general.auto_increment_prefix'))); ?>

                            </div>
                            <div class="col-md-7">
                                <?php if($setting->auto_increment_assets == 1): ?>
                                    <?php echo e(Form::text('auto_increment_prefix', old('auto_increment_prefix', $setting->auto_increment_prefix), array('class' => 'form-control', 'style'=>'width: 150px;', 'aria-label'=>'auto_increment_prefix'))); ?>

                                    <?php echo $errors->first('auto_increment_prefix', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                                <?php else: ?>
                                    <?php echo e(Form::text('auto_increment_prefix', old('auto_increment_prefix', $setting->auto_increment_prefix), array('class' => 'form-control', 'disabled'=>'disabled', 'style'=>'width: 150px;', 'aria-label'=>'auto_increment_prefix'))); ?>

                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- auto zerofill -->
                        <div class="form-group <?php echo e($errors->has('zerofill_count') ? 'error' : ''); ?>">
                            <div class="col-md-5">
                                <?php echo e(Form::label('zerofill_count', trans('admin/settings/general.zerofill_count'))); ?>

                            </div>
                            <div class="col-md-7">
                                <?php echo e(Form::text('zerofill_count', old('zerofill_count', $setting->zerofill_count), array('class' => 'form-control', 'style'=>'width: 150px;', 'aria-label'=>'zerofill_count'))); ?>

                                <?php echo $errors->first('zerofill_count', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            </div>
                        </div>

                    </div>

                </div> <!--/.box-body-->
                <div class="box-footer">
                    <div class="text-left col-md-6">
                        <a class="btn btn-link text-left" href="<?php echo e(route('settings.index')); ?>"><?php echo e(trans('button.cancel')); ?></a>
                    </div>
                    <div class="text-right col-md-6">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check icon-white" aria-hidden="true"></i> <?php echo e(trans('general.save')); ?></button>
                    </div>

                </div>
            </div> <!-- /box -->
        </div> <!-- /.col-md-8-->
    </div> <!-- /.row-->

    <?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/settings/asset_tags.blade.php ENDPATH**/ ?>