<?php
// 环境初始化
setcookie('session_key','6201c27cb3510d1b6007fb287474a5b7dd4ZZ1d6071550c316889918', time() + 86400, '/');
setcookie('seller_key','77415334a179f974de43ae73f36c4765', time() + 86400, '/');
setcookie("ww_name","flowerbees", time() + 86400, '/');
header('Location:'.'http://127.0.0.1/TaoBaoApp/taobao/public_html/ajax/TestAjax.php?'.$_GET['tbwx'].'&&test_function='.$_GET['test_function']);
