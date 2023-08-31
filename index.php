<?php

@session_start();

if(isset($_SESSION['girisyapti'])){


} else {

    header("location: login.php");
    die();
}

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">



<div class='container'>
    <h1 class='m-4 mb-3 text-center'>PHP PDO ÖRNEĞİ</h1>
    <p class='text-center'><a href='list.php' class='m-1 mb-0 btn btn-primary btn-lg'  >Kayıtları Listele</a></p>
    <p class='text-center'><a href='insert.php' class='m-1 btn btn-secondary btn-lg'>Yeni Kullanıcı Ekle</a></p>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>