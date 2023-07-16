<?php $__env->startSection('title'); ?>
<?php echo e(trans('admin/users/general.view_user', ['name' => $user->present()->fullName()])); ?>

##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs hidden-print">

        <li class="active">
          <a href="#details" data-toggle="tab">
            <span class="hidden-lg hidden-md">
            <i class="fa fa-info-circle"></i>
            </span>
            <span class="hidden-xs hidden-sm"><?php echo e(trans('admin/users/general.info')); ?></span>
          </a>
        </li>

        <li>
          <a href="#asset" data-toggle="tab">
            <span class="hidden-lg hidden-md">
            <i class="fa fa-barcode" aria-hidden="true"></i>
            </span>
            <span class="hidden-xs hidden-sm"><?php echo e(trans('general.assets')); ?></span>
          </a>
        </li>

        <li>
          <a href="#licenses" data-toggle="tab">
            <span class="hidden-lg hidden-md">
            <i class="fa fa-floppy-o"></i>
            </span>
            <span class="hidden-xs hidden-sm"><?php echo e(trans('general.licenses')); ?></span>
          </a>
        </li>

        <li>
          <a href="#accessories" data-toggle="tab">
            <span class="hidden-lg hidden-md">
            <i class="fa fa-keyboard-o"></i>
            </span> <span class="hidden-xs hidden-sm"><?php echo e(trans('general.accessories')); ?></span>
          </a>
        </li>

        <li>
          <a href="#consumables" data-toggle="tab">
            <span class="hidden-lg hidden-md">
            <i class="fa fa-tint"></i></span>
            <span class="hidden-xs hidden-sm"><?php echo e(trans('general.consumables')); ?></span>
          </a>
        </li>

        <li>
          <a href="#files" data-toggle="tab">
            <span class="hidden-lg hidden-md">
            <i class="fa fa-paperclip"></i></span>
            <span class="hidden-xs hidden-sm"><?php echo e(trans('general.file_uploads')); ?></span>
          </a>
        </li>

        <li>
          <a href="#history" data-toggle="tab">
            <span class="hidden-lg hidden-md">
            <i class="fa fa-clock-o"></i></span>
            <span class="hidden-xs hidden-sm"><?php echo e(trans('general.history')); ?></span>
          </a>
        </li>

        <?php if($user->managedLocations()->count() >= 0 ): ?>
        <li>
          <a href="#managed" data-toggle="tab">
            <span class="hidden-lg hidden-md">
            <i class="fa fa-clock-o"></i></span>
            <span class="hidden-xs hidden-sm"><?php echo e(trans('admin/users/table.managed_locations')); ?></span>
          </a>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user)): ?>
          <li class="dropdown pull-right">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-gear"></i> <?php echo e(trans('button.actions')); ?>

              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo e(route('users.edit', $user->id)); ?>"><?php echo e(trans('admin/users/general.edit')); ?></a></li>
              <li><a href="<?php echo e(route('clone/user', $user->id)); ?>"><?php echo e(trans('admin/users/general.clone')); ?></a></li>
              <?php if((Auth::user()->id !== $user->id) && (!config('app.lock_passwords')) && ($user->deleted_at=='')): ?>
                <li><a href="<?php echo e(route('users.destroy', $user->id)); ?>"><?php echo e(trans('button.delete')); ?></a></li>
              <?php endif; ?>
            </ul>
          </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', \App\Models\User::class)): ?>
          <li class="pull-right"><a href="#" data-toggle="modal" data-target="#uploadFileModal">
              <i class="fa fa-paperclip" aria-hidden="true"></i> <?php echo e(trans('button.upload')); ?></a>
          </li>
        <?php endif; ?>
      </ul>

      <div class="tab-content">
        <div class="tab-pane active" id="details">
          <div class="row">
            <?php if($user->deleted_at!=''): ?>
              <div class="col-md-12">
                <div class="callout callout-warning">
                  <i class="icon fa fa-warning"></i>
                  <?php echo e(trans('admin/users/message.user_deleted_warning')); ?>

                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user)): ?>
                      <a href="<?php echo e(route('restore/user', $user->id)); ?>"><?php echo e(trans('admin/users/general.restore_user')); ?></a>
                  <?php endif; ?>
                </div>
              </div>
            <?php endif; ?>
            <div class="col-md-2 text-center">
              <?php if($user->avatar): ?>
                <img src="/uploads/avatars/<?php echo e($user->avatar); ?>" class="avatar img-thumbnail hidden-print" alt="<?php echo e($user->present()->fullName()); ?>">
              <?php else: ?>
                <img src="<?php echo e($user->present()->gravatar()); ?>" class="avatar img-circle hidden-print" alt="<?php echo e($user->present()->fullName()); ?>">
              <?php endif; ?>
            </div>

            <div class="col-md-7">
              <div class="table table-responsive">
                <table class="table table-striped">
                  <?php if(!is_null($user->company)): ?>
                    <tr>
                        <td class="text-nowrap"><?php echo e(trans('general.company')); ?></td>
                        <td><?php echo e($user->company->name); ?></td>
                    </tr>
                  <?php endif; ?>

                  <tr>
                    <td class="text-nowrap"><?php echo e(trans('admin/users/table.name')); ?></td>
                    <td><?php echo e($user->present()->fullName()); ?></td>
                  </tr>

                  <tr>
                    <td class="text-nowrap"><?php echo e(trans('admin/users/table.username')); ?></td>
                    <td><?php echo e($user->username); ?></td>
                  </tr>
                    <?php if(($user->address) || ($user->city) || ($user->state) || ($user->country)): ?>
                      <tr>
                        <td class="text-nowrap"><?php echo e(trans('general.address')); ?></td>
                        <td>
                          <?php if($user->address): ?>
                            <?php echo e($user->address); ?> <br>
                          <?php endif; ?>
                          <?php if($user->city): ?>
                            <?php echo e($user->city); ?>

                          <?php endif; ?>
                          <?php if($user->state): ?>
                            <?php echo e($user->state); ?>

                          <?php endif; ?>
                          <?php if($user->country): ?>
                            <?php echo e($user->country); ?>

                          <?php endif; ?>
                        </td>
                      </tr>

                    <?php endif; ?>
                    <tr>
                      <td class="text-nowrap"><?php echo e(trans('general.groups')); ?></td>
                      <td>
                        <?php if($user->groups->count() > 0): ?>
                            <?php $__currentLoopData = $user->groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('superadmin')): ?>
                                  <a href="<?php echo e(route('groups.show', $group->id)); ?>" class="label label-default"><?php echo e($group->name); ?></a>
                            <?php else: ?>
                              <?php echo e($group->name); ?>

                            <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                          --
                        <?php endif; ?>

                      </td>
                    </tr>


                  <?php if($user->jobtitle): ?>
                  <tr>
                    <td class="text-nowrap"><?php echo e(trans('admin/users/table.job')); ?></td>
                    <td><?php echo e($user->jobtitle); ?></td>
                  </tr>
                  <?php endif; ?>

                  <?php if($user->employee_num): ?>
                  <tr>
                    <td class="text-nowrap"><?php echo e(trans('admin/users/table.employee_num')); ?></td>
                    <td><?php echo e($user->employee_num); ?></td>
                  </tr>
                  <?php endif; ?>

                  <?php if($user->manager): ?>
                  <tr>
                    <td class="text-nowrap"><?php echo e(trans('admin/users/table.manager')); ?></td>
                    <td>
                      <a href="<?php echo e(route('users.show', $user->manager->id)); ?>"><?php echo e($user->manager->getFullNameAttribute()); ?></a>

                      </td>
                  </tr>
                  <?php endif; ?>

                  <?php if($user->email): ?>
                  <tr>
                    <td class="text-nowrap"><?php echo e(trans('admin/users/table.email')); ?></td>
                    <td><a href="mailto:<?php echo e($user->email); ?>"><?php echo e($user->email); ?></a></td>
                  </tr>
                  <?php endif; ?>

                  <?php if($user->website): ?>
                    <tr>
                      <td class="text-nowrap"><?php echo e(trans('general.website')); ?></td>
                      <td><a href="<?php echo e($user->website); ?>" target="_blank"><?php echo e($user->website); ?></a></td>
                    </tr>
                  <?php endif; ?>

                  <?php if($user->phone): ?>
                  <tr>
                    <td class="text-nowrap"><?php echo e(trans('admin/users/table.phone')); ?></td>
                    <td><a href="tel:<?php echo e($user->phone); ?>"><?php echo e($user->phone); ?></a></td>
                  </tr>
                  <?php endif; ?>

                  <?php if($user->userloc): ?>
                  <tr>
                    <td class="text-nowrap"><?php echo e(trans('admin/users/table.location')); ?></td>
                    <td><?php echo e(link_to_route('locations.show', $user->userloc->name, [$user->userloc->id])); ?></td>


                  </tr>
                  <?php endif; ?>
                    <?php if($user->last_login): ?>
                      <tr>
                        <td class="text-nowrap"><?php echo e(trans('general.last_login')); ?></td>
                        <td><?php echo e(\App\Helpers\Helper::getFormattedDateObject($user->last_login, 'datetime', false)); ?></td>
                      </tr>
                    <?php endif; ?>

                    <?php if($user->department): ?>
                      <tr>
                        <td class="text-nowrap"><?php echo e(trans('general.department')); ?></td>
                        <td>
                          <a href="<?php echo e(route('departments.show', $user->department)); ?>">
                            <?php echo e($user->department->name); ?>

                          </a>
                        </td>
                      </tr>
                    <?php endif; ?>
                  <?php if($user->created_at): ?>
                  <tr>
                    <td><?php echo e(trans('general.created_at')); ?></td>
                    <td><?php echo e($user->created_at->format('F j, Y h:iA')); ?></td>
                  </tr>
                  <?php endif; ?>
                    <tr>
                      <td class="text-nowrap"><?php echo e(trans('general.login_enabled')); ?></td>
                      <td>
                        <?php echo ($user->activated=='1') ? '<i class="fa fa-check text-success" aria-hidden="true"></i> '.trans('general.yes') : '<i class="fa fa-times text-danger" aria-hidden="true"></i> '.trans('general.no'); ?>

                    </tr>
                    <tr>
                      <td class="text-nowrap">LDAP</td>
                      <td>
                        <?php echo ($user->ldap_import=='1') ? '<i class="fa fa-check text-success" aria-hidden="true"></i> '.trans('general.yes') : '<i class="fa fa-times text-danger" aria-hidden="true"></i> '.trans('general.no'); ?>


                        </td>
                    </tr>


                    <?php if($user->activated=='1'): ?>
                      <tr>
                        <td class="text-nowrap"><?php echo e(trans('admin/users/general.two_factor_active')); ?></td>
                        <td>
                          <?php echo ($user->two_factor_active()) ? '<i class="fa fa-check text-success" aria-hidden="true"></i> '.trans('general.yes') : '<i class="fa fa-times text-danger" aria-hidden="true"></i> '.trans('general.no'); ?>

                        </td>
                      </tr>
                      <tr>
                        <td class="text-nowrap"><?php echo e(trans('admin/users/general.two_factor_enrolled')); ?></td>
                        <td class="two_factor_resetrow">
                          <div class="row">
                          <div class="col-md-2" id="two_factor_reset_toggle">
                            <?php echo ($user->two_factor_active_and_enrolled()) ? '<i class="fa fa-check text-success" aria-hidden="true"></i> '.trans('general.yes') : '<i class="fa fa-times text-danger" aria-hidden="true"></i> '.trans('general.no'); ?>

                          </div>

                          <?php if((Auth::user()->isSuperUser()) && ($snipeSettings->two_factor_enabled!='0') && ($snipeSettings->two_factor_enabled!='')): ?>
                            <div class="col-md-10">
                            <a class="btn btn-default btn-sm pull-left" id="two_factor_reset" style="margin-right: 10px;"> <?php echo e(trans('admin/settings/general.two_factor_reset')); ?></a>
                            <span id="two_factor_reseticon">
                            </span>
                            <span id="two_factor_resetresult">
                            </span>
                            <span id="two_factor_resetstatus">
                            </span>

                                <br><br><p class="help-block"><?php echo e(trans('admin/settings/general.two_factor_reset_help')); ?></p>
                            </div>
                          </div>
                       <?php endif; ?>

                        </td>
                      </tr>

                     <?php endif; ?>

                    <?php if($user->notes): ?>
                      <tr>
                        <td class="text-nowrap"><?php echo e(trans('admin/users/table.notes')); ?></td>
                        <td><?php echo e($user->notes); ?></td>
                      </tr>
                    <?php endif; ?>


                </table>
              </div>
            </div> <!--/col-md-8-->

            <!-- Start button column -->
            <div class="col-md-3">
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user)): ?>
                <div class="col-md-12">
                  <a href="<?php echo e(route('users.edit', $user->id)); ?>" style="width: 100%;" class="btn btn-sm btn-primary hidden-print"><?php echo e(trans('admin/users/general.edit')); ?></a>
                </div>
              <?php endif; ?>

              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', $user)): ?>
                <div class="col-md-12" style="padding-top: 5px;">
                  <a href="<?php echo e(route('clone/user', $user->id)); ?>" style="width: 100%;" class="btn btn-sm btn-primary hidden-print"><?php echo e(trans('admin/users/general.clone')); ?></a>
                </div>
               <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', $user)): ?>
                <div class="col-md-12" style="padding-top: 5px;">
                  <a href="<?php echo e(route('users.print', $user->id)); ?>" style="width: 100%;" class="btn btn-sm btn-primary hidden-print" target="_blank" rel="noopener"><?php echo e(trans('admin/users/general.print_assigned')); ?></a>
                </div>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user)): ?>
                  <?php if(($user->activated == '1') && ($user->email != '') && ($user->ldap_import == '0')): ?>
                      <div class="col-md-12" style="padding-top: 5px;">
                        <form action="<?php echo e(route('users.password',['userId'=> $user->id])); ?>" method="POST">
                          <?php echo e(csrf_field()); ?>

                          <button style="width: 100%;" class="btn btn-sm btn-primary hidden-print"><?php echo e(trans('button.send_password_link')); ?></button>
                        </form>
                      </div>
                  <?php endif; ?>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $user)): ?>
                  <?php if($user->deleted_at==''): ?>
                    <div class="col-md-12" style="padding-top: 30px;">
                      <form action="<?php echo e(route('users.destroy',$user->id)); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field("DELETE")); ?>

                        <button style="width: 100%;" class="btn btn-sm btn-warning hidden-print"><?php echo e(trans('button.delete')); ?></button>
                      </form>
                    </div>
                    <div class="col-md-12" style="padding-top: 5px;">
                      <form action="<?php echo e(route('users/bulkedit')); ?>" method="POST">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                        <input type="hidden" name="bulk_actions" value="delete" />

                        <input type="hidden" name="ids[<?php echo e($user->id); ?>]" value="<?php echo e($user->id); ?>" />
                        <button style="width: 100%;" class="btn btn-sm btn-danger hidden-print"><?php echo e(trans('button.checkin_and_delete')); ?></button>
                      </form>
                    </div>
                  <?php else: ?>
                    <div class="col-md-12" style="padding-top: 5px;">
                      <a href="<?php echo e(route('restore/user', $user->id)); ?>" style="width: 100%;" class="btn btn-sm btn-warning hidden-print"><?php echo e(trans('button.restore')); ?></a>
                    </div>
                  <?php endif; ?>
                <?php endif; ?>
            </div>
            <!-- End button column -->
          </div> <!--/.row-->
        </div><!-- /.tab-pane -->

        <div class="tab-pane" id="asset">
          <!-- checked out assets table -->
          <div class="table-responsive table-striped">
            <table
                    data-click-to-select="true"
                    data-columns="<?php echo e(\App\Presenters\AssetPresenter::dataTableLayout()); ?>"
                    data-cookie-id-table="userAssetsListingTable"
                    data-pagination="true"
                    data-id-table="userAssetsListingTable"
                    data-search="true"
                    data-side-pagination="server"
                    data-show-columns="true"
                    data-show-export="true"
                    data-show-footer="true"
                    data-show-refresh="true"
                    data-sort-order="asc"
                    data-sort-name="name"
                    data-toolbar="#toolbar"
                    id="userAssetsListingTable"
                    class="table table-striped snipe-table"
                    data-url="<?php echo e(route('api.assets.index',['assigned_to' => e($user->id), 'assigned_type' => 'App\Models\User'])); ?>"
                    data-export-options='{
                "fileName": "export-<?php echo e(str_slug($user->present()->fullName())); ?>-assets-<?php echo e(date('Y-m-d')); ?>",
                "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                }'>
            </table>
          </div>
        </div><!-- /asset -->

        <div class="tab-pane" id="licenses">
          <div class="table-responsive">
            <table
                    data-cookie-id-table="userLicenseTable"
                    data-id-table="userLicenseTable"
                    id="userLicenseTable"
                    data-search="true"
                    data-pagination="true"
                    data-side-pagination="client"
                    data-show-columns="true"
                    data-show-export="true"
                    data-show-footer="true"
                    data-show-refresh="true"
                    data-sort-order="asc"
                    data-sort-name="name"
                    class="table table-striped snipe-table table-hover"
                    data-export-options='{
                    "fileName": "export-license-<?php echo e(str_slug($user->username)); ?>-<?php echo e(date('Y-m-d')); ?>",
                    "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","delete","download","icon"]
                    }'>

              <thead>
                <tr>
                  <th class="col-md-5"><?php echo e(trans('general.name')); ?></th>
                  <th><?php echo e(trans('admin/hardware/form.serial')); ?></th>
                  <th data-footer-formatter="sumFormatter" data-fieldname="purchase_cost"><?php echo e(trans('general.purchase_cost')); ?></th>
                  <th><?php echo e(trans('admin/licenses/form.purchase_order')); ?></th>
                  <th><?php echo e(trans('general.order_number')); ?></th>
                  <th class="col-md-1 hidden-print"><?php echo e(trans('general.action')); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $user->licenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $license): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td class="col-md-4">
                    <?php echo $license->present()->nameUrl(); ?>

                  </td>
                  <td class="col-md-4">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewKeys', $license)): ?>
                    <?php echo $license->present()->serialUrl(); ?>

                    <?php else: ?>
                      ------------
                    <?php endif; ?>
                  </td>
                  <td class="col-md-2">
                    <?php echo e($license->purchase_cost); ?>

                  </td>
                  <td>
                    <?php echo e($license->purchase_order); ?>

                  </td>
                  <td>
                    <?php echo e($license->order_number); ?>

                  </td>
                  <td class="hidden-print col-md-2">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $license)): ?>
                      <a href="<?php echo e(route('licenses.checkin', array('licenseSeatId'=> $license->pivot->id, 'backto'=>'user'))); ?>" class="btn btn-primary btn-sm hidden-print"><?php echo e(trans('general.checkin')); ?></a>
                     <?php endif; ?>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
          </table>
          </div>
        </div><!-- /licenses-tab -->

        <div class="tab-pane" id="accessories">
          <div class="table-responsive">
            <table
                    data-cookie-id-table="userAccessoryTable"
                    data-id-table="userAccessoryTable"
                    id="userAccessoryTable"
                    data-search="true"
                    data-pagination="true"
                    data-side-pagination="client"
                    data-show-columns="true"
                    data-show-export="true"
                    data-show-footer="true"
                    data-show-refresh="true"
                    data-sort-order="asc"
                    data-sort-name="name"
                    class="table table-striped snipe-table table-hover"
                    data-export-options='{
                    "fileName": "export-accessory-<?php echo e(str_slug($user->username)); ?>-<?php echo e(date('Y-m-d')); ?>",
                    "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","delete","download","icon"]
                    }'>
              <thead>
                <tr>
                  <th class="col-md-5"><?php echo e(trans('general.name')); ?></th>
                  <th class="col-md-6" data-footer-formatter="sumFormatter" data-fieldname="purchase_cost"><?php echo e(trans('general.purchase_cost')); ?></th>
                  <th class="col-md-1 hidden-print"><?php echo e(trans('general.action')); ?></th>
                </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $user->accessories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accessory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo $accessory->present()->nameUrl(); ?></td>
                    <td>
                      <?php echo $accessory->purchase_cost; ?>

                    </td>
                    <td class="hidden-print">
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('checkin', $accessory)): ?>
                        <a href="<?php echo e(route('checkin/accessory', array('accessoryID'=> $accessory->pivot->id, 'backto'=>'user'))); ?>" class="btn btn-primary btn-sm hidden-print"><?php echo e(trans('general.checkin')); ?></a>
                      <?php endif; ?>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div><!-- /accessories-tab -->

        <div class="tab-pane" id="consumables">
          <div class="table-responsive">
            <table
                    data-cookie-id-table="userConsumableTable"
                    data-id-table="userConsumableTable"
                    id="userConsumableTable"
                    data-search="true"
                    data-pagination="true"
                    data-side-pagination="client"
                    data-show-columns="true"
                    data-show-export="true"
                    data-show-footer="true"
                    data-show-refresh="true"
                    data-sort-order="asc"
                    data-sort-name="name"
                    class="table table-striped snipe-table table-hover"
                    data-export-options='{
                    "fileName": "export-consumable-<?php echo e(str_slug($user->username)); ?>-<?php echo e(date('Y-m-d')); ?>",
                    "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","delete","download","icon"]
                    }'>
              <thead>
                <tr>
                  <th class="col-md-6"><?php echo e(trans('general.name')); ?></th>
                  <th class="col-md-2" data-footer-formatter="sumFormatter" data-fieldname="purchase_cost"><?php echo e(trans('general.purchase_cost')); ?></th>
                  <th class="col-md-4"><?php echo e(trans('general.date')); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $user->consumables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consumable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo $consumable->present()->nameUrl(); ?></td>
                  <td>
                    <?php echo $consumable->purchase_cost; ?>

                  </td>
                  <td><?php echo e($consumable->created_at); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
          </table>
          </div>
        </div><!-- /consumables-tab -->

        <div class="tab-pane" id="files">
          <div class="row">

            <div class="col-md-12 col-sm-12">
              <div class="table-responsive">
                <table id="files-table" class="display table table-striped">
                  <thead>
                    <tr>
                      <th class="col-md-5"><?php echo e(trans('general.notes')); ?></th>
                      <th class="col-md-5"><span class="line"></span><?php echo e(trans('general.file_name')); ?></th>
                      <th class="col-md-2"><?php echo e(trans('general.download')); ?></th>
                      <th class="col-md-2"><?php echo e(trans('general.delete')); ?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $user->uploads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td>
                        <?php if($file->note): ?>
                        <?php echo e($file->note); ?>

                        <?php endif; ?>
                      </td>
                      <td>
                      <?php echo e($file->filename); ?>

                      </td>
                      <td>
                        <?php if($file->filename): ?>
                        <a href="<?php echo e(route('show/userfile', [$user->id, $file->id])); ?>" class="btn btn-default"><?php echo e(trans('general.download')); ?></a>
                        <?php endif; ?>
                      </td>
                      <td>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user)): ?>
                        <a class="btn delete-asset btn-danger btn-sm hidden-print" href="<?php echo e(route('userfile.destroy', [$user->id, $file->id])); ?>" data-content="Are you sure you wish to delete this file?" data-title="Delete <?php echo e($file->filename); ?>?"><i class="fa fa-trash icon-white" aria-hidden="true"></i><span class="sr-only">Delete</span></a>
                        <?php endif; ?>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!--/ROW-->
        </div><!--/FILES-->

        <div class="tab-pane" id="history">
          <div class="table-responsive">

            <table
                    data-click-to-select="true"
                    data-cookie-id-table="usersHistoryTable"
                    data-pagination="true"
                    data-id-table="usersHistoryTable"
                    data-search="true"
                    data-side-pagination="server"
                    data-show-columns="true"
                    data-show-export="true"
                    data-show-refresh="true"
                    data-sort-order="desc"
                    data-toolbar="#toolbar"
                    id="usersHistoryTable"
                    class="table table-striped snipe-table"
                    data-url="<?php echo e(route('api.activity.index', ['target_id' => $user->id, 'target_type' => 'user'])); ?>"
                    data-export-options='{
                "fileName": "export-<?php echo e(str_slug($user->present()->fullName )); ?>-history-<?php echo e(date('Y-m-d')); ?>",
                "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                }'>
              <thead>
              <tr>
                <th data-field="icon" style="width: 40px;" class="hidden-xs" data-formatter="iconFormatter">Icon</th>
                <th class="col-sm-3" data-field="created_at" data-formatter="dateDisplayFormatter" data-sortable="true"><?php echo e(trans('general.date')); ?></th>
                <th class="col-sm-2" data-field="admin" data-formatter="usersLinkObjFormatter"><?php echo e(trans('general.admin')); ?></th>
                <th class="col-sm-2" data-field="action_type"><?php echo e(trans('general.action')); ?></th>
                <th class="col-sm-3" data-field="item" data-formatter="polymorphicItemFormatter"><?php echo e(trans('general.item')); ?></th>
                <th class="col-sm-2" data-field="target" data-formatter="polymorphicItemFormatter"><?php echo e(trans('general.target')); ?></th>
              </tr>
              </thead>
            </table>

          </div>
        </div><!-- /.tab-pane -->

        <div class="tab-pane" id="managed">
          <div class="table-responsive">
            <table class="display table table-striped">
              <thead>
                <tr>
                  <th class="col-md-8"><?php echo e(trans('general.name')); ?></th>
                  <th class="col-md-4"><?php echo e(trans('general.date')); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $user->managedLocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo $location->present()->nameUrl(); ?></td>
                  <td><?php echo e($location->created_at); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
          </table>
          </div>
        </div><!-- /consumables-tab -->
      </div><!-- /.tab-content -->
    </div><!-- nav-tabs-custom -->
  </div>
</div>

  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', \App\Models\User::class)): ?>
    <?php echo $__env->make('modals.upload-file', ['item_type' => 'user', 'item_id' => $user->id], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>



  <?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
  <?php echo $__env->make('partials.bootstrap-table', ['simple_view' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script nonce="<?php echo e(csrf_token()); ?>">
$(function () {

  $("#two_factor_reset").click(function(){
    $("#two_factor_resetrow").removeClass('success');
    $("#two_factor_resetrow").removeClass('danger');
    $("#two_factor_resetstatus").html('');
    $("#two_factor_reseticon").html('<i class="fa fa-spinner spin"></i>');
    $.ajax({
      url: '<?php echo e(route('api.users.two_factor_reset', ['id'=> $user->id])); ?>',
      type: 'POST',
      data: {},
      headers: {
        "X-Requested-With": 'XMLHttpRequest',
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
      },
      dataType: 'json',

      success: function (data) {
        $("#two_factor_reset_toggle").html('').html('<i class="fa fa-times text-danger" aria-hidden="true"></i> <?php echo e(trans('general.no')); ?>');
        $("#two_factor_reseticon").html('');
        $("#two_factor_resetstatus").html('<i class="fa fa-check text-success"></i>' + data.message);

      },

      error: function (data) {
        $("#two_factor_reseticon").html('');
        $("#two_factor_reseticon").html('<i class="fa fa-exclamation-triangle text-danger"></i>');
        $('#two_factor_resetstatus').text(data.message);
      }


    });
  });


    //binds to onchange event of your input field
    var uploadedFileSize = 0;
    $('#fileupload').bind('change', function() {
      uploadedFileSize = this.files[0].size;
      $('#progress-container').css('visibility', 'visible');
    });

    $('#fileupload').fileupload({
        //maxChunkSize: 100000,
        dataType: 'json',
        formData:{
        _token:'<?php echo e(csrf_token()); ?>',
        notes: $('#notes').val(),
        },

        progress: function (e, data) {
            //var overallProgress = $('#fileupload').fileupload('progress');
            //var activeUploads = $('#fileupload').fileupload('active');
            var progress = parseInt((data.loaded / uploadedFileSize) * 100, 10);
            $('.progress-bar').addClass('progress-bar-warning').css('width',progress + '%');
            $('#progress-bar-text').html(progress + '%');
            //console.dir(overallProgress);
        },

        done: function (e, data) {
            console.dir(data);
            // We use this instead of the fail option, since our API
            // returns a 200 OK status which always shows as "success"

            if (data && data.jqXHR && data.jqXHR.responseJSON && data.jqXHR.responseJSON.status === "error") {
                var errorMessage = data.jqXHR.responseJSON.messages["file.0"];
                $('#progress-bar-text').html(errorMessage[0]);
                $('.progress-bar').removeClass('progress-bar-warning').addClass('progress-bar-danger').css('width','100%');
                $('.progress-checkmark').fadeIn('fast').html('<i class="fa fa-times fa-3x icon-white" style="color: #d9534f"></i>');
            } else {
                $('.progress-bar').removeClass('progress-bar-warning').addClass('progress-bar-success').css('width','100%');
                $('.progress-checkmark').fadeIn('fast');
                $('#progress-container').delay(950).css('visibility', 'visible');
                $('.progress-bar-text').html('Finished!');
                $('.progress-checkmark').fadeIn('fast').html('<i class="fa fa-check fa-3x icon-white" style="color: green"></i>');
                $.each(data.result, function (index, file) {
                    $('<tr><td>' + file.note + '</td><<td>' + file.filename + '</td></tr>').prependTo("#files-table > tbody");
                });
            }
            $('#progress').removeClass('active');


        }
    });
});
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/users/view.blade.php ENDPATH**/ ?>