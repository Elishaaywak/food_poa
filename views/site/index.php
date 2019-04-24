<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Food Poa!';
?>

<header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Welcome to Food Poa App</h1>
        <h2 class="masthead-subheading mb-0">For all your favourite African Recepies</h2>
        <?= Html::a('Login/Create Account', ['login'],['class' => 'btn btn-primary btn-xl rounded-pill mt-5']) ?>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>

  <section>
    <div class="container">
      <div class="row align-items-center">        
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Create an Account and Login</h2>
            <p>Simply click on Login/Register to create account or to login. You will be required to input your details and click create account after which you will be automatically logged in. You will then be redirected to the main dashboard.</p>
          </div>
        </div>
        <div class="col-lg-4 order-lg-2">
          <div class="p-5">
            <img class="img-circle" src="<?= Yii::$app->request->baseUrl ?>/images/login.png" alt="" max-height="50" >
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr/>
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 order-lg-2">
          <div class="p-5">
            <img class="img-circle" src="<?= Yii::$app->request->baseUrl ?>/images/update_account.png" alt=""> 
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Update your profile</h2>
            <p>You will be able to update your profile, upload a profile picture, update your bio, update your password and much more, although this is optional.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr/>
  <section>
    <div class="container">
      <div class="row align-items-center">        
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">Post Recepies</h2>
            <p>You will e able to upload recepies in the form of videos, audio, images and PDFs and share them with other members of the platform. They will be able to see, share, rate and download the recepies.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="p-5">
            <img class="img-circle" src="<?= Yii::$app->request->baseUrl ?>/images/recepies.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr/>
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 order-lg-2">
          <div class="p-5">
            <img class="img-circle" src="<?= Yii::$app->request->baseUrl ?>/images/download.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Download or Rate recepies posted by others</h2>
            <p>You will be able to rate, download and comment on recepies posted by other people.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr/>
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">Share Recepies</h2>
            <p>You will be able to share your recepies and other people's recepies on all leading social media platforms.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="p-5">
            <img class="img-circle" src="<?= Yii::$app->request->baseUrl ?>/images/share.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr/>