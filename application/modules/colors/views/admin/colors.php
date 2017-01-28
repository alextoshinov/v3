<?php pageHeader(lang('colors')) ?>
<div class="text-right">
    <a class="btn btn-primary" href="<?php echo site_url('admin/colors/color_form'); ?>"><i class="icon-plus"></i> <?php echo lang('add_new_color');?></a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th><?php echo lang('name');?></th>
            <th><?php echo lang('color');?></th>
            <th><?php echo lang('hex');?></th>
            <th></th>
        </tr>
    </thead>
    <?php echo (count($colors) < 1)?'<tr><td style="text-align:center;" colspan="5">'.lang('no_banner_collections').'</td></tr>':''?>
    <?php if ($colors): ?>
    <tbody>
    <?php

    foreach ($colors as $color):?>
        <tr>
            <td><?php echo $color->name;?></td>
            <td style="background-color: <?php echo $color->color;?>;">&nbsp;</td>
            <td><?php echo $color->color;?></td>
            <td class="text-right">
                <div class="btn-group">                                        
                    <a class="btn btn-default" href="<?php echo site_url('admin/colors/color_form/'.$color->id);?>"><i class="icon-pencil"></i></a>
                    <a class="btn btn-danger" href="<?php echo site_url('admin/colors/delete_color/'.$color->id);?>" onclick="return areyousure();"><i class="icon-times "></i></a>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    <?php endif;?>
</table>

<script type="text/javascript">
function areyousure(){
    return confirm('<?php echo lang('confirm_delete_color');?>');
}
</script>

