<?php 
use yii\widgets\LinkPager;
 ?>
  <div class="container">
  <p>
   <h4> <b style="text-transform: uppercase">MỞ RỘNG> TRUYỆN </b></h4>
 </p>
</div>
<section class="py-4 coloryellow">
        <div class="text-center chude">____TRUYỆN____</div>
    </section>
    <section class="py-4 coloryellow">
        <div class="container"> 

            <div class="card-group"> 

                <div class="row"> 
                <?php 
                foreach ($truyen as $key => $value) {
                 ?>
                    <a href="index.php?r=truyen&id=<?php echo $value['anh'] ?>">
                        <div class="card coloryellow col-md-4"> 
                            <img  style="width: 170px; height: 200px"class="card-img-top stories" src= "../../uploads/truyen/<?php echo $value['anh'] ?>"> 
                        </a>
                        <div class="card-body"> 
                            <h3 class="card-title blue text-center" style="color: #4B93C2;font-weight: bold;"><?php echo $value['ten'] ?></h3> 
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