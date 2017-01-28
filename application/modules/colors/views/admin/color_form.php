<?php pageHeader(lang('color_form')); ?>

<?php echo form_open_multipart('admin/colors/color_form/'.$id); ?>
    <div class="form-group">
        <label for="name" class="control-label"><?php echo lang('name');?> </label>
        <?php echo form_input(['name'=>'name', 'value' => assign_value('name', $name), 'class'=>'form-control']); ?>
    </div>

    <div class="form-group colorSelect">
        <label for="color" class="control-label"><?php echo lang('color');?> </label>
        <?php echo form_input(['data-format'=>'hex','name'=>'color', 'value' => assign_value('color', $color), 'id'=>'color', 'class'=>'form-control']); ?>
        <span class="input-group-addon"><i></i></span>
    </div>

    <input class="btn btn-primary" type="submit" value="<?php echo lang('save');?>"/>

</form>
<script>
    $('form').submit(function() {
        $('.btn .btn-primary').attr('disabled', true).addClass('disabled');
    });
    $('.colorSelect').colorpicker({
            'format':'hex'
        });
</script>
