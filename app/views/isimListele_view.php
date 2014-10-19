<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title></title>
</head>
<body>
    <h1>İsim Listesi</h1>
    <ul>
        <?php 
        foreach ($isimListele as $key => $value){
            echo "<li>" . $key . " => " . $value['ad'] . "</li>";
        }
        ?>
    </ul>
    
</body>
</html>