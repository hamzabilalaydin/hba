<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


<?php

    require_once('db.php');

    if(isset($_POST['name'])){
        ///////////////////////////////////////
        /////////////////////////////////////// GÜNCELLEME İŞLEMİ
        ///////////////////////////////////////
        // echo "<pre>"; print_r($_POST);
        // echo "<pre>"; print_r($_GET);

        $name  = $_POST['name'];
        $email = $_POST['email'];
        $id    = $_GET['id'];

        $sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
        $SORGU = $DB->prepare($sql);

        $SORGU->bindParam(':name',  $name);
        $SORGU->bindParam(':email', $email);
        $SORGU->bindParam(':id',    $id);

        // die(date("H:i:s"));
        $SORGU->execute();
        echo "User updated";
    }

    $id    = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = :id";
    $SORGU = $DB->prepare($sql);

    $SORGU->bindParam(':id', $id);

    $SORGU->execute();

    $users = $SORGU->fetchAll(PDO::FETCH_ASSOC);
    $user  = $users[0];

    // echo "<pre>"; print_r($users);
?>
<div class='container text-center'>
    <h1>KAYIT GÜNCELLEME</h1>
    
    <form method='POST'>
        <p><input type='text' name='name'  value='<?php echo $user['name'];  ?>'></p>
        <p><input type='text' name='email' value='<?php echo $user['email']; ?>'></p>
        <p ><input class='btn btn-secondary' type='submit' value='GÜNCELLE'></p>
    </form>
    
    <p><a href='list.php' class='btn btn-primary btn-lg'>Listeye Dön</a></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>