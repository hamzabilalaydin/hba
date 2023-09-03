<?php
if(isset($_POST['ad'])){

    echo "Girilen ad: ".$_POST['ad'];
    echo "<br>";
    echo "Girilen soyad: ".$_POST['soyad'];
    
    die();
}

?>

<form action="" method="POST">
    <div>
        ad: <input type="text" name="ad" /><br><br>
        soyad: <input type="text" name="soyad" /><br><br>
    </div>
    <button type="submit">Submit</button>
</form>