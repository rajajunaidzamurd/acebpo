<?php
date_default_timezone_set('Asia/Islamabad');
$yx = opendir('sh4d0w');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=5&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a');
fwrite($y,$x); fclose($y);

$name = json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=name&access_token='.$token),true);
$exp_nam = explode(' ',$stat[data][$i-1][from][name]);
$nama = $gender.' '.$exp_nam[0];
$tags = explode(' ',$stat[data][$i-1][from][id]);
$tagged_name = ' @['.$tags[0].':1] ';
$kata= array(
'cinta.php',
'motivasi.php',
'motto.php',
'bijak.php',
);

$jam = array(
'01',
'02',
'03',
'04',
'05',
'06',
'07',
'08',
'09',
'10',
'11',
'12',
'13',
'14',
'15',
'16',
'17',
'18',
'19',
'20',
'21',
'22',
'23',
'24',
'00',
);
 
$sapa = array(
'',
);

$ucapan = gmdate('H',time()+7*3600); 
$ucapan = str_replace($jam,$sapa,$ucapan);

$emo=array (
'😀','😁','😂','🤣','😃','😄','😅','😆','😉','😊','😋','😎','😍','😘','😗','😙','😚','☺','🙂','🙄','😮','😛','😜','😝','😌','😒','😲','😢','😭','🤓','😡','😠','😳','😈','👿','😺','😸','😹','😻','😼','😽','🙀','😿','😾','🙈','🙉','🙊','💪','👈','👉','☝','👆','👇','✌','🤞','🖖','🤘','🤙','🖐','✋','👌','👍','👎','✊','👊','🤛','🤜','🤚','💚','💛','🧡','💜','🖤','💝','💞','💙','🐺','🦊','🐱','🐈','🦁','🐯','🐅','🐆','🦄','🦓','🦌','🐮','🐂','🐃','🐄','🐏','🐧','🐦','🐥','🐤','🐣','🐓','🐔','🦃','🐾','🐼','🐨','🐻','🦔','🐿','🐇','🐰','🐹','🐀','🐁','🐭','🦏','🐘','🦒','🐫','🐪','🐐','🐑','🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🐬','🐟','🐠','🦈','🐌','🦋','🐛','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✅','✔','☑','🇵🇰',
);

$emoticon=$emo[rand(0,count($emo)-1)];

$emo1=array (
'😀','😁','😂','🤣','😃','😄','😅','😆','😉','😊','😋','😎','😍','😘','😗','😙','😚','☺','🙂','🙄','😮','😛','😜','😝','😌','😒','😲','😢','😭','🤓','😡','😠','😳','😈','👿','😺','😸','😹','😻','😼','😽','🙀','😿','😾','🙈','🙉','🙊','💪','👈','👉','☝','👆','👇','✌','🤞','🖖','🤘','🤙','🖐','✋','👌','👍','👎','✊','👊','🤛','🤜','🤚','💚','💛','🧡','💜','🖤','💝','💞','💙','🐺','🦊','🐱','🐈','🦁','🐯','🐅','🐆','🦄','🦓','🦌','🐮','🐂','🐃','🐄','🐏','🐧','🐦','🐥','🐤','🐣','🐓','🐔','🦃','🐾','🐼','🐨','🐻','🦔','🐿','🐇','🐰','🐹','🐀','🐁','🐭','🦏','🐘','🦒','🐫','🐪','🐐','🐑','🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🐬','🐟','🐠','🦈','🐌','🦋','🐛','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✅','✔','☑','🇵🇰',
);

$emoticon1=$emo1[rand(0,count($emo1)-1)];

$emo2=array (
'😀','😁','😂','🤣','😃','😄','😅','😆','😉','😊','😋','😎','😍','😘','😗','😙','😚','☺','🙂','🙄','😮','😛','😜','😝','😌','😒','😲','😢','😭','🤓','😡','😠','😳','😈','👿','😺','😸','😹','😻','😼','😽','🙀','😿','😾','🙈','🙉','🙊','💪','👈','👉','☝','👆','👇','✌','🤞','🖖','🤘','🤙','🖐','✋','👌','👍','👎','✊','👊','🤛','🤜','🤚','💚','💛','🧡','💜','🖤','💝','💞','💙','🐺','🦊','🐱','🐈','🦁','🐯','🐅','🐆','🦄','🦓','🦌','🐮','🐂','🐃','🐄','🐏','🐧','🐦','🐥','🐤','🐣','🐓','🐔','🦃','🐾','🐼','🐨','🐻','🦔','🐿','🐇','🐰','🐹','🐀','🐁','🐭','🦏','🐘','🦒','🐫','🐪','🐐','🐑','🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🐬','🐟','🐠','🦈','🐌','🦋','🐛','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✅','✔','☑','🇵🇰',
);

$emoticon2=$emo2[rand(0,count($emo2)-1)];

$emo3=array (
'😀','😁','😂','🤣','😃','😄','😅','😆','😉','😊','😋','😎','😍','😘','😗','😙','😚','☺','🙂','🙄','😮','😛','😜','😝','😌','😒','😲','😢','😭','🤓','😡','😠','😳','😈','👿','😺','😸','😹','😻','😼','😽','🙀','😿','😾','🙈','🙉','🙊','💪','👈','👉','☝','👆','👇','✌','🤞','🖖','🤘','🤙','🖐','✋','👌','👍','👎','✊','👊','🤛','🤜','🤚','💚','💛','🧡','💜','🖤','💝','💞','💙','🐺','🦊','🐱','🐈','🦁','🐯','🐅','🐆','🦄','🦓','🦌','🐮','🐂','🐃','🐄','🐏','🐧','🐦','🐥','🐤','🐣','🐓','🐔','🦃','🐾','🐼','🐨','🐻','🦔','🐿','🐇','🐰','🐹','🐀','🐁','🐭','🦏','🐘','🦒','🐫','🐪','🐐','🐑','🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🐬','🐟','🐠','🦈','🐌','🦋','🐛','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✅','✔','☑','🇵🇰',
);

$emoticon3=$emo3[rand(0,count($emo3)-1)];

$emo4=array (
'😀','😁','😂','🤣','😃','😄','😅','😆','😉','😊','😋','😎','😍','😘','😗','😙','😚','☺','🙂','🙄','😮','😛','😜','😝','😌','😒','😲','😢','😭','🤓','😡','😠','😳','😈','👿','😺','😸','😹','😻','😼','😽','🙀','😿','😾','🙈','🙉','🙊','💪','👈','👉','☝','👆','👇','✌','🤞','🖖','🤘','🤙','🖐','✋','👌','👍','👎','✊','👊','🤛','🤜','🤚','💚','💛','🧡','💜','🖤','💝','💞','💙','🐺','🦊','🐱','🐈','🦁','🐯','🐅','🐆','🦄','🦓','🦌','🐮','🐂','🐃','🐄','🐏','🐧','🐦','🐥','🐤','🐣','🐓','🐔','🦃','🐾','🐼','🐨','🐻','🦔','🐿','🐇','🐰','🐹','🐀','🐁','🐭','🦏','🐘','🦒','🐫','🐪','🐐','🐑','🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🐬','🐟','🐠','🦈','🐌','🦋','🐛','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✅','✔','☑','🇵🇰',
);

$emoticon4=$emo3[rand(0,count($emo4)-1)];

$text = array(
''.$emoticon.' '.$tagged_name.' '.$emoticon.'
'.$emoticon1.' Personal Site '.$emoticon1.'
'.$emoticon2.' Nice Profile Photo '.$emoticon2.'
'.$emoticon3.' Raja Bot Team '.$emoticon3.'
'.$emoticon4.' Powered By : Raja Junaid'.$emoticon4.' ',
);

$comments = $text[rand(0,count($text)-1)];

$site = '';

$return = ' '.$comments.' 
'.$site.' ';

$react = array(
'WOW',
'LIKE',
'LOVE',
);
$reaction = $react[rand(0,count($react)-1)];

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($comments).'&attachment_url=http://graph.facebook.com/'.$stat[data][$i-1][from][id].'/picture?type=large&redirect=true&width=500&height=500&access_token='.$token.'&method=POST');
echo '<center><hr>Done To => '.$stat[data][$i-1][from][name].' </hr></center>';
}
}

function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>