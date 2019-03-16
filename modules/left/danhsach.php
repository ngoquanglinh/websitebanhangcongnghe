  <?php 
     $sql_loaisp="select * from loaisp";
	 $query=mysqli_query($connect,$sql_loaisp);
  ?>      
      <h4 style="text-align:center;color:#f7922a;background:#202020;;padding:10px"><i class="fas fa-bars"></i>Loại Sản Phẩm</h4>
                <div class="danhsachsanpham">
                	<ul>
                    <?php
                    while ($dong_sp=mysqli_fetch_array($query)){
					?>
                    	<li><a href="index.php?xem=chitietloaisanpham&id=<?php echo $dong_sp['id_loaisp']?>"</a><?php echo                         $dong_sp['tenloaisp'] ?></a></li>
                       <?php
					}
					   ?>
                    </ul>
                </div> 
      <!--================HIEUSANPHAM=============-->
      <h4 style="text-align:center;color:#f7922a;background:#202020;;padding:10px"><i class="fas fa-bars"></i>Hiệu Sản Phẩm</h4>
                <div class="danhsachsanpham">
                	<ul>
                    	<li><a href="#">APPLE</a></li>
                        <li><a href="#">SAMSUNG</a></li>
                        <li><a href="#">HP</a></li>
                        <li><a href="#">DELL</a></li>
                    </ul>
                </div>           
           	