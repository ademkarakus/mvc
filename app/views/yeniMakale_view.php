<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>Yeni Makale</title>
</head>
<body>
<?php 
if(isset($mesaj)){
    echo "<h3 style=color:red;>" . $mesaj['mesaj'] . "</h3>";
}
?>
    <h1>Yeni Makale</h1>
    <form action="http://localhost/mvc/index/makaleKaydet" method="POST">
        <label>Başlık</label><br>
        <input type="text" name="baslik" /><br><br>
                
        <label>İçerik</label><br>
        <textarea name="icerik"></textarea><br><br>
                
        <label>Etiketler</label><br>
        <input type="text" name="etiket" /><br><br>
                
        <input type="submit" value="gonder" name="gonder"/>
        
    </form>
</body>
</html>