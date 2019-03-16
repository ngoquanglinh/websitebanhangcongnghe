<?php
  $sql="select * from loaisp order by id_loaisp desc";
 $run=mysqli_query($connect,$sql);
?>
<div align="center">
<table width="99%" border="1">
  <tr>
    <td width="32"><div align="center">ID</div></td>
    <td width="69"><div align="center">Tên sp</div></td>
    <td width="79"><div align="center">Thứ Tự</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
  <?php
  $i=0;
  while($dong=mysqli_fetch_array($run)){  
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tenloaisp'];?></td>
    <td><?php echo $dong['thutu'];?></td>
    <td width="102"><div align="center"><a href="index.php?quanly=quanlyloaisp&ac=sua&id=<?php echo $dong['id_loaisp']?>"><button type="button">Sửa</button></a></div></td>
    <td width="76" ><div align="center"><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp'] ?>"><button type="button">Xóa</button></a></div></td> 
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
</div>