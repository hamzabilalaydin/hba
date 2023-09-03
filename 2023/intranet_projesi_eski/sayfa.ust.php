<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bizim Şirket</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<br>
<body class='bg-light p-3'>

  <div class='container'>

    <div class='row text-center'>
      <h1><a href='index.php' class=''>İntranet Sayfamız</a></h1>
      <blockquote class='blockquote'><?php echo $_SESSION['adsoyad']; ?></blockquote>
      <div class='row text-end'>
        <p><a href='logout.php' style="text-decoration:none" class="badge text-bg-danger"> Oturumu Kapat </a></p>
      </div>
    </div>
