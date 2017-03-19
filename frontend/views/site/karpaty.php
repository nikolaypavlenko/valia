<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                
                <h2> ТУРИСТИЧЕСКИЕ ПОХОДЫ В КАРПАТЫ </h2>
                
                    <?php foreach ($listKarpaty as $row) :?>
                        
                     <h3> <?php echo $row->name ?> </h3>

                        <img style="height:200px" 
                             src="<?php echo $row->img->image1 ?>" alt="Smiley face">  
                         <img style="height:200px" 
                             src="<?php echo $row->img->image2 ?>" alt="Smiley face">  
                         <img style="height:200px" 
                             src="<?php echo $row->img->image3 ?>" alt="Smiley face">  
                       
                     <h4> МАРШТУР ПОХОДА </h4>
                         <h3> <?php echo $row->road ?> </h3>
                        
                        Продолжительность: <?php echo $row->duration ?> </h3> <br>
                        Сложность: <?php echo $row->complexity ?> </h3> <br>
                        Стоимость: <?php echo $row->price ?> </h3><br>
                        Подробнее<br>

                         <br>
                    <?php endforeach ;?> 

                
                
            </div>
        </div>

    </div>
</div>
