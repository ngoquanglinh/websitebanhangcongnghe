<?php
	session_start();
?>
<h1 align="center">Giỏ hàng</h1>
<h3 style="float:right">
<?php
	 if(isset($_SESSION['dangnhap'])){
  		echo 'Xin Chào:'.$_SESSION['dangnhap'];
}
?>
</h3>
<?php 
//them
	
	if(isset($_GET['add'])&& !empty($_GET['add'])){
	$id=$_GET['add'];
    @$_SESSION['cart_'.$id]+=1;
	header('location:index.php?xem=giohang');
	}
//cong sp
 if(isset($_GET['them'])){
    $_SESSION['cart_'.$_GET['them']]+=1;
	header('location:index.php?xem=giohang');
 }
 //tru sp
  if(isset($_GET['tru'])){
    $_SESSION['cart_'.$_GET['tru']]--;
	header('location:index.php?xem=giohang');
 }
  //xoa sp
  if(isset($_GET['xoa'])){
    $_SESSION['cart_'.$_GET['xoa']]=0;
	header('location:index.php?xem=giohang');
 }
 //hien sp
 $thanhtien=0;
 foreach($_SESSION as $name => $value){
 if($value>0){
	 if(substr($name,0,5)=='cart_'){
        $id=substr($name,5,strlen($name-5));
		$sql="select*from chitietsp where id_sp='".$id."'";
		$query=mysqli_query($connect,$sql);
?>
<h4 style="color:#e10c00; text-align:center">Sản phẩm đã mua</h4><hr /><br/>
<?php		
		while($dong=mysqli_fetch_array($query)){
	          $tongtien=$dong['gia']*$value;
			  echo $dong['tensp'].'x'.$value.'@'.$dong['gia'].'='.$tongtien.'VND'.'<br/>
			  <a href="index.php?xem=giohang&them='.$id.'"><button type="button">Thêm</button></a>
			  <a href="index.php?xem=giohang&tru='.$id.'"><button type="button">Giảm</button></a>
			  <a href="index.php?xem=giohang&xoa='.$id.'"><button type="button">delete</button></a>';	
		}
	  }
	  $thanhtien+=$tongtien;
	}
 }
if($thanhtien==0){
	echo 'giỏ hàng trống';
}else{
	echo 'tổng tiền = '.$thanhtien.'VND <br/>';
	}
?>
<p style="float:right; color:#033"><a href="index.php?xem=thanhtoan">Thanh toán</a></p>
