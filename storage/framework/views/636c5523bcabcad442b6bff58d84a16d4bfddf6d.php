


<?php $__env->startSection('title'); ?>

 <?php echo e($accessory->name); ?>

 <?php echo e(trans('general.accessory')); ?>

 <?php if($accessory->model_number!=''): ?>
     (<?php echo e($accessory->model_number); ?>)
 <?php endif; ?>

<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_right'); ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage', \App\Models\Accessory::class)): ?>
        <div class="dropdown pull-right">
          <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
              <?php echo e(trans('button.actions')); ?>

              <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <?php if($accessory->assigned_to != ''): ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('checkin', \App\Models\Accessory::class)): ?>
              <li role="menuitem">
                <a href="<?php echo e(route('checkin/accessory', $accessory->id)); ?>"><?php echo e(trans('admin/accessories/general.checkin')); ?></a>
              </li>
              <?php endif; ?>
            <?php else: ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('checkout', \App\Models\Accessory::class)): ?>
              <li role="menuitem">
                <a href="<?php echo e(route('checkout/accessory', $accessory->id)); ?>"><?php echo e(trans('admin/accessories/general.checkout')); ?></a>
              </li>
              <?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', \App\Models\Accessory::class)): ?>
            <li role="menuitem">
              <a href="<?php echo e(route('accessories.edit', $accessory->id)); ?>"><?php echo e(trans('admin/accessories/general.edit')); ?></a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>


<div class="row">
  <div class="col-md-9">

    <div class="box box-default">
      <div class="box-body">
        <div class="table table-responsive">

            <table
                    data-cookie-id-table="usersTable"
                    data-pagination="true"
                    data-id-table="usersTable"
                    data-search="true"
                    data-side-pagination="server"
                    data-show-columns="true"
                    data-show-export="true"
                    data-show-refresh="true"
                    data-sort-order="asc"
                    id="usersTable"
                    class="table table-striped snipe-table"
                    data-url="<?php echo e(route('api.accessories.checkedout', $accessory->id)); ?>"
                    data-export-options='{
                    "fileName": "export-accessories-<?php echo e(str_slug($accessory->name)); ?>-users-<?php echo e(date('Y-m-d')); ?>",
                    "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                    }'>
                <thead>
                <tr>
                    <th data-searchable="false" data-formatter="usersLinkFormatter" data-sortable="false" data-field="name"><?php echo e(trans('general.user')); ?></th>
                    <th data-searchable="false" data-sortable="false" data-field="checkout_notes"><?php echo e(trans('general.notes')); ?></th>
                    <th data-searchable="false" data-formatter="dateDisplayFormatter" data-sortable="false" data-field="last_checkout"><?php echo e(trans('admin/hardware/table.checkout_date')); ?></th>
                    <th data-searchable="false" data-sortable="false" data-field="actions" data-formatter="accessoriesInOutFormatter"><?php echo e(trans('table.actions')); ?></th>
                </tr>
                </thead>

            </table>
        </div>
      </div>
    </div>
  </div>


  <!-- side address column -->
  <div class="col-md-3">

      <?php if($accessory->image!=''): ?>
          <div class="col-md-12 text-center" style="padding-bottom: 15px;">
              <a href="<?php echo e(Storage::disk('public')->url('accessories/'.e($accessory->image))); ?>" data-toggle="lightbox"><img src="<?php echo e(Storage::disk('public')->url('accessories/'.e($accessory->image))); ?>" class="img-responsive img-thumbnail" alt="<?php echo e($accessory->name); ?>"></a>
          </div>
      <?php endif; ?>

      <div class="text-center">
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('checkout', \App\Models\Accessory::class)): ?>
              <a href="<?php echo e(route('checkout/accessory', $accessory->id)); ?>" style="margin-right:5px;" class="btn btn-primary btn-sm" <?php echo e((($accessory->numRemaining() > 0 ) ? '' : ' disabled')); ?>><?php echo e(trans('general.checkout')); ?></a>
          <?php endif; ?>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
<?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/accessories/view.blade.php ENDPATH**/ ?>