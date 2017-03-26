



<div id="main-content" class="edge-padding">
	
	<!-- page content -->
	<div class="page-section single-blog">
		<section class="single-blog-main">
			<div class="container">
				
				<div class="row">
				
					<div class="col-xlarge-8 col-medium-8">
					
						<!-- post image -->
						<img src="/source/img/post_placeholder_1.jpg" alt="" class="single-image image" />
						
						<!-- post title -->
						<div class="single-blog-title">
							<h2 class="font-reg" style="text-transform:uppercase">ТУРИСТИЧЕСКИЙ ПОХОД К "<?php echo $itinerary->name?> "</h2>
							<p class="font-reg"><?php echo $itinerary->road?> </p>
                                                        <br>
                                                        <div class="row">
                                                        <p class="col-xlarge-3 col-medium-3">Продолжительность: </p>
                                                        <p class="col-xlarge-3 col-medium-3" style="right:20px"><?php echo $itinerary->lenth?> </p>
                                                        </div>
                                                        <div class="row">
                                                        <p class="col-xlarge-3 col-medium-3">Сложность: </p>
                                                        <p class="col-xlarge-3 col-medium-3" style="right:20px"> <?php echo $itinerary->complexity?> </p>
                                                        </div>
                                                        <div class="row">
                                                        <p class="col-xlarge-3 col-medium-3">Стоимость: </p>
                                                        <p class="col-xlarge-3 col-medium-3" style="right:20px">  <?php echo $itinerary->price?> грн.</p>
                                                        </div>
                                                        <br>
						</div>
						
						<!-- post content -->
						<div class="page-content single-blog-content">
							<?php echo $itinerary->description?>
						</div>
                                                <br>
                                                <div class="page-content single-blog-content">
                                                    <?php foreach($road as $day) :?>
                                                    <p> <?php echo $day->day_number ?><span>-й день:</span><?php echo " " . $day->road ?> </p>
                                                        <img src="<?php echo $day->img1 ?>" alt="" class="col-xlarge-4 col-medium-4" style="padding:initial; border-right:2px solid white"  />
                                                        <img src="<?php echo $day->img2 ?>" alt="" class="col-xlarge-4 col-medium-4" style="padding:initial;  border-right:1px solid white; border-left:1px solid white"/> 
                                                        <img src="<?php echo $day->img3 ?>" alt="" class="col-xlarge-4 col-medium-4" style="padding:initial; border-left:2px solid white" /> 
                                                        <p> <?php echo $day->description ?> </p>
                                                        <br>
                                                    <?php endforeach ;?>
                                                </div>
					</div>
					
					
					<!-- post sidebar -->
					<div class="col-xlarge-4 col-medium-4 post-sidebar right-sidebar">
						
						<!-- posts widget example -->
						<div class="sidebar-widget posts-widget">
							<h3 class="font-reg">Latest Posts</h3>
							<ul>
							
								<li>
									<a href="">
										<div class="row">
											<div class="col-xlarge-5 col-medium-4 col-small-5">
												<img src="assets/img/post_placeholder_1.jpg" alt="" class="image" />
											</div>
											<div class="col-xlarge-7 col-medium-8 col-small-7">
												<h4 class="font-reg">Post title</h4>
												<p>28 March 2016</p>
											</div>
										</div>
									</a>
								</li>
								
								<li>
									<a href="">
										<div class="row">
											<div class="col-xlarge-5 col-medium-4 col-small-5">
												<img src="assets/img/post_placeholder_2.jpg" alt="" class="image" />
											</div>
											<div class="col-xlarge-7 col-medium-8 col-small-7">
												<h4 class="font-reg">Post title</h4>
												<p>28 March 2016</p>
											</div>
										</div>
									</a>
								</li>
								
								<li>
									<a href="">
										<div class="row">
											<div class="col-xlarge-5 col-medium-4 col-small-5">
												<img src="assets/img/post_placeholder_3.jpg" alt="" class="image" />
											</div>
											<div class="col-xlarge-7 col-medium-8 col-small-7">
												<h4 class="font-reg">Post title</h4>
												<p>28 March 2016</p>
											</div>
										</div>
									</a>
								</li>
								
							</ul>
						</div>
						
						<!-- list widget example -->
						<div class="sidebar-widget list-widget">
							<h3 class="font-reg">Categories</h3>
							<ul class="font-reg">
								<li><a href="">Travelling</a></li>
								<li><a href="">Photography</a></li>
								<li><a href="">Landscapes</a></li>
								<li><a href="">Lifestyle</a></li>
							</ul>
						</div>
						
						<!-- social widget -->
						<div class="sidebar-widget social-widget">
							<h3 class="font-reg">Follow</h3>
							<ul>
								<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						
						<!-- text widget -->
						<div class="sidebar-widget font-reg social-widget">
							<h3 class="font-reg">Text</h3>
							<div class="textwidget">Interchangeable sidebar widgets which can be used on any page or post. Create the sidebar you want using the pre-styled widgets or create your own.</div>
						</div>
						
						<!-- image widget -->
						<div class="sidebar-widget font-reg social-widget">
							<h3 class="font-reg">Image</h3>
							<img src="assets/img/portfolio_placeholder_1.jpg" alt="" class="image"/>
						</div>
						
						<!-- tag cloud widget -->
						<div class="sidebar-widget font-reg widget_tag_cloud">
							<h3 class="font-reg">Tags</h3>
							<div class="tagcloud">
								<a href="">Travelling</a>
								<a href="">Photography</a>
								<a href="">Landscapes</a>
								<a href="">Lifestyle</a>
							</div>
						</div>	
						
						<!-- search widget -->
						<div class="sidebar-widget font-reg search-widget">
							<h3 class="font-reg">Search</h3>
							<form>
								<div>
									<input type="text" value="">
									<input type="submit" id="searchsubmit" value="Search">
								</div>
							</form>
						</div>			
						
					</div>
				
				</div>
				
			</div>
			
		</section>
	</div>

</div>


