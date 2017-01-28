<?php pageHeader(lang('subscription_form')); ?>

<?php echo form_open_multipart('admin/subscriptions/subscription_form/'.$id); ?>
    <div class="form-group">
        <label for="name" class="control-label"><?php echo lang('name');?> </label>
        <?php echo form_input(['name'=>'name', 'value' => assign_value('name', $name), 'class'=>'form-control']); ?>
    </div>

    <div class="form-group subscriptionsSelect">
        <label for="subscription" class="control-label"><?php echo lang('subscription');?> </label>
        <?php echo form_input(['data-format'=>'hex','name'=>'subscription', 'value' => assign_value('subscription', $subscription), 'id'=>'subscriptions', 'class'=>'form-control']); ?>
        <span class="input-group-addon"><i></i></span>
    </div>

    <input class="btn btn-primary" type="submit" value="<?php echo lang('save');?>"/>

</form>
<script>
    $('form').submit(function() {
        $('.btn .btn-primary').attr('disabled', true).addClass('disabled');
    });
    $('.subscriptionsSelect').colorpicker({
            'format':'hex'
        });
</script>
