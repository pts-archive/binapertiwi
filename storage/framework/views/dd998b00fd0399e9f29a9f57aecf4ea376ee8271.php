


<?php $__env->startSection('title'); ?>

 <?php echo e(trans('general.location')); ?>:
 <?php echo e($location->name); ?>

 
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-9">


    <div class="box box-default">
    <div class="box-header with-border">
        <div class="box-heading">
            <h2 class="box-title"><?php echo e(trans('general.users')); ?></h2>
        </div>
    </div>
      <div class="box-body">
            <div class="table table-responsive">

                <table
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
                        id="usersTable"
                        class="table table-striped snipe-table"
                        data-url="<?php echo e(route('api.users.index', ['location_id' => $location->id])); ?>"
                        data-export-options='{
                              "fileName": "export-locations-<?php echo e(str_slug($location->name)); ?>-users-<?php echo e(date('Y-m-d')); ?>",
                              "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                              }'>

                </table>
            </div><!-- /.table-responsive -->
          </div><!-- /.box-body -->
        </div> <!--/.box-->

      <div class="box box-default">
        <div class="box-header with-border">
          <div class="box-heading">
            <h2 class="box-title"><?php echo e(trans('general.assets')); ?></h2>
          </div>
        </div>
        <div class="box-body">
              <div class="table table-responsive">

                  <table
                          data-columns="<?php echo e(\App\Presenters\AssetPresenter::dataTableLayout()); ?>"
                          data-cookie-id-table="assetsListingTable"
                          data-pagination="true"
                          data-id-table="assetsListingTable"
                          data-search="true"
                          data-side-pagination="server"
                          data-show-columns="true"
                          data-show-export="true"
                          data-show-refresh="true"
                          data-sort-order="asc"
                          id="assetsListingTable"
                          class="table table-striped snipe-table"
                          data-url="<?php echo e(route('api.assets.index', ['location_id' => $location->id])); ?>"
                          data-export-options='{
                              "fileName": "export-locations-<?php echo e(str_slug($location->name)); ?>-assets-<?php echo e(date('Y-m-d')); ?>",
                              "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                              }'>
                  </table>

              </div><!-- /.table-responsive -->
            </div><!-- /.box-body -->
          </div> <!--/.box-->

      <!--<div class="box box-default">-->
      <!--  <div class="box-header with-border">-->
      <!--    <div class="box-heading">-->
      <!--      <h2 class="box-title"><?php echo e(trans('general.accessories')); ?></h2>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--  <div class="box-body">-->
      <!--        <div class="table table-responsive">-->

      <!--            <table-->
      <!--                    data-columns="<?php echo e(\App\Presenters\AccessoryPresenter::dataTableLayout()); ?>"-->
      <!--                    data-cookie-id-table="accessoriesListingTable"-->
      <!--                    data-pagination="true"-->
      <!--                    data-id-table="accessoriesListingTable"-->
      <!--                    data-search="true"-->
      <!--                    data-side-pagination="server"-->
      <!--                    data-show-columns="true"-->
      <!--                    data-show-export="true"-->
      <!--                    data-show-refresh="true"-->
      <!--                    data-sort-order="asc"-->
      <!--                    id="accessoriesListingTable"-->
      <!--                    class="table table-striped snipe-table"-->
      <!--                    data-url="<?php echo e(route('api.accessories.index', ['location_id' => $location->id])); ?>"-->
      <!--                    data-export-options='{-->
      <!--                        "fileName": "export-locations-<?php echo e(str_slug($location->name)); ?>-accessories-<?php echo e(date('Y-m-d')); ?>",-->
      <!--                        "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]-->
      <!--                        }'>-->
      <!--            </table>-->

      <!--        </div><!-- /.table-responsive -->
      <!--      </div><!-- /.box-body -->
      <!--    </div> <!--/.box-->

      <!--<div class="box box-default">-->
      <!--  <div class="box-header with-border">-->
      <!--    <div class="box-heading">-->
      <!--      <h2 class="box-title"><?php echo e(trans('general.consumables')); ?></h2>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--  <div class="box-body">-->
      <!--        <div class="table table-responsive">-->

      <!--            <table-->
      <!--                    data-columns="<?php echo e(\App\Presenters\ConsumablePresenter::dataTableLayout()); ?>"-->
      <!--                    data-cookie-id-table="consumablesListingTable"-->
      <!--                    data-pagination="true"-->
      <!--                    data-id-table="consumablesListingTable"-->
      <!--                    data-search="true"-->
      <!--                    data-side-pagination="server"-->
      <!--                    data-show-columns="true"-->
      <!--                    data-show-export="true"-->
      <!--                    data-show-refresh="true"-->
      <!--                    data-sort-order="asc"-->
      <!--                    id="consumablesListingTable"-->
      <!--                    class="table table-striped snipe-table"-->
      <!--                    data-url="<?php echo e(route('api.consumables.index', ['location_id' => $location->id])); ?>"-->
      <!--                    data-export-options='{-->
      <!--                        "fileName": "export-locations-<?php echo e(str_slug($location->name)); ?>-consumables-<?php echo e(date('Y-m-d')); ?>",-->
      <!--                        "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]-->
      <!--                        }'>-->
      <!--            </table>-->

      <!--        </div><!-- /.table-responsive -->-->
      <!--      </div><!-- /.box-body -->
      <!--    </div> <!--/.box-->

      <!--<div class="box box-default">-->
      <!--    <div class="box-header with-border">-->
      <!--        <div class="box-heading">-->
      <!--            <h2 class="box-title"><?php echo e(trans('general.components')); ?></h2>-->
      <!--        </div>-->
      <!--    </div>-->
      <!--    <div class="box-body">-->
      <!--        <div class="table table-responsive">-->

      <!--            <table-->
      <!--                    data-columns="<?php echo e(\App\Presenters\ComponentPresenter::dataTableLayout()); ?>"-->
      <!--                    data-cookie-id-table="componentsTable"-->
      <!--                    data-pagination="true"-->
      <!--                    data-id-table="componentsTable"-->
      <!--                    data-search="true"-->
      <!--                    data-side-pagination="server"-->
      <!--                    data-show-columns="true"-->
      <!--                    data-show-export="true"-->
      <!--                    data-show-refresh="true"-->
      <!--                    data-sort-order="asc"-->
      <!--                    id="componentsTable"-->
      <!--                    class="table table-striped snipe-table"-->
      <!--                    data-url="<?php echo e(route('api.components.index', ['location_id' => $location->id])); ?>"-->
      <!--                    data-export-options='{-->
      <!--                        "fileName": "export-locations-<?php echo e(str_slug($location->name)); ?>-components-<?php echo e(date('Y-m-d')); ?>",-->
      <!--                        "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]-->
      <!--                        }'>-->

      <!--            </table>-->
      <!--        </div><!-- /.table-responsive -->
      <!--    </div><!-- /.box-body -->
      <!--</div> <!--/.box-->


  </div><!--/.col-md-9-->

  <div class="col-md-3">

    <?php if($location->image!=''): ?>
      <div class="col-md-12 text-center" style="padding-bottom: 20px;">
        <img src="<?php echo e(Storage::disk('public')->url('locations/'.e($location->image))); ?>" class="img-responsive img-thumbnail" alt="<?php echo e($location->name); ?>">
      </div>
    <?php endif; ?>
      <div class="col-md-12">
        <ul class="list-unstyled" style="line-height: 25px; padding-bottom: 20px;">
          <?php if($location->address!=''): ?>
            <li><?php echo e($location->address); ?></li>
           <?php endif; ?>
            <?php if($location->address2!=''): ?>
              <li><?php echo e($location->address2); ?></li>
            <?php endif; ?>
            <?php if(($location->city!='') || ($location->state!='') || ($location->zip!='')): ?>
              <li><?php echo e($location->city); ?> <?php echo e($location->state); ?> <?php echo e($location->zip); ?></li>
            <?php endif; ?>
            <?php if($location->manager): ?>
              <li><?php echo e(trans('admin/users/table.manager')); ?>: <?php echo $location->manager->present()->nameUrl(); ?></li>
            <?php endif; ?>
            <?php if($location->parent): ?>
              <li><?php echo e(trans('admin/locations/table.parent')); ?>: <?php echo $location->parent->present()->nameUrl(); ?></li>
            <?php endif; ?>
              <?php if($location->ldap_ou): ?>
                  <li><?php echo e(trans('admin/locations/table.ldap_ou')); ?>: <?php echo e($location->ldap_ou); ?></li>
              <?php endif; ?>
        </ul>

        <?php if(($location->state!='') && ($location->country!='') && (config('services.google.maps_api_key'))): ?>
          <div class="col-md-12 text-center">
            <img src="https://maps.googleapis.com/maps/api/staticmap?markers=<?php echo e(urlencode($location->address.','.$location->city.' '.$location->state.' '.$location->country.' '.$location->zip)); ?>&size=500x300&maptype=roadmap&key=<?php echo e(config('services.google.maps_api_key')); ?>" class="img-responsive img-thumbnail" alt="Map">
          </div>
        <?php endif; ?>

      </div>

		<div class="col-md-12">
			<a href="<?php echo e(route('locations.edit', ['location' => $location->id])); ?>" style="width: 50%;" class="btn btn-sm btn-primary pull-left"><?php echo e(trans('admin/locations/table.update')); ?> </a>
		</div>
        <div class="col-md-12" style="padding-top: 5px;">
			<a href="<?php echo e(route('locations.print_assigned', ['locationId' => $location->id])); ?>" style="width: 50%;" class="btn btn-sm btn-default pull-left"><?php echo e(trans('admin/locations/table.print_assigned')); ?> </a>
		</div>
		<div class="col-md-12" style="padding-top: 5px;">
			<a href="<?php echo e(route('locations.print_all_assigned', ['locationId' => $location->id])); ?>" style="width: 50%;" class="btn btn-sm btn-default pull-left"><?php echo e(trans('admin/locations/table.print_all_assigned')); ?> </a>
		</div>
		
  </div>

  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
<?php echo $__env->make('partials.bootstrap-table', [
    'exportFile' => 'locations-export',
    'search' => true
 ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/locations/view.blade.php ENDPATH**/ ?>