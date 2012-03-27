
<?php
$address = '127.0.0.1';
$port = 9000;
$sock = socket_create(AF_INET, SOCK_STREAM, 0);
socket_bind($sock, $address, $port) or die('Unable to bind');
socket_listen($sock);
$client = socket_accept($sock);
echo "connection established: $client";
socket_close($client);
socket_close($sock);
?>
<?php

require_once('/home/dnsdev/smarty/configs/set_env.php');

if($_GET)
{
	if(isset($_GET['profile']))
	{
	$profile = 'Hello ' . htmlspecialchars($_GET['profile']) . '!';
	$smarty->assign('profile', $profile);
	}
}

$smarty->assign('name', 'Ned');
$smarty->display('index.tpl');

?>

