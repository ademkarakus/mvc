<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="tr" xml:lang="tr">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>SimpleAdmin</title>
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/public/css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
				<form action="<?php echo SITE_URL; ?>/admin/runLogin" method="post">
					<label for="login">Kullanıcı Adı:</label>
					<input id="login" name="username" class="text" />
					<label for="pass">Şifre:</label>
					<input id="pass" name="password" type="password" class="text" />
					<div class="sep"></div>
					<button type="submit" class="ok">Giriş Yap</button>
				</form>
			</div>
			<div class="footer">&raquo; Admin Panel</div>
		</div>
	</div>
</div>

</body>
</html>
