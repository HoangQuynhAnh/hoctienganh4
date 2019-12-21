<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<style>
    .sidebar .nav . . .menu-title {font-size: 1.75rem;}

</style>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
  <div class="container-scroller" style="font-size: 30px">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background-color: #ffc107">
        <a class="navbar-brand brand-logo" href=""><b style="color: white">HOCTIENGANH4</b></a>
        <a class="navbar-brand brand-logo-mini" href=""><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" >
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class=" nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="icon-search" style="font-size: 16px;"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Tìm kiếm.." aria-label="search" aria-describedby="search"style="font-size: 16px;">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class=" dropdown d-flex mr-4 ">
            <a class=" count-indicator  d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"style="font-size:16px"></i>
            </a>
          </li>
          <li class=" dropdown mr-4 d-lg-flex d-none">
            
                  <?= Html::a('<span style="font-size:16px">Đăng xuất</span>', ['site/logout'], ['data-method' => 'post']) ?>
        
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #FEFCC1;">
        <div class="user-profile" style="font-size: 30px">
          <div class="user-image">
            <img src="images/faces/face28.png">
          </div>
          <div class="user-name">
              <span style="color: green">Admin</span>
          </div>
          <div class="user-designation">
          </div>
        </div>
        <style>
  

        </style>
        <ul class="nav">
          <li class=""style="border-bottom: 1px solid red" >
            <a class="" href="index.php?r=baihoc" >
              <span class="menu-title" style="font-size: 16px;font-family: Arial">&nbsp&nbspBài học</span>
            </a>
          </li>
           <li class="nav-item" style="border-bottom: 1px solid orange">
            <a class="nav-link" data-toggle="collapse"  data-target="#1" style="width: 350px">
              <span class="menu-title" style="font-size: 16px;font-family: Arial;color: #007bff; font-weight: normal;">Quản lý mở rộng</span>
              <i class=""></i>
            </a>
            <div class="collapse" id="1">
              <ul class="nav sub-menu" style="margin-left: -5px; padding-right: -40px">
                <li class="nav-item" > <a class="nav-link" href="index.php?r=videomorong"style="font-size: 16px;font-family: Arial;color:#007bff;font-weight: normal;">Video</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?r=truyen" style="font-size: 16px;font-family: Arial;color: #007bff;font-weight: normal;">Truyện </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item" style="border-bottom: 1px solid orange">
            <a class="nav-link" data-toggle="collapse" data-target="#2">
              <span class="menu-title" style="font-size: 16px;font-family: Arial;color: #007bff; font-weight: normal;">Quản lý bài kiểm tra</span>
            </a>
            <div class="collapse" id="2" style="margin-left: -5px; padding-right: -40px">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item" style=""> <a class="nav-link" href="index.php?r=dethioffline"style="font-size: 16px;font-family: Arial;color:#007bff;font-weight: normal;">Bài kiểm tra offline</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?r=baionline" style="font-size: 16px;font-family: Arial;color: #007bff;font-weight: normal;">Bài kiểm tra online </a></li>
              </ul>
            </div>
          </li>  
        </ul>
      </nav>
      <!-- partial -->
        <?= $content ?>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>


<?php $this->endBody() ?>

</html>
<?php $this->endPage() ?>
<style>
        .sidebar .nav.sub-menu .nav-item:first-child .nav-link {
  border-top: 1px solid orange ;
}
.sidebar .nav.sub-menu .nav-item .nav-link.active::before
.sidebar .nav.sub-menu .nav-item .nav-link.active {
  color: red;}
  .sidebar .nav.sub-menu .nav-item .nav-link:hover::before {
  border: 1px solid orange;
}
.sidebar .nav:not(.sub-menu) > .nav-item:hover + .nav-item .nav-link {
  border-top: 1px solid orange;
}
.sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link {
  background: rgba(255, 255, 255, 0.4);
  color: #fff;
  border-radius: 4px;
  border-top: 1px solid orange;
}
.sidebar .nav .nav-item .nav-link {border-top: 1px solid red);
}
.sidebar .nav .nav-item .nav-link[aria-expanded="true"] {
  background: rgba(255, 255, 255, 0.4);
  border-top: 1px solid orange;
  border-radius: 4px;
}
.sidebar .nav .nav-item.active + .nav-item .nav-link{  border-top: 1px solid orange ;
}
.sidebar .nav .nav-item:first-child .nav-link {
  border-top: 1px solid orange;
}.sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link {
  background: rgba(255, 255, 255, 0.4);
  color: #fff;
  border-radius: 4px;
  border-top: 1px solid orange;
}
.sidebar .nav:not(.sub-menu) > .nav-item:hover + .nav-item .nav-link {
  border-top: 1px solid orange;
}
.sidebar .nav.sub-menu .nav-item .nav-link {
  color: #fff;
  padding: 1rem 4rem;
  position: relative;
  font-size: 0.875rem;
  line-height: 1;
  height: auto;
  border-top: 1px solid orange;
  margin: 0;
}
</style>
