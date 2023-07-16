<?php $__env->startSection('title'); ?>
   Requested Assets
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12">

            <div class="box box-default">
                <div class="box-body">

                    <table
                            data-cookie-id-table="userRequests"
                            data-pagination="true"
                            data-id-table="userRequests"
                            data-side-pagination="server"
                            data-show-columns="true"
                            data-show-export="true"
                            data-show-refresh="true"
                            data-sort-order="desc"
                            id="userRequests"
                            class="table table-striped snipe-table"
                            data-url="<?php echo e(route('api.assets.requested')); ?>"
                            data-export-options='{
                  "fileName": "my-requested-assets-<?php echo e(date('Y-m-d')); ?>",
                  "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                }'>
                        <thead>
                        <tr>
                            <th class="col-md-1" data-field="image" data-formatter="imageFormatter">Image</th>
                            <th class="col-md-2" data-field="name">Item Name</th>
                            <th class="col-md-2" data-field="type">Type</th>
                            <th class="col-md-2" data-field="qty"><?php echo e(trans('general.qty')); ?></th>
                            <th class="col-md-2" data-field="location"><?php echo e(trans('admin/hardware/table.location')); ?></th>
                            <th class="col-md-2" data-field="expected_checkin" data-formatter="dateDisplayFormatter"> <?php echo e(trans('admin/hardware/form.expected_checkin')); ?></th>
                            <th class="col-md-2" data-field="request_date" data-formatter="dateDisplayFormatter">Requested Date</th>
                        </tr>
                        </thead>
                    </table>

                </div> <!-- .box-body -->
            </div> <!-- .box-default -->
        </div> <!-- .col-md-9 -->
    </div> <!-- .row-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('moar_scripts'); ?>
    <?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/account/requested.blade.php ENDPATH**/ ?>