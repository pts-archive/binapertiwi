<?php $__env->startSection('title'); ?>
    Update Alert Settings
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
                        <i class="fa fa-bell"></i> Alerts
                    </h2>
                </div>
                <div class="box-body">


                    <div class="col-md-11 col-md-offset-1">

                        <!-- Alerts Enabled -->
                        <div class="form-group <?php echo e($errors->has('alerts_enabled') ? 'error' : ''); ?>">
                            <div class="col-md-3">
                                <?php echo e(Form::label('alerts_enabled', trans('admin/settings/general.alerts_enabled'))); ?>

                            </div>
                            <div class="col-md-5">
                                <?php echo e(Form::checkbox('alerts_enabled', '1', Request::old('alerts_enabled', $setting->alerts_enabled),array('class' => 'minimal'))); ?>

                                <?php echo e(trans('general.yes')); ?>

                            </div>
                        </div>

                        <!-- Menu Alerts Enabled -->
                        <div class="form-group <?php echo e($errors->has('show_alerts_in_menu') ? 'error' : ''); ?>">
                            <div class="col-md-3">
                                <?php echo e(Form::label('show_alerts_in_menu', trans('admin/settings/general.show_alerts_in_menu'))); ?>

                            </div>
                            <div class="col-md-5">
                                <?php echo e(Form::checkbox('show_alerts_in_menu', '1', Request::old('show_alerts_in_menu', $setting->show_alerts_in_menu),array('class' => 'minimal'))); ?>

                                <?php echo e(trans('general.yes')); ?>

                            </div>
                        </div>



                        <!-- Alert Email -->
                        <div class="form-group <?php echo e($errors->has('alert_email') ? 'error' : ''); ?>">
                            <div class="col-md-3">
                                <?php echo e(Form::label('alert_email', trans('admin/settings/general.alert_email'))); ?>

                            </div>
                            <div class="col-md-7">
                                <?php echo e(Form::text('alert_email', old('alert_email', $setting->alert_email), array('class' => 'form-control','placeholder' => 'admin@yourcompany.com'))); ?>

                                <?php echo $errors->first('alert_email', '<span class="alert-msg" aria-hidden="true">:message</span><br>'); ?>


                                <p class="help-block">Email addresses or distribution lists you want alerts to be sent to, comma separated</p>


                            </div>
                        </div>


                        <!-- Admin CC Email -->
                        <div class="form-group <?php echo e($errors->has('admin_cc_email') ? 'error' : ''); ?>">
                            <div class="col-md-3">
                                <?php echo e(Form::label('admin_cc_email', trans('admin/settings/general.admin_cc_email'))); ?>

                            </div>
                            <div class="col-md-7">
                                <?php echo e(Form::text('admin_cc_email', old('admin_cc_email', $setting->admin_cc_email), array('class' => 'form-control','placeholder' => 'admin@yourcompany.com'))); ?>

                                <?php echo $errors->first('admin_cc_email', '<span class="alert-msg" aria-hidden="true">:message</span><br>'); ?>


                                <p class="help-block"><?php echo e(trans('admin/settings/general.admin_cc_email_help')); ?></p>


                            </div>
                        </div>

                        <!-- Alert interval -->
                        <div class="form-group <?php echo e($errors->has('alert_interval') ? 'error' : ''); ?>">
                            <div class="col-md-3">
                                <?php echo e(Form::label('alert_interval', trans('admin/settings/general.alert_interval'))); ?>

                            </div>
                            <div class="col-md-9">
                                <?php echo e(Form::text('alert_interval', old('alert_interval', $setting->alert_interval), array('class' => 'form-control','placeholder' => '30', 'maxlength'=>'3', 'style'=>'width: 60px;'))); ?>

                                <?php echo $errors->first('alert_interval', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            </div>
                        </div>

                        <!-- Alert threshold -->
                        <div class="form-group <?php echo e($errors->has('alert_threshold') ? 'error' : ''); ?>">
                            <div class="col-md-3">
                                <?php echo e(Form::label('alert_threshold', trans('admin/settings/general.alert_inv_threshold'))); ?>

                            </div>
                            <div class="col-md-9">
                                <?php echo e(Form::text('alert_threshold', old('alert_threshold', $setting->alert_threshold), array('class' => 'form-control','placeholder' => '5', 'maxlength'=>'3', 'style'=>'width: 60px;'))); ?>

                                <?php echo $errors->first('alert_threshold', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            </div>
                        </div>


                        <!-- Alert interval -->
                        <div class="form-group <?php echo e($errors->has('audit_interval') ? 'error' : ''); ?>">
                            <div class="col-md-3">
                                <?php echo e(Form::label('audit_interval', trans('admin/settings/general.audit_interval'))); ?>

                            </div>
                            <div class="input-group col-md-2">
                                <?php echo e(Form::text('audit_interval', Request::old('audit_interval', $setting->audit_interval), array('class' => 'form-control','placeholder' => '12', 'maxlength'=>'3', 'style'=>'width: 60px;'))); ?>

                                <span class="input-group-addon"><?php echo e(trans('general.months')); ?></span>
                            </div>
                            <div class="col-md-9 col-md-offset-3">
                                <?php echo $errors->first('audit_interval', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                                <p class="help-block"><?php echo e(trans('admin/settings/general.audit_interval_help')); ?></p>
                            </div>
                        </div>

                        <!-- Alert threshold -->
                        <div class="form-group <?php echo e($errors->has('audit_warning_days') ? 'error' : ''); ?>">
                            <div class="col-md-3">
                                <?php echo e(Form::label('audit_warning_days', trans('admin/settings/general.audit_warning_days'))); ?>

                            </div>
                            <div class="input-group col-md-2">
                                <?php echo e(Form::text('audit_warning_days', Request::old('audit_warning_days', $setting->audit_warning_days), array('class' => 'form-control','placeholder' => '14', 'maxlength'=>'3', 'style'=>'width: 60px;'))); ?>

                                <span class="input-group-addon"><?php echo e(trans('general.days')); ?></span>




                            </div>
                            <div class="col-md-9 col-md-offset-3">
                                <?php echo $errors->first('audit_warning_days', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                                <p class="help-block"><?php echo e(trans('admin/settings/general.audit_warning_days_help')); ?></p>
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


<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/settings/alerts.blade.php ENDPATH**/ ?>