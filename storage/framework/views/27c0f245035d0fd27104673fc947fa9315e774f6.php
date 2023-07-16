<?php $__env->startSection('title'); ?>
<?php echo e(trans('general.custom_report')); ?>

<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_right'); ?>
<a href="<?php echo e(URL::previous()); ?>" class="btn btn-primary pull-right">
  <?php echo e(trans('general.back')); ?></a>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-8 col-md-offset-2">

    <?php echo e(Form::open(['method' => 'post', 'class' => 'form-horizontal'])); ?>

    <?php echo e(csrf_field()); ?>


    <!-- Horizontal Form -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h2 class="box-title">Customize Report</h2>
        </div><!-- /.box-header -->

        <div class="box-body">
          <div class="col-md-4">


            <div class="checkbox col-md-12">
              <label>
                <input type="checkbox" class="all minimal" checked="checked">
               Select All
              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('company', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('general.company')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
              <?php echo e(Form::checkbox('asset_tag', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('general.asset_tag')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('asset_name', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('admin/hardware/form.name')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('manufacturer', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('general.manufacturer')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('model', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('general.asset_models')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('category', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('general.category')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('serial', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('admin/hardware/table.serial')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('purchase_date', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('admin/licenses/table.purchase_date')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('purchase_cost', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('admin/hardware/form.cost')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('eol', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('admin/hardware/table.eol')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('order', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('admin/hardware/form.order')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('supplier', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('general.suppliers')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('location', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('general.location')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('location_address', '1', '1', ['class' => 'minimal'])); ?>

                - <?php echo e(trans('general.address')); ?>

              </label>
            </div>

            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('rtd_location', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('admin/hardware/form.default_location')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('rtd_location_address', '1', '1', ['class' => 'minimal'])); ?>

                - <?php echo e(trans('general.address')); ?>

              </label>
            </div>


            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('status', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('general.status')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('warranty', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('admin/hardware/form.warranty')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('depreciation', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('general.depreciation')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('checkout_date', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('admin/hardware/table.checkout_date')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('expected_checkin', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('admin/hardware/form.expected_checkin')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('created_at', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('general.created_at')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('updated_at', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('general.updated_at')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('last_audit_date', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('general.last_audit')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('next_audit_date', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('general.next_audit_date')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('notes', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('general.notes')); ?>

              </label>
            </div>

            <!-- User fields -->
            <div class="checkbox col-md-12">
              <h2>Checked Out To Fields:</h4>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('assigned_to', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('admin/licenses/table.assigned_to')); ?>

              </label>
            </div>
            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('username', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('admin/users/table.username')); ?>

              </label>
            </div>

            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('employee_num', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('admin/users/table.employee_num')); ?>

              </label>
            </div>

            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('manager', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('admin/users/table.manager')); ?>

              </label>
            </div>

            <div class="checkbox col-md-12">
              <label>
                <?php echo e(Form::checkbox('department', '1', '1', ['class' => 'minimal'])); ?>

                <?php echo e(trans('general.department')); ?>

              </label>
            </div>





            <?php if($customfields->count() > 0): ?>
              <div class="checkbox col-md-12">
                <h2>Custom Fields:</h4>
              </div>
              <?php $__currentLoopData = $customfields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customfield): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="checkbox col-md-12">
                  <label>
                    <?php echo e(Form::checkbox($customfield->db_column_name(), '1', '1', ['class' => 'minimal'])); ?>

                    <?php echo e($customfield->name); ?>

                  </label>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

          </div> <!-- /.col-md-3-->

          <div class="col-md-8">

            <p>Select the fields you'd like to include in your custom report, and click Generate. The file (custom-asset-report-YYYY-mm-dd.csv) will download automatically, and you can open it in Excel.</p>
            <p>If you'd like to export only certain assets, use the options below to fine-tune your results.</p>

            <?php echo $__env->make('partials.forms.edit.company-select', ['translated_name' => trans('general.company'), 'fieldname' => 'by_company_id', 'hide_new' => 'true'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.forms.edit.location-select', ['translated_name' => trans('general.location'), 'fieldname' => 'by_location_id', 'hide_new' => 'true'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.forms.edit.location-select', ['translated_name' => trans('admin/hardware/form.default_location'), 'fieldname' => 'by_rtd_location_id', 'hide_new' => 'true'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php echo $__env->make('partials.forms.edit.department-select', ['translated_name' => trans('general.department'), 'fieldname' => 'by_dept_id', 'hide_new' => 'true'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.forms.edit.supplier-select', ['translated_name' => trans('general.supplier'), 'fieldname' => 'by_supplier_id', 'hide_new' => 'true'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.forms.edit.model-select', ['translated_name' => trans('general.asset_model'), 'fieldname' => 'by_model_id', 'hide_new' => 'true'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.forms.edit.manufacturer-select', ['translated_name' => trans('general.manufacturer'), 'fieldname' => 'by_manufacturer_id', 'hide_new' => 'true'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.forms.edit.category-select', ['translated_name' => trans('general.category'), 'fieldname' => 'by_category_id', 'hide_new' => 'true', 'category_type' => 'asset'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <!-- Status -->
            <div class="form-group">
              <label for="by_status_id" class="col-md-3 control-label"><?php echo e(trans('admin/hardware/form.status')); ?></label>
              <div class="col-md-7 col-sm-11">
                <?php echo e(Form::select('by_status_id', \App\Helpers\Helper::statusLabelList() , old('by_status_id'), array('class'=>'select2', 'style'=>'width:100%', 'aria-label'=>'by_status_id'))); ?>

              </div>
            </div>


            <!-- Order Number -->
            <div class="form-group">
              <label for="by_order_number" class="col-md-3 control-label"><?php echo e(trans('general.order_number')); ?></label>
              <div class="col-md-5 col-sm-8">
                <input class="form-control" type="text" name="by_order_number" value="" aria-label="by_order_number">
              </div>
            </div>

          <!-- Purchase Date -->
            <div class="form-group purchase-range">
              <label for="purchase_start" class="col-md-3 control-label"><?php echo e(trans('general.purchase_date')); ?> Range</label>
              <div class="input-daterange input-group col-md-6" id="datepicker">
                <input type="text" class="input-sm form-control" name="purchase_start" aria-label="purchase_start">
                <span class="input-group-addon">to</span>
                <input type="text" class="input-sm form-control" name="purchase_end" aria-label="purchase_end">
              </div>
            </div>

            <!-- Created Date -->
            <div class="form-group purchase-range">
              <label for="created_start" class="col-md-3 control-label"><?php echo e(trans('general.created_at')); ?> Range</label>
              <div class="input-daterange input-group col-md-6" id="datepicker">
                <input type="text" class="input-sm form-control" name="created_start" aria-label="created_start">
                <span class="input-group-addon">to</span>
                <input type="text" class="input-sm form-control" name="created_end" aria-label="created_end">
              </div>
            </div>

            <!-- Expected Checkin Date -->
            <div class="form-group expected_checkin-range">
              <label for="expected_checkin_start" class="col-md-3 control-label"><?php echo e(trans('admin/hardware/form.expected_checkin')); ?></label>
              <div class="input-daterange input-group col-md-6" id="datepicker">
                <input type="text" class="input-sm form-control" name="expected_checkin_start" aria-label="expected_checkin_start">
                <span class="input-group-addon">to</span>
                <input type="text" class="input-sm form-control" name="expected_checkin_end" aria-label="expected_checkin_end">
              </div>
            </div>

              <!-- Last Audit Date -->
              <div class="form-group last_audit-range">
                  <label for="last_audit_start" class="col-md-3 control-label"><?php echo e(trans('general.last_audit')); ?></label>
                  <div class="input-daterange input-group col-md-6" id="datepicker">
                      <input type="text" class="input-sm form-control" name="last_audit_start" aria-label="last_audit_start">
                      <span class="input-group-addon">to</span>
                      <input type="text" class="input-sm form-control" name="last_audit_end" aria-label="last_audit_end">
                  </div>
              </div>

              <!-- Next Audit Date -->
              <div class="form-group next_audit-range">
                  <label for="next_audit_start" class="col-md-3 control-label"><?php echo e(trans('general.next_audit_date')); ?></label>
                  <div class="input-daterange input-group col-md-6" id="datepicker">
                      <input type="text" class="input-sm form-control" name="next_audit_start" aria-label="nex_audit_start">
                      <span class="input-group-addon">to</span>
                      <input type="text" class="input-sm form-control" name="next_audit_end" aria-label="next_audit_end">
                  </div>
              </div>

            <div class="col-md-9 col-md-offset-3">
              <label>
                <?php echo e(Form::checkbox('use_bom', '1')); ?>

                Add a BOM (byte-order mark) to this CSV
              </label>

            </div>

          </div>


        </div> <!-- /.box-body-->
        <div class="box-footer text-right">
          <button type="submit" class="btn btn-success"><i class="fa fa-download icon-white" aria-hidden="true"></i> <?php echo e(trans('general.generate')); ?></button>
        </div>
      </div> <!--/.box.box-default-->
    <?php echo e(Form::close()); ?>

  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
  <script>

      $('.purchase-range .input-daterange').datepicker({
          clearBtn: true,
          todayHighlight: true,
          endDate: '0d',
          format: 'yyyy-mm-dd'
      });

      $('.expected_checkin-range .input-daterange').datepicker({
          clearBtn: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd'
      });

      $('.last_audit-range .input-daterange').datepicker({
          clearBtn: true,
          todayHighlight: true,
          endDate:'0d',
          format: 'yyyy-mm-dd'
      });

      $('.next_audit-range .input-daterange').datepicker({
          clearBtn: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd'
      });

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

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\asset.binapertiwi.co.id\resources\views/reports/custom.blade.php ENDPATH**/ ?>