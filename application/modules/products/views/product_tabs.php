<!-- Tabs Starts -->
		<div class="tabs-panel panel-smart">
		<!-- Nav Tabs Starts -->
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#tab-description">Описание</a>
				</li>
				<li>
					<a href="#tab-specification">Facebook приятели</a>
				</li>
				<li><a href="#tab-ainfo">Additional Information</a></li>
				<li><a href="#tab-review">Преглед</a></li>
			</ul>
		<!-- Nav Tabs Ends -->
		<!-- Tab Content Starts -->
			<div class="tab-content clearfix">
			<!-- Description Starts -->
				<div class="tab-pane active" id="tab-description">
                                    <p>
                                        <?php echo (new content_filter($product->description))->display();?>
                                    </p>					
				</div>
			<!-- Description Ends -->
			<!-- Specification Starts -->
				<div class="tab-pane" id="tab-specification">
					<div class="fb-like" data-href="<?php echo site_url('/product/'.$product->slug); ?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
				</div>
			<!-- Specification Ends -->
			<!-- Additional Information Starts -->
				<div class="tab-pane" id="tab-ainfo">
                                    <p>
                                        
                                    </p>
				</div>
			<!-- Additional Information Ends -->
			<!-- Review Starts -->
				<div class="tab-pane" id="tab-review">
					<form class="form-horizontal">
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-name">Име</label>
							<div class="col-sm-10">
							<input type="text" name="name" value="" id="input-name" class="form-control" />
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-review">Мнение</label>
							<div class="col-sm-10">
								<textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
								<div class="help-block">
									Напиши няколко реда ...
								</div>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label ratings">Рейтинг за този продукт</label>
							<div class="col-sm-10">
								лош&nbsp;
								<input type="radio" name="rating" value="1" />
								&nbsp;
								<input type="radio" name="rating" value="2" />
								&nbsp;
								<input type="radio" name="rating" value="3" />
								&nbsp;
								<input type="radio" name="rating" value="4" />
								&nbsp;
								<input type="radio" name="rating" value="5" />
								&nbsp;отлично
							</div>
						</div>
						<div class="buttons">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="button" id="button-review" class="btn btn-main">
									Изпрати
								</button>
							</div>
						</div>
					</form>
				</div>
			<!-- Review Ends -->
			</div>
		<!-- Tab Content Ends -->
		</div>
	<!-- Tabs Ends -->
