<?php if($errors->any()): ?>
<div class="col-md-12">
    <div class="alert alert-danger fade in">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <i class="fa fa-exclamation-circle faa-pulse animated"></i>
        <strong>Error: </strong>
         Please check the form below for errors
    </div>
</div>

<?php endif; ?>


<?php if($message = Session::get('status')): ?>
    <div class="col-md-12">
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <i class="fa fa-check faa-pulse animated"></i>
            <strong>Success: </strong>
            <?php echo e($message); ?>

        </div>
    </div>
<?php endif; ?>


<?php if($message = Session::get('success')): ?>
<div class="col-md-12">
    <div class="alert alert-success fade in">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <i class="fa fa-check faa-pulse animated"></i>
        <strong>Success: </strong>
        <?php echo e($message); ?>

    </div>
</div>
<?php endif; ?>


<?php if($assets = Session::get('assets')): ?>
    <?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12">
            <div class="alert alert-info fade in">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <i class="fa fa-info-circle faa-pulse animated"></i>
                <strong>Asset Information: </strong>
                <ul>
                    <?php if(isset($asset->model->name)): ?>
                        <li><b>Model Name: </b> <?php echo e($asset->model->name); ?></li>
                    <?php endif; ?>
                    <?php if(isset($asset->name)): ?>
                        <li><b>Asset Name: </b> <?php echo e($asset->model->name); ?></li>
                    <?php endif; ?>
                    <li><b>Asset Tag:</b> <?php echo e($asset->asset_tag); ?></li>
                </ul>

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>


<?php if($consumables = Session::get('consumables')): ?>
    <?php $__currentLoopData = $consumables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consumable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12">
            <div class="alert alert-info fade in">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <i class="fa fa-info-circle faa-pulse animated"></i>
                <strong>Consumable Information: </strong>
                <ul><li><b>Name:</b> <?php echo e($consumable->name); ?></li></ul>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>


<?php if($accessories = Session::get('accessories')): ?>
    <?php $__currentLoopData = $accessories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accessory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12">
            <div class="alert alert-info fade in">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <i class="fa fa-info-circle faa-pulse animated"></i>
                <strong>Accessory Information: </strong>
                <ul><li><b>Name:</b> <?php echo e($accessory->name); ?></li></ul>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>


<?php if($message = Session::get('error')): ?>
<div class="col-md-12">
    <div class="alert alert alert-danger fade in">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <i class="fa fa-exclamation-circle faa-pulse animated"></i>
        <strong>Error: </strong>
        <?php echo e($message); ?>

    </div>
</div>
<?php endif; ?>


<?php if($messages = Session::get('error_messages')): ?>
<?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
<div class="col-md-12">
    <div class="alert alert alert-danger fade in">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <i class="fa fa-exclamation-circle faa-pulse animated"></i>
        <strong>Error: </strong>
        <?php echo e($message); ?>

    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>


<?php if($message = Session::get('warning')): ?>
<div class="col-md-12">
    <div class="alert alert-warning fade in">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <i class="fa fa-warning faa-pulse animated"></i>
        <strong>Warning: </strong>
        <?php echo e($message); ?>

    </div>
</div>
<?php endif; ?>


<?php if($message = Session::get('info')): ?>
<div class="col-md-12">
    <div class="alert alert-info fade in">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <i class="fa fa-info-circle faa-pulse animated"></i>
        <strong>Info: </strong>
        <?php echo e($message); ?>

    </div>
</div>
<?php endif; ?>
<?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/notifications.blade.php ENDPATH**/ ?>