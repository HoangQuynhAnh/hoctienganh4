<?php 
use yii\widgets\LinkPager;
use backend\models\Baihoc;
use backend\models\Baikiemtra;
use backend\models\Cauhoi;
use backend\models\Cauhoichitiet;
use backend\models\Nguphap;
use backend\models\videobaihoc;
use yii\data\Pagination;
use yii\db\Expression;
use yii\widgets\ActiveForm;
use yii\helpers\Html;



$cauhoi=1;
$id=$_GET['id'];
$cauhoi= Cauhoi::find()->where(['idbaihoc'=>$id])->all();
?>
<div class="container">
  <p>
   <h4> <a href="index.php"><b style="text-transform: uppercase">TRANG CHỦ</a>> <a href="index.php?r=kiemtra">KIỂM TRA </a></b></h4>
 </p>
</div>
<div style="height: 50px"></div>
<section class="py-4 coloryellow" style="font-size: 20px"  >
  <div class="container"> 
   <div class=" chude" ></div>
   <div class="card-group"style="min-height: 900px"> 
    <div class=" text-center" style="font-size: 30px; font-weight: bold; width: 100%; margin: 40px">KIỂM TRA</div>
    <form action="">
      <?php $i=1; $daDung = []; ?>
      <?php foreach ($cauhoi as $key => $value) {?>
        <div class="row" style="padding-bottom: 40px"> 
          <p style="width: 900px">
            <b style="color: red"><?php echo $value['ten'] ?></b>
          </p>
          <br />

          <?php $chitietcauhoi=Cauhoichitiet::find()->where(['idcauhoi'=>$value['id']])->limit(4)->all();
          foreach ($chitietcauhoi as $key1 => $value1) {
            array_push($daDung, $value1['da_dung']);
            $dapans = [$value1['da_dung'], $value1['da_nhieu1'], $value1['da_nhieu2'], $value1['da_nhieu2']];
            shuffle($dapans);
            ?>
            <p style="width: 100%"><?php  echo $i.'. '.$value1['noidung'] ;$i++ ?></p>
            <table>
             <tr>
               <?php foreach ($dapans as $stt => $da) {?>
                <td class="check" style="width: 250px">
                  <input type="radio" id= '<?php echo $value1['id']  ?>' name="cauhoi<?php echo $value1['id'] ?>" value="<?php echo $da ?>" class='checkboxsize' class='luachon'> <span><?php echo $da ?></span>
                </td>
                <?php } ?>

              <td class="caudapan" style="width: 250px; visibility: hidden" >  Đáp án đúng:  <span style="color: green; "><?php echo $value1['da_dung']   ?> </span>  </td>
            </tr>

          </table> 
       
        <?php } ?>
        <?php $i=1;?>
      </div>
    <?php    }  ?>
    <input type="button" value="Nộp bài" id='nopbai' class="btn btn-primary check" style="font-size: 22px; margin-left:600px">

  </section>

  <style>
    .check{
      font-size: 18px
      width: 200px;
      margin: 30px
    }
    .checkboxsize{
      width: 20px; height: 20px;
    }
  </style>
  <script>
    document.getElementById("nopbai").onclick = function () {
      var daDung = [
        <?php foreach ($daDung as $key => $value) {
          echo "'".$value."',";
        } ?>
      ];
      var tds = document.querySelectorAll('td.check');
      var soCauHoi = tds.length / 4;
      for (var i = 0; i < soCauHoi; i++) {
        var da = daDung[i];
        for (var j = 0; j < 4; j++) {
          var input = tds[i * 4 + j].querySelector('input');
          var span = tds[i * 4 + j].querySelector('span');
          if (input.checked) {
            if (input.value === da) {
              span.style.color = 'green';
            } else {
              span.style.color = 'red';
            }
          } else {
            span.style.color = 'black';
          }
        }
      }

      document.querySelectorAll('td.caudapan').forEach(el => el.style.visibility = 'visible');
    };
  </script>

  