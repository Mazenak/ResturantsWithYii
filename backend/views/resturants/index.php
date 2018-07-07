<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Resturants Control Panel';
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome To Resturants Control Panel!</h1>
    </div>

    <div class="body-content">
        <?= Html::a('New Resturant', ['/Resturants/new'], ['class'=>'btn btn-primary']) ?>
    </div>
</div>
