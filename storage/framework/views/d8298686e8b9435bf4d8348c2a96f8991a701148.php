<?php $__env->startSection('content'); ?>

    <form role="form" action="<?php echo e(url('/login')); ?>" method="POST" autocomplete="false">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

        <!-- this is a hack to prevent Chrome from trying to autocomplete fields -->
        <input type="text" name="prevent_autofill" id="prevent_autofill" value="" style="display:none;" aria-hidden="true">
        <input type="password" name="password_fake" id="password_fake" value="" style="display:none;" aria-hidden="true">

        <div class="container">
            <div class="row">

                <div class="col-md-4 col-md-offset-4">

                    <div class="box login-box">
                        <div class="box-header with-border">
                            <h1 class="box-title"> <?php echo e(trans('auth/general.login_prompt')); ?></h1>
                        </div>


                        <div class="login-box-body">
                            <div class="row">

                                <?php if($snipeSettings->login_note): ?>
                                    <div class="col-md-12">
                                        <div class="alert alert-info">
                                            <?php echo Parsedown::instance()->text(e($snipeSettings->login_note)); ?>

                                        </div>
                                    </div>
                                <?php endif; ?>

                                <!-- Notifications -->
                                <?php echo $__env->make('notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <div class="col-md-12">
                                    <!-- CSRF Token -->


                                    <fieldset>

                                        <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                                            <label for="username"><i class="fa fa-user" aria-hidden="true"></i> <?php echo e(trans('admin/users/table.username')); ?></label>
                                            <input class="form-control" placeholder="<?php echo e(trans('admin/users/table.username')); ?>" name="username" type="text" id="username" autocomplete="off" autofocus>
                                            <?php echo $errors->first('username', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

                                        </div>
                                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                            <label for="password"><i class="fa fa-key" aria-hidden="true"></i> <?php echo e(trans('admin/users/table.password')); ?></label>
                                            <input class="form-control" placeholder="<?php echo e(trans('admin/users/table.password')); ?>" name="password" type="password" id="password" autocomplete="off">
                                            <?php echo $errors->first('password', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

                                        </div>
                                        <div class="checkbox">
                                            <label style="margin-left: -20px;">
                                                <input name="remember" type="checkbox" value="1" class="minimal"> <?php echo e(trans('auth/general.remember_me')); ?>

                                            </label>
                                        </div>
                                    </fieldset>
                                </div> <!-- end col-md-12 -->

                            </div> <!-- end row -->

                            <?php if($snipeSettings->saml_enabled): ?>
                            <div class="row ">
                                <div class="col-md-12 text-right">
                                    <a href="<?php echo e(route('saml.login')); ?>"><?php echo e(trans('auth/general.saml_login')); ?></a>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="box-footer">
                            <button class="btn btn-lg btn-primary btn-block"><?php echo e(trans('auth/general.login')); ?></button>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 text-right" style="padding-top: 10px;">
                            <?php if($snipeSettings->custom_forgot_pass_url): ?>
                                <a href="<?php echo e($snipeSettings->custom_forgot_pass_url); ?>" rel="noopener"><?php echo e(trans('auth/general.forgot_password')); ?></a>
                            <?php else: ?>
                                <a href="<?php echo e(route('password.request')); ?>"><?php echo e(trans('auth/general.forgot_password')); ?></a>
                            <?php endif; ?>


                        </div>
                    </div> <!-- end login box -->

                </div> <!-- col-md-4 -->

            </div> <!-- end row -->
        </div> <!-- end container -->
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/basic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/auth/login.blade.php ENDPATH**/ ?>