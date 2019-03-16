

<?php
$server="localhost";
$tentaikhoan= "root";  
$pass ="";  
$dbname="webbanhangcongnghephp";    


$connect = mysqli_connect($server, $tentaikhoan, $pass, $dbname)or die('khong the ket noi');
 mysqli_select_db($connect,$dbname);
?>
<?php
// 
//$server="localhost";
//$tentaikhoan= "id8550232_linhngoquang97";  
//$pass ="linh2211";  
//$dbname="id8550232_webbanhangcongnghe";    
//
//
//$connect = mysqli_connect($server, $tentaikhoan, $pass, $dbname)or die('khong the ket noi');
// mysqli_select_db($connect,$dbname);
//?>

 