<?php session_start();?>
<!DOCTYPE html>
<?php
include("examconn.php");
?>
<html>
<body>
	<?php
	$correct=0;
	$ans=$_POST['answer1'];
	if($ans=="Ibrahim Lodi"){
		$correct++;
	}
	elseif($ans==""){
		$correct=$correct+0;
	}
	else{
		$correct=$correct - 0.5;
	}
	?>
	<?php
	$ans1=$_POST['answer2'];
	if($ans1=="Pargana"){
		$correct++;
	}
	elseif($ans1==""){
		$correct=$correct+0;
	}
	else{
		$correct=$correct - 0.5;
	}
	echo  $correct;
	?>
	<?php
	$user=$_SESSION['use'];
	$query="INSERT INTO markstry(username,marks)";
	$query .="VALUES('$user','$correct')";
	$result=mysqli_query($conn,$query);
	if(!$result){
		die('query failed');

	}
	?>
</body>
</html>
