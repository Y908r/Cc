<?php
const
n = "\n",
register_link = "https://freeth.in/?r=175679",
nama_file = "freeth.in",
host = "https://freeth.in/",

youtube = "https://youtube.com/c/iewil";

if( PHP_OS_FAMILY == "Linux" ){
	define("d","\033[0m");
	define("m","\033[1;31m");
	define("h","\033[1;32m");
	define("k","\033[1;33m");
	define("b","\033[1;34m");
	define("u","\033[1;35m");
	define("c","\033[1;36m");
	define("p","\033[1;37m");
	define("mp","\033[101m\033[1;37m");
	define("hp","\033[102m\033[1;30m");
	define("kp","\033[103m\033[1;37m");
	define("bp","\033[104m\033[1;37m");
	define("up","\033[105m\033[1;37m");
	define("cp","\033[106m\033[1;37m");
	define("pm","\033[107m\033[1;31m");
	define("ph","\033[107m\033[1;32m");
	define("pk","\033[107m\033[1;33m");
	define("pb","\033[107m\033[1;34m");
	define("pu","\033[107m\033[1;35m");
	define("pc","\033[107m\033[1;36m");
} else {
	define("d","\033[0m");
	define("m","");
	define("h","");
	define("k","");
	define("b","");
	define("u","");
	define("c","");
	define("p","");
	define("mp","");
	define("hp","");
	define("kp","");
	define("bp","");
	define("up","");
	define("cp","");
	define("pm","");
	define("ph","");
	define("pk","");
	define("pb","");
	define("pu","");
	define("pc","");
}
function replace_txt($msg){
	$awal = ["[","]","+","-",">","*"];
	$akhir =[h."[",h."]".p,h."+",m."-",m.">".p,k."*"];
	return str_replace($awal,$akhir,$msg);
}
/*************PRINT**************/
function menu($no, $title){
	print h."---[".p."$no".h."] ".k."$title\n";
}
function Error($except = "[No Content]"){
	return m."---[".p."!".m."] ".p.$except;
}
function Isi($msg){
	return m."╭[".p."Input ".$msg.m."]".n.m."╰> ".h;
}
function Sukses($msg = "[No Content]"){
	return h."---[".p."✓".h."] ".p.$msg.n;
}
function Cetak($label, $msg = "[No Content]"){
	$len = 9;
	$lenstr = $len-strlen($label);
	print h."[".p.$label.h.str_repeat(" ",$lenstr)."]─> ".p.$msg.n;
}
function Line(){
	return c.str_repeat('─',44).n;
}
function clean($extensi){
	return str_replace(".php","",$extensi);
}
function Title($activitas){
	print bp.str_pad(strtoupper(nama_file)."-".strtoupper($activitas),44, " ", STR_PAD_BOTH).d.n;
	print Line();
}
/************Banner****************/
function TimeZone(){
	system("clear");
	$check = json_decode(file_get_contents("setup.json"),1);
	print b."───────────".m."[".p."scrypt by ".h."iewil".m."]─>".k." v ".$check['version'].n;
	$api = json_decode(file_get_contents("http://ip-api.com/json"),1);
	if($api){
		$tz = $api["timezone"];
		date_default_timezone_set($tz);
		print k.date("d/M/Y").m."-".k.date("H:i:s").n;
		print k.$api['city'].m.",".k.$api['regionName'].m.",".k.$api['country'].n;
	}else{
		date_default_timezone_set("UTC");
		return "UTC";
	}
	print b."Channel".m.": ".p."t.me/MaksaJoin".m." >".n;
	print b."Insta  ".m.": ".p."instagram.com/iewil_13".m." >".n;
	print b."Youtube".m.": ".p."youtube.com/@iewil".m." >".n;
	print line();
}
function authBan($title, $str){
	$title_len_s = 8;
	$strlen_s = 19;
	$title_len = $title_len_s - strlen($title);
	$strlen = $strlen_s - strlen($str);
	return bp." ".$title.str_repeat(" ",$title_len).d.pb." ".$str.str_repeat(" ",$strlen).d.n;
}
function Ban($sc = 0){
	system("clear");
	$line = c;
	$check = json_decode(file_get_contents("setup.json"),1);
	print n.pm.str_pad(strtoupper("v ".$check['version']),44, " ", STR_PAD_BOTH).d.n;
	print $line."──────────────┬".str_repeat("─",29).n;
	print m."<?╔╦╗╔═╗╔═╗".p."╦  ".$line."│".authBan("Author", "@fat9ght");
	print m."   ║ ║ ║║ ".p."║║  ".$line."│".authBan("Channel", "t.me/MaksaJoin");
	print m."   ╩ ╚═╝╚".p."═╝╩═╝".$line."│".authBan("Youtube", "youtube.com/@iewil");
	print m."  ╔═╗╦ ".p."╦╔═╗   ".$line."│".mp.str_pad("!--- 2022 REBORN >", 29, " ", STR_PAD_BOTH).d.n;
	print m."  ╠═╝╠".p."═╣╠═╝   ".$line."│".up.str_pad("@PetapaGenit2, @Zhy_08", 29, " ", STR_PAD_BOTH).d.n;
	print m."  ╩  ".p."╩ ╩╩  ?> ".$line."│".up.str_pad("@IPeop, @MetalFrogs", 29, " ", STR_PAD_BOTH).d.n;
	print $line."──────────────┴".str_repeat("─",29).n;
	if($sc){
		print hp.str_pad(strtoupper(nama_file),44, " ", STR_PAD_BOTH).d.n;
		print Line();
	}
}

function run($url, $ua, $data = null,$cookie=null) {
	while(true){
		$ch = curl_init();curl_setopt_array($ch, array(CURLOPT_URL => $url,CURLOPT_FOLLOWLOCATION => 1,));
		if ($data) {
			curl_setopt_array($ch, array(CURLOPT_POST => 1,CURLOPT_POSTFIELDS => $data,));}
		curl_setopt_array($ch, array(CURLOPT_HTTPHEADER => $ua,CURLOPT_SSL_VERIFYPEER => 1,CURLOPT_RETURNTRANSFER => 1,CURLOPT_ENCODING => 'gzip'));
		if ($cookie) {
			curl_setopt_array($ch, array(CURLOPT_COOKIEFILE=>"cookie.txt", CURLOPT_COOKIEJAR=>"cookie.txt",));}
		$run = curl_exec($ch);curl_close($ch);
		if(!$run){
			print "\r                                       \r";
			print Error("Check your Connection!");
			sleep(2);
			print "\r                                       \r";
			continue;
		}
		return $run;
	}
}
function Curl($u, $h = 0, $p = 0,$cookie = 0, $lewat = 0) {
	while(true){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $u);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_COOKIE,TRUE);
		if($cookie) {
			curl_setopt($ch, CURLOPT_COOKIEFILE,"Data/".nama_file."/cookie.txt");
			curl_setopt($ch, CURLOPT_COOKIEJAR,"Data/".nama_file."/cookie.txt");
		}
		if($p) {
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $p);
		}
		if($h) {
			curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
		}
		curl_setopt($ch, CURLOPT_HEADER, true);
		$r = curl_exec($ch);
		if($lewat){
			return 0;
		}
		$c = curl_getinfo($ch);
		if(!$c) return "Curl Error : ".curl_error($ch); else{
			$hd = substr($r, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			$bd = substr($r, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			curl_close($ch);
			if(!$bd){
				print Error("Check your Connection!");
				sleep(2);
				print "\r                         \r";
				continue;
			}
			return array($hd,$bd);
		}
	}
}
function Auth($w){
	$lo[] = $w."L".p."oading....";
	$lo[] = p."L".$w."o".p."ading....";
	$lo[] = p."Lo".$w."a".p."ding....";
	$lo[] = p."Loa".$w."d".p."ing....";
	$lo[] = p."Load".$w."i".p."ng....";
	$lo[] = p."Loadi".$w."n".p."g....";
	$lo[] = p."Loadin".$w."g".p."....";
	$lo[] = p."Loading".$w.".".p."...";
	$lo[] = p."Loading.".$w.".".p."..";
	$lo[] = p."Loading..".$w.".".p.".";
	return $lo;
}
function Tmr($tmr){
	date_default_timezone_set("UTC");
	$col = [b,c,d,h,k,m,u];
	$sym = [' ─ ',' / ',' │ ',' \ ',];
	$timr = time()+$tmr+rand(5,10);
	$a = 0;
	while(true){
		$a +=1;
		$x = $col[array_rand($col)];
		$nic = auth($x);
			
		$res=$timr-time();
		if($res < 1) {
			break;
		}
		print "         ".$x.$sym[$a % 4].p.date('H',$res).$x.":".p.date('i',$res).$x.":".p.date('s',$res)." ".$nic[$a % count($nic)]."\r";
		usleep(100000);
	}
	print "\r                                   \r";
}

function num_rand($int){
	$rand_num = "1234567890";
	$split = str_split($rand_num);
	$res = "";while(true){
		$rand = array_rand($split);
		$res .= $split[$rand];
		if( strlen($res) == $int ){ 
			return $res; 
		}
	}
}
function str_rand($int){
	$rand_str = "abcdefghijklmnopqrstuvwqyz";
	$rand_num = "1234567890";
	$rand_str_up= "ABCDEFGHIJKLMNOPQRSTUVWQYZ";
	$split = str_split($rand_str.$rand_num.$rand_str_up);
	$res = "";while(true){
		$rand = array_rand($split);
		$res .= $split[$rand];
		if( strlen($res) == $int ){
			return $res;
		}
	}
}
function His($newdata,$data=0){
	if(!$data){
		$data = [];
	}
	return array_merge($data,$newdata);
}
function cfDecodeEmail($encodedString){
  $k = hexdec(substr($encodedString,0,2));
  for($i=2,$email='';$i<strlen($encodedString)-1;$i+=2){
    $email.=chr(hexdec(substr($encodedString,$i,2))^$k);
  }
  return $email;
}
function Satoshi($int){
	return sprintf('%.8f',floatval($int));
}

/*******GLOBAL CHECK*******/
function Simpan($nama_data){
	if(file_exists("Data/".nama_file."/".$nama_data)){
		$data = file_get_contents("Data/".nama_file."/".$nama_data);
	}else{
		if(!file_exists("Data/".nama_file)){
			system("mkdir ".nama_file);
			if(PHP_OS_FAMILY == "Windows"){
				system("move ".nama_file." Data");
			}else{
				system("mv ".nama_file." Data");
			}
			print Sukses(h."Berhasil membuat Folder untuk ".k.nama_file.n);
		}
		$data = readline(Isi($nama_data));echo "\n";
		file_put_contents("Data/".nama_file."/".$nama_data,$data);
	}
	return $data;
}
function ua(){
	$nama_data = "User_Agent";
	if(file_exists('Data/'.$nama_data)){
		$data = file_get_contents('Data/'.$nama_data);
	}else{
		$data = readline(Isi($nama_data));echo "\n";
		file_put_contents('Data/'.$nama_data,$data);
	}
	return $data;
}
function Hapus($nama_data){
	unlink("Data/".nama_file."/".$nama_data);
}
function GlobalCheck($source){
	(preg_match('/Cloudflare/',$source) || preg_match('/Just a moment.../',$source))? $data['cf']=true:$data['cf']=false;
	(preg_match('/Firewall/',$source))? $data['fw']=true:$data['fw']=false;
	return $data;
}
function Parsing($source){
	preg_match_all('#<input type="(.*?)" name="(.*?)" value="(.*?)"#',$source,$input);
	for($i = 0; $i<count($input[0]);$i++){
		$clear = explode('"',$input[2][$i])[0];
		$data[$clear] = $input[3][$i];
	}
	return $data;
}

/*************************** APIKEY ***************************/
function Simpan_Api($nama_data){
	if(file_exists("Data/Apikey/".$nama_data)){
		$data = file_get_contents("Data/Apikey/".$nama_data);
	}else{
		if(!file_exists("Data/Apikey")){
			system("mkdir Apikey");
			if(PHP_OS_FAMILY == "Windows"){
				system("move Apikey Data");
			}else{
				system("mv Apikey Data");
			}
			print Sukses(h."Berhasil membuat Folder untuk ".k."Apikey".n);
		}
		$data = readline(Isi($nama_data));echo "\n";
		file_put_contents("Data/Apikey/".$nama_data,$data);
	}
	return $data;
}
function CheckApi(){
	Cetak("Register",provider_ref);
	$apikey = Simpan_Api(provider_api."_Apikey");
	if(provider_api == "Xevil"){
		$api = New ApiXevil($apikey);
	}
	if(provider_api == "Multibot"){
		$api = New ApiMultibot($apikey);
	}
	if($api->getBalance()){
		print Sukses(h."OK\n");
		sleep(3);
		return $apikey;
	}else{
		unlink("Data/Apikey/".provider_api."_Apikey");
		exit(Error("Apikey: ".m."Something wrong!".n));
	}
}
function MenuApi(){
	Cetak("Captcha",typeCaptcha);
	if(typeCaptcha == "hcaptcha"){
		$multi = p."[".k."required".p."]";
		$xevil = "";
	}else{
		$multi = "";
		$xevil = p."[".k."required".p."]";
	}
	Menu(1, "Multibot $multi");
	Menu(2, "Xevil $xevil");
	$pil = readline(Isi("Provider Apikey"));
	print line();
	if($pil == 1){
		define("provider_api","Multibot");
		define("provider_ref", "http://api.multibot.in/");
		$apikey = CheckApi();
	}elseif($pil == 2){
		define("provider_api","Xevil");
		define("provider_ref", "t.me/Xevil_check_bot?start=6192660395");
		$apikey = CheckApi();
	}else{
		exit(Error("Tolol\n"));
	}
	return $apikey;
}
/********SL********/
function ApiShortlink(){
	if(!file_exists("Data/Apikey/Shortlink_Apikey")){
		Cetak("Register","@bpsl06_bot");
	}
	return Simpan_Api("Shortlink_Apikey");
}

function h(){
	$h = ["x-csrf-token: ","sec-ch-ua-mobile: ?1",
	"user-agent: ".ua(),
	"x-requested-with: XMLHttpRequest",
	"save-data: on",
	"origin: ".host,
	"sec-fetch-site: same-origin",
	"sec-fetch-mode: cors",
	"sec-fetch-dest: empty",
	"accept-language: en-US,en;q=0.9,id;q=0.8",
	"cookie: ".simpan("Cookie")];
	return $h;
}
function getCsrf($cookie = "Data/".nama_file."/Cookie") {$r = file_get_contents($cookie);return explode(';',explode('csrf_token=',$r)[1])[0];}
function finger($csrf,$h){
	$rand = num_rand(6);
	$mdrand = md5($rand);
	$data = http_build_query(["op"=> "record_fingerprint","fingerprint"=> $mdrand,"csrf_token" => $csrf]);
	$r = run(host."cgi-bin/api.pl?$data",$h);
	if($r){
		return ["finger"=>$mdrand,"fingernum"=>$rand,"sheed"=>str_rand(16)];
	}
}
Ban(1);
cookie:
Cetak("Register",register_link);
print line();
simpan("Cookie");
ua();
//Multibot_Api();

Ban(1);
print p."Jangan lupa \033[101m\033[1;37m Subscribe! \033[0m youtub saya :D";sleep(2);
system("termux-open-url ".youtube);Ban(1);

$r = run(host."/?op=home",h());
$rp = trim(explode('</div>',explode('<div class="reward_table_box br_0_0_5_5 user_reward_points font_bold" style="border-top:none;">',$r)[1])[0]);

$bal = trim(explode('</span>',explode('<span id="balance_small">',$r)[1])[0]);
if(!$bal){
	hapus("Cookie");
	goto cookie;
}
print Cetak("Balance",$bal." ETH");
print Cetak("Reward",$rp);
//Multibot_Bal();
print line();

while(true){
	sleep(5);
	$r = run(host."/?op=home",h());
	$timer = explode(');',explode("title_countdown(",$r)[1])[0];
	if($timer){tmr($timer);}
	$finger = finger(getCsrf(),["user-agent: ".ua()]);
	$sitekey = explode('"',explode('<div class="h-captcha" data-sitekey="',$r)[1])[0];
	//$cap = Multibot_Hc($sitekey, host."/?op=home");
	//if(!$cap)continue;
	//$data = ["csrf_token"=>getCsrf(),"op"=>"free_play","fingerprint"=>$finger["finger"],"client_seed"=>$finger["sheed"],"fingerprint2"=>$finger["fingernum"],"pwc"=>0,"h_recaptcha_response" =>$cap];
	$data = ["csrf_token"=>getCsrf(),"op"=>"free_play","fingerprint"=>$finger["finger"],"client_seed"=>$finger["sheed"],"fingerprint2"=>$finger["fingernum"],"pwc"=>1,"h_recaptcha_response" =>""];
	
	$r = run(host, h(),http_build_query($data));
	$x = explode(':',$r);
	if($x[2]){
		Cetak("Number",$x[1]);
		Cetak("You Win",$x[3]." ETH");
		Cetak("Balance",$x[2]." ETH");
		$r = run(host."/?op=home",h());
		$rp = trim(explode('</div>',explode('<div class="reward_table_box br_0_0_5_5 user_reward_points font_bold" style="border-top:none;">',$r)[1])[0]);
		Cetak("Reward",$rp);
		//Multibot_Bal();
		print line();
	}else
	if(explode("incorrect",$r)[1]){
		$wr = explode(".",$r)[0];
		print Error($wr);
		sleep(3);
		print "\r                           \r";
	}else{
		exit(m.str_replace(". ","\n",explode(':',$r)[1].n));
	}
}