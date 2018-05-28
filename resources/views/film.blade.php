<?php
$url = 'http://bj.jumei.com/?referer=360_mz&utm_content=mz&utm_medium=nav&utm_source=360';
$curl=curl_init();  //初始化curl句柄    
curl_setopt($curl, CURLOPT_URL,$url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
$res = curl_exec($curl);  //执行操作  
curl_close($curl);  //关闭句柄
$rex = '/(<img src="(.*)")/';
if(preg_match_all($rex,$res,$matchs)){
	echo '<pre>';
	var_dump($matchs);
}else{
	echo 'no';
}