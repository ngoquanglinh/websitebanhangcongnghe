	<?php
    $sql="select *from chitietsp,loaisp where loaisp.id_loaisp=chitietsp.id_loaisp order by chitietsp.id_sp desc";
	$run=mysqli_query($connect,$sql); 
?>
<table width="293" border="1">
  <tr>
    <td width="16">ID</td>
    <td width="36">Tên sp</td>
    <td width="46">Hình ảnh</td>
    <td width="21">Gía</td>
    <td width="29">loại sp</td>
    <td width="29">Thứ tự</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
    $i=0;
      while($dong=mysqli_fetch_array($run)){  
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tensp'];?></td>
    <td><img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh']?>" width="60" height="60"></td>
    <td><?php echo $dong['gia'];?></td>
    <td><?php echo $dong['tenloaisp'];?></td>
    <td><?php echo $dong['thutu'];?></td>
    <td width="28"><a href="index.php?quanly=quanlychitietsp&ac=sua&id=<?php echo $dong['id_sp']?>"><button type="button">Sửa</button></a></td>
    <td width="36"><a href="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp'] ?>"><button type="button">xoá</button></a></td>
  </tr>
 <?php
   $i++;
	}
 ?>	
</table>
