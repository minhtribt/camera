<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<script type="text/javascript">
	$(document).ready(function() {
		$("div#mws-login .mws-login-back").mouseover(function(event) {
			$(this).find("a").animate({'left':0})
		}).mouseout(function(event) {
			$(this).find("a").animate({'left':70})
		});
	});
</script>
<title>MWS Admin - Dashboard</title>
<style>
div#mws-login {
    background: url(../../asset/admin/images/mws-dark-bg.png);
    width: 288px;
    height: 218px;
    margin: auto;
    position: relative;
    padding: 12px 16px;
    position: relative;
    top: 50%;
    margin-top: -122px;
    border-top: 2px solid #535353;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -o-border-radius: 4px;
    -khtml-border-radius: 4px;
    border-radius: 4px;
}
div#mws-login h1 {
    color: #ffffff;
    padding: 0 8px 8px 8px;
    font-size: 18px;
    margin: 0;
    position: relative;
    background: url(../../asset/admin/images/mws-login-stitch.png) repeat-x left bottom;
}
div#mws-login .mws-login-lock {
    background: url(../../asset/admin/images/mws-login-circle.png) no-repeat center center;
    position: absolute;
    padding: 8px;
    right: -10px;
    top: -10px;
}
div#mws-login form {
    background: url(../../asset/admin/images/mws-login-stitch.png) repeat-x left bottom;
}
.mws-form {
    clear: both;
    display: block;
}
div#mws-login .mws-form-row {
    padding-left: 0;
    padding-right: 0;
}
.mws-form .mws-form-row {
    zoom: 1;
}
.mws-form .mws-form-row {
    padding: 12px 24px;
}
.mws-form .mws-form-row:before, .mws-form .mws-form-row:after {
    content: '.';
    display: block;
    overflow: hidden;
    visibility: hidden;
    font-size: 0;
    line-height: 0;
    width: 0;
    height: 0;
}

div#mws-login input.mws-login-button {
    width: 100%;
}
.mws-button.green, .ui-button {
    background-color: #96c742;
    color: #ffffff;
    border: 1px solid #507E0C;
    background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #addf58), color-stop(100%, #96c742));
    background-image: -webkit-linear-gradient(#addf58,#96c742);
    background-image: -moz-linear-gradient(#addf58,#96c742);
    background-image: -o-linear-gradient(#addf58,#96c742);
    background-image: linear-gradient(#addf58,#96c742);
}
.mws-button, .ui-button {
    border: 0;
    outline: none;
    padding: 6px 9px;
    cursor: pointer;
    font-family: 'PTSansRegular', Arial, Helvetica, sans-serif;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -o-border-radius: 3px;
    -khtml-border-radius: 3px;
    border-radius: 3px;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.15);
    -o-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.15);
    -khtml-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.15);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.15);
}


body {
    background: url(../../asset/admin/images/mws-body-bg.png);
    color: #323232;
    font: 13px/1.5 'PTSansRegular', Arial, Helvetica, sans-serif;
}
html, body {
    height: 100%;
}
div#mws-login input.mws-login-username, div#mws-login input.mws-login-password {
    padding: 8px 8px 8px 32px;
    border: 1px solid #323232;
}
.mws-form .mws-form-item select, .mws-form .mws-form-item textarea, .mws-form .mws-form-item .mws-textinput, .mws-form .mws-form-item.large select, .mws-form .mws-form-item.large textarea, .mws-form .mws-form-item.large .mws-textinput {
    width: 100%;
}
.mws-form .mws-form-item {
    min-height: 34px;
    height: 34px;
    height: auto !important;
}
div#mws-login .mws-form-row {
    padding-left: 0;
    padding-right: 0;
}
.mws-form .mws-form-row {
    zoom: 1;
}
.mws-form .mws-form-row {
    padding: 12px 24px;
}
.mws-form select, .mws-form textarea, .mws-form .mws-textinput, .mws-form .file {
    border: 1px solid #c5c5c5;
    padding: 6px 7px;
    color: #323232;
    margin: 0;
    background-color: #ffffff;
    outline: none;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    -khtml-border-radius: 4px;
    border-radius: 4px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -khtml-box-sizing: border-box;
    -moz-box-shadow: inset 0px 1px 3px rgba(128, 128, 128, 0.1);
    -o-box-shadow: inset 0px 1px 3px rgba(128, 128, 128, 0.1);
    -webkit-box-shadow: inset 0px 1px 3px rgba(128, 128, 128, 0.1);
    -khtml-box-shadow: inset 0px 1px 3px rgba(128, 128, 128, 0.1);
    box-shadow: inset 0px 1px 3px rgba(128, 128, 128, 0.1);
}
.mws-button.green, .ui-button {
    background-color: #96c742;
    color: #ffffff;
    border: 1px solid #507E0C;
    background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #addf58), color-stop(100%, #96c742));
    background-image: -webkit-linear-gradient(#addf58,#96c742);
    background-image: -moz-linear-gradient(#addf58,#96c742);
    background-image: -o-linear-gradient(#addf58,#96c742);
    background-image: linear-gradient(#addf58,#96c742);
}
.mws-button, .ui-button {
    border: 0;
    outline: none;
    padding: 6px 9px;
    cursor: pointer;
    font-family: 'PTSansRegular', Arial, Helvetica, sans-serif;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -o-border-radius: 3px;
    -khtml-border-radius: 3px;
    border-radius: 3px;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.15);
    -o-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.15);
    -khtml-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.15);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.15);
}
div#mws-login input.mws-login-username {
    background-image: url(../../asset/admin/images/user.png);
    background-repeat: no-repeat;
    background-position: 8px center;
}
div#mws-login input.mws-login-password {
    background-image: url(../../asset/admin/images/key.png);
    background-repeat: no-repeat;
    background-position: 8px center;
}
</style>
</head>

<body>

<div id="mws-login">
    	<h1>Login</h1>
        <div class="mws-login-lock"><img src="../asset/admin/images/locked-2.png" alt="" /></div>
    	<div id="mws-login-form">
        	<form class="mws-form" action="/admin/login" method="post">
                <div class="mws-form-row">
                	<div class="mws-form-item large">
                    	<input type="text" class="mws-login-username mws-textinput" placeholder="username" name="username"/>
                    </div>
                </div>
                <div class="mws-form-row">
                	<div class="mws-form-item large">
                    	<input type="password" class="mws-login-password mws-textinput" placeholder="password" name="password"/>
                    </div>
                </div>
                <div class="mws-form-row">
                	<input type="submit" value="Login" class="mws-button green mws-login-button" />
                </div>
            </form>
        </div>
		<div>
			<?php
				if (isset($error))
					echo "<span style='color:red;'>$error</span>";
			?>
		</div>
    </div>
	
</body>
</html>
