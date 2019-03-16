<?php
     if(isset($_POST['doimatkhau'])){
	   $taikhoan=$_POST['tentaikhoan'];
	    $matkhaucu=$_POST['matkhaucu'];
		$matkhaumoi=$_POST['matkhaumoi'];
		$sql_doimatkhau=mysqli_query($connect,"select * from admin where username='$taikhoan' and password='$matkhaucu' limit 1");
		$get_rows=mysqli_num_rows($sql_doimatkhau);
		if($get_rows==0){
		echo 'sai tài khoản hoặc mật khẩu';
		}
		else{
			$sql_capnhat=mysqli_query($connect,"update admin set password='$matkhaumoi'" );
			echo 'thay mật khẩu thành công';
		}
	 }
?>
<h3 align="center">Trang đổi mật khẩu</h3>
<div align="center">
<form action="" method="post">
<table width="330" border="1">
  <tr>
    <td colspan="2"><div align="center">Đổi mật khẩu admin</div></td>
    </tr>
  <tr>
    <td width="40"><div align="center">Tên tài khoản</div></td>
    <td width="274"><input type="text" name="tentaikhoan" ></td>
  </tr>
  <tr>
    <td><div align="center">Mật khẩu cũ</div></td>
    <td><input type="password" name="matkhaucu" ></td>
  </tr>
  <tr>
    <td><div align="center">Mật khẩu mới</div></td>
    <td><input type="password" name="matkhaumoi"></td>
  </tr>
    <tr>
    <td height="76" colspan="2"><div align="center">
      <input type="submit" name="doimatkhau" value="Đổi mật khẩu">
    </div></td>
    </tr>
</table>
</form>
</div>