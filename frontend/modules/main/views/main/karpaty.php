<?php
use yii\helpers\Url;

?>
<div id="main-content" class="edge-padding">
	
	<!-- Portfolio section -->
	<section class="portfolio-section page-section">
		
		<div class="container">

                    <img src="/source/img/featured_placeholder_1.jpg" class="image" alt="" />
                    <br><br>
                    
                    <div class="row">
			
				<div class="col-xlarge-9 single-portfolio-left">
				
					<h1 class="font-reg">ПЕШИЕ МАРШРУТЫ ПО КАРПАТАМ</h1>
                                        <br>
					<div class="page-content">
						<p>Украинские Карпаты... При этих словах в сердце начинает звучать когда-то услышанная гуцульская мелодия о волшебном и удивительном крае. Крае высоких гор и полонин с шелковой травой; крае, где стройные ели и звонкие потоки рек; крае, где переплелись давние легенды и быль. Природа Карпат не только восхитительно красива, но и сурова. Внезапные изменения погоды здесь – явление не редкое.
                                                    А потрясающие пейзажи Черногорского и Свидовецкого хребтов, Горган, Полонины Боржавы оставят незабываемые впечатления.</p>
						<p>Туристический поход в Карпаты – это памятное приключение с бесподобными видами и новыми друзьями. Мы предлагаем походы от трех до шести дней. 
                                                    Для желающих можем подобрать индивидуальный маршрут.</p>
					</div>
				</div>
                                <div class="col-xlarge-3" style="left: 21px">
					<div class="datepicker-here" ></div>
				</div>
                        
                    </div>  
                    
                     <!-- Portfolio filter -->
                    <div class="row">
                                <ul id="portfolio-item-filter" class="font-reg clearfix">
                                        <li><a href="#" class="active" data-filter="*">ВСЕ МАРШРУТЫ</a></li>
                                        <li><a href="#" data-filter=".design">3-х дневные</a></li>
                                        <li><a href="#" data-filter=".photography">6-ти дневные</a></li>
                                        <li><a href="#" data-filter=".print-design"></a></li>
                                 </ul>
                    </div>
	
			<!-- portfolio item list -->
			<ul id="portfolio-items" class="row clearfix">
			
				<!-- portfolio item example 1 -->
				
                                <?php  foreach ($listKarpaty as $karpaty) :?> 
                                    <li class="col-xlarge-3 col-medium-3 <?php echo $karpaty->duration ?>">
                                            <a href="<?php echo Yii::$app->urlManager->createUrl(['main/main/itinerary', 'id' => $karpaty->id]) ; ?> "  class="portfolio-item">
                                                    <img src="<?php echo $karpaty->photo ?>" class="image" alt="" />
                                                    <!-- portfolio item hover -->
                                                    <div class="portfolio-hover">
                                                            <div class="portfolio-hover-content font-reg">
                                                                <h5 style="text-transform: uppercase; letter-spacing: 2px"><?php echo $karpaty->name ?> </h5>
                                                                    <p>подробнее</p>
                                                            </div>
                                                    </div>
                                            </a>
                                    </li>
                                <?php endforeach ; ?> 

			</ul>
		
		</div>
		
	</section>

</div>