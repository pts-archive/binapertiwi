<?php $__env->startSection('title'); ?>
<?php echo e(trans('general.depreciation_report')); ?> 
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-body">


          <?php if(($depreciations) && ($depreciations->count() > 0)): ?>
        <div class="table-responsive">

            <table
                    data-cookie-id-table="depreciationReport"
                    data-pagination="true"
                    data-id-table="depreciationReport"
                    data-search="true"
                    data-side-pagination="client"
                    data-show-columns="true"
                    data-show-export="true"
                    data-show-refresh="true"
                    data-sort-order="asc"
                    id="depreciationReport"
                    class="table table-striped snipe-table"
                    data-export-options='{
                        "fileName": "depreciation-report-<?php echo e(date('Y-m-d')); ?>",
                        "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                        }'>

            <thead>
              <tr role="row">
                <th class="col-sm-1" data-visible="false"><?php echo e(trans('admin/companies/table.title')); ?></th>
                <th class="col-sm-1" data-visible="false"><?php echo e(trans('admin/categories/general.category_name')); ?></th>
                <th class="col-sm-1"><?php echo e(trans('admin/hardware/table.asset_tag')); ?></th>
                <th class="col-sm-1" data-visible="false"><?php echo e(trans('admin/hardware/table.title')); ?></th>
                <?php if($snipeSettings->display_asset_name): ?>
                <th class="col-sm-1" data-visible="false"><?php echo e(trans('general.name')); ?></th>
                <?php endif; ?>
                <th class="col-sm-1"><?php echo e(trans('admin/hardware/table.serial')); ?></th>
                <th class="col-sm-1"><?php echo e(trans('admin/depreciations/general.depreciation_name')); ?></th>
                <th class="col-sm-1"><?php echo e(trans('admin/depreciations/general.number_of_months')); ?></th>
                <th class="col-sm-1"><?php echo e(trans('admin/hardware/table.status')); ?></th>
                <th class="col-sm-1"><?php echo e(trans('admin/hardware/table.checkoutto')); ?></th>
                <th class="col-sm-1" data-visible="false"><?php echo e(trans('admin/hardware/table.location')); ?></th>
                <th class="col-sm-1"><?php echo e(trans('admin/hardware/table.purchase_date')); ?></th>
                <th class="col-sm-1"><?php echo e(trans('admin/hardware/table.eol')); ?></th>
                <th class="col-sm-1 align-right"><?php echo e(trans('admin/hardware/table.purchase_cost')); ?></th>
                <th class="col-sm-1 align-right"><?php echo e(trans('admin/hardware/table.book_value')); ?></th>
                <th class="col-sm-1 align-right"><?php echo e(trans('admin/hardware/table.monthly_depreciation')); ?></th>
                <th class="col-sm-1 align-right"><?php echo e(trans('admin/hardware/table.diff')); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e(is_null($asset->company) ? '' : $asset->company->name); ?></td>
                <td>
                  <?php if($asset->model): ?>
                  <?php echo e($asset->model->category->name); ?>

                  <?php endif; ?>
                </td>
                <td>
                  <?php if($asset->deleted_at!=''): ?>
                  <del><?php echo e($asset->asset_tag); ?></del>
                  <?php else: ?>
                  <?php echo e($asset->asset_tag); ?>

                  <?php endif; ?>
                </td>
                <td><?php echo e($asset->model->name); ?></td>
                <?php if($snipeSettings->display_asset_name): ?>
                <td><?php echo e($asset->name); ?></td>
                <?php endif; ?>
                <td><?php echo e($asset->serial); ?></td>
                <td>
                  <?php if($asset->model->depreciation): ?>
                  <?php echo e($asset->model->depreciation->name); ?>

                  <?php endif; ?>
                </td>
                <td>
                  <?php if($asset->model->depreciation): ?>
                  <?php echo e($asset->model->depreciation->months); ?>

                  <?php endif; ?>
                </td>
                <td>
                  <?php echo e($asset->assetstatus->name); ?>

                  (<?php echo e($asset->present()->statusMeta); ?>)
                </td>
                <td>
                    <?php if(($asset->checkedOutToUser()) && ($asset->assigned)): ?>
                       <?php echo e($asset->assigned->getFullNameAttribute()); ?>

                    <?php else: ?>

                        <?php if($asset->assigned): ?>
                            <?php echo e($asset->assigned->name); ?>

                        <?php endif; ?>
                    <?php endif; ?>
                </td>
                <td>
                  <?php if($asset->location): ?>
                  <?php echo e($asset->location->name); ?>

                  <?php elseif($asset->defaultloc): ?>
                  <?php echo e($asset->defaultloc->name); ?>

                  <?php endif; ?>
                </td>
                <td>
                  <?php echo e(\Carbon\Carbon::parse($asset->purchase_date)->format('Y-m-d')); ?>

                 </td>

                <td>
                  <?php if($asset->model->eol): ?> <?php echo e($asset->present()->eol_date()); ?>

                  <?php endif; ?>
                </td>

                <?php if($asset->purchase_cost > 0): ?>
                  <td class="align-right">
                    <?php if($asset->location && $asset->location->currency): ?>
                    <?php echo e($asset->location->currency); ?>

                    <?php else: ?>
                    <?php echo e($snipeSettings->default_currency); ?>

                    <?php endif; ?>
                    <?php echo e(\App\Helpers\Helper::formatCurrencyOutput($asset->purchase_cost)); ?>

                  </td>
                  <td class="align-right">
                    <?php if($asset->location && $asset->location->currency): ?>
                    <?php echo e($asset->location->currency); ?>

                    <?php else: ?>
                    <?php echo e($snipeSettings->default_currency); ?>

                    <?php endif; ?>

                    <?php echo e(\App\Helpers\Helper::formatCurrencyOutput($asset->getDepreciatedValue())); ?>

                  </td>
                  <td class="align-right">
                    <?php if($asset->model->depreciation): ?>
                      <?php if($asset->location && $asset->location->currency): ?>
                      <?php echo e($asset->location->currency); ?>

                      <?php else: ?>
                      <?php echo e($snipeSettings->default_currency); ?>

                      <?php endif; ?>

                      <?php echo e(\App\Helpers\Helper::formatCurrencyOutput(($asset->model->eol > 0 ? ($asset->purchase_cost / $asset->model->eol) : 0))); ?>

                    <?php endif; ?>
                  </td>
                  <td class="align-right">
                    <?php if($asset->location && $asset->location->currency): ?>
                    <?php echo e($asset->location->currency); ?>

                    <?php else: ?>
                    <?php echo e($snipeSettings->default_currency); ?>

                    <?php endif; ?>

                    -<?php echo e(\App\Helpers\Helper::formatCurrencyOutput(($asset->purchase_cost - $asset->getDepreciatedValue()))); ?>

                  </td>
                <?php else: ?>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                <?php endif; ?>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div> <!-- /.table-responsive-->
              <?php else: ?>
              <div class="col-md-12">
                  <div class="alert alert-warning fade in">
                      <i class="fa fa-warning faa-pulse animated"></i>
                      <strong>Warning: </strong>
                      You do not currently have any depreciations set up.
                      Please set up at least one depreciation to view the depreciation report.
                  </div>
              </div>
          <?php endif; ?>
      </div> <!-- /.box-body-->
    </div> <!--/box.box-default-->
  </div> <!-- /.col-md-12-->
</div> <!--/.row-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
    <?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/reports/depreciation.blade.php ENDPATH**/ ?>