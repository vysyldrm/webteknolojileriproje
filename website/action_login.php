<html lang="tr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="index.html">VYSYLDRM</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"> <a class="nav-link" href="index.html">Anasayfa</a> </li>
        <li class="nav-item"><a class="nav-link" href="cv.html">CV</a></li>
        <li class="nav-item"><a class="nav-link" href="sehrim.html">Şehrim</a></li>
        <li class="nav-item"><a class="nav-link" href="takimimiz.html">Takımımız</a></li>
        <li class="nav-item"><a class="nav-link" href="ilgi_alanlarim.html">İlgi Alanlarım</a></li>
        <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="iletisim.html">İletişim</a></li>
      </ul>
    </div>
  </nav>

  <hr>

<div class="iletisim-form">

  <?php
  if($_POST['email']  == "b201210389@sakarya.edu.tr" and $_POST['sifre'] == "b201210389"){
        echo "Hoşgeldiniz b201210389"."<br>";
  }
  else{
    echo "Hatalı E-Mail veya Şifre!"."<br>"."Login Sayfasına Yönlendiriliyorsunuz..."."<br>";
    header("Refresh: 3; url=login.html");
  }
  ?>

  <a href="login.html"><button type="button" class="btn btn-primary" name="geri">Geri</button></a>
  <a href="index.html"><button type="button" class="btn btn-primary" name="anasayfa">Anasayfa</button></a>

</div>

  <hr>

  <footer id="footer">
    <p>© Copyright VYSYLDRM - 2022</p>
  </footer>

</body>

</html>
