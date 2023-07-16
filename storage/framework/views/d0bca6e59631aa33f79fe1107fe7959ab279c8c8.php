<?php $__env->startSection('title'); ?>
<?php echo e(trans('general.editprofile')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-9">
  <?php echo e(Form::open(['method' => 'POST', 'files' => true, 'class' => 'form-horizontal', 'autocomplete' => 'off'])); ?>

  <!-- CSRF Token -->
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
    <div class="box box-default">
      <div class="box-body">
        <!-- First Name -->
        <div class="form-group <?php echo e($errors->has('first_name') ? ' has-error' : ''); ?>">
          <label for="first_name" class="col-md-3 control-label"><?php echo e(trans('general.first_name')); ?>

          </label>
          <div class="col-md-8 required">
            <input class="form-control" type="text" name="first_name" id="first_name" value="<?php echo e(old('first_name', $user->first_name)); ?>" />
            <?php echo $errors->first('first_name', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

          </div>
        </div>

        <!-- Last Name -->
        <div class="form-group <?php echo e($errors->has('last_name') ? ' has-error' : ''); ?>">
          <label for="last_name" class="col-md-3 control-label">
            <?php echo e(trans('general.last_name')); ?>

          </label>
          <div class="col-md-8 required">
            <input class="form-control" type="text" name="last_name" id="last_name" value="<?php echo e(old('last_name', $user->last_name)); ?>" />
            <?php echo $errors->first('last_name', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

          </div>
        </div>


        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('self.edit_location')): ?>
        <!-- Location -->
        <?php echo $__env->make('partials.forms.edit.location-profile-select', ['translated_name' => trans('general.location')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>


        <!-- Language -->
        <div class="form-group <?php echo e($errors->has('locale') ? 'has-error' : ''); ?>">
          <label class="col-md-3 control-label" for="locale"><?php echo e(trans('general.language')); ?></label>
          <div class="col-md-9">

            <?php if(!config('app.lock_passwords')): ?>
              <?php echo Form::locales('locale', old('locale', $user->locale), 'select2'); ?>

              <?php echo $errors->first('locale', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

            <?php else: ?>
              <p class="help-block"><?php echo e(trans('general.feature_disabled')); ?></p>
            <?php endif; ?>

          </div>
        </div>

        <?php if($snipeSettings->allow_user_skin=='1'): ?>
        <!-- Skin -->
        <div class="form-group <?php echo e($errors->has('skin') ? 'error' : ''); ?>">
          <label for="website" class="col-md-3 control-label"><?php echo e(Form::label('skin', trans('general.skin'))); ?></label>
          <div class="col-md-8">
            <?php echo Form::user_skin('skin', old('skin', $user->skin), 'select2'); ?>

            <?php echo $errors->first('skin', '<span class="alert-msg">:message</span>'); ?>

          </div>
        </div>
        <?php endif; ?>

        <!-- Phone -->
        <div class="form-group <?php echo e($errors->has('phone') ? 'has-error' : ''); ?>">
          <label class="col-md-3 control-label" for="phone"><?php echo e(trans('admin/users/table.phone')); ?></label>
          <div class="col-md-4">
            <input class="form-control" type="text" name="phone" id="phone" value="<?php echo e(old('phone', $user->phone)); ?>" />
            <?php echo $errors->first('phone', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

          </div>
        </div>

        <!-- Website URL -->
        <div class="form-group <?php echo e($errors->has('website') ? ' has-error' : ''); ?>">
          <label for="website" class="col-md-3 control-label"><?php echo e(trans('general.website')); ?></label>
          <div class="col-md-8">
            <input class="form-control" type="text" name="website" id="website" value="<?php echo e(old('website', $user->website)); ?>" />
            <?php echo $errors->first('website', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

          </div>
        </div>

        <!-- Gravatar Email -->
        <div class="form-group <?php echo e($errors->has('gravatar') ? ' has-error' : ''); ?>">
          <label for="gravatar" class="col-md-3 control-label"><?php echo e(trans('general.gravatar_email')); ?>

            <small>(Private)</small>
          </label>
          <div class="col-md-8">
            <input class="form-control" type="text" name="gravatar" id="gravatar" value="<?php echo e(old('gravatar', $user->gravatar)); ?>" />
            <?php echo $errors->first('gravatar', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

            <p>
              <img src="//secure.gravatar.com/avatar/<?php echo e(md5(strtolower(trim($user->gravatar)))); ?>" width="30" height="30" alt="<?php echo e($user->present()->fullName()); ?> avatar image">
              <a href="http://gravatar.com"><small>Change your avatar at Gravatar.com</small></a>.
            </p>
          </div>
        </div>

        <!-- Avatar -->

        <?php if($user->avatar): ?>
          <div class="form-group <?php echo e($errors->has('image_delete') ? 'has-error' : ''); ?>">
            <label class="col-md-3 control-label" for="avatar_delete"><?php echo e(trans('general.image_delete')); ?></label>
            <div class="col-md-9">
              <label for="avatar_delete">
                <?php echo e(Form::checkbox('avatar_delete', '1', old('avatar_delete'), array('class' => 'minimal'))); ?>

              </label>
              <br>
              <img src="<?php echo e(url('/')); ?>/uploads/avatars/<?php echo e($user->avatar); ?>" alt="<?php echo e($user->present()->fullName()); ?> avatar image">
              <?php echo $errors->first('avatar_delete', '<span class="alert-msg" aria-hidden="true"><br>:message</span>'); ?>

            </div>
          </div>
        <?php endif; ?>


        <?php echo $__env->make('partials.forms.edit.image-upload', ['fieldname' => 'avatar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



        <!-- Two factor opt in -->
        <?php if($snipeSettings->two_factor_enabled=='1'): ?>
        <div class="form-group <?php echo e($errors->has('avatar') ? 'has-error' : ''); ?>">
          <div class="col-md-7 col-md-offset-3">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('self.two_factor')): ?>
              <label for="avatar"><?php echo e(Form::checkbox('two_factor_optin', '1', Request::old('two_factor_optin', $user->two_factor_optin),array('class' => 'minimal'))); ?>

            <?php else: ?>
                <label for="avatar"><?php echo e(Form::checkbox('two_factor_optin', '1', Request::old('two_factor_optin', $user->two_factor_optin),['class' => 'disabled minimal', 'disabled' => 'disabled'])); ?>

            <?php endif; ?>

            <?php echo e(trans('admin/settings/general.two_factor_enabled_text')); ?></label>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('self.two_factor')): ?>
              <p class="help-block"><?php echo e(trans('admin/settings/general.two_factor_enabled_warning')); ?></p>
            <?php else: ?>
              <p class="help-block"><?php echo e(trans('admin/settings/general.two_factor_enabled_edit_not_allowed')); ?></p>
            <?php endif; ?>
            <?php if(config('app.lock_passwords')): ?>
              <p class="help-block"><?php echo e(trans('general.feature_disabled')); ?></p>
            <?php endif; ?>
          </div>
        </div>
        <?php endif; ?>


      </div> <!-- .box-body -->
      <div class="box-footer text-right">
        <a class="btn btn-link" href="<?php echo e(URL::previous()); ?>"><?php echo e(trans('button.cancel')); ?></a>
        <button type="submit" class="btn btn-primary"><i class="fa fa-check icon-white" aria-hidden="true"></i> <?php echo e(trans('general.save')); ?></button>
      </div>
    </div> <!-- .box-default -->
    <?php echo e(Form::close()); ?>

  </div> <!-- .col-md-9 -->
</div> <!-- .row-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/account/profile.blade.php ENDPATH**/ ?>