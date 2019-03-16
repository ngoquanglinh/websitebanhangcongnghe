<div class="left1">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='them'){
			include('modules/quanlychitietsp/them.php');
		}if($tam=='sua'){
			include('modules/quanlychitietsp/sua.php');
		}
	?>
</div>

<div class="right1">
	<?php
		
			include('modules/quanlychitietsp/lietke.php');	
		
	?>
</div>