<?php $__env->startSection('title'); ?>

 <?php echo e($manufacturer->name); ?>

 <?php echo e(trans('general.manufacturer')); ?>

##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
  <div class="btn-group pull-right">
     <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php echo e(trans('button.actions')); ?>

     <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="<?php echo e(route('manufacturers.edit', $manufacturer->id)); ?>"><?php echo e(trans('admin/manufacturers/table.update')); ?></a></li>
        <li><a href="<?php echo e(route('manufacturers.create')); ?>"><?php echo e(trans('admin/manufacturers/table.create')); ?></a></li>
      </ul>
  </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="nav-tabs-custom">

      <ul class="nav nav-tabs">
        <li class="active">
          <a href="#assets" data-toggle="tab">Assets</a>
        </li>
        <li>
          <a href="#licenses" data-toggle="tab">Licenses</a>
        </li>
        <li>
          <a href="#accessories" data-toggle="tab">Accessories</a>
        </li>
        <li>
          <a href="#consumables" data-toggle="tab">Consumables</a>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane fade in active" id="assets">

          <table
                  data-columns="<?php echo e(\App\Presenters\AssetPresenter::dataTableLayout()); ?>"
                  data-cookie-id-table="assetsListingTable"
                  data-pagination="true"
                  data-id-table="assetsListingTable"
                  data-search="true"
                  data-show-footer="true"
                  data-side-pagination="server"
                  data-show-columns="true"
                  data-show-export="true"
                  data-show-refresh="true"
                  data-sort-order="asc"
                  id="assetsListingTable"
                  class="table table-striped snipe-table"
                  data-url="<?php echo e(route('api.assets.index', ['manufacturer_id' => $manufacturer->id, 'itemtype' => 'assets'])); ?>"
                  data-export-options='{
              "fileName": "export-manufacturers-<?php echo e(str_slug($manufacturer->name)); ?>-assets-<?php echo e(date('Y-m-d')); ?>",
              "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
              }'>
          </table>

        </div> <!-- /.tab-pane assets -->

        <div class="tab-pane fade" id="licenses">

          <table
                  data-columns="<?php echo e(\App\Presenters\LicensePresenter::dataTableLayout()); ?>"
                  data-cookie-id-table="licensesTable"
                  data-pagination="true"
                  data-id-table="licensesTable"
                  data-search="true"
                  data-show-footer="true"
                  data-side-pagination="server"
                  data-show-columns="true"
                  data-show-export="true"
                  data-show-refresh="true"
                  data-sort-order="asc"
                  id="licensesTable"
                  class="table table-striped snipe-table"
                  data-url="<?php echo e(route('api.licenses.index', ['manufacturer_id' => $manufacturer->id])); ?>"
                  data-export-options='{
              "fileName": "export-manufacturers-<?php echo e(str_slug($manufacturer->name)); ?>-licenses-<?php echo e(date('Y-m-d')); ?>",
              "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
              }'>
          </table>


        </div><!-- /.tab-pan licenses-->

        <div class="tab-pane fade" id="accessories">

          <table
                  data-columns="<?php echo e(\App\Presenters\AccessoryPresenter::dataTableLayout()); ?>"
                  data-cookie-id-table="accessoriesTable"
                  data-pagination="true"
                  data-id-table="accessoriesTable"
                  data-search="true"
                  data-show-footer="true"
                  data-side-pagination="server"
                  data-show-columns="true"
                  data-show-export="true"
                  data-show-refresh="true"
                  data-sort-order="asc"
                  id="accessoriesTable"
                  class="table table-striped snipe-table"
                  data-url="<?php echo e(route('api.accessories.index', ['manufacturer_id' => $manufacturer->id])); ?>"
                  data-export-options='{
              "fileName": "export-manufacturers-<?php echo e(str_slug($manufacturer->name)); ?>-accessories-<?php echo e(date('Y-m-d')); ?>",
              "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
              }'>
          </table>


        </div> <!-- /.tab-pan accessories-->

        <div class="tab-pane fade" id="consumables">

          <table
                  data-columns="<?php echo e(\App\Presenters\ConsumablePresenter::dataTableLayout()); ?>"
                  data-cookie-id-table="consumablesTable"
                  data-pagination="true"
                  data-id-table="consumablesTable"
                  data-search="true"
                  data-show-footer="true"
                  data-side-pagination="server"
                  data-show-columns="true"
                  data-show-export="true"
                  data-show-refresh="true"
                  data-sort-order="asc"
                  id="consumablesTable"
                  class="table table-striped snipe-table"
                  data-url="<?php echo e(route('api.consumables.index', ['manufacturer_id' => $manufacturer->id])); ?>"
                  data-export-options='{
              "fileName": "export-manufacturers-<?php echo e(str_slug($manufacturer->name)); ?>-consumabled-<?php echo e(date('Y-m-d')); ?>",
              "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
              }'>
          </table>



        </div> <!-- /.tab-pan consumables-->

      </div> <!-- /.tab-content -->
    </div>  <!-- /.nav-tabs-custom -->
  </div><!-- /. col-md-12 -->
</div> <!-- /.row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
<?php echo $__env->make('partials.bootstrap-table', ['exportFile' => 'manufacturer' . $manufacturer->name . '-export', 'search' => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/manufacturers/view.blade.php ENDPATH**/ ?>