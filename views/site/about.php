<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About Food Poa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    

    <div class="container">
    	<h1><?= Html::encode($this->title) ?></h1>
    	<div class="row">
    		<div class="col-md-3">
    			<img class="img-thumbnail" src="<?= Yii::$app->request->baseUrl ?>/images/food1.png" alt="" max-height="50" >
    		</div>
    		<div class="col-md-6">
    			<big>
    			<blockquote>
    				Food poa is a Web Application that is meant for people to upload, share, rate and download African recepies.
    			</blockquote>
    			<p>
    				It allows one to perform the following actions
    				<ol type="1">
    					<li>Create an account and login</li>
    					<li>Update your bio, profile picture, password and much more</li>
    					<li>Upload a recepy in the form of videos, audio, photos and documents</li>
    					<li>It allows you to see, comment on, share, rate and download recepies from other users</li>
    					<li>It enables you share your recepy and other recepies on various social media platforms</li>
    				</ol>
    			</p>
    		</big>
    		</div>
    	</div>
    </div>

</div>
