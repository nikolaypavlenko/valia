<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
\frontend\assets\MainAsset::register($this);


?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- page title -->
<title>Instinct - Blog & Portfolio Template</title>


<!-- author -->
<meta name="author" content="Lucid Themes">
<!-- responsive meta tag -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="<?= Yii::$app->charset ?>">
<?= yii\helpers\Html::csrfMetaTags() ?>

<!-- google fonts used -->
<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<?php $this->head() ?>

</head>


<body>
<?php $this->beginBody() ?>


    
<?php echo $this->render("//common/header") ?>


<?php echo $content ?>


<?php echo $this->render("//common/footer") ?>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
