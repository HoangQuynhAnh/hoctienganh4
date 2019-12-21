<?php 
use backend\models\Tuvungvideo;

 $tuvung= Tuvungvideo::find()->where(['idvideo' => $idvideo])->all();

 ?>
 <div class="container">
  <p>
   <h3> <b style="text-transform: uppercase">MỞ RỘNG><a href="index.php?r=videomorong%2Findex">VIDEO</a>> <?php echo $Videomorong->ten ?> </b></h3>
 </p>
</div>
<section class="py-4 coloryellow">
    <div class="text-center chude" style="padding-left: 100px">____VIDEO____</div>
</section>
<section class="py-4 coloryellow">
    <div class="container"> 
        <div class="card-group"> 
            <div class="row"> 
                <div class="card coloryellow col-md-12" > 
                    <video width="350" controls style="margin-left: 100px; width: 1000px; height: 600px">
                        <source src="mov_bbb.mp4" type="video/mp4">
                            <source src="../../uploads/video/<?php echo $Videomorong->link ?>" type="video/ogg">
                                Your browser does not support HTML5 video.
                            </video>
                            <div class="card-body"> 
                                <h2 class="card-title blue text-center"style="color: #4B93C2;font-weight: bold;padding-left: 160px"><?php echo $Videomorong->ten?></h2> 
                            </div> 
                        </div> 
                    </div>
                    <section class="py-4 coloryellow col-md-12">
                        <div class="card-group" style="height: 600px; width: 100%"> 
                            <div class="tuvung" style=" width: 100%"><h2>Từ vựng</h2>
                            </br>
                            <div class="row">
                              <div class="card coloryellow col-md-12" > 
                                <table width="600px">

                                    <?php 
                                       // if(isset($tuvung)){
                                           foreach ($tuvung as $key => $value) {
                                                # code...
                                           
                                     ?>
                                    <tr>
                                        <td><?php echo $value['ten'] ?></td>
                                        <td><?php echo $value['phienam'] ?></td>
                                        <td><?php
                                        switch ($value['loaitu']) {
                                            case '1':
                                               echo 'Danh từ';
                                                break;
                                            case '2':
                                              echo 'Động từ';
                                                break;
                                            case '3':
                                               echo 'Trạng từ';
                                                break;
                                            case '4':
                                              echo 'Tính từ';
                                                break;
                                            case '5':
                                              echo 'Giới từ';
                                                break;
                                            
                                        }
                                         
                                         ?></td>
                                        <td><?php echo $value['nghia'] ?></td>
                                        <?php 
                                             if(isset($value['audio'])){
                                                ?>
                                                <td>      
                                                     <audio id="audio" src="../../uploads/audio/<?php echo $value['audio'] ?>" ></audio>
                                                    <span class="speaker -on" onclick="playSound()"></span></p> 
                                                            
                                                    </td>
                                                  <?php }
                                            ?>
                                        </tr>
                                    <?php 
                                    }
                               // }
                                 ?>
                                    </table>
                                </div> </div>
                            </div>

                        </div>
                    </div> 
                </div> 
            </section>
            <style>

                .tuvung{
                    font-size: 18px;
                    color: black;
                    font-weight: none;
                }
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
