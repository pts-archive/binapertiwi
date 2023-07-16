


<?php $__env->startSection('title'); ?>
<?php echo e(trans('admin/suppliers/table.view')); ?> -
<?php echo e($supplier->name); ?>

<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
  <a href="<?php echo e(route('suppliers.edit', $supplier->id)); ?>" class="btn btn-default pull-right">
  <?php echo e(trans('admin/suppliers/table.update')); ?></a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-9">



    <!-- start tables -->

    <div class="box box-default">
      <div class="box-header with-border">
        <div class="box-heading">
          <h2 class="box-title"> <?php echo e(trans('general.assets')); ?></h2>
        </div>
      </div><!-- /.box-header -->

      <div class="box-body">
        <!-- checked out suppliers table -->
        <div class="table-responsive">

          <table
              data-cookie-id-table="suppliersAssetsTable"
              data-pagination="true"
              data-id-table="suppliersAssetsTable"
              data-search="true"
              data-show-footer="true"
              data-side-pagination="server"
              data-show-columns="true"
              data-show-export="true"
              data-show-refresh="true"
              data-sort-order="asc"
              id="suppliersAssetsTable"
              class="table table-striped snipe-table"
              data-url="<?php echo e(route('api.assets.index', ['supplier_id' => $supplier->id])); ?>"
              data-export-options='{
              "fileName": "export-<?php echo e(str_slug($supplier->name)); ?>-assets-<?php echo e(date('Y-m-d')); ?>",
              "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
              }'>

            <thead>
            <tr>
              <th data-searchable="false" data-visible="false" data-sortable="true" data-field="id"><?php echo e(trans('general.id')); ?></th>
              <th data-searchable="false" data-visible="true" data-sortable="true" data-formatter="imageFormatter" data-field="image"><?php echo e(trans('admin/hardware/table.image')); ?></th>
              <th data-searchable="false" data-sortable="true" data-formatter="hardwareLinkFormatter" data-field="name"><?php echo e(trans('general.name')); ?></th>
              <th data-searchable="false" data-formatter="modelsLinkObjFormatter" data-sortable="false" data-field="model"><?php echo e(trans('admin/hardware/form.model')); ?></th>
              <th data-searchable="false" data-sortable="false" data-field="asset_tag" data-formatter="hardwareLinkFormatter"><?php echo e(trans('admin/hardware/form.tag')); ?></th>
              <th data-searchable="false" data-sortable="false" data-field="serial"><?php echo e(trans('admin/hardware/form.serial')); ?></th>
              <th data-searchable="false" data-visible="false" data-sortable="true" data-field="category" data-formatter="categoriesLinkObjFormatter"><?php echo e(trans('general.category')); ?></th>
              <th data-field="purchase_cost" data-footer-formatter="sumFormatter"><?php echo e(trans('general.purchase_cost')); ?></th>
              <th data-searchable="false" data-sortable="false" data-field="checkincheckout" data-formatter="hardwareInOutFormatter"><?php echo e(trans('general.checkin')); ?>/<?php echo e(trans('general.checkout')); ?></th>
              <th data-searchable="false" data-sortable="false" data-field="actions" data-formatter="hardwareActionsFormatter"><?php echo e(trans('table.actions')); ?></th>
            </tr>
            </thead>
          </table>
        </div><!-- /.table-responsive -->
      </div><!-- /.box-body -->
      </div> <!--/.box-->

        <!--<div class="box box-default">-->

        <!--  <div class="box-header with-border">-->
        <!--    <div class="box-heading">-->
        <!--      <h2 class="box-title"> <?php echo e(trans('general.accessories')); ?></h2>-->
        <!--    </div>-->
        <!--  </div><!-- /.box-header -->

        <!--  <div class="box-body">-->
        <!--    <div class="table-responsive">-->

        <!--      <table-->
        <!--              data-columns="<?php echo e(\App\Presenters\AccessoryPresenter::dataTableLayout()); ?>"-->
        <!--              data-cookie-id-table="suppliersAccessoriesTable"-->
        <!--              data-pagination="true"-->
        <!--              data-id-table="suppliersAccessoriesTable"-->
        <!--              data-search="true"-->
        <!--              data-side-pagination="server"-->
        <!--              data-show-columns="true"-->
        <!--              data-show-export="true"-->
        <!--              data-show-refresh="true"-->
        <!--              data-sort-order="asc"-->
        <!--              id="suppliersAccessoriesTable"-->
        <!--              class="table table-striped snipe-table"-->
        <!--              data-url="<?php echo e(route('api.accessories.index', ['supplier_id' => $supplier->id])); ?>"-->
        <!--              data-export-options='{-->
        <!--      "fileName": "export-<?php echo e(str_slug($supplier->name)); ?>-accessories-<?php echo e(date('Y-m-d')); ?>",-->
        <!--      "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]-->
        <!--      }'>-->

        <!--      </table>-->
        <!--    </div><!-- /.table-responsive -->
        <!--  </div><!-- /.box-body -->
        <!--</div> <!--/.box-->



          <div class="box box-default">

            <?php if($supplier->id): ?>
              <div class="box-header with-border">
                <div class="box-heading">
                  <h2 class="box-title"> <?php echo e(trans('general.licenses')); ?></h2>
                </div>
              </div><!-- /.box-header -->
            <?php endif; ?>

            <div class="box-body">
              <div class="table-responsive">


                <table
                        data-columns="<?php echo e(\App\Presenters\LicensePresenter::dataTableLayout()); ?>"
                        data-cookie-id-table="suppliersLicensesTable"
                        data-pagination="true"
                        data-id-table="suppliersLicensesTable"
                        data-search="true"
                        data-show-footer="true"
                        data-side-pagination="server"
                        data-show-columns="true"
                        data-show-export="true"
                        data-show-refresh="true"
                        data-sort-order="asc"
                        id="suppliersLicensesTable"
                        class="table table-striped snipe-table"
                        data-url="<?php echo e(route('api.licenses.index', ['supplier_id' => $supplier->id])); ?>"
                        data-export-options='{
                    "fileName": "export-<?php echo e(str_slug($supplier->name)); ?>-licenses-<?php echo e(date('Y-m-d')); ?>",
                    "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                    }'>


              </table>
            </div><!-- /.table-responsive -->
          </div><!-- /.box-body -->
        </div> <!--/.box-->



        <div class="box box-default">

          <?php if($supplier->id): ?>
            <div class="box-header with-border">
              <div class="box-heading">
                <h2 class="box-title"> Improvements</h2>
              </div>
            </div><!-- /.box-header -->
          <?php endif; ?>

          <div class="box-body">
            <div class="table-responsive">
            <table class="table table-hover">
              <thead>
              <tr>
                <th class="col-md-2"><span class="line"></span><?php echo e(trans('admin/asset_maintenances/table.asset_name')); ?></th>
                <th class="col-md-2"><span class="line"></span><?php echo e(trans('admin/asset_maintenances/form.asset_maintenance_type')); ?></th>
                <th class="col-md-2"><span class="line"></span><?php echo e(trans('admin/asset_maintenances/form.start_date')); ?></th>
                <th class="col-md-2"><span class="line"></span><?php echo e(trans('admin/asset_maintenances/form.completion_date')); ?></th>
                <th class="col-md-2"><span class="line"></span><?php echo e(trans('admin/asset_maintenances/table.is_warranty')); ?></th>
                <th class="col-md-2"><span class="line"></span><?php echo e(trans('admin/asset_maintenances/form.cost')); ?></th>
                <th class="col-md-1"><span class="line"></span><?php echo e(trans('table.actions')); ?></th>
              </tr>
              </thead>
              <tbody>
              <?php $totalCost = 0; ?>
              <?php if($supplier->asset_maintenances): ?>
                <?php $__currentLoopData = $supplier->asset_maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $improvement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if(is_null($improvement->deleted_at)): ?>
                    <tr>
                      <td>
                        <?php if($improvement->asset): ?>
                          <a href="<?php echo e(route('hardware.show', $improvement->asset_id)); ?>"><?php echo e($improvement->asset->name); ?></a>
                        <?php else: ?>
                            (deleted asset)
                        <?php endif; ?>
                      </td>
                      <td><?php echo e($improvement->asset_maintenance_type); ?></td>
                      <td><?php echo e($improvement->start_date); ?></td>
                      <td><?php echo e($improvement->completion_date); ?></td>
                      <td><?php echo e($improvement->is_warranty ? trans('admin/asset_maintenances/message.warranty') : trans('admin/asset_maintenances/message.not_warranty')); ?></td>
                      <td><?php echo e(sprintf( $snipeSettings->default_currency. '%01.2f', $improvement->cost)); ?></td>
                        <?php $totalCost += $improvement->cost; ?>
                      <td><a href="<?php echo e(route('maintenances.edit', $improvement->id)); ?>" class="btn btn-warning"><i class="fa fa-pencil icon-white" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                  <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
              </tbody>
              <tfoot>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo e(sprintf($snipeSettings->default_currency . '%01.2f', $totalCost)); ?></td>
              </tr>
              </tfoot>
            </table>
          </div><!-- /.table-responsive -->
        </div><!-- /.box-body -->
     </div> <!--/.box-->

  </div> <!--/col-md-9-->

  <!-- side address column -->
  <div class="col-md-3">

    <?php if(($supplier->state!='') && ($supplier->country!='') && (config('services.google.maps_api_key'))): ?>
      <div class="col-md-12 text-center" style="padding-bottom: 20px;">
        <img src="https://maps.googleapis.com/maps/api/staticmap?markers=<?php echo e(urlencode($supplier->address.','.$supplier->city.' '.$supplier->state.' '.$supplier->country.' '.$supplier->zip)); ?>&size=500x300&maptype=roadmap&key=<?php echo e(config('services.google.maps_api_key')); ?>" class="img-responsive img-thumbnail" alt="Map">
      </div>
    <?php endif; ?>


    <ul class="list-unstyled" style="line-height: 25px; padding-bottom: 20px; padding-top: 20px;">
      <?php if($supplier->contact): ?>
      <li><i class="fa fa-user" aria-hidden="true"></i> <?php echo e($supplier->contact); ?></li>
      <?php endif; ?>
      <?php if($supplier->phone): ?>
      <li><i class="fa fa-phone"></i>
        <a href="tel:<?php echo e($supplier->phone); ?>"><?php echo e($supplier->phone); ?></a>
      </li>
      <?php endif; ?>
      <?php if($supplier->fax): ?>
      <li><i class="fa fa-print"></i> <?php echo e($supplier->fax); ?></li>
      <?php endif; ?>

      <?php if($supplier->email): ?>
      <li>
        <i class="fa fa-envelope-o"></i>
        <a href="mailto:<?php echo e($supplier->email); ?>">
        <?php echo e($supplier->email); ?>

        </a>
      </li>
      <?php endif; ?>

      <?php if($supplier->url): ?>
      <li>
        <i class="fa fa-globe"></i>
        <a href="<?php echo e($supplier->url); ?>" target="_new"><?php echo e($supplier->url); ?></a>
      </li>
      <?php endif; ?>

      <?php if($supplier->address): ?>
      <li><br>
        <?php echo e($supplier->address); ?>


        <?php if($supplier->address2): ?>
        <br>
        <?php echo e($supplier->address2); ?>

        <?php endif; ?>
        <?php if(($supplier->city) || ($supplier->state)): ?>
        <br>
        <?php echo e($supplier->city); ?> <?php echo e(strtoupper($supplier->state)); ?> <?php echo e($supplier->zip); ?> <?php echo e(strtoupper($supplier->country)); ?>

        <?php endif; ?>
      </li>
      <?php endif; ?>

      <?php if($supplier->notes): ?>
      <li><i class="fa fa-comment"></i> <?php echo e($supplier->notes); ?></li>
      <?php endif; ?>

    </ul>
      <?php if($supplier->image!=''): ?>
        <div class="col-md-12 text-center" style="padding-bottom: 20px;">
          <img src="<?php echo e(Storage::disk('public')->url(app('suppliers_upload_url').e($supplier->image))); ?>" class="img-responsive img-thumbnail" alt="<?php echo e($supplier->name); ?>">
        </div>
      <?php endif; ?>

  </div> <!--/col-md-3-->
</div> <!--/row-->



<?php $__env->stopSection(); ?>
<?php $__env->startSection('moar_scripts'); ?>
  <?php echo $__env->make('partials.bootstrap-table', [
      'showFooter' => true,
      ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/suppliers/view.blade.php ENDPATH**/ ?>