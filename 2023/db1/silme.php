<form action="" method="post">
    Silinecek ID: <input type="text" name='sil_id'> <br>
    <input type="submit" value="SIL!!"> <br>
</form>


<?php

if(isset($_POST['sil_id'])){

    require 'baglan.php';

    $id    = $_POST['sil_id'];
        
    $sql = "DELETE FROM users WHERE id = :id";
    $SORGU = $DB->prepare($sql);

    $SORGU->bindParam(':id', $id);

    $SORGU->execute();
    echo "User deleted";
}