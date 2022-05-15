<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Yanıtları</title>

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
    <h1>Form Yanıtları</h1>

<div class="iletisim-form">

    <h6>Ad Soyad : </h6>
    <?php
    echo $_POST['adsoyad'];
    ?><br>

    <h6>Kullanıcı Adı : </h6>
    <?php
    echo $_POST['kullanici-adi'];
    ?><br>

    <h6>E-Mail : </h6>
    <?php
    echo $_POST['email'];
    ?><br>

    <h6>Şifre : </h6>
    <?php
    echo "Şifre Alanı Gizlidir !";
    ?><br>

    <h6>Cinsiyet : </h6>
    <?php
    if(empty($_POST['cinsiyet'])){
          echo "Cinsiyet Seçilmedi";
    }
    else{
      if($_POST['cinsiyet'] == "erkek"){
        echo "Erkek";
      }
      else{
        echo "Kadın";
      }
    }
    ?><br>

    <h6>Üniversite : </h6>
    <?php
    if(empty($_POST['uni'])){
          echo "Üniversite Seçilmedi";
    }
    else{
      if($_POST['uni'] == "sau"){
        echo "Sakarya Üniversitesi";
      }
      elseif($_POST['uni'] == "subu"){
        echo "Sakarya Uygulamalı Bilimler Üniversitesi";
      }
      else{
        echo $_POST['uni'];
      }
    }
    ?><br>


    <h6>Bölüm : </h6>

    <?php
    if(empty($_POST['bolum'])){
          echo "Bölüm Seçilmedi";
    }
    else{
      if($_POST['bolum'] == "bilg-muh"){
        echo "Bilgisayar Mühendisliği";
      }
      elseif($_POST['bolum'] == "elektronik-muh"){
        echo "Elektronik Mühendisliği";
      }
      elseif($_POST['bolum'] == "makine-muh"){
        echo "Makine Mühendisliği";
      }
    }
    ?><br>

    <h6>Seçilen Dersler : </h6>
    <?php
    if(isset($_POST['ders1'])){
          echo "Web Teknolojileri"."<br>";

    }
    if(isset($_POST['ders2'])){
          echo "Sistem Programlama"."<br>";
    }
    if(isset($_POST['ders3'])){
          echo "Yapay Zeka";
    }
    ?><br>

    <h6>Mesaj : </h6>
    <?php
      echo $_POST['mesaj'];
    ?><br>

<a href="iletisim.html"><button type="button" class="btn btn-primary" name="geri">Geri</button></a>
<a href="index.html"><button type="button" class="btn btn-primary" name="anasayfa">Anasayfa</button></a>

</div>

<hr>

<footer id="footer">
  <p>© Copyright VYSYLDRM - 2022</p>
</footer>
  </body>
</html>
