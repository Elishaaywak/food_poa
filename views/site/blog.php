<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Food Poa Blog';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
    	<blockquote>
    				This are the recepies with the highest rating. Try them Today!
    			</blockquote>
    	<div class="row">
    		<div class="col-md-3">
    			<img class="img-thumbnail" src="<?= Yii::$app->request->baseUrl ?>/images/food2.png" alt="" max-height="50" >
    		</div>
    		<div class="col-md-6">
    			<big>    			
    			<p>
    				<h6>How to use vegetables to spice up your meal <small>By Elisha Aywak</small></h6>
    				This teaches you hoc vegetables can be of great help to ensure that your meal is...
    				<a href="#">More</a>
    			</p>
    		</big>
    		</div>
		</div>
		<hr/>


</div>
</div>
