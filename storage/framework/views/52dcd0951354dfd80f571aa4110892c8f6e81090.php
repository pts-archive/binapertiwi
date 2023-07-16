<?php $__env->startSection('title'); ?>
    <?php echo e(trans('admin/hardware/general.view')); ?> <?php echo e($asset->asset_tag); ?>

    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_right'); ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage', \App\Models\Asset::class)): ?>
        <div class="dropdown pull-right">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php echo e(trans('button.actions')); ?>

                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <?php if(($asset->assetstatus) && ($asset->assetstatus->deployable=='1')): ?>
                    <?php if($asset->assigned_to != ''): ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('checkin', \App\Models\Asset::class)): ?>
                            <li role="menuitem">
                                <a href="<?php echo e(route('checkin/hardware', $asset->id)); ?>">
                                    <?php echo e(trans('admin/hardware/general.checkin')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('checkout', \App\Models\Asset::class)): ?>
                            <li role="menuitem">
                                <a href="<?php echo e(route('checkout/hardware', $asset->id)); ?>">
                                    <?php echo e(trans('admin/hardware/general.checkout')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', \App\Models\Asset::class)): ?>
                    <li role="menuitem">
                        <a href="<?php echo e(route('hardware.edit', $asset->id)); ?>">
                            <?php echo e(trans('admin/hardware/general.edit')); ?>

                        </a>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', \App\Models\Asset::class)): ?>
                    <li role="menuitem">
                        <a href="<?php echo e(route('clone/hardware', $asset->id)); ?>">
                            <?php echo e(trans('admin/hardware/general.clone')); ?>

                        </a>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('audit', \App\Models\Asset::class)): ?>
                    <li role="menuitem">
                        <a href="<?php echo e(route('asset.audit.create', $asset->id)); ?>">
                            <?php echo e(trans('general.audit')); ?>

                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="row">

        <?php if(!$asset->model): ?>
            <div class="col-md-12">
                <div class="callout callout-danger">
                    <h2>NO MODEL ASSOCIATED</h2>
                        <p>This will break things in weird and horrible ways. Edit this asset now to assign it a model. </p>
                </div>
            </div>
        <?php endif; ?>

        <?php if($asset->deleted_at!=''): ?>
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <i class="fa fa-exclamation-circle faa-pulse animated" aria-hidden="true"></i>
                    <strong>WARNING: </strong>
                    This asset has been deleted.
                    You must <a href="<?php echo e(route('restore/hardware', $asset->id)); ?>">restore it</a> before you can assign it to someone.
                </div>
            </div>
        <?php endif; ?>

        <div class="col-md-12">




            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#details" data-toggle="tab">
            <span class="hidden-lg hidden-md">
              <i class="fa fa-info-circle" aria-hidden="true"></i>
            </span>
                            <span class="hidden-xs hidden-sm">
              <?php echo e(trans('general.details')); ?>

            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#software" data-toggle="tab">
            <span class="hidden-lg hidden-md">
              <i class="fa fa-floppy-o" aria-hidden="true"></i>
            </span>
                            <span class="hidden-xs hidden-sm">
              <?php echo e(trans('general.licenses')); ?>

            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#components" data-toggle="tab">
            <span class="hidden-lg hidden-md">
              <i class="fa fa-hdd-o" aria-hidden="true"></i>
            </span>
                            <span class="hidden-xs hidden-sm">
              <?php echo e(trans('general.components')); ?>

            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#assets" data-toggle="tab">
            <span class="hidden-lg hidden-md">
              <i class="fa fa-barcode" aria-hidden="true"></i>
            </span>
                            <span class="hidden-xs hidden-sm">
              <?php echo e(trans('general.assets')); ?>

            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#maintenances" data-toggle="tab">
            <span class="hidden-lg hidden-md">
              <i class="fa fa-wrench" aria-hidden="true"></i>
            </span>
                            <span class="hidden-xs hidden-sm">
              <?php echo e(trans('general.maintenances')); ?>

            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#history" data-toggle="tab">
            <span class="hidden-lg hidden-md">
              <i class="fa fa-history" aria-hidden="true"></i>
            </span>
                            <span class="hidden-xs hidden-sm">
              <?php echo e(trans('general.history')); ?>

            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#files" data-toggle="tab">
            <span class="hidden-lg hidden-md">
              <i class="fa fa-files-o" aria-hidden="true"></i>
            </span>
                            <span class="hidden-xs hidden-sm">
              <?php echo e(trans('general.files')); ?>

            </span>
                        </a>
                    </li>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', \App\Models\Asset::class)): ?>
                        <li class="pull-right">
                            <a href="#" data-toggle="modal" data-target="#uploadFileModal">
                                <i class="fa fa-paperclip" aria-hidden="true"></i>
                                <?php echo e(trans('button.upload')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="details">
                        <div class="row">
                            <div class="col-md-8">


                                <!-- start striped rows -->
                                <div class="container row-striped">

                                    <?php if($asset->assetstatus): ?>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong><?php echo e(trans('general.status')); ?></strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php if(($asset->assignedTo) && ($asset->deleted_at=='')): ?>
                                                    <i class="fa fa-circle text-blue"></i>
                                                    <?php echo e($asset->assetstatus->name); ?>

                                                    <label class="label label-default"><?php echo e(trans('general.deployed')); ?></label>

                                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                                    <?php echo $asset->assignedTo->present()->glyph(); ?>

                                                    <?php echo $asset->assignedTo->present()->nameUrl(); ?>

                                                <?php else: ?>
                                                    <?php if(($asset->assetstatus) && ($asset->assetstatus->deployable=='1')): ?>
                                                        <i class="fa fa-circle text-green"></i>
                                                    <?php elseif(($asset->assetstatus) && ($asset->assetstatus->pending=='1')): ?>
                                                        <i class="fa fa-circle text-orange"></i>
                                                    <?php elseif(($asset->assetstatus) && ($asset->assetstatus->archived=='1')): ?>
                                                        <i class="fa fa-times text-red"></i>
                                                    <?php endif; ?>
                                                    <a href="<?php echo e(route('statuslabels.show', $asset->assetstatus->id)); ?>">
                                                        <?php echo e($asset->assetstatus->name); ?></a>
                                                    <label class="label label-default"><?php echo e($asset->present()->statusMeta); ?></label>

                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($asset->company): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong><?php echo e(trans('general.company')); ?></strong>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="<?php echo e(url('/companies/' . $asset->company->id)); ?>"><?php echo e($asset->company->name); ?></a>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($asset->name): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong><?php echo e(trans('admin/hardware/form.name')); ?></strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo e($asset->name); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($asset->serial): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong><?php echo e(trans('admin/hardware/form.serial')); ?></strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo e($asset->serial); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>


                                    <?php if((isset($audit_log)) && ($audit_log->created_at)): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('general.last_audit')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo e(\App\Helpers\Helper::getFormattedDateObject($audit_log->created_at, 'date', false)); ?> (by <?php echo e(link_to_route('users.show', $audit_log->user->present()->fullname(), [$audit_log->user->id])); ?>)
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($asset->next_audit_date): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('general.next_audit_date')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo e(\App\Helpers\Helper::getFormattedDateObject($asset->next_audit_date, 'date', false)); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(($asset->model) && ($asset->model->manufacturer)): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('admin/hardware/form.manufacturer')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="list-unstyled" style="line-height: 25px;">
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', \App\Models\Manufacturer::class)): ?>

                                                        <li>
                                                            <a href="<?php echo e(route('manufacturers.show', $asset->model->manufacturer->id)); ?>">
                                                                <?php echo e($asset->model->manufacturer->name); ?>

                                                            </a>
                                                        </li>

                                                    <?php else: ?>
                                                        <li> <?php echo e($asset->model->manufacturer->name); ?></li>
                                                    <?php endif; ?>

                                                    <?php if(($asset->model) && ($asset->model->manufacturer->url)): ?>
                                                        <li>
                                                            <i class="fa fa-globe" aria-hidden="true"></i>
                                                            <a href="<?php echo e($asset->model->manufacturer->url); ?>">
                                                                <?php echo e($asset->model->manufacturer->url); ?>

                                                            </a>
                                                        </li>
                                                    <?php endif; ?>

                                                    <?php if(($asset->model) && ($asset->model->manufacturer->support_url)): ?>
                                                        <li>
                                                            <i class="fa fa-life-ring" aria-hidden="true"></i>
                                                            <a href="<?php echo e($asset->model->manufacturer->support_url); ?>">
                                                                <?php echo e($asset->model->manufacturer->support_url); ?>

                                                            </a>
                                                        </li>
                                                    <?php endif; ?>

                                                    <?php if(($asset->model) && ($asset->model->manufacturer->support_phone)): ?>
                                                        <li>
                                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                                            <a href="tel:<?php echo e($asset->model->manufacturer->support_phone); ?>">
                                                                <?php echo e($asset->model->manufacturer->support_phone); ?>

                                                            </a>
                                                        </li>
                                                    <?php endif; ?>

                                                    <?php if(($asset->model) && ($asset->model->manufacturer->support_email)): ?>
                                                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                                            <a href="mailto:<?php echo e($asset->model->manufacturer->support_email); ?>">
                                                                <?php echo e($asset->model->manufacturer->support_email); ?>

                                                            </a>
                                                        </li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>
                                                <?php echo e(trans('general.category')); ?>

                                            </strong>
                                        </div>
                                        <div class="col-md-6">
                                            <?php if(($asset->model) && ($asset->model->category)): ?>

                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', \App\Models\Category::class)): ?>

                                                    <a href="<?php echo e(route('categories.show', $asset->model->category->id)); ?>">
                                                        <?php echo e($asset->model->category->name); ?>

                                                    </a>
                                                <?php else: ?>
                                                    <?php echo e($asset->model->category->name); ?>

                                                <?php endif; ?>
                                            <?php else: ?>
                                                Invalid category
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <?php if($asset->model): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('admin/hardware/form.model')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php if($asset->model): ?>

                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', \App\Models\AssetModel::class)): ?>
                                                        <a href="<?php echo e(route('models.show', $asset->model->id)); ?>">
                                                            <?php echo e($asset->model->name); ?>

                                                        </a>
                                                    <?php else: ?>
                                                        <?php echo e($asset->model->name); ?>

                                                    <?php endif; ?>

                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>
                                                <?php echo e(trans('admin/models/table.modelnumber')); ?>

                                            </strong>
                                        </div>
                                        <div class="col-md-6">
                                            <?php echo e(($asset->model) ? $asset->model->model_number : ''); ?>

                                        </div>
                                    </div>

                                    <?php if(($asset->model) && ($asset->model->fieldset)): ?>
                                        <?php $__currentLoopData = $asset->model->fieldset->fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <strong>
                                                        <?php echo e($field->name); ?>

                                                    </strong>
                                                </div>
                                                <div class="col-md-6">
                                                    <?php if($field->field_encrypted=='1'): ?>
                                                        <i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('admin/custom_fields/general.value_encrypted')); ?>"></i>
                                                    <?php endif; ?>

                                                    <?php if($field->isFieldDecryptable($asset->{$field->db_column_name()} )): ?>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('superuser')): ?>
                                                            <?php if(($field->format=='URL') && ($asset->{$field->db_column_name()}!='')): ?>
                                                                <a href="<?php echo e(\App\Helpers\Helper::gracefulDecrypt($field, $asset->{$field->db_column_name()})); ?>" target="_new"><?php echo e(\App\Helpers\Helper::gracefulDecrypt($field, $asset->{$field->db_column_name()})); ?></a>
                                                            <?php else: ?>
                                                                <?php echo e(\App\Helpers\Helper::gracefulDecrypt($field, $asset->{$field->db_column_name()})); ?>

                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <?php echo e(strtoupper(trans('admin/custom_fields/general.encrypted'))); ?>

                                                        <?php endif; ?>

                                                    <?php else: ?>
                                                        <?php if(($field->format=='URL') && ($asset->{$field->db_column_name()}!='')): ?>
                                                            <a href="<?php echo e($asset->{$field->db_column_name()}); ?>" target="_new"><?php echo e($asset->{$field->db_column_name()}); ?></a>
                                                        <?php else: ?>
                                                            <?php echo nl2br(e($asset->{$field->db_column_name()})); ?>

                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>


                                    <?php if($asset->purchase_date): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('admin/hardware/form.date')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo e(\App\Helpers\Helper::getFormattedDateObject($asset->purchase_date, 'date', false)); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($asset->purchase_cost): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('admin/hardware/form.cost')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php if(($asset->id) && ($asset->location)): ?>
                                                    <?php echo e($asset->location->currency); ?>

                                                <?php elseif(($asset->id) && ($asset->location)): ?>
                                                    <?php echo e($asset->location->currency); ?>

                                                <?php else: ?>
                                                    <?php echo e($snipeSettings->default_currency); ?>

                                                <?php endif; ?>
                                                <?php echo e(\App\Helpers\Helper::formatCurrencyOutput($asset->purchase_cost)); ?>


                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($asset->order_number): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('general.order_number')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                #<?php echo e($asset->order_number); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($asset->supplier): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('general.supplier')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('superuser')): ?>
                                                    <a href="<?php echo e(route('suppliers.show', $asset->supplier_id)); ?>">
                                                        <?php echo e($asset->supplier->name); ?>

                                                    </a>
                                                <?php else: ?>
                                                    <?php echo e($asset->supplier->name); ?>

                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>


                                    <?php if($asset->warranty_months): ?>
                                        <div class="row<?php echo $asset->present()->warrantee_expires() < date("Y-m-d") ? ' warning' : ''; ?>">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('admin/hardware/form.warranty')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo e($asset->warranty_months); ?>

                                                <?php echo e(trans('admin/hardware/form.months')); ?>


                                                (<?php echo e(trans('admin/hardware/form.expires')); ?>

                                                <?php echo e($asset->present()->warrantee_expires()); ?>)
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(($asset->model) && ($asset->depreciation)): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('general.depreciation')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo e($asset->depreciation->name); ?>

                                                (<?php echo e($asset->depreciation->months); ?>

                                                <?php echo e(trans('admin/hardware/form.months')); ?>

                                                )
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('admin/hardware/form.fully_depreciated')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php if($asset->time_until_depreciated()->y > 0): ?>
                                                    <?php echo e($asset->time_until_depreciated()->y); ?>

                                                    <?php echo e(trans('admin/hardware/form.years')); ?>,
                                                <?php endif; ?>
                                                <?php echo e($asset->time_until_depreciated()->m); ?>

                                                <?php echo e(trans('admin/hardware/form.months')); ?>

                                                (<?php echo e($asset->depreciated_date()->format('Y-m-d')); ?>)
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(($asset->model) && ($asset->model->eol)): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('admin/hardware/form.eol_rate')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo e($asset->model->eol); ?>

                                                <?php echo e(trans('admin/hardware/form.months')); ?>


                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('admin/hardware/form.eol_date')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo e($asset->present()->eol_date()); ?>



                                                <?php if($asset->present()->months_until_eol()): ?>
                                                    -
                                                    <?php if($asset->present()->months_until_eol()->y > 0): ?>
                                                        <?php echo e($asset->present()->months_until_eol()->y); ?>

                                                        <?php echo e(trans('general.years')); ?>,
                                                    <?php endif; ?>

                                                    <?php echo e($asset->present()->months_until_eol()->m); ?>

                                                    <?php echo e(trans('general.months')); ?>


                                                <?php endif; ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($asset->expected_checkin!=''): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('admin/hardware/form.expected_checkin')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo e(\App\Helpers\Helper::getFormattedDateObject($asset->expected_checkin, 'date', false)); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>
                                                <?php echo e(trans('admin/hardware/form.notes')); ?>

                                            </strong>
                                        </div>
                                        <div class="col-md-6">
                                            <?php echo nl2br(e($asset->notes)); ?>

                                        </div>
                                    </div>

                                    <?php if($asset->location): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('general.location')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('superuser')): ?>
                                                    <a href="<?php echo e(route('locations.show', ['location' => $asset->location->id])); ?>">
                                                        <?php echo e($asset->location->name); ?>

                                                    </a>
                                                <?php else: ?>
                                                    <?php echo e($asset->location->name); ?>

                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($asset->defaultLoc): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('admin/hardware/form.default_location')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('superuser')): ?>
                                                    <a href="<?php echo e(route('locations.show', ['location' => $asset->defaultLoc->id])); ?>">
                                                        <?php echo e($asset->defaultLoc->name); ?>

                                                    </a>
                                                <?php else: ?>
                                                    <?php echo e($asset->defaultLoc->name); ?>

                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($asset->created_at!=''): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('general.created_at')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo e(\App\Helpers\Helper::getFormattedDateObject($asset->created_at, 'datetime', false)); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($asset->updated_at!=''): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('general.updated_at')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo e(\App\Helpers\Helper::getFormattedDateObject($asset->updated_at, 'datetime', false)); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                     <?php if($asset->last_checkout!=''): ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    <?php echo e(trans('admin/hardware/table.checkout_date')); ?>

                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo e(\App\Helpers\Helper::getFormattedDateObject($asset->last_checkout, 'datetime', false)); ?>

                                            </div>
                                        </div>
                                     <?php endif; ?>



                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>
                                                <?php echo e(trans('general.checkouts_count')); ?>

                                            </strong>
                                        </div>
                                        <div class="col-md-6">
                                            <?php echo e(($asset->checkouts) ? (int) $asset->checkouts->count() : '0'); ?>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>
                                                <?php echo e(trans('general.checkins_count')); ?>

                                            </strong>
                                        </div>
                                        <div class="col-md-6">
                                            <?php echo e(($asset->checkins) ? (int) $asset->checkins->count() : '0'); ?>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>
                                                <?php echo e(trans('general.user_requests_count')); ?>

                                            </strong>
                                        </div>
                                        <div class="col-md-6">
                                            <?php echo e(($asset->userRequests) ? (int) $asset->userRequests->count() : '0'); ?>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>
                                               Labels
                                            </strong>
                                        </div>
                                        <div class="col-md-6">
                                            <?php echo e(Form::open([
                                                      'method' => 'POST',
                                                      'route' => ['hardware/bulkedit'],
                                                      'class' => 'form-inline',
                                                       'id' => 'bulkForm'])); ?>

                                                <input type="hidden" name="bulk_actions" value="labels" />
                                                <input type="hidden" name="ids[<?php echo e($asset->id); ?>]" value="<?php echo e($asset->id); ?>" />
                                                <button class="btn btn-sm btn-default" id="bulkEdit" ><i class="fa fa-barcode" aria-hidden="true"></i> <?php echo e(trans_choice('button.generate_labels', 1)); ?></button>

                                            <?php echo e(Form::close()); ?>


                                        </div>
                                    </div>
                                </div> <!-- end row-striped -->

                            </div><!-- /col-md-8 -->

                            <div class="col-md-4">

                                <?php if(($asset->image) || (($asset->model) && ($asset->model->image!=''))): ?>


                                    <div class="col-md-12 text-center" style="padding-bottom: 15px;">
                                        <a href="<?php echo e(($asset->getImageUrl()) ? $asset->getImageUrl() : null); ?>" data-toggle="lightbox">
                                            <img src="<?php echo e(($asset->getImageUrl()) ? $asset->getImageUrl() : null); ?>" class="assetimg img-responsive" alt="<?php echo e($asset->getDisplayNameAttribute()); ?>">
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <?php if($snipeSettings->qr_code=='1'): ?>
                                    <img src="<?php echo e(config('app.url')); ?>/hardware/<?php echo e($asset->id); ?>/qr_code" class="img-thumbnail pull-right" style="height: 100px; width: 100px; margin-right: 10px;" alt="QR code for <?php echo e($asset->getDisplayNameAttribute()); ?>">
                                <?php endif; ?>

                                <?php if(($asset->assignedTo) && ($asset->deleted_at=='')): ?>
                                    <h2><?php echo e(trans('admin/hardware/form.checkedout_to')); ?></h2>
                                        <p>
                                        <?php if($asset->checkedOutToUser()): ?> <!-- Only users have avatars currently-->
                                            <img src="<?php echo e($asset->assignedTo->present()->gravatar()); ?>" class="user-image-inline" alt="<?php echo e($asset->assignedTo->present()->fullName()); ?>">
                                            <?php endif; ?>
                                            <?php echo $asset->assignedTo->present()->glyph() . ' ' .$asset->assignedTo->present()->nameUrl(); ?>

                                        </p>

                                        <ul class="list-unstyled" style="line-height: 25px;">
                                            <?php if((isset($asset->assignedTo->email)) && ($asset->assignedTo->email!='')): ?>
                                                <li>
                                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                    <a href="mailto:<?php echo e($asset->assignedTo->email); ?>"><?php echo e($asset->assignedTo->email); ?></a>
                                                </li>
                                            <?php endif; ?>

                                            <?php if((isset($asset->assignedTo)) && ($asset->assignedTo->phone!='')): ?>
                                                <li>
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                    <a href="tel:<?php echo e($asset->assignedTo->phone); ?>"><?php echo e($asset->assignedTo->phone); ?></a>
                                                </li>
                                            <?php endif; ?>

                                            <?php if(isset($asset->location)): ?>
                                                <li><?php echo e($asset->location->name); ?></li>
                                                <li><?php echo e($asset->location->address); ?>

                                                    <?php if($asset->location->address2!=''): ?>
                                                        <?php echo e($asset->location->address2); ?>

                                                    <?php endif; ?>
                                                </li>

                                                <li><?php echo e($asset->location->city); ?>

                                                    <?php if(($asset->location->city!='') && ($asset->location->state!='')): ?>
                                                        ,
                                                    <?php endif; ?>
                                                    <?php echo e($asset->location->state); ?> <?php echo e($asset->location->zip); ?>

                                                </li>
                                            <?php endif; ?>
                                        </ul>

                                <?php endif; ?>
                            </div> <!-- div.col-md-4 -->
                        </div><!-- /row -->
                    </div><!-- /.tab-pane asset details -->

                    <div class="tab-pane fade" id="software">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Licenses assets table -->
                                <?php if($asset->licenses->count() > 0): ?>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="col-md-4"><?php echo e(trans('general.name')); ?></th>
                                            <th class="col-md-4"><span class="line"></span><?php echo e(trans('admin/licenses/form.license_key')); ?></th>
                                            <th class="col-md-1"><span class="line"></span><?php echo e(trans('table.actions')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $asset->licenseseats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($seat->license): ?>
                                                <tr>
                                                    <td><a href="<?php echo e(route('licenses.show', $seat->license->id)); ?>"><?php echo e($seat->license->name); ?></a></td>
                                                    <td>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewKeys', $seat->license)): ?>
                                                            <?php echo nl2br(e($seat->license->serial)); ?>

                                                        <?php else: ?>
                                                            ------------
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo e(route('licenses.checkin', $seat->id)); ?>" class="btn btn-sm bg-purple" data-tooltip="true"><?php echo e(trans('general.checkin')); ?></a>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                <?php else: ?>

                                    <div class="alert alert-info alert-block">
                                        <i class="fa fa-info-circle"></i>
                                        <?php echo e(trans('general.no_results')); ?>

                                    </div>
                                <?php endif; ?>
                            </div><!-- /col -->
                        </div> <!-- row -->
                    </div> <!-- /.tab-pane software -->

                    <div class="tab-pane fade" id="components">
                        <!-- checked out assets table -->
                        <div class="row">
                            <div class="col-md-12">
                                <?php if($asset->components->count() > 0): ?>
                                    <table class="table table-striped">
                                        <thead>
                                        <th><?php echo e(trans('general.name')); ?></th>
                                        <th><?php echo e(trans('general.qty')); ?></th>
                                        <th><?php echo e(trans('general.purchase_cost')); ?></th>
                                        </thead>
                                        <tbody>
                                        <?php $totalCost = 0; ?>
                                        <?php $__currentLoopData = $asset->components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                            <?php if(is_null($component->deleted_at)): ?>
                                                <tr>
                                                    <td>
                                                        <a href="<?php echo e(route('components.show', $component->id)); ?>"><?php echo e($component->name); ?></a>
                                                    </td>
                                                    <td><?php echo e($component->pivot->assigned_qty); ?></td>
                                                    <td><?php echo e($component->purchase_cost); ?> each</td>
                                                    <?php $totalCost = $totalCost + ($component->purchase_cost *$component->pivot->assigned_qty) ?>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>

                                        <tfoot>
                                        <tr>
                                            <td colspan="2">
                                            </td>
                                            <td><?php echo e($totalCost); ?></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                <?php else: ?>
                                    <div class="alert alert-info alert-block">
                                        <i class="fa fa-info-circle"></i>
                                        <?php echo e(trans('general.no_results')); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div> <!-- /.tab-pane components -->


                    <div class="tab-pane fade" id="assets">
                        <div class="row">
                            <div class="col-md-12">

                                <?php if($asset->assignedAssets->count() > 0): ?>


                                    <?php echo e(Form::open([
                                              'method' => 'POST',
                                              'route' => ['hardware/bulkedit'],
                                              'class' => 'form-inline',
                                               'id' => 'bulkForm'])); ?>

                                    <div id="toolbar">
                                        <label for="bulk_actions"><span class="sr-only">Bulk Actions</span></label>
                                        <select name="bulk_actions" class="form-control select2" style="width: 150px;" aria-label="bulk_actions">
                                            <option value="edit">Edit</option>
                                            <option value="delete">Delete</option>
                                            <option value="labels">Generate Labels</option>
                                        </select>
                                        <button class="btn btn-primary" id="bulkEdit" disabled>Go</button>
                                    </div>

                                    <!-- checked out assets table -->
                                    <div class="table-responsive">

                                        <table
                                                data-columns="<?php echo e(\App\Presenters\AssetPresenter::dataTableLayout()); ?>"
                                                data-cookie-id-table="assetsTable"
                                                data-pagination="true"
                                                data-id-table="assetsTable"
                                                data-search="true"
                                                data-side-pagination="server"
                                                data-show-columns="true"
                                                data-show-export="true"
                                                data-show-refresh="true"
                                                data-sort-order="asc"
                                                id="assetsListingTable"
                                                class="table table-striped snipe-table"
                                                data-url="<?php echo e(route('api.assets.index',['assigned_to' => $asset->id, 'assigned_type' => 'App\Models\Asset'])); ?>"
                                                data-export-options='{
                              "fileName": "export-assets-<?php echo e(str_slug($asset->name)); ?>-assets-<?php echo e(date('Y-m-d')); ?>",
                              "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                              }'>

                                        </table>


                                        <?php echo e(Form::close()); ?>

                                    </div>

                                <?php else: ?>

                                    <div class="alert alert-info alert-block">
                                        <i class="fa fa-info-circle"></i>
                                        <?php echo e(trans('general.no_results')); ?>

                                    </div>
                                <?php endif; ?>


                            </div><!-- /col -->
                        </div> <!-- row -->
                    </div> <!-- /.tab-pane software -->


                    <div class="tab-pane fade" id="maintenances">
                        <div class="row">
                            <div class="col-md-12">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', \App\Models\Asset::class)): ?>
                                    <div id="maintenance-toolbar">
                                        <a href="<?php echo e(route('maintenances.create', ['asset_id' => $asset->id])); ?>" class="btn btn-primary">Add Maintenance</a>
                                    </div>
                            <?php endif; ?>

                            <!-- Asset Maintenance table -->
                                <table
                                        data-columns="<?php echo e(\App\Presenters\AssetMaintenancesPresenter::dataTableLayout()); ?>"
                                        class="table table-striped snipe-table"
                                        id="assetMaintenancesTable"
                                        data-pagination="true"
                                        data-id-table="assetMaintenancesTable"
                                        data-search="true"
                                        data-side-pagination="server"
                                        data-toolbar="#maintenance-toolbar"
                                        data-show-columns="true"
                                        data-show-refresh="true"
                                        data-show-export="true"
                                        data-export-options='{
                           "fileName": "export-<?php echo e($asset->asset_tag); ?>-maintenances",
                           "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                         }'
                                        data-url="<?php echo e(route('api.maintenances.index', array('asset_id' => $asset->id))); ?>"
                                        data-cookie-id-table="assetMaintenancesTable">
                                </table>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.tab-pane maintenances -->

                    <div class="tab-pane fade" id="history">
                        <!-- checked out assets table -->
                        <div class="row">
                            <div class="col-md-12">
                                <table
                                        class="table table-striped snipe-table"
                                        id="assetHistory"
                                        data-pagination="true"
                                        data-id-table="assetHistory"
                                        data-search="true"
                                        data-side-pagination="server"
                                        data-show-columns="true"
                                        data-show-refresh="true"
                                        data-sort-order="desc"
                                        data-sort-name="created_at"
                                        data-show-export="true"
                                        data-export-options='{
                         "fileName": "export-asset-<?php echo e($asset->id); ?>-history",
                         "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                       }'

                      data-url="<?php echo e(route('api.activity.index', ['item_id' => $asset->id, 'item_type' => 'asset'])); ?>"
                      data-cookie-id-table="assetHistory">
                <thead>
                <tr>
                  <th data-visible="true" style="width: 40px;" class="hidden-xs">Icon</th>
                  <th class="col-sm-2" data-visible="true" data-field="created_at" data-formatter="dateDisplayFormatter"><?php echo e(trans('general.date')); ?></th>
                  <th class="col-sm-1" data-visible="true" data-field="admin" data-formatter="usersLinkObjFormatter"><?php echo e(trans('general.admin')); ?></th>
                  <th class="col-sm-1" data-visible="true" data-field="action_type"><?php echo e(trans('general.action')); ?></th>
                  <th class="col-sm-2" data-visible="true" data-field="item" data-formatter="polymorphicItemFormatter"><?php echo e(trans('general.item')); ?></th>
                  <th class="col-sm-2" data-visible="true" data-field="target" data-formatter="polymorphicItemFormatter"><?php echo e(trans('general.target')); ?></th>
                  <th class="col-sm-2" data-field="note"><?php echo e(trans('general.notes')); ?></th>
                  <?php if($snipeSettings->require_accept_signature=='1'): ?>
                    <th class="col-md-3" data-field="signature_file" data-visible="false"  data-formatter="imageFormatter"><?php echo e(trans('general.signature')); ?></th>
                  <?php endif; ?>
                  <th class="col-md-3" data-visible="false" data-field="file" data-visible="false"  data-formatter="fileUploadFormatter"><?php echo e(trans('general.download')); ?></th>
                  <th class="col-sm-2" data-field="log_meta" data-visible="true" data-formatter="changeLogFormatter">Changed</th>
                </tr>
                </thead>
              </table>

            </div>
          </div> <!-- /.row -->
        </div> <!-- /.tab-pane history -->

        <div class="tab-pane fade" id="files">
          <div class="row">
            <div class="col-md-12">

              <?php if($asset->uploads->count() > 0): ?>
              <table
                      class="table table-striped snipe-table"
                      id="assetFileHistory"
                      data-pagination="true"
                      data-id-table="assetFileHistory"
                      data-search="true"
                      data-side-pagination="client"
                      data-show-columns="true"
                      data-show-refresh="true"
                      data-sort-order="desc"
                      data-sort-name="created_at"
                      data-show-export="true"
                      data-export-options='{
                         "fileName": "export-asset-<?php echo e($asset->id); ?>-files",
                         "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                       }'
                                            data-cookie-id-table="assetFileHistory">
                                        <thead>
                                        <tr>
                                            <th data-visible="true" data-field="icon"><?php echo e(trans('general.file_type')); ?></th>
                                            <th class="col-md-2" data-searchable="true" data-visible="true" data-field="notes"><?php echo e(trans('general.notes')); ?></th>
                                            <th class="col-md-2" data-searchable="true" data-visible="true" data-field="image"><?php echo e(trans('general.image')); ?></th>
                                            <th class="col-md-2" data-searchable="true" data-visible="true" data-field="filename"><?php echo e(trans('general.file_name')); ?></th>
                                            <th class="col-md-2" data-searchable="true" data-visible="true" data-field="download"><?php echo e(trans('general.download')); ?></th>
                                            <th class="col-md-2" data-searchable="true" data-visible="true" data-field="created_at"><?php echo e(trans('general.created_at')); ?></th>
                                            <th class="col-md-1" data-searchable="true" data-visible="true" data-field="actions"><?php echo e(trans('table.actions')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php $__currentLoopData = $asset->uploads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><i class="<?php echo e(\App\Helpers\Helper::filetype_icon($file->filename)); ?> icon-med" aria-hidden="true"></i></td>
                                                <td>
                                                    <?php if($file->note): ?>
                                                        <?php echo e($file->note); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if( \App\Helpers\Helper::checkUploadIsImage($file->get_src('assets'))): ?>
                                                        <a href="<?php echo e(route('show/assetfile', ['assetId' => $asset->id, 'fileId' =>$file->id])); ?>" data-toggle="lightbox" data-type="image" data-title="<?php echo e($file->filename); ?>" data-footer="<?php echo e(\App\Helpers\Helper::getFormattedDateObject($asset->last_checkout, 'datetime', false)); ?>">
                                                            <img src="<?php echo e(route('show/assetfile', ['assetId' => $asset->id, 'fileId' =>$file->id])); ?>" style="max-width: 50px;">
                                                        </a>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php echo e($file->filename); ?>

                                                </td>
                                                <td>
                                                    <?php if($file->filename): ?>
                                                        <a href="<?php echo e(route('show/assetfile', [$asset->id, $file->id])); ?>" class="btn btn-default">
                                                            <i class="fa fa-download" aria-hidden="true"></i>
                                                        </a>
                                                    <?php endif; ?>
                                                </td>

                                                <td>
                                                    <?php if($file->created_at): ?>
                                                        <?php echo e(\App\Helpers\Helper::getFormattedDateObject($asset->last_checkout, 'datetime', false)); ?>

                                                    <?php endif; ?>
                                                </td>


                                                <td>
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', \App\Models\Asset::class)): ?>
                                                        <a class="btn delete-asset btn-sm btn-danger btn-sm" href="<?php echo e(route('delete/assetfile', [$asset->id, $file->id])); ?>" data-tooltip="true" data-title="Delete" data-content="<?php echo e(trans('general.delete_confirm', ['item' => $file->filename])); ?>"><i class="fa fa-trash icon-white" aria-hidden="true"></i></a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>

                                <?php else: ?>

                                    <div class="alert alert-info alert-block">
                                        <i class="fa fa-info-circle"></i>
                                        <?php echo e(trans('general.no_results')); ?>

                                    </div>
                                <?php endif; ?>

                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.tab-pane files -->
                </div> <!-- /. tab-content -->
            </div> <!-- /.nav-tabs-custom -->
        </div> <!-- /. col-md-12 -->
    </div> <!-- /. row -->

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', \App\Models\Asset::class)): ?>
        <?php echo $__env->make('modals.upload-file', ['item_type' => 'asset', 'item_id' => $asset->id], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
    <?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/hardware/view.blade.php ENDPATH**/ ?>