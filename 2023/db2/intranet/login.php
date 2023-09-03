

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<h1 class='container-fluid mx-auto mt-4 text-center'>GIRIS EKRANI</h1>

<form class='text-center' method='POST'>
    <p><input class='' type='text' name='eposta'placeholder='email' ></p>
    <p><input type='password' name='parola' placeholder='password'></p>
    <p><input class='btn btn-secondary' type='submit' value='GIRIS'></p>
    
    <?php

if(isset($_POST['eposta'])){

    require_once('db.php');
    
   
    $sql = "SELECT * FROM users WHERE email=:eposta AND parola= :parola";
    $SORGU = $DB->prepare($sql);
    
    $SORGU->bindParam(':eposta', $_POST['eposta']);
    $SORGU->bindParam(':parola', $_POST['parola']);
    
    $SORGU->execute();
    
    $CEVAP = $SORGU->fetchAll(PDO::FETCH_ASSOC);
    
    if(count($CEVAP) == 1) {
        
        //echo "<h1>GIRIS BASARILI</h1>";
        @session_start();
        $_SESSION['girisyapti'] = 1;
        $_SESSION['adi'] = $CEVAP[0]['name']; 
        $_SESSION['id'] = $CEVAP[0]['id'];
        
        header("location: index.php");
        die();
        
    }
    else {
        echo "<h2 class='bg-danger'>HATALI GIRIS</h2>";
        //header("location: hata.php");
        die();
    }
}
?>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>