<?php $__env->startSection('title'); ?>
    Update Slack Settings
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
                        <i class="fa fa-slack"></i> Slack
                    </h2>
                </div>
                <div class="box-body">


                    <p style="padding: 20px;">
                        <?php echo trans('admin/settings/general.slack_integration_help',array('slack_link' => 'https://my.slack.com/services/new/incoming-webhook')); ?>


                    <?php if(($setting->slack_channel=='') && ($setting->slack_endpoint=='')): ?>
                           <?php echo e(trans('admin/settings/general.slack_integration_help_button')); ?>

                    <?php endif; ?>
                    </p>


                    <div class="col-md-12" style="border-top: 0px;">


                        <!-- slack endpoint -->
                        <div class="form-group required <?php echo e($errors->has('slack_endpoint') ? 'error' : ''); ?>">
                            <div class="col-md-2">
                                <?php echo e(Form::label('slack_endpoint', trans('admin/settings/general.slack_endpoint'))); ?>

                            </div>
                            <div class="col-md-10">
                                <?php if(config('app.lock_passwords')===true): ?>
                                    <?php echo e(Form::text('slack_endpoint', old('slack_endpoint', $setting->slack_endpoint), array('class' => 'form-control','disabled'=>'disabled','placeholder' => 'https://hooks.slack.com/services/XXXXXXXXXXXXXXXXXXXXX', 'id' => 'slack_endpoint'))); ?>

                                    <p class="text-warning"><i class="fa fa-lock"></i> <?php echo e(trans('general.feature_disabled')); ?></p>

                                <?php else: ?>
                                    <?php echo e(Form::text('slack_endpoint', old('slack_endpoint', $setting->slack_endpoint), array('class' => 'form-control','placeholder' => 'https://hooks.slack.com/services/XXXXXXXXXXXXXXXXXXXXX', 'id' => 'slack_endpoint'))); ?>

                                <?php endif; ?>
                                <?php echo $errors->first('slack_endpoint', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            </div>
                        </div>

                        <!-- slack channel -->
                        <div class="form-group required <?php echo e($errors->has('slack_channel') ? 'error' : ''); ?>">
                            <div class="col-md-2">
                                <?php echo e(Form::label('slack_channel', trans('admin/settings/general.slack_channel'))); ?>

                            </div>
                            <div class="col-md-10">
                                <?php if(config('app.lock_passwords')===true): ?>
                                    <?php echo e(Form::text('slack_channel', old('slack_channel', $setting->slack_channel), array('class' => 'form-control','disabled'=>'disabled','placeholder' => '#IT-Ops'))); ?>

                                    <p class="text-warning"><i class="fa fa-lock"></i> <?php echo e(trans('general.feature_disabled')); ?></p>

                                <?php else: ?>
                                    <?php echo e(Form::text('slack_channel', old('slack_channel', $setting->slack_channel), array('class' => 'form-control','placeholder' => '#IT-Ops'))); ?>

                                <?php endif; ?>
                                <?php echo $errors->first('slack_channel', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            </div>
                        </div>

                        <!-- slack botname -->
                        <div class="form-group required <?php echo e($errors->has('slack_botname') ? 'error' : ''); ?>">
                            <div class="col-md-2">
                                <?php echo e(Form::label('slack_botname', trans('admin/settings/general.slack_botname'))); ?>

                            </div>
                            <div class="col-md-10">
                                <?php if(config('app.lock_passwords')===true): ?>
                                    <?php echo e(Form::text('slack_botname', old('slack_botname', $setting->slack_botname), array('class' => 'form-control','disabled'=>'disabled','placeholder' => 'Snipe-Bot'))); ?>

                                    <p class="text-warning"><i class="fa fa-lock"></i> <?php echo e(trans('general.feature_disabled')); ?></p>

                                <?php else: ?>
                                    <?php echo e(Form::text('slack_botname', old('slack_botname', $setting->slack_botname), array('class' => 'form-control','placeholder' => 'Snipe-Bot'))); ?>

                                <?php endif; ?>
                                <?php echo $errors->first('slack_botname', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            </div>
                        </div>

                        <div class="form-group" id="slacktestcontainer" style="display: none">
                            <div class="col-md-2">
                                <?php echo e(Form::label('test_slack', 'Test Slack')); ?>

                            </div>
                            <div class="col-md-10" id="slacktestrow">
                                <a class="btn btn-default btn-sm pull-left" id="slacktest" style="margin-right: 10px;">Test <i class="fa fa-slack"></i> Integration</a>
                            </div>
                            <div class="col-md-10 col-md-offset-2">
                                <span id="slacktesticon"></span>
                                <span id="slacktestresult"></span>
                                <span id="slackteststatus"></span>
                            </div>


                        </div>
                    </div> <!--/-->
                </div> <!--/.box-body-->
                <div class="box-footer">
                    <div class="text-left col-md-6">
                        <a class="btn btn-link text-left" href="<?php echo e(route('settings.index')); ?>"><?php echo e(trans('button.cancel')); ?></a>
                    </div>
                    <div class="text-right col-md-6">
                        <button type="submit" id="save_slack" class="btn btn-primary" disabled><i class="fa fa-check icon-white" aria-hidden="true"></i> <?php echo e(trans('general.save')); ?></button>
                    </div>

                </div>
            </div> <!-- /box -->
        </div> <!-- /.col-md-8-->
    </div> <!-- /.row-->

    <?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script nonce="<?php echo e(csrf_token()); ?>">
        var fieldcheck = function (event) {
            if($('#slack_endpoint').val() != "" && $('#slack_channel').val() != "" && $('#slack_botname').val() != "") {
                //enable test button *only* if all three fields are filled in
                $('#slacktestcontainer').fadeIn(500);
            } else {
                //otherwise it's hidden
                $('#slacktestcontainer').fadeOut(500);
            }

            if(event) { //on 'initial load' we don't *have* an 'event', but in the regular keyup callback, we *do*. So this only fires on 'real' callback events, not on first load
                if($('#slack_endpoint').val() == "" && $('#slack_channel').val() == "" && $('#slack_botname').val() == "") {
                    // if all three fields are blank, the user may want to disable Slack integration; enable the Save button
                    $('#save_slack').removeAttr('disabled');
                }
            }
        };

        fieldcheck(); //run our field-checker once on page-load to set the initial state correctly.

        $('input:text').keyup(fieldcheck); // if *any* text field changes, we recalculate button states


        $("#slacktest").click(function() {

            $("#slacktestrow").removeClass('text-success');
            $("#slacktestrow").removeClass('text-danger');
            $("#slackteststatus").removeClass('text-danger');
            $("#slackteststatus").html('');
            $("#slacktesticon").html('<i class="fa fa-spinner spin"></i> Sending Slack test message...');
            $.ajax({
                url: '<?php echo e(route('api.settings.slacktest')); ?>',
                type: 'POST',
                headers: {
                    "X-Requested-With": 'XMLHttpRequest',
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    'slack_endpoint': $('#slack_endpoint').val(),
                    'slack_channel': $('#slack_channel').val(),
                    'slack_botname': $('#slack_botname').val(),

                },

                dataType: 'json',

                success: function (data) {
                    $('#save_slack').removeAttr('disabled');
                    $("#slacktesticon").html('');
                    $("#slacktestrow").addClass('text-success');
                    $("#slackteststatus").addClass('text-success');
                    $("#slackteststatus").html('<i class="fa fa-check text-success"></i> Success! Check the ' + $('#slack_channel').val() + ' channel for your test message, and be sure to click SAVE below to store your settings.');
                },

                error: function (data) {


                    if (data.responseJSON) {
                        var errors = data.responseJSON.message;
                    } else {
                        var errors;
                    }

                    var error_text = '';

                    $('#save_slack').attr("disabled", true);
                    $("#slacktesticon").html('');
                    $("#slackteststatus").addClass('text-danger');
                    $("#slacktesticon").html('<i class="fa fa-exclamation-triangle text-danger"></i>');

                    if (data.status == 500) {
                        $('#slackteststatus').html('500 Server Error');
                    } else if (data.status == 400) {

                        if (typeof errors != 'string') {

                            for (i = 0; i < errors.length; i++) {
                                if (errors[i]) {
                                    error_text += '<li>Error: ' + errors[i];
                                }

                            }

                        } else {
                            error_text = errors;
                        }

                        $('#slackteststatus').html(error_text);

                    } else {
                        $('#slackteststatus').html(data.responseText.message);
                    }
                }


            });
            return false;
        });

    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/settings/slack.blade.php ENDPATH**/ ?>