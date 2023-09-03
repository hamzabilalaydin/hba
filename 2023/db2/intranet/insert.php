

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<h1 class='container-fluid m-4 text-center'>KAYIT EKLEME FORMU</h1>

<form class='text-center' method='POST'>
    <p><input class='' type='text' name='name'placeholder='Username' ></p>
    <p><input type='text' name='email' placeholder='Email'></p>
    <p><input class='btn btn-secondary' type='submit' value='EKLE'></p>
</form>

<div class='text-center'>
    <p class='btn btn-primary'><a class='text-white' style='text-decoration:none' href='index.php'>ANASAYFAYA DÖN</a></p>
</div>

<?php

if(isset($_POST['name'])){

    require_once('db.php');

    $name  = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
    $SORGU = $DB->prepare($sql);

    $SORGU->bindParam(':name',  $name);
    $SORGU->bindParam(':email', $email);

    $SORGU->execute();
    echo "User created";
}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>