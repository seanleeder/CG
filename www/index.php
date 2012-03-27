<?PHP

require_once('../smarty/configs/set_env.php');

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

