<?
$calllink = $_SERVER['HTTP_HOST'];
$calllink = str_replace("girgit.chitthajagat.in","", $calllink);
$calllink = str_replace("girgit.chitthajagat.com","", $calllink);
$calllink = str_replace("www.","", $calllink);           
$calllink = str_replace(".","", $calllink);      
$gci = array('hi.girgit.chitthajagat.in/', 'kn.girgit.chitthajagat.in/', 'or.girgit.chitthajagat.in/', 'pa.girgit.chitthajagat.in/', 'gu.girgit.chitthajagat.in/', 'ml.girgit.chitthajagat.in/', 'ta.girgit.chitthajagat.in/', 'te.girgit.chitthajagat.in/', 'en.girgit.chitthajagat.in/', 'bn.girgit.chitthajagat.in/');
$gch = "";
$url = str_replace($gci, $gch, $url);  
$st = parsehtml( $url );
error_reporting(E_ERROR);
define('MAGPIE_CACHE_ON', 0);
require_once('magpie/rss_fetch.inc');
require_once('magpie/rss_utils.inc');

$rss = fetch_rss( $url );
if($rss){
$link = $rss->channel['link'];
$link2 = str_replace("http://", "http://$calllink.girgit.chitthajagat.in/", $link);
$st = str_replace($link, $link2, $st);
$items = $rss->items;

   foreach ($items as $item)
   {

      $orlinki = mysql_escape_string($item['feedburner']['origlink']);
$orlink2 = str_replace("http://", "http://$calllink.girgit.chitthajagat.in/", $orlink);
$st = str_replace($orlink, $orlink2, $st);
      $linki = mysql_escape_string($item['link']);
$linki2 = str_replace("http://", "http://$calllink.girgit.chitthajagat.in/", $linki);
$st = str_replace($linki, $linki2, $st);

   }
}
if(!$rss){
$norss = "yes";
}
$arrayLinks = &linkExtractor( $st, false );
if( $arrayLinks != false ) {
	for( $a = 0, $b = count( $arrayLinks ); $a < $b; $a++ ) {
$orl = $arrayLinks[$a];
$al = str_replace('http://', '', $arrayLinks[$a]);
$st = str_replace("\"$arrayLinks[$a]\"", "\"http://$calllink.girgit.chitthajagat.in/$al\"", $st);
$st = str_replace("='$arrayLinks[$a]'", "='http://$calllink.girgit.chitthajagat.in/$al'", $st);
$st = str_replace("= '$arrayLinks[$a]'", "= 'http://$calllink.girgit.chitthajagat.in/$al'", $st);
$st = str_replace("&quot;$arrayLinks[$a]&quot;", "&quot;http://$calllink.girgit.chitthajagat.in/$al&quot;", $st);
	}
}
$st = str_replace($a1sp, $a1ch, $st);
$st = str_replace($hihex, $hiuni, $st);
$st = str_replace($tehex, $teuni, $st);
$st = str_replace($tahex, $tauni, $st);
$st = str_replace($orhex, $oruni, $st);
$st = str_replace($pahex, $pauni, $st);
$st = str_replace($mlhex, $mluni, $st);
$st = str_replace($knhex, $knuni, $st);
$st = str_replace($guhex, $guuni, $st);
$st = str_replace($bnhex, $bnuni, $st);
$st = str_ireplace('charset=ISO-8859-1"', 'charset=UTF-8"', $st);

if ($calllink == "en"){
$st = str_replace($othersp, $hisp, $st);
$st = str_replace($teorig, $hiorig, $st);
$st = str_replace($bnorig, $hiorig, $st);
$st = str_replace($taorig, $hiorig, $st);
$st = str_replace($knorig, $hiorig, $st);
$st = str_replace($mlorig, $hiorig, $st);
$st = str_replace($paorig, $hiorig, $st);
$st = str_replace($guorig, $hiorig, $st);
$st = str_replace($ororig, $hiorig, $st);
$st = converttoroman($st);
}
if ($calllink == "bn"){
$st = str_replace($other2bn, $bnsp, $st);
$st = str_replace($hiorig, $bnorig, $st);
$st = str_replace($teorig, $bnorig, $st);
$st = str_replace($taorig, $bnorig, $st);
$st = str_replace($knorig, $bnorig, $st);
$st = str_replace($mlorig, $bnorig, $st);
$st = str_replace($paorig, $bnorig, $st);
$st = str_replace($guorig, $bnorig, $st);
$st = str_replace($ororig, $bnorig, $st);
}
if ($calllink == "or"){
$st = str_replace($other2or, $orsp, $st);
$st = str_replace($hiorig, $ororig, $st);
$st = str_replace($teorig, $ororig, $st);
$st = str_replace($taorig, $ororig, $st);
$st = str_replace($knorig, $ororig, $st);
$st = str_replace($mlorig, $ororig, $st);
$st = str_replace($paorig, $ororig, $st);
$st = str_replace($guorig, $ororig, $st);
$st = str_replace($bnorig, $ororig, $st);
}
if ($calllink == "te"){
$st = str_replace($other2te, $tesp, $st);
$st = str_replace($hiorig, $teorig, $st);
$st = str_replace($bnorig, $teorig, $st);
$st = str_replace($taorig, $teorig, $st);
$st = str_replace($knorig, $teorig, $st);
$st = str_replace($mlorig, $teorig, $st);
$st = str_replace($paorig, $teorig, $st);
$st = str_replace($guorig, $teorig, $st);
$st = str_replace($ororig, $teorig, $st);
}
if ($calllink == "ta"){
$st = str_replace($other2ta, $tasp, $st);
$st = str_replace($hiorig, $taorig, $st);
$st = str_replace($bnorig, $taorig, $st);
$st = str_replace($teorig, $taorig, $st);
$st = str_replace($knorig, $taorig, $st);
$st = str_replace($mlorig, $taorig, $st);
$st = str_replace($paorig, $taorig, $st);
$st = str_replace($guorig, $taorig, $st);
$st = str_replace($ororig, $taorig, $st);
}
if ($calllink == "kn"){
$st = str_replace($other2kn, $knsp, $st);
$st = str_replace($hiorig, $knorig, $st);
$st = str_replace($bnorig, $knorig, $st);
$st = str_replace($taorig, $knorig, $st);
$st = str_replace($teorig, $knorig, $st);
$st = str_replace($mlorig, $knorig, $st);
$st = str_replace($paorig, $knorig, $st);
$st = str_replace($guorig, $knorig, $st);
$st = str_replace($ororig, $knorig, $st);
}
if ($calllink == "ml"){
$st = str_replace($other2ml, $mlsp, $st);
$st = str_replace($hiorig, $mlorig, $st);
$st = str_replace($bnorig, $mlorig, $st);
$st = str_replace($taorig, $mlorig, $st);
$st = str_replace($knorig, $mlorig, $st);
$st = str_replace($teorig, $mlorig, $st);
$st = str_replace($paorig, $mlorig, $st);
$st = str_replace($guorig, $mlorig, $st);
$st = str_replace($ororig, $mlorig, $st);
}
if ($calllink == "gu"){
$st = str_replace($other2gu, $gusp, $st);
$st = str_replace($hiorig, $guorig, $st);
$st = str_replace($bnorig, $guorig, $st);
$st = str_replace($taorig, $guorig, $st);
$st = str_replace($knorig, $guorig, $st);
$st = str_replace($mlorig, $guorig, $st);
$st = str_replace($paorig, $guorig, $st);
$st = str_replace($teorig, $guorig, $st);
$st = str_replace($ororig, $guorig, $st);
}
if ($calllink == "pa"){
$st = str_replace($other2pa, $pasp, $st);
$st = str_replace($hiorig, $paorig, $st);
$st = str_replace($bnorig, $paorig, $st);
$st = str_replace($taorig, $paorig, $st);
$st = str_replace($knorig, $paorig, $st);
$st = str_replace($mlorig, $paorig, $st);
$st = str_replace($teorig, $paorig, $st);
$st = str_replace($guorig, $paorig, $st);
$st = str_replace($ororig, $paorig, $st);
}
if ($calllink == "hi"){
$st = str_replace($othersp, $hisp, $st);
$st = str_replace($teorig, $hiorig, $st);
$st = str_replace($bnorig, $hiorig, $st);
$st = str_replace($taorig, $hiorig, $st);
$st = str_replace($knorig, $hiorig, $st);
$st = str_replace($mlorig, $hiorig, $st);
$st = str_replace($paorig, $hiorig, $st);
$st = str_replace($guorig, $hiorig, $st);
$st = str_replace($ororig, $hiorig, $st);
}
$urlor = str_replace("http://", "", $url);
$find = "<meta content='allow-index' name='tell-girgit'/>";
$testindex=substr_count ($st,$find);
$find2 = "girgitallowindex";
$testindex2=substr_count ($st,$find2);
if ((($testindex < 1) and ($testindex2 < 1)) or ($calllink == "hi")){
if ($norss){
$st = str_ireplace('</title>', '</title>
<META NAME="robots" CONTENT="noindex,nofollow"/>', $st);
$noinsert = "yes";
$tt=substr_count ($st,"</title>");
$tt2=substr_count ($st,"</TITLE>");
if ($tt < 1 and $tt2 < 1 and $find2 < 1){
echo '<html>
<head>
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Girgit Chitthajagat : Indic to Indic Online Transliteration.</title>
<META NAME="robots" CONTENT="noindex,nofollow"/>
</head>
<body>
<br>Could not the Resolve web address provided, Invalid html found.
</body>
</html>';
exit();
}
}
}
$test=substr_count ($st,"<body>");
$test2=substr_count ($st,"<BODY>");
if ($norss){
if ($test > 0 or $test2 > 0){
$st = str_ireplace("<body>", "<body>
<div>Online TransLiteration by <a href='http://girgit.chitthajagat.in'>Girgit.Chitthajagat.in</a>, of <a href='$url'>$url</a> <a href='http://girgit.chitthajagat.in/disclaimer.html'>Disclaimer</a><br />You may also see this page in 
<a href='http://bn.girgit.chitthajagat.in/$urlor'>Bangla</a>, 
<a href='http://hi.girgit.chitthajagat.in/$urlor'>Devanagari</a>, 
<a href='http://gu.girgit.chitthajagat.in/$urlor'>Gujarati</a>, 
<a href='http://pa.girgit.chitthajagat.in/$urlor'>Gurmukhi</a>, 
<a href='http://kn.girgit.chitthajagat.in/$urlor'>Kannada</a>, 
<a href='http://ml.girgit.chitthajagat.in/$urlor'>Malayalam</a>, 
<a href='http://or.girgit.chitthajagat.in/$urlor'>Oriya</a>, 
<a href='http://en.girgit.chitthajagat.in/$urlor'>Roman(eng)</a>, 
<a href='http://ta.girgit.chitthajagat.in/$urlor'>Tamil</a>, 
<a href='http://te.girgit.chitthajagat.in/$urlor'>Telugu</a></div>", $st);
}else{
echo "<div>Online TransLiteration by <a href='http://girgit.chitthajagat.in'>Girgit.Chitthajagat.in</a>, of <a href='$url'>$url</a> <a href='http://girgit.chitthajagat.in/disclaimer.html'>Disclaimer</a><br />You may also see this page in 
<a href='http://bn.girgit.chitthajagat.in/$urlor'>Bangla</a>, 
<a href='http://hi.girgit.chitthajagat.in/$urlor'>Devanagari</a>, 
<a href='http://gu.girgit.chitthajagat.in/$urlor'>Gujarati</a>, 
<a href='http://pa.girgit.chitthajagat.in/$urlor'>Gurmukhi</a>, 
<a href='http://kn.girgit.chitthajagat.in/$urlor'>Kannada</a>, 
<a href='http://ml.girgit.chitthajagat.in/$urlor'>Malayalam</a>, 
<a href='http://or.girgit.chitthajagat.in/$urlor'>Oriya</a>, 
<a href='http://en.girgit.chitthajagat.in/$urlor'>Roman(eng)</a>, 
<a href='http://ta.girgit.chitthajagat.in/$urlor'>Tamil</a>, 
<a href='http://te.girgit.chitthajagat.in/$urlor'>Telugu</a></div>";
}
}
echo $st;
if (!$st){
echo '<html>
<head>
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Girgit Chitthajagat : Indic to Indic Online Transliteration.</title>
<META NAME="robots" CONTENT="noindex,nofollow"/>
</head>
<body>
<br>Could not the Resolve web address provided
</body>
</html>';
}
//if (!$noinsert){
//include 'apl/config.php';
//include 'apl/open.php';
//$ip=$_SERVER['REMOTE_ADDR'];
//$referer=$_SERVER['HTTP_REFERER'];
//$query = "insert into logs (url, scriptcode, ip, referer) values ('$urlor','$calllink', '$ip', '$referer')";
//mysql_query($query) or die(mysql_error());
//include 'apl/close.php';
//}
?>