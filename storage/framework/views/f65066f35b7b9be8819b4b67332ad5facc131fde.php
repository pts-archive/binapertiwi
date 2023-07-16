<?php $__env->startSection('title'); ?>
    <?php if($item->id): ?>
        <?php echo e($updateText); ?>
    <?php else: ?>
        <?php echo e($createText); ?>
    <?php endif; ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
<a href="<?php echo e(URL::previous()); ?>" class="btn btn-primary pull-right">
    <?php echo e(trans('general.back')); ?></a>
<?php $__env->stopSection(); ?>





<?php $__env->startSection('content'); ?>

<!-- row -->
<div class="row">
    <!-- col-md-8 -->
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">

        <form id="create-form" class="form-horizontal" method="post" action="<?php echo e((isset($formAction)) ? $formAction : \Request::url()); ?>" autocomplete="off" role="form" enctype="multipart/form-data">

        <!-- box -->
        <div class="box box-default">
            <!-- box-header -->
            <div class="box-header with-border text-right">

                <div class="col-md-12 box-title text-right" style="padding: 0px; margin: 0px;">

                    <div class="col-md-12" style="padding: 0px; margin: 0px;">
                        <div class="col-md-9 text-left">
                            <?php if($item->id): ?>
                                <h2 class="box-title text-left" style="padding-top: 8px;">
                                    <?php echo e($item->display_name); ?>
                                </h2>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3 text-right" style="padding-right: 10px;">
                            <a class="btn btn-link text-left" href="<?php echo e(URL::previous()); ?>">
                                <?php echo e(trans('button.cancel')); ?>
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-check icon-white" aria-hidden="true"></i>
                                <?php echo e(trans('general.save')); ?>
                            </button>
                        </div>
                    </div>
                </div>

            </div><!-- /.box-header -->

            <!-- box-body -->
            <div class="box-body">

                    <?php if($item->id): ?>
                    <?php echo e(method_field('PUT')); ?>
                    <?php endif; ?>

                    <!-- CSRF Token -->
                    <?php echo e(csrf_field()); ?>
                    <?php echo $__env->yieldContent('inputFields'); ?>
                    <?php echo $__env->make('partials.forms.edit.submit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div> <!-- ./box-body -->
        </div> <!-- box -->
        </form>
    </div> <!-- col-md-8 -->

</div><!-- ./row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\asset.binapertiwi.co.id\resources\views/layouts/edit-form.blade.php ENDPATH**/ ?>