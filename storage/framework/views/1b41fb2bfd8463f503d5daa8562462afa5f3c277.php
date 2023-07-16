<?php $__env->startSection('title'); ?>
     <?php echo e(trans('admin/accessories/general.checkout')); ?>

##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('header_right'); ?>
<a href="<?php echo e(URL::previous()); ?>" class="btn btn-primary pull-right">
  <?php echo e(trans('general.back')); ?></a>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>


<div class="row">
  <div class="col-md-9">
    <form class="form-horizontal" method="post" action="" autocomplete="off">
    <!-- CSRF Token -->
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

    <div class="box box-default">
      <?php if($accessory->id): ?>
        <div class="box-header with-border">
          <h2 class="box-title"><?php echo e($accessory->name); ?></h2>
        </div><!-- /.box-header -->
      <?php endif; ?>

       <div class="box-body">
         <?php if($accessory->name): ?>
          <!-- accessory name -->
          <div class="form-group">
            <label class="col-sm-3 control-label"><?php echo e(trans('admin/accessories/general.accessory_name')); ?></label>
            <div class="col-md-6">
              <p class="form-control-static"><?php echo e($accessory->name); ?></p>
            </div>
          </div>
          <?php endif; ?>

          <?php if($accessory->category): ?>
          <!-- accessory name -->
          <div class="form-group">
            <label class="col-sm-3 control-label"><?php echo e(trans('admin/accessories/general.accessory_category')); ?></label>
            <div class="col-md-6">
              <p class="form-control-static"><?php echo e($accessory->category->name); ?></p>
            </div>
          </div>
          <?php endif; ?>

          <!-- User -->

          <?php echo $__env->make('partials.forms.edit.user-select', ['translated_name' => trans('general.select_user'), 'fieldname' => 'assigned_to'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


             <?php if($accessory->requireAcceptance() || $accessory->getEula() || ($snipeSettings->slack_endpoint!='')): ?>
                 <div class="form-group notification-callout">
                     <div class="col-md-8 col-md-offset-3">
                         <div class="callout callout-info">

                             <?php if($accessory->requireAcceptance()): ?>
                                 <i class="fa fa-envelope"></i>
                                 <?php echo e(trans('admin/categories/general.required_acceptance')); ?>

                                 <br>
                             <?php endif; ?>

                             <?php if($accessory->getEula()): ?>
                                 <i class="fa fa-envelope"></i>
                                 <?php echo e(trans('admin/categories/general.required_eula')); ?>

                                 <br>
                             <?php endif; ?>

                             <?php if($snipeSettings->slack_endpoint!=''): ?>
                                 <i class="fa fa-slack"></i>
                                 A slack message will be sent
                             <?php endif; ?>
                         </div>
                     </div>
                 </div>
             <?php endif; ?>
          <!-- Note -->
          <div class="form-group <?php echo e($errors->has('note') ? 'error' : ''); ?>">
            <label for="note" class="col-md-3 control-label"><?php echo e(trans('admin/hardware/form.notes')); ?></label>
            <div class="col-md-7">
              <textarea class="col-md-6 form-control" id="note" name="note"><?php echo e(old('note', $accessory->note)); ?></textarea>
              <?php echo $errors->first('note', '<span class="alert-msg" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> :message</span>'); ?>

            </div>
          </div>
       </div>
       <div class="box-footer">
          <a class="btn btn-link" href="<?php echo e(URL::previous()); ?>"><?php echo e(trans('button.cancel')); ?></a>
          <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check icon-white" aria-hidden="true"></i> <?php echo e(trans('general.checkout')); ?></button>
       </div>
    </div> <!-- .box.box-default -->
  </form>
  </div> <!-- .col-md-9-->
</div> <!-- .row -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/accessories/checkout.blade.php ENDPATH**/ ?>