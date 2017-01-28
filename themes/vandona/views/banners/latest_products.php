<?php if(isset($products['products']) && !empty($products['products'])):?> 
	<section class="product-carousel">			
		<div class="container">
		<!-- Heading begin -->
			<h2 class="product-head">Последни модели</h2>
		<!-- Heading end -->
		<!-- Products Row begin -->
			<div class="row">
                            <?php //echo '<pre>'; print_r($products);exit;?>
				<div class="col-xs-12">
				<!-- Product Carousel begin -->
					<div id="owl-product" class="owl-carousel">
                                          
                                        <?php $i=1; foreach($products['products'] as $product):?>
                                            <?php
                                                $photo  = theme_img('no_picture.png');

                                                if(!empty($product->images[0]))
                                                {
                                                    $primary    = $product->images[0];
                                                    foreach($product->images as $photo)
                                                    {
                                                        if(isset($photo['primary']))
                                                        {
                                                            $primary    = $photo;
                                                        }
                                                    }

                                                    $photo  = base_url('uploads/images/medium/'.$primary['filename']);
                                                }
                                                ?>
					<!-- Product #<?=$i;?> begin -->
						<div class="item">
							<div class="product-col">
								<div class="image">
                                                                    <a href="<?php echo site_url('/product/'.$product->slug); ?>"><img src="<?php echo $photo;?>" alt="<?php echo $product->name;?>" class="img-responsive" /></a>
								</div>
								<div class="caption">
									<h4><a href="<?php echo site_url('/product/'.$product->slug); ?>"><?php echo $product->name;?></a></h4>
									<div class="description">
										
									</div>
									<?php if(!$product->is_giftcard): //do not display this if the product is a giftcard?>
                                                                        <div class="price">
                                                                                <span class="price-new"> <?php echo ( $product->saleprice>0?format_currency($product->saleprice):format_currency($product->price) );?></span> 
                                                                        </div>
                                                                        <?php endif;?>
									<div class="cart-button button-group">
<!--										<button type="button" title="Wishlist" class="btn btn-wishlist">
											<i class="fa fa-heart"></i>
										</button>
										<button type="button" title="Compare" class="btn btn-compare">
											<i class="fa fa-bar-chart-o"></i>
										</button>-->
                                                                        <?php if((bool)$product->track_stock && $product->quantity < 1 && config_item('inventory_enabled')):?>
                                                                            <div class="categoryItemNote yellow"><?php echo lang('out_of_stock');?></div>
                                                                        <?php elseif($product->saleprice > 0):?>
                                                                            <div class="categoryItemNote red"><?php echo lang('on_sale');?></div>
                                                                        <?php endif;?>
                                                                            <a href="<?php echo site_url('/product/'.$product->slug); ?>" type="button" class="btn btn-cart">
                                                                                <i class="icon-cart"></i> <?php echo lang('form_add_to_cart');?>
                                                                            </a>									
									</div>									
								</div>
							</div>
						</div>
					<!-- Product #<?=$i;?> end -->
					<?php $i++; endforeach;?>
                                           
					</div>
				<!-- Product Carousel end -->
				</div>
			</div>
		<!-- Products Row end -->
		</div>
	</section>
<?php endif;?> 
