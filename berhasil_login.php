<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_berhasil_login.css">
    <title>Test coding login</title>
</head>
<body>
    <div class="container">
    <div class="sidebar">
         <nav>
                <ul>
                    <li><a href="">Menu_1</a></li>
                    <li><a href="">Menu_2</a></li>
                    <li><a href="">Menu_3</a></li>
                    <li><a href="">Menu_4</a></li> 
                </ul>
            </nav>
        </div>
        <main class="content">
              <section class="hero">
                  <img src="online.png" alt="">
              <div class="hero-content">
                  <h1><?php echo "Selamat Datang, " . $_SESSION['username']; ?></h1><br></h2>Ini adalah tes coding login sederhana</h2><br><br>  
                  <p>Mudah-mudahan dengan tes coding ini saya mendapatkan ACC,Terimakasih.</p>
                  
                <form action="" method="POST">
                  <a href="logout.php" class="action-btn">Logout</a>
                </form>
              </div>
                </section>
        </div>
    </div>    
</body>
</html>
