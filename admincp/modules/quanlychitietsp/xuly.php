<?php
    include('../config.php');
	   $id=$_GET['id'];
	   $tensp = $_POST['tensp'];
	   $gia = $_POST['gia'];
	   $motasp = $_POST['motasp'];  
	   $loaisp = $_POST['loaisp'];
	   $thutu=$_POST['thutu'];
	   $hinhanh=$_FILES['hinhanh']['name'];
	   $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	   move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	   
	   

	if(isset($_POST['them']))
	{   
		$sql= "insert into chitietsp(tensp,hinhanh,gia,mota,id_loaisp,thutu) values                     
		('$tensp','$hinhanh','$gia','$motasp','$loaisp','$thutu')"; 
         mysqli_query($connect, $sql); 
         mysqli_close($connect);
         header('location:../../index.php?quanly=quanlychitietsp&ac=them');
		 //them	
	}
	elseif(isset($_POST['sua'])){
		if($hinhanh!=''){
		$sql="update chitietsp set tensp='$tensp',thutu='$thutu',mota='$motasp',gia='$gia',id_loaisp='$loaisp',hinhanh='$hinhanh' where id_sp='$id'";
		}else{
			$sql="update chitietsp set tensp='$tensp',thutu='$thutu',mota='$motasp',gia='$gia',id_loaisp='$loaisp' where id_sp='$id'";
		}
		mysqli_query($connect,$sql);
		header('location:../../index.php?quanly=quanlychitietsp&ac=sua&id='.$id);
	//sua
	}
	else{
		$sql="delete from chitietsp where id_sp='$id'";
		mysqli_query($connect,$sql);
		    header('location:../../index.php?quanly=quanlychitietsp&ac=them');
		//xoa

	}
	

?>