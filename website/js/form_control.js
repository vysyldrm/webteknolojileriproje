function formControl() {
  let adSoyad = document.forms["iletisim"]["adsoyad"].value;
  let kullaniciAdi = document.forms["iletisim"]["kullanici-adi"].value;
  let eMail = document.forms["iletisim"]["email"].value;
  let sifre = document.forms["iletisim"]["sifre"].value;
  let universite = document.forms["iletisim"]["uni"].value;

  const adSoyadRegex = /^[a-zA-Z\-\s]+$/;
  const sifreRegex = /^[a-zA-Z0-9]+$/;
  const kullaniciAdiRegex = /^[a-z0-9_.]+$/;
  const eMailRegex =  /^[a-z0-9]+@sakarya.edu.tr/;

  if (adSoyad == "") {
    alert("Ad Soyad alanı boş bırakılamaz!!!");
    return false;
  } else{
    if(!(adSoyadRegex.test(adSoyad))){
      alert("Ad Soyad yalnızca harf içermelidir!!!");
      return false;
    }
  }

  if (kullaniciAdi == "") {
    alert("Kullanıcı Adı alanı boş bırakılamaz!!!");
    return false;
  }

  if(!(kullaniciAdiRegex.test(kullaniciAdi))){
      alert("Kullanıcı Adı yalnızca küçük harf, rakam veya . _ karakterlerini içermelidir!!!");
      return false;
  }

  if(kullaniciAdi.length < 3 || kullaniciAdi.length > 15){
      alert("Kullanıcı Adı en az 3, en çok 15 karakter içermelidir!!!");
      return false;
  }

  if(!(eMailRegex.test(eMail))){
      alert("Email formatını yanlış girdiniz !!! (example@sakarya.edu.tr)");
      return false;
  }

  if(!(sifreRegex.test(sifre))){
      alert("Şifreniz en az 3 en çok 15 karakter olmalı ve büyük/küçük harf, rakam içermelidir!");
      return false;
  }

  if(sifre.length < 6 || sifre.length > 15){
      alert("Şifreniz en az 6 en çok 15 karakter olmalı ve büyük/küçük harf, rakam içermelidir!");
      return false;
  }

  if (universite == "") {
    alert("Üniversite alanı boş bırakılamaz!!!");
    return false;
  }

}
