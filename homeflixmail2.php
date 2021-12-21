<!DOCTYPE html>
<html>

<title>Feeling Bored Alittle?!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="stay4.gif" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<style>
* {
  box-sizing: border-box;
}
.menu {
  float: left;
  width: 20%;
}
.menuitem {
  padding: 8px;
  margin-top: 7px;
  border-bottom: 1px solid #f1f1f1;
}
.main {
  float: left;
  width: 60%;
  padding: 0 20px;
  overflow: hidden;
}
.right {
  background-color: lightblue;
  float: left;
  width: 20%;
  padding: 10px 15px;
  margin-top: 7px;
}

@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}
</style>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size: 16px;}
img {margin-bottom: -8px;}
.mySlides {display: none;}
</style>

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}

</style>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size: 16px;}
img {margin-bottom: -8px;}
.mySlides {display: none;}
</style>

<style>
#myBtn {
  background-color:orange;
  background-image: url('confy.gif');
  border-color:orange;
  border-radius: 10px;
  color:black;
}
.myBtn {


  border-radius: 3px;

}
</style>



<body>


  <!Navbar >
  <div class="w3-top w3-bar  w3-black"  >
    <div class="w3-bar w3-theme w3-top w3-left-align w3-large w3-black">
      <a class="w3-bar-item w3-button w3-right w3-hide-large w3-black w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>

      <a href="iindex.html" class="w3-bar-item w3-black w3-button w3-padding-20 " >Home</a>
      <a href="whatsapp://send?text=https://homeflix9.com/!" data-action="share/whatsapp/share" class="w3-bar-item w3-green w3-button w3-padding-20 myBtn " >Share via Whatsapp</a>
      <a href="http://raboninco.com/F77d" class="w3-bar-item w3-black w3-button w3-padding-20 "  target="_blank">Comming-Soon!</a>
      <a href="http://raboninco.com/IeeR"class="w3-bar-item w3-red w3-button w3-padding-20 myBtn "  target="_blank">Socialize</a>

  <div class="w3-bar-item w3-black w3-button w3-padding-20 "  target="_blank">

    <button id="myBtn" onclick=" window.location.href = 'index.html'">Cindy Sunshine's Tour
      <i class="fa fa-heartbeat"></i>
      </button>
<div>

<?php

		$name=$_POST['name'];
		$msg=$_POST['msg'];

		$to='hottouchez@gmail.com';
		$subject='Comment Submission';




	mail($to, $subject,);

?>

<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$msg=$_POST['msg'];

		$to='hottouchez@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Comment!';
		$message="Name :".$name."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$name;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We Admire you!</h1>";
		}
		else{
			echo "Something Went Wrong,Please"." ".$name.", Refresh Then Comment Again!";
		}
	}
?>


<font face="comic sans" color="Black" size="5" spacing="5" autofocus>
 <p><b>You will be directed to the homepage in 3 seconds</b></p>
    <script>
        var timer = setTimeout(function() {
            window.location='https://homeflix9.com/about.html'
        }, 3000);
    </script>
