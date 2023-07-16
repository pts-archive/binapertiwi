<?php $__env->startSection('title'); ?>
<?php echo e(trans('admin/models/table.view')); ?>

<?php echo e($model->model_tag); ?>

##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('superuser')): ?>
  <div class="btn-group pull-right">
     <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php echo e(trans('button.actions')); ?>

          <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
          <?php if($model->deleted_at==''): ?>
            <li><a href="<?php echo e(route('models.edit', $model->id)); ?>"><?php echo e(trans('admin/models/table.edit')); ?></a></li>
            <li><a href="<?php echo e(route('clone/model', $model->id)); ?>"><?php echo e(trans('admin/models/table.clone')); ?></a></li>
            <li><a href="<?php echo e(route('hardware.create', ['model_id' => $model->id])); ?>"><?php echo e(trans('admin/hardware/form.create')); ?></a></li>
          <?php else: ?>
            <li><a href="<?php echo e(route('restore/model', $model->id)); ?>"><?php echo e(trans('admin/models/general.restore')); ?></a></li>
          <?php endif; ?>
      </ul>
  </div>
  <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-9">
    <div class="box box-default">
      <?php if($model->id): ?>
        <div class="box-header with-border">
          <div class="box-heading">
            <h2 class="box-title"> <?php echo e($model->name); ?>

                <?php echo e(($model->model_number) ? '(#'.$model->model_number.')' : ''); ?>

            </h2>
          </div>
        </div><!-- /.box-header -->
      <?php endif; ?>
      <div class="box-body">
          <div class="row">
              <div class="col-md-12">
                  <?php echo e(Form::open([
                     'method' => 'POST',
                     'route' => ['hardware/bulkedit'],
                     'class' => 'form-inline',
                      'id' => 'bulkForm'])); ?>

                  <div id="toolbar">
                      <select name="bulk_actions" class="form-control select2">
                          <option value="edit">Edit</option>
                          <option value="delete">Delete</option>
                          <option value="labels">Generate Labels</option>
                      </select>
                      <button class="btn btn-primary" id="bulkEdit" disabled>Go</button>
                  </div>

                  <table
                  data-columns="<?php echo e(\App\Presenters\AssetPresenter::dataTableLayout()); ?>"
                  data-cookie-id-table="assetListingTable"
                  data-pagination="true"
                  data-id-table="assetListingTable"
                  data-search="true"
                  data-side-pagination="server"
                  data-show-columns="true"
                  data-toolbar="#toolbar"
                  data-show-export="true"
                  data-show-refresh="true"
                  data-sort-order="asc"
                  id="assetListingTable"
                  data-url="<?php echo e(route('api.assets.index',['model_id'=> $model->id])); ?>"
                  class="table table-striped snipe-table"
                  data-export-options='{
                "fileName": "export-models-<?php echo e($model->name); ?>-assets-<?php echo e(date('Y-m-d')); ?>",
                "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                }'>
                </table>
                  <?php echo e(Form::close()); ?>

              </div>
          </div>
      </div> <!-- /.box-body-->
    </div> <!-- /.box-default-->
  </div> <!-- /.col-md-9-->

  <!-- side address column -->
  <div class="col-md-3">
      <div class="box box-default">
              <div class="box-header with-border">
                  <div class="box-heading">
                      <h2 class="box-title"> More Info:</h2>
                  </div>
              </div><!-- /.box-header -->
          <div class="box-body">

              <?php if($model->image): ?>
                  <img src="<?php echo e(Storage::disk('public')->url(app('models_upload_path').e($model->image))); ?>" class="img-responsive"></li>
              <?php endif; ?>


            <ul class="list-unstyled" style="line-height: 25px;">
              <?php if($model->manufacturer): ?>
              <li>
                <?php echo e(trans('general.manufacturer')); ?>:
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', \App\Models\Manufacturer::class)): ?>
                  <a href="<?php echo e(route('manufacturers.show', $model->manufacturer->id)); ?>">
                      <?php echo e($model->manufacturer->name); ?>

                  </a>
              <?php else: ?>
                  <?php echo e($model->manufacturer->name); ?>

              <?php endif; ?>
              </li>

                  <?php if($model->manufacturer->url): ?>
                      <li>
                          <i class="fa fa-globe"></i> <a href="<?php echo e($model->manufacturer->url); ?>"><?php echo e($model->manufacturer->url); ?></a>
                      </li>
                  <?php endif; ?>

                  <?php if($model->manufacturer->support_url): ?>
                      <li>
                          <i class="fa fa-life-ring"></i> <a href="<?php echo e($model->manufacturer->support_url); ?>"><?php echo e($model->manufacturer->support_url); ?></a>
                      </li>
                  <?php endif; ?>

                  <?php if($model->manufacturer->support_phone): ?>
                      <li>
                          <i class="fa fa-phone"></i>
                          <a href="tel:<?php echo e($model->manufacturer->support_phone); ?>"><?php echo e($model->manufacturer->support_phone); ?></a>

                      </li>
                  <?php endif; ?>

                  <?php if($model->manufacturer->support_email): ?>
                      <li>
                          <i class="fa fa-envelope"></i> <a href="mailto:<?php echo e($model->manufacturer->support_email); ?>"><?php echo e($model->manufacturer->support_email); ?></a>
                      </li>
                  <?php endif; ?>
                <?php endif; ?>
              <?php if($model->model_number): ?>
              <li>
                <?php echo e(trans('general.model_no')); ?>:
                <?php echo e($model->model_number); ?>

              </li>
              <?php endif; ?>

              <?php if($model->depreciation): ?>
              <li>
                <?php echo e(trans('general.depreciation')); ?>:
                <?php echo e($model->depreciation->name); ?> (<?php echo e($model->depreciation->months.' '.trans('general.months')); ?>)
              </li>
              <?php endif; ?>

              <?php if($model->eol): ?>
              <li><?php echo e(trans('general.eol')); ?>:
                <?php echo e($model->eol .' '. trans('general.months')); ?>

              </li>
              <?php endif; ?>

              <?php if($model->fieldset): ?>
              <li><?php echo e(trans('admin/models/general.fieldset')); ?>:
                <a href="<?php echo e(route('fieldsets.show', $model->fieldset->id)); ?>"><?php echo e($model->fieldset->name); ?></a>
              </li>
              <?php endif; ?>

              <?php if($model->notes): ?>
                  <li>
                      <?php echo e(trans('general.notes')); ?>:
                      <?php echo e($model->notes); ?>

                  </li>
              <?php endif; ?>



              <?php if($model->deleted_at!=''): ?>
               <li><br /><a href="<?php echo e(route('restore/model', $model->id)); ?>" class="btn-flat large info "><?php echo e(trans('admin/models/general.restore')); ?></a></li>
              <?php endif; ?>
            </ul>

            <?php if($model->note): ?>
            Notes:
            <p>
              <?php echo $model->present()->note(); ?>

            </p>
            <?php endif; ?>
          </div>
      </div>
  </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
<?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/models/view.blade.php ENDPATH**/ ?>