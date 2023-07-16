<?php
?>



<?php $__env->startSection('title'); ?>
    <?php echo e(trans('general.unaccepted_asset_report')); ?>

    <?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-body">
        <div class="table-responsive">

            <table
                data-cookie-id-table="unacceptedAssetsReport"
                data-pagination="true"
                data-id-table="unacceptedAssetsReport"
                data-search="true"
                data-side-pagination="client"
                data-show-columns="true"
                data-show-export="true"
                data-show-refresh="true"
                data-sort-order="asc"
                id="unacceptedAssetsReport"
                class="table table-striped snipe-table"
                data-export-options='{
                    "fileName": "maintenance-report-<?php echo e(date('Y-m-d')); ?>",
                    "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                    }'>
            <thead>
              <tr role="row">
                <th class="col-sm-1"><?php echo e(trans('admin/companies/table.title')); ?></th>
                <th class="col-sm-1"><?php echo e(trans('general.category')); ?></th>
                <th class="col-sm-1"><?php echo e(trans('admin/hardware/form.model')); ?></th>
                <th class="col-sm-1"><?php echo e(trans('admin/hardware/form.name')); ?></th>
                <th class="col-sm-1"><?php echo e(trans('admin/hardware/table.asset_tag')); ?></th>
                <th class="col-sm-1"><?php echo e(trans('admin/hardware/table.checkoutto')); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php if($assetsForReport): ?>
              <?php $__currentLoopData = $assetsForReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assetItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($assetItem): ?>
                  <tr>
                    <td><?php echo e(($assetItem->company) ? $assetItem->company->name : ''); ?></td>
                    <td><?php echo e($assetItem->model->category->name); ?></td>
                    <td><?php echo e($assetItem->model->name); ?></td>
                    <td><?php echo $assetItem->present()->nameUrl(); ?></td>
                    <td><?php echo e($assetItem->asset_tag); ?></td>
                    <td><?php echo ($assetItem->assignedTo) ? $assetItem->assignedTo->present()->nameUrl() : 'Deleted user'; ?></td>
                  </tr>
                  <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </tbody>
            <tfoot>
              <tr>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
    <?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/reports/unaccepted_assets.blade.php ENDPATH**/ ?>