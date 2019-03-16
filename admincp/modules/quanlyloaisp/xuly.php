<?php
	include('../config.php');
	   $thutu=$_POST['thutu'];
	   $tenloaisp = $_POST['tenloaisp'];
	   $id=$_GET['id'];
	if(isset($_POST['them']))
	{   
		$sql= "insert into loaisp(tenloaisp,thutu) values ('$tenloaisp','$thutu')";
         mysqli_query($connect, $sql); 
         mysqli_close($connect);
         header('location:../../index.php?quanly=quanlyloaisp&ac=them');
		 //them	
	}
	elseif(isset($_POST['sua'])){
		$sql="update loaisp set tenloaisp='$tenloaisp',thutu='$thutu' where id_loaisp='$id'";
		mysqli_query($connect,$sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=sua&id='.$id);
        //sua
	}
	else{
		$sql="delete from loaisp where id_loaisp='$id'";
		mysqli_query($connect,$sql);
		    header('location:../../index.php?quanly=quanlyloaisp&ac=them');
		//xoa

	}
	
?>