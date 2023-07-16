<?php $__env->startSection('title'); ?>
<?php echo e(trans('general.activity_report')); ?> 
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
    <?php echo e(Form::open(['method' => 'post', 'class' => 'form-horizontal'])); ?>

    <?php echo e(csrf_field()); ?>

    <button type="submit" class="btn btn-default"><i class="fa fa-download icon-white" aria-hidden="true"></i> <?php echo e(trans('general.download_all')); ?></button>
    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="box box-default">
            <div class="box-body">

                <table
                        data-cookie-id-table="activityReport"
                        data-pagination="true"
                        data-id-table="activityReport"
                        data-search="true"
                        data-side-pagination="server"
                        data-show-columns="true"
                        data-show-export="true"
                        data-show-refresh="true"
                        data-sort-order="desc"
                        data-sort-name="created_at"
                        id="activityReport"
                        data-url="<?php echo e(route('api.activity.index')); ?>"
                        data-mobile-responsive="true"
                        data-toggle="table"
                        class="table table-striped snipe-table"
                        data-export-options='{
                        "fileName": "activity-report-<?php echo e(date('Y-m-d')); ?>",
                        "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                        }'>

                    <thead>
                        <tr>
                            <th data-field="icon" style="width: 40px;" class="hidden-xs" data-formatter="iconFormatter">Icon</th>
                            <th class="col-sm-3" data-searchable="false" data-sortable="true" data-field="created_at" data-formatter="dateDisplayFormatter"><?php echo e(trans('general.date')); ?></th>
                            <th class="col-sm-2" data-field="admin" data-formatter="usersLinkObjFormatter"><?php echo e(trans('general.admin')); ?></th>
                            <th class="col-sm-2" data-field="action_type"><?php echo e(trans('general.action')); ?></th>
                            <th class="col-sm-1" data-field="type" data-formatter="itemTypeFormatter"><?php echo e(trans('general.type')); ?></th>
                            <th class="col-sm-3" data-field="item" data-formatter="polymorphicItemFormatter"><?php echo e(trans('general.item')); ?></th>
                            <th class="col-sm-2" data-field="target" data-formatter="polymorphicItemFormatter">To</th>
                            <th class="col-sm-1" data-field="note"><?php echo e(trans('general.notes')); ?></th>
                            <th class="col-sm-2" data-field="log_meta" data-visible="false" data-formatter="changeLogFormatter">Changed</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('moar_scripts'); ?>
<?php echo $__env->make('partials.bootstrap-table', ['exportFile' => 'activity-export', 'search' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/reports/activity.blade.php ENDPATH**/ ?>