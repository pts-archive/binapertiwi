<?php $__env->startSection('title'); ?>
    Update General Settings
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
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <?php echo e(trans('admin/settings/general.general_settings')); ?>

                    </h2>
                </div>

               <div class="box-body">

                   <div class="col-md-12">

                    <!-- Full Multiple Companies Support -->
                    <div class="form-group <?php echo e($errors->has('full_multiple_companies_support') ? 'error' : ''); ?>">
                        <div class="col-md-3">
                            <?php echo e(Form::label('full_multiple_companies_support', trans('admin/settings/general.full_multiple_companies_support_text'))); ?>

                        </div>
                        <div class="col-md-9">
                            <?php echo e(Form::checkbox('full_multiple_companies_support', '1', old('full_multiple_companies_support', $setting->full_multiple_companies_support),array('class' => 'minimal', 'aria-label'=>'full_multiple_companies_support'))); ?>

                            <?php echo e(trans('admin/settings/general.full_multiple_companies_support_text')); ?>

                            <?php echo $errors->first('full_multiple_companies_support', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            <p class="help-block">
                                <?php echo e(trans('admin/settings/general.full_multiple_companies_support_help_text')); ?>

                            </p>
                        </div>
                    </div>

                    <!-- /.form-group -->

                    <!-- Require signature for acceptance -->
                    <div class="form-group <?php echo e($errors->has('require_accept_signature') ? 'error' : ''); ?>">
                        <div class="col-md-3">
                            <?php echo e(Form::label('require_accept_signature',
                                           trans('admin/settings/general.require_accept_signature'))); ?>

                        </div>
                        <div class="col-md-9">
                            <?php echo e(Form::checkbox('require_accept_signature', '1', Request::old('require_accept_signature', $setting->require_accept_signature),array('class' => 'minimal'))); ?>

                            <?php echo e(trans('general.yes')); ?>

                            <?php echo $errors->first('require_accept_signature', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            <p class="help-block"><?php echo e(trans('admin/settings/general.require_accept_signature_help_text')); ?></p>
                        </div>
                    </div>
                    <!-- /.form-group -->


                    <!-- Email domain -->
                    <div class="form-group <?php echo e($errors->has('email_domain') ? 'error' : ''); ?>">
                        <div class="col-md-3">
                            <?php echo e(Form::label('email_domain', trans('general.email_domain'))); ?>

                        </div>
                        <div class="col-md-9">
                            <?php echo e(Form::text('email_domain', Request::old('email_domain', $setting->email_domain), array('class' => 'form-control','placeholder' => 'example.com'))); ?>

                            <span class="help-block"><?php echo e(trans('general.email_domain_help')); ?></span>
                            <?php echo $errors->first('email_domain', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                        </div>
                    </div>


                    <!-- Email format -->
                    <div class="form-group <?php echo e($errors->has('email_format') ? 'error' : ''); ?>">
                        <div class="col-md-3">
                            <?php echo e(Form::label('email_format', trans('general.email_format'))); ?>

                        </div>
                        <div class="col-md-9">
                            <?php echo Form::username_format('email_format', old('email_format', $setting->email_format), 'select2'); ?>

                            <?php echo $errors->first('email_format', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                        </div>
                    </div>

                    <!-- Username format -->
                    <div class="form-group <?php echo e($errors->has('username_format') ? 'error' : ''); ?>">
                        <div class="col-md-3">
                            <?php echo e(Form::label('username_format', trans('general.username_format'))); ?>

                        </div>
                        <div class="col-md-9">
                            <?php echo Form::username_format('username_format', old('username_format', $setting->username_format), 'select2'); ?>

                            <?php echo $errors->first('username_format', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>


                            <p class="help-block">
                                <?php echo e(trans('admin/settings/general.username_format_help')); ?>

                            </p>
                        </div>
                    </div>

                       <!-- Load images in emails -->
                       <div class="form-group <?php echo e($errors->has('show_images_in_email') ? 'error' : ''); ?>">
                           <div class="col-md-3">
                               <?php echo e(Form::label('show_images_in_email', trans('admin/settings/general.show_images_in_email'))); ?>

                           </div>
                           <div class="col-md-9">
                               <?php echo e(Form::checkbox('show_images_in_email', '1', Request::old('show_images_in_email', $setting->show_images_in_email),array('class' => 'minimal'))); ?>

                               <?php echo e(trans('general.yes')); ?>

                               <?php echo $errors->first('show_images_in_email', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>


                           </div>
                       </div>

                       <!-- unique serial -->
                       <div class="form-group">
                           <div class="col-md-3">
                               <?php echo e(Form::label('unique_serial', trans('admin/settings/general.unique_serial'))); ?>

                           </div>
                           <div class="col-md-9">
                               <?php echo e(Form::checkbox('unique_serial', '1', Request::old('unique_serial', $setting->unique_serial),array('class' => 'minimal'))); ?>

                               <?php echo e(trans('general.yes')); ?>

                               <?php echo $errors->first('unique_serial', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                               <p class="help-block">
                               <?php echo e(trans('admin/settings/general.unique_serial_help_text')); ?>

                               </p>
                           </div>
                       </div>


                       <!-- Per Page -->
                    <div class="form-group <?php echo e($errors->has('per_page') ? 'error' : ''); ?>">
                        <div class="col-md-3">
                            <?php echo e(Form::label('per_page', trans('admin/settings/general.per_page'))); ?>

                        </div>
                        <div class="col-md-9">
                            <?php echo e(Form::text('per_page', old('per_page', $setting->per_page), array('class' => 'form-control','placeholder' => '5', 'maxlength'=>'3', 'style'=>'width: 60px;'))); ?>

                            <?php echo $errors->first('per_page', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                        </div>
                    </div>

                   <!-- Thumb Size -->
                   <div class="form-group <?php echo e($errors->has('thumbnail_max_h') ? 'error' : ''); ?>">
                       <div class="col-md-3">
                           <?php echo e(Form::label('thumbnail_max_h', trans('admin/settings/general.thumbnail_max_h'))); ?>

                       </div>
                       <div class="col-md-9">
                           <?php echo e(Form::text('thumbnail_max_h', Request::old('thumbnail_max_h', $setting->thumbnail_max_h), array('class' => 'form-control','placeholder' => '50', 'maxlength'=>'3', 'style'=>'width: 60px;'))); ?>

                           <p class="help-block"><?php echo e(trans('admin/settings/general.thumbnail_max_h_help')); ?></p>
                           <?php echo $errors->first('thumbnail_max_h', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                       </div>
                   </div>

                    <!-- Default EULA -->
                   <div class="form-group <?php echo e($errors->has('default_eula_text') ? 'error' : ''); ?>">
                       <div class="col-md-3">
                           <?php echo e(Form::label('default_eula_text', trans('admin/settings/general.default_eula_text'))); ?>

                       </div>
                       <div class="col-md-9">
                           <?php echo e(Form::textarea('default_eula_text', old('default_eula_text', $setting->default_eula_text), array('class' => 'form-control','placeholder' => 'Add your default EULA text'))); ?>

                           <?php echo $errors->first('default_eula_text', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                           <p class="help-block"><?php echo e(trans('admin/settings/general.default_eula_help_text')); ?></p>
                           <p class="help-block"><?php echo trans('admin/settings/general.eula_markdown'); ?></p>
                       </div>
                   </div>


                    <!-- login text -->
                    <div class="form-group <?php echo e($errors->has('login_note') ? 'error' : ''); ?>">
                        <div class="col-md-3">
                            <?php echo e(Form::label('login_note', trans('admin/settings/general.login_note'))); ?>

                        </div>
                        <div class="col-md-9">
                            <?php if(config('app.lock_passwords')): ?>

                                <textarea class="form-control disabled" name="login_note" placeholder="If you do not have a login or have found a device belonging to this company, please call technical support at 888-555-1212. Thank you." rows="2" aria-label="login_note" readonly><?php echo e(old('login_note', $setting->login_note)); ?></textarea>
                                <?php echo $errors->first('login_note', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                                <p class="text-warning"><i class="fa fa-lock"></i> <?php echo e(trans('general.feature_disabled')); ?></p>
                            <?php else: ?>
                                <textarea class="form-control" name="login_note" aria-label="login_note" placeholder="If you do not have a login or have found a device belonging to this company, please call technical support at 888-555-1212. Thank you." rows="2"><?php echo e(old('login_note', $setting->login_note)); ?></textarea>
                                <?php echo $errors->first('login_note', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            <?php endif; ?>
                            <p class="help-block"><?php echo trans('admin/settings/general.login_note_help'); ?></p>
                        </div>
                    </div>

                       <!-- Mail test -->
                       <div class="form-group">
                           <div class="col-md-3">
                               <?php echo e(Form::label('login_note', 'Test Mail')); ?>

                           </div>
                           <div class="col-md-9" id="mailtestrow">
                               <a class="btn btn-default btn-sm pull-left" id="mailtest" style="margin-right: 10px;">
                                   Send Test</a>
                               <span id="mailtesticon"></span>
                               <span id="mailtestresult"></span>
                               <span id="mailteststatus"></span>
                           </div>
                           <div class="col-md-9 col-md-offset-3">
                               <div id="mailteststatus-error" class="text-danger"></div>
                           </div>
                           <div class="col-md-9 col-md-offset-3">
                               <p class="help-block">This will attempt to send a test mail to <?php echo e(config('mail.reply_to.address')); ?>.</p>
                           </div>

                       </div>

                       <!-- dashboard text -->
                       <div class="form-group <?php echo e($errors->has('dashboard_message') ? 'error' : ''); ?>">
                           <div class="col-md-3">
                               <?php echo e(Form::label('dashboard_message', trans('admin/settings/general.dashboard_message'))); ?>

                           </div>
                           <div class="col-md-9">
                               <?php if(config('app.lock_passwords')): ?>

                                   <textarea class="form-control disabled" name="login_note" placeholder="If you do not have a login or have found a device belonging to this company, please call technical support at 888-555-1212. Thank you." rows="2" aria-label="dashboard_message" readonly><?php echo e(old('dashboard_message', $setting->login_note)); ?></textarea>
                                   <?php echo $errors->first('dashboard_message', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                                   <p class="text-warning"><i class="fa fa-lock"></i> <?php echo e(trans('general.feature_disabled')); ?></p>
                               <?php else: ?>
                                   <textarea class="form-control" aria-label="dashboard_message" name="dashboard_message" rows="2"><?php echo e(old('login_note', $setting->dashboard_message)); ?></textarea>
                                   <?php echo $errors->first('dashboard_message', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                               <?php endif; ?>
                               <p class="help-block">
                                   <?php echo e(trans('admin/settings/general.dashboard_message_help')); ?>

                                   <?php echo trans('general.github_markdown'); ?></p>
                           </div>
                       </div>




                       <!-- Archived in List -->
                       <div class="form-group <?php echo e($errors->has('show_archived_in_list') ? 'error' : ''); ?>">
                           <div class="col-md-3">
                               <?php echo e(Form::label('show_archived_in_list',
                                              trans('admin/settings/general.show_archived_in_list'))); ?>

                           </div>
                           <div class="col-md-9">
                               <?php echo e(Form::checkbox('show_archived_in_list', '1', Request::old('show_archived_in_list', $setting->show_archived_in_list),array('class' => 'minimal'))); ?>

                               <?php echo e(trans('admin/settings/general.show_archived_in_list_text')); ?>

                               <?php echo $errors->first('show_archived_in_list', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>


                           </div>
                       </div>

                       <!-- Show assets assigned to user's assets -->
                       <div class="form-group <?php echo e($errors->has('show_assigned_assets') ? 'error' : ''); ?>">
                           <div class="col-md-3">
                               <?php echo e(Form::label('show_assigned_assets',
                                              trans('admin/settings/general.show_assigned_assets'))); ?>

                           </div>
                           <div class="col-md-9">
                               <?php echo e(Form::checkbox('show_assigned_assets', '1', Request::old('show_assigned_assets', $setting->show_assigned_assets),array('class' => 'minimal'))); ?>

                               <?php echo e(trans('general.yes')); ?>

                               <p class="help-block"><?php echo e(trans('admin/settings/general.show_assigned_assets_help')); ?></p>
                               <?php echo $errors->first('show_assigned_assets', '<span class="alert-msg">:message</span>'); ?>

                           </div>
                       </div>

                       <!-- Model List prefs -->
                       <div class="form-group <?php echo e($errors->has('show_in_model_list') ? 'error' : ''); ?>">
                           <div class="col-md-3">
                               <?php echo e(Form::label('show_in_model_list',
                                              trans('admin/settings/general.show_in_model_list'))); ?>

                           </div>
                           <div class="col-md-9">
                               <?php echo e(Form::checkbox('show_in_model_list[]', 'image', old('show_in_model_list', $snipeSettings->modellistCheckedValue('image')),array('class' => 'minimal', 'aria-label'=>'show_in_model_list' ))); ?> <?php echo e(trans('general.image')); ?> <br>
                               <?php echo e(Form::checkbox('show_in_model_list[]', 'category', old('show_in_model_list', $snipeSettings->modellistCheckedValue('category')),array('class' => 'minimal', 'aria-label'=>'show_in_model_list' ))); ?> <?php echo e(trans('general.category')); ?> <br>
                               <?php echo e(Form::checkbox('show_in_model_list[]', 'manufacturer', old('show_in_model_list', $snipeSettings->modellistCheckedValue('manufacturer')),array('class' => 'minimal', 'aria-label'=>'show_in_model_list' ))); ?>  <?php echo e(trans('general.manufacturer')); ?> <br>
                               <?php echo e(Form::checkbox('show_in_model_list[]', 'model_number', old('show_in_model_list', $snipeSettings->modellistCheckedValue('model_number')),array('class' => 'minimal', 'aria-label'=>'show_in_model_list' ))); ?> <?php echo e(trans('general.model_no')); ?><br>
                           </div>
                       </div>
                       
                       <!-- Depreciation method -->
                       <div class="form-group <?php echo e($errors->has('depreciation_method') ? 'error' : ''); ?>">
                           <div class="col-md-3">
                                <?php echo e(Form::label('depreciation_method', trans('Depreciation method'))); ?>

                           </div>
                           <div class="col-md-9">
                               <?php echo e(Form::select('depreciation_method', array(
                                    'default' => 'Linear (default)', 
                                    'half_1' => 'Half-year convention, always applied', 
                                    'half_2' => 'Half-year convention, applied with condition', 
                                ), Request::old('username_format', $setting->depreciation_method), ['class' =>'select2', 'style' => 'width: 80%'])); ?>

                           </div>
                       </div>
                       <!-- /.form-group -->

                       <!-- Privacy Policy Footer-->
                       <div class="form-group <?php echo e($errors->has('privacy_policy_link') ? 'error' : ''); ?>">
                           <div class="col-md-3">
                               <?php echo e(Form::label('privacy_policy_link', trans('admin/settings/general.privacy_policy_link'))); ?>

                           </div>
                           <div class="col-md-9">
                               <?php if(config('app.lock_passwords')): ?>
                                   <?php echo e(Form::text('privacy_policy_link', Request::old('privacy_policy_link', $setting->privacy_policy_link), array('class' => 'form-control disabled', 'disabled' => 'disabled'))); ?>

                               <?php else: ?>
                                   <?php echo e(Form::text('privacy_policy_link', Request::old('privacy_policy_link', $setting->privacy_policy_link), array('class' => 'form-control'))); ?>


                               <?php endif; ?>


                               <span class="help-block"><?php echo e(trans('admin/settings/general.privacy_policy_link_help')); ?></span>
                               <?php echo $errors->first('privacy_policy_link', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>


                               <?php if(config('app.lock_passwords')===true): ?>
                                   <p class="text-warning"><i class="fa fa-lock"></i> <?php echo e(trans('general.feature_disabled')); ?></p>
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
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check icon-white" aria-hidden="true"></i> <?php echo e(trans('general.save')); ?></button>
                </div>

            </div>
            </div>

        </div> <!-- /box -->
    </div> <!-- /.col-md-8-->
    </div> <!-- /.row-->

    <?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
    <!-- bootstrap color picker -->
    <script nonce="<?php echo e(csrf_token()); ?>">
        //color picker with addon
        $(".header-color").colorpicker();
        // toggle the disabled state of asset id prefix
        $('#auto_increment_assets').on('ifChecked', function(){
            $('#auto_increment_prefix').prop('disabled', false).focus();
        }).on('ifUnchecked', function(){
            $('#auto_increment_prefix').prop('disabled', true);
        });


        // Test Mail
        $("#mailtest").click(function(){
            $("#mailtestrow").removeClass('text-success');
            $("#mailtestrow").removeClass('text-danger');
            $("#mailtesticon").html('');
            $("#mailteststatus").html('');
            $('#mailteststatus-error').html('');
            $("#mailtesticon").html('<i class="fa fa-spinner spin"></i> Sending Test Email...');
            $.ajax({
                url: '<?php echo e(route('api.settings.mailtest')); ?>',
                type: 'POST',
                headers: {
                    "X-Requested-With": 'XMLHttpRequest',
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                },
                data: {},
                dataType: 'json',

                success: function (data) {
                    console.dir(data);
                    $("#mailtesticon").html('');
                    $("#mailteststatus").html('');
                    $('#mailteststatus-error').html('');
                    $("#mailteststatus").removeClass('text-danger');
                    $("#mailteststatus").addClass('text-success');
                    if (data.message) {
                        $("#mailteststatus").html('<i class="fa fa-check text-success"></i> ' + data.message);
                    } else {
                        $("#mailteststatus").html('<i class="fa fa-check text-success"></i> Mail sent!');
                    }
                },

                error: function (data) {

                    $("#mailtesticon").html('');
                    $("#mailteststatus").html('');
                    $('#mailteststatus-error').html('');
                    $("#mailteststatus").removeClass('text-success');
                    $("#mailteststatus").addClass('text-danger');
                    $("#mailtesticon").html('<i class="fa fa-exclamation-triangle text-danger"></i>');
                    $('#mailteststatus').html('Mail could not be sent.');
                    if (data.responseJSON) {
                        if (data.responseJSON.messages) {
                            $('#mailteststatus-error').html('Error: ' + data.responseJSON.messages);
                        } else {
                            $('#mailteststatus-error').html('No additional error message provided. Check your mail settings and your app log.');
                        }
                    } else {
                        console.dir(data);
                    }

                }


            });
        });


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/settings/general.blade.php ENDPATH**/ ?>