<?php /* Smarty version Smarty 3.1.0, created on 2011-10-12 18:06:38
         compiled from "/home/dnsdev/smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13555534854e7aef7f04d2d1-16920083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3ad579b5504aa02d820c90c3b97b68fed5201c7' => 
    array (
      0 => '/home/dnsdev/smarty/templates/index.tpl',
      1 => 1318439195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13555534854e7aef7f04d2d1-16920083',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4e7aef7f0d83a',
  'variables' => 
  array (
    'profile' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4e7aef7f0d83a')) {function content_4e7aef7f0d83a($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('html.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $_smarty_tpl->getConfigVariable('Title');?>
</title>
<link href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
/twoColFixLtHdr.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="pageWrapper">
<div class="container">
    <div id="header">
 		<?php if (!$_SESSION['logged_in']){?>
        <div id="loginlogo"><a href="#"><img src="<?php echo $_smarty_tpl->getConfigVariable('images');?>
/cglogo.png" alt="Insert Logo Here" name="Insert_logo" width="68" height="29" id="Insert_logo"/></a></div>

        <form onsubmit="return LoginPage.onLoginSubmit()" method="post" action="http://www.dns-dev.com/login.php?action=login" name="loginForm" id="loginForm">
					<p class="error">&nbsp;</p>
					<p id="formData">
						<label class="reset jsEnabled" id="usernameLabel" style="">Profile Name</label>
						<input type="text" tabindex="1" maxlength="15" name="username" id="username">
						<label class="reset jsEnabled" id="passwordLabel" style="">Password</label>
						<input type="password" tabindex="2" name="password" id="password">
						<input type="submit" tabindex="4" value="Sign In" id="loginButton">
						<input type="hidden" value="http://www.dns-dev.com" name="requestedDomain">
					</p>
					<p id="passwordLink">
						<a href="#" id="forgottenPasswordLink">Forgot password?</a>
						
												
					</p>
					
				</form>
      
<?php }else{ ?>
You are logged in!!!<?php }?>
	<!-- end .header --></div>
  
  <div class="content">
    <p><?php if ($_smarty_tpl->tpl_vars['profile']->value){?>
      Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!  Your profile is <?php echo $_smarty_tpl->tpl_vars['profile']->value;?>

      <?php }?> 
      <!-- end .content --></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
  <div class="footer">
    <p>This .footer contains the declaration position:relative; to give Internet Explorer 6 hasLayout for the .footer and cause it to clear correctly. If you're not required to support IE6, you may remove it.</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
    <!-- end #pageWrapper --></div>
</body>
</html><?php }} ?>