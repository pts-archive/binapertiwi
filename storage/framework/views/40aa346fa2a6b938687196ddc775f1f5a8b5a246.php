
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title"><?php echo e(trans('admin/suppliers/table.create')); ?></h4>
        </div>
        <div class="modal-body">
            <form action="<?php echo e(route('api.suppliers.store')); ?>" onsubmit="return false">
                <div class="alert alert-danger" id="modal_error_msg" style="display:none">
                </div>
                <div class="dynamic-form-row">
                    <div class="col-md-4 col-xs-12"><label for="modal-name"><?php echo e(trans('general.name')); ?>:
                        </label></div>
                    <div class="col-md-8 col-xs-12 required"><input type='text' name="name" id='modal-name' class="form-control"></div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('button.cancel')); ?></button>
            <button type="button" class="btn btn-primary" id="modal-save"><?php echo e(trans('general.save')); ?></button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
<?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/modals/supplier.blade.php ENDPATH**/ ?>