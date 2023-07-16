<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Assigned to <?php echo e($location->present()->fullName()); ?> Location</title>
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

        <h3>
        <?php if($snipeSettings->logo!=''): ?>
            <img class="print-logo" src="<?php echo e(url('/')); ?>/uploads/<?php echo e($snipeSettings->logo); ?>">
        <?php endif; ?>
        <?php echo e($snipeSettings->site_name); ?>

        </h3>
    <?php elseif($snipeSettings->brand == '2'): ?>
        <?php if($snipeSettings->logo!=''): ?>
            <img class="print-logo" src="<?php echo e(url('/')); ?>/uploads/<?php echo e($snipeSettings->logo); ?>">
        <?php endif; ?>
    <?php else: ?>
      <h3><?php echo e($snipeSettings->site_name); ?></h3>
    <?php endif; ?>
<?php endif; ?>

<h2>Asset Management System</h2>
<b>Assigned To:</b> <?php echo e($location->present()->fullName()); ?>

    <?php if($parent): ?>
        <?php echo e($parent->present()->fullName()); ?>

    <?php endif; ?>
<br>
<?php if($manager): ?>
    <b>Manager:</b> <?php echo e($manager->present()->fullName()); ?><br>
<?php endif; ?>
<b>Current Date:</b> <?php echo e(date("d/m/Y h:i:s A")); ?><br><br>

<?php if($users->count() > 0): ?>
    <?php
        $counter = 1;
    ?>
    <table class="inventory">
        <thead>
        <tr>
            <th colspan="6"><?php echo e(trans('general.users')); ?></th>
        </tr>
        </thead>
        <thead>
            <tr>
            <th style="width: 5px;"></th>
            <th style="width: 25%;">Company</th>
            <th style="width: 25%;">User Name</th>
            <th style="width: 10%;">Employee No.</th>
	        <th style="width: 20%;">Department</th>
		    <th style="width: 20%;">Location</th>
            </tr>
        </thead>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
        <td><?php echo e($counter); ?></td>
        <td><?php echo e((($user) && ($user->company)) ? $user->company->name : ''); ?></td>
        <td><?php echo e(($user)  ? $user->first_name .' '. $user->last_name : ''); ?></td>
        <td><?php echo e(($user)  ? $user->employee_num : ''); ?></td>
        <td><?php echo e((($user) && ($user->department)) ? $user->department->name : ''); ?></td>
        <td><?php echo e((($user) && ($user->location)) ? $user->location->name : ''); ?></td>
        </tr>
            <?php
                $counter++
            ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php endif; ?>



<?php if($assets->count() > 0): ?>
    <br><br>
    <table class="inventory">
        <thead>
        <tr>
            <th colspan="10"><?php echo e(trans('general.assets')); ?></th>
        </tr>
        </thead>
        <thead>
            <tr>
            <th style="width: 20px;"></th>
            <th style="width: 10%;">Asset Tag</th>
            <th style="width: 10%;">Name</th>
            <th style="width: 10%;">Category</th>
	    <th style="width: 10%;">Manufacturer</th>
            <th style="width: 15%;">Model</th>
            <th style="width: 15%;">Serial</th>
            <th style="width: 10%;">Location</th>
            <th style="width: 10%;">Checked Out</th>
            <th style="width: 10%;">Expected Checkin</th>
            </tr>
        </thead>
		<?php
        	$counter = 1;
    	?>
    	
    	<?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
        <td><?php echo e($counter); ?></td>
        <td><?php echo e($asset->asset_tag); ?></td>
        <td><?php echo e($asset->name); ?></td>
        <td><?php echo e((($asset->model) && ($asset->model->category)) ? $asset->model->category->name : ''); ?></td>
        <td><?php echo e((($asset->model) && ($asset->model->manufacturer)) ? $asset->model->manufacturer->name : ''); ?></td>
        <td><?php echo e(($asset->model) ? $asset->model->name : ''); ?></td>
        <td><?php echo e($asset->serial); ?></td>
        <td><?php echo e($asset->location->name); ?></td>
        <td><?php echo e($asset->last_checkout); ?></td>
        <td><?php echo e($asset->expected_checkin); ?></td>
        </tr>
            <?php
                $counter++
            ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php endif; ?>

<br>
<br>
<br>
<table>
    <tr>
        <td>Signed By (Asset Auditor):</td>
        <td>___________________________</td>
        <td></td>
        <td>Date:</td>
        <td>____________________</td>
    </tr>
</table>
<br>
<br>
<br>
<table>
    <tr>
        <td>Signed By (Finance Asset Auditor):</td>
        <td>____________________</td>
        <td></td>
        <td>Date:</td>
        <td>____________________</td>
    </tr>
</table>
<br>
<br>
<br>
<table>
    <tr>
        <td>Signed By (Location Manager):</td>
        <td>_______________________</td>
        <td></td>
        <td>Date:</td>
        <td>____________________</td>
    </tr>
</table>


</body>
</html>
<?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/locations/print.blade.php ENDPATH**/ ?>