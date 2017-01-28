<!-- Slider Section begin -->
	<?php echo (new content_filter("{{ banner('2', '2', 'slider') }}"))->display(); ?>
<!-- Slider Section end -->
<!-- Latest Products begin -->
    <?php echo (new content_filter("{{ product('novikolekcii','12','latest_products') }}"))->display(); ?>
    <?php //echo (new content_filter("{{ category('belio','10','latest','shortcode') }}"))->display(); ?>
<!-- Latest Products End -->
<!-- 3 Column Banners begin -->
	<?php echo (new content_filter("{{ banner('1', '3', '3_box_row') }}"))->display(); ?>
<!-- 3 Column Banners end -->
<!-- Featured Products begin -->
	
<!-- Featured Products end -->
<!-- 1 Column Banners begin -->
	<?php echo (new content_filter("{{ banner('3', '1', '1_box_row') }}"))->display(); ?>
<!-- 1 Column Banners end -->





