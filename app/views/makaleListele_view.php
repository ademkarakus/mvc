<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>Makale Listesi</title>
</head>
    <style>
        .first> td{
            color: red;
            border-color: #000;
            font-weight: bold;
        }
        tr td{
            padding: 10px;
            width: 150px;
        }
        tr td a{
            text-decoration: none;
        }
    </style>
<body>
    <h1>Makale Listesi</h1>
    <table border="1">
        <tr class="first">
            <td>ID</td>
            <td>BAŞLIK</td>
            <td>İŞLEMLER</td>
        </tr>
    
        <?php 
            foreach ($makaleListele as $key => $value){
                echo "<tr>
                        <td>" . $value['id'] . "</td>
                        <td>" . $value['baslik'] . "</td>
                        <td> <a href='http://localhost/mvc/index/makaleDuzenle'" . $value['id'] . "'>Düzenle</a>
                             <a href='http://localhost/mvc/index/makaleSil'" . $value['id'] . "'>Sil</a>
                        </td>
                    </tr>";
            }
        ?>        
    </table>
</body>
</html>