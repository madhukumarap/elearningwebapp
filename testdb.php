<?php 
$db="ayush";
$user="root";
$pass="";
$server="localhost";
$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];
$d=$_POST['p4'];
$e=$_POST['p5'];
$f=$_POST['p6'];
$g=$_POST['p7'];
$h=$_POST['p8'];
$i=$_POST['p9'];
$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="INSERT INTO test (testid,subject,img,ob1,ob2,ob3,ob4,cans,about)VALUES('$a', '$b', '$c', '$d','$e', '$f', '$g', '$h', '$i')";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("Test Added Succesfully ");
            window.location="addtest.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>