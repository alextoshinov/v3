<!-- Main Container Starts -->
<div id="main-container" class="container">
    <h2 class="main-heading text-center">
        <?php echo lang('forgot_password');?>
    </h2>

    <?php if(validation_errors()):?>
        <div class="alert red">
            <?php echo validation_errors();?>
        </div>
    <?php endif;?>

    <?php echo form_open('forgot-password','class="form-inline" role="form"'); ?>
        <div class="form-group">
            <label class="sr-only" for="email"><?php echo lang('email');?></label>
            <input type="text" name="email" class="form-control"  placeholder="<?php echo lang('email');?>"/>

            <input type="hidden" value="submitted" name="submitted"/>

            <input type="submit" value="<?php echo lang('reset_password');?>" class="btn btn-main"/>
        </div>
    </form>

    <div style="text-align:center;">
        <a href="<?php echo site_url('login'); ?>"><?php echo lang('return_to_login');?></a>
    </div>
</div><!-- Main Container Ends -->