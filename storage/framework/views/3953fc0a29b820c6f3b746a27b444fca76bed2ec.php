<?php $__env->startSection('title'); ?>
<?php echo e(trans('admin/manufacturers/table.asset_manufacturers')); ?> 
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_right'); ?>
  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', \App\Models\Manufacturer::class)): ?>
    <a href="<?php echo e(route('manufacturers.create')); ?>" class="btn btn-primary pull-right">
    <?php echo e(trans('general.create')); ?></a>
  <?php endif; ?>

  <?php if(Request::get('deleted')=='true'): ?>
    <a class="btn btn-default pull-right" href="<?php echo e(route('manufacturers.index')); ?>" style="margin-right: 5px;"><?php echo e(trans('general.show_current')); ?></a>
  <?php else: ?>
    <a class="btn btn-default pull-right" href="<?php echo e(route('manufacturers.index', ['deleted' => 'true'])); ?>" style="margin-right: 5px;">
      <?php echo e(trans('general.show_deleted')); ?></a>
  <?php endif; ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-body">
        <div class="table-responsive">

          <table
            data-columns="<?php echo e(\App\Presenters\ManufacturerPresenter::dataTableLayout()); ?>"
            data-cookie-id-table="manufacturersTable"
            data-pagination="true"
            data-id-table="manufacturersTable"
            data-search="true"
            data-show-footer="true"
            data-side-pagination="server"
            data-show-columns="true"
            data-show-export="true"
            data-show-refresh="true"
            data-sort-order="asc"
            id="manufacturersTable"
            class="table table-striped snipe-table"
            data-url="<?php echo e(route('api.manufacturers.index', ['deleted' => e(Request::get('deleted')) ])); ?>"
            data-export-options='{
              "fileName": "export-manufacturers-<?php echo e(date('Y-m-d')); ?>",
              "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
              }'>

          </table>
        </div>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
  <?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/manufacturers/index.blade.php ENDPATH**/ ?>