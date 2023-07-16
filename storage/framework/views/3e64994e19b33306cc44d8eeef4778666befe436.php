<?php $__env->startSection('title'); ?>
     <?php echo e(trans('admin/licenses/general.checkin')); ?>

##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_right'); ?>
    <a href="<?php echo e(URL::previous()); ?>" class="btn btn-primary pull-right">
        <?php echo e(trans('general.back')); ?></a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <!-- left column -->
        <div class="col-md-7">
            <form class="form-horizontal" method="post" action="<?php echo e(route('licenses.checkin.save', ['licenseId'=>$licenseSeat->id, 'backTo'=>$backto] )); ?>" autocomplete="off">
                <?php echo e(csrf_field()); ?>


                <div class="box box-default">
                    <div class="box-header with-border">
                        <h2 class="box-title"> <?php echo e($licenseSeat->license->name); ?></h2>
                    </div>
                    <div class="box-body">

            <!-- license name -->
            <div class="form-group">
                <label class="col-sm-2 control-label"><?php echo e(trans('admin/hardware/form.name')); ?></label>
                <div class="col-md-6">
                    <p class="form-control-static"><?php echo e($licenseSeat->license->name); ?></p>
                </div>
            </div>

            <!-- Serial -->
            <div class="form-group">
                <label class="col-sm-2 control-label"><?php echo e(trans('admin/hardware/form.serial')); ?></label>
                <div class="col-md-6">
                    <p class="form-control-static">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewKeys', $licenseSeat->license)): ?>
                            <?php echo e($licenseSeat->license->serial); ?>

                        <?php else: ?>
                            ------------
                        <?php endif; ?>
                        </p>
                </div>
            </div>

            <!-- Note -->
            <div class="form-group <?php echo e($errors->has('note') ? 'error' : ''); ?>">
                <label for="note" class="col-md-2 control-label"><?php echo e(trans('admin/hardware/form.notes')); ?></label>
                <div class="col-md-7">
                    <textarea class="col-md-6 form-control" id="note" name="note"><?php echo e(old('note', $licenseSeat->note)); ?></textarea>
                    <?php echo $errors->first('note', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

                </div>
            </div>
                        <div class="box-footer">
                            <a class="btn btn-link" href="<?php echo e(route('licenses.index')); ?>"><?php echo e(trans('button.cancel')); ?></a>
                            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check icon-white" aria-hidden="true"></i> <?php echo e(trans('general.checkin')); ?></button>
                        </div>
                    </div> <!-- /.box-->
            </form>
        </div> <!-- /.col-md-7-->
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/licenses/checkin.blade.php ENDPATH**/ ?>