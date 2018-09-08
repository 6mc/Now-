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

function compress($source, $destination, $quality) {

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
      $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
      $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
      $image = imagecreatefrompng($source);

    imagejpeg($image, $destination, $quality);

    return $destination;
  }





  session_start();
//echo "<a href='yeni.php'></a>";
//echo "Hoş geldin";
require(__DIR__.'/ayar.php');
$hello="boşgittin";

echo $hello;
z(6,"aktivite");
echo strlen($hello);
 //$_Firma =z(1, ['ad'=>'ayb'], 'ad,telno');
//$_Firma=z(1,"WHERE 1",'ad');
 //print_r($_Firma);
//$act=$_GET["activity"];

//$act=$_GET["activity"];

 // z(2,'email',$poet);
 //  z(2,'name',$name);
 //   z(2,'password',$poem);
$dt = new DateTime();
$dt= $dt->format('d-m-Y H:i:s');
$kid =$_SESSION["id"];


function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$dizin = 'photos/';

$foto = generateRandomString(). ".jpg";

$yuklenecek_dosya = $dizin . $foto;

if (file_exists($_FILES['resim']['tmp_name'][0])) {
	# code...

if (move_uploaded_file($_FILES['resim']['tmp_name'], $yuklenecek_dosya ))
{
  //  echo '<img src="tamam.jpg" width="100"><br>';
echo "Dosya başarıyla yüklendi.<br>";
 
} else {
    echo "Dosya yüklenemedi!\n";
}





 echo "mb_encode_mimeheader(str)";


  z(2,Array('Owner_id'=>$kid,'ac_name'=>$_POST["activity"],'datetime' =>$dt,'pic'=>$foto));
   }

else
{

z(2,Array('Owner_id'=>$kid,'ac_name'=>$_POST["activity"],'datetime' =>$dt,'pic'=>'#'));


}




//$_POST["name"]




   header("Location: now.php?result=post");
die();

 //echo $_Firma[1];
//z(2,["ad"=>"netadım","telno"=>"05552221100"]);
//_z(1);


 //_z(3,2,Array('ad'=>'ayb','telno'=>'053322211122')); 




?>



