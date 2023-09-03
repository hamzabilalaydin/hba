<?php
require 'login.kontrol.php';
require 'sayfa.ust.php';
?>

<div class='row text-center'>
  <h1 class='alert alert-primary'>Talep Yönetimi</h1>
</div>


<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Talep Tarihi</th>
      <th scope="col">Talep Eden</th>
      <th scope="col">Talep</th>
      <th scope="col">Oncelik</th>
      <th scope="col">Güncelle</th>
    </tr>
  </thead>

   <?php

    require_once('db.php');

    $SORGU = $DB->prepare("SELECT * FROM talepler");
    $SORGU->execute();
    $talepler = $SORGU->fetchAll(PDO::FETCH_ASSOC);
    //echo '<pre>'; print_r($users);
    $aciliyet = 0;

    foreach ($talepler as $talep) {
        
        if($talep['aciliyet'] = 1) $aciliyet = "Normal";

      echo "
    <tr>
      <th>{$talep['id']}</th>
      <td>{$talep['taleptarihi']}</td>
      <td>{$talep['talepeden']}</td>
      <td>{$talep['talep']}</td>
      <td>{$talep['aciliyet']}</td>
      <td><a href='update.php?id={$kullanici['id']}' class='btn btn-success btn-sm'>Güncelle</a></td>
   </tr> 
  ";
    }

    ?>


  <tbody>
</table>





<?php require_once 'sayfa.alt.php'; ?>