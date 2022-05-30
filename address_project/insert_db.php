<?php
$car = $_POST['car'];
$carr = $_POST['carr'];
$carrr = $_POST['carrr'];

$connect = mysqli_connect('localhost','root','');
mysqli_select_db($connect, 'car_db');

// 한글 깨짐 방지

mysqli_query($connect, "set session character_set_connection=utf8;");
mysqli_query($connect, "set session character_set_results=utf8;");
mysqli_query($connect, "set session character_set_client=utf8;");

$sql="insert into carr_db (car, carr, carrr)";
$sql.="values('$car', '$carr', '$carrr')";

mysqli_query($connect, $sql);

mysqli_close($connect);

echo "<center><h3><br><br>등록 완료. 축하드립니다. <br><br><hr><br>";
echo "이동할 화면을 선택하세요. <br><br>";
echo "🎉 [ <a href='data_input.php'>모델 입력</a> ]&nbsp; | &nbsp; ";
echo "[ <a href='data_output.php'>결과 화면</a> ] 🎉</h3></center>";
?>