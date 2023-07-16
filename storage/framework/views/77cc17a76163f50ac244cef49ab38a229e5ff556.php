<?php $__env->startSection('title0'); ?>

    <?php if((Request::get('company_id')) && ($company)): ?>
        <?php echo e($company->name); ?>

    <?php endif; ?>

    <?php echo e(trans('general.audit_due')); ?>


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

                            <table
                                    data-click-to-select="true"
                                    data-columns="<?php echo e(\App\Presenters\AssetAuditPresenter::dataTableLayout()); ?>"
                                    data-cookie-id-table="assetsAuditListingTable"
                                    data-pagination="true"
                                    data-id-table="assetsAuditListingTable"
                                    data-search="true"
                                    data-side-pagination="server"
                                    data-show-columns="true"
                                    data-show-export="true"
                                    data-show-footer="true"
                                    data-show-refresh="true"
                                    data-sort-order="asc"
                                    data-sort-name="name"
                                    data-toolbar="#toolbar"
                                    id="assetsAuditListingTable"
                                    class="table table-striped snipe-table"
                                    data-url="<?php echo e(route('api.asset.to-audit', ['audit' => 'due'])); ?>"
                                    data-export-options='{
                "fileName": "export-assets-due-audit-<?php echo e(date('Y-m-d')); ?>",
                "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                }'>
                            </table>

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <?php echo e(Form::close()); ?>

                </div><!-- ./box-body -->
            </div><!-- /.box -->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
    <?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/hardware/audit-due.blade.php ENDPATH**/ ?>