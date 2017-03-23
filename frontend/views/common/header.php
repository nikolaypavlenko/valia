<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\web\UrlManager;

?>

<!-- header -->
<header>
	
	<div class="header-main clearfix edge-padding header-narrow">
		<div class="header-main-inside">
			<div class="container clearfix">
			
				<div class="medium-header-container">
					<!-- Site logo -->
					<a href="index.html" id="site-logo"> </a>
					<!-- Mobile burger icon -->
					<div id="mobile-nav-button">
						<div id="mobile-nav-icon">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</div>
				
				<!-- header nav menu -->
				<nav id="header-nav">
				
					<ul id="nav-ul" class="menu font-reg clearfix">
						
						<!-- Nav item - with two tier drop down -->
						<li class="menu-item menu-item-has-children">
	                                                <a href="<?php echo Yii::$app->urlManager->createUrl('main/main/index') ; ?>">Главная</a>
							
						</li>
						
						<!-- Nav item - with two tier drop down -->
						<li class="menu-item menu-item-has-children">
	                                                <a href="<?php echo Yii::$app->urlManager->createUrl('main/main/karpaty') ; ?>">Карпаты</a>
						</li>
						
						<!-- Nav item - with two tier drop down -->
						<li class="menu-item menu-item-has-children">
							<a href="about-1.html">About<span class="sub-drop-icon fa fa-angle-down"></span></a>
							<ul class="sub-menu sub-menu-first">
								<li><a href="about-1.html">About 1</a></li>
								
								<li class="menu-item menu-item-has-children">
									<a href="about-2.html">About 2<span class="sub-drop-icon sub-second-drop fa fa-angle-down"></span></a>
									<ul class="sub-menu sub-second-tier">
										<li><a href="about-2-header.html">W/ Page header</a></li>
									</ul>
								</li>
								
							</ul>
						</li>
						
						<!-- Nav item - with two tier drop down -->
						<li class="menu-item menu-item-has-children">
							<a href="blog-Rsidebar.html">Blog<span class="sub-drop-icon fa fa-angle-down"></span></a>
							<ul class="sub-menu sub-menu-first">
								<li><a href="blog-Rsidebar.html">Right sidebar</a></li>
								<li><a href="blog-Lsidebar.html">Left sidebar</a></li>
								<li><a href="blog-Nsidebar.html">No sidebar</a></li>
								<li><a href="blog-wide.html">Wide item</a></li>
								<li><a href="blog-grid.html">Grid layout</a></li>
								<li><a href="blog-header.html">W/ Page header</a></li>
								
								<li class="menu-item menu-item-has-children">
									<a href="single-blog-1.html">Single blog<span class="sub-drop-icon sub-second-drop fa fa-angle-down"></span></a>
									<ul class="sub-menu sub-second-tier">
										<li><a href="single-blog-1.html">Right sidebar</a></li>
										<li><a href="single-blog-2.html">Left sidebar</a></li>
										<li><a href="single-blog-3.html">No sidebar</a></li>
										<li><a href="single-blog-4.html">Slideshow post</a></li>
										<li><a href="single-blog-5.html">Video post</a></li>
										<li><a href="single-blog-6.html">W/ Page header</a></li>
									</ul>
								</li>
								
							</ul>
						</li>
						
						<!-- Nav item - single tier drop down -->
						<li class="menu-item menu-item-has-children">
							<a href="portfolio-1.html">Portfolio<span class="sub-drop-icon fa fa-angle-down"></span></a>
							<ul class="sub-menu sub-menu-first">
								<li><a href="portfolio-1.html">Original</a></li>
								<li><a href="portfolio-2.html">Grid - 4 column</a></li>
								<li><a href="portfolio-3.html">Grid - 3 column</a></li>
								<li><a href="portfolio-4.html">Grid - 2 column</a></li>
								<li><a href="single-portfolio-1.html">Single portfolio 1</a></li>
								<li><a href="single-portfolio-2.html">Single portfolio 2</a></li>
							</ul>
						</li>
						
						<!-- Nav item - single tier drop down -->
						<li class="menu-item menu-item-has-children">
                                                    <a href="<?php echo Yii::$app->urlManager->createUrl('main/main/contact') ; ?>">Заявка</a>

							
						</li>
						
					</ul>
				
				</nav>

			</div>
		</div>
	</div>
	
</header>
