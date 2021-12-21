<?php

	$name = $_POST['name'];
	$msg = $_POST['msg'];

	
	$to = "hottouchez@hotmail.com";
	$subject = "ListofmyBeloved";
	$body = "This is an automated message. Please don't reply to this email. \n\n $msg";
	mail($to,$subject,$body);
	{
		echo "E-Mail Sent successfully, we will get back to you soon.";
	}
?>

orrrrrrr


<?php

	$name = $_POST['name'];
	$msg = $_POST['msg'];

	
	$to = "hottouchez@gmail.com";
	$subject = "Comment";
	$body = "This is an automated message. Please don't reply to this email. \n\n $msg";
	$message="Name :".$name."\n"."Wrote the following :"."\n\n".$msg;
	$headers="From: ".$name;
	mail($to,$subject,$body);
	{
		echo "Comment Sent successfully, Thank you"." ".$name.", We Admire you!.";
	}
?>

orrrrrrrrrrrrrrrr

<?php

	$name = $_POST['name'];
	$msg = $_POST['msg'];

	
	$to = "hottouchez@gmail.com";
	$subject = "Comment";
	$body = "This is a comment from "." ".$name.", @Cindy Reports. \n\n $msg";
	mail($to,$subject,$body);
	{
		echo "<div align='center'><h4>Comment Sent successfully,</h4><br> <h1>Thank you"." ".$name.", We Admire you!</h1></div>.";
	}
	
?>

<html>

<font face="comic sans" color="Black" size="5" spacing="5" autofocus>
 <p><b>You will be directed to the feedbackpage in 3 seconds</b></p>
    <script>
        var timer = setTimeout(function() {
            window.location='mail_handler comment.php'
        }, 2000);
    </script>
</font>
