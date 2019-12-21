<?php 
use yii\widgets\LinkPager;
use backend\models\Baihoc;
use backend\models\Nguphap;
use backend\models\videobaihoc;



 ?>
      <div class="container">
<p>
   <h4> <a href="index.php"><b style="text-transform: uppercase">TRANG CHỦ</a>> KIỂM TRA </b></h4>
</p>
</div>
<div style="height: 50px"></div>
    <section class="py-4 coloryellow">
        <div class="container"> 
 <div class=" chude"></div>
            <div class="card-group"> 
                <div class=" text-center" style="font-size: 30px; font-weight: bold; width: 100%; margin: 40px">KIỂM TRA</div>
                

                <div class="row"> 
                <?php 
                foreach ($kiemtra as $key => $value) {
                 ?>
                    <a href="index.php?r=kiemtra%2Fds&id=<?php echo $value['id'] ?>">
                        <div class="card coloryellow col-md-4"> 
                            <img  style="width: 170px; height: 200px"class="card-img-top stories" src= "../../uploads/baikiemtra/anh.jpg"> 
                        </a>
                        <div class="card-body"> 
                            <h3 class="card-title blue text-center" style="color: red;font-weight: bold; text-transform: uppercase;"><a href="index.php?r=kiemtra%2Fds&id=<?php echo $value['id'] ?>  "><?php echo $value['ten'] ?></a></h3> 
                     
                   
                            <h3 class="card-title blue text-center" style="color: #4B93C2;font-weight: bold;">
         
                        </div> 
                    </div>

                <?php } ?>
                  
                </div> 
                <div class="row"> 
                <div class="card-body " style="margin-left:450px"> 
                            <h3 class="card-title blue text-center" style="color: red;font-weight: bold; text-transform: uppercase;"><?php 
                            if(isset($_GET['page'])){
                                if($_GET['page']==2){
                                   ?>
                                   <a href=" index.php?r=kiemtraonline%2Fds&id=<?php echo $kiemtrahocky2->id ?> " style="color: red; background-color: pink; padding: 20px; border-radius: 30px">BÀI KIỂM TRA HỌC KỲ 2</a></h3> 
                                   <?php
                                }
                                else{
                                    
                                }
                            }
                        else{
                            ?>
                             <a href=" index.php?r=kiemtraonline%2Fds&id=<?php echo $kiemtrahocky1->id ?> " style="color: red; background-color: pink; padding: 20px; border-radius: 30px">BÀI KIỂM TRA HỌC KỲ 1</a></h3> 
                            <?php
                        }
                         ?>
         
                        </div> 

               </div> 
             </div>
<?php 
                    echo LinkPager::widget([
                        'pagination' => $pages,
                    ]);
                 ?>
        </div> 
    </section>
    