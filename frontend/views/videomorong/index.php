<?php 
use yii\widgets\LinkPager;
 ?>
 <div class="container">
  <p>
   <h4> <b style="text-transform: uppercase">MỞ RỘNG>VIDEO</b></h4>
 </p>
</div>
<section class="py-4 coloryellow">
        <div class="text-center chude">____VIDEO____</div>
    </section>
    <section class="py-4 coloryellow">
        <div class="container"> 

            <div class="card-group"> 

                <div class="row"> 
                <?php 
                foreach ($Videomorong as $key => $value) {
                 ?>
                    <div class="card coloryellow col-md-4"> 
                        <video width="350" controls>
                            <source src="mov_bbb.mp4" type="video/mp4">
                                <source src="../../uploads/video/<?php echo $value['link']?>" type="video/ogg">
                                    Your browser does not support HTML5 video.
                                </video>
                                <div class="card-body"> 
                                    <h3 class="card-title blue text-center"style="color: #4B93C2;font-weight: bold;"><a href="index.php?r=videomorong%2Fds&id=<?php echo $value['id']   ?>"><?php echo $value['ten'] ?></a></h3> 
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