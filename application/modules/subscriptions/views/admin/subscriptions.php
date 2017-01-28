<?php pageHeader(lang('subscriptions')) ?>

<table class="table table-striped">
    <thead>
        <tr>
            <th><?php echo lang('name');?></th>
            <th><?php echo lang('email');?></th>
            <th><?php echo lang('phone');?></th>
            <th><?php echo lang('message');?></th>
            <th></th>
        </tr>
    </thead>
    <?php echo (count($subscriptions) < 1)?'<tr><td style="text-align:center;" colspan="5">'.lang('no_banner_collections').'</td></tr>':''?>
    <?php if ($subscriptions): ?>
    <tbody>
    <?php

    foreach ($subscriptions as $subscription):?>
        <tr>
            <td><?php echo $subscription->name;?></td>
            <td><?php echo $subscription->email;?></td>
            <td><?php echo $subscription->phone;?></td>
            <td><?php echo $subscription->message;?></td>
            <td class="text-right">
                <div class="btn-group">                                        
                    <a class="btn btn-danger" href="<?php echo site_url('admin/subscriptions/delete_subscription/'.$subscription->id);?>" onclick="return areyousure();"><i class="icon-times "></i></a>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    <?php endif;?>
</table>

<script type="text/javascript">
function areyousure(){
    return confirm('<?php echo lang('confirm_delete_subscription');?>');
}
</script>

