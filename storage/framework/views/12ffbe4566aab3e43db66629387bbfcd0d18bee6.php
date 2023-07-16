<?php $__env->startSection('title0'); ?>

  <?php if((Request::get('company_id')) && ($company)): ?>
    <?php echo e($company->name); ?>

  <?php endif; ?>



<?php if(Request::get('status')): ?>
  <?php if(Request::get('status')=='Pending'): ?>
    <?php echo e(trans('general.pending')); ?>

  <?php elseif(Request::get('status')=='RTD'): ?>
    <?php echo e(trans('general.ready_to_deploy')); ?>

  <?php elseif(Request::get('status')=='Deployed'): ?>
    <?php echo e(trans('general.deployed')); ?>

  <?php elseif(Request::get('status')=='Undeployable'): ?>
    <?php echo e(trans('general.undeployable')); ?>

  <?php elseif(Request::get('status')=='Deployable'): ?>
    <?php echo e(trans('general.deployed')); ?>

  <?php elseif(Request::get('status')=='Requestable'): ?>
    <?php echo e(trans('admin/hardware/general.requestable')); ?>

  <?php elseif(Request::get('status')=='Archived'): ?>
    <?php echo e(trans('general.archived')); ?>

  <?php elseif(Request::get('status')=='Deleted'): ?>
    <?php echo e(trans('general.deleted')); ?>

  <?php endif; ?>
<?php else: ?>
<?php echo e(trans('general.all')); ?>

<?php endif; ?>
<?php echo e(trans('general.assets')); ?>


  <?php if(Request::has('order_number')): ?>
    : Order #<?php echo e(Request::get('order_number')); ?>

  <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('title'); ?>
<?php echo $__env->yieldContent('title0'); ?>  ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
  <a href="<?php echo e(route('reports/custom')); ?>" style="margin-right: 5px;" class="btn btn-default">
    Custom Export</a>
  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', \App\Models\Asset::class)): ?>
  <a href="<?php echo e(route('hardware.create')); ?>" class="btn btn-primary pull-right"></i> <?php echo e(trans('general.create')); ?></a>
  <?php endif; ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-body">
        <?php echo e(Form::open([
          'method' => 'POST',
          'route' => ['hardware/bulkedit'],
          'class' => 'form-inline',
           'id' => 'bulkForm'])); ?>

          <div class="row">
            <div class="col-md-12">
              <?php if(Request::get('status')!='Deleted'): ?>
              <div id="toolbar">
                <label for="bulk_actions"><span class="sr-only">Bulk Actions</span></label>
                <select name="bulk_actions" class="form-control select2" aria-label="bulk_actions">
                  <option value="edit"><?php echo e(trans('button.edit')); ?></option>
                  <option value="delete"><?php echo e(trans('button.delete')); ?></option>
                  <option value="labels"><?php echo e(trans_choice('button.generate_labels', 2)); ?></option>
                </select>
                <button class="btn btn-primary" id="bulkEdit" disabled>Go</button>
              </div>
              <?php endif; ?>

              <table
                data-advanced-search="true"
                data-click-to-select="true"
                data-columns="<?php echo e(\App\Presenters\AssetPresenter::dataTableLayout()); ?>"
                data-cookie-id-table="assetsListingTable"
                data-pagination="true"
                data-id-table="assetsListingTable"
                data-search="true"
                data-side-pagination="server"
                data-show-columns="true"
                data-show-export="true"
                data-show-footer="true"
                data-show-refresh="true"
                data-sort-order="asc"
                data-sort-name="name"
                data-toolbar="#toolbar"
                id="assetsListingTable"
                class="table table-striped snipe-table"
                data-url="<?php echo e(route('api.assets.index',
                    array('status' => e(Request::get('status')),
                    'order_number'=>e(Request::get('order_number')),
                    'company_id'=>e(Request::get('company_id')),
                    'status_id'=>e(Request::get('status_id'))))); ?>"
                data-export-options='{
                "fileName": "export<?php echo e((Request::has('status')) ? '-'.str_slug(Request::get('status')) : ''); ?>-assets-<?php echo e(date('Y-m-d')); ?>",
                "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                }'>
              </table>

            </div><!-- /.col -->
          </div><!-- /.row -->
        <?php echo e(Form::close()); ?>

      </div><!-- ./box-body -->
    </div><!-- /.box -->
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
<?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/hardware/index.blade.php ENDPATH**/ ?>