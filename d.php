<?php

//If You Want Recoded it dont change Copyright 
// Indonesian_People
// © root@star

$gre = "\033[0;32m";
$red = "\033[0;31m";
$blue = "\033[0;34m";
$yel = "\033[0;33m";
$white = "\033[1;37m";


system("clear");
echo $blue."Reverse Ip get HTTP Response\n";
echo $gre."Author : root@star | Sunda Cyber Army\n\n";


$miaa = $argv[1];
if(empty($argv[1]) AND !$miaa) exit("{$red}[!] Usage php {$argv[0]} anything.com\n");
$g = "http://api.hackertarget.com/reverseiplookup/?q=".$miaa;
function test($url){
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     $xx = curl_exec($ch);
     curl_close($ch);
     return $xx;
}
function curlGetHTTPCode($url){	
   if (function_exists('curl_init'))	{		
      $ch = curl_init($url);		
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);		
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);		
      curl_setopt($ch, CURLOPT_TIMEOUT, 5);		
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);		
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);		
      $data = curl_exec($ch);		
      $curl_err = curl_errno($ch);		
      if(!$curl_err)		{			
      $info = curl_getinfo($ch);			curl_close($ch);		
      	return ((int)$info['http_code']);		}	}}
$get = test($g);
$f = fopen("rever.txt", "w");
fwrite($f, "$get");
fclose($f);
$gt = file_get_contents("rever.txt");
$ex = explode("\n", $gt);
foreach($ex as $ll){
 $gans = "http://".$ll;
 $ec = curlGetHTTPCode($gans);
	
	if($ec == 200){
	      echo $yel."[{$red}+{$yel}]{$white} ".$gans." > 200\n";
	} else {
	      echo $yel."[{$red}*{$yel}]{$white} ".$gans." > {$ec}\n";
	     } }
?>












