  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data">
<table width="342" border="1">
  <tr>
    <td colspan="2"><div align="center">Thêm chi tiết sp</div></td>
  </tr>
  <tr>
    <td width="32"><div align="center">Tên sp</div></td>
    <td width="294"><input type="text"name="tensp"></td>
  </tr>
  <tr>
    <td><div align="center">Gía sp</div></td>
    <td><input type="text" name="gia"></td>
  </tr>
  <tr>
    <td><div align="center">Hình ảnh</div></td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
    <td><div align="center">Mô tả sp</div></td>
    <td><textarea name="motasp" cols="40" rows="15"></textarea></td>
  </tr>
  <?php
  	$sql="select*from loaisp";
	$run=mysqli_query($connect,$sql);
  ?>
  <tr>
    <td><div align="center">Loại sp</div></td>
    <td><select name="loaisp">
       <?php 
       while($dong=mysqli_fetch_array($run)){
	   ?>
       <option value="<?php echo $dong['id_loaisp']?>"><?php echo $dong['tenloaisp']?></option>
       <?php
	   }
	   ?>  
       </select>
    </td>
  </tr>
  <tr>
    <td><div align="center">Thứ tự</div></td>
    <td><input type="text" name="thutu"></td>
  </tr>
  <tr><div align="center">
    <td colspan="2"><div align="center">
      <button name="them" value="them">them</button>
    </div></td>
  		</div>	
  </tr>
  </table>
</form>
