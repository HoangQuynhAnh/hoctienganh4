<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\ActiveForm;
use yii\backend\models\TimBaihoc;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery.min.js"></script>
</head>
<?php $this->head() ?>
<body style="background-color:#FEFCC1">
    <?php $this->beginBody() ?>
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <!-- Header -->
    <section class="py-4 coloryellow" style='background-image:url("../../uploads/sky6.jpg"); height: 200px;background-size: 100% '>
        <div class="container">
            <h1 style="font-size: 55px">
                <span style="color: #DC4F33"><b >Tieng</b></span><span  style="color:#F2CB60 "><b>anh</b></span><span  style="color:#56CC56 "><b>lop4</b></span> 
                <form class="form-inline search" method="get" action="index.php?r=timkiem">

                   <?php $form = ActiveForm::begin([
                    'action' => ['search'],
                    'method' => 'get',
                ]); ?>
                   <input class="form-control mr-sm-2" name="name" style="width: 300px;
                   height: 50px;"type="search" placeholder="Tìm kiếm..." aria-label="Tìm kiếm...">

                   <div class="form-group">
                       <button class="btn btn-outline-success my-2 my-sm-0 glyphicon glyphicon-search" type="submit">  <span class="fa fa-search form-control-feedback"></span></button>
                   </div>
                   <?php ActiveForm::end(); ?>
               </h1>
               <h2 class="tieude" style="font-size: 20px"><b>Website miễn phí dành cho mọi người</b></h2>

           </div>
       </section>
       <!-- Header -->
       <!-- Menu -->
       <div style="width: 100%">
        <nav class="navbar navbar-expand-lg colorred" >
            <div class="container">
                <div class="collapse navbar-collapse navbar-dark colorred" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><b style="color:white; font-size: 20px">TRANG CHỦ</b>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?r=baihoc"><b style="color:white;font-size: 20px">BÀI HỌC</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?r=kiemtra"><b style="color:white;font-size: 20px">KIỂM TRA</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?r=dethioffline"><b style="color:white;font-size: 20px">ĐỀ THI</b></a>
                        </li>
                        <li class="nav-item dropdown navbar-dark">
                            <a class="nav-link" href=""  id="navbarDropdown"><b style="color:white; font-size: 20px; <?php if($_GET['r']='videomorong'){ echo 'style="color:black"'; } ?>">MỞ RỘNG</b></a>    
                            <div class="dropdown-content navbar-dark" style='width:150px'>
                                <a class="dropdown-item colorred menucon" href="index.php?r=videomorong" style="height: 45px; padding-top: 10px"><b style="color:white; font-size: 18px ">VIDEO</b></a>
                                <a class="dropdown-item colorred menucon" href="index.php?r=truyen%2Fds" style="height: 45px; padding-top: 10px"><b style="color:white;  font-size: 18px">TRUYỆN</b></a>
                            </div>
                        </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Menu -->
    <?= $content ?>
    <!-- Content section 1 -->

    <!-- Footer -->
    <div style="height: 3px; background-color: black; background-color:#FEFCC1" ></div>
</div>
<footer class="py-5" style="background-color:#941E1A;height: 210px" >
    <div class="container" style="background-color:#941E1A">
        <div class="col-md-2 rounded float-left" style="background-color:#941E1A">
            <h1>
                <span style="color: #DC4F33; font-size:50px;font-weight: bold;">Tieng</span><span  style="color:#F2CB60; font-size:50px;font-weight: bold; ">anh</span><span  style="color:#9EEB61; font-size:50px;font-weight: bold; ">lop4</span> 
            </h1>
            <h2 class="footerchu" style="font-size: 18px"><b>Website miễn phí dành cho mọi người</b></h2>

        </div>
        <div class="col-md-4 rounded float-right" style="background-color:#941E1A; color: white">
            <div style="padding-bottom: 30px"><b>LIÊN HỆ VỚI CHÚNG TÔI</b></div>
            <div >

                <p class="small">Email: tienganhlop4@gmail.com</p>
                <p  class="small">Address: Xuân Thuỷ, Cầu Giấy, Hà Nội</p>
                <p class="small">Hotline:18001234</p>
            </div>

        </div>
    </div>
</footer>
<!-- End Foote -->



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<style>
    #navbarResponsive{
        padding-left: -20px;
    }
    .navbar-nav > li{
        padding-left:40px;
    }
</style>

