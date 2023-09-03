# hba
Learning programming.

# SQL code for 28 August problem
```SQL
SELECT left(il, 1) AS Harf, count(DISTINCT il) AS Sayi FROM referandum GROUP BY left(il, 1);
```


# SQL connection
```SQL
$servername = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "2023_yaz";

try {
  $DB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}
```

# SQL LISTELEME
```SQL
$SORGU = $DB->prepare("SELECT id, name, email FROM users");
$SORGU->execute();
$users = $SORGU->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; print_r($users);

foreach($users as $user) {
    echo " {$user['id']} : {$user['name']}, {$user['email']} <br>";
}
```

# KAYIT EKLEME
```SQL
$name  = "Nuri";
$email = "nuri@hotmail.com";

$sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
$SORGU = $DB->prepare($sql);

$SORGU->bindParam(':name', $name);
$SORGU->bindParam(':email', $email);

$SORGU->execute();
echo "User created";
```

# KAYIT GUNCELLEME
```SQL
$name  = "Nuri Akman";
$email = "nuri@gmail.com";
$id    = 4;

$sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
$SORGU = $DB->prepare($sql);

$SORGU->bindParam(':name', $name);
$SORGU->bindParam(':email', $email);
$SORGU->bindParam(':id', $id);

$SORGU->execute();
echo "User updated";
```

# KAYIT SILME
```SQL
$id    = 4;

$sql = "DELETE FROM users WHERE id = :id";
$SORGU = $DB->prepare($sql);

$SORGU->bindParam(':id', $id);

$SORGU->execute();
echo "User deleted";
```

# Ilave Bilgiler
## PDO fetchAll Komutu Kullanim Sekilleri
```SQL
$servername  = "localhost";
$username    = "root";
$password    = "root";
$dbname      = "ORNEKLER";

try  {
  $DB  =  new  PDO("mysql:host=$servername;dbname=$dbname",  $username,  $password);
  $DB->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
  $DB->exec("SET names utf8  "); // utf8mb4
  $DB->exec("SET sql_mode='' ");
  // echo "Connected successfully";
}  catch(PDOException  $e)  {
  echo  "Connection failed: "  .  $e->getMessage();
  die();
}

$stmt1  =  $DB->query('SELECT id, name FROM users');
$stmt2  =  $DB->query('SELECT id, name FROM users');
$stmt3  =  $DB->query('SELECT id, name FROM users');
$stmt4  =  $DB->query('SELECT id, name FROM users');

$cevap1 = $stmt1->fetchAll(PDO::FETCH_KEY_PAIR);
$cevap2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
$cevap3 = $stmt3->fetchAll();
$cevap4 = $stmt4->fetchAll(PDO::FETCH_COLUMN, 1); // İlk kolon 0'dan başlar

print_r($cevap1);
print_r($cevap2);
print_r($cevap3);
print_r($cevap4);

```

# Mysql index

### Tabloda satirlara index verirsek aramalar cok daha hizli bir sekilde butun database'i gezmeden kayitlari karsimiza cikartir 
