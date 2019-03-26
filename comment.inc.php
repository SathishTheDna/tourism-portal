<?php

function setComments($connect){
	if(isset($_POST['commentSubmit'])){
		$uid =$_POST['uid'];
		$date =$_POST['date'];
		$message =$_POST['message'];

		$sql = "INSERT INTO comment(uid,dat,message) VALUES('$uid','$date','$message')";
		$result = $connect->query($sql);

	}
}
function getComments($connect){
	$sql = "SELECT * FROM comment";
	$result = $connect->query($sql);

	while($row = mysqli_fetch_assoc($result)){
		echo "<div class = 'comment-box' style = 'background-color: #FFF8C4; ;width: 1390px;'><p>";
			echo "<b>User:</b> ".$row['uid']."<br>";
			echo "<b>Time Stamp:</b> ".$row['dat']."<br>";
			echo "<b>Message:</b> <br>".nl2br($row['message']) ;
		echo "</p></div>";
	}
}

function GetInTouch($connect){
	if(isset($_POST['b'])){
		$nam =$_POST['n'];
		$mail =$_POST['e'];
		$sub =$_POST['con'];
		$Message =$_POST['im'];
		
		$sql = "INSERT INTO getintouch(nam,mail,sub,Message) VALUES('$nam','$mail','$sub','$Message')";
		$result = $connect->query($sql);
		echo "<script>window.open('contact.php','_self')</script>";

		exit();
	}		
}
?>