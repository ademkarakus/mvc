<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>login Sayfası</title>
</head>
<body>
    <h1>Lütfen Giriş Yapınız</h1>
    <form method="POST" action="<?php echo SITE_URL; ?>/admin/runLogin">
<table>
    <tr>
    	<td><label>Kullanıcı Adı: </label></td>
    	<td><input type="text" name="username"></td>
	</tr>
    <tr>
    	<td><label>Paralo: </label></td>
    	<td><input type="password" name="password"></td>
	</tr>
	<tr>
    	<td><input type="submit" value="Gönder"></td>
    </tr>	
</table>
    </form>
</body>
</html>