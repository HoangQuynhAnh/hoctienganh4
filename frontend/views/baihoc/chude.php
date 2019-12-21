<!-- Content section 1 -->

<?php ;
use backend\models\Baihoc;
use backend\models\Videobaihoc;
use backend\models\Nguphap;



if(isset($model))
{ 
	$tieude='1';
	foreach ($model as $key => $value) {
		$tieude= $value['type'];
	}
	switch ($tieude) {
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

	<section class="py-5 coloryellow" style="height: 800px">
		<div class="text-center chude ">____Chủ đề: <?php 	echo $tieude ?>____</div>
		<?php 	
		foreach ($model as $key => $value) {
			$id=$value['id']
			?>
			<div class=" baihoc d-flex justify-content-center" >
				<style>
					.baihoc button{
						width: 800px;
						margin-top: 30px;
					}
				</style>
				<!-- CHu de 1-->
				<div class="dropdown">
					<button class="btn btn-success text-left" type="button" onclick="myFunction<?php echo $id?>()"> 
						<b><?php echo $value['name'];
						

						?></b>
					</button>
					<div class ="noidungbaihoc" style="font-size: 20px;" id='noidungbaihoc<?php echo"$id"?>' >
						<div  class="nguphap">
					<p style="font-weight: bold;"> <a href="index.php?r=videobaihoc%2Fds&baihoc=<?php echo $id ?>" style ="color:black" >VIDEO BÀI HỌC</a></p>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold">
						<?php 
									$videobaihoc=Videobaihoc::find()->where(['type'=>$id])->all();
							
									?>
									
									 <?php
									 foreach ($videobaihoc as $key1 => $value1) {
									  	# code...
									   
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
					<p style="font-weight: bold;"> <a href="index.php?r=kiemtraonline%2Fds&id=<?php echo $id ?>" style ="color:black"> BÀI TẬP</a></p>
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
					<?php 	} ?>		
				</div>

			</div>

			<!--het chu de 1-->


		</section>
		<section class="py-5 coloryellow" id="them" style="height: 400px; display: none">
			<div class="noidungbaihoc" id="them1" >
			</section>
		</div>
		<!--End  Content section 1 -->
	</section>
	<!--End  Content section 3 -->
	<!-- Footer -->

	<script>
		<?php 	foreach ($model as $key => $value) { 
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
	<?php
}
else{?>
	<section class="py-5 coloryellow" style="height: 800px">
		<div class="text-center chude "><?php
		echo "<h1>Bạn chưa thêm bài cho chủ đề này</h1>";
		?>
	</div>
</section>
<?php
}
?>
<style>
	.baihoc button{
		width: 800px;
		margin-top: 30px;
		font-size: 24px;
		height: 50px;
	}
</style>