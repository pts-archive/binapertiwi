<?php $__env->startSection('title'); ?>

 <?php echo e($category->name); ?>

 <?php echo e(ucwords($category_type_route)); ?>


##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
<div class="btn-group pull-right">
  <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php echo e(trans('button.actions')); ?>

    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="<?php echo e(route('categories.edit', ['category' => $category->id])); ?>"><?php echo e(trans('admin/categories/general.edit')); ?></a></li>
    <li><a href="<?php echo e(route('categories.create')); ?>"><?php echo e(trans('general.create')); ?></a></li>
  </ul>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-body">

        <table

                <?php if($category->category_type=='asset'): ?>

                  data-columns="<?php echo e(\App\Presenters\AssetPresenter::dataTableLayout()); ?>"
                  data-cookie-id-table="categoryAssetsTable"
                  id="categoryAssetsTable"
                  data-id-table="categoryAssetsTable"
                  data-export-options='{
                    "fileName": "export-<?php echo e(str_slug($category->name)); ?>-assets-<?php echo e(date('Y-m-d')); ?>",
                    "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                    }'
                <?php elseif($category->category_type=='accessory'): ?>
                  data-columns="<?php echo e(\App\Presenters\AccessoryPresenter::dataTableLayout()); ?>"
                  data-cookie-id-table="categoryAccessoryTable"
                  id="categoryAccessoryTable"
                  data-id-table="categoryAccessoryTable"
                  data-export-options='{
                      "fileName": "export-<?php echo e(str_slug($category->name)); ?>-accessories-<?php echo e(date('Y-m-d')); ?>",
                      "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                      }'
                <?php elseif($category->category_type=='consumable'): ?>
                  data-columns="<?php echo e(\App\Presenters\ConsumablePresenter::dataTableLayout()); ?>"
                  data-cookie-id-table="categoryConsumableTable"
                  id="categoryConsumableTable"
                  data-id-table="categoryConsumableTable"
                  data-export-options='{
                      "fileName": "export-<?php echo e(str_slug($category->name)); ?>-consumables-<?php echo e(date('Y-m-d')); ?>",
                      "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                      }'
                <?php elseif($category->category_type=='component'): ?>
                  data-columns="<?php echo e(\App\Presenters\ComponentPresenter::dataTableLayout()); ?>"
                  data-cookie-id-table="categoryCompomnentTable"
                  id="categoryCompomnentTable"
                  data-id-table="categoryCompomnentTable"
                  data-export-options='{
                      "fileName": "export-<?php echo e(str_slug($category->name)); ?>-components-<?php echo e(date('Y-m-d')); ?>",
                      "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                      }'
                <?php elseif($category->category_type=='license'): ?>
                data-columns="<?php echo e(\App\Presenters\LicensePresenter::dataTableLayout()); ?>"
                data-cookie-id-table="categoryLicenseTable"
                id="categoryLicenseTable"
                data-id-table="categoryLicenseTable"
                data-export-options='{
                      "fileName": "export-<?php echo e(str_slug($category->name)); ?>-licenses-<?php echo e(date('Y-m-d')); ?>",
                      "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                      }'
                <?php endif; ?>

                data-pagination="true"
                data-search="true"
                data-show-footer="true"
                data-side-pagination="server"
                data-show-columns="true"
                data-show-export="true"
                data-show-refresh="true"
                data-sort-order="asc"
                class="table table-striped snipe-table"
                data-url="<?php echo e(route('api.'.$category_type_route.'.index',['category_id'=> $category->id])); ?>">
            
      </table>

      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
<?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/categories/view.blade.php ENDPATH**/ ?>