


<?php $__env->startSection('title'); ?>
Bulk Checkin &amp; Delete
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="box box-default">
      <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('users/bulksave')); ?>">
        <div class="box-body">
          <!-- CSRF Token -->
          <?php echo e(csrf_field()); ?>

          <div class="col-md-12">
            <div class="callout callout-danger">
              <i class="fa fa-exclamation-circle"></i>
              <strong>WARNING: </strong>
              You are about to delete the <?php echo e(count($users)); ?> user(s) listed below. Super admin names are highlighted in red.
            </div>
          </div>

          <?php if(config('app.lock_passwords')): ?>
            <div class="col-md-12">
              <div class="callout callout-warning">
                <p><?php echo e(trans('feature_disabled')); ?></p>
              </div>
            </div>
          <?php endif; ?>

          <div class="col-md-12">
            <div class="table-responsive">
              <table class="display table table-hover">
                <thead>
                  <tr>
                    <th class="col-md-1"></th>
                    <th class="col-md-6">Name</th>
                    <th class="col-md-5">Groups</th>
                    <th class="col-md-5">Assets</th>
                    <th class="col-md-5">Accessories</th>
                    <th class="col-md-5">Licenses</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr <?php echo ($user->isSuperUser() ? ' class="danger"':''); ?>>
                    <td>
                      <?php if(Auth::id()!=$user->id): ?>
                      <input type="checkbox" name="ids[]" value="<?php echo e($user->id); ?>" checked="checked">
                      <?php else: ?>
                      <input type="checkbox" name="ids[]" value="<?php echo e($user->id); ?>" disabled>
                      <?php endif; ?>
                    </td>

                    <td>
                      <span <?php echo e((Auth::user()->id==$user->id ? ' style="text-decoration: line-through"' : '')); ?>>
                        <?php echo e($user->present()->fullName()); ?> (<?php echo e($user->username); ?>)
                      </span>
                      <?php echo e((Auth::id()==$user->id ? ' (cannot delete yourself)' : '')); ?>

                    </td>
                    <td>
                      <?php $__currentLoopData = $user->groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <a href=" <?php echo e(route('groups.update', $group->id)); ?>" class="label  label-default">
                        <?php echo e($group->name); ?>

                      </a>&nbsp;
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td>
                      <?php echo e(number_format($user->assets()->count())); ?>

                    </td>
                    <td>
                      <?php echo e(number_format($user->accessories()->count())); ?>

                    </td>
                    <td>
                      <?php echo e(number_format($user->licenses()->count())); ?>

                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="6" class="warning">
                      <?php echo e(Form::select('status_id', $statuslabel_list , Request::old('status_id'), array('class'=>'select2', 'style'=>'width:250px'))); ?>

                      <label>Update all assets for these users to this status</label>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="6" class="warning">
                      <label><input type="checkbox" name="ids['.e($user->id).']" checked> Check in all properties associated with these users</label>
                    </td>
                  </tr>
                </tfoot>
              </table>
            </div> <!--/table-responsive-->
          </div><!--/col-md-12-->
        </div> <!--/box-body-->
        <div class="box-footer text-right">
          <a class="btn btn-link" href="<?php echo e(URL::previous()); ?>"><?php echo e(trans('button.cancel')); ?></a>
          <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white" aria-hidden="true"></i> <?php echo e(trans('button.submit')); ?></button>
        </div><!-- /.box-footer -->
      </form>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/users/confirm-bulk-delete.blade.php ENDPATH**/ ?>