
<!DOCTYPE HTML>
<!--
	Visualize by TEMPLATED
	Released for free under the Creative Commons Attribution 3.0 license (license.txt)
-->
<html id="html">
	<head><link href="https://fonts.googleapis.com/css?family=David+Libre" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="login_style.css">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="login_effect.js"></script>
		<link rel="icon"
		      type="image/ico"
		      href="favicon.ico">

		<title>Now</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body >

<div  id="coby" style="margin-left:10%; margin-top: 2%; ">
	<img  src="adas.png">



</div>

<!-- Buttons -->

<div style="text-align: center;  ">
	
	<?php  
session_start();



if (isset($_SESSION['uname'])) {
	# code...
header("Location: now.php");
die();

}
else
{
	echo '
<div id="cody" class="ayer" id="navbar" style="width: 100%;height: 40%; background-color: transparent; position: fixed; margin-top: 7%; " >

<button id="cody" class="ayer" onclick="login()" style="border-radius:22px; background-color:white; height: 75%;width: 25%;color: black;">LOG IN</button>
<button id="cody" class="ayer" onclick="register()" style="border-radius:22px;margin-top:3%; height: 75%;width: 25%;color: white; margin-left: auto;">SIGN UP</button>
</div>';
}
?>


<div style="text-align: center;  border-width: 2px; border-color: 	white; border-style: 	solid;		 border-radius: 9px; margin-top: 12%; border: 2%; background-color: #3b3b3b; color:pink; 	 position: fixed; width: 30%; z-index: 2;  margin-left:35% ; display: none;"  id="login">
	<form id="forum"  method = "get" action = "check.php">

   
   <input style="border-radius: 9px; text-align: center ; font-size: 120%;" type = "text" id = "login" placeholder = "Email Id" name = "uid">
   <input style="border-radius: 0px; color: white ;text-align: center;" type = "password" id = "password" name = "upass" placeholder = "***">
   <input style=" margin-top: 7%; border-radius: 4px; margin-left: auto; margin-right: auto;" type = "submit" id = "dologin" value = "Login">
  

  </form>

</div>
<div style="text-align: center;  border-width: 2px; border-color: 	white; border-style: 	solid;		 border-radius: 9px; margin-top: 12%; border: 2%; background-color: #3b3b3b; color:pink; 	 position: fixed; width: 30%; z-index: 2;  margin-left:35% ; display: none;"  id="register">
	<form id="forum"  method = "get" action = "yeni.php">

   
   <input style="border-radius: 9px; text-align: center ; font-size: 120%;" type = "text" id = "login" placeholder = "Email Id" name = "uid">
   <input style=" border-radius: 9px; text-align: center ; font-size: 120%;" type = "text" id = "registera" placeholder = "Name" name = "name">
   <input style="border-radius: 0px; color: white ;text-align: center;" type = "password" id = "password" name = "upass" placeholder = "***">
   <input style=" margin-top: 7%; border-radius: 4px; margin-left: auto; margin-right: auto;" type = "submit" id = "dologin" value = "Register">
  

  </form>

</div>

<script type="text/javascript">
	function login() {
    var x = document.getElementById("login");
    if (x.style.display === "none") {
        x.style.display = "block";

 
 document.getElementById("cody").style.filter= "blur(2px)";
   document.getElementById("coby").style.filter= "blur(2px)";
 //document.getElementById("cody").style.display="none";

    } else {
    	document.getElementById("header").style.filter= "blur(0px)";
        x.style.display = "none";
    }
}
</script>
<script type="text/javascript">
	function register() {

	
    var y = document.getElementById("register");
    if (y.style.display === "none") {
        y.style.display = "block";

  document.getElementById("cody").style.filter= "blur(2px)";
   document.getElementById("coby").style.filter= "blur(2px)";
 //document.getElementById("header").style.filter= "blur(5px)";
  //x.style.filter="blur(0px)";


    } else {
    	//document.getElementById("header").style.filter= "blur(0px)";
        y.style.display = "none";
    }
}

</script>

</div>




		<!-- Wrapper -->
			<div id="wrapper">


</html>

