<?php $__env->startSection('title'); ?>
    Update Security Settings
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
    <a href="<?php echo e(route('settings.index')); ?>" class="btn btn-primary"> <?php echo e(trans('general.back')); ?></a>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>



    <?php echo e(Form::open(['method' => 'POST', 'files' => false, 'autocomplete' => 'off', 'class' => 'form-horizontal', 'role' => 'form' ])); ?>

    <!-- CSRF Token -->
    <?php echo e(csrf_field()); ?>


    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">


            <div class="panel box box-default">
                <div class="box-header with-border">
                    <h2 class="box-title">
                        <i class="fa fa-lock" aria-hidden="true"></i> Security
                    </h2>
                </div>
                <div class="box-body">


                    <div class="col-md-11 col-md-offset-1">


                        <!-- Two Factor -->
                        <div class="form-group <?php echo e($errors->has('brand') ? 'error' : ''); ?>">
                            <div class="col-md-3">
                                <?php echo e(Form::label('two_factor_enabled', trans('admin/settings/general.two_factor_enabled_text'))); ?>

                            </div>
                            <div class="col-md-9">

                                <?php echo Form::two_factor_options('two_factor_enabled', Request::old('two_factor_enabled', $setting->two_factor_enabled), 'select2'); ?>

                                <p class="help-block"><?php echo e(trans('admin/settings/general.two_factor_enabled_warning')); ?></p>

                                <?php if(config('app.lock_passwords')): ?>
                                    <p class="text-warning"><i class="fa fa-lock"></i> <?php echo e(trans('general.feature_disabled')); ?></p>
                                <?php endif; ?>

                                <?php echo $errors->first('two_factor_enabled', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            </div>
                        </div>

                        <!-- Min characters -->
                        <div class="form-group <?php echo e($errors->has('pwd_secure_min') ? 'error' : ''); ?>">
                            <div class="col-md-3">
                                <?php echo e(Form::label('pwd_secure_min', trans('admin/settings/general.pwd_secure_min'))); ?>

                            </div>
                            <div class="col-md-9">
                                <?php echo e(Form::text('pwd_secure_min', Request::old('pwd_secure_min', $setting->pwd_secure_min), array('class' => 'form-control',  'style'=>'width: 50px;'))); ?>


                                <?php echo $errors->first('pwd_secure_min', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                                <p class="help-block">
                                    <?php echo e(trans('admin/settings/general.pwd_secure_min_help')); ?>

                                </p>


                            </div>
                        </div>


                        <!-- Common Passwords -->
                        <div class="form-group <?php echo e($errors->has('pwd_secure_uncommon') ? 'error' : ''); ?>">
                            <div class="col-md-3">
                                <?php echo e(Form::label('pwd_secure_text_label',
                                              trans('admin/settings/general.pwd_secure_uncommon'))); ?>


                            </div>
                            <div class="col-md-9">
                                <label for="pwd_secure_uncommon"><span class="sr-only">Prevent common insecure passwords</span>
                                <?php echo e(Form::checkbox('pwd_secure_uncommon', '1', old('pwd_secure_uncommon', $setting->pwd_secure_uncommon),array('class' => 'minimal', 'aria-label'=>'pwd_secure_uncommon'))); ?>

                                    <?php echo e(trans('general.yes')); ?>

                                </label>
                                <?php echo $errors->first('pwd_secure_uncommon', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                                <p class="help-block">
                                    <?php echo e(trans('admin/settings/general.pwd_secure_uncommon_help')); ?>

                                </p>
                            </div>
                        </div>
                        <!-- /.form-group -->

                        <!-- Common Passwords -->
                        <div class="form-group">
                            <div class="col-md-3">
                                <?php echo e(Form::label('pwd_secure_complexity', trans('admin/settings/general.pwd_secure_complexity'))); ?>

                            </div>
                            <div class="col-md-9">

                                <?php echo e(Form::checkbox("pwd_secure_complexity['disallow_same_pwd_as_user_fields']", 'disallow_same_pwd_as_user_fields', old('disallow_same_pwd_as_user_fields', strpos($setting->pwd_secure_complexity, 'disallow_same_pwd_as_user_fields')!==false), array('class' => 'minimal', 'aria-label'=>'pwd_secure_complexity'))); ?>

                                Password cannot be the same as first name, last name, email, or username<br>


                                <?php echo e(Form::checkbox("pwd_secure_complexity['letters']", 'letters', old('pwd_secure_uncommon', strpos($setting->pwd_secure_complexity, 'letters')!==false), array('class' => 'minimal', 'aria-label'=>'pwd_secure_complexity'))); ?>

                                Require at least one letter <br>

                                <?php echo e(Form::checkbox("pwd_secure_complexity['numbers']", 'numbers', old('pwd_secure_uncommon', strpos($setting->pwd_secure_complexity, 'numbers')!==false), array('class' => 'minimal', 'aria-label'=>'pwd_secure_complexity'))); ?>

                                Require at least one number<br>

                                <?php echo e(Form::checkbox("pwd_secure_complexity['symbols']", 'symbols', old('pwd_secure_uncommon', strpos($setting->pwd_secure_complexity, 'symbols')!==false), array('class' => 'minimal', 'aria-label'=>'pwd_secure_complexity'))); ?>

                                Require at least one symbol<br>

                                <?php echo e(Form::checkbox("pwd_secure_complexity['case_diff']", 'case_diff', old('pwd_secure_uncommon', strpos($setting->pwd_secure_complexity, 'case_diff')!==false), array('class' => 'minimal', 'aria-label'=>'pwd_secure_complexity'))); ?>

                                Require at least one uppercase and one lowercase

                                <p class="help-block">
                                    <?php echo e(trans('admin/settings/general.pwd_secure_complexity_help')); ?>

                                </p>
                            </div>
                        </div>
                        <!-- /.form-group -->
                        <hr>
                        <!-- Remote User Authentication -->
                        <div class="form-group <?php echo e($errors->has('login_remote_user') ? 'error' : ''); ?>">
                            <div class="col-md-3">
                                <?php echo e(Form::label('login_remote_user_label', trans('admin/settings/general.login_remote_user_text'))); ?>

                            </div>
                            <div class="col-md-9">
                                <!--  Enable Remote User Login -->

                                <?php if(config('app.lock_passwords')): ?>
                                    <p class="text-warning"><i class="fa fa-lock"></i> <?php echo e(trans('general.feature_disabled')); ?></p>
                                <?php else: ?>
                                    <?php echo e(Form::checkbox('login_remote_user_enabled', '1', old('login_remote_user_enabled', $setting->login_remote_user_enabled),array('class' => 'minimal', 'aria-label'=>'login_remote_user'))); ?>

                                    <?php echo e(Form::label('login_remote_user_enabled',  trans('admin/settings/general.login_remote_user_enabled_text'))); ?>

                                    <?php echo $errors->first('login_remote_user_enabled', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                                    <p class="help-block">
                                        <?php echo e(trans('admin/settings/general.login_remote_user_enabled_help')); ?>

                                    </p>
                                    <!-- Use custom remote user header name -->
                                    <?php echo e(Form::label('login_remote_user_header_name',  trans('admin/settings/general.login_remote_user_header_name_text'))); ?>

                                    <?php echo e(Form::text('login_remote_user_header_name', Request::old('login_remote_user_header_name', $setting->login_remote_user_header_name),array('class' => 'form-control'))); ?>

                                    <?php echo $errors->first('login_remote_user_header_name', '<span class="alert-msg">:message</span>'); ?>

                                    <p class="help-block">
                                        <?php echo e(trans('admin/settings/general.login_remote_user_header_name_help')); ?>

                                    </p>
                                    <!-- Custom logout url to redirect to authentication provider -->
                                    <?php echo e(Form::label('login_remote_user_custom_logout_url',  trans('admin/settings/general.login_remote_user_custom_logout_url_text'))); ?>

                                    <?php echo e(Form::text('login_remote_user_custom_logout_url', old('login_remote_user_custom_logout_url', $setting->login_remote_user_custom_logout_url),array('class' => 'form-control', 'aria-label'=>'login_remote_user_custom_logout_url'))); ?>


                                    <?php echo $errors->first('login_remote_user_custom_logout_url', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                                    <p class="help-block">
                                        <?php echo e(trans('admin/settings/general.login_remote_user_custom_logout_url_help')); ?>

                                    </p>
                                    <!--  Disable other logins mechanism -->
                                    <label>

                                        <?php echo e(Form::checkbox('login_common_disabled', '1', old('login_common_disabled', $setting->login_common_disabled),array('class' => 'minimal', 'aria-label'=>'login_common_disabled'))); ?>

                                        <?php echo e(trans('admin/settings/general.login_common_disabled_text')); ?>

                                    </label>
                                    <?php echo $errors->first('login_common_disabled', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                                    <p class="help-block">
                                        <?php echo e(trans('admin/settings/general.login_common_disabled_help')); ?>

                                    </p>
                                <?php endif; ?>

                            </div>
                        </div>



                    </div>

                </div> <!--/.box-body-->
                <div class="box-footer">
                    <div class="text-left col-md-6">
                        <a class="btn btn-link text-left" href="<?php echo e(route('settings.index')); ?>"><?php echo e(trans('button.cancel')); ?></a>
                    </div>
                    <div class="text-right col-md-6">
                        <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white" aria-hidden="true"></i> <?php echo e(trans('general.save')); ?></button>
                    </div>

                </div>
            </div> <!-- /box -->
        </div> <!-- /.col-md-8-->
    </div> <!-- /.row-->

    <?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/settings/security.blade.php ENDPATH**/ ?>