<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>
        <title>Anasayfa | Soru Çöz! </title>
        <link rel="stylesheet" href="sorucoz.css">
    </head>
    <body>
        <section id="menu">
            <div id="logo">Soru Çöz!</div>
            <nav>
                <a href="#menu"><i class="fas fa-home ikon"></i>Anasayfa</a>
                <a href="#hakkimizda"><i class="fas fa-info ikon"></i>Hakkımızda</a>
                <a href="#egitimler"><i class="fas fa-shopping-basket ikon"></i>Ürünler</a>
                <a href="#ekip"><i class="fas fa-child ikon"></i>Ekip</a>
                <a href="#iletisim"><i class="fas fa-phone ikon"></i>İletişim</a>
                <a href="oturumac.php"><i class="fas fa-sign-in-alt ikon"></i>Oturum Aç</a>
            </nav>
        </section>
        <section id="anasayfa">
            <div id="black"></div>
            <div id="icerik">
                <h2>Bill Porter</h2>
                <hr width="300px" align="left">
                <p>"Hayatta ne istediğinize karar verin; kalkın ve başarana kadar asla vazgeçmeyin."</p>
            </div>
        </section>
        <section id="hakkimizda">
            <h3>Hakkımızda</h3>
            <div class="container">
                <div id="sol">
                    <h5 id="h5sol">Biz Kimiz ?</h5>
                </div>
                <div id="sag">
                    <p id="psag">Ders çalışırken karşınıza çıkan sorulara cevap bulmanız için kurulan bir kuruluşuz. Hepimizin de sizler gibi çözemediği sorular oldu. Fakat biz bir çok sorumuza cevap bulamadan öğrencilik yıllarımızı geçirdik. Bu sistem sayesinde soru sorabilecek, sorunuza cevap bulabilecek, başkalarının sorularına yardımcı olabileceksiniz. İlerleyen süreçlerde ödüllü sorular, uygulama parası ile alışverişler gibi siz öğrencilerin işine yarayabilecek hizmetler geliştirmeyi hedefliyoruz.</p>
                </div>
                
                <br>
                <img src="img/soru-cozmek.jpg" alt="" class="imgfm">
                <p id="pson"></p>
            </div>
        </section>
        <section id="egitimler">
            <div class="container">
                <h3>Ürünler</h3>
                <div>
                    <div id="card">
                        <img src="img/kalemPHP.jpg" alt="" class="img-fluid">
                        <h5 class="baslikcard">Faber Kastel Kalem</h5>
                        <p class="cardp">0.5 uç taşıyan tasarım ödüllü kalemimizi 3.000 SÇ parası ile alabilirsiniz. Diğer seçenekler de mümkün</p>
                        <p class="cardpara">3.000 SÇ</p>
                        <button>Sepete Ekle</button>
                    </div>
                    <div id="card">
                        <img src="img/tytKitapPHP.jpg" alt="" class="img-fluid">
                        <h5 class="baslikcard">TYT Matematik Soru Bankası</h5>
                        <p class="cardp">9. ve 10. Sınıfın müfredatını içeren TYT Matematik Soru Bankasını 10.000 SÇ parası ile alabilirsiniz.</p>
                        <p class="cardpara">10.000 SÇ</p>
                        <button>Sepete Ekle</button>
                    </div>
                    <div id="card">
                        <img src="img/aytKitapPHP.jpg" alt="" class="img-fluid">
                        <h5 class="baslikcard">AYT Matematik Soru Bankası</h5>
                        <p class="cardp">11. ve 12. Sınıfın müfredatını içeren AYT Matematik Soru Bankasını 15.000 SÇ parası ile alabilirsiniz.</p>
                        <p class="cardpara">15.000 SÇ</p>
                        <button>Sepete Ekle</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="ekip">
            <div class="container">
                <h3 id="ekiph3">EKİP</h3>
                <!--
                <div class="sutun-sol-sag">
                    <img src="img/EmreKaptanDaireResim.png" alt="" class="img-fluid oval">
                    <h4 class="ekipisim">Emre Kaptan</h4>
                    <p class="ekipp">Frontend Developer</p>
                    </div>
                -->
                <div class="sutun-sol-sag">
                    <img src="img/EmrAppDaireLogo.png" alt="" class="img-fluid oval">
                    <h4 class="ekipisim">Emre Kaptan</h4>
                    <p class="ekipp">Web Developer</p>
                </div>
                <!--
                <div class="sutun-sol-sag">
                    <img src="img/EmreKaptanDaireResim.png" alt="" class="img-fluid oval">
                    <h4 class="ekipisim">Emre Kaptan</h4>
                    <p class="ekipp">Backend Developer</p>
                </div>
                -->
            </div>
        </section>
        <section id="iletisim">
            
            <div class="container">
                <h3 id="h3iletisim">İLETİŞİM</h3>
                <form action="giris.php" method ="post">
                <div id="iletisimopak">
                    <div id="formgroup">
                        <div id="solform">
                            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                            <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                        </div>
                        <div id="sagform">
                            <input type="email" name="mail" placeholder="Email Adresi" required class="form-control">
                            <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                        </div>
                        <textarea name="mesaj" id="" cols="30" placeholder="Mesaj" rows="10" required class="form-control"></textarea>
                        <input type="submit" value="Gönder">
                    </div>
                    <div id="adres">
                        <h4 id="adresbaslik">Adres : </h4>
                        <p class="adresp">Emre Kaptan Mah.</p>
                        <p class="adresp">Emre Kaptan Cad.</p>
                        <p class="adresp">Emre Kaptan Sok.</p>
                        <p class="adresp">0212 345 67 89</p>
                        <p class="adresp">emrekaptan@gmail.com</p>
                    </div>
                </form>
                </div>
                
                <footer>
                    <div id="copyright">2022 | Tüm Hakları Saklıdır</div>
                    <a href="#menu" id="up">Yukarı Git</a>
                </footer>
            </div>
        </section>

    </body>
</html>

<?php
include("baglanti.php");
if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];

    $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";

    if($baglan->query($ekle)===TRUE){
        echo "<script>alert('Mesajınız başarı ile gönderildi.')</script>";
    }
    else{
        echo "<script>alert('Mesajınız gönderilemedi.')</script>";

    }
}
?>