<?php 
use yii\widgets\LinkPager;
use backend\models\Baihoc;
use backend\models\Nguphap;
use backend\models\videobaihoc;


$id= $_GET['baihoc'];
$gioithieutuvung=Baihoc::find()->where(['id' => $id])->one();
$gioithieutuvung=$gioithieutuvung->tentuvung;
$nguphapten=Nguphap::find()->where(['idbaihoc' => $id])->one();
$nguphapten=$nguphapten->mota;
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
        <h4> <a href="index.php?r=baihoc%2Fchude&id=<?php echo $id ?>"><b style="text-transform: uppercase">CHỦ ĐỀ: <?php echo $tieude ?></a>> UNIT: <?php echo $id ?>> NGỮ PHÁP</b></h4>
    </p>
</div>
<div style="height: 50px"></div>
<section class="py-4 coloryellow">
    <div class="container"> 
       <div class=" chude">NGỮ PHÁP</div>
       <div class="card-group"> 
        <div class=" text-center" style="font-size: 30px; font-weight: bold; width: 100%; margin: 40px"><?php echo $tenbaihoc; ?></div>
        

        <div class="row"> 
         
          
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
    <div class="text-center chude">
       <?php 
       foreach ($nguphap as $key => $value) {
        echo $value['mota'];
    } ?>

</div>
</section>
<section class="py-4 coloryellow">
    <div class="container"> 

        <div class="card-group"> 

            <div class="row"> 
                <?php 
                foreach ($nguphap as $key => $value) {
                   ?>
                   
                   
                   
                   <div class="card-body"> 
                    <h3 class="card-title"><?php echo $value['noidung'] ?></h3> 
                </div> 
            </div>

        <?php } ?>
        
    </div> 
    <?php 
    echo LinkPager::widget([
        'pagination' => $pages,
    ]);
    ?>
</div> 

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

                                <a href="index.php?r=nguphap%2Fds&baihoc=<?php echo $id ?>"><?php echo $nguphapten ?></a>
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
