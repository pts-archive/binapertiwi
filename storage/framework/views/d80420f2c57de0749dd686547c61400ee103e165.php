


<?php $__env->startSection('title'); ?>
    <?php echo e($statuslabel->name); ?> <?php echo e(trans('general.assets')); ?>

    <?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
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
                            <?php if(Request::get('status')!='Deleted'): ?>
                                <div id="toolbar">
                                    <select name="bulk_actions" class="form-control select2">
                                        <option value="edit">Edit</option>
                                        <option value="delete">Delete</option>
                                        <option value="labels">Generate Labels</option>
                                    </select>
                                    <button class="btn btn-default" id="bulkEdit" disabled>Go</button>
                                </div>
                            <?php endif; ?>

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
                                        data-url="<?php echo e(route('api.assets.index', ['status_id' => $statuslabel->id])); ?>"
                                        data-export-options='{
                              "fileName": "export-assets-<?php echo e(str_slug($statuslabel->name)); ?>-assets-<?php echo e(date('Y-m-d')); ?>",
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
    <?php echo $__env->make('partials.bootstrap-table', [
        'exportFile' => 'assets-export',
        'search' => true,
        'columns' => \App\Presenters\AssetPresenter::dataTableLayout()
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/statuslabels/view.blade.php ENDPATH**/ ?>