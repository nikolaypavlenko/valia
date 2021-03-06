<?php

use frontend\models\Schedule;
use yii\helpers\Url;

?>

<div id="main-content" class="edge-padding">

	<!-- featured section -->
	<section >
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                <!-- Обгортка для слайдів -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="/frontend/web/source/img/featured_placeholder_2.jpg" alt="...">
                          <div class="carousel-caption" style="top: 222px">
                              <p> ОВЕЯННЫЙ ЛЕГЕНДАМИ КРАЙ </p>
                              <br>
                              <a href="single-blog-1.html" class="primary-button font-reg hov-bk">Подробнее</a>
                              <p> </p>
                          </div>
                        </div>
                        <div class="item">
                          <img src="/frontend/web/source/img/featured_placeholder_3.jpg" alt="...">
                          <div class="carousel-caption" style="top: 222px">
                              <p>ВАЛЯ ВПЕРЕД</p>
                              <br>
                            <a href="single-blog-1.html" class="primary-button font-reg hov-bk">Подробнее</a>
                          </div>
                        </div>
                        <div class="item">
                          <img src="/frontend/web/source/img/featured_placeholder_1.jpg" alt="...">
                          <div class="carousel-caption" style="top: 222px">
                              <p>ВАЛЯ ЧУДО</p>
                              <br>
                           <a href="single-blog-1.html" class="primary-button font-reg hov-bk">Подробнее</a>
                          </div>
                        </div>
                    </div>

                    <!-- Управління -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Попередній</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Наступний</span>
                    </a>
                </div>
		
	</section>
	
	
	<!-- home blog section -->
	<section class="blog-section page-section">
		<div class="container">
		
			<div class="row">
				
				<div class="col-xlarge-8 col-medium-8">
				
					<ul class="blog-list">
					
						<!-- Wide blog item example -->
						<li>
							<div class="blog-item wide-blog-item">
								<a href="single-blog-1.html"><img src="source/img/post_placeholder_1.jpg" alt="" class="image" /></a>
								<h3 class="font-reg"><a href="">A Winters Morning</a></h3>
								<div class="blog-item-meta">
									<span>28 March 2016</span>
								</div>
								<div class="page-content">
									<p>Nogami – группа туристов-единомышленников, любящих природу и активный отдых. Мы работаем для людей, которые хотят сходить в поход, но не готовы идти в одиночку или уже собрали друзей, но не могут найти проводника. 
                                                                            Можем организовать и провести любой туристический поход по Крыму или Карпатам 
                                                                            в удобное для вас время. Для человека, который никогда не был в походе, но хочет попробовать свои силы, предусмотрены трехдневные походы легкой и средней сложности. Для желающих вырваться из обыденности и городской 
                                                                            суеты на более длительный срок предлагаем шестидневные походы. На нашем сайте вы найдете график и описание маршрутов, ответы на вопросы, связанные с подготовкой к походу, полезные статьи, информацию о скидках. Если в одну из ночей вам вдруг 
                                                                            станет тесно в четырех стенах, и вы захотите еще раз в своей жизни (а может быть и в первый раз) увидеть горы – обращайтесь к нам.
                                                                            Nogami. Мы знаем куда идем.
                                                                        </p>
								</div>
								<a href="single-blog-1.html" class="primary-button font-reg hov-bk">Подробнее</a>
							</div>
						</li>
						
						<!-- Small blog item example -->
						<li>
							<div class="blog-item">
								<div class="row">
									<div class="col-xlarge-5 col-medium-4">
										<a href="single-blog-1.html"><img src="source/img/post_placeholder_2.jpg" alt="" class="image" /></a>
									</div>
									<div class="col-xlarge-7 col-medium-8">
										<h3 class="font-reg"><a href="">Woodland adventure</a></h3>
										<div class="blog-item-meta">
											<span>28 March 2016</span>
										</div>
										<div class="page-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque nibh enim, quis euismod enim lacinia nec. Phasellus quam diam, semper in erat eu, efficitur molestie purus.</p>
										</div>
										<a href="single-blog-1.html" class="primary-button font-reg hov-bk">Подробнее</a>
									</div>
								</div>
							</div>
						</li>
						
						<!-- Small blog item example -->
						<li>
							<div class="blog-item">
								<div class="row">
									<div class="col-xlarge-5 col-medium-4">
										<a href="single-blog-1.html"><img src="source/img/post_placeholder_3.jpg" alt="" class="image" /></a>
									</div>
									<div class="col-xlarge-7 col-medium-8">
										<h3 class="font-reg"><a href="">Exploring with Penguins</a></h3>
										<div class="blog-item-meta">
											<span>28 March 2016</span>
										</div>
										<div class="page-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque nibh enim, quis euismod enim lacinia nec. Phasellus quam diam, semper in erat eu, efficitur molestie purus.</p>
										</div>
										<a href="single-blog-1.html" class="primary-button font-reg hov-bk">Подробнее</a>
									</div>
								</div>
							</div>
						</li>
						
						<!-- Small blog item example -->
						<li>
							<div class="blog-item">
								<div class="row">
									<div class="col-xlarge-5 col-medium-4">
										<a href="single-blog-1.html"><img src="source/img/post_placeholder_4.jpg" alt="" class="image" /></a>
									</div>
									<div class="col-xlarge-7 col-medium-8">
										<h3 class="font-reg"><a href="">Sunset at the beach</a></h3>
										<div class="blog-item-meta">
											<span>28 March 2016</span>
										</div>
										<div class="page-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque nibh enim, quis euismod enim lacinia nec. Phasellus quam diam, semper in erat eu, efficitur molestie purus.</p>
										</div>
										<a href="single-blog-1.html" class="primary-button font-reg hov-bk">Подробнее</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
				<!-- post sidebar -->
				<div class="col-xlarge-4 col-medium-4 post-sidebar right-sidebar">
					
                                        <!-- schedul -->
                                    <?php  for($k = 5; $k < 10; $k++) : ?>    
                                        <?php foreach ($period as $key => $item) : ?>
                                            <?php if ($key == $k)   :?>
                                                <div class="panel panel-default">
                                                        <!-- Default panel contents -->
                                                    <div class="panel-heading" style="padding: 3px 0px 3px 35px;"><?php echo $item ?></div>
                                                    <?php foreach ($schedule as $row) : ?>
                                                        <?php if ($key == Schedule::functionMounth($row->begin)) :?>
                                                           <!-- Table -->
                                                            <table class="table">
                                                                 <tr>
                                                                     <td style="padding: 3px 0px 0px 0px; width:78px"><?php echo "&nbsp;" . Schedule::functionDate($row->begin) . "-" ?><?php echo Schedule::functionDate($row->end)  ?></td>
                                                                     <td style="padding: 3px 0px 0px 0px;"> 
                                                                         <a href="<?php echo Yii::$app->urlManager->createUrl(['main/main/itinerary', 'id' => $row->karpaty->id]); ?> " >
                                                                             <?php echo $row->karpaty->name ?> 
                                                                         </a>
                                                                     </td>
                                                                     <td style="padding: 3px 0px 0px 0px; text-align:right "> <?php echo $row->length . "&nbsp;" ?></td>
                                                                 </tr>
                                                             </table>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif ;?>
                                        <?php endforeach ;?>
                                    <?php endfor ; ?>
                                        
                                        <div  style="left: 21px">
                                            <div class="datepicker-here" ></div>
                                        </div>
                                    
					<!-- posts widget example -->
					<div class="sidebar-widget posts-widget">
						<h3 class="font-reg">Latest Posts</h3>
						<ul>
						
							<li>
								<a href="">
									<div class="row">
										<div class="col-xlarge-5 col-medium-4 col-small-5">
											<img src="source/img/post_placeholder_1.jpg" alt="" class="image" />
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
											<img src="source/img/post_placeholder_2.jpg" alt="" class="image" />
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
											<img src="source/img/post_placeholder_3.jpg" alt="" class="image" />
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
							<li><a href="#" target="_blank"><i class="fa fa-vkontacte"></i></a></li>
							
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
						<img src="source/img/portfolio_placeholder_1.jpg" alt="" class="image"/>
					</div>
					
					
					
				</div>
			
			</div>

		</div>
	</section>
	
	
</div>