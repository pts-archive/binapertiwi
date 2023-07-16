<?php $__env->startSection('inputFields'); ?>
<?php echo $__env->make('partials.forms.edit.name', ['translated_name' => trans('admin/locations/table.name')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- parent -->
<?php echo $__env->make('partials.forms.edit.location-select', ['translated_name' => trans('admin/locations/table.parent'), 'fieldname' => 'parent_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Manager-->
<?php echo $__env->make('partials.forms.edit.user-select', ['translated_name' => trans('admin/users/table.manager'), 'fieldname' => 'manager_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Currency -->
<div class="form-group <?php echo e($errors->has('currency') ? ' has-error' : ''); ?>">
    <label for="currency" class="col-md-3 control-label">
        <?php echo e(trans('admin/locations/table.currency')); ?>

    </label>
    <div class="col-md-9<?php echo e((\App\Helpers\Helper::checkIfRequired($item, 'currency')) ? ' required' : ''); ?>">
        <?php echo e(Form::text('currency', old('currency', $item->currency), array('class' => 'form-control','placeholder' => 'USD', 'maxlength'=>'3', 'style'=>'width: 60px;', 'aria-label'=>'currency'))); ?>

        <?php echo $errors->first('currency', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

    </div>
</div>

<?php echo $__env->make('partials.forms.edit.address', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- LDAP Search OU -->
<?php if($snipeSettings->ldap_enabled == 1): ?>
    <div class="form-group <?php echo e($errors->has('ldap_ou') ? ' has-error' : ''); ?>">
        <label for="ldap_ou" class="col-md-3 control-label">
            <?php echo e(trans('admin/locations/table.ldap_ou')); ?>

        </label>
        <div class="col-md-7<?php echo e((\App\Helpers\Helper::checkIfRequired($item, 'ldap_ou')) ? ' required' : ''); ?>">
            <?php echo e(Form::text('ldap_ou', old('ldap_ou', $item->ldap_ou), array('class' => 'form-control'))); ?>

            <?php echo $errors->first('ldap_ou', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

        </div>
    </div>
<?php endif; ?>

<!-- Image -->
<?php if(($item->image) && ($item->image!='')): ?>
    <div class="form-group <?php echo e($errors->has('image_delete') ? 'has-error' : ''); ?>">
        <label class="col-md-3 control-label" for="image_delete"><?php echo e(trans('general.image_delete')); ?></label>
        <div class="col-md-9">
            <label for="image_delete">
                <?php echo e(Form::checkbox('image_delete', '1', old('image_delete'), array('class' => 'minimal', 'aria-label'=>'required'))); ?>

            </label>
            <br>
            <img src="<?php echo e(url('/')); ?>/uploads/locations/<?php echo e($item->image); ?>" alt="Image for <?php echo e($item->name); ?>">
            <?php echo $errors->first('image_delete', '<span class="alert-msg" aria-hidden="true"><br>:message</span>'); ?>

        </div>
    </div>
<?php endif; ?>

<?php echo $__env->make('partials.forms.edit.image-upload', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php if(!$item->id): ?>
<?php $__env->startSection('moar_scripts'); ?>
<script nonce="<?php echo e(csrf_token()); ?>">

    var $eventSelect = $(".parent");
    $eventSelect.on("change", function () { parent_details($eventSelect.val()); });
    $(function() {
        var parent_loc = $(".parent option:selected").val();
        if(parent_loc!=''){
            parent_details(parent_loc);
        }
    });

    function parent_details(id) {

        if (id) {
//start ajax request
$.ajax({
    type: 'GET',
    url: "<?php echo e(url('/')); ?>/api/locations/"+id+"/check",
//force to handle it as text
dataType: "text",
success: function(data) {
    var json = $.parseJSON(data);
    $("#city").val(json.city);
    $("#address").val(json.address);
    $("#address2").val(json.address2);
    $("#state").val(json.state);
    $("#zip").val(json.zip);
    $(".country").select2("val",json.country);
}
});
} else {
    $("#city").val('');
    $("#address").val('');
    $("#address2").val('');
    $("#state").val('');
    $("#zip").val('');
    $(".country").select2("val",'');
}



};
</script>
<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php echo $__env->make('layouts/edit-form', [
    'createText' => trans('admin/locations/table.create') ,
    'updateText' => trans('admin/locations/table.update'),
    'topSubmit' => true,
    'helpPosition' => 'right',
    'helpText' => trans('admin/locations/table.about_locations'),
    'formAction' => (isset($item->id)) ? route('locations.update', ['location' => $item->id]) : route('locations.store'),
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/locations/edit.blade.php ENDPATH**/ ?>