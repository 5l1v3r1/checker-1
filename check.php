#!/usr/bin/env php
<?php
if(strtolower(substr(PHP_OS, 0, 3)) == 'win') {
    $R  = "";
    $RR = "";
    $G  = "";
    $GG = "";
    $B  = "";
    $BB = "";
    $Y  = "";
    $YY = "";
    $X  = "";
    $ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:53.0) Gecko/20100101 Firefox/53.0';
} else {
    $R  = "\e[91m";
    $RR = "\e[91;7m";
    $G  = "\e[92m";
    $GG = "\e[92;7m";
    $B  = "\e[36m";
    $BB = "\e[36;7m";
    $Y  = "\e[93m";
    $YY = "\e[93;7m";
    $X  = "\e[0m";
    $ua = 'Mozilla/5.0 (Linux; Android 5.1.1; Andromax A16C3H Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.111 Mobile Safari/537.36';
    system('clear');
}

function grab_page($url)
{
	global $ua;
	$ch=curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, $ua);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	return curl_exec($ch);
	curl_close($ch);
}

if(function_exists('pcntl_signal')) {
	declare(ticks = 1);
	function signal_handler($signal) {
		global $Y,$X;
		switch($signal) {
		case SIGTERM:
		die($Y."\n=========================== Cvar1984 ))=====(@)>".$X."\n");
		case SIGKILL:
		die($Y."\n=========================== Cvar1984 ))=====(@)>".$X."\n");
		case SIGINT:
		die($Y."\n=========================== Cvar1984 ))=====(@)>".$X."\n");
		}
	}
	pcntl_signal(SIGTERM, "signal_handler");
	pcntl_signal(SIGINT, "signal_handler");
}
echo $Y.
"           (`-').-> (`-')  _          <-.(`-')  
 _         (OO )__  ( OO).-/ _         __( OO)  
 \-,-----.,--. ,'-'(,------. \-,-----.'-'. ,--. 
  |  .--./|  | |  | |  .---'  |  .--./|  .'   / 
 /_) (`-')|  `-'  |(|  '--.  /_) (`-')|      /) 
 ||  |OO )|  .-.  | |  .--'  ||  |OO )|  .   '  
(_'  '--'\|  | |  | |  `---.(_'  '--'\|  |\   \ 
   `-----'`--' `--' `------'   `-----'`--' '--' ";
echo $R."\n++++++++++++++++++++++++++++++++++++++";
echo $B."\nAuthor  : Cvar1984                   ".$R.'+';
echo $B."\nGithub  : https://github.com/Cvar1984".$R.'+';
echo $B."\nTeam    : BlackHole Security         ".$R.'+';
echo $B."\nVersion : 0.1                        ".$R.'+';
echo $B."\nDate    : 18-06-2018                 ".$R.'+';
echo $R."\n++++++++++++++++++++++++++++++++++++++".$G.$X."\n";
isset($argv[1]) or die($RR."Input List".$X."\n");
$list=explode("\n",file_get_contents($argv[1]));
foreach($list as $list) {
	$data=json_decode(grab_page("https://member.lazada.co.id/user/api/checkEmailUsage?email=$list"),1);
	if(!empty($data['success'])) {
		echo $list.$G." [Valid]".$X."\n";
		$tulis=fopen('result.txt','a');
		fwrite($tulis,$list);
		fclose($tulis);
	} else {
		echo $list.$R." [Not Valid]".$X."\n";
	}
}
die($Y."\n=========================== Cvar1984 ))=====(@)>".$X."\n");