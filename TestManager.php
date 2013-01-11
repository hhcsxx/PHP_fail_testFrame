<?php
//检验所有的ajax接口是否能用
require_once '../../../includes/cache/CheckUtil.php';
require_once '../TopClient.php';
$topClient = new TopClient();
$basicUrl = 'http://127.0.0.1/TaoBaoApp/taobao/public_html/ajax/TestSetContext.php';
//addCoupon.php
$test_function = 'addCoupon';
//clearKeywords.php
$test_function = 'clearKeywords';
//getCoupons.php
$test_function = 'getCoupons';
$params = array();

$testUrl = $basicUrl.'?tbwx=153426&&test_function='.$test_function;
if(!CheckUtil::checkArrEmpty($params))
{
	$isFirst = true;
	foreach ($params as $key => $value)
	{
		if($isFirst)
		{
			$isFirst = false;
		}else
		{
			$testUrl .= '&&';
		}
		$testUrl .= $key.'='.$value;
	}
}
$ret = $topClient->curl($testUrl);
echo $ret;