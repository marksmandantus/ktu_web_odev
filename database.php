<?php 

// Veritabanı bilgileri
$servername = "localhost";  // Sunucu adı
$username = "root";  // Veritabanı kullanıcı adı
$password = "";  // Veritabanı şifresi
$dbname = "cities";  // Veritabanı adı

// Veritabanı bağlantısı oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Veritabanına bağlantı sağlanamadı: " . $conn->connect_error);
}
else{
    echo "Veritabanına bağlantı sağlandı.";}

// Bağlantı başarılı olduğunda burada işlemlerinizi gerçekleştirebilirsiniz

// Bağlantıyı kapatma
$conn->close();

?>