<?php $__env->startSection('title'); ?>
    <?php echo e(trans('admin/settings/general.backups')); ?>

##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
    <a href="<?php echo e(route('settings.index')); ?>" class="btn btn-primary"> <?php echo e(trans('general.back')); ?></a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>


<div class="row">
  <div class="col-md-9">
    <div class="box box-default">
      <div class="box-body">
        <div class="table-responsive">
            <table
                    data-cookie="true"
                    data-cookie-id-table="system-backups"
                    data-pagination="true"
                    data-id-table="system-backups"
                    data-search="true"
                    data-side-pagination="client"
                    data-sort-order="asc"
                    id="system-backups"
                    class="table table-striped snipe-table">
            <thead>
              <th>File</th>
              <th>Created</th>
              <th>Size</th>
              <th><span class="sr-only"><?php echo e(trans('general.delete')); ?></span></th>
            </thead>
            <tbody>
            <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td>
                  <a href="<?php echo e(route('settings.backups.download', [$file['filename']])); ?>">
                      <?php echo e($file['filename']); ?>

                  </a>
              </td>
              <td><?php echo e(date("M d, Y g:i A", $file['modified'])); ?> </td>
              <td><?php echo e($file['filesize']); ?></td>
              <td>

                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('superadmin')): ?>
                      <a data-html="false"
                         class="btn delete-asset btn-danger btn-sm <?php echo e((config('app.lock_passwords')) ? ' disabled': ''); ?>" data-toggle="modal" href=" <?php echo e(route('settings.backups.destroy', $file['filename'])); ?>" data-content="<?php echo e(trans('admin/settings/message.backup.delete_confirm')); ?>" data-title="<?php echo e(trans('general.delete')); ?>  <?php echo e(htmlspecialchars($file['filename'])); ?> ?" onClick="return false;">
                          <i class="fa fa-trash icon-white" aria-hidden="true"></i>
                          <span class="sr-only"><?php echo e(trans('general.delete')); ?></span>
                      </a>
                  <?php endif; ?>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
      </div>
    </div>
</div>
</div>
   <!-- side address column -->
  <div class="col-md-3">

      <form method="POST">
        <?php echo e(Form::hidden('_token', csrf_token())); ?>


          <p>
              <button class="btn btn-primary <?php echo e((config('app.lock_passwords')) ? ' disabled': ''); ?>"><?php echo e(trans('admin/settings/general.generate_backup')); ?></button>
          </p>

           <?php if(config('app.lock_passwords')): ?>
              <p class="text-warning"><i class="fa fa-lock"></i> <?php echo e(trans('general.feature_disabled')); ?></p>
          <?php endif; ?>


      </form>
      <p>Backup files are located in: <?php echo e($path); ?></p>



  </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
    <?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/settings/backups.blade.php ENDPATH**/ ?>