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


<?php  session_start();
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
//$act=$_GET["activity"];

$act=$_POST['query'];

 // z(2,'email',$poet);
 //  z(2,'name',$name);
 //   z(2,'password',$poem);
//$dt = new DateTime();
//$dt= $dt->format('d-m-Y H:i:s');
$kid =$_SESSION["id"];

$zerbe = z(1,$kid,'Following').','.$act['activity'];

z(3,$kid,'Following',$zerbe);

//  z(2,Array('Owner_id'=>$kid,'ac_name'=>$act['activity'],'datetime' =>$dt,'pic'=>'wow.jpg'));
  // header("Location: now.php?result=post");
//die();

 //echo $_Firma[1];
//z(2,["ad"=>"netadım","telno"=>"05552221100"]);
//_z(1);


 //_z(3,2,Array('ad'=>'ayb','telno'=>'053322211122')); 




?>



