


<?php $__env->startSection('title'); ?>
	<?php if($user->id): ?>
		<?php echo e(trans('admin/users/table.updateuser')); ?>

		<?php echo e($user->present()->fullName()); ?>

	<?php else: ?>
		<?php echo e(trans('admin/users/table.createuser')); ?>

	<?php endif; ?>

<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
<a href="<?php echo e(URL::previous()); ?>" class="btn btn-primary pull-right">
  <?php echo e(trans('general.back')); ?></a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<style>
    .form-horizontal .control-label {
      padding-top: 0px;
    }

    input[type='text'][disabled], input[disabled], textarea[disabled], input[readonly], textarea[readonly], .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
      background-color: white;
      color: #555555;
      cursor:text;
    }
    table.permissions {
      display:flex;
      flex-direction: column;
    }

    .permissions.table > thead, .permissions.table > tbody {
      margin: 15px;
      margin-top: 0px;
    }

    .permissions.table > tbody {
        border: 1px solid;
    }

    .header-row {
      border-bottom: 1px solid #ccc;
    }

    .permissions-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .table > tbody > tr > td.permissions-item {
      padding: 1px;
      padding-left: 8px;
    }

    .header-name {
      cursor: pointer;
    }

</style>

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <form class="form-horizontal" method="post" autocomplete="off" action="<?php echo e((isset($user->id)) ? route('users.update', ['user' => $user->id]) : route('users.store')); ?>" enctype="multipart/form-data" id="userForm">
      <?php echo e(csrf_field()); ?>


      <?php if($user->id): ?>
          <?php echo e(method_field('PUT')); ?>

      <?php endif; ?>
        <!-- Custom Tabs -->
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1" data-toggle="tab">Information</a></li>
          <li><a href="#tab_2" data-toggle="tab">Permissions</a></li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
            <div class="row">
              <div class="col-md-12">
                <!-- First Name -->
                <div class="form-group <?php echo e($errors->has('first_name') ? 'has-error' : ''); ?>">
                  <label class="col-md-3 control-label" for="first_name"><?php echo e(trans('general.first_name')); ?></label>
                  <div class="col-md-6<?php echo e((\App\Helpers\Helper::checkIfRequired($user, 'first_name')) ? ' required' : ''); ?>">
                    <input class="form-control" type="text" name="first_name" id="first_name" value="<?php echo e(old('first_name', $user->first_name)); ?>" />
                    <?php echo $errors->first('first_name', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                  </div>
                </div>

                <!-- Last Name -->
                <div class="form-group <?php echo e($errors->has('last_name') ? 'has-error' : ''); ?>">
                  <label class="col-md-3 control-label" for="last_name"><?php echo e(trans('general.last_name')); ?> </label>
                  <div class="col-md-6<?php echo e((\App\Helpers\Helper::checkIfRequired($user, 'last_name')) ? ' required' : ''); ?>">
                    <input class="form-control" type="text" name="last_name" id="last_name" value="<?php echo e(old('last_name', $user->last_name)); ?>" />
                    <?php echo $errors->first('last_name', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                  </div>
                </div>

                <!-- Username -->
                <div class="form-group <?php echo e($errors->has('username') ? 'has-error' : ''); ?>">
                  <label class="col-md-3 control-label" for="username"><?php echo e(trans('admin/users/table.username')); ?></label>
                  <div class="col-md-6<?php echo e((\App\Helpers\Helper::checkIfRequired($user, 'username')) ? ' required' : ''); ?>">
                    <?php if($user->ldap_import!='1' || str_contains(Route::currentRouteName(), 'clone')): ?>
                      <input
                        class="form-control"
                        type="text"
                        name="username"
                        id="username"
                        value="<?php echo e(Request::old('username', $user->username)); ?>"
                        autocomplete="off"
                        readonly
                        onfocus="this.removeAttribute('readonly');"
                        <?php echo e(((config('app.lock_passwords') && ($user->id)) ? ' disabled' : '')); ?>

                      >
                      <?php if(config('app.lock_passwords') && ($user->id)): ?>
                        <p class="help-block"><?php echo e(trans('admin/users/table.lock_passwords')); ?></p>
                      <?php endif; ?>
                    <?php else: ?>
                      (Managed via LDAP)
                          <input type="hidden" name="username" value="<?php echo e(Request::old('username', $user->username)); ?>">

                    <?php endif; ?>

                    <?php echo $errors->first('username', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                  </div>
                </div>

                <!-- Password -->
                <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                  <label class="col-md-3 control-label" for="password">
                    <?php echo e(trans('admin/users/table.password')); ?>

                  </label>
                  <div class="col-md-6<?php echo e((\App\Helpers\Helper::checkIfRequired($user, 'password')) ? ' required' : ''); ?>">
                    <?php if($user->ldap_import!='1' || str_contains(Route::currentRouteName(), 'clone') ): ?>
                      <input
                        type="password"
                        name="password"
                        class="form-control"
                        id="password"
                        value=""
                        autocomplete="off"
                        readonly
                        onfocus="this.removeAttribute('readonly');"
                        <?php echo e(((config('app.lock_passwords') && ($user->id)) ? ' disabled' : '')); ?>>
                    <?php else: ?>
                      (Managed via LDAP)
                    <?php endif; ?>
                    <span id="generated-password"></span>
                    <?php echo $errors->first('password', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                  </div>
                  <div class="col-md-2">
                    <?php if($user->ldap_import!='1'): ?>
                      <a href="#" class="left" id="genPassword">Generate</a>
                    <?php endif; ?>
                  </div>
                </div>

                <?php if($user->ldap_import!='1' || str_contains(Route::currentRouteName(), 'clone')): ?>
                <!-- Password Confirm -->
                <div class="form-group <?php echo e($errors->has('password_confirmation') ? 'has-error' : ''); ?>">
                  <label class="col-md-3 control-label" for="password_confirmation">
                    <?php echo e(trans('admin/users/table.password_confirm')); ?>

                  </label>
                  <div class="col-md-6<?php echo e(((\App\Helpers\Helper::checkIfRequired($user, 'first_name')) && (!$user->id)) ? ' required' : ''); ?>">
                    <input
                    type="password"
                    name="password_confirmation"
                    id="password_confirm"
                    class="form-control"
                    value=""
                    autocomplete="off"
                    aria-label="password_confirmation"
                    readonly
                    onfocus="this.removeAttribute('readonly');"
                    <?php echo e(((config('app.lock_passwords') && ($user->id)) ? ' disabled' : '')); ?>

                    >
                    <?php if(config('app.lock_passwords') && ($user->id)): ?>
                    <p class="help-block"><?php echo e(trans('admin/users/table.lock_passwords')); ?></p>
                    <?php endif; ?>
                    <?php echo $errors->first('password_confirmation', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                  </div>
                </div>
                <?php endif; ?>

              <!-- Activation Status -->
                  <div class="form-group <?php echo e($errors->has('activated') ? 'has-error' : ''); ?>">

                      <div class="form-group">
                          <div class="col-md-3 control-label">
                              <?php echo e(Form::label('activated', trans('general.login_enabled'))); ?>

                          </div>
                          <div class="col-md-9">
                              <?php if(config('app.lock_passwords')): ?>
                                  <div class="icheckbox disabled" style="padding-left: 10px;">
                                      <input type="checkbox" value="1" name="activated" class="minimal disabled" <?php echo e((old('activated', $user->activated)) == '1' ? ' checked="checked"' : ''); ?> disabled="disabled" aria-label="activated">
                                      <!-- this is necessary because the field is disabled and will reset -->
                                      <input type="hidden" name="activated" value="<?php echo e($user->activated); ?>">
                                      <?php echo e(trans('admin/users/general.activated_help_text')); ?>

                                      <p class="help-block"><?php echo e(trans('general.feature_disabled')); ?></p>

                                  </div>
                              <?php elseif($user->id === Auth::user()->id): ?>
                                  <div class="icheckbox disabled" style="padding-left: 10px;">
                                      <input type="checkbox" value="1" name="activated" class="minimal disabled" <?php echo e((old('activated', $user->activated)) == '1' ? ' checked="checked"' : ''); ?> disabled="disabled">
                                      <!-- this is necessary because the field is disabled and will reset -->
                                      <input type="hidden" name="activated" value="1" aria-label="activated">
                                      <?php echo e(trans('admin/users/general.activated_help_text')); ?>

                                      <p class="help-block"><?php echo e(trans('admin/users/general.activated_disabled_help_text')); ?></p>
                                  </div>
                              <?php else: ?>
                                  <div style="padding-left: 10px;">
                                      <input type="checkbox" value="1" id="activated" name="activated" class="minimal" <?php echo e((old('activated', $user->activated)) == '1' ? ' checked="checked"' : ''); ?> aria-label="activated">
                                      <?php echo e(trans('admin/users/general.activated_help_text')); ?>

                                  </div>
                              <?php endif; ?>

                              <?php echo $errors->first('activated', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>


                          </div>
                      </div>
                  </div>


                  <!-- Email -->
                <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                  <label class="col-md-3 control-label" for="email"><?php echo e(trans('admin/users/table.email')); ?> </label>
                  <div class="col-md-6<?php echo e((\App\Helpers\Helper::checkIfRequired($user, 'email')) ? ' required' : ''); ?>">
                    <input
                      class="form-control"
                      type="text"
                      name="email"
                      id="email"
                      value="<?php echo e(Request::old('email', $user->email)); ?>"
                      <?php echo e(((config('app.lock_passwords') && ($user->id)) ? ' disabled' : '')); ?>

                      autocomplete="off"
                      readonly
                      onfocus="this.removeAttribute('readonly');">
                    <?php if(config('app.lock_passwords') && ($user->id)): ?>
                    <p class="help-block"><?php echo e(trans('admin/users/table.lock_passwords')); ?></p>
                    <?php endif; ?>
                    <?php echo $errors->first('email', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                  </div>
                </div>


                  <!-- Email user -->
                  <?php if(!$user->id): ?>
                      <div class="form-group" id="email_user_row">
                          <div class="col-sm-3">
                          </div>
                          <div class="col-md-9">
                              <div class="icheckbox disabled" id="email_user_div">
                                  <?php echo e(Form::checkbox('email_user', '1', Request::old('email_user'),['class' => 'minimal', 'disabled'=>true, 'id' => 'email_user_checkbox'])); ?>

                                  Email this user their credentials?

                              </div>
                              <p class="help-block">
                                  <?php echo e(trans('admin/users/general.send_email_help')); ?>

                              </p>


                          </div>
                      </div> <!--/form-group-->
                  <?php endif; ?>

                <!-- Company -->
                <?php if(\App\Models\Company::canManageUsersCompanies()): ?>
                    <?php echo $__env->make('partials.forms.edit.company-select', ['translated_name' => trans('general.select_company'), 'fieldname' => 'company_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>


              <!-- Image -->
                  <?php if($user->avatar): ?>
                      <div class="form-group <?php echo e($errors->has('image_delete') ? 'has-error' : ''); ?>">
                          <label class="col-md-3 control-label" for="image_delete"><?php echo e(trans('general.image_delete')); ?></label>
                          <div class="col-md-5">
                              <?php echo e(Form::checkbox('image_delete')); ?>

                              <img src="<?php echo e(Storage::disk('public')->url(app('users_upload_path').e($user->avatar))); ?>" class="img-responsive" />
                              <?php echo $errors->first('image_delete', '<span class="alert-msg"><br>:message</span>'); ?>

                          </div>
                      </div>
                  <?php endif; ?>

                  <?php echo $__env->make('partials.forms.edit.image-upload', ['fieldname' => 'avatar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                <!-- language -->
                <div class="form-group <?php echo e($errors->has('locale') ? 'has-error' : ''); ?>">
                  <label class="col-md-3 control-label" for="locale"><?php echo e(trans('general.language')); ?></label>
                  <div class="col-md-6">
                    <?php echo Form::locales('locale', old('locale', $user->locale), 'select2'); ?>

                    <?php echo $errors->first('locale', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                  </div>
                </div>

                <!-- Employee Number -->
                <div class="form-group <?php echo e($errors->has('employee_num') ? 'has-error' : ''); ?>">
                  <label class="col-md-3 control-label" for="employee_num"><?php echo e(trans('admin/users/table.employee_num')); ?></label>
                  <div class="col-md-6">
                    <input
                      class="form-control"
                      type="text"
                      aria-label="employee_num"
                      name="employee_num"
                      id="employee_num"
                      value="<?php echo e(Request::old('employee_num', $user->employee_num)); ?>"
                    />
                    <?php echo $errors->first('employee_num', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                  </div>
                </div>


                <!-- Jobtitle -->
                <div class="form-group <?php echo e($errors->has('jobtitle') ? 'has-error' : ''); ?>">
                  <label class="col-md-3 control-label" for="jobtitle"><?php echo e(trans('admin/users/table.title')); ?></label>
                  <div class="col-md-6">
                    <input
                      class="form-control"
                      type="text"
                      name="jobtitle"
                      id="jobtitle"
                      value="<?php echo e(Request::old('jobtitle', $user->jobtitle)); ?>"
                    />
                    <?php echo $errors->first('jobtitle', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                  </div>
                </div>


                <!-- Manager -->
              <?php echo $__env->make('partials.forms.edit.user-select', ['translated_name' => trans('admin/users/table.manager'), 'fieldname' => 'manager_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                  <!--  Department -->
              <?php echo $__env->make('partials.forms.edit.department-select', ['translated_name' => trans('general.department'), 'fieldname' => 'department_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                  <!-- Location -->
              <?php echo $__env->make('partials.forms.edit.location-select', ['translated_name' => trans('general.location'), 'fieldname' => 'location_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- Phone -->
                <div class="form-group <?php echo e($errors->has('phone') ? 'has-error' : ''); ?>">
                  <label class="col-md-3 control-label" for="phone"><?php echo e(trans('admin/users/table.phone')); ?></label>
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="phone" id="phone" value="<?php echo e(old('phone', $user->phone)); ?>" />
                    <?php echo $errors->first('phone', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                  </div>
                </div>

                  <!-- Website URL -->
                  <div class="form-group <?php echo e($errors->has('website') ? ' has-error' : ''); ?>">
                      <label for="website" class="col-md-3 control-label"><?php echo e(trans('general.website')); ?></label>
                      <div class="col-md-6">
                          <input class="form-control" type="text" name="website" id="website" value="<?php echo e(old('website', $user->website)); ?>" />
                          <?php echo $errors->first('website', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

                      </div>
                  </div>

                  <!-- Address -->
                  <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                      <label class="col-md-3 control-label" for="address"><?php echo e(trans('general.address')); ?></label>
                      <div class="col-md-6">
                          <input class="form-control" type="text" name="address" id="address" value="<?php echo e(old('address', $user->address)); ?>" />
                          <?php echo $errors->first('address', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                      </div>
                  </div>

                  <!-- City -->
                  <div class="form-group<?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
                      <label class="col-md-3 control-label" for="city"><?php echo e(trans('general.city')); ?></label>
                      <div class="col-md-6">
                          <input class="form-control" type="text" name="city" id="city" aria-label="city" value="<?php echo e(old('city', $user->city)); ?>" />
                          <?php echo $errors->first('city', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                      </div>
                  </div>

                  <!-- State -->
                  <div class="form-group<?php echo e($errors->has('state') ? ' has-error' : ''); ?>">
                      <label class="col-md-3 control-label" for="state"><?php echo e(trans('general.state')); ?></label>
                      <div class="col-md-6">
                          <input class="form-control" type="text" name="state" id="state" value="<?php echo e(old('state', $user->state)); ?>" maxlength="3" />
                          <?php echo $errors->first('state', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                      </div>
                  </div>

                  <!-- Country -->
                  <div class="form-group<?php echo e($errors->has('country') ? ' has-error' : ''); ?>">
                      <label class="col-md-3 control-label" for="country"><?php echo e(trans('general.country')); ?></label>
                      <div class="col-md-6">
                          <?php echo Form::countries('country', old('country', $user->country), 'col-md-6 select2'); ?>

                          <?php echo $errors->first('country', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                      </div>
                  </div>

                  <!-- Zip -->
                  <div class="form-group<?php echo e($errors->has('zip') ? ' has-error' : ''); ?>">
                      <label class="col-md-3 control-label" for="zip"><?php echo e(trans('general.zip')); ?></label>
                      <div class="col-md-3">
                          <input class="form-control" type="text" name="zip" id="zip" value="<?php echo e(old('zip', $user->zip)); ?>" maxlength="10" />
                          <?php echo $errors->first('zip', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                      </div>
                  </div>





                <?php if($snipeSettings->two_factor_enabled!=''): ?>
                  <?php if($snipeSettings->two_factor_enabled=='1'): ?>
                  <div class="form-group">
                    <div class="col-md-3 control-label">
                      <?php echo e(Form::label('two_factor_optin', trans('admin/settings/general.two_factor'))); ?>

                    </div>
                    <div class="col-md-9">
                        <?php if(config('app.lock_passwords')): ?>
                            <div class="icheckbox disabled">
                            <?php echo e(Form::checkbox('two_factor_optin', '1', Request::old('two_factor_optin', $user->two_factor_optin),['class' => 'minimal', 'disabled'=>'disabled'])); ?> <?php echo e(trans('admin/settings/general.two_factor_enabled_text')); ?>

                                <p class="help-block"><?php echo e(trans('general.feature_disabled')); ?></p>
                            </div>
                        <?php else: ?>
                            <?php echo e(Form::checkbox('two_factor_optin', '1', Request::old('two_factor_optin', $user->two_factor_optin),['class' => 'minimal'])); ?> <?php echo e(trans('admin/settings/general.two_factor_enabled_text')); ?>

                            <p class="help-block"><?php echo e(trans('admin/users/general.two_factor_admin_optin_help')); ?></p>

                        <?php endif; ?>

                    </div>
                  </div>
                  <?php endif; ?>

                  <!-- Reset Two Factor -->
                  <div class="form-group">
                    <div class="col-md-8 col-md-offset-3 two_factor_resetrow">
                      <a class="btn btn-default btn-sm pull-left" id="two_factor_reset" style="margin-right: 10px;"> <?php echo e(trans('admin/settings/general.two_factor_reset')); ?></a>
                      <span id="two_factor_reseticon">
                      </span>
                      <span id="two_factor_resetresult">
                      </span>
                      <span id="two_factor_resetstatus">
                      </span>
                    </div>
                    <div class="col-md-8 col-md-offset-3 two_factor_resetrow">
                      <p class="help-block"><?php echo e(trans('admin/settings/general.two_factor_reset_help')); ?></p>
                    </div>
                  </div>
                <?php endif; ?>

                <!-- Notes -->
                <div class="form-group<?php echo $errors->has('notes') ? ' has-error' : ''; ?>">
                  <label for="notes" class="col-md-3 control-label"><?php echo e(trans('admin/users/table.notes')); ?></label>
                  <div class="col-md-6">
                    <textarea class="form-control" rows="5" id="notes" name="notes"><?php echo e(old('notes', $user->notes)); ?></textarea>
                    <?php echo $errors->first('notes', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

                  </div>
                </div>

                  <!-- Groups -->
                  <div class="form-group<?php echo e($errors->has('groups') ? ' has-error' : ''); ?>">
                      <label class="col-md-3 control-label" for="groups[]"> <?php echo e(trans('general.groups')); ?></label>
                      <div class="col-md-6">

                          <?php if((Config::get('app.lock_passwords') || (!Auth::user()->isSuperUser()))): ?>

                              <?php if(count($userGroups->keys()) > 0): ?>
                                  <ul>
                                      <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <?php echo ($userGroups->keys()->contains($id) ? '<li>'.e($group).'</li>' : ''); ?>

                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </ul>
                              <?php endif; ?>

                              <span class="help-block">Only superadmins may edit group memberships.</p>
                                  <?php else: ?>
                                      <div class="controls">
                        <select
                                name="groups[]"
                                aria-label="groups[]"
                                id="groups[]"
                                multiple="multiple"
                                class="form-control">

                            <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($id); ?>"
                                        <?php echo e(($userGroups->keys()->contains($id) ? ' selected="selected"' : '')); ?>>
                                    <?php echo e($group); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <span class="help-block">
                          <?php echo e(trans('admin/users/table.groupnotes')); ?>

                        </span>
                    </div>
                          <?php endif; ?>

                      </div>
                  </div>


              </div> <!--/col-md-12-->
            </div>
          </div><!-- /.tab-pane -->

          <div class="tab-pane" id="tab_2">
            <div class="col-md-12">
              <?php if(!Auth::user()->isSuperUser()): ?>
                <p class="alert alert-warning">Only superadmins may grant a user superadmin access.</p>
              <?php endif; ?>
            </div>

            <table class="table table-striped permissions">
              <thead>
                <tr class="permissions-row">
                  <th class="col-md-5">Permission</th>
                  <th class="col-md-1">Grant</th>
                  <th class="col-md-1">Deny</th>
                  <th class="col-md-1">Inherit</th>
                </tr>
              </thead>
                <?php echo $__env->make('partials.forms.edit.permissions-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </table>
          </div><!-- /.tab-pane -->
        </div><!-- /.tab-content -->
        <div class="box-footer text-right">
          <button type="submit" class="btn btn-primary"><i class="fa fa-check icon-white" aria-hidden="true"></i> <?php echo e(trans('general.save')); ?></button>
        </div>
      </div><!-- nav-tabs-custom -->
    </form>
  </div> <!--/col-md-8-->
</div><!--/row-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>

<script nonce="<?php echo e(csrf_token()); ?>">
$(document).ready(function() {

    $('#activated').on('ifChecked', function(event){
        console.log('user activated is checked');
        $("#email_user_row").show();
	});

    $('#activated').on('ifUnchecked', function(event){
        $("#email_user_row").hide();
    });

    $('#email').on('keyup',function(){
        event.preventDefault();

        if(this.value.length > 5){
            $('#email_user_checkbox').iCheck('enable');
        } else {
            $('#email_user_checkbox').iCheck('disable').iCheck('uncheck');
        }
    });


	// Check/Uncheck all radio buttons in the group
    $('tr.header-row input:radio').on('ifClicked', function () {
        value = $(this).attr('value');
        area = $(this).data('checker-group');
        $('.radiochecker-'+area+'[value='+value+']').iCheck('check');
    });

    $('.header-name').click(function() {
        $(this).parent().nextUntil('tr.header-row').slideToggle(500);
    });

    $('.tooltip-base').tooltip({container: 'body'})
    $(".superuser").change(function() {
        var perms = $(this).val();
        if (perms =='1') {
            $("#nonadmin").hide();
        } else {
            $("#nonadmin").show();
        }
    });

    $('#genPassword').pGenerator({
        'bind': 'click',
        'passwordElement': '#password',
        'displayElement': '#generated-password',
        'passwordLength': 16,
        'uppercase': true,
        'lowercase': true,
        'numbers':   true,
        'specialChars': true,
        'onPasswordGenerated': function(generatedPassword) {
            $('#password_confirm').val($('#password').val());
        }
    });

    $("#two_factor_reset").click(function(){
        $("#two_factor_resetrow").removeClass('success');
        $("#two_factor_resetrow").removeClass('danger');
        $("#two_factor_resetstatus").html('');
        $("#two_factor_reseticon").html('<i class="fa fa-spinner spin"></i>');
        $.ajax({
            url: '<?php echo e(route('api.users.two_factor_reset', ['id'=> $user->id])); ?>',
            type: 'POST',
            data: {},
            headers: {
                "X-Requested-With": 'XMLHttpRequest',
                 "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',

            success: function (data) {
                $("#two_factor_reseticon").html('');
                $("#two_factor_resetstatus").html('<i class="fa fa-check text-success"></i>' + data.message);
            },

            error: function (data) {
                $("#two_factor_reseticon").html('');
                $("#two_factor_reseticon").html('<i class="fa fa-exclamation-triangle text-danger"></i>');
                $('#two_factor_resetstatus').text(data.message);
            }


        });
    });


});
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/users/edit.blade.php ENDPATH**/ ?>