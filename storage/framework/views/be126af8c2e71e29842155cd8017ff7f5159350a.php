<?php $__env->startSection('title', trans('admin.emails_page_title') .' < '. get_site_title()); ?>

<?php $__env->startSection('content'); ?>
<div id="emails_configuration">
  <h3><?php echo trans('admin.emails_notifications_label'); ?></h3><hr>
  <p><?php echo trans('admin.emails_notifications_msg'); ?></p>
  <div class="box box-solid">
    <div class="box-body">
      <div class="row">
        <div class="col-md-12">
          <table>
            <tr>
              <th><strong><?php echo trans('admin.emails_label'); ?></strong></th>
              <th><strong><?php echo trans('admin.action'); ?></strong></th>
            </tr>
            <tr>
              <td><i class="fa fa-check-circle-o"></i> <?php echo trans('admin.emails_notifications_new_order_label'); ?></td>
              <td><a href="<?php echo e(route('admin.emails_type_content', 'new-order')); ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Configure"><i class="fa fa-cog"></i></a></td>
            </tr>
            <tr>
              <td><i class="fa fa-check-circle-o"></i> <?php echo trans('admin.emails_notifications_cancelled_order_label'); ?></td>
              <td><a href="<?php echo e(route('admin.emails_type_content', 'cancelled-order')); ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Configure"><i class="fa fa-cog"></i></a></td>
            </tr>
            <tr>
              <td><i class="fa fa-check-circle-o"></i> <?php echo trans('admin.emails_notifications_processing_order_label'); ?></td>
              <td><a href="<?php echo e(route('admin.emails_type_content', 'processing-order')); ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Configure"><i class="fa fa-cog"></i></a></td>
            </tr>
            <tr>
              <td><i class="fa fa-check-circle-o"></i> <?php echo trans('admin.emails_notifications_completed_order_label'); ?></td>
              <td><a href="<?php echo e(route('admin.emails_type_content', 'completed-order')); ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Configure"><i class="fa fa-cog"></i></a></td>
            </tr>
            <tr style="display:none;">
              <td><i class="fa fa-check-circle-o"></i> <?php echo trans('admin.emails_notifications_refunded_order_label'); ?></td>
              <td><a href="<?php echo e(route('admin.emails_type_content', 'refund-order')); ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Configure"><i class="fa fa-cog"></i></a></td>
            </tr>
            <tr>
              <td><i class="fa fa-check-circle-o"></i> <?php echo trans('admin.emails_notifications_user_account_label'); ?></td>
              <td><a href="<?php echo e(route('admin.emails_type_content', 'user-new-account')); ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Configure"><i class="fa fa-cog"></i></a></td>
            </tr>
            <tr>
              <td><i class="fa fa-check-circle-o"></i> <?php echo trans('admin.emails_notifications_vendor_account_label'); ?></td>
              <td><a href="<?php echo e(route('admin.emails_type_content', 'vendor-new-account')); ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Configure"><i class="fa fa-cog"></i></a></td>
            </tr>
            <tr>
              <td><i class="fa fa-check-circle-o"></i> <?php echo trans('admin.emails_notifications_vendor_activation_label'); ?></td>
              <td><a href="<?php echo e(route('admin.emails_type_content', 'vendor-activation')); ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Configure"><i class="fa fa-cog"></i></a></td>
            </tr>
            <tr>
              <td><i class="fa fa-check-circle-o"></i> <?php echo trans('admin.emails_notifications_withdraw_request_label'); ?></td>
              <td><a href="<?php echo e(route('admin.emails_type_content', 'withdraw-request')); ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Configure"><i class="fa fa-cog"></i></a></td>
            </tr>
            <tr>
              <td><i class="fa fa-check-circle-o"></i> <?php echo trans('admin.emails_notifications_withdraw_cancelled_label'); ?></td>
              <td><a href="<?php echo e(route('admin.emails_type_content', 'withdraw-cancelled')); ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Configure"><i class="fa fa-cog"></i></a></td>
            </tr>
            <tr>
              <td><i class="fa fa-check-circle-o"></i> <?php echo trans('admin.emails_notifications_withdraw_completed_label'); ?></td>
              <td><a href="<?php echo e(route('admin.emails_type_content', 'withdraw-completed')); ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Configure"><i class="fa fa-cog"></i></a></td>
            </tr>
          </table>  
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>