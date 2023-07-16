<?php $__env->startSection('title'); ?>
    Bulk Edit
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_right'); ?>
    <a href="<?php echo e(URL::previous()); ?>" class="btn btn-sm btn-primary pull-right">
        <?php echo e(trans('general.back')); ?></a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <p><?php echo e(trans('admin/users/general.bulk_update_help')); ?></p>

            <div class="callout callout-warning">
                <i class="fa fa-warning"></i> <?php echo e(trans('admin/users/general.bulk_update_warn', ['user_count' => count($users)])); ?>

            </div>

            <form class="form-horizontal" method="post" action="<?php echo e(route('users/bulkeditsave')); ?>" autocomplete="off" role="form">
                <?php echo e(csrf_field()); ?>


                <div class="box box-default">
                    <div class="box-body">


                        <!--  Department -->
                        <?php echo $__env->make('partials.forms.edit.department-select', ['translated_name' => trans('general.department'), 'fieldname' => 'department_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                        <!-- Location -->
                        <?php echo $__env->make('partials.forms.edit.location-select', ['translated_name' => trans('general.location'), 'fieldname' => 'location_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                        <!-- Company -->
                        <?php if(\App\Models\Company::canManageUsersCompanies()): ?>
                            <?php echo $__env->make('partials.forms.edit.company-select', ['translated_name' => trans('general.select_company'), 'fieldname' => 'company_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                        <!-- Manager -->
                    <?php echo $__env->make('partials.forms.edit.user-select', ['translated_name' => trans('admin/users/table.manager'), 'fieldname' => 'manager_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <!-- language -->
                        <div class="form-group <?php echo e($errors->has('locale') ? 'has-error' : ''); ?>">
                            <label class="col-md-3 control-label" for="locale"><?php echo e(trans('general.language')); ?></label>
                            <div class="col-md-8">
                                <?php echo Form::locales('locale', old('locale', $user->locale), 'select2'); ?>

                                <?php echo $errors->first('locale', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            </div>
                        </div>

                        <!-- City -->
                        <div class="form-group<?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
                            <label class="col-md-3 control-label" for="city"><?php echo e(trans('general.city')); ?></label>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="city" id="city" aria-label="city" />
                                <?php echo $errors->first('city', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

                            </div>
                        </div>

                        <!-- activated -->
                        <div class="form-group">
                            <div class="col-sm-3 control-label">
                                Activated
                            </div>
                            <div class="col-sm-9">
                                <div class="checkbox">
                                    <label for="activated">
                                        <?php echo e(Form::radio('activated', '', true, ['aria-label'=>'activated'])); ?> Do not change activation status <br>
                                        <?php echo e(Form::radio('activated', '1', old('activated'), ['aria-label'=>'activated'])); ?>  User is activated<br>
                                        <?php echo e(Form::radio('activated', '0', old('activated'), ['aria-label'=>'activated'])); ?>  User is de-activated

                                    </label>
                                </div>
                            </div>
                        </div> <!--/form-group-->


                        <!--  Groups -->
                        <div class="form-group<?php echo e($errors->has('groups') ? ' has-error' : ''); ?>">
                            <label class="col-md-3 control-label" for="groups"> <?php echo e(trans('general.groups')); ?></label>
                            <div class="col-md-6">
                                <?php if((Config::get('app.lock_passwords') || (!Auth::user()->isSuperUser()))): ?>

                                    <span class="help-block">Only superadmins may edit group memberships.</p>
                                <?php else: ?>
                                    <div class="controls">
                                        <select name="groups[]" id="groups[]" multiple="multiple" class="form-control" aria-label="groups">
                                        <option value="">Remove Group Memberships </option>

                                  <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($id); ?>"><?php echo e($group); ?> </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <span class="help-block">
                          <?php echo e(trans('admin/users/table.groupnotes')); ?>

                        </span>
                      </div> <!--/controls-->
                        <?php endif; ?>
                    </div> <!--/col-md-5-->
                        </div>


                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <input type="hidden" name="ids[<?php echo e($user->id); ?>]" value="<?php echo e($user->id); ?>">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div> <!--/.box-body-->

                    <div class="box-footer text-right">
                        <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white" aria-hidden="true"></i> <?php echo e(trans('general.save')); ?></button>
                    </div>
                </div> <!--/.box.box-default-->
            </form>
        </div> <!--/.col-md-8-->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/users/bulk-edit.blade.php ENDPATH**/ ?>