<?php 
use yii\widgets\LinkPager;
use backend\models\Baihoc;
use backend\models\Nguphap;
use backend\models\videobaihoc;



$id= $_GET['baihoc'];
$gioithieutuvung=Baihoc::find()->where(['id' => $id])->one();
$gioithieutuvung=$gioithieutuvung->tentuvung;
$nguphap=Nguphap::find()->where(['idbaihoc' => $id])->one();
$nguphap=$nguphap->mota;
$videobaihoc=Videobaihoc::find()->where(['type' => $id])->one();
$namevideo=$videobaihoc->ten;
?>
<div class="container">
  <p>
    <?php 
    $id= $_GET['baihoc'];
    $chude=Baihoc::find()->where(['id'=>$id])->one();
    $chude=$chude->type;
    switch ($chude) {
      case '1':
      $tieude='Friends';
      break;
      case '2':
      $tieude='Schools';
      break;
      case '3':
      $tieude='Family';
      break;
      case '4':
      $tieude='Arround the world';
      break;
    }


    ?>
    <h4> <a href="index.php?r=baihoc%2Fchude&id=<?php echo $id ?>"><b style="text-transform: uppercase">CHỦ ĐỀ: <?php echo $tieude ?></a>> UNIT: <?php echo $id ?>> TỪ VỰNG</b></h4>
  </p>
</div>
<div style="height: 50px"></div>
<section class="py-4 coloryellow">
  <div class="container"> 
   <div class=" chude">TỪ VỰNG</div>
   <div class="card-group"> 
    <div class=" text-center" style="font-size: 30px; font-weight: bold; width: 100%; margin: 40px"><?php echo $tenbaihoc; ?></div>


    <div class="row"> 
      <?php 
      foreach ($tuvung as $key => $value) {
       ?>
       <a href="index.php?r=truyen%2Fds&id=<?php echo $value['anh'] ?>">
        <div class="card coloryellow col-md-4"> 
          <img  style="width: 170px; height: 200px"class="card-img-top stories" src= "../../uploads/tuvung/<?php echo $value['anh'] ?>"> 
        </a>
        <div class="card-body"> 
          <h3 class="card-title blue text-center" style="color: red;font-weight: bold; text-transform: uppercase;"><?php echo $value['ten'] ?></h3> 


          <h3 class="card-title blue text-center" style="color: #4B93C2;font-weight: bold;"><?php echo $value['phienam'] ?>
          <?php 
          if(isset($value['audio'])){
            ?>
            <td>      
             <audio id="audio" src="../../uploads/audio/<?php echo $value['audio'] ?>" ></audio>
             <span class="speaker -on" onclick="playSound()"></span></p> 
           </td>
         <?php }
         ?>
       </h3> 


       <h3 class="card-title blue text-center" style="color: grey; font-size: 16px; font-weight: bold;text-transform: uppercase"><?php echo $value['nghia'] ?></h3> 
     </div> 
   </div>

 <?php } ?>

</div> 

</div> 
<?php 
echo LinkPager::widget([
  'pagination' => $pages,
]);
?>
</div> 
</section>
<section class="py-4 coloryellow">
  <div class="text-center chude" style="padding-left: 100px">____DANH SÁCH BÀI HỌC____</div>
  <div style="height: 50px">

  </div>
  <div class="container"> 
    <div class="card-group"> 
      <div class="row"> 
        <div class="card coloryellow col-md-12" > 

          <table>

            <tr>
              <td class="text-center " style="font-size:20px; font-weight: bold; width:300px; ">VIDEO BÀI HỌC
                <div>

                  <a href="index.php?r=videobaihoc%2Fds&baihoc=<?php echo $id ?>"><?php echo $namevideo ?></a>
                </div>
              </td>
              <td class="text-center " style="font-size:20px; width:300px;font-weight: bold;">TỪ VỰNG
                <div>

                  <a href="index.php?r=tuvung%2Fds&baihoc=<?php echo $id ?>"><?php echo $gioithieutuvung ?></a>
                </div>

              </td>
              <td class="text-center" style="font-size:20px; width:300px;font-weight: bold;">NGỮ PHÁP
               <div>

                <a href="index.php?r=nguphap%2Fds&baihoc=<?php echo $id ?>"><?php echo $nguphap ?></a>
              </div>

            </td>
            <td class="text-center" style="font-size:20px;width:300px;font-weight: bold;">BÀI TẬP
                <?php 
                $nguphap=Nguphap::find()->where(['idbaihoc'=>$id])->all();?>
                <div>
                 <?php
                 foreach ($nguphap as $key1 => $value1) {?>

                  <a href="index.php?r=kiemtra%2Fds&id=<?php echo $id ?>" style ="color:black"> 
                    <span style="color:#337ab7">
                    <?php
                    echo '- Bài tập ';?>
                  </span>
                    <span style="color:#337ab7; text-transform: lowercase;">  <?php
                    echo $value1['mota'];
                  }
                  ?> </span>
                   
                </div>           
            </td>
        </tr>
      </table>
    </div> 
  </div> 
</div>
</div>
</section>

<style>
 .speaker {
  vertical-align: middle;
  box-sizing: border-box;
  display: inline-block;
  background: currentColor;
  background-clip: content-box;
  width: 1em;
  height: 1em;
  border: .333em solid transparent;
  border-right-color: currentColor;
  position: relative;
  left: -.337em;
}
.speaker.-on:before, .speaker.-on:after {
  content: '';
  background: currentColor;
  width: .1em;
  position: absolute;
}
.speaker.-on:before {
  height: .333em;
  right: -.533em;
}
.speaker.-on:after {
  height: .667em;
  right: -.733em;
  top: -50%;
}
.speaker.-off:before, .speaker.-off:after {
  content: '';
  background: currentColor;
  width: .1em;
  position: absolute;
  height: 1.2em;
  margin-top: -.333em;
  top: -.1em;
  left: .1em;
  transform: translateX(.333em) rotate(-45deg);
}
.speaker.-off:before {
  background: #04233D;
  left: .2em;
}
</style>
<script>
  function playSound() {
    var sound = document.getElementById("audio");
    sound.play();
  }
</script>
