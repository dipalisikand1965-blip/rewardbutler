<?php 
 $mo = $_GET['mobile'];
if(isset($mo)){
$respo = put('http://login.regnantsms.com/api/web2sms.php', 
array(
'workingkey'=>'A5c19213e75f432b82755d98595f85310',
'sender'=>'RBUTLR',
'to'=>$mo,
'message'=>'Greetings from the Samsung Business Rewards Team! Please click on the link to confirm your reward and update changes http://smsutility.aseuminfotech.in/u/i/')
);

echo json_encode(array('response'=>$respo,'status'=>'message send sucessfully Send !')); 
}else{ 
	
	echo "pass mobile number like mobile=9998887771";
}
function put($url, $params=array())
{
  $url = $url.'?'.http_build_query($params, '', '&');
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
    $response = curl_exec($ch);
    
    curl_close($ch);
    
    return $response;
}
?>