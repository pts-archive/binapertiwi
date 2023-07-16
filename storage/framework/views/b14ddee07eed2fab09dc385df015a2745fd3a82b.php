


<?php $__env->startSection('title'); ?>
<?php echo e(trans('general.dashboard')); ?>

<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<?php if($snipeSettings->dashboard_message!=''): ?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo Parsedown::instance()->text(e($snipeSettings->dashboard_message)); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="row">
  <!-- panel -->
  <div class="col-lg-4 col-xs-6">
      <a href="<?php echo e(url('hardware?purchase_type=high')); ?>">
    <!-- small box -->
    <div class="small-box bg-teal">
      <div class="inner">
        <h3><?php echo e(number_format($counts['asset'])); ?></h3>
        <p><?php echo e(trans('general.total_assets')); ?></p>
      </div>
      <div class="icon" aria-hidden="true">
        <i class="fa fa-barcode" aria-hidden="true"></i>
      </div>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Models\Asset::class)): ?>
        <a href="<?php echo e(url('hardware?purchase_type=high')); ?>" class="small-box-footer"><?php echo e(trans('general.moreinfo')); ?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
      <?php endif; ?>
    </div>
      </a>
  </div><!-- ./col -->
  <div class="col-lg-4 col-xs-6">
      <a href="<?php echo e(url('hardware?purchase_type=low')); ?>">
    <!-- small box -->
    <div class="small-box bg-blue">
      <div class="inner">
        <h3><?php echo e(number_format($counts['asset_lva'])); ?></h3>
        <p><?php echo e(trans('general.total_assets')); ?> LVA</p>
      </div>
      <div class="icon" aria-hidden="true">
        <i class="fa fa-barcode" aria-hidden="true"></i>
      </div>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Models\Asset::class)): ?>
        <a href="<?php echo e(url('hardware?purchase_type=low')); ?>" class="small-box-footer"><?php echo e(trans('general.moreinfo')); ?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
      <?php endif; ?>
    </div>
      </a>
  </div><!-- ./col -->

  <div class="col-lg-4 col-xs-6">
     <a href="<?php echo e(route('licenses.index')); ?>">
    <!-- small box -->
    <div class="small-box bg-maroon">
      <div class="inner">
        <h3><?php echo e(number_format($counts['license'])); ?></h3>
        <p><?php echo e(trans('general.total_licenses')); ?></p>
      </div>
      <div class="icon" aria-hidden="true">
        <i class="fa fa-floppy-o"></i>
      </div>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', \App\Models\License::class)): ?>
          <a href="<?php echo e(route('licenses.index')); ?>" class="small-box-footer"><?php echo e(trans('general.moreinfo')); ?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
        <?php endif; ?>
    </div>
     </a>
  </div><!-- ./col -->


  <!--<div class="col-lg-4 col-xs-6">-->
    <!-- small box -->
  <!--    <a href="<?php echo e(route('accessories.index')); ?>">-->
  <!--  <div class="small-box bg-orange">-->
  <!--    <div class="inner">-->
  <!--      <h3> <?php echo e(number_format($counts['accessory'])); ?></h3>-->
  <!--        <p><?php echo e(trans('general.total_accessories')); ?></p>-->
  <!--    </div>-->
  <!--    <div class="icon" aria-hidden="true">-->
  <!--      <i class="fa fa-keyboard-o"></i>-->
  <!--    </div>-->
  <!--    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Models\Accessory::class)): ?>-->
  <!--        <a href="<?php echo e(route('accessories.index')); ?>" class="small-box-footer"><?php echo e(trans('general.moreinfo')); ?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>-->
  <!--    <?php endif; ?>-->
  <!--  </div>-->
  <!--    </a>-->
  <!--</div><!-- ./col -->

  <!--<div class="col-lg-3 col-xs-6">-->
    <!-- small box -->

  <!--    <a href="<?php echo e(route('consumables.index')); ?>">-->
  <!--  <div class="small-box bg-purple">-->
  <!--    <div class="inner">-->
  <!--      <h3> <?php echo e(number_format($counts['consumable'])); ?></h3>-->
  <!--        <p><?php echo e(trans('general.total_consumables')); ?></p>-->
  <!--    </div>-->
  <!--    <div class="icon" aria-hidden="true">-->
  <!--      <i class="fa fa-tint"></i>-->
  <!--    </div>-->
  <!--    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index', \App\Models\Consumable::class)): ?>-->
  <!--      <a href="<?php echo e(route('consumables.index')); ?>" class="small-box-footer"><?php echo e(trans('general.moreinfo')); ?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>-->
  <!--    <?php endif; ?>-->
  <!--  </div>-->
  <!--</div><!-- ./col -->
</div>
</div>

<?php if($counts['grand_total'] == 0): ?>

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h2 class="box-title">This is your dashboard. There are many like it, but this one is yours.</h2>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="progress">
                                <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>
                            </div>


                            <p><strong>It looks like you haven't added anything yet, so we don't have anything awesome to display. Get started by adding some assets, accessories, consumables, or licenses now!</strong></p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', \App\Models\Asset::class)): ?>
                            <a class="btn bg-teal" style="width: 100%" href="<?php echo e(route('hardware.create')); ?>">New Asset</a>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', \App\Models\License::class)): ?>
                                <a class="btn bg-maroon" style="width: 100%" href="<?php echo e(route('licenses.create')); ?>">New License</a>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', \App\Models\Accessory::class)): ?>
                                <a class="btn bg-orange" style="width: 100%" href="<?php echo e(route('accessories.create')); ?>">New Accessory</a>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', \App\Models\Consumable::class)): ?>
                                <a class="btn bg-purple" style="width: 100%" href="<?php echo e(route('consumables.create')); ?>">New Consumable</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php else: ?>

<div class="row">
    <div class="col-md-4">
        <div class="box box-default">
            <div class="box-header with-border">
                <h2 class="box-title"><?php echo e(trans('general.assets')); ?> by Status</h2>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" aria-hidden="true">
                        <i class="fa fa-minus" aria-hidden="true"></i>
                        <span class="sr-only">Collapse</span>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="chart-responsive">
                            <canvas id="statusPieChart" height="195"></canvas>
                        </div> <!-- ./chart-responsive -->
                        <div class="text-center text-dark">
                            <h5><b><a href="<?php echo e(route('hardware.index')); ?>"><u class="text-warning">Total Asset = <?php echo e(number_format($counts['assets'])); ?></u> </a></b></h5>
                        </div>
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div><!-- /.box-body -->
        </div> <!-- /.box -->
    </div>
    <div class="col-md-4">

        <!-- Categories -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h2 class="box-title">Asset by Locations</h2>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus" aria-hidden="true"></i>
                        <span class="sr-only">Collapse</span>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                        <table
                                data-cookie-id-table="dashCategorySummary"
                                data-height="280"
                                data-pagination="false"
                                data-side-pagination="server"
                                data-sort-order="desc"
                                data-sort-field="assets_count"
                                id="dashCategorySummary"
                                class="table table-striped snipe-table"
                                data-url="<?php echo e(route('api.locations.index', ['sort' => 'assets_count', 'order' => 'asc'])); ?>">

                            <thead>
                            <tr>
                                <th class="col-sm-3" data-visible="true" data-field="name" data-formatter="locationsLinkFormatter" data-sortable="true"><?php echo e(trans('general.name')); ?></th>
                                <!--<th class="col-sm-3" data-visible="true" data-field="category_type" data-sortable="true">-->
                                <!--    <?php echo e(trans('general.type')); ?>-->
                                <!--</th>-->
                                <th class="col-sm-1" data-visible="true" data-field="assets_count" data-sortable="true">
                                    <span>Jumlah Asset</span>
                                </th>
                                <!--<th class="col-sm-1" data-visible="true" data-field="accessories_count" data-sortable="true">-->
                                <!--    <i class="fa fa-keyboard-o" aria-hidden="true"></i>-->
                                <!--    <span class="sr-only">Accessories Count</span>-->
                                <!--</th>-->
                                <!--<th class="col-sm-1" data-visible="true" data-field="licenses_count" data-sortable="true">-->
                                <!--    <i class="fa fa-floppy-o" aria-hidden="true"></i>-->
                                <!--    <span class="sr-only">Licenses Count</span>-->
                                <!--</th>-->
                            </tr>
                            </thead>
                        </table>
                        </div>
                    </div> <!-- /.col -->
                    <div class="col-md-12 text-center" style="padding-top: 10px;">
                        <a href="<?php echo e(route('locations.index')); ?>" class="btn btn-primary btn-sm" style="width: 100%"><?php echo e(trans('general.viewall')); ?></a>
                    </div>
                </div> <!-- /.row -->

            </div><!-- /.box-body -->
        </div> <!-- /.box -->
    </div>
    <div class="col-md-4">
        <div class="box box-default">
            <div class="box-header with-border">
                <h2 class="box-title"><?php echo e(trans('general.assets')); ?> by Category</h2>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" aria-hidden="true">
                        <i class="fa fa-minus" aria-hidden="true"></i>
                        <span class="sr-only">Collapse</span>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="chart-responsive">
                            <canvas id="statusPieChart2" height="220"></canvas>
                        </div> <!-- ./chart-responsive -->
                        <div class="text-center">
                            <!--<h3><b>Total Asset = <?php echo e(number_format($counts['asset'])); ?> </b></h2>-->
                        </div>
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div><!-- /.box-body -->
        </div> <!-- /.box -->
    </div>
</div>

<!-- recent activity -->
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h2 class="box-title"><?php echo e(trans('general.recent_activity')); ?></h2>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" aria-hidden="true">
                <i class="fa fa-minus" aria-hidden="true"></i>
                <span class="sr-only">Collapse</span>
            </button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive">

                <table
                    data-cookie-id-table="dashActivityReport"
                    data-height="200"
                    data-pagination="false"
                    data-id-table="dashActivityReport"
                    data-side-pagination="server"
                    data-sort-order="desc"
                    data-sort-name="created_at"
                    id="dashActivityReport"
                    class="table table-striped snipe-table"
                    data-url="<?php echo e(route('api.activity.index', ['limit' => 10])); ?>">
                    <thead>
                    <tr>
                        <th data-field="icon" data-visible="true" style="width: 40px;" class="hidden-xs" data-formatter="iconFormatter"><span  class="sr-only">Icon</span></th>
                        <th class="col-sm-3" data-visible="true" data-field="created_at" data-formatter="dateDisplayFormatter"><?php echo e(trans('general.date')); ?></th>
                        <th class="col-sm-2" data-visible="true" data-field="admin" data-formatter="usersLinkObjFormatter"><?php echo e(trans('general.admin')); ?></th>
                        <th class="col-sm-2" data-visible="true" data-field="action_type"><?php echo e(trans('general.action')); ?></th>
                        <th class="col-sm-3" data-visible="true" data-field="item" data-formatter="polymorphicItemFormatter"><?php echo e(trans('general.item')); ?></th>
                        <th class="col-sm-2" data-visible="true" data-field="target" data-formatter="polymorphicItemFormatter"><?php echo e(trans('general.target')); ?></th>
                    </tr>
                    </thead>
                </table>



            </div><!-- /.responsive -->
          </div><!-- /.col -->
          <div class="col-md-12 text-center" style="padding-top: 10px;">
            <a href="<?php echo e(route('reports.activity')); ?>" class="btn btn-primary btn-sm" style="width: 100%"><?php echo e(trans('general.viewall')); ?></a>
          </div>
        </div><!-- /.row -->
      </div><!-- ./box-body -->
    </div><!-- /.box -->
  </div>

</div> <!--/row-->


<?php endif; ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('moar_scripts'); ?>
<?php echo $__env->make('partials.bootstrap-table', ['simple_view' => true, 'nopages' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

import ChartDataLabels from "chartjs-plugin-datalabels";

Chart.register(ChartDataLabels);


<script nonce="<?php echo e(csrf_token()); ?>">
    // ---------------------------
    // - ASSET STATUS CHART -
    // ---------------------------
      var pieChartCanvas = $("#statusPieChart").get(0).getContext("2d");
      var pieChart = new Chart(pieChartCanvas);
      var ctx = document.getElementById("statusPieChart");
      var pieOptions = {
              legend: {
                  position: 'top',
                  responsive: true, 
                  maintainAspectRatio: true,
              }
          };

      $.ajax({
          type: 'GET',
          url: '<?php echo e(route('api.statuslabels.assets.bytype')); ?>',
          headers: {
              "X-Requested-With": 'XMLHttpRequest',
              "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
          },
          dataType: 'json',
          success: function (data) {
              var myPieChart = new Chart(ctx,{
                  type   : 'doughnut',
                  data   : data,
                  options: pieOptions
              });
          },
          error: function (data) {
             // window.location.reload(true);
          }
      });
</script>

<script nonce="<?php echo e(csrf_token()); ?>">
    // ---------------------------
    // - ASSET LOCATION CHART -
    // ---------------------------
      var pieChartCanvas2 = $("#statusPieChart2").get(0).getContext("2d");
      var pieChart2 = new Chart(pieChartCanvas2);
      var ctx2 = document.getElementById("statusPieChart2");
      var pieOptions2 = {
              legend: {
                  position: 'top',
                  responsive: true, 
                  maintainAspectRatio: true,
              },
          };

      $.ajax({
          type: 'GET',
          url: '<?php echo e(route('api.categories.assets.bycategory')); ?>',
          headers: {
              "X-Requested-With": 'XMLHttpRequest',
              "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
          },
          dataType: 'json',
          success: function (data) {
              var myPieChart2 = new Chart(ctx2,{
                  type   : 'pie',
                  data   : data,
                  options: pieOptions2
              });
          },
          error: function (data) {
             // window.location.reload(true);
          }
      });
</script>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/binaper1/asset.binapertiwi.co.id/resources/views/dashboard.blade.php ENDPATH**/ ?>