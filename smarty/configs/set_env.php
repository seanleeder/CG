<?php

require_once('/home/dnsdev/SmartyLib/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('/home/dnsdev/smarty/templates');
$smarty->setCompileDir('/home/dnsdev/smarty/templates_c');
$smarty->setCacheDir('/home/dnsdev/smarty/cache');
$smarty->setConfigDir('/home/dnsdev/smarty/configs');

?>
