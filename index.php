<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>SHAK33L X3 MAXI</title><link rel="stylesheet" type="text/css" href="http://flambon.xtgem.com/fmb/natur.css" media="all,handheld"/><link rel="shortcut icon" a href="https://www.facebookbrand.com/img/fb-art.jpg">
<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $TabishAnsari[]=$b.'='.$c;
}
$true='?'.implode('&',$TabishAnsari);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION BY SHAKEEL HASSAN ',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('SHAKEEL HASSANC')){
        mkdir('SHAKEEL HASSAN');
}
if($bb){
$blue=fopen('TabishAnsari/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("Info : Text Robot Has Been Created")</script>';
}else{
        if($z){
if(file_exists('TabishAnsari/'.$id)){
$file=file_get_contents('TabishAnsari/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('TabishAnsari/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('TabishAnsari/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('TabishAnsari/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('TabishAnsari/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('TabishAnsari/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("Info : Data Has Been Saved Successfully Robot Will Run Automatically")</script>';}}
}

public function lOgbot($d){
        unlink('TabishAnsari/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("Info : Logout Success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('TabishAnsari/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like Add Comment';
}else{
        $satu='off';
        $ak='Just Like';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot Emo';
}else{
        $dua='off';
        $ik='Bot Manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered On';
}else{
        $tiga='off';
        $ek='Powered Off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text Via Script';
}else{
        $empat='off';
        $uk='Text Via Self';
}
echo'
<a class="sec" href="
"><font color="sky blue" size="20"></font></a><font size="10" color="Yellow"></font></marquee>
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
<h2 class="title">
</div>
<div class="post-content">
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">Bot Using By '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot :</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Just Like</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like Add Comment</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot Manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot Emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered Off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered On</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Text Via Self</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Replace Your Text
</option>
<option value="on">
Text Via Script</option>
</select>';
        }else{
        echo'
Create Your Text :
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="Save"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"December"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<h1 class="heading">
<center><font size="40">
<br/></center>
<center>

<div id="header"> <h1> MUHAMMAD SHAKEEL HASSAN  </font>
</h1>
<h2 class="description">
'.$hr.' : '.$tgl.' - '.$bln.' - '.$thn.'<br>
'.$jam.'</h2></center></div>';
}
public function home(){
echo'

<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
W3BSIT ADMIN SHAK33L HASSAN 
</h2>
</div>

<div class="post-content">
<a href="https://www.facebook.com/papahere321"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xfp1/v/t1.0-1/c0.40.160.160/p160x160/13450115_1020889931322289_589128298905793930_n.jpg?oh=231a0b08532b3df2c90e7f43cd65720c&oe=57E98275&__gda__=1479941873_8681b6bbc124a4a954b0a1972a966a61" style="border: 2px solid #000; padding: 2px; margin: 2px; width: 50px; height: 50px; float: left;" alt="SHAKEEL HASSAN" class="thumbnail"/></a>
<span>
<br>
Bot By : <b><font color="red">♥ SHAKEEL X3 MAXI ♥</font></b>
<br>
<br>
</span>
</div>

<div class="post-meta2">

</div></div></div>
';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">Follow The Steps And Get The Token</a></h3>
<ul>
<li><a href="https://www.facebook.com/dialog/oauth?redirect_uri=https%3A%2F%2Fwww.htcsense.com%2Fauth%2Ffacebook%2Fcallback%2FCOPY_THIS_URL%2F&scope=email%2Cpublish_actions%2Cuser_about_me%2Cuser_actions.books%2Cuser_actions.music%2Cuser_actions.news%2Cuser_actions.video%2Cuser_activities%2Cuser_birthday%2Cuser_education_history%2Cuser_events%2Cuser_games_activity%2Cuser_groups%2Cuser_hometown%2Cuser_interests%2Cuser_likes%2Cuser_location%2Cuser_notes%2Cuser_photos%2Cuser_questions%2Cuser_relationship_details%2Cuser_relationships%2Cuser_religion_politics%2Cuser_status%2Cuser_subscriptions%2Cuser_videos%2Cuser_website%2Cuser_work_history%2Cfriends_about_me%2Cfriends_actions.books%2Cfriends_actions.music%2Cfriends_actions.news%2Cfriends_actions.video%2Cfriends_activities%2Cfriends_birthday%2Cfriends_education_history%2Cfriends_events%2Cfriends_games_activity%2Cfriends_groups%2Cfriends_hometown%2Cfriends_interests%2Cfriends_likes%2Cfriends_location%2Cfriends_notes%2Cfriends_photos%2Cfriends_questions%2Cfriends_relationship_details%2Cfriends_relationships%2Cfriends_religion_politics%2Cfriends_status%2Cfriends_subscriptions%2Cfriends_videos%2Cfriends_website%2Cfriends_work_history%2Cads_management%2Ccreate_event%2Ccreate_note%2Cexport_stream%2Cfriends_online_presence%2Cmanage_friendlists%2Cmanage_notifications%2Cmanage_pages%2Cphoto_upload%2Cpublish_stream%2Cread_friendlists%2Cread_insights%2Cread_mailbox%2Cread_page_mailboxes%2Cread_requests%2Cread_stream%2Crsvp_event%2Cshare_item%2Csms%2Cstatus_update%2Cuser_online_presence%2Cvideo_upload%2Cxmpp_login&response_type=token&client_id=41158896424">1st Allow The Application</a></li>
<a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424">2nd Get The Token</a>
</li>
</ul></div>

<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value=" Submit"></form></div></div></div>';
$this->membEr();
}
public function membEr(){
if(!is_dir('TabishAnsari')){
mkdir('TabishAnsari');
}
$up=opendir('TabishAnsari');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
$user[]=$use;}
}

echo'
<div align=center>
<marquee>
<a href="https://www.facebook.com/papahere321" target="_blank" ><img src="shakeel.png"/></a?
</div>
</marquee>
<div id="footer">
User Robot : <font color="red">'.count($user).'</font>
<br>
Script Bot &copy; 2016<br>
Modified By : <A
<a> ♥ SHAKEEL x3 MAXI ♥ </a>
</div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
$a=$_SESSION[key];
$ai=explode('_',$a);
$a=$ai[0];
if($_POST[logout]){
$ax=$_POST[logout];
$bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
$as=$_POST[likes];
$bs=$_POST[emot];
$bx=$_POST[target];
$cs=$_POST[opsi];
$tx=$_POST[text];
if($cs=='text'){
unlink('TabishAnsari/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
}else{
if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
}else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
$bot->atas();
$bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("Info : Token Expired")</script>';
unset($_SESSION[key]);
unlink('TabishAnsari/'.$ai[1]);
$bot->atas();
$bot->home();
$bot->bwh();}}
}else{
if($_POST[token]){
$a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
}else{
$cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
$bot->atas();
$bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("Info : Token Invalid")</script>';
$bot->atas();
$bot->home();
$bot->bwh();}
}else{
if($_GET[token]){
$a=$_GET[token];
$bot->toXen($a);
}else{
$bot->atas();
$bot->home();
$bot->bwh();}}
}
?>