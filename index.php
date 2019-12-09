<?php
require_once "Smtp.class.php";
$textbin='';
$fs='';
$qd1 = 'https://www.kxdao.net/plugin.php?id=luckymoney&ac=get&hash=';
$qd2 = 'https://www.kxdao.net/plugin.php?id=dsu_amupper&ppersubmit=true&infloat=yes&handlekey=dsu_amupper&inajax=1&ajaxtarget=fwin_content_dsu_amupper&formhash=';

$cookie1 = '_uab_collina=155482654206036938889884; G1NZ_2132_client_token=D621FFAB55F14FB22F7824016B9923D6; G1NZ_2132_connect_is_bind=1; G1NZ_2132_connect_uin=D621FFAB55F14FB22F7824016B9923D6; G1NZ_2132_smile=5D1; G1NZ_2132_saltkey=Y446sSoC; G1NZ_2132_lastvisit=1562930877; G1NZ_2132_atarget=1; G1NZ_2132_client_created=1564243488; G1NZ_2132_auth=6f24c0Rc7CQM5VJsvwSt969p1zk4X5HdFDCoDDaXMvseZsraiGV1AIE4hbz%2F0J14PWidHTaRsJ2GP1QxF%2BvKy7B7; G1NZ_2132_connect_login=1; G1NZ_2132_visitedfid=36D38D73D2D117D37D46D47D75D41; luckymoney_1942_20190806=1; G1NZ_2132_dsu_amupper=DQo8c3R5bGU%2BDQoucHBlcndibSB7cGFkZGluZzo2cHggMTJweDtib3JkZXI6MXB4IHNvbGlkICNDRENEQ0Q7YmFja2dyb3VuZDojRjJGMkYyO2xpbmUtaGVpZ2h0OjEuOGVtO2NvbG9yOiMwMDMzMDA7d2lkdGg6MjAwcHg7b3ZlcmZsb3c6aGlkZGVufQ0KLnBwZXJ3Ym0gLnRpbWVze2NvbG9yOiNmZjk5MDA7fQ0KLnBwZXJ3Ym0gIGF7ZmxvYXQ6cmlnaHQ7Y29sb3I6I2ZmMzMwMDt0ZXh0LWRlY29yYXRpb246bm9uZX0NCjwvc3R5bGU%2BDQoNCjxkaXYgY2xhc3M9InBwZXJ3Ym0iIGlkPSJwcGVyd2JfbWVudSIgc3R5bGU9ImRpc3BsYXk6IG5vbmUiID4NCjxBIEhSRUY9InBsdWdpbi5waHA%2FaWQ9ZHN1X2FtdXBwZXI6cHBlcmxpc3QiIHRhcmdldD0iX2JsYW5rIj7mn6XnnIvnrb7liLDmjpLooYw8L0E%2BDQo8c3Ryb25nPue0r%2BiuoeetvuWIsDxzcGFuIGNsYXNzPSJ0aW1lcyI%2BNDk1PC9zcGFuPuasoTwvc3Ryb25nPjxicj4NCg0KPHN0cm9uZz7ov57nu63nrb7liLA8c3BhbiBjbGFzcz0idGltZXMiPjQzPC9zcGFuPuasoTwvc3Ryb25nPjxicj4NCg0KPHN0cm9uZz7kuIrmrKHnrb7liLA6IDxzcGFuIGNsYXNzPSJ0aW1lcyI%2BMjAxOS0wOC0wNiAwMDowMjo0NDwvc3Bhbj48L3N0cm9uZz4NCjwvZGl2Pg0K; G1NZ_2132_myrepeat_rr=R0; G1NZ_2132_ulastactivity=7d88jK3TuFwF1BuJXOf4NWY2J65It1BySshxQQiEugkh0aicgxk1; G1NZ_2132_sendmail=1; Hm_lvt_2b441fdd1b590975e0e2d2a00d32226c=1564905695,1564934727,1564969397,1565104879; G1NZ_2132_st_t=1942%7C1565104865%7Cd19f1c00fc679bf498485bd91a10f2f5; G1NZ_2132_forum_lastvisit=D_2_1564243576D_73_1564810592D_38_1564810597D_36_1565104865; G1NZ_2132_viewid=tid_336798; G1NZ_2132_st_p=1942%7C1565104894%7C48b988e6b9c415d22191c5622f4e1e11; G1NZ_2132_sid=ZL5CIN; G1NZ_2132_lip=94.191.114.71%2C1565104950; G1NZ_2132_lastcheckfeed=1942%7C1565105008; G1NZ_2132_checkfollow=1; G1NZ_2132_checkpm=1; Hm_lpvt_2b441fdd1b590975e0e2d2a00d32226c=1565105048; G1NZ_2132_lastact=1565105015%09misc.php%09patch';
//定义utf8编码，防止网页查看时乱码
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';

$formhash = hashGet($cookie1);
$textbin = task1($cookie1, $formhash);
$fs=$fs.'一键签到：'.PHP_EOL.'①'.$textbin;
$textbin = task2($cookie1, $formhash);
$fs=$fs.PHP_EOL.'②'.$textbin;
task3($cookie1, $formhash);
$textbin = task3($cookie1, $formhash);
$fs=$fs.PHP_EOL.'③'.$textbin;
echo $fs;

$smtpserver = "ssl://smtp.163.com";//SMTP服务器
	$smtpserverport =465;//SMTP服务器端口
	$smtpusermail = "********";//SMTP服务器的用户邮箱
	$smtpemailto = "********";//发送给谁
	$smtpuser = "********";//SMTP服务器的用户帐号，注：部分邮箱只需@前面的用户名
	$smtppass = "********";//SMTP服务器的授权码
	$mailtitle = "签到情况";//邮件主题
	$mailcontent = $fs;//邮件内容
	$mailtype = "TXT";//邮件格式（HTML/TXT）,TXT为文本邮件
	//************************ 配置信息 ****************************
	$smtp = new Smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = false;//是否显示发送的调试信息
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);

//echo $state;

function hashGet($cookies_g){
	$text_hashGet = CurlGet('https://www.kxdao.net','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',$cookies_g);
	return strm($text_hashGet, 'name="formhash" value="', '"');
}

function task1($cookies, $formhash){ //每日签到
	$link_task1 = 'https://www.kxdao.net/plugin.php?id=dsu_amupper&ppersubmit=true&infloat=yes&handlekey=dsu_amupper&inajax=1&ajaxtarget=fwin_content_dsu_amupper&formhash=';
	$text_task1 = CurlGet($link_task1.$formhash,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',$cookies);
	if(stripos($text_task1, '由于您累计签到')){
		return strm($text_task1,"errorhandle_dsu_amupper('","。");  //成功
	}elseif(stripos($text_task1, '您已签到完毕')){
		return '今日已签到完毕';
	}else{
		return '失败';
	}
}

function task2($cookies, $formhash){  //夏日礼包
	$link_task2 = 'https://www.kxdao.net/plugin.php?id=luckymoney&ac=get&hash=';
	$text_task2 = CurlGet($link_task2.$formhash,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',$cookies);
	
	if(stripos($text_task2, '领到红包')){
		return strm($text_task2,'CDATA[',']');//成功
	}elseif(stripos($text_task2, '您今日已经领过红包了')){
		return '今日已经领过红包了';
	}else{
		return'失败';
	}
}

function task3($cookies, $formhash){  //每日答题
	$link_task3 = 'https://www.kxdao.net/plugin.php?id=ahome_dayquestion:pop';
	$link_task3_ = 'https://www.kxdao.net/plugin.php?id=ahome_dayquestion:pop&inajax=1';
	$data_task3 = '------WebKitFormBoundaryQzDoRBb8yfA3VXvi
Content-Disposition: form-data; name="formhash"

'.$formhash.'
------WebKitFormBoundaryQzDoRBb8yfA3VXvi
Content-Disposition: form-data; name="answer"

1
------WebKitFormBoundaryQzDoRBb8yfA3VXvi
Content-Disposition: form-data; name="submit"

true
------WebKitFormBoundaryQzDoRBb8yfA3VXvi--';

$data_task3_ = '------WebKitFormBoundaryQzDoRBb8yfA3VXvi
Content-Disposition: form-data; name="formhash"

'.$formhash.'
------WebKitFormBoundaryQzDoRBb8yfA3VXvi
Content-Disposition: form-data; name="finish"

true
------WebKitFormBoundaryQzDoRBb8yfA3VXvi--';
	$headers = array(
		'content-type:'.'multipart/form-data; boundary=----WebKitFormBoundaryQzDoRBb8yfA3VXvi',
    );
	
	//答题部分
if(guan($cookies, $formhash) == "0"){
	CurlPost($link_task3, $data_task3, $headers,'','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.10 Safari/537.36', $cookies);
	task3($cookies, $formhash);
}elseif(guan($cookies, $formhash) == "1"){
	CurlPost($link_task3, $data_task3, $headers,'','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.10 Safari/537.36', $cookies);
	task3($cookies, $formhash);
}elseif(guan($cookies, $formhash) == "2"){
	CurlPost($link_task3, $data_task3_, $headers,'','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.10 Safari/537.36', $cookies);
	if(guan($cookies, $formhash) == "3"){
		return "答题成功";
    }else{
		return "答题失败";
    }
}elseif(guan($cookies, $formhash) == "3"){
	return "今日答题已成功";
}elseif(guan($cookies, $formhash) == "fail"){
	return "失败";
}
	
	
}

function guan($cookies, $formhash){
	$link_guan = 'https://www.kxdao.net/plugin.php?id=ahome_dayquestion:pop&inajax=1';
	$text_guan = CurlGet($link_guan,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',$cookies);
	if(stripos($text_guan, "答题规则") != false){
		return "0";
	}elseif(stripos($text_guan, "您已成功闯过了") != false){
		return "1";
	}elseif(stripos($text_guan, "恭喜您完成了全部的挑战关卡") != false){
		return "2";
	}elseif(stripos($text_guan, '您今天已经参加过答题') != false){
		return '3';
	}else{
		return 'fail';
	}
}

function CurlGet($url, $UserAgent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', $cookies)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);     
	curl_setopt($curl, CURLOPT_REFERER, '');
	curl_setopt($curl, CURLOPT_COOKIE, $cookies);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    if ($UserAgent != "") {
        curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
    }
    #关闭SSL
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    #返回数据不直接显示
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}

function CurlPost($url, $post_data, $headers, $refer, $UserAgent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.10 Safari/537.36', $cookies)
{

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);     
    curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent); 
	curl_setopt($curl, CURLOPT_COOKIE, $cookies);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    if ($refer != '') {
        curl_setopt($curl, CURLOPT_REFERER, $refer);
    }
    #关闭SSL
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    #返回数据不直接显示
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}

function strm($str, $left, $right) {
	$start = strpos($str, $left) + strlen($left);
	$len = strpos($str, $right, $start) - $start;
    $str = substr($str,$start,$len);
    return $str;
}

?>