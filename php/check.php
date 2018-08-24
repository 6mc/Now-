<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="#">salaav</a>
<script type="text/javascript">
	
	var val=getElementsById('');


</script>
</body>
</html>

<pre>


<?php  
session_start();
//echo "<a href='yeni.php'></a>";
//echo "Hoş geldin";
require(__DIR__.'/ayar.php');
$hello="boşgittin";

echo $hello;
z(6,"users");
echo strlen($hello);
 //$_Firma =z(1, ['ad'=>'ayb'], 'ad,telno');
//$_Firma=z(1,"WHERE 1",'ad');
 //print_r($_Firma);
$poet=$_GET["uid"];

$poem=$_GET["upass"];
 // z(2,'email',$poet);
 //  z(2,'name',$name);
 //   z(2,'password',$poem);
$result =z(1,array('email'=>$poet,'password'=>$poem));

echo $result;
  if ($result==NULL) {
  	header("Location: now.php?result=failed".$result);
  	# code...
  }
else
{
	header("Location: now.php?result=signed".$result);
$_SESSION["uname"] = $poet;
$_SESSION["upass"] = $poem;

}
   
die();

 //echo $_Firma[1];
//z(2,["ad"=>"netadım","telno"=>"05552221100"]);
//_z(1);


 //_z(3,2,Array('ad'=>'ayb','telno'=>'053322211122')); 




?>



