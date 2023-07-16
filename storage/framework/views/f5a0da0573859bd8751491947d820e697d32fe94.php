<?php $__env->startSection('title'); ?>
    <?php echo e($company->name); ?>

    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">


                    <li class="active">
                        <a href="#asset_tab" data-toggle="tab">
                            <span class="hidden-lg hidden-md">
                            <i class="fa fa-barcode" aria-hidden="true"></i>
                            </span>
                            <span class="hidden-xs hidden-sm"><?php echo e(trans('general.assets')); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="#licenses_tab" data-toggle="tab">
                            <span class="hidden-lg hidden-md">
                            <i class="fa fa-floppy-o"></i>
                            </span>
                            <span class="hidden-xs hidden-sm"><?php echo e(trans('general.licenses')); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="#accessories_tab" data-toggle="tab">
                            <span class="hidden-lg hidden-md">
                            <i class="fa fa-keyboard-o"></i>
                            </span> <span class="hidden-xs hidden-sm"><?php echo e(trans('general.accessories')); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="#consumables_tab" data-toggle="tab">
                            <span class="hidden-lg hidden-md">
                            <i class="fa fa-tint"></i></span>
                            <span class="hidden-xs hidden-sm"><?php echo e(trans('general.consumables')); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="#components_tab" data-toggle="tab">
                            <span class="hidden-lg hidden-md">
                            <i class="fa fa-hdd-o"></i></span>
                            <span class="hidden-xs hidden-sm"><?php echo e(trans('general.components')); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="#users_tab" data-toggle="tab">
                            <span class="hidden-lg hidden-md">
                            <i class="fa fa-users"></i></span>
                            <span class="hidden-xs hidden-sm"><?php echo e(trans('general.people')); ?></span>
                        </a>
                    </li>



                </ul>

                <div class="tab-content">

                    <div class="tab-pane fade in active" id="asset_tab">
                        <!-- checked out assets table -->
                        <div class="table-responsive">
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
                                    data-url="<?php echo e(route('api.assets.index',['company_id' => $company->id])); ?>"
                                    data-export-options='{
                              "fileName": "export-companies-<?php echo e(str_slug($company->name)); ?>-assets-<?php echo e(date('Y-m-d')); ?>",
                              "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                              }'>
                            </table>
                        </div>
                    </div><!-- /asset_tab -->

                    <div class="tab-pane" id="licenses_tab">
                        <div class="table-responsive">

                            <table
                                    data-columns="<?php echo e(\App\Presenters\LicensePresenter::dataTableLayout()); ?>"
                                    data-cookie-id-table="licensesTable"
                                    data-pagination="true"
                                    data-id-table="licensesTable"
                                    data-search="true"
                                    data-side-pagination="server"
                                    data-show-columns="true"
                                    data-show-export="true"
                                    data-show-refresh="true"
                                    data-sort-order="asc"
                                    id="licensesTable"
                                    class="table table-striped snipe-table"
                                    data-url="<?php echo e(route('api.licenses.index',['company_id' => $company->id])); ?>"
                                    data-export-options='{
                              "fileName": "export-companies-<?php echo e(str_slug($company->name)); ?>-licenses-<?php echo e(date('Y-m-d')); ?>",
                              "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                              }'>
                            </table>

                        </div>
                    </div><!-- /licenses-tab -->

                    <div class="tab-pane" id="accessories_tab">
                        <div class="table-responsive">

                            <table
                                    data-columns="<?php echo e(\App\Presenters\AccessoryPresenter::dataTableLayout()); ?>"
                                    data-cookie-id-table="accessoriesTable"
                                    data-pagination="true"
                                    data-id-table="accessoriesTable"
                                    data-search="true"
                                    data-side-pagination="server"
                                    data-show-columns="true"
                                    data-show-export="true"
                                    data-show-refresh="true"
                                    data-sort-order="asc"
                                    id="accessoriesTable"
                                    class="table table-striped snipe-table"
                                    data-url="<?php echo e(route('api.accessories.index',['company_id' => $company->id])); ?>"
                                    data-export-options='{
                              "fileName": "export-companies-<?php echo e(str_slug($company->name)); ?>-accessories-<?php echo e(date('Y-m-d')); ?>",
                              "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                              }'>
                            </table>

                        </div>
                    </div><!-- /accessories-tab -->

                    <div class="tab-pane" id="consumables_tab">
                        <div class="table-responsive">

                            <table
                                    data-columns="<?php echo e(\App\Presenters\ConsumablePresenter::dataTableLayout()); ?>"
                                    data-cookie-id-table="consumablesTable"
                                    data-pagination="true"
                                    data-id-table="consumablesTable"
                                    data-search="true"
                                    data-side-pagination="server"
                                    data-show-columns="true"
                                    data-show-export="true"
                                    data-show-refresh="true"
                                    data-sort-order="asc"
                                    id="consumablesTable"
                                    class="table table-striped snipe-table"
                                    data-url="<?php echo e(route('api.consumables.index',['company_id' => $company->id])); ?>"
                                    data-export-options='{
                              "fileName": "export-companies-<?php echo e(str_slug($company->name)); ?>-consumables-<?php echo e(date('Y-m-d')); ?>",
                              "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                              }'>
                            </table>

                        </div>
                    </div><!-- /consumables-tab -->

                    <div class="tab-pane" id="components_tab">
                        <div class="table-responsive">

                            <table
                                    data-columns="<?php echo e(\App\Presenters\ComponentPresenter::dataTableLayout()); ?>"
                                    data-cookie-id-table="componentsTable"
                                    data-pagination="true"
                                    data-id-table="componentsTable"
                                    data-search="true"
                                    data-side-pagination="server"
                                    data-show-columns="true"
                                    data-show-export="true"
                                    data-show-refresh="true"
                                    data-sort-order="asc"
                                    id="componentsTable"
                                    class="table table-striped snipe-table"
                                    data-url="<?php echo e(route('api.components.index',['company_id' => $company->id])); ?>"
                                    data-export-options='{
                              "fileName": "export-companies-<?php echo e(str_slug($company->name)); ?>-components-<?php echo e(date('Y-m-d')); ?>",
                              "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                              }'>

                            </table>
                        </div>
                    </div><!-- /consumables-tab -->

                    <div class="tab-pane" id="users_tab">
                        <div class="table-responsive">

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
                                    data-url="<?php echo e(route('api.users.index',['company_id' => $company->id])); ?>"
                                    data-export-options='{
                              "fileName": "export-companies-<?php echo e(str_slug($company->name)); ?>-users-<?php echo e(date('Y-m-d')); ?>",
                              "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                              }'>

                            </table>
                        </div>
                    </div><!-- /consumables-tab -->




                </div><!-- /.tab-content -->
            </div><!-- nav-tabs-custom -->
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('moar_scripts'); ?>
    <?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/companies/view.blade.php ENDPATH**/ ?>