<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>




<div id="main-content" class="edge-padding">
	
	<!-- Contact page main -->
	<section class="page-section contact-page">
		<div class="container">
                       
			<!-- contact page text + image -->
			<div class="row contact-page-text">
		
				<div class="col-xlarge-5 col-medium-6">
				
					<h1 class="font-reg">Contact</h1>
					
					<div class="page-content">
						<p>Integer pretium posuere est. Ut interdum mollis ipsum, ac vehicula nisl laoreet et. Curabitur ac ipsum aliquam, varius purus at, lobortis purus. Maecenas quis sem dapibus, volutpat odio non, mattis dui. Nam eget urna nec mi tempor mollis vel nec felis. Cras tellus est, malesuada at leo vitae, lacinia pellentesque eros. Donec accumsan tincidunt velit.</p>
						<p>Integer pretium posuere est. Ut interdum mollis ipsum, ac vehicula nisl laoreet et. Curabitur ac ipsum aliquam, varius purus at, lobortis purus. Maecenas quis sem dapibus, volutpat odio non, mattis dui. Nam eget urna nec mi tempor mollis vel nec felis. Cras tellus est, malesuada at leo vitae, lacinia pellentesque eros. Donec accumsan tincidunt velit.</p>
                                                <span style="color: #F00"><?php echo "<br>" . $success  . "<br>" ?></span>
                                        
                                        </div>
					
				</div>
		
				<div class="col-xlarge-7 col-medium-6">
					
					<div class="contact-image">
						<img src="/source/img/contact_placeholder.jpg" alt="contact image" class="image" />
					</div>
				
				</div>
					
			</div>
			
			
			<div id="success-message" class="notification"><p class="font-reg">  </p></div>
			<div id="error-message" class="notification"><p class="font-reg"></p></div>
					
                        
                        
                        <?php $form = ActiveForm::begin([
                            'enableClientValidation' => true,
                            ]) ?>
                            <div class="row">
                                <div class="col-xlarge-6 col-medium-6">
                                    <?= $form->field($model, 'name', ['inputOptions' => ['class' => 'contact-input font-reg', 'placeholder' => 'имя'], ]) ?>
                                </div>
                                <div class="col-xlarge-6 col-medium-6">  
                                    <?= $form->field($model, 'email', ['inputOptions' => ['class' => 'contact-input font-reg', 'placeholder' => 'почта'], ]) ?>
                                </div> 
                            </div>
                            <div class="row">	
                                <div class="col-xlarge-12">
                                    <?= $form->field($model, 'body', ['inputOptions' => ['class' => 'contact-text font-reg', 'placeholder' => 'сообщение'], ])->textarea() ?>
                                </div>
                            </div>
                                    <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'primary-button font-reg hov-bk']) ?>
                        <?php ActiveForm::end() ?>
                       
		</div>
	</section>

</div>