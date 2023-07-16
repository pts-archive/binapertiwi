<?php $__env->startSection('title0'); ?>
  <?php echo e(trans('admin/hardware/general.requested')); ?>

  <?php echo e(trans('general.assets')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('title'); ?>
    <?php echo $__env->yieldContent('title0'); ?>  ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
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

        <?php if($requestedItems->count() > 0): ?>
        <div class="table-responsive">
            <table
                    name="requestedAssets"
                    data-toolbar="#toolbar"
                    class="table table-striped snipe-table"
                    id="requestedAssets"
                    data-advanced-search="true"
                    data-search="true"
                    data-show-columns="true"
                    data-show-export="true"
                    data-pagination="true"
                    data-id-table="requestedAssets"
                    data-cookie-id-table="requestedAssets"
                    data-export-options='{
                    "fileName": "export-assetrequests-<?php echo e(date('Y-m-d')); ?>",
                    "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                    }'>
                <thead>
                    <tr role="row">
                        <th class="col-md-1">Image</th>
                        <th class="col-md-2">Item Name</th>
                        <th class="col-md-2" data-sortable="true"><?php echo e(trans('admin/hardware/table.location')); ?></th>
                        <th class="col-md-2" data-sortable="true"><?php echo e(trans('admin/hardware/form.expected_checkin')); ?></th>
                        <th class="col-md-3" data-sortable="true">Requesting User</th>
                        <th class="col-md-2">Requested Date</th>
                        <th class="col-md-1"></th>
                        <th class="col-md-1"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $requestedItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php if($request->requestable): ?>
                    <tr>
                            <?php echo e(csrf_field()); ?>

                            <td>
                                <?php if(($request->itemType() == "asset") && ($request->requestable)): ?>
                                    <a href="<?php echo e($request->requestable->getImageUrl()); ?>" data-toggle="lightbox" data-type="image"><img src="<?php echo e($request->requestable->getImageUrl()); ?>" style="max-height: <?php echo e($snipeSettings->thumbnail_max_h); ?>px; width: auto;" class="img-responsive" alt="<?php echo e($request->requestable->name); ?>"></a>
                                <?php elseif(($request->itemType() == "asset_model") && ($request->requestable)): ?>
                                        <a href="<?php echo e(url('/')); ?>/uploads/models/<?php echo e($request->requestable->image); ?>" data-toggle="lightbox" data-type="image"><img src="<?php echo e(url('/')); ?>/uploads/models/<?php echo e($request->requestable->image); ?>" style="max-height: <?php echo e($snipeSettings->thumbnail_max_h); ?>px; width: auto;" class="img-responsive" alt="<?php echo e($request->requestable->name); ?>"></a>
                                <?php endif; ?>


                            </td>
                            <td>

                            <?php if($request->itemType() == "asset"): ?>
                            <a href="<?php echo e(url('/')); ?>/hardware/<?php echo e($request->requestable->id); ?>">
                                <?php echo e($request->name()); ?>

                            </a>
                            <?php elseif($request->itemType() == "asset_model"): ?>
                                <a href="<?php echo e(url('/')); ?>/models/<?php echo e($request->requestable->id); ?>">
                                    <?php echo e($request->name()); ?>

                                </a>
                             <?php endif; ?>

                            </td>
                            <?php if($request->location()): ?>
                            <td><?php echo e($request->location()->name); ?></td>
                            <?php else: ?>
                            <td></td>
                            <?php endif; ?>

                            <td>
                            <?php if($request->itemType() == "asset"): ?>
                                <?php echo e(App\Helpers\Helper::getFormattedDateObject($request->requestable->expected_checkin, 'datetime', false)); ?>

                            <?php endif; ?>
                            </td>
                            <td>
                                <?php if($request->requestingUser()): ?>
                                <a href="<?php echo e(url('/')); ?>/users/<?php echo e($request->requestingUser()->id); ?>">
                                    <?php echo e($request->requestingUser()->present()->fullName()); ?>

                                </a>
                               <?php else: ?>
                                    (deleted user)
                                <?php endif; ?>
                            </td>
                            <td><?php echo e(App\Helpers\Helper::getFormattedDateObject($request->created_at, 'datetime', false)); ?></td>
                            <td>
                                <?php if($request->itemType() == "asset"): ?>
                                    <?php if($request->requestable->assigned_to==''): ?>
                                        <a href="<?php echo e(url('/')); ?>/hardware/<?php echo e($request->requestable->id); ?>/checkout" class="btn btn-sm bg-maroon" data-tooltip="true" title="Check this item out to a user"><?php echo e(trans('general.checkout')); ?></a>
                                        <?php else: ?>
                                        <a href="<?php echo e(url('/')); ?>/hardware/<?php echo e($request->requestable->id); ?>/checkin" class="btn btn-sm bg-purple" data-tooltip="true" title="Check this itemi"><?php echo e(trans('general.checkin')); ?></a>
                                    <?php endif; ?>

                                <?php endif; ?>
                            </td>


                    </tr>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <?php else: ?>
        <div class="col-md-12">
            <div class="alert alert-info alert-block">
                <i class="fa fa-info-circle"></i>
                <?php echo e(trans('general.no_results')); ?>

            </div>
        </div>
        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .col-md-12> -->
</div> <!-- .row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
    <?php echo $__env->make('partials.bootstrap-table', [
        'exportFile' => 'requested-export',
        'search' => true,
        'clientSearch' => true,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/hardware/requested.blade.php ENDPATH**/ ?>