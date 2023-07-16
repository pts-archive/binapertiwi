<?php $__env->startSection('title'); ?>

    <?php if(request('status')=='deleted'): ?>
        <?php echo e(trans('general.deleted')); ?>

    <?php else: ?>
        <?php echo e(trans('general.current')); ?>

    <?php endif; ?>
    <?php echo e(trans('general.users')); ?>

    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', \App\Models\User::class)): ?>
        <?php if($snipeSettings->ldap_enabled == 1): ?>
            <a href="<?php echo e(route('ldap/user')); ?>" class="btn btn-default pull-right"><span class="fa fa-sitemap"></span> LDAP Sync</a>
        <?php endif; ?>
        <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary pull-right" style="margin-right: 5px;">  <?php echo e(trans('general.create')); ?></a>
    <?php endif; ?>

    <?php if(request('status')=='deleted'): ?>
        <a class="btn btn-default pull-right" href="<?php echo e(route('users.index')); ?>" style="margin-right: 5px;"><?php echo e(trans('admin/users/table.show_current')); ?></a>
    <?php else: ?>
        <a class="btn btn-default pull-right" href="<?php echo e(route('users.index', ['status' => 'deleted'])); ?>" style="margin-right: 5px;"><?php echo e(trans('admin/users/table.show_deleted')); ?></a>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', \App\Models\User::class)): ?>
        <a class="btn btn-default pull-right" href="<?php echo e(route('users.export')); ?>" style="margin-right: 5px;">Export</a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
        <div class="box-body">
          <?php echo e(Form::open([
               'method' => 'POST',
               'route' => ['users/bulkedit'],
               'class' => 'form-inline',
                'id' => 'bulkForm'])); ?>


            <?php if(request('status')!='deleted'): ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', \App\Models\User::class)): ?>
                <div id="toolbar">
                    <label for="bulk_actions" class="sr-only">Bulk Actions</label>
                  <select name="bulk_actions" class="form-control select2" style="width: 200px;" aria-label="bulk_actions">
                    <option value="delete">Bulk Checkin &amp; Delete</option>
                    <option value="edit">Bulk Edit</option>
                    <option value="bulkpasswordreset"><?php echo e(trans('button.send_password_link')); ?></option>
                  </select>
                  <button class="btn btn-default" id="bulkEdit" disabled>Go</button>
                </div>
              <?php endif; ?>
            <?php endif; ?>


            <table
                    data-click-to-select="true"
                    data-columns="<?php echo e(\App\Presenters\UserPresenter::dataTableLayout()); ?>"
                    data-cookie-id-table="usersTable"
                    data-pagination="true"
                    data-id-table="usersTable"
                    data-search="true"
                    data-side-pagination="server"
                    data-show-columns="true"
                    data-show-export="true"
                    data-show-refresh="true"
                    data-sort-order="asc"
                    data-toolbar="#toolbar"
                    id="usersTable"
                    class="table table-striped snipe-table"
                    data-url="<?php echo e(route('api.users.index',
              array('deleted'=> (request('status')=='deleted') ? 'true' : 'false','company_id' => e(request('company_id'))))); ?>"
                    data-export-options='{
                "fileName": "export-users-<?php echo e(date('Y-m-d')); ?>",
                "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                }'>
                    </table>


                    <?php echo e(Form::close()); ?>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>


<?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/users/index.blade.php ENDPATH**/ ?>