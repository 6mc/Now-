<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="#">salaav</a>



<h1>Edit</h1>

    <label for="email"><b>Email</b></label>
    <input  type="text" style="color:white;" placeholder="Enter Email" value='




   .z(1,$_SESSION['id'],'email')."".  ' name="email" required>

   
     <label for="Location"><b>Location</b></label>
    <input  type="text" style="color:white;" placeholder="Enter Location"  value='




   .z(1,$_SESSION['id'],'Location')."".  ' name="location" required>

    <label for="Name"><b>Name</b></label>
    <input type="text" style="color:white;" placeholder="Name"  value='




   .z(1,$_SESSION['id'],'name')."".  ' name="name" required>
<label for="pic"><b>Profile Picture</b></label>






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
$dizin=     "images";


 //$_Firma =z(1, ['ad'=>'ayb'], 'ad,telno');
//$_Firma=z(1,"WHERE 1",'ad');
 //print_r($_Firma);
// if (move_uploaded_file($_FILES['resim']['tmp_name'],"./$dizin/{$_FILES['resim']['name']}"); ) {



// 	echo "sucess";
// 	# code...
// }
// else
// 	{echo "fail";}

$dizin = 'images/';

function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$foto = generateRandomString(). ".jpg";

$yuklenecek_dosya = $dizin . $foto;
 
if (move_uploaded_file($_FILES['resim']['tmp_name'], $yuklenecek_dosya ))
{
  //  echo '<img src="tamam.jpg" width="100"><br>';
echo "Dosya başarıyla yüklendi.<br>";
 
} else {
    echo "Dosya yüklenemedi!\n";
}







 // z(2,'email',$poet);
 //  z(2,'name',$name);
 //   z(2,'password',$poem);


//   z(2,Array('email'=>$poet,'name'=>$name,'password' => $poem, 'pic'=> 'default.png'));
//    header("Location: index.php?result=success");
// die();

 //echo $_Firma[1];
//z(2,["ad"=>"netadım","telno"=>"05552221100"]);
//_z(1);


 //_z(3,2,Array('ad'=>'ayb','telno'=>'053322211122')); 


//z(3,$_SESSION['id'],Array('name'=>$_POST["name"],'email'=>$_POST["email"], 'pic' => $foto ,"location"=> $_POST["location"]));

z(3,$_SESSION['id'],'pic',$foto);

    header("Location: index.php?result=success");
die();

?>



