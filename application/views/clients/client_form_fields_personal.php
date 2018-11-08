<div class="form-group">
    <label for="client_name" class="<?php echo $label_column; ?>"><?php echo lang('client_name'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_input(array(
            "id" => "client_name",
            "name" => "client_name",
            "value" => $model_info->client_name,
            "class" => "form-control",
            "placeholder" => lang('client_name'),
            "autofocus" => true,
            "data-rule-required" => true,
            "data-msg-required" => lang("field_required"),
        ));
        ?>
    </div>
</div>
<div class="form-group">
    <label for="date_of_birth" class="<?php echo $label_column; ?>"><?php echo lang('date_of_birth'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_input(array(
            "id" => "date_of_birth",
            "name" => "date_of_birth",
            "value" => $model_info->date_of_birth,
            "class" => "form-control",
            "placeholder" => lang('date_of_birth'),
//            "data-rule-required" => true,
//            "data-msg-required" => lang("field_required"),
//            "data-rule-greaterThanOrEqual" => "#date_of_birth",
//            "data-msg-greaterThanOrEqual" => lang("end_date_must_be_equal_or_greater_than_start_date")
        ));
//        echo form_textarea(array(
//            "id" => "date_of_birth",
//            "name" => "date_of_birth",
//            "value" => $model_info->date_of_birth ? $model_info->date_of_birth : "",
//            "class" => "form-control",
//            "placeholder" => lang('date_of_birth')
//        ));
        ?>

    </div>
</div>
<div class="form-group">
    <label for="client_mobile" class="<?php echo $label_column; ?>"><?php echo lang('client_mobile'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_input(array(
            "id" => "client_mobile",
            "name" => "client_mobile",
            "value" => $model_info->client_mobile,
            "class" => "form-control",
            "placeholder" => lang('client_mobile'),
        ));
        ?>
    </div>
</div>
<div class="form-group">
    <label for="client_occupation" class="<?php echo $label_column; ?>"><?php echo lang('client_occupation'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_input(array(
            "id" => "client_occupation",
            "name" => "client_occupation",
            "value" => $model_info->client_occupation,
            "class" => "form-control",
            "placeholder" => lang('client_occupation'),
        ));
        ?>
    </div>
</div>


<div class="form-group">
    <label for="spouse_name" class="<?php echo $label_column; ?>"><?php echo lang('spouse_name'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_input(array(
            "id" => "spouse_name",
            "name" => "spouse_name",
            "value" => $model_info->spouse_name,
            "class" => "form-control",
            "placeholder" => lang('spouse_name'),
        ));
        ?>
    </div>
</div>
<div class="form-group">
    <label for="spouse_occupation" class="<?php echo $label_column; ?>"><?php echo lang('spouse_occupation'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_input(array(
            "id" => "spouse_occupation",
            "name" => "spouse_occupation",
            "value" => $model_info->spouse_occupation,
            "class" => "form-control",
            "placeholder" => lang('spouse_occupation'),
        ));
        ?>
    </div>
</div>

<div class="form-group">
    <label for="date_of_birth_spouse" class="<?php echo $label_column; ?>"><?php echo lang('date_of_birth_spouse'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_input(array(
            "id" => "date_of_birth_spouse",
            "name" => "date_of_birth_spouse",
            "value" => $model_info->date_of_birth_spouse,
            "class" => "form-control",
            "placeholder" => lang('date_of_birth_spouse'),
        ));
        ?>

    </div>
</div>
<div class="form-group">
    <label for="spouse_mobile" class="<?php echo $label_column; ?>"><?php echo lang('spouse_mobile'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_input(array(
            "id" => "spouse_mobile",
            "name" => "spouse_mobile",
            "value" => $model_info->spouse_mobile,
            "class" => "form-control",
            "placeholder" => lang('spouse_mobile'),
        ));
        ?>
    </div>
</div>

<div class="form-group">
    <label for="kid_name" class="<?php echo $label_column; ?>"><?php echo lang('kid_name'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_input(array(
            "id" => "kid_name",
            "name" => "kid_name",
            "value" => $model_info->kid_name,
            "class" => "form-control",
            "placeholder" => lang('kid_name'),
        ));
        ?>
    </div>
</div>

<div class="form-group">
    <label for="date_of_birth_kid" class="<?php echo $label_column; ?>"><?php echo lang('date_of_birth_kid'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_input(array(
            "id" => "date_of_birth_kid",
            "name" => "date_of_birth_kid",
            "value" => $model_info->date_of_birth_kid,
            "class" => "form-control",
            "placeholder" => lang('date_of_birth_kid'),
        ));
        ?>

    </div>
</div>

<div class="form-group">
    <label for="home_phone" class="<?php echo $label_column; ?>"><?php echo lang('home_phone'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_input(array(
            "id" => "home_phone",
            "name" => "home_phone",
            "value" => $model_info->home_phone,
            "class" => "form-control",
            "placeholder" => lang('home_phone'),
        ));
        ?>
    </div>
</div>

<div class="form-group">
    <label for="email_address" class="<?php echo $label_column; ?>"><?php echo lang('email_address'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_input(array(
            "id" => "email_address",
            "name" => "email_address",
            "value" => $model_info->home_phone,
            "class" => "form-control",
            "placeholder" => lang('email_address'),
        ));
        ?>
    </div>
</div>


<div class="form-group">
    <label for="date_of_anniversary" class="<?php echo $label_column; ?>"><?php echo lang('date_of_anniversary'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_input(array(
            "id" => "date_of_anniversary",
            "name" => "date_of_anniversary",
            "value" => $model_info->date_of_anniversary,
            "class" => "form-control",
            "placeholder" => lang('date_of_anniversary'),
        ));
        ?>

    </div>
</div>
<script>
$(document).ready(function () {
setDatePicker("#date_of_birth, #date_of_birth_spouse,#date_of_birth_kid,#date_of_anniversary");
});
</script>