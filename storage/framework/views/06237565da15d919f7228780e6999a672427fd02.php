<?php $__env->startSection('title'); ?>
    Update SAML Settings
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
    <a href="<?php echo e(route('settings.index')); ?>" class="btn btn-default"> <?php echo e(trans('general.back')); ?></a>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <style>
        .checkbox label {
            padding-right: 40px;
        }
    </style>


    <?php echo e(Form::open(['method' => 'POST', 'files' => false, 'autocomplete' => 'false', 'class' => 'form-horizontal', 'role' => 'form'])); ?>

    <!-- CSRF Token -->
    <?php echo e(csrf_field()); ?>


    <!-- this is a hack to prevent Chrome from trying to autocomplete fields -->
    <input type="text" name="prevent_autofill" id="prevent_autofill" value="" style="display:none;" />
    <input type="password" name="password_fake" id="password_fake" value="" style="display:none;" />



    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">


            <div class="panel box box-default">
                <div class="box-header with-border">
                    <h2 class="box-title">
                        <i class="fa fa-sign-in"></i> SAML
                    </h4>
                </div>
                <div class="box-body">


                    <div class="col-md-11 col-md-offset-1">

                        <!-- Enable SAML -->
                        <div class="form-group <?php echo e($errors->has('saml_integration') ? 'error' : ''); ?>">
                            <div class="col-md-3">
                                <?php echo e(Form::label('saml_integration', trans('admin/settings/general.saml_integration'))); ?>

                            </div>
                            <div class="col-md-9">

                                <?php echo e(Form::checkbox('saml_enabled', '1', Request::old('saml_enabled', $setting->saml_enabled), [((config('app.lock_passwords')===true)) ? 'disabled ': '', 'class' => 'minimal '. $setting->demoMode, $setting->demoMode])); ?>

                                <?php echo e(trans('admin/settings/general.saml_enabled')); ?>

                                <?php echo $errors->first('saml_integration', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?><br>
                                <?php if(config('app.lock_passwords')===true): ?>
                                <p class="text-warning"><i class="fa fa-lock"></i> <?php echo e(trans('general.feature_disabled')); ?></p>
                                <?php endif; ?>




                                <?php if($setting->saml_enabled): ?>
                                    <!-- SAML SP Details -->
                                    <!-- SAML SP Entity ID -->
                                    <?php echo e(Form::label('saml_sp_entitiyid', trans('admin/settings/general.saml_sp_entityid'))); ?>

                                    <?php echo e(Form::text('saml_sp_entitiyid', url('/'), ['class' => 'form-control', 'readonly'])); ?>

                                    <br>
                                    <!-- SAML SP ACS -->
                                    <?php echo e(Form::label('saml_sp_acs_url', trans('admin/settings/general.saml_sp_acs_url'))); ?>

                                    <?php echo e(Form::text('saml_sp_acs_url', route('saml.acs'), ['class' => 'form-control', 'readonly'])); ?>

                                    <br>
                                    <!-- SAML SP SLS -->
                                    <?php echo e(Form::label('saml_sp_sls_url', trans('admin/settings/general.saml_sp_sls_url'))); ?>

                                    <?php echo e(Form::text('saml_sp_sls_url', route('saml.sls'), ['class' => 'form-control', 'readonly'])); ?>

                                    <br>
                                    <!-- SAML SP Certificate -->
                                    <?php if(!empty($setting->saml_sp_x509cert)): ?>
                                        <?php echo e(Form::label('saml_sp_x509cert', trans('admin/settings/general.saml_sp_x509cert'))); ?>

                                        <?php echo e(Form::textarea('saml_sp_x509cert', $setting->saml_sp_x509cert, ['class' => 'form-control', 'wrap' => 'off', 'readonly'])); ?>

                                        <br>
                                    <?php endif; ?>
                                    <!-- SAML SP Metadata URL -->
                                    <?php echo e(Form::label('saml_sp_metadata_url', trans('admin/settings/general.saml_sp_metadata_url'))); ?>

                                    <?php echo e(Form::text('saml_sp_metadata_url', route('saml.metadata'), ['class' => 'form-control', 'readonly'])); ?>

                                    <br>
                                    <p class="help-block">
                                        <a href="<?php echo e(route('saml.metadata')); ?>" target="_blank" class="btn btn-default" style="margin-right: 5px;">Download Metadata</a>
                                    </p>
                                <?php endif; ?>
                                <?php echo $errors->first('saml_enabled', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            </div>
                        </div>

                        <!-- SAML IdP Metadata -->
                        <div class="form-group <?php echo e($errors->has('saml_idp_metadata') ? 'error' : ''); ?>">
                        <div class="col-md-3">
                            <?php echo e(Form::label('saml_idp_metadata', trans('admin/settings/general.saml_idp_metadata'))); ?>

                        </div>
                        <div class="col-md-9">
                            <?php echo e(Form::textarea('saml_idp_metadata', old('saml_idp_metadata', $setting->saml_idp_metadata), ['class' => 'form-control','placeholder' => 'https://example.com/idp/metadata', 'wrap' => 'off', $setting->demoMode])); ?>

                            <?php echo $errors->first('saml_idp_metadata', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?><br>
                            <button type="button" class="btn btn-default" id="saml_idp_metadata_upload_btn"><?php echo e(trans('button.select_file')); ?></button>
                            <input type="file" class="js-uploadFile" id="saml_idp_metadata_upload"
                                data-maxsize="<?php echo e(\App\Helpers\Helper::file_upload_max_size()); ?>"
                                accept="text/xml,application/xml" style="display:none; max-width: 90%">
                            
                            <p class="help-block"><?php echo e(trans('admin/settings/general.saml_idp_metadata_help')); ?></p>
                        </div>
                        </div>

                        <!-- SAML Attribute Mapping Username -->
                        <div class="form-group <?php echo e($errors->has('saml_attr_mapping_username') ? 'error' : ''); ?>">
                            <div class="col-md-3">
                                <?php echo e(Form::label('saml_attr_mapping_username', trans('admin/settings/general.saml_attr_mapping_username'))); ?>

                            </div>
                            <div class="col-md-9">
                                <?php echo e(Form::text('saml_attr_mapping_username', Request::old('saml_attr_mapping_username', $setting->saml_attr_mapping_username), ['class' => 'form-control','placeholder' => '', $setting->demoMode])); ?>

                                <p class="help-block"><?php echo e(trans('admin/settings/general.saml_attr_mapping_username_help')); ?></p>
                                <?php echo $errors->first('saml_attr_mapping_username', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            </div>
                        </div>

                        <!-- SAML Force Login -->
                        <div class="form-group">
                            <div class="col-md-3">
                                <?php echo e(Form::label('saml_forcelogin', trans('admin/settings/general.saml_forcelogin_label'))); ?>

                            </div>
                            <div class="col-md-9">
                                <?php echo e(Form::checkbox('saml_forcelogin', '1', Request::old('saml_forcelogin', $setting->saml_forcelogin),['class' => 'minimal '. $setting->demoMode, $setting->demoMode])); ?>

                                <?php echo e(trans('admin/settings/general.saml_forcelogin')); ?>

                                <p class="help-block"><?php echo e(trans('admin/settings/general.saml_forcelogin_help')); ?></p>
                                <p class="help-block"><?php echo e(route('login', ['nosaml'])); ?></p>
                                <?php echo $errors->first('saml_forcelogin', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            </div>
                        </div>

                        <!-- SAML Single Log Out -->
                        <div class="form-group">
                            <div class="col-md-3">
                                <?php echo e(Form::label('saml_slo', trans('admin/settings/general.saml_slo_label'))); ?>

                            </div>
                            <div class="col-md-9">
                                <?php echo e(Form::checkbox('saml_slo', '1', Request::old('saml_slo', $setting->saml_slo),['class' => 'minimal '. $setting->demoMode, $setting->demoMode])); ?>

                                <?php echo e(trans('admin/settings/general.saml_slo')); ?>

                                <p class="help-block"><?php echo e(trans('admin/settings/general.saml_slo_help')); ?></p>
                                <?php echo $errors->first('saml_slo', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            </div>
                        </div>

                        <!-- SAML Custom Options -->
                        <div class="form-group <?php echo e($errors->has('saml_custom_settings') ? 'error' : ''); ?>">
                        <div class="col-md-3">
                            <?php echo e(Form::label('saml_custom_settings', trans('admin/settings/general.saml_custom_settings'))); ?>

                        </div>
                        <div class="col-md-9">
                            <?php echo e(Form::textarea('saml_custom_settings', old('saml_custom_settings', $setting->saml_custom_settings), ['class' => 'form-control','placeholder' => 'example.option=false
sp_x509cert=file:///...
sp_private_key=file:///', 'wrap' => 'off', $setting->demoMode])); ?>

                            <p class="help-block"><?php echo e(trans('admin/settings/general.saml_custom_settings_help')); ?></p>
                            <?php echo $errors->first('saml_custom_settings', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

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

<?php $__env->startPush('js'); ?>
    <script nonce="<?php echo e(csrf_token()); ?>">

        $('#saml_idp_metadata_upload_btn').click(function() {
            $('#saml_idp_metadata_upload').click();
        });

        $('#saml_idp_metadata_upload').on('change', function () {
            var fr = new FileReader();

            fr.onload = function(e) {
                $('#saml_idp_metadata').text(e.target.result);
            } 

            fr.readAsText(this.files[0]);
        });

    </script>
<?php $__env->stopPush(); ?>



<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/settings/saml.blade.php ENDPATH**/ ?>