<?php
    $gambarPath = "gambar/digi.png";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
</div>
<body>
    <div id="navbar">
        <nav>
            <div class="nav-wrapper">
                <div class="container-nav">
                    <div class="nav-kiri">
                        <img src= "<?php echo $gambarPath; ?>"alt="">
                        <div class="beranda">
                            <a href="#">
                                <i class="fas fa-home fa-2x"></i>
                                <strong>beranda</strong></a>
                        </div>
                        <div class="riwayat">
                            <a href="#"><i class="fas fa-magnifying-glass fa-2x"></i>
                            <strong>Riwayat</strong></a>
                        </div>
                    </div>
                    <div class="nav-kanan">
                        <div class="search">
                            <form action="#">
                                <button type="submit">Search</button>
                                <input type="text" id="name" name="name" placeholder="Search">
                            </form>
                        </div>
                        <div class="container-login">
                            <div class="login">
                                <a href="login.php">
                                    <i class="fas fa-user fa-xl"></i>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>


    <div id="wrapper">
        <h1>COMING SOON!!</h1>

    </div>
    <div id="container">

    </div>
    
</body>
<script>
        // Periksa apakah parameter welcome ditemukan dalam URL
        const urlParams = new URLSearchParams(window.location.search);
        const welcomeParam = urlParams.get('welcome');

        // Jika welcome=true, tampilkan prompt selamat datang
        if (welcomeParam === 'true') {
            alert("Selamat Datang");
        }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>