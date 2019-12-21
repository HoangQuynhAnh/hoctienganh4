<!-- Content section 1 -->
<?php 
use backend\models\Baihoc;
use backend\models\Videobaihoc;
use backend\models\Nguphap;

$friend= Baihoc::find()->where(['type' => '1'])->all();
$school= Baihoc::find()->where(['type' => '2'])->all();
$family= Baihoc::find()->where(['type' => '3'])->all();
$around= Baihoc::find()->where(['type' => '4'])->all();
$all= Baihoc::find()->all();

 ?>
	<section class="py-5 coloryellow" style="height: 400px">
		<div class="text-center chude ">____Chủ đề: FRIENDS____</div>
		<?php 	
		foreach ($friend as $key => $value) {
				$id=$value['id']
			?>
		<div class=" baihoc d-flex justify-content-center" >
			
			<!-- CHu de 1-->
			<div class="dropdown">
				<button class="btn btn-success text-left" type="button" onclick="myFunction<?php echo $id?>()"> 
					<b><?php echo $value['name'];
						

						 ?></b>
				</button>
				<div class ="noidungbaihoc" style="font-size: 20px;" id=noidungbaihoc<?php echo"$id"?> >
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
	<section class="py-5 coloryellow" id="them1" style="height: 400px; display: none">
	</section>
	<!--End  Content section 1 -->
	<!-- Content section 2 -->
	<section class="py-5 coloryellow" style="margin-top:100px">
		<div class="text-center chude">____Chủ đề: SCHOOL____</div>
		<?php 	
		foreach ($school as $key => $value) {
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
				<div class ="noidungbaihoc" style="font-size: 20px;" id=noidungbaihoc<?php echo"$id"?> >
				<div  class="nguphap">
					<p style="font-weight: bold;"> VIDEO BÀI HỌC</p>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold">
						<a href="index.php?r=videobaihoc%2Fds&baihoc=<?php echo $id ?>" ><?php 
									$videobaihoc=Videobaihoc::find()->where(['type'=>$id])->all();
									?>
									 <?php
									 foreach ($videobaihoc as $key1 => $value1) {
									  	# code...   
									 echo '- '.$value1['ten'];
									}
									 ?>	
</a>
					</p>
				</div>
				<div class="nguphap" >
					<p style="font-weight: bold;"> TỪ VỰNG</p>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold">
						<a href="index.php?r=tuvung%2Fds&baihoc=<?php echo $id ?>"><?php echo '- '.$value['tentuvung'] ?></a>
					</p>
					<p>
						
					</p>
				</div>
				<div class="nguphap">
					<p style="font-weight: bold;"> NGỮ PHÁP</p>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold">
						<a href="index.php?r=nguphap%2Fds&baihoc=<?php echo $id ?>">
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
					<p style="font-weight: bold;"> BÀI TẬP</p>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold;text-transform: uppercase">
						<a href="">- bài tập thì hiện tại đơn</a>
					</p>
				</div>
			</div>
					<?php 	} ?>	
		</div>
	</div>
	<!--het chu de 1-->

	</section>

	<section class="py-5 coloryellow" id="them2" style="height: 400px; display: none">
	</section>
	<section class="py-5 coloryellow">
		<div class="text-center chude">____Chủ đề: FAMILY____</div>
		<?php 	
		foreach ($family as $key => $value) {
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
				<div class ="noidungbaihoc" style="font-size: 20px;" id=noidungbaihoc<?php echo"$id"?> >
				<div  class="nguphap">
					<p style="font-weight: bold;"> VIDEO BÀI HỌC</p>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold">
						<a href="index.php?r=videobaihoc%2Fds&baihoc=<?php echo $id ?>" ><?php 
									$videobaihoc=Videobaihoc::find()->where(['type'=>$id])->all();
							
									?>
									
									 <?php
									 foreach ($videobaihoc as $key1 => $value1) {
									  	# code...
									   
									 echo '- '.$value1['ten'];
									}
									 ?>	
</a>
					</p>
				</div>
				<div class="nguphap" >
					<p style="font-weight: bold;"> TỪ VỰNG</p>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold">
						<a href="index.php?r=tuvung%2Fds&baihoc=<?php echo $id ?>"><?php echo '- '.$value['tentuvung'] ?></a>
					</p>
					<p>
						
					</p>
				</div>
				<div class="nguphap">
					<p style="font-weight: bold;"> NGỮ PHÁP</p>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold">
						<a href="index.php?r=nguphap%2Fds&baihoc=<?php echo $id ?>">
							<?php 
									$nguphap=Nguphap::find()->where(['idbaihoc'=>$id])->all();
							
									?>
									
									 <?php
									 foreach ($nguphap as $key1 => $value1) {
									  
									   
									 echo '- '.$value1['mota'];
								}
									 ?>	

						</a>
					</p>
					<p>
					
					</p>
				</div>
				<div class="nguphap">
					<p style="font-weight: bold;"> BÀI TẬP</p>
					<?php
									 foreach ($nguphap as $key1 => $value1) {?>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold;text-transform: uppercase">

									 
						<a href="index.php?r=kiemtraonline%2Fds&id=<?php echo $id ?>">- bài tập <?php echo $value1['mota']; ?> </a>
					</p>
					<?php }
									 ?>
				</div>
			</div>
					<?php 	} ?>	
		</div>
	</div>
	<!--het chu de 1-->

	</section>

	<section class="py-5 coloryellow" id="them3" style="height: 400px; display: none">
	</section>
	<section class="py-5 coloryellow">
		<div class="text-center chude">____Chủ đề: ARROUND THE WORD____</div>
		<?php 	
		foreach ($around as $key => $value) {
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
				<div class ="noidungbaihoc" style="font-size: 20px;" id=noidungbaihoc<?php echo"$id"?> >
				<div  class="nguphap">
					<p style="font-weight: bold;"> VIDEO BÀI HỌC</p>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold">
						<a href="index.php?r=videobaihoc%2Fds&baihoc=<?php echo $id ?>" ><?php 
									$videobaihoc=Videobaihoc::find()->where(['type'=>$id])->all();
							
									?>
									
									 <?php
									 foreach ($videobaihoc as $key1 => $value1) {
									  	# code...
									   
									 echo '- '.$value1['ten'];
									}
									 ?>	
</a>
					</p>
				</div>
				<div class="nguphap" >
					<p style="font-weight: bold;"> TỪ VỰNG</p>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold">
						<a href="index.php?r=tuvung%2Fds&baihoc=<?php echo $id ?>"><?php echo '- '.$value['tentuvung'] ?></a>
					</p>
					<p>
						
					</p>
				</div>
				<div class="nguphap">
					<p style="font-weight: bold;"> NGỮ PHÁP</p>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold">
						<a href="index.php?r=nguphap%2Fds&baihoc=<?php echo $id ?>">
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
					<p style="font-weight: bold;"> BÀI TẬP</p>
					<p style="color: #599BF0; padding-left: 40px; font-weight: bold;text-transform: uppercase">
						<a href="">- bài tập thì hiện tại đơn</a>
					</p>
				</div>
			</div>
					<?php 	} ?>	
		</div>
	</div>
	<!--het chu de 1-->

	</section>

	<!--End  Content section 2 -->
	<!-- Content section 3 -->

</section>
<!--End  Content section 3 -->
<!-- Footer -->

<script>
		<?php 	foreach ($friend as $key => $value) { 
			$id=$value['id'];
?>
	function myFunction<?php echo $id?>() {

		var x = document.getElementById("noidungbaihoc<?php echo"$id"?>");
		var y= document.getElementById("them1");
		if (x.style.display === "none") {
			x.style.display = "block";
			y.style.display="block";
		} else {
			x.style.display = "none";
			y.style.display="none";
		}

		
		
	}
		<?php 	} ?>

		<?php 	foreach ($school as $key => $value) { 
			$id=$value['id'];
?>
	function myFunction<?php echo $id?>() {

		var x = document.getElementById("noidungbaihoc<?php echo"$id"?>");
		var y= document.getElementById("them2");
		if (x.style.display === "none") {
			x.style.display = "block";
			y.style.display="block";
		} else {
			x.style.display = "none";
			y.style.display="none";
		}

		
		
	}
		<?php 	} ?>
		<?php 	foreach ($family as $key => $value) { 
			$id=$value['id'];
?>
	function myFunction<?php echo $id?>() {

		var x = document.getElementById("noidungbaihoc<?php echo"$id"?>");
		var y= document.getElementById("them3");
		if (x.style.display === "none") {
			x.style.display = "block";
			y.style.display="block";
		} else {
			x.style.display = "none";
			y.style.display="none";
		}

		
		
	}
		<?php 	} ?>
		<?php 	foreach ($around as $key => $value) { 
			$id=$value['id'];
?>
	function myFunction<?php echo $id?>() {

		var x = document.getElementById("noidungbaihoc<?php echo"$id"?>");
		var y= document.getElementById("them4");
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