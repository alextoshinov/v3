<!-- Main Container Starts -->
<div id="main-container" class="container"> 
<div class="row">
<!-- Primary Content Starts -->
 <div class="col-md-12">
        <!-- Breadcrumb Starts -->
		<?php echo CI::breadcrumbs()->generate(); ?>
	<!-- Breadcrumb Ends -->
<?php if(!empty($category)):?>
    <!-- Main Heading Starts -->
<!--            <h2 class="main-heading2">
                    <?php echo $category->name; ?>
            </h2>-->
    <!-- Main Heading Ends -->
    <?php if(!empty($category->description)):?>
    <!-- Category Intro Content Starts -->
<!--            <div class="row cat-intro">
                <div class="col-sm-9 cat-body">
                        <p>
                           <?php echo (new content_filter($category->description))->display();?>     
                        </p>

                </div>
            </div>					-->
    <!-- Category Intro Content Ends -->
    <?php endif;?>

    <div class="productsFilter product-filter">
        <div class="row">
            <div class="col-md-4">
                    <div class="display">
                            <a href="#">
                                    <i class="fa fa-th-list" title="List View"></i>
                            </a>
                            <a href="#" class="active">
                                    <i class="fa fa-th" title="Grid View"></i>
                            </a>
                    </div>
             </div>
            <div class="col-md-4 pull-right">
                <?php $segments = explode("/", uri_string());?>
                <select id="sort" class="form-control">
                    <option<?php echo(isset($segments[2]) && isset($segments[3]) && $segments[2]=='name' && $segments[3]=='asc')?' selected="selected"':'';?> value="name/asc"><?php echo lang('sort_by_name_asc');?></option>
                    <option<?php echo(isset($segments[2]) && isset($segments[3]) && $segments[2]=='name' && $segments[3]=='desc')?' selected="selected"':'';?>  value="name/desc"><?php echo lang('sort_by_name_desc');?></option>
                    <option<?php echo(isset($segments[2]) && isset($segments[3]) && $segments[2]=='price' && $segments[3]=='asc')?' selected="selected"':'';?>  value="price/asc"><?php echo lang('sort_by_price_asc');?></option>
                    <option<?php echo(isset($segments[2]) && isset($segments[3]) && $segments[2]=='price' && $segments[3]=='desc')?' selected="selected"':'';?>  value="price/desc"><?php echo lang('sort_by_price_desc');?></option>
                </select>
            </div>
            <div class="col-md-2 text-right">
		<label class="control-label"><?php echo lang('sort'); ?></label>
            </div>
        </div>
    </div> 

<?php endif;
    
    include(__DIR__.'/products.php');?>

    <nav>
        <ul class="pagination">
            <?php echo CI::pagination()->create_links();?>
        </ul>
        
    </nav>
 </div>

<?php //include(__DIR__.'/sidebar.php');?>
        </div>  
</div>
<!-- Main Container Ends -->
<script type="text/javascript">
$(function() {
    $("#sort").change(function () {
        <?php 
              if(isset($segments[2])) 
              {
                  unset($segments[2]);
              }
              //
              if(isset($segments[3])) 
              {
                  unset($segments[3]);
              }
              //
              if(isset($segments[4])) 
              {
                  unset($segments[4]);
              }
              $uri_string = implode("/", $segments);
        ?>
        window.location = '<?php echo site_url($uri_string); ?>/'+this.value;
    });
});
</script>