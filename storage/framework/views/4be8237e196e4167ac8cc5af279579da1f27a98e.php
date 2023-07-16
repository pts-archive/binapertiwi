<?php $__env->startSection('title'); ?>
  Manage <?php echo e(trans('admin/custom_fields/general.custom_fields')); ?>

##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', \App\Models\CustomFieldset::class)): ?>
<div class="row">
  <div class="col-md-12">
    <div class="box box-default">

      <div class="box-header with-border">
        <h2 class="box-title"><?php echo e(trans('admin/custom_fields/general.fieldsets')); ?></h2>
        <div class="box-tools pull-right">
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', \App\Models\CustomFieldset::class)): ?>
          <a href="<?php echo e(route('fieldsets.create')); ?>" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Create a new fieldset"><?php echo e(trans('admin/custom_fields/general.create_fieldset')); ?></a>
          <?php endif; ?>
        </div>
      </div><!-- /.box-header -->

      <div class="box-body">
        <table
                data-cookie-id-table="customFieldsetsTable"
                data-id-table="customFieldsetsTable"
                data-search="true"
                data-side-pagination="client"
                data-show-columns="true"
                data-show-export="true"
                data-show-refresh="true"
                data-sort-order="asc"
                data-sort-name="name"
                id="customFieldsTable"
                class="table table-striped snipe-table"
                data-export-options='{
                "fileName": "export-fieldsets-<?php echo e(date('Y-m-d')); ?>",
                "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                }'>
          <thead>
            <tr>
              <th><?php echo e(trans('general.name')); ?></th>
              <th><?php echo e(trans('admin/custom_fields/general.qty_fields')); ?></th>
              <th><?php echo e(trans('admin/custom_fields/general.used_by_models')); ?></th>
              <th>Actions</th>
            </tr>
          </thead>

          <?php if(isset($custom_fieldsets)): ?>
          <tbody>
            <?php $__currentLoopData = $custom_fieldsets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fieldset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td>
                <?php echo e(link_to_route("fieldsets.show",$fieldset->name,['fieldset' => $fieldset->id])); ?>

              </td>
              <td>
                <?php echo e($fieldset->fields->count()); ?>

              </td>
              <td>
                <?php $__currentLoopData = $fieldset->models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <a href="<?php echo e(route('models.show', $model->id)); ?>" class="label label-default"><?php echo e($model->name); ?><?php echo e(($model->model_number) ? ' ('.$model->model_number.')' : ''); ?></a>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </td>
              <td>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $fieldset)): ?>
                <?php echo e(Form::open(['route' => array('fieldsets.destroy', $fieldset->id), 'method' => 'delete'])); ?>

                  <?php if($fieldset->models->count() > 0): ?>
                  <button type="submit" class="btn btn-danger btn-sm disabled" disabled><i class="fa fa-trash"></i></button>
                  <?php else: ?>
                  <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                  <?php endif; ?>
                <?php echo e(Form::close()); ?>

                <?php endif; ?>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
          <?php endif; ?>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box.box-default -->

  </div> <!-- .col-md-12-->


</div> <!-- .row-->
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', \App\Models\CustomField::class)): ?>
<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-header with-border">
        <h2 class="box-title"><?php echo e(trans('admin/custom_fields/general.custom_fields')); ?></h2>
        <div class="box-tools pull-right">
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', \App\Models\CustomField::class)): ?>
          <a href="<?php echo e(route('fields.create')); ?>" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Create a new custom field"><?php echo e(trans('admin/custom_fields/general.create_field')); ?></a>
          <?php endif; ?>
        </div>

      </div><!-- /.box-header -->
      <div class="box-body">

        <div class="table-responsive">
        <table
                data-cookie-id-table="customFieldsTable"
                data-id-table="customFieldsTable"
                data-search="true"
                data-side-pagination="client"
                data-show-columns="true"
                data-show-export="true"
                data-show-refresh="true"
                data-sort-order="asc"
                data-sort-name="name"
                id="customFieldsTable"
                class="table table-striped snipe-table"
                data-export-options='{
                "fileName": "export-fields-<?php echo e(date('Y-m-d')); ?>",
                "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                }'>
          <thead>
            <tr>
              <th data-searchable="true"><?php echo e(trans('general.name')); ?></th>
              <th data-searchable="true">Help Text</th>
              <th data-searchable="true">Email</th>
              <th data-visible="false">DB Field</th>
              <th data-searchable="true"><?php echo e(trans('admin/custom_fields/general.field_format')); ?></th>
              <th data-searchable="true"><?php echo e(trans('admin/custom_fields/general.field_element_short')); ?></th>
              <th data-searchable="true"><?php echo e(trans('admin/custom_fields/general.fieldsets')); ?></th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $custom_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($field->name); ?></td>
              <td><?php echo e($field->help_text); ?></td>
              <td><?php echo ($field->show_in_email=='1') ? '<i class="fa fa-check text-success" aria-hidden="true"><span class="sr-only">'.trans('general.yes').'</span></i>' : '<i class="fa fa-times text-danger" aria-hidden="true"><span class="sr-only">'.trans('general.no').'</span></i>'; ?></td>
              <td>
                 <code><?php echo e($field->convertUnicodeDbSlug()); ?></code>
                <?php if($field->convertUnicodeDbSlug()!=$field->db_column): ?>
                  <br><i class="fa fa-warning text-danger"></i>WARNING. This field is in the custom fields table as <code><?php echo e($field->db_column); ?></code> but should be <code><?php echo e($field->convertUnicodeDbSlug()); ?></code>.
                <?php endif; ?>
              </td>
              <td><?php echo e($field->format); ?></td>
              <td><?php echo e($field->element); ?></td>
              <td>
                <?php $__currentLoopData = $field->fieldset; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fieldset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <a href="<?php echo e(route('fieldsets.show', $fieldset->id)); ?>" class="label label-default"><?php echo e($fieldset->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </td>
              <td>
                <nobr>
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $field)): ?>
                <a href="<?php echo e(route('fields.edit', $field->id)); ?>" class="btn btn-warning btn-sm">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                  <span class="sr-only">Edit</span>
                </a>
                <?php endif; ?>               
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $field)): ?>
                <?php echo e(Form::open(array('route' => array('fields.destroy', $field->id), 'method' => 'delete', 'style' => 'display:inline-block'))); ?>

                <?php if($field->fieldset->count()>0): ?>
                <button type="submit" class="btn btn-danger btn-sm disabled" disabled>
                  <i class="fa fa-trash" aria-hidden="true"></i>
                  <span class="sr-only">Delete</span></button>
                <?php else: ?>
                <button type="submit" class="btn btn-danger btn-sm">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                  <span class="sr-only">Delete</span>
                </button>
                <?php endif; ?>
                <?php echo e(Form::close()); ?>

                <?php endif; ?>
                </nobr>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
        </div>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div> <!-- /.col-md-9-->
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('moar_scripts'); ?>
  <?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', [
    'helpText' => trans('admin/custom_fields/general.about_fieldsets_text'),
    'helpPosition' => 'right',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/custom_fields/index.blade.php ENDPATH**/ ?>