<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<h1 class='container-fluid m-4 text-center'>KAYITLI KULLANICILAR</h1>

<table class='table table-bordered'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Isim</th>
            <th>Email</th>
            <th>Guncelle</th>
            <th>Sil</th>
        </tr>
    </thead>
    <tbody>

        
        <?php

require_once('db.php');

$SORGU = $DB->prepare("SELECT id, name, email FROM users");
$SORGU->execute();
$users = $SORGU->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; print_r($users);
var_dump($users);
foreach($users as $user) { 
    
    //<h4 class="text-center mb-0"><?php echo $user['id'];</h4>
    echo "
    
    <tr class='table-active'>
    <th>{$user['id']}</th>
    <th>{$user['name']}</th>
    <th>{$user['email']}</th>
    <th><a href='update.php?id={$user['id']}'>Güncelle</a></th>
    <th><a href='delete.php?id={$user['id']}'>Sil</a></th>
    </tr>
    
    ";
    
    
}
?>
</tbody>
</table>
<?php
echo '<div class="text-center">'; // Center the button
echo '<a class="btn btn-primary" href="index.php">ANASAYFAYA DÖN</a>'; // Convert the <p> to a button
echo '</div>';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
