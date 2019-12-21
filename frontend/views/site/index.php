 <section class="py-5 coloryellow" >
        <div class="text-center chude" style="color: red">____CHỦ ĐỀ____</div>
    </section>
    <section class="py-5 coloryellow" >
        <div class="container"> 
            <div class="card-group"> 
                <div class="row"> 
                    <a href="index.php?r=baihoc%2Fchude&id=1">
                        <div class="card coloryellow col-md-3"> 
                            <img class="card-img-top" src= "https://leerit.com/static/flashcards/words_through_images/tu_vung_tieng_anh_ve_cac_mon_hoc_school_subjects.jpg"> 
                        </a>
                        <div class="card-body"> 
                            <h3 class="card-title blue text-center"style="color: #4B93C2;font-weight: bold;"><a href="index.php?r=baihoc%2Fchude&id=1">Friends</a></h3> 
                        </div> 
                    </div> 
                    <a href="index.php?r=baihoc%2Fchude&id=2">
                        <div class="card col-md-3 coloryellow "> 
                            <img class="card-img-top coloryellow " src= "https://leerit.com/static/flashcards/words_through_images/tu_vung_tieng_anh_ve_cac_mon_hoc_school_subjects.jpg"> 
                        </a>
                        <div class="card-body"> 
                            <h3 class="card-title blue text-center"style="color: #4B93C2;font-weight: bold;"><a href="index.php?r=baihoc%2Fchude&id=2">Schools</a></h3> 
                        </div> 
                    </div> 

                    <a href="index.php?r=baihoc%2Fchude&id=3">
                        <div class="card col-md-3 coloryellow "> 
                            <img class="card-img-top" src= "https://leerit.com/static/flashcards/words_through_images/tu_vung_tieng_anh_ve_cac_mon_hoc_school_subjects.jpg"> 
                        </a>
                        <div class="card-body"> 
                            <h3 class="card-title blue text-center"style="color: #4B93C2;font-weight: bold;"><a href="index.php?r=baihoc%2Fchude&id=3">Family</a></h3> 
                        </div> 
                    </div> 
                      <a href="index.php?r=baihoc%2Fchude&id=4">
                    <div class="card col-md-3 coloryellow "> 
                        <img class="card-img-top" src= "https://leerit.com/static/flashcards/words_through_images/tu_vung_tieng_anh_ve_cac_mon_hoc_school_subjects.jpg"> 
                            </a>
                        <div class="card-body"> 
                            <h3 class="card-title blue text-center"style="color: #4B93C2;font-weight: bold;"><a href="index.php?r=baihoc%2Fchude&id=4">Around the World</a></h3> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </section>

    <!--End  Content section 1 -->
    <!-- Content section 2 -->
    <section class="py-4 coloryellow" >
        <div class="text-center chude"><a href="index.php?r=truyen%2Fds" style="color: red">____TRUYỆN____</a></div>
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
                            <img  style="width: 250px"class="card-img-top stories" src= "../../uploads/truyen/<?php echo $value['anh'] ?>"> 
                        </a>
                        <div class="card-body"> 
                            <h3 class="card-title blue text-center" style="color: #4B93C2;font-weight: bold;"><a href="index.php?r=truyen&id=<?php echo $value['anh'] ?>"><?php echo $value['ten'] ?></a></h3> 
                        </div> 
                    </div>     
                <?php } ?>
                </div> 
            </div> 
        </div> 
    </section>

    <!--End  Content section 2 -->
    <!-- Content section 3 -->
    <section class="py-4 coloryellow">
        <div class="text-center chude"><a href="index.php?r=videomorong" style="color: red">____ENGLISH SONGS____</a></div>
    </section>
    <section class="py-4 coloryellow" >
        <div class="container"> 
            <div class="card-group"> 
                <div class="row"> 
                    <?php
                    foreach ($video as $key => $value) {
                      
                     ?>
                    <div class="card coloryellow col-md-4"> 
                        <video width="400" controls>
                            <source src="mov_bbb.mp4" type="video/mp4">
                                <source src="../../uploads/video/<?php echo $value['link']?>" type="video/ogg">
                                    Your browser does not support HTML5 video.
                                </video>
                                <div class="card-body"> 
                                    <h3 class="card-title blue text-center"style="color: #4B93C2;font-weight: bold;"><a href="index.php?r=videomorong%2Fds&id=<?php echo $value['id'] ?>"><?php echo $value['ten'] ?></a></h3> 
                                </div> 
                            </div> 
                        <?php } ?>
                    </div> 
                </div> 
            </div> 
     </section>
