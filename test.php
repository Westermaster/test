<?php

$string = 'order_id=1460027345&tracking_id=305002726042&bank_ref_no=1460027308525&order_status=Success&failure_message=&payment_mode=Net Banking&card_name=AvenuesTest&status_code=null&response_code=0&status_message=Y&cy=INR&amount=500.0&billing_name=Test&billing_address=Test&billing_city=Delhi&billing_state=New Delhi&billing_zip=110006&billing_country=India&billing_tel=9811977320&billing_email=webking321@gmail.com&delivery_name=Test&delivery_address=Test&delivery_city=Delhi&delivery_state=New Delhi&delivery_zip=110006&delivery_country=India&delivery_tel=9811977320&merchant_param1=&merchant_param2=&merchant_param3=&merchant_param4=&merchant_param5=&vault=N&offer_type=null&offer_code=null&discount_value=0.0&mer_amount=500.0&eci_value=null&retry=N';



$new_array = array();

$array = explode('&', $string);

foreach($array as $key)
{
	$str = explode('=',$key);
	array_push($new_array, $str);
	
}
//var_dump($new_array);

$a = array('order_id', 'tracking_id', 'bank_ref_no', 'order_status', 'failure_message', 'payment_mode', 'card_name', 'status_code', 'response_code', 'status_message', 'cy', 'amount', 'billing_name', 'billing_address', 'billing_city', 'billing_state', 'billing_zip', 'billing_country', 'billing_tel', 'billing_email', 'delivery_name', 'delivery_address', 'delivery_city', 'delivery_state', 'delivery_zip', 'delivery_country', 'delivery_tel', 'merchant_param1', 'merchant_param2', 'merchant_param3', 'merchant_param4', 'merchant_param5', 'vault', 'offer_type', 'offer_code', 'discount_value', 'mer_amount', 'eci_value', 'retry');
$new =array();
foreach($new_array as $key=>$val){
	//$new = array("'".$val[0]."'".'=>'."'".$val[1]."'");
	array_push($new, $val);
	
	//array_combine($a, $new);
}

//var_dump($new);


$b = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');

$c  = array_combine($a,$b);

var_dump($c);


?>