<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style/css.css">
<title>quản trị nội dung website</title>

</head>

<body>
<?php
     session_start();
     if(!isset($_SESSION['dangnhap'])){
	     header('location:login.php');
	 }


?>
	<div class="wrapper">
    	<?php
	        include('modules/config.php');
        	include('modules/header.php');
			include('modules/menu.php');
			include('modules/content.php');
			include('modules/footer.php');	
		?>
   

    </div>
</body>
</html>