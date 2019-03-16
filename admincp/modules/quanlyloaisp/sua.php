<?php
$sql="select * from loaisp where id_loaisp=$_GET[id]";
$run=mysqli_query($connect,$sql);
$dong=mysqli_fetch_array($run);
?>

<form action="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp'] ?>" method="post" enctype="multipart/form-data">
<table width="241" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa loại sp</div></td>
  </tr>
  <tr>
    <td width="29">tên loại sp</td>
    <td width="196"><input type="text"name="tenloaisp"value="<?php echo $dong['tenloaisp']?>"></td>    
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><input type="text"name="thutu"value="<?php echo $dong['thutu']?>"></td>    
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="sua" id="sua" value="sửa">
       </div>
      </td>
  </tr>
</table>
</form>