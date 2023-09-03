<?php
require 'login.kontrol.php';
require 'sayfa.ust.php'; ?>

<div class='row text-center'>
  <h1 class='alert mb-0 alert-primary'>Telefon Rehberi</h1>
</div>

<nav class="container navbar navbar-light bg-light">
  <form class="form-inline row col-md-4">
    <input class=" col-md-2 form-control w-75 mr-sm-2" type="text" name='isim_form' placeholder="Search" aria-label="Search">
    <button class="col-md-2 m-2 btn btn-outline-primary my-2 my-sm-0" type="submit" value='Arama'>Arama</button>
  </form>
</nav>


<table class="mt-0 table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">Adı Soyadı</th>
      <th scope="col">Telefonu</th>
      <th scope="col">Unvanı</th>
      <th scope="col">Birimi</th>
    </tr>
  </thead>
  <tbody>




    <?php

    require_once('db.php');
    if(isset($_GET['isim_form'])){
      
      $aranan = $_GET['isim_form'];
      $aranan = "%{$aranan}%";
    } else {
      $aranan = "";
    }


    $sql = "SELECT * FROM kullanicilar WHERE 
            adsoyad LIKE :isim_form OR
            birim LIKE :isim_form OR
            telefon LIKE :isim_form LIMIT 20";
    $SORGU = $DB->prepare($sql);

    $SORGU->bindParam(':isim_form',$aranan);
    $SORGU->execute();
    $kullanicilar = $SORGU->fetchAll(PDO::FETCH_ASSOC);
    //echo '<pre>'; print_r($users);

    foreach ($kullanicilar as $kullanici) {
      echo "
    <tr>
      <td>{$kullanici['adsoyad']}</td>
      <td>{$kullanici['telefon']}</td>
      <td>{$kullanici['unvan']}</td>
      <td>{$kullanici['birim']}</td>

   </tr> 
  ";
    }

    ?>

  </tbody>
</table>




<div class='text-center'>
  <a href='index.php' class='btn btn-warning'>ANASAYFAYA</a>
</div>

<?php require 'sayfa.alt.php'; ?>