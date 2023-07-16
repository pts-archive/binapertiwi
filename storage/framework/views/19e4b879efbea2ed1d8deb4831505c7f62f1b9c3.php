<?php $__env->startSection('title'); ?>
    <?php echo e(trans('general.accessory_report')); ?>

    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-body">
                    <div class="table-responsive">

                        <table
                                data-cookie-id-table="accessoriesReport"
                                data-pagination="true"
                                data-id-table="accessoriesReport"
                                data-search="true"
                                data-side-pagination="server"
                                data-show-columns="true"
                                data-show-export="true"
                                data-show-refresh="true"
                                data-sort-order="asc"
                                id="accessoriesReport"
                                class="table table-striped snipe-table"
                                data-export-options='{
                        "fileName": "accessory-report-<?php echo e(date('Y-m-d')); ?>",
                        "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                        }'>

                            <thead>
                            <tr>
                                <th class="col-sm-1"><?php echo e(trans('admin/companies/table.title')); ?></th>
                                <th class="col-sm-1"><?php echo e(trans('admin/accessories/table.title')); ?></th>
                                <th class="col-sm-1"><?php echo e(trans('admin/accessories/general.total')); ?></th>
                                <th class="col-sm-1"><?php echo e(trans('admin/accessories/general.remaining')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $accessories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accessory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(is_null($accessory->company) ? '' : $accessory->company->name); ?></td>
                                    <td><?php echo e($accessory->name); ?></td>
                                    <td><?php echo e($accessory->qty); ?></td>
                                    <td><?php echo e($accessory->numRemaining()); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        </table>
                    </div>
                </div>
            </div>
        </div>


        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('moar_scripts'); ?>
            <?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/reports/accessories.blade.php ENDPATH**/ ?>