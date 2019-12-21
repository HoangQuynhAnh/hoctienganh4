<?php 

use yii\widgets\LinkPager;
 ?>
</div>
<div style="height: 50px"></div>
    <section class="py-4 coloryellow">
        <div class="container"> 
 <div class=" text-center"><h1>CÁC DẠNG ĐỀ TIẾNG ANH ÔN THI</h1></div>
            <div class="card-group"> 
                <div class=" text-center" style="font-size: 30px; font-weight: bold; width: 100%; margin: 40px"></div>
            
             

                <?php 
                foreach ($dethi as $key => $value) {?>
                   <div class="row" style="width: 100%;font-size: 22px; padding-bottom: 30px;">
               
               <?php  echo $value['ten'];
                
                ?>
                <i>&nbsp Download <a href="<?php echo $value['link']?>" style="color:red">Tại đây </a></i>
                            </div></br>

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
   