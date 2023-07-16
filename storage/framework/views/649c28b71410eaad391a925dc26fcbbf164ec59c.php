<?php $__env->startSection('title'); ?>
    Attempted Logins
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-body">

                    <table
                            data-cookie-id-table="loginReport"
                            data-pagination="true"
                            data-id-table="loginReport"
                            data-search="false"
                            data-side-pagination="server"
                            data-show-columns="true"
                            data-show-export="true"
                            data-show-refresh="true"
                            data-sort-order="desc"
                            data-sort-name="created_at"
                            id="loginReport"
                            data-url="<?php echo e(route('api.settings.login_attempts')); ?>"
                            data-mobile-responsive="true"
                            class="table table-striped snipe-table"
                            data-export-options='{
                        "fileName": "login-report-<?php echo e(date('Y-m-d')); ?>"}'>

                        <thead>
                            <tr>
                                <th class="col-sm-2" data-field="username" data-visible="true" data-sortable="true">Username</th>
                                <th class="col-sm-2" data-field="created_at" data-visible="true" data-sortable="true" data-formatter="dateDisplayFormatter">Login Attempt</th>
                                <th class="col-sm-2" data-field="user_agent" data-visible="true" data-sortable="true">User Agent</th>
                                <th class="col-sm-2" data-field="remote_ip" data-visible="true" data-sortable="true">IP</th>
                                <th class="col-sm-2" data-field="successful" data-visible="true" data-formatter="trueFalseFormatter" data-sortable="true">Success</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('moar_scripts'); ?>
    <?php echo $__env->make('partials.bootstrap-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binaper1/asset.binapertiwi.co.id/resources/views/settings/logins.blade.php ENDPATH**/ ?>