{config_load 'html.conf'}

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>{#Title#}</title>
<link href="{#css#}/twoColFixLtHdr.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="pageWrapper">
<div class="container">
    <div id="header">
 		{if not $smarty.session.logged_in}
        <div id="loginlogo"><a href="#"><img src="{#images#}/cglogo.png" alt="Insert Logo Here" name="Insert_logo" width="68" height="29" id="Insert_logo"/></a></div>

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
      
{else}
You are logged in!!!{/if}
	<!-- end .header --></div>
  
  <div class="content">
    <p>{if $profile}
      Hello, {$name}!  Your profile is {$profile}
      {/if} 
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
</html>