<div class="form-group">
    <label for="facebook" class="<?php echo $label_column; ?>"><?php echo lang('facebook'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_input(array(
            "id" => "facebook",
            "name" => "facebook",
            "value" => $model_info->facebook,
            "class" => "form-control",
            "placeholder" => lang('facebook'),
            "autofocus" => true,
        ));
        ?>
    </div>
</div>
<div class="form-group">
    <label for="hobbies" class="<?php echo $label_column; ?>"><?php echo lang('hobbies'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_textarea(array(
            "id" => "hobbies",
            "name" => "hobbies",
            "value" => $model_info->hobbies ? $model_info->hobbies : "",
            "class" => "form-control",
            "placeholder" => lang('hobbies')
        ));
        ?>

    </div>
</div>

<div class="form-group">
    <label for="sports_teams" class="<?php echo $label_column; ?>"><?php echo lang('sports_teams'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_textarea(array(
            "id" => "sports_teams",
            "name" => "sports_teams",
            "value" => $model_info->sports_teams ? $model_info->sports_teams : "",
            "class" => "form-control",
            "placeholder" => lang('sports_teams')
        ));
        ?>

    </div>
</div>
<div class="form-group">
    <label for="favourite_restaurant" class="<?php echo $label_column; ?>"><?php echo lang('favourite_restaurant'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_input(array(
            "id" => "favourite_restaurant",
            "name" => "favourite_restaurant",
            "value" => $model_info->favourite_restaurant,
            "class" => "form-control",
            "placeholder" => lang('favourite_restaurant'),
        ));
        ?>
    </div>
</div>
<div class="form-group">
    <label for="other_favourites" class="<?php echo $label_column; ?>"><?php echo lang('other_favourites'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_textarea(array(
            "id" => "other_favourites",
            "name" => "other_favourites",
            "value" => $model_info->other_favourites ? $model_info->other_favourites : "",
            "class" => "form-control",
            "placeholder" => lang('other_favourites')
        ));
        ?>

    </div>
</div>
<div class="form-group">
    <label for="dreams" class="<?php echo $label_column; ?>"><?php echo lang('dreams'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_textarea(array(
            "id" => "dreams",
            "name" => "dreams",
            "value" => $model_info->dreams ? $model_info->dreams : "",
            "class" => "form-control",
            "placeholder" => lang('dreams')
        ));
        ?>

    </div>
</div>
<div class="form-group">
    <label for="other_real_estate" class="<?php echo $label_column; ?>"><?php echo lang('other_real_estate'); ?></label>
    <div class="<?php echo $field_column; ?>">
        <?php
        echo form_textarea(array(
            "id" => "other_real_estate",
            "name" => "other_real_estate",
            "value" => $model_info->other_real_estate ? $model_info->other_real_estate : "",
            "class" => "form-control",
            "placeholder" => lang('other_real_estate')
        ));
        ?>

    </div>
</div>
