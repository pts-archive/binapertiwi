





<?php $__env->startSection('inputFields'); ?>

    <?php echo $__env->make('partials.forms.edit.company-select', ['translated_name' => trans('general.company'), 'fieldname' => 'company_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <!-- Asset Tag -->
  <div class="form-group <?php echo e($errors->has('asset_tag') ? ' has-error' : ''); ?>">
    <label for="asset_tag" class="col-md-3 control-label"><?php echo e(trans('admin/hardware/form.tag')); ?></label>

      <!-- we are editing an existing asset -->
      <?php if($item->id): ?>
          <div class="col-md-7 col-sm-12<?php echo e((\App\Helpers\Helper::checkIfRequired($item, 'asset_tag')) ? ' required' : ''); ?>">
          <input class="form-control" type="text" name="asset_tags[1]" id="asset_tag" value="<?php echo e(Request::old('asset_tag', $item->asset_tag)); ?>" data-validation="required">
              <?php echo $errors->first('asset_tags', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>'); ?>

              <?php echo $errors->first('asset_tag', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>'); ?>

          </div>
      <?php else: ?>
          <!-- we are creating a new asset - let people use more than one asset tag -->
          <div class="col-md-7 col-sm-12<?php echo e((\App\Helpers\Helper::checkIfRequired($item, 'asset_tag')) ? ' required' : ''); ?>">
              <input class="form-control" type="text" name="asset_tags[1]" id="asset_tag" value="<?php echo e(Request::old('asset_tag', \App\Models\Asset::autoincrement_asset())); ?>" data-validation="required">
              <?php echo $errors->first('asset_tags', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>'); ?>

              <?php echo $errors->first('asset_tag', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>'); ?>

          </div>
          <div class="col-md-2 col-sm-12">
              <button class="add_field_button btn btn-default btn-sm">
                  <i class="fa fa-plus"></i>
              </button>
          </div>
      <?php endif; ?>
  </div>
    <?php echo $__env->make('partials.forms.edit.serial', ['fieldname'=> 'serials[1]', 'translated_serial' => trans('admin/hardware/form.serial')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="input_fields_wrap">
    </div>


    <?php echo $__env->make('partials.forms.edit.model-select', ['translated_name' => trans('admin/hardware/form.model'), 'fieldname' => 'model_id', 'field_req' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <div id='custom_fields_content'>
      <!-- Custom Fields -->
      <?php if($item->model && $item->model->fieldset): ?>
      <?php $model=$item->model; ?>
      <?php endif; ?>
      <?php if(Request::old('model_id')): ?>
        <?php $model=\App\Models\AssetModel::find(Request::old('model_id')); ?>
      <?php elseif(isset($selected_model)): ?>
        <?php $model=$selected_model; ?>
      <?php endif; ?>
      <?php if(isset($model) && $model): ?>
      <?php echo $__env->make("models/custom_fields_form",["model" => $model], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
  </div>

  <?php echo $__env->make('partials.forms.edit.status', [ 'required' => 'true'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php if(!$item->id): ?>
      <?php echo $__env->make('partials.forms.checkout-selector', ['user_select' => 'true','asset_select' => 'true', 'location_select' => 'true', 'style' => 'display:none;'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('partials.forms.edit.user-select', ['translated_name' => trans('admin/hardware/form.checkout_to'), 'fieldname' => 'assigned_user', 'style' => 'display:none;', 'required' => 'false'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('partials.forms.edit.asset-select', ['translated_name' => trans('admin/hardware/form.checkout_to'), 'fieldname' => 'assigned_asset', 'style' => 'display:none;', 'required' => 'false'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('partials.forms.edit.location-select', ['translated_name' => trans('admin/hardware/form.checkout_to'), 'fieldname' => 'assigned_location', 'style' => 'display:none;', 'required' => 'false'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php elseif(($item->assignedTo) && ($item->deleted_at=='')): ?>
      <!-- This is an asset and it's currently deployed, so let them edit the expected checkin date -->
      <?php echo $__env->make('partials.forms.edit.datepicker', ['translated_name' => trans('admin/hardware/form.expected_checkin'),'fieldname' => 'expected_checkin'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>

  <?php echo $__env->make('partials.forms.edit.name', ['translated_name' => trans('admin/hardware/form.name')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('partials.forms.edit.purchase_date', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('partials.forms.edit.supplier-select', ['translated_name' => trans('general.supplier'), 'fieldname' => 'supplier_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('partials.forms.edit.order_number', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
    $currency_type=null;
    if ($item->id && $item->location) {
        $currency_type = $item->location->currency;
    }
    ?>
  <?php echo $__env->make('partials.forms.edit.purchase_cost', ['currency_type' => $currency_type], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('partials.forms.edit.warranty', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('partials.forms.edit.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make('partials.forms.edit.location-select', ['translated_name' => trans('admin/hardware/form.default_location'), 'fieldname' => 'rtd_location_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <?php echo $__env->make('partials.forms.edit.requestable', ['requestable_text' => trans('admin/hardware/general.requestable')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Image -->
  <?php if($item->image): ?>
  <div class="form-group <?php echo e($errors->has('image_delete') ? 'has-error' : ''); ?>">
      <label class="col-md-3 control-label" for="image_delete"><?php echo e(trans('general.image_delete')); ?></label>
      <div class="col-md-5">
          <label class="control-label" for="image_delete">
          <input type="checkbox" value="1" name="image_delete" id="image_delete" class="minimal" <?php echo e(Request::old('image_delete') == '1' ? ' checked="checked"' : ''); ?>>
          <?php echo $errors->first('image_delete', '<span class="alert-msg">:message</span>'); ?>

          </label>
          <div style="margin-top: 0.5em">
              <img src="<?php echo e(Storage::disk('public')->url(app('assets_upload_path').e($item->image))); ?>" class="img-responsive" />
          </div>
      </div>
  </div>
  <?php endif; ?>

<?php echo $__env->make('partials.forms.edit.image-upload', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>



<script nonce="<?php echo e(csrf_token()); ?>">


    var transformed_oldvals={};

    function fetchCustomFields() {
        //save custom field choices
        var oldvals = $('#custom_fields_content').find('input,select').serializeArray();
        for(var i in oldvals) {
            transformed_oldvals[oldvals[i].name]=oldvals[i].value;
        }

        var modelid = $('#model_select_id').val();
        if (modelid == '') {
            $('#custom_fields_content').html("");
        } else {

            $.ajax({
                type: 'GET',
                url: "<?php echo e(url('/')); ?>/models/" + modelid + "/custom_fields",
                headers: {
                    "X-Requested-With": 'XMLHttpRequest',
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                },
                _token: "<?php echo e(csrf_token()); ?>",
                dataType: 'html',
                success: function (data) {
                    $('#custom_fields_content').html(data);
                    $('#custom_fields_content select').select2(); //enable select2 on any custom fields that are select-boxes
                    //now re-populate the custom fields based on the previously saved values
                    $('#custom_fields_content').find('input,select').each(function (index,elem) {
                        if(transformed_oldvals[elem.name]) {
                            $(elem).val(transformed_oldvals[elem.name]).trigger('change'); //the trigger is for select2-based objects, if we have any
                        }

                    });
                }
            });
        }
    }

    function user_add(status_id) {

        if (status_id != '') {
            $(".status_spinner").css("display", "inline");
            $.ajax({
                url: "<?php echo e(url('/')); ?>/api/v1/statuslabels/" + status_id + "/deployable",
                headers: {
                    "X-Requested-With": 'XMLHttpRequest',
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    $(".status_spinner").css("display", "none");
                    $("#selected_status_status").fadeIn();

                    if (data == true) {
                        $("#assignto_selector").show();
                        $("#assigned_user").show();

                        $("#selected_status_status").removeClass('text-danger');
                        $("#selected_status_status").removeClass('text-warning');
                        $("#selected_status_status").addClass('text-success');
                        $("#selected_status_status").html('<i class="fa fa-check"></i> That status is deployable. This asset can be checked out.');


                    } else {
                        $("#assignto_selector").hide();
                        $("#selected_status_status").removeClass('text-danger');
                        $("#selected_status_status").removeClass('text-success');
                        $("#selected_status_status").addClass('text-warning');
                        $("#selected_status_status").html('<i class="fa fa-warning"></i> That asset status is not deployable. This asset cannot be checked out. ');
                    }
                }
            });
        }
    }


    $(function () {
        //grab custom fields for this model whenever model changes.
        $('#model_select_id').on("change", fetchCustomFields);

        //initialize assigned user/loc/asset based on statuslabel's statustype
        user_add($(".status_id option:selected").val());

        //whenever statuslabel changes, update assigned user/loc/asset
        $(".status_id").on("change", function () {
            user_add($(".status_id").val());
        });

    });


    // Add another asset tag + serial combination if the plus sign is clicked
    $(document).ready(function() {

        var max_fields      = 100; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
        var x               = 1; //initial text box count




        $(add_button).click(function(e){ //on add input button click

            e.preventDefault();

            var auto_tag        = $("#asset_tag").val().replace(/[^\d]/g, '');
            var box_html        = '';
			const zeroPad 		= (num, places) => String(num).padStart(places, '0');

            // Check that we haven't exceeded the max number of asset fields
            if (x < max_fields) {

                if (auto_tag!='') {
                     auto_tag = zeroPad(parseInt(auto_tag) + parseInt(x),auto_tag.length);
                } else {
                     auto_tag = '';
                }

                x++; //text box increment

                box_html += '<span class="fields_wrapper">';
                box_html += '<div class="form-group"><label for="asset_tag" class="col-md-3 control-label"><?php echo e(trans('admin/hardware/form.tag')); ?> ' + x + '</label>';
                box_html += '<div class="col-md-7 col-sm-12 required">';
                box_html += '<input type="text"  class="form-control" name="asset_tags[' + x + ']" value="<?php echo e((($snipeSettings->auto_increment_prefix!='') && ($snipeSettings->auto_increment_assets=='1')) ? $snipeSettings->auto_increment_prefix : ''); ?>'+ auto_tag +'" data-validation="required">';
                box_html += '</div>';
                box_html += '<div class="col-md-2 col-sm-12">';
                box_html += '<a href="#" class="remove_field btn btn-default btn-sm"><i class="fa fa-minus"></i></a>';
                box_html += '</div>';
                box_html += '</div>';
                box_html += '</div>';
                box_html += '<div class="form-group"><label for="serial" class="col-md-3 control-label"><?php echo e(trans('admin/hardware/form.serial')); ?> ' + x + '</label>';
                box_html += '<div class="col-md-7 col-sm-12">';
                box_html += '<input type="text"  class="form-control" name="serials[' + x + ']">';
                box_html += '</div>';
                box_html += '</div>';
                box_html += '</span>';
                $(wrapper).append(box_html);

            // We have reached the maximum number of extra asset fields, so disable the button
            } else {
                $(".add_field_button").attr('disabled');
                $(".add_field_button").addClass('disabled');
            }
        });

        $(wrapper).on("click",".remove_field", function(e){ //user clicks on remove text
            $(".add_field_button").removeAttr('disabled');
            $(".add_field_button").removeClass('disabled');
            e.preventDefault();
            console.log(x);

            $(this).parent('div').parent('div').parent('span').remove();
            x--;
        })
    });


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/edit-form', [
    'createText' => trans('admin/hardware/form.create'),
    'updateText' => trans('admin/hardware/form.update'),
    'topSubmit' => true,
    'helpText' => trans('help.assets'),
    'helpPosition' => 'right',
    'formAction' => ($item->id) ? route('hardware.update', ['hardware' => $item->id]) : route('hardware.store'),
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/hardware/edit.blade.php ENDPATH**/ ?>