


<?php $__env->startSection('title'); ?>
    <?php echo e(trans('admin/models/general.bulk_delete')); ?>

    <?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
    <a href="<?php echo e(URL::previous()); ?>" class="btn btn-primary pull-right">
        <?php echo e(trans('general.back')); ?></a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <!-- left column -->
        <div class="col-md-8 col-md-offset-2">
            <p><?php echo e(trans('admin/models/general.bulk_delete_help')); ?></p>
            <form class="form-horizontal" method="post" action="<?php echo e(route('models.bulkdelete.store')); ?>" autocomplete="off" role="form">
                <?php echo e(csrf_field()); ?>

                <div class="box box-default">
                    <div class="box-header with-border">
                        <h2 class="box-title" style="color: red"><?php echo e(trans('admin/models/general.bulk_delete_warn', ['model_count' => $valid_count])); ?></h2>
                    </div>

                    <div class="box-body">
                        <table class="table table-striped table-condensed">
                            <thead>
                            <tr>
                                <td class="col-md-1">
                                    <label>
                                        <input type="checkbox" class="all minimal" checked="checked">
                                    </label>

                                </td>
                                <td class="col-md-1"><i class="fa fa-barcode" aria-hidden="true"></i></td>
                                <td class="col-md-10">Name</td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr<?php echo (($model->assets_count > 0 ) ? ' class="danger"' : ''); ?>>
                                    <td>
                                        <input type="checkbox" name="ids[]" class="minimal<?php echo e((($model->assets_count == 0) ? '' : ' disabled')); ?>" value="<?php echo e($model->id); ?>" <?php echo (($model->assets_count == 0) ? ' checked="checked"' : ' disabled'); ?>>
                                    </td>
                                    <td><?php echo e($model->assets_count); ?></td>
                                    <td><?php echo e($model->name); ?></td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->

                    <div class="box-footer text-right">
                        <a class="btn btn-link pull-left" href="<?php echo e(URL::previous()); ?>" method="post" enctype="multipart/form-data"><?php echo e(trans('button.cancel')); ?></a>
                        <button type="submit" class="btn btn-success" id="submit-button"><i class="fa fa-check icon-white" aria-hidden="true"></i> <?php echo e(trans('general.delete')); ?></button>
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </form>
        </div> <!-- .col-md-12-->
    </div><!--.row-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('moar_scripts'); ?>
    <script>

        // Check-all / Uncheck all
        $(function () {
            var checkAll = $('input.all');
            var checkboxes = $('input.minimal');


            checkAll.on('ifChecked ifUnchecked', function(event) {
                if (event.type == 'ifChecked') {
                    checkboxes.iCheck('check');
                } else {
                    checkboxes.iCheck('uncheck');
                }
            });

            checkboxes.on('ifChanged', function(event){
                if(checkboxes.filter(':checked').length == checkboxes.length) {
                    checkAll.prop('checked', 'checked');
                } else {
                    checkAll.removeProp('checked');
                }
                checkAll.iCheck('update');
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/models/bulk-delete.blade.php ENDPATH**/ ?>