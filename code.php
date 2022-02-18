<?php
  ## BAĞLANTI YAPIYORUZ
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "Veritabani";
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->query("SET NAMES 'utf8'");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Bağlantı Başarılı..."; 
    }
  catch(PDOException $e)
    {
      echo "Bağlantı Hatası: " . $e->getMessage();
    }
    
  ## TABLO OLUŞTURUYORUZ
  $sql = "CREATE TABLE kullanicilar (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    kull_adi VARCHAR(30) NOT NULL,
    kull_soyad VARCHAR(30) NOT NULL,
    kull_mail VARCHAR(50),
    kull_tarih TIMESTAMP
    )";
    $conn->exec($sql);
    echo "Tablo Başarıyla Oluşturuldu...";
    
    
?>
