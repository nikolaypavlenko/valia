<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php echo __DIR__ ?>
    
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
                      <img src="/frontend/web/source/img/featured_placeholder_1.jpg" alt="...">
                      <div class="carousel-caption">
                       ВАЛЯ ПРИВІТ
                      </div>
                    </div>
                    <div class="item">
                      <img src="/frontend/web/source/img/featured_placeholder_2.jpg" alt="...">
                      <div class="carousel-caption">
                        ВАЛЯ ВПЕРЕД
                      </div>
                    </div>
                    <div class="item">
                      <img src="/frontend/web/source/img/featured_placeholder_3.jpg" alt="...">
                      <div class="carousel-caption">
                        ВАЛЯ ЧУДО
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

    
    

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>


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
                      <img src="/frontend/web/source/img/featured_placeholder_1.jpg" alt="...">
                      <div class="carousel-caption">
                       ВАЛЯ ПРИВІТ
                      </div>
                    </div>
                    <div class="item">
                      <img src="/frontend/web/source/img/featured_placeholder_2.jpg" alt="...">
                      <div class="carousel-caption">
                        ВАЛЯ ВПЕРЕД
                      </div>
                    </div>
                    <div class="item">
                      <img src="/frontend/web/source/img/featured_placeholder_3.jpg" alt="...">
                      <div class="carousel-caption">
                        ВАЛЯ ЧУДО
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
