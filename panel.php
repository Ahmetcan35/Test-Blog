<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

    </style>
</head>

<body>

    <h1>Mesajlar</h1>

    <table id="customers">
        <tr>
            <th>Ad Soyad</th>
            <th>Telefon Numarası</th>
            <th>Email</th>
            <th>Konu</th>
            <th>Mesaj</th>
        </tr>
        <?php
        session_start();
        if($_SESSION["user"]=="")
        {
            echo'<script type="text/javascript"> 
            window.location.href="cikis.php" 
            </script> ';
        }
        else
        {
            echo"Kullanıcı Adınız:".$_SESSION["user"]."<br>";
            echo"<a href='cikis.php'>ÇIKIŞ YAP</a><br><br>";
             
        include("connection.php");


$sec="Select * From iletisim";
$sonuc=$connect->query($sec);

if($sonuc -> num_rows > 0)
{
    while($cek=$sonuc -> fetch_assoc()){
        
        echo"
        <tr>
            <td>".$cek['name']."</td>
            <td>".$cek['tel']."</td>
            <td>".$cek['email']."</td>
            <td>".$cek['issue']."</td>
            <td>".$cek['message']."</td>
        </tr>";
        
    }
}
else
{
    echo"Veritabanında Kayıtlı Hiçbir Veri Bulunamadı.";
}    
        }

?>


    </table>

</body>

</html>
