 <?php 
   $sql="select * from chitietsp where id_sp='$_GET[id]'";
   $run=mysqli_query($connect,$sql);
   $dong=mysqli_fetch_array($run);
 ?>
  
<form action="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp']?>" method="post" enctype="multipart/form-data">
<table width="342" border="1">
  <tr>
    <td colspan="2"><div align="center">sửa chi tiết sp</div></td>
  </tr>
  <tr>
    <td width="32"><div align="center">Tên sp</div></td>
    <td width="294"><input type="text"name="tensp"value="<?php echo $dong['tensp']?>"></td>
  </tr>
  <tr>
    <td><div align="center">Gía sp</div></td>
    <td><input type="text" name="gia"value="<?php echo $dong['gia']?>"></td>
  </tr>
  <tr>
    <td><div align="center">Hình ảnh</div></td>
    <td><input type="file" name="hinhanh"><img src="modules/quanlychitietsp/uploads/<?php  echo $dong['hinhanh']?>" width="60" height="60" /></td>
  </tr>
  <tr>
    <td><div align="center">Mô tả sp</div></td>
    <td><textarea name="motasp" cols="40" rows="15"value="<?php echo $dong['mota']?>"></textarea></td>
  </tr>
    <?php
  	$sql_loaisp="select*from loaisp";
	$run_loaisp=mysqli_query($connect,$sql_loaisp);
    ?>
  <tr>
    <td><div align="center">Loại sp</div></td>
    <td><select name="loaisp">
       <?php 
       while($dong_loaisp=mysqli_fetch_array($run_loaisp)){
       if($dong['id_loaisp']==$dong_loaisp['id_loaisp']){
	   ?>
       <option selected="selected" value="<?php echo $dong_loaisp['id_loaisp']?>"><?php echo $dong_loaisp['tenloaisp']?></option>
       <?php
	   }else{	
	   ?>  
           <option value="<?php echo $dong_loaisp['id_loaisp']?>"><?php echo $dong_loaisp['tenloaisp']?></option> 
       <?php
	   }
	   }
	   ?>	
       </select>
    </td>
  </tr>
  <tr>
    <td><div align="center">Thứ tự</div></td>
    <td><input type="text" name="thutu"value="<?php echo $dong['thutu']?>"></td>
  </tr>
  <tr><div align="center">
    <td colspan="2"><div align="center">
      <button name="sua" value="sua">sửa</button>
    </div></td>
  		</div>	
  </tr>
  </table>
</form>
