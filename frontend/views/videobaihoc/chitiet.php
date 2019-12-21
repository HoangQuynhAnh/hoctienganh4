<?php 
use yii\widgets\LinkPager;
use backend\models\Baihoc;
use backend\models\Nguphap;



$id= $_GET['baihoc'];
$gioithieutuvung=Baihoc::find()->where(['id' => $id])->one();
$gioithieutuvung=$gioithieutuvung->tentuvung;
$nguphap=Nguphap::find()->where(['idbaihoc' => $id])->one();
$nguphap=$nguphap->mota;
?>
<div class="container">
    <p>
        <?php 
        
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
    <div class="text-center chude" style="padding-left: 100px">____VIDEO____</div>
</section>
<section class="py-4 coloryellow">
    <?php 
    foreach ($video as $key => $value) {
        # code...
     ?>
     <div class="container"> 
        <div class="card-group"> 
            <div class="row"> 
                <div class="card coloryellow col-md-12" > 
                    <video width="350" controls style="margin-left: 200px; width: 800px; height: 600px">
                        <source src="mov_bbb.mp4" type="video/mp4">

                            <source src="../../uploads/video/<?php echo $value['link']; ?>" type="video/ogg">
                                Your browser does not support HTML5 video.
                            </video>
                            <div class="card-body"> 
                                <h2 class="card-title blue text-center"style="color: #4B93C2;font-weight: bold;padding-left: 160px"><?php echo $namevideo= $value['ten']; ?></h2> 
                            </div> 
                        </div> 
                    </div> 
                <?php } ?>
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
