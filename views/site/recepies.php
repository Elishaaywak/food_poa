<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Top Recepies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<div class="site-about">
    

    <div class="container">
    	<h1><?= Html::encode($this->title) ?></h1>
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
    				<h6>Githeri <small>By Elisha Aywak</small></h6>
    				Ingredients:
    				<ol type="1">
    					<li>Maize</li>
    					<li>Beans</li>
    					<li>Onion</li>
    					<li>Floor</li>
    				</ol>
    				<?= Html::a('Login to view more...', ['login'],['class' => 'btn btn-primary btn-xl rounded-pill mt-5']) ?>
    			</p>
    		</big>
    		</div>
		</div>
		<hr/>
		<div class="row">
    		<div class="col-md-3">
    			<img class="img-thumbnail" src="<?= Yii::$app->request->baseUrl ?>/images/food3.png" alt="" max-height="50" >
    		</div>
    		<div class="col-md-6">
    			<big>    			
    			<p>
    				<h6>Chicken <small>By Elisha Aywak</small></h6>
    				Ingredients:
    				<ol type="1">
    					<li>Fresh Chicken</li>
    					<li>Garlic</li>
    					<li>Cooking oil</li>
    					<li>Fresh Tomatoes</li>
    				</ol>
    				<?= Html::a('Login to view more...', ['login'],['class' => 'btn btn-primary btn-xl rounded-pill mt-5']) ?>
    			</p>
    		</big>
    		</div>
    	</div>
    </div>

</div>
</div>
