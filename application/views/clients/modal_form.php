<?php echo form_open(get_uri("clients/save"), array("id" => "client-form", "class" => "general-form", "role" => "form")); ?>
<div class="modal-body clearfix">
    <div class="tabbable">
        <ul class="nav nav-tabs" data-tabs="tabs">
            <li class="active">
                <a href="#One" data-toggle="tab"><?php echo lang('customer_business_info'); ?></a>
            </li>
            <li>
                <a href="#Two" data-toggle="tab"><?php echo lang('customer_personal_info'); ?></a>
            </li>
            <li>
                <a href="#Three" data-toggle="tab"><?php echo lang('customer_other_info'); ?></a>
            </li>
        </ul>
        <div class="tab-content">
            <br/>
            <div class="tab-pane active" id="One">
                    <div class="row">
                        <?php $this->load->view("clients/client_form_fields"); ?>
                    </div>
            </div>
            <div class="tab-pane" id="Two">
                <br/>
                    <div class="row">
                        <?php $this->load->view("clients/client_form_fields_personal"); ?>
                    </div>
            </div>
            <div class="tab-pane" id="Three">
                <br/>
                <div class="row">
                    <?php $this->load->view("clients/client_form_fields_other"); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> <?php echo lang('close'); ?></button>
    <button type="submit" class="btn btn-primary"><span class="fa fa-check-circle"></span> <?php echo lang('save'); ?></button>
</div>
<?php echo form_close(); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#client-form").appForm({
            onSuccess: function(result) {
                if (result.view === "details") {
                    appAlert.success(result.message, {duration: 10000});
                    setTimeout(function() {
                        location.reload();
                    }, 500);

                } else {
                    $("#client-table").appTable({newData: result.data, dataId: result.id});
                }
            }
        });
        $("#company_name").focus();
    });
</script>    