

<form action="" method="post">
    Adi: <input type="text" name='adi'> <br>
    ePosta: <input type="text" name="eposta"> <br>
    <input type="submit" value="KAYIT EKLE"> <br>
</form>

<?php

if(isset($_POST['adi'])){


// KAYIT EKLEME
    
    
require 'baglan.php';
    
$name  = $_POST['adi'];
$email = $_POST['eposta'];

$sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
$SORGU = $DB->prepare($sql);

$SORGU->bindParam(':name', $name);
$SORGU->bindParam(':email', $email);

$SORGU->execute();
echo "User created";


}
