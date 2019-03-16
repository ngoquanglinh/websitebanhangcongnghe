<?php
 	if(isset($_GET['ac'])&&$_GET['ac']=='logout'){
		unset($_SESSION['dangnhap']);
		header('location:login.php');
	}
?>
<div class="menu">
    	<ul>
        	<li><i class="fas fa-home"></i><a href="index.php">Trang chủ </a></li>
            <li> <a href="index.php?quanly=quanlyloaisp&ac=them">Quản lý loại sp </a>
            </li>
            <li> <a href="index.php?quanly=quanlychitietsp&ac=them">Quản lý chi tiết loại sp </a></li>
            <li> <a href="index.php?&ac=logout">Đăng xuất</a></li>
            <li> <a href="index.php?&quanly=doimatkhau">Đổi mật khẩu</a></li>
        </ul>
    </div>