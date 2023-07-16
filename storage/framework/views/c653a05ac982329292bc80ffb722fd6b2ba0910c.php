


<?php $__env->startSection('title'); ?>
View Assets for  <?php echo e($user->present()->fullName()); ?>

<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="box box-default">

        <?php if($user->id): ?>
          <div class="box-header with-border">
            <div class="box-heading">
              <h2 class="box-title"> <?php echo e(trans('admin/users/general.assets_user', array('name' => $user->first_name))); ?></h2>
            </div>
          </div><!-- /.box-header -->
        <?php endif; ?>

      <div class="box-body">
        <!-- checked out assets table -->
          <div class="table-responsive">

            <table
                  data-cookie="true"
                  data-cookie-id-table="userAssets"
                  data-pagination="true"
                  data-id-table="userAssets"
                  data-search="true"
                  data-side-pagination="client"
                  data-show-columns="true"
                  data-show-export="true"
                  data-show-refresh="true"
                  data-sort-order="asc"
                  id="userAssets"
                  class="table table-striped snipe-table"
                  data-export-options='{
                  "fileName": "my-assets-<?php echo e(date('Y-m-d')); ?>",
                  "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                  }'>
              <thead>
              <tr>
                <th>#</th>
                <th class="col-md-3" data-switchable="true" data-visible="true"><?php echo e(trans('general.category')); ?></th>
                <th class="col-md-2" data-switchable="true" data-visible="true"><?php echo e(trans('admin/hardware/table.asset_tag')); ?></th>
                <th class="col-md-3" data-switchable="true" data-visible="true"><?php echo e(trans('general.name')); ?></th>
                <th class="col-md-4" data-switchable="true" data-visible="true"><?php echo e(trans('admin/hardware/table.asset_model')); ?></th>
                <th class="col-md-3" data-switchable="true" data-visible="true"><?php echo e(trans('admin/hardware/table.serial')); ?></th>
                <th><?php echo e(trans('general.image')); ?></th>
              </tr>

              </thead>
              <tbody>
                <?php
                  $counter = 1
                ?>
                <?php $__currentLoopData = $user->assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($counter); ?></td>
                  <td><?php echo e($asset->model->category->name); ?></td>
                  <td><?php echo e($asset->asset_tag); ?></td>
                  <td><?php echo e($asset->name); ?></td>
                  <td>
                    <?php if($asset->physical=='1'): ?>
                      <?php echo e($asset->model->name); ?>

                    <?php endif; ?>
                  </td>
                  <td><?php echo e($asset->serial); ?></td>
                  <td>
                    <?php if(($asset->image) && ($asset->image!='')): ?>
                      <img src="<?php echo e(Storage::disk('public')->url(app('assets_upload_path').e($asset->image))); ?>" height="50" width="50">

                    <?php elseif(($asset->model) && ($asset->model->image!='')): ?>
                      <img src="<?php echo e(Storage::disk('public')->url(app('models_upload_path').e($asset->model->image))); ?>" height="50" width="50">
                    <?php endif; ?>
                  </td>
                </tr>
                <?php if($settings->show_assigned_assets): ?>
                  <?php
                    $assignedCounter = 1
                  ?>
                  <?php $__currentLoopData = $asset->assignedAssets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($counter); ?>.<?php echo e($assignedCounter); ?></td>
                      <td><?php echo e($asset->model->category->name); ?></td>
                      <td><?php echo e($asset->asset_tag); ?></td>
                      <td><?php echo e($asset->name); ?></td>
                      <td>
                        <?php if($asset->physical=='1'): ?>
                          <?php echo e($asset->model->name); ?>

                        <?php endif; ?>
                      </td>
                      <td><?php echo e($asset->serial); ?></td>
                      <td>
                        <?php if(($asset->image) && ($asset->image!='')): ?>
                          <img src="<?php echo e(Storage::disk('public')->url(app('assets_upload_path').e($asset->image))); ?>" height="50" width="50">

                        <?php elseif(($asset->model) && ($asset->model->image!='')): ?>
                          <img src="<?php echo e(Storage::disk('public')->url(app('models_upload_path').e($asset->model->image))); ?>" height="50" width="50">
                        <?php endif; ?>
                      </td>
                    </tr>
                    <?php
                      $assignedCounter++
                    ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <?php
                  $counter++
                ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div> <!-- .table-responsive-->
      </div> <!-- .box-body-->
    </div><!--.box.box-default-->
  </div> <!-- .col-md-12-->
</div> <!-- .row-->

<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <?php if($user->id): ?>
        <div class="box-header with-border">
          <div class="box-heading">
            <h2 class="box-title"> <?php echo e(trans('admin/users/general.software_user', array('name' => $user->first_name))); ?></h2>
          </div>
        </div><!-- /.box-header -->
      <?php endif; ?>

      <div class="box-body">
        <!-- checked out licenses table -->

        <div class="table-responsive">
          <table
                  data-cookie-id-table="userLicenses"
                  data-pagination="true"
                  data-id-table="userLicenses"
                  data-search="true"
                  data-side-pagination="client"
                  data-show-columns="true"
                  data-show-export="true"
                  data-show-refresh="true"
                  data-sort-order="asc"
                  id="userLicenses"
                  class="table table-striped snipe-table"
                  data-export-options='{
                  "fileName": "my-licenses-<?php echo e(date('Y-m-d')); ?>",
                  "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                  }'>
            <thead>
              <tr>
                <th class="col-md-4"><?php echo e(trans('general.name')); ?></th>
                <th class="col-md-4"><?php echo e(trans('admin/hardware/form.serial')); ?></th>
                <th class="col-md-4"><?php echo e(trans('general.category')); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $user->licenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $license): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($license->name); ?></td>
                <td>
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewKeys', $license)): ?>
                    <?php echo e($license->serial); ?>

                  <?php else: ?>
                    ------------
                  <?php endif; ?>
                </td>
                <td><?php echo e($license->category->name); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div> <!-- .table-responsive-->
      </div> <!-- .box-body-->
    </div><!--.box.box-default-->
  </div> <!-- .col-md-12-->
</div> <!-- .row-->

<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <?php if($user->id): ?>
      <div class="box-header with-border">
        <div class="box-heading">
          <h2 class="box-title"> <?php echo e(trans('general.consumables')); ?> </h2>
        </div>
      </div><!-- /.box-header -->
      <?php endif; ?>

      <div class="box-body">
        <!-- checked out consumables table -->
        <div class="table-responsive">
          <table
                  data-cookie-id-table="userConsumables"
                  data-pagination="true"
                  data-id-table="userConsumables"
                  data-search="true"
                  data-side-pagination="client"
                  data-show-columns="true"
                  data-show-export="true"
                  data-show-refresh="true"
                  data-sort-order="asc"
                  id="userConsumables"
                  class="table table-striped snipe-table"
                  data-export-options='{
                  "fileName": "my-consumables-<?php echo e(date('Y-m-d')); ?>",
                  "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                  }'>
            <thead>
              <tr>
                <th class="col-md-8"><?php echo e(trans('general.name')); ?></th>
                <th class="col-md-4"><?php echo e(trans('general.category')); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $user->consumables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consumable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($consumable->name); ?></td>
                <td><?php echo e((($consumable->category) ? $consumable->category->name : 'deleted category')); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>


      </div> <!-- .box-body-->
    </div><!--.box.box-default-->
  </div> <!-- .col-md-12-->
</div> <!-- .row-->

<div class="row">
  <div class="col-md-12">
    <div class="box box-default">

      <?php if($user->id): ?>
      <div class="box-header with-border">
        <div class="box-heading">
          <h2 class="box-title"> <?php echo e(trans('general.accessories')); ?></h2>
        </div>
      </div><!-- /.box-header -->
      <?php endif; ?>

      <div class="box-body">
        <!-- checked out Accessories table -->

        <div class="table-responsive">
          <table
                  data-cookie-id-table="userAccessories"
                  data-pagination="true"
                  data-id-table="userAccessories"
                  data-search="true"
                  data-side-pagination="client"
                  data-show-columns="true"
                  data-show-export="true"
                  data-show-refresh="true"
                  data-sort-order="asc"
                  id="userAccessories"
                  class="table table-striped snipe-table"
                  data-export-options='{
                  "fileName": "my-accessories-<?php echo e(date('Y-m-d')); ?>",
                  "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                  }'>
            <thead>
              <tr>
                <th class="col-md-8"><?php echo e(trans('general.name')); ?></th>
                <th class="col-md-4"><?php echo e(trans('general.category')); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $user->accessories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accessory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($accessory->name); ?></td>
                <td><?php echo e($accessory->category->name); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>

       </div> <!-- .box-body-->
    </div><!--.box.box-default-->
  </div> <!-- .col-md-12-->
</div> <!-- .row-->

<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <?php if($user->id): ?>
      <div class="box-header with-border">
        <div class="box-heading">
          <h2 class="box-title"> History</h2>
        </div>
      </div><!-- /.box-header -->
      <?php endif; ?>

      <div class="box-body">
        <div class="table-responsive">
          <table
                data-cookie-id-table="userActivityReport"
                data-pagination="true"
                data-id-table="userActivityReport"
                data-search="true"
                data-side-pagination="server"
                data-show-columns="true"
                data-show-export="true"
                data-show-refresh="true"
                data-sort-order="desc"
                id="userActivityReport"
                class="table table-striped snipe-table"
                data-url="<?php echo e(route('api.activity.index', ['target_id' => $user->id, 'target_type' => 'User', 'order' => 'desc'])); ?>"
                data-export-options='{
                  "fileName": "my-history-<?php echo e(date('Y-m-d')); ?>",
                  "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                }'>
            <thead>
            <tr>
              <th data-switchable="true" data-visible="true" data-field="icon" style="width: 40px;" class="hidden-xs" data-formatter="iconFormatter">Icon</th>
              <th data-switchable="true" data-visible="true" class="col-sm-3" data-field="created_at" data-formatter="dateDisplayFormatter"><?php echo e(trans('general.date')); ?></th>
              <th data-switchable="true" data-visible="true" class="col-sm-3" data-field="admin" data-formatter="usersLinkObjFormatter"><?php echo e(trans('general.admin')); ?></th>
              <th data-switchable="true" data-visible="true" class="col-sm-3" data-field="action_type"><?php echo e(trans('general.action')); ?></th>
              <th data-switchable="true" data-visible="true" class="col-sm-3" data-field="item" data-formatter="polymorphicItemFormatter"><?php echo e(trans('general.item')); ?></th>
            </tr>
            </thead>
          </table>
        </div> <!--.table-responsive-->

      </div> <!-- .box-body-->
    </div><!--.box.box-default-->
  </div> <!-- .col-md-12-->
</div> <!-- .row-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
  <?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/account/view-assets.blade.php ENDPATH**/ ?>