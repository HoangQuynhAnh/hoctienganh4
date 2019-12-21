<?php use yii\widgets\LinkPager;
use backend\models\Videobaihoc;
use backend\models\Nguphap;



 ?>
<section class="py-5 coloryellow" style="height: 600px">
	

		<!-- CHu de 1-->
		<?php if(!count($search)==0){ ?>
			<?php foreach ($search as $key => $value) {?>
				<div class=" baihoc d-flex justify-content-center" >
					<div class="dropdown">
						<button class="btn btn-success text-left" type="button" style="width: 800px" onclick="myFunction<?php echo $value['id']?>()"> 
							<b> <?php echo $value['name']; $id=$value['id']; ?>
						</b>
					</button>
					<div class ="noidungbaihoc" style="font-size: 20px;height: 400px" id='noidungbaihoc<?php echo $value['id']?>' >

						<div  class="nguphap">
					<p style="font-weight: bold;"> <a href="index.php?r=videobaihoc%2Fds&baihoc=<?php echo $id ?>" style ="color:black" >VIDEO BÀI HỌC</a></p>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold">
						<?php 
									$videobaihoc=Videobaihoc::find()->where(['type'=>$id])->all();
							
									?>
									
									 <?php
									 foreach ($videobaihoc as $key1 => $value1) {
									   
									 echo '- '.$value1['ten'];
									}
									 ?>	

					</p>
				</div>
				
				<div class="nguphap" >
					<p style="font-weight: bold;"><a href="index.php?r=tuvung%2Fds&baihoc=<?php echo $id ?>" style ="color:black"> TỪ VỰNG</a></p>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold">
						<?php echo '- '.$value['tentuvung'] ?>
					</p>
					<p>
						
					</p>
				</div>
						<div class="nguphap">
					<p style="font-weight: bold;"><a href="index.php?r=nguphap%2Fds&baihoc=<?php echo $id ?>" style ="color:black">  NGỮ PHÁP</a></p>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold">
						
							<?php 
									$nguphap=Nguphap::find()->where(['idbaihoc'=>$id])->all();
							
									?>
									
									 <?php
									 foreach ($nguphap as $key1 => $value1) {
									  	# code...
									   
									 echo '- '.$value1['mota'];
									}
									 ?>	

						</a>
					</p>
					<p>
					
					</p>
				</div>
						<div class="nguphap">
					<p style="font-weight: bold;"> <a href="index.php?r=kiemtra%2Fds&id=<?php echo $id ?>" style ="color:black"> BÀI TẬP</a></p>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold;">

							<?php 
									$nguphap=Nguphap::find()->where(['idbaihoc'=>$id])->all();
							
									?>
									
									 <?php
									 foreach ($nguphap as $key1 => $value1) {
									  	# code...
									   
									 echo '- Bài tập '.$value1['mota'];
									}
									 ?>	
					</p>
				</div>
			</div>
			<?php } ?>
			</div>
	</div>
	<!--het chu de 1-->
	<?php 
			echo LinkPager::widget([
				'pagination' => $pages,
			]);
			?>
</section>
		<section class="py-5 coloryellow" id="them" style="height: 400px; display: none">
			<div class="noidungbaihoc" id="them1" >
			</section>
		</div>
		<!--End  Content section 1 -->
	</section>


<?php }else{
	?>
				<div class=" baihoc d-flex justify-content-center" >
	
	<div class="dropdown" style="height: 600px">
		<div class="row">
			<h2 style="color:blue">Không thấy kết quả tìm kiếm phù hợp</h2>
		</br>
	</div>
	<div style="padding-left: 500px"><h4><a href="index.php?r=site">Quay lại <span class="glyphicon glyphicon-share-alt"></span></a></h4></div>
</div>
<?php  } ?>
<script>
		<?php 	foreach ($search as $key => $value) { 
			$id=$value['id'];
			?>
			function myFunction<?php echo $id?>() {

				var x = document.getElementById("noidungbaihoc<?php echo"$id"?>");
				var y= document.getElementById("them");
				if (x.style.display === "none") {
					x.style.display = "block";
					y.style.display="block";
				} else {
					x.style.display = "none";
					y.style.display="none";
				}



			}
		<?php 	} ?>
	</script>
<style>
	.baihoc button{
		width: 800px;
		margin-top: 30px;
		font-size: 24px;
		height: 50px;
	}
</style>