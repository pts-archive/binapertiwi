<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Assigned to <?php echo e($show_user->present()->fullName()); ?></title>
    <style>
        body {
            font-family: "Arial, Helvetica", sans-serif;
        }
        table.inventory {
            border: solid #000;
            border-width: 1px 1px 1px 1px;
            width: 100%;
        }

        @page  {
            size: A4;
        }
        table.inventory th, table.inventory td {
            border: solid #000;
            border-width: 0 1px 1px 0;
            padding: 3px;
            font-size: 12px;
        }

        .print-logo {
            max-height: 40px;
        }

    </style>
</head>
<body>

<?php if($snipeSettings->logo_print_assets=='1'): ?>
    <?php if($snipeSettings->brand == '3'): ?>

        <h2>
        <?php if($snipeSettings->logo!=''): ?>
            <img class="print-logo" src="<?php echo e(url('/')); ?>/uploads/<?php echo e($snipeSettings->logo); ?>">
        <?php endif; ?>
        <?php echo e($snipeSettings->site_name); ?>

        </h2>
    <?php elseif($snipeSettings->brand == '2'): ?>
        <?php if($snipeSettings->logo!=''): ?>
            <img class="print-logo" src="<?php echo e(url('/')); ?>/uploads/<?php echo e($snipeSettings->logo); ?>">
        <?php endif; ?>
    <?php else: ?>
      <h2><?php echo e($snipeSettings->site_name); ?></h2>
    <?php endif; ?>
<?php endif; ?>

<h2>Assigned to <?php echo e($show_user->present()->fullName()); ?></h4>

<?php if($assets->count() > 0): ?>
    <?php
        $counter = 1;
    ?>
    <table class="inventory">
        <thead>
        <tr>
            <th colspan="8"><?php echo e(trans('general.assets')); ?></th>
        </tr>
        </thead>
        <thead>
            <tr>
                <th style="width: 20px;"></th>
                <th style="width: 20%;">Asset Tag</th>
                <th style="width: 20%;">Name</th>
                <th style="width: 10%;">Category</th>
                <th style="width: 20%;">Model</th>
                <th style="width: 20%;">Serial</th>
                <th style="width: 10%;">Checked Out</th>
                <th data-formatter="imageFormatter" style="width: 20%;"><?php echo e(trans('general.signature')); ?></th>
            </tr>
        </thead>

    <?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td><?php echo e($counter); ?></td>
            <td><?php echo e($asset->asset_tag); ?></td>
            <td><?php echo e($asset->name); ?></td>
            <td><?php echo e($asset->model->category->name); ?></td>
            <td><?php echo e($asset->model->name); ?></td>
            <td><?php echo e($asset->serial); ?></td>
            <td>
                <?php echo e($asset->last_checkout); ?></td>
            <td>
                <?php if($asset->assetlog->first()): ?>
                <img style="width:auto;height:100px;" src="<?php echo e(asset('/')); ?>display-sig/<?php echo e($asset->assetlog->first()->accept_signature); ?>">
                <?php endif; ?>
           </td>
        </tr>
            <?php if($settings->show_assigned_assets): ?>
                <?php
                    $assignedCounter = 1;
                ?>
                <?php $__currentLoopData = $asset->assignedAssets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e($counter); ?>.<?php echo e($assignedCounter); ?></td>
                        <td><?php echo e($asset->asset_tag); ?></td>
                        <td><?php echo e($asset->name); ?></td>
                        <td><?php echo e($asset->model->category->name); ?></td>
                        <td><?php echo e($asset->model->name); ?></td>
                        <td><?php echo e($asset->serial); ?></td>
                        <td>
                            <?php echo e($asset->last_checkout); ?></td>
                        <td><img style="width:auto;height:100px;" src="<?php echo e(asset('/')); ?>display-sig/<?php echo e($asset->assetlog->first()->accept_signature); ?>"></td>
                    </tr>
                    <?php
                        $assignedCounter++
                    ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <?php
                $counter++
            ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php endif; ?>

<?php if($licenses->count() > 0): ?>
    <br><br>
    <table class="inventory">
        <thead>
        <tr>
            <th colspan="4"><?php echo e(trans('general.licenses')); ?></th>
        </tr>
        </thead>
        <thead>
            <tr>
                <th style="width: 20px;"></th>
                <th style="width: 40%;">Name</th>
                <th style="width: 50%;">Serial/Product Key</th>
                <th style="width: 10%;">Checked Out</th>
            </tr>
        </thead>
        <?php
        $lcounter = 1;
        ?>

        <?php $__currentLoopData = $licenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $license): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($lcounter); ?></td>
                <td><?php echo e($license->name); ?></td>
                <td>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewKeys', $license)): ?>
                        <?php echo e($license->serial); ?>

                    <?php else: ?>
                       <i class="fa-lock" aria-hidden="true"></i> <?php echo e(str_repeat('x', 15)); ?>

                    <?php endif; ?>
                </td>
                <td><?php echo e($license->assetlog->first()->created_at); ?></td>
            </tr>
            <?php
                $lcounter++
            ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php endif; ?>


<?php if($accessories->count() > 0): ?>
    <br><br>
    <table class="inventory">
        <thead>
        <tr>
            <th colspan="4"><?php echo e(trans('general.accessories')); ?></th>
        </tr>
        </thead>
        <thead>
            <tr>
                <th style="width: 20px;"></th>
                <th style="width: 40%;">Name</th>
                <th style="width: 50%;">Category</th>
                <th style="width: 10%;">Checked Out</th>
            </tr>
        </thead>
        <?php
            $acounter = 1;
        ?>

        <?php $__currentLoopData = $accessories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accessory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($accessory): ?>
                <tr>
                    <td><?php echo e($acounter); ?></td>
                    <td><?php echo e(($accessory->manufacturer) ? $accessory->manufacturer->name : ''); ?> <?php echo e($accessory->name); ?> <?php echo e($accessory->model_number); ?></td>
                    <td><?php echo e($accessory->category->name); ?></td>
                    <td><?php echo e($accessory->assetlog->first()->created_at); ?></td>
                </tr>
                <?php
                    $acounter++
                ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php endif; ?>

<?php if($consumables->count() > 0): ?>
    <br><br>
    <table class="inventory">
        <thead>
        <tr>
            <th colspan="4"><?php echo e(trans('general.consumables')); ?></th>
        </tr>
        </thead>
        <thead>
        <tr>
            <th style="width: 20px;"></th>
            <th style="width: 40%;">Name</th>
            <th style="width: 50%;">Category</th>
            <th style="width: 10%;">Checked Out</th>
        </tr>
        </thead>
        <?php
            $ccounter = 1;
        ?>

        <?php $__currentLoopData = $consumables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consumable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($consumable): ?>
                <tr>
                    <td><?php echo e($ccounter); ?></td>


                <td>
                    <?php if($consumable->deleted_at!=''): ?>
                    <td><?php echo e(($consumable->manufacturer) ? $consumable->manufacturer->name : ''); ?>  <?php echo e($consumable->name); ?> <?php echo e($consumable->model_number); ?></td>
                    <?php else: ?>
                        <?php echo e(($consumable->manufacturer) ? $consumable->manufacturer->name : ''); ?>  <?php echo e($consumable->name); ?> <?php echo e($consumable->model_number); ?>

                    <?php endif; ?>
                </td>
                    <td><?php echo e($consumable->category->name); ?></td>
                    <td><?php echo e($consumable->assetlog->first()->created_at); ?></td>
                </tr>
                <?php
                    $ccounter++
                ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php endif; ?>

<br>
<br>
<br>
<table>
    <tr>
        <td>Signed Off By:</td>
        <td>________________________________________________________</td>
        <td></td>
        <td>Date:</td>
        <td>________________________________________________________</td>
    </tr>
</table>


</body>
</html>
<?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/users/print.blade.php ENDPATH**/ ?>