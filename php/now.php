
<!DOCTYPE HTML>
<!--
	Visualize by TEMPLATED
	Released for free under the Creative Commons Attribution 3.0 license (license.txt)
-->
<html id="html">
	<head>
		<link rel="stylesheet" type="text/css" href="login_style.css">
<script type="text/javascript" src="jquery.js"></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="login_effect.js"></script>
		<link rel="icon"
		      type="image/ico"
		      href="favicon.ico">

		<title>Now</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

<?php  

session_start();
require(__DIR__.'/ayar.php');


if (isset($_SESSION['uname'])) {z(6,"users");
	# code...
//echo '<a style="margin-top:4%;" href="signout.php">Sign Out</a>';
echo '<div style=" margin-top:4%; border-radius: 4px; color: black; width: 25%; text-align: center;z-index:11; ">

<a style=" padding:5%; border-radius: 4px;background-color: pink;margin-top:4%;" href="signout.php">Sign Out</a>

<a  style="padding:5%; border-radius: 4px; background-color: white;margin-top:0; top:0;" href="./feed.php">FEED</a>
<button class="flc" onclick="openForm()"  style=" margin-left:.3%; margin-top: 0%; color: white; position:absolute; z-index:16;"  >Edit Profile</button>
</div>
</head>
<body>






<div  style="margin-top:2%; display:none; position:fixed;" class="form-popup" id="myForm">
  <form enctype="multipart/form-data" action="update.php" method="POST" class="form-container">
    
<input   type="file" name="resim" id="resim"  >

<div style="margin-top:2%; ">
<button style="background-color:transparent;" type="submit" class="btn">Save</button>
   

</div>

    
  </form>
   <button style="background-color:transparent;"  type="submit" class="btn cancel" onclick="closeForm()">Close</button>
</div>

<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>
</div>';
}
else
{
	echo '
<div id="navbar" style="width: 100%;height: 40%; background-color: transparent; position: fixed; margin-top: 2%; " >

<button onclick="login()" style="color: white;">LOG IN</button>
<button onclick="register()" style="color: white; margin-left: auto;">SIGN UP</button>
</div>';
}
?>


<div id="alert" style="text-align: center;  border-width: 2px; border-color: 	white; border-style: 	solid;		 border-radius: 9px; margin-top: 5%; border: 2%; background-color: #84bd00; color:pink; opacity:.9; 	 position: fixed; width: 30%; z-index: 2;  margin-left: 25%; display: none; ">
	<h2>Your Now  been created successfully!</h2>

</div>












<div style="text-align: center;  border-width: 2px; border-color: 	white; border-style: 	solid;		 border-radius: 9px; margin-top: 12%; border: 2%; background-color: #3b3b3b; color:pink; opacity:.9; 	 position: fixed; width: 30%; z-index: 2;  margin-left: 25%; display: none;"  id="login">
	<form id="forum"  method = "get" action = "yeni.php">

   
   <input style="border-radius: 9px; text-align: center ; font-size: 120%;" type = "text" id = "login" placeholder = "Email Id" name = "uid">
   <input style="display: none; border-radius: 9px; text-align: center ; font-size: 120%;" type = "text" id = "register" placeholder = "Name" name = "name">
   <input style="border-radius: 0px; color: white ;text-align: center;" type = "password" id = "password" name = "upass" placeholder = "***">
   <input style=" margin-top: 7%; border-radius: 4px; margin-left: auto; margin-right: auto;" type = "submit" id = "dologin" value = "Login">
  

  </form>

</div>

<div style="text-align: center;  border-width: 2px; border-color: 	white; border-style: 	solid;		 border-radius: 9px; margin-top: 12%; border: 2%; background-color: #3b3b3b; color:pink; opacity:.9; 	 position: fixed; width: 30%; z-index: 2;  margin-left: 25%; display: none; " class="file-upload" id="wpost">
	<!-- form id="wposta"  method = "POST" action = "post.php"> -->
<form enctype="multipart/form-data" action="post.php" method="POST" class="form-container">
    <p style="margin-top: 2%; margin-bottom: 2%;" >Max size:<strong>2 MB</strong></p>
    <!-- <input id="aty" style="margin-top: 4%; " class="file-upload__input" id="upload" type="file" name="pic" accept="image/*"> -->
    <input style="margin-bottom: 2%;"  type="file" name="resim" id="resim"  >
   <input id="aty" style="border-radius: 0px; color: white ;text-align: center;" type = "text" id = "act" name = "activity" placeholder = "Current Activity">
   <input id="aty" style=" margin-top: 7%; border-radius: 4px; margin-left: auto; margin-right: auto;" type = "submit" id = "dologin" value = "Post">

  





  </form>

</div>



<script type="text/javascript">
	function register() {

		login();
    var y = document.getElementById("register");
    if (y.style.display === "none") {
        y.style.display = "block";
 document.getElementById("dologin").value="Register";
 
 //document.getElementById("header").style.filter= "blur(5px)";
  //x.style.filter="blur(0px)";


    } else {
    	//document.getElementById("header").style.filter= "blur(0px)";
        y.style.display = "none";
    }
}

</script>
<script type="text/javascript">
	function login() {
    var x = document.getElementById("login");
    if (x.style.display === "none") {
        x.style.display = "block";
 document.getElementById("dologin").value="LOG IN";
 document.getElementById("forum").action="check.php";
 
 document.getElementById("header").style.filter= "blur(5px)";
  //x.style.filter="blur(0px)";


    } else {
    	document.getElementById("header").style.filter= "blur(0px)";
        x.style.display = "none";
    }
}
</script>


<script type="text/javascript">
	
function edit()
{
var qq = document.getElementById('wpost');
var uu = document.getElementById('edt');

uu.style.display='block';
qq.style.display='qq';

}



</script>
<img style="margin-left:65%; top: 5%; z-index: 5; position: absolute; " src="adas.png">
				<!-- Header -->
					<header  id="header">
						<span class="avatar"><img src=




<?php 

z(6,'users');

//echo "'images/".z(1,$_SESSION['id'],'pic') ."'";



if (empty($_GET["id"])) {
echo "'images/".z(1,$_SESSION['id'],'pic') ."'";
	# code...
}
else
{
	echo "'images/".z(1,$_GET["id"],'pic') ."'";
	//echo z(1,$_GET["id"],'name');
}


 ?>





							 alt="" /></span>
						<h1> <strong>

							




							<?php 




z(6,"users");
//require(__DIR__.'/ayar.php');

if (empty($_GET["id"])) {echo $_SESSION['name'];
	# code...
}
else
{
	echo z(1,$_GET["id"],'name');
}



 if ( empty($_GET["id"])) {
	// echo '</strong></span>
 // <button onclick="post()" style="	color:white; width:15px;  "><</button>';
 	# code...
 }
 else
{
// 	$followed="0";

$followed = "0";


$casa=z(1,$_SESSION['id'],"Following");
 //$casa = "0,24";
//echo $casa."parola";

$flist=explode(",", $casa);
//print_r($flist);
 for ($i=0; $i < count($flist) ; $i++) { 
// 	# code...
 if ($_GET["id"]==$flist[$i]) {

 	$followed= "1";
 	
}
 }



if ($followed=="1") {

	echo '<button id="follow" class="flw" onclick="AjaxFunction();" style="color: white; position: absolute; z-index:7;		 margin-left: 	1%;">Unfollow</button>';
	# code...
}
else
{echo '<button id="follow" class="flw" onclick="AjaxFunction();" style="color: white; position: absolute; z-index:7;		 margin-left: 	1%;">+Follow</button>';

}
}

//}

							 ?>
						
<!-- Soyad: <input type="text" id="soyad" name="activity" value=""/>
<input type="button" id="gonder" value="Gönder" onclick="AjaxFunction();" /> -->
<script>
function AjaxFunction() {
    var activity = {
       
        activity: window.location.search.split("&")[0].replace("?","").split("=")[1]
    }
    $.ajax({
        type: 'post',
        url: 'follow.php',
       data: {query: activity},
        success: function(result) {
            $('#sonuc').html(result);
        }
    });
 
var dumb = getElementById('masonlar');
dumb.innerHTML="Happy";

}


</script>



<script >

$('.flw').click(function(){
		var $this = $(this);
		$this.toggleClass('flw');
		if($this.hasClass('flw')){
			$this.text('+Follow');			
		} else {
			$this.text('Unfollow');
		}
	});


</script>



							 </strong>  <a href="http://templated.co"></a><br />is<br />

							<section class="nobrainer">


						<strong style="display:none;" id="sho">




						</strong>


								<div id="mydiv">
						 	 <span   style=" :focus {outline: 0px solid transparent; } " contenteditable="false"><strong id ="masonlar"><?php 
// require(__DIR__.'/ayar.php');

z(6,"aktivite");

if (empty($_GET["id"]))
{
echo z(1,"WHERE Owner_id='".$_SESSION["id"]."'ORDER BY id DESC",'ac_name')[0];

}

else
{

	echo z(1,"WHERE Owner_id='".$_GET["id"]."'ORDER BY id DESC",'ac_name')[0];
}



if ( empty($_GET["id"])) {
	echo '</strong></span><button onclick="post()" style="	color:white; width:15px;  "><</button>';
	# code...
}
else
{
//echo '<button style="color: white; position: absolute; z-index:7;		 margin-left: 	1%;">+Follow</button>';
}



 

?>

<script type="text/javascript">
	
function post() {


var u = document.getElementById("wpost");

 // document.getElementById("dologin").value="LOG IN";
 // document.getElementById("forum").action="check.php";

  u.style.display = "block";

}




</script>


						</div><button  style="margin-bottom:1%;	color:white; width:5%; display:none;  ">+</button></section> Now.</h1><img src="http://www.musawa.ps/assets/images/location_icon.png" alt=""><p style="color:white">Denizli, Turkey</p>
						<ul class="icons">
							<!-- <script type="text/javascript">
							document.onclick=check;
							function check(e){
							var target = (e && e.target) || (event && event.srcElement);
								var obj = document.getElementById('mydiv');
							var obj2 = document.getElementById('sho');

						checkParent(target)?obj.style.display='none':null;
						checkParent(target)?obj2.style.display='Grid':null;



						target==obj2?obj.style.display='block':null;
						target==obj2?obj2.style.display='none':null;
							}
							function checkParent(t){
							while(t.parentNode){
							if(t==document.getElementById('mydiv')){
							return false
							}
							t=t.parentNode
							}
							return true
							}
							</script> -->




							<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
							<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
						</ul><h1 style="text-align:center;"> <strong>Old Activity</strong>

					</header>
				<!-- Main -->
					<section  style="margin-left: auto;margin-right: auto; background-color: transparent; width: 90%"  id="main" >

						<!-- Thumbnails -->
							<section class="thumbnails">


<?php
//require(__DIR__.'/ayar.php');

if (empty($_GET["id"])) {

	$whos=$_SESSION["id"];
	# code...
}
else
{
	$whos=$_GET["id"];;
}



z(6,"aktivite");

$Olds= z(1,"WHERE Owner_id='".$whos."'ORDER BY id DESC",'ac_name');

$Times= z(1,"WHERE Owner_id='".$whos."'ORDER BY id DESC",'datetime');

$Pics= z(1,"WHERE Owner_id='".$whos."'ORDER BY id DESC",'pic');



echo '<div>';


for ($i=0; $i <count($Olds) ; $i++) { 
	# code...
if ($i%3==0) {echo '<a href="photos/'.$Pics[$i].'">';
echo '<img src="'.  'photos/' . $Pics[$i] .'" alt="" />';
echo '<h3>'; echo $Olds[$i];
	# code...



echo '</h3>';
echo '';
echo '<div class="memoli">';
echo '';
echo '</div>';
echo '';
echo $Times[$i];
echo '';
echo '</a>';
echo '';
echo '';
}}
echo '</div>';



echo '<div>';


for ($i=0; $i <count($Olds) ; $i++) { 
	# code...
if ($i%3==1) {echo '<a href="images/fulls/trip.gif">';
echo '<img src="'.  'photos/' . $Pics[$i] .'" alt="" />';
echo '<h3>'; echo $Olds[$i];
	# code...

echo '</h3>';
echo '';
echo '<div class="memoli">';
echo '';
echo '</div>';
echo '';
echo $Times[$i];
echo '';
echo '</a>';}

}
echo '';
echo '';
echo '</div>';


echo '<div>';


for ($i=0; $i <count($Olds) ; $i++) { 
	# code...
if ($i%3==2) {echo '<a href="images/fulls/trip.gif">';
echo '<img src="'.  'photos/' . $Pics[$i] .'" alt="" />';
echo '<h3>'; echo $Olds[$i];
	# code...

echo '</h3>';
echo '';
echo '<div class="memoli">';
echo '';
echo '</div>';
echo '';
echo $Times[$i];
echo '';
echo '</a>';
}

}
echo '';
echo '';
echo '</div>';

  ?>



								<!-- <div>
									<a
										<h3>Swimming</h3><br/>
<div class="memoli">

</div>

											 Yesterday 16.45</h3>
									</a>
									<a href="images/fulls/paris.jpg">
										<img src="images/thumbs/paris.jpg" alt="" />
										<h3>Happy</h3>

										<div class="memoli">

										</div>

																					Monday 12.33

									</a>
								</div>

								<div>
									<a href="images/fulls/trip.gif">
										<img src="images/thumbs/trip.gif" alt="" />
										<h3>Tripping</h3>

										<div class="memoli">

										</div>

																					06.06.2017 04:20

									</a>


								</div>

								<div>
									<a href="images/fulls/book.jpg">
										<img src="images/thumbs/book.jpg" alt="" />
										<h3>Reading</h3>

										<div class="memoli">

										</div>

																					10.02.2017 00:00

									</a>

								</div> -->

							</section>

					</section>

				<!-- Footer -->
					<footer id="footer">
						<p> Now app is now Available at Apple Store <a href="#">Download</a> From Here .</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>

<script type="text/javascript">



$(document).ready(function () { var z = document.getElementById("alert");
    if(window.location.href.indexOf("success") > -1) {
      z.style.display="block";
      setTimeout(function(){ z.style.display="none" }, 3000);
    }
    if(window.location.href.indexOf("failed") > -1) {
    z.style.background="red"; z.innerHTML="Email or Password is incorrect";  z.style.display="block"; 
      setTimeout(function(){ z.style.display="none" }, 3000);
    }
    if(window.location.href.indexOf("signed") > -1) {
     z.innerHTML="You've successfully signed in";  z.style.color="white"; z.style.display="block";
      setTimeout(function(){ z.style.display="none" }, 3000);
    }




});
</script>

</html>
<?php  

//require(__DIR__.'/ayar.php');
//echo "Hoş geldin";

$hello="hoşgeldin";

echo $hello;
z(6,"firma");
echo strlen($hello);
 //$_Firma =z(1, ['ad'=>'ayb'], 'ad,telno');
 $_Firma=z(1,"WHERE 1",'ad');
 //print_r($_Firma);


echo isset($_SESSION['uname']);

 //echo $_Firma[1];
//z(2,["ad"=>"netadım","telno"=>"05552221100"]);
//_z(1);


 //_z(3,2,Array('ad'=>'ayb','telno'=>'053322211122')); 



die();
?>
