<?php $__env->startSection('title'); ?>
<?php echo e(trans('admin/licenses/general.view')); ?>

 - <?php echo e($license->name); ?>

##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_right'); ?>
<div class="btn-group pull-right">
  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $license)): ?>
    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php echo e(trans('button.actions')); ?>

        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <li role="menuitem"><a href="<?php echo e(route('licenses.edit', ['license' => $license->id])); ?>"><?php echo e(trans('admin/licenses/general.edit')); ?></a></li>
        <li role="menuitem"><a href="<?php echo e(route('clone/license', $license->id)); ?>"><?php echo e(trans('admin/licenses/general.clone')); ?></a></li>
    </ul>
   <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#details" data-toggle="tab">Details</a></li>
        <li><a href="#seats" data-toggle="tab"><?php echo e(trans('admin/licenses/form.seats')); ?></a></li>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('files', $license)): ?>
        <li><a href="#uploads" data-toggle="tab"><?php echo e(trans('general.file_uploads')); ?></a></li>
        <?php endif; ?>
        <li><a href="#history" data-toggle="tab"><?php echo e(trans('admin/licenses/general.checkout_history')); ?></a></li>
        <li class="pull-right"><a href="#" data-toggle="modal" data-target="#uploadFileModal"><i class="fa fa-paperclip" aria-hidden="true"></i> <?php echo e(trans('button.upload')); ?></a></li>
      </ul>

      <div class="tab-content">

        <div class="tab-pane active" id="details">
          <div class="row">
            <div class="col-md-12">
              <div class="container row-striped">

                <?php if(!is_null($license->company)): ?>
                  <div class="row">
                    <div class="col-md-4">
                      <strong><?php echo e(trans('general.company')); ?></strong>
                    </div>
                    <div class="col-md-8">
                      <?php echo e($license->company->name); ?>

                    </div>
                  </div>
                <?php endif; ?>

                <?php if($license->manufacturer): ?>
                  <div class="row">
                    <div class="col-md-4">
                      <strong><?php echo e(trans('admin/hardware/form.manufacturer')); ?></strong>
                    </div>
                    <div class="col-md-8">
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', \App\Models\Manufacturer::class)): ?>
                        <a href="<?php echo e(route('manufacturers.show', $license->manufacturer->id)); ?>">
                          <?php echo e($license->manufacturer->name); ?>

                        </a>
                      <?php else: ?>
                        <?php echo e($license->manufacturer->name); ?>

                      <?php endif; ?>

                      <?php if($license->manufacturer->url): ?>
                        <br><i class="fa fa-globe" aria-hidden="true"></i> <a href="<?php echo e($license->manufacturer->url); ?>" rel="noopener"><?php echo e($license->manufacturer->url); ?></a>
                      <?php endif; ?>

                      <?php if($license->manufacturer->support_url): ?>
                        <br><i class="fa fa-life-ring" aria-hidden="true"></i>
                        <a href="<?php echo e($license->manufacturer->support_url); ?>"  rel="noopener"><?php echo e($license->manufacturer->support_url); ?></a>
                      <?php endif; ?>

                      <?php if($license->manufacturer->support_phone): ?>
                        <br><i class="fa fa-phone" aria-hidden="true"></i>
                        <a href="tel:<?php echo e($license->manufacturer->support_phone); ?>"><?php echo e($license->manufacturer->support_phone); ?></a>
                      <?php endif; ?>

                      <?php if($license->manufacturer->support_email): ?>
                        <br><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo e($license->manufacturer->support_email); ?>"><?php echo e($license->manufacturer->support_email); ?></a>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endif; ?>


                <?php if(!is_null($license->serial)): ?>
                  <div class="row">
                    <div class="col-md-4">
                      <strong><?php echo e(trans('admin/licenses/form.license_key')); ?></strong>
                    </div>
                    <div class="col-md-8">
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewKeys', $license)): ?>
                        <?php echo nl2br(e($license->serial)); ?>

                      <?php else: ?>
                        ------------
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endif; ?>


                <?php if($license->category): ?>
                  <div class="row">
                    <div class="col-md-4">
                      <strong><?php echo e(trans('general.category')); ?></strong>
                    </div>
                    <div class="col-md-8">
                      <a href="<?php echo e(route('categories.show', $license->category->id)); ?>"><?php echo e($license->category->name); ?></a>
                    </div>
                  </div>
                <?php endif; ?>


                <?php if($license->license_name!=''): ?>
                  <div class="row">
                    <div class="col-md-4">
                      <strong><?php echo e(trans('admin/licenses/form.to_name')); ?></strong>
                    </div>
                    <div class="col-md-8">
                      <?php echo e($license->license_name); ?>

                    </div>
                  </div>
                <?php endif; ?>

                <?php if($license->license_email!=''): ?>
                  <div class="row">
                    <div class="col-md-4">
                      <strong>
                        <?php echo e(trans('admin/licenses/form.to_email')); ?>

                      </strong>
                    </div>
                    <div class="col-md-8">
                      <?php echo e($license->license_email); ?>

                    </div>
                  </div>
                <?php endif; ?>


                <?php if($license->supplier_id): ?>
                  <div class="row">
                    <div class="col-md-4">
                      <strong>
                        <?php echo e(trans('general.supplier')); ?>

                      </strong>
                    </div>
                    <div class="col-md-8">
                      <a href="<?php echo e(route('suppliers.show', $license->supplier_id)); ?>">
                        <?php echo e($license->supplier->name); ?>

                      </a>
                    </div>
                  </div>
                <?php endif; ?>


                <?php if(isset($license->expiration_date)): ?>
                <div class="row">
                  <div class="col-md-4">
                    <strong>
                      <?php echo e(trans('admin/licenses/form.expiration')); ?>

                    </strong>
                  </div>
                  <div class="col-md-8">
                    <?php echo e(\App\Helpers\Helper::getFormattedDateObject($license->expiration_date, 'date', false)); ?>

                  </div>
                </div>
                <?php endif; ?>

                <?php if($license->termination_date): ?>
                  <div class="row">
                    <div class="col-md-4">
                      <strong>
                        <?php echo e(trans('admin/licenses/form.termination_date')); ?>

                      </strong>
                    </div>
                    <div class="col-md-8">
                      <?php echo e(\App\Helpers\Helper::getFormattedDateObject($license->termination_date, 'date', false)); ?>

                    </div>
                  </div>
                <?php endif; ?>


                <?php if($license->depreciation): ?>
                <div class="row">
                  <div class="col-md-4">
                    <strong>
                      <?php echo e(trans('admin/hardware/form.depreciation')); ?>

                    </strong>
                  </div>
                  <div class="col-md-8">
                    <?php echo e($license->depreciation->name); ?>

                    (<?php echo e($license->depreciation->months); ?>

                    <?php echo e(trans('admin/hardware/form.months')); ?>

                    )
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <strong>
                      <?php echo e(trans('admin/hardware/form.depreciates_on')); ?>

                    </strong>
                  </div>
                  <div class="col-md-8">
                    <?php echo e(\App\Helpers\Helper::getFormattedDateObject($license->depreciated_date(), 'date', false)); ?>

                  </div>
                </div>


                <div class="row">
                  <div class="col-md-4">
                    <strong>
                      <?php echo e(trans('admin/hardware/form.fully_depreciated')); ?>

                    </strong>
                  </div>
                  <div class="col-md-8">
                    <?php if($license->time_until_depreciated()->y > 0): ?>
                      <?php echo e($license->time_until_depreciated()->y); ?>

                      <?php echo e(trans('admin/hardware/form.years')); ?>,
                    <?php endif; ?>
                    <?php echo e($license->time_until_depreciated()->m); ?>

                    <?php echo e(trans('admin/hardware/form.months')); ?>

                  </div>
                </div>
                <?php endif; ?>

                  <?php if($license->purchase_order): ?>
                <div class="row">
                  <div class="col-md-4">
                    <strong>
                      <?php echo e(trans('admin/licenses/form.purchase_order')); ?>

                    </strong>
                  </div>
                  <div class="col-md-8">
                    <?php echo e($license->purchase_order); ?>

                  </div>
                </div>
                  <?php endif; ?>


                <?php if(isset($license->purchase_date)): ?>
                <div class="row">
                  <div class="col-md-4">
                    <strong><?php echo e(trans('general.purchase_date')); ?></strong>
                  </div>
                  <div class="col-md-8">
                    <?php echo e(\App\Helpers\Helper::getFormattedDateObject($license->purchase_date, 'date', false)); ?>


                  </div>
                </div>
                  <?php endif; ?>

                  <?php if($license->purchase_cost > 0): ?>
                  <div class="row">
                    <div class="col-md-4">
                      <strong>
                        <?php echo e(trans('general.purchase_cost')); ?>

                      </strong>
                    </div>
                    <div class="col-md-8">
                      <?php echo e($snipeSettings->default_currency); ?>

                      <?php echo e(\App\Helpers\Helper::formatCurrencyOutput($license->purchase_cost)); ?>

                    </div>
                  </div>
                  <?php endif; ?>

                  <?php if($license->order_number): ?>
                  <div class="row">
                    <div class="col-md-4">
                      <strong>
                        <?php echo e(trans('general.order_number')); ?>

                      </strong>
                    </div>
                    <div class="col-md-8">
                      <?php echo e($license->order_number); ?>

                    </div>
                  </div>
                  <?php endif; ?>

                  <?php if(($license->seats) && ($license->seats) > 0): ?>
                  <div class="row">
                    <div class="col-md-4">
                      <strong>
                        <?php echo e(trans('admin/licenses/form.seats')); ?>

                      </strong>
                    </div>
                    <div class="col-md-8">
                      <?php echo e($license->seats); ?>

                    </div>
                  </div>
                  <?php endif; ?>



                  <div class="row">
                    <div class="col-md-4">
                      <strong>
                        <?php echo e(trans('admin/licenses/form.reassignable')); ?>

                      </strong>
                    </div>
                    <div class="col-md-8">
                      <?php echo e($license->reassignable ? 'Yes' : 'No'); ?>

                    </div>
                  </div>


                  <?php if($license->notes): ?>
                  <div class="row">
                    <div class="col-md-4">
                      <strong>
                        <?php echo e(trans('general.notes')); ?>

                      </strong>
                    </div>
                    <div class="col-md-8">
                      <?php echo nl2br(e($license->notes)); ?>

                    </div>
                  </div>
                  <?php endif; ?>

              </div> <!-- end row-striped -->
            </div>
            </div>
          </div> <!-- end tab-pane -->



        <div class="tab-pane" id="seats">
          <div class="row">
            <div class="col-md-12">

              <div class="table-responsive">

                <table
                        data-columns="<?php echo e(\App\Presenters\LicensePresenter::dataTableLayoutSeats()); ?>"
                        data-cookie-id-table="seatsTable"
                        data-id-table="seatsTable"
                        id="seatsTable"
                        data-pagination="true"
                        data-search="false"
                        data-side-pagination="server"
                        data-show-columns="true"
                        data-show-export="true"
                        data-show-refresh="true"
                        data-sort-order="asc"
                        data-sort-name="name"
                        class="table table-striped snipe-table"
                        data-url="<?php echo e(route('api.licenses.seats.index', $license->id)); ?>"
                        data-export-options='{
                        "fileName": "export-seats-<?php echo e(str_slug($license->name)); ?>-<?php echo e(date('Y-m-d')); ?>",
                        "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                        }'>
                </table>

              </div>

            </div>

          </div> <!--/.row-->
        </div> <!-- /.tab-pane -->

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('files', $license)): ?>
        <div class="tab-pane" id="uploads">
          <div class="table-responsive">
            <table
                data-cookie-id-table="licenseUploadsTable"
                data-id-table="licenseUploadsTable"
                id="licenseUploadsTable"
                data-search="true"
                data-pagination="true"
                data-side-pagination="client"
                data-show-columns="true"
                data-show-export="true"
                data-show-footer="true"
                data-toolbar="#upload-toolbar"
                data-show-refresh="true"
                data-sort-order="asc"
                data-sort-name="name"
                class="table table-striped snipe-table"
                data-export-options='{
                    "fileName": "export-license-uploads-<?php echo e(str_slug($license->name)); ?>-<?php echo e(date('Y-m-d')); ?>",
                    "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","delete","download","icon"]
                    }'>
            <thead>
              <tr>
                <th data-visible="true" aria-hidden="true">Icon</th>
                <th class="col-md-4" data-field="file_name" data-visible="true" data-sortable="true" data-switchable="true"><?php echo e(trans('general.file_name')); ?></th>
                <th class="col-md-4" data-field="notes" data-visible="true" data-sortable="true" data-switchable="true"><?php echo e(trans('general.notes')); ?></th>
                <th class="col-md-2" data-field="created_at" data-visible="true"  data-sortable="true" data-switchable="true"><?php echo e(trans('general.created_at')); ?></th>
                <th class="col-md-2" data-searchable="true" data-visible="true"><?php echo e(trans('general.image')); ?></th>
                <th class="col-md-2" data-field="download" data-visible="true"  data-sortable="false" data-switchable="true">Download</th>
                <th class="col-md-2" data-field="delete" data-visible="true"  data-sortable="false" data-switchable="true">Delete</th>
              </tr>
            </thead>
            <tbody>
            <?php if($license->uploads->count() > 0): ?>
              <?php $__currentLoopData = $license->uploads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>
                  <i class="<?php echo e(\App\Helpers\Helper::filetype_icon($file->filename)); ?> icon-med" aria-hidden="true"></i>
                  <span class="sr-only"><?php echo e(\App\Helpers\Helper::filetype_icon($file->filename)); ?></span>

                </td>
                <td>
                  <?php echo e($file->filename); ?>


                </td>
                <td>
                  <?php if($file->note): ?>
                    <?php echo e($file->note); ?>

                  <?php endif; ?>
                </td>
                <td><?php echo e($file->created_at); ?></td>
                <td>
                <?php if($file->filename): ?>
                    <?php if( \App\Helpers\Helper::checkUploadIsImage($file->get_src('licenses'))): ?>
                      <a href="<?php echo e(route('show.licensefile', ['licenseId' => $license->id, 'fileId' => $file->id, 'download' => 'false'])); ?>" data-toggle="lightbox" data-type="image"><img src="<?php echo e(route('show.licensefile', ['licenseId' => $license->id, 'fileId' => $file->id])); ?>" class="img-thumbnail" style="max-width: 50px;"></a>
                    <?php endif; ?>
                <?php endif; ?>
                </td>
                <td>
                  <?php if($file->filename): ?>
                    <a href="<?php echo e(route('show.licensefile', [$license->id, $file->id, 'download' => 'true'])); ?>" class="btn btn-default">
                      <i class="fa fa-download" aria-hidden="true"></i>
                      <span class="sr-only">Download</span>
                    </a>
                  <?php endif; ?>
                </td>
                <td>
                  <a class="btn delete-asset btn-danger btn-sm" href="<?php echo e(route('delete/licensefile', [$license->id, $file->id])); ?>" data-content="Are you sure you wish to delete this file?" data-title="Delete <?php echo e($file->filename); ?>?">
                    <i class="fa fa-trash icon-white" aria-hidden="true"></i>
                    <span class="sr-only">Delete</span>
                  </a>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
              <tr>
              <td colspan="6"><?php echo e(trans('general.no_results')); ?></td>
              </tr>
            <?php endif; ?>
            </tbody>
          </table>
          </div>
        </div> <!-- /.tab-pane -->
        <?php endif; ?>

        <div class="tab-pane" id="history">
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
              <table
                      class="table table-striped snipe-table"
                      data-cookie-id-table="licenseHistoryTable"
                      data-id-table="licenseHistoryTable"
                      id="licenseHistoryTable"
                      data-pagination="true"
                      data-show-columns="true"
                      data-side-pagination="server"
                      data-show-refresh="true"
                      data-show-export="true"
                      data-sort-order="desc"
                      data-export-options='{
                       "fileName": "export-<?php echo e(str_slug($license->name)); ?>-history-<?php echo e(date('Y-m-d')); ?>",
                       "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                     }'
                      data-url="<?php echo e(route('api.activity.index', ['item_id' => $license->id, 'item_type' => 'license'])); ?>">

                <thead>
                <tr>
                  <th class="col-sm-2" data-visible="false" data-sortable="true" data-field="created_at" data-formatter="dateDisplayFormatter"><?php echo e(trans('general.record_created')); ?></th>
                  <th class="col-sm-2"data-visible="true" data-sortable="true" data-field="admin" data-formatter="usersLinkObjFormatter"><?php echo e(trans('general.admin')); ?></th>
                  <th class="col-sm-2" data-sortable="true"  data-visible="true" data-field="action_type"><?php echo e(trans('general.action')); ?></th>
                  <th class="col-sm-2" data-sortable="true"  data-visible="true" data-field="item" data-formatter="polymorphicItemFormatter"><?php echo e(trans('general.item')); ?></th>
                  <th class="col-sm-2" data-visible="true" data-field="target" data-formatter="polymorphicItemFormatter"><?php echo e(trans('general.target')); ?></th>
                  <th class="col-sm-2" data-sortable="true" data-visible="true" data-field="note"><?php echo e(trans('general.notes')); ?></th>
                  <th class="col-sm-2" data-visible="true" data-field="action_date" data-formatter="dateDisplayFormatter"><?php echo e(trans('general.date')); ?></th>
                  <?php if($snipeSettings->require_accept_signature=='1'): ?>
                    <th class="col-md-3" data-field="signature_file" data-visible="false"  data-formatter="imageFormatter"><?php echo e(trans('general.signature')); ?></th>
                  <?php endif; ?>
                </tr>
                </thead>
              </table>
              </div>
            </div> <!-- /.col-md-12-->
          </div> <!-- /.row-->
        </div> <!-- /.tab-pane -->
      </div> <!-- /.tab-content -->
    </div> <!-- nav-tabs-custom -->
  </div>  <!-- /.col -->
</div> <!-- /.row -->

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', \App\Models\License::class)): ?>
  <?php echo $__env->make('modals.upload-file', ['item_type' => 'license', 'item_id' => $license->id], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('moar_scripts'); ?>
  <?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/licenses/view.blade.php ENDPATH**/ ?>