<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Feed </title>
  
  
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.10/css/all.css'>

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url("https://fonts.googleapis.com/css?family=Questrial");
html {
  min-height: 100%;
  display: grid;overflow: scroll;
}

a{
font-family: "Questrial", sans-serif;
text-decoration: none;
color: #3b3b3b;
}

body {
/*background: linear-gradient(to bottom left, #C0CFB2 10%, #8BA989 80%);*/
 
 background-image: url("bg.jpg");

  display: grid;
  overflow: hidden;
}

#player {
  background: #FFFFFF;
  position: relative;
  margin: auto;
  width: 300px;
  height: 300px;
  overflow: hidden;
  border-radius: 5px;
  box-shadow: 5px 5px 15px rgba(54, 79, 60, 0.4);
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}
#player:hover {
  transform: scale(1.05);
}

.album {
/*  background: linear-gradient(rgba(54, 79, 60, 0.25), rgba(73, 101, 77, 0.55)), url("http://4.bp.blogspot.com/-pcPjBBdE_K8/U7v4oEX3M8I/AAAAAAAAD2I/6dWyzgiPzkQ/s1600/Clean+BAndit+Album+.jpg");*/
  background-repeat: no-repeat;
  background-size: 300px;
  width: 100%;
  height: 100%;
  border-radius: 5px;
  position: absolute;
}

.heart {
  position: absolute;
  right: 0;
  color: #FFFFFF;
  margin: 10px;
  transition: all .4s ease;
}

.clicked {
  color: #49654D;
  transform: scale(1.2);
  transition: all .4s ease;
}

.info {
  height: 115px;
  width: 100%;
  position: absolute;
  bottom: 0;
  background: rgba(255, 255, 255, 0.85);
  transform: translateY(35px);
  transition: all .5s ease-in-out;
}

.up {
  transform: translateY(0px);
}

.progress-bar {
  height: 5px;
  width: 73%;
  margin: 6% auto;
  background: #cdd9c2;
  border-radius: 10px;
  font-family: "Questrial", sans-serif;
}

.fill {
  background-color: #8BA989;
  width: 35%;
  height: 0.3rem;
  border-radius: 2px;
}

.time--current, .time--total {
  color: #364F3C;
  font-size: 10px;
  position: absolute;
  margin-top: -2px;
}

.time--current {
  left: 15px;
}

.time--total {
  right: 15px;
}

.currently-playing {
  text-align: center;
  margin-top: -3px;
}

.song-name, .artist-name {
  font-family: "Questrial", sans-serif;
  text-transform: uppercase;
  margin: 0;
}

.song-name {
  font-size: .8em;
  letter-spacing: 3px;
  color: #364F3C;
}

.artist-name {
  font-size: .6em;
  letter-spacing: 1.5px;
  color: #557c5f;
  margin-top: 5px;
}

.controls {
  display: flex;
  align-items: center;
  font-size: .8em;
  justify-content: center;
  color: #8BA989;
}
.controls .play, .controls .pause {
  margin: 15px 25px;
  color: #6e946c;
}
.controls .option {
  left: 10px;
  position: absolute;
  font-size: .8em;
}
.controls .add {
  right: 10px;
  position: absolute;
  font-size: .8em;
}
.controls .volume {
  margin-right: 30px;
  font-size: .8em;
}
.controls .shuffle {
  margin-left: 30px;
  font-size: .8em;
}

.play, .pause, .next, .previous, .option, .add, .volume, .shuffle {
  transition: all .5s ease;
}
.play:hover, .pause:hover, .next:hover, .previous:hover, .option:hover, .add:hover, .volume:hover, .shuffle:hover {
  color: #557c5f;
}

footer {
  position: absolute;
  bottom: 0;
  right: 0;
  text-align: center;
  font-size: 0.5em;
  text-transform: uppercase;
  padding: 10px;
  color: #49654D;
  letter-spacing: 3px;
  font-family: "Questrial", sans-serif;
}
footer a {
  color: #ffffff;
  text-decoration: none;
}
footer a:hover {
  color: #49654D;
}

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>


<?php  
session_start();



if (isset($_SESSION['uname'])) {
  # code...
//echo '<a style="margin-top:4%;" href="signout.php">Sign Out</a>';
echo '<div style=" margin-top:4%; border-radius: 4px; color: black; width: 18%; text-align: center;">

<a style=" text-decoration:none; color:black; padding:5%; border-radius: 4px;background-color: pink;margin-top:4%;" href="./signout.php">Sign Out</a>

<a  style=" text-decoration:none; color:black; padding:5%; border-radius: 4px; background-color: white;margin-top:4%;" href="./now.php">Profile</a>
<img style="margin-left:24%; margin-left:250%; " src="./adas.png">
</div>';
}
else
{

  header("Location: index.php");
die();

}
?>
<div id="namazgah" style="margin-top: 8%;"></div>

<?php 

require(__DIR__.'/ayar.php');


z(6,'users');

$following = z(1,$_SESSION["id"],'Following');

$flist = explode(",", $following);

//$flist[2];

$sigue[0] = "22"; 

array_pop($sigue);

for ($i=0; $i < count($flist) ; $i++) { 

if ($flist[$i]    != "") {array_push($sigue, $flist[$i]);
  # code...
}



  # code...
}


//print_r($sigue);
$postid[0] = "22"; 

array_pop($postid);

$reals[0] = "22"; 

array_pop($reals);


z(6,'aktivite');

for ($i=0; $i <count($sigue); $i++) { 
  # code...
$Posts = z(1,"WHERE Owner_id='".$sigue[$i]."'ORDER BY id DESC",'id');


for ($j=0; $j <count($Posts) ; $j++) { 

  array_push($reals, $Posts[$j]);
   # code...
 }
}

function bubbleSort(array $arr) {
    $sorted = false;
    while (false === $sorted) {
        $sorted = true;
        for ($i = 0; $i < count($arr)-1; ++$i) {
            $current = $arr[$i];
            $next = $arr[$i+1];
            if ($next > $current) {
                $arr[$i] = $next;
                $arr[$i+1] = $current;
                $sorted = false;
            }
        }
    }
    return $arr;
}



$finals = bubbleSort($reals);


//echo $reals[0][0];

//print_r($reals);

for ($i=0; $i <count($finals) ; $i++) { 

echo '<div style="margin-top: 4%;" id="player">';
echo '<div style="  background: linear-gradient(rgba(54, 79, 60, 0.25), rgba(73, 101, 77, 0.55)), url("indir.png")" class="album">';

//z(1,$reals[$i],'pic')

if (z(1,$finals[$i],'pic')!='#') {echo '<img src="photos/'.  z(1,$finals[$i],'pic')  .'"width="300" height="300" >';
  # code...
}
else


echo '<div class="heart"><i class="fas fa-heart"></i></div>';
echo '</div>';
echo '<div class="info">';
echo '';
echo '<div style="margin-top: 4%;" class="currently-playing">';
echo '<h2 class="song-name">'.z(1,$finals[$i],'ac_name') .'</h2>';
$yapan =z(1,$finals[$i],'Owner_id');
z(6,'users');  
echo '<h3 class="artist-name">'.z(1,$yapan,'name').'</h3>';
z(6,'aktivite');
echo '</div>';
echo '';
echo '</div>';
echo '</div>';


  # code...
}










 ?>


  <!-- <!-- <div style="height: 100px;" id="player">
  
  <div class="info">
   <!--  <div class="progress-bar">
      <div class="time--current">1:25</div>
      <div class="time--total">-3:15</div>
      <div class="fill"></div>
    </div> -->


<footer>
  
</footer>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
