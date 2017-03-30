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
                                        <a href="<?php echo Yii::$app->urlManager->createUrl('main/default/index') ; ?>" id="site-logo"></a>

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
	                                                <a href="<?php echo Yii::$app->urlManager->createUrl('main/default/index') ; ?>">Главная</a>
						</li>
						
						<!-- Nav item - with two tier drop down -->
						<li class="menu-item menu-item-has-children">
	                                                <a href="<?php echo Yii::$app->urlManager->createUrl('main/main/karpaty') ; ?>">Карпаты</a>
						</li>
						
						<!-- Nav item - with two tier drop down -->
						<li class="menu-item menu-item-has-children">
                                                        <a href="<?php echo Yii::$app->urlManager->createUrl('main/main/articls') ; ?>">Полезное</a>
						</li>
						
						<!-- Nav item - with two tier drop down -->
						<li class="menu-item menu-item-has-children">
							<a href="<?php echo Yii::$app->urlManager->createUrl('main/main/questions') ; ?>">Вопросы-ответы</a>
						</li>
						
						<!-- Nav item - single tier drop down -->
						<li class="menu-item menu-item-has-children">
                                                    <a href="<?php echo Yii::$app->urlManager->createUrl('main/main/contact') ; ?>">Заявка</a>
						</li>
                                                
                                                <!-- Nav item - single tier drop down -->
						<li class="menu-item menu-item-has-children">
                                                    <a href="<?php echo Yii::$app->urlManager->createUrl('main/main/discont') ; ?>">Скидки</a>
						</li>
						
					</ul>
				
				</nav>

			</div>
		</div>
	</div>
	
</header>
