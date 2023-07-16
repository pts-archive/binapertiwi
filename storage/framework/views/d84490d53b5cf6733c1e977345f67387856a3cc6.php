<?php $__env->startSection('title'); ?>
Accept assets  <?php echo e($user->present()->fullName()); ?>

##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="box box-default">

      <div class="box-body">
        <!-- checked out Accessories table -->

        <div class="table-responsive">
          <table
                  data-cookie-id-table="pendingAcceptances"
                  data-pagination="true"
                  data-id-table="pendingAcceptances"
                  data-search="true"
                  data-side-pagination="client"
                  data-show-columns="true"
                  data-show-export="true"
                  data-show-refresh="true"
                  data-sort-order="asc"
                  id="pendingAcceptances"
                  class="table table-striped snipe-table"
                  data-export-options='{
                  "fileName": "my-pending-acceptances-<?php echo e(date('Y-m-d')); ?>",
                  "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                  }'>
            <thead>
              <tr>
                <th>Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $acceptances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acceptance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e(($acceptance->checkoutable) ? $acceptance->checkoutable->present()->name : ''); ?></td>
                <td><a href="<?php echo e(route('account.accept.item', $acceptance)); ?>" class="btn btn-default btn-sm">Accept/Decline</a></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>

       </div> <!-- .box-body-->
    </div><!--.box.box-default-->
  </div> <!-- .col-md-12-->
</div> <!-- .row-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
  <?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/account/accept/index.blade.php ENDPATH**/ ?>