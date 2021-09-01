<div class="modal fade modal-report" id="pop-report" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-warning"></i> <?php _e('Report','psythemes'); ?></h4>
            </div>
            <div class="modal-body">
              <?php include_once 'report.php'; ?>
            </div>
        </div>
    </div>
</div>