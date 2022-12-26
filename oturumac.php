<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="oturumac.css">
    <title>Oturum Aç</title>
</head>
<body>
<h2>Soru Çöz Eğitim Portalı</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Hesap Oluştur</h1>
			<input type="text" placeholder="Kullanıcı Adı" />
			<input type="password" placeholder="Şifre" />
			<input type="password" placeholder="Şifre Tekrar" />
			<button>Kayıt Ol</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Giriş Yap</h1>
			<input type="name" placeholder="Kullanıcı Adı" />
			<input type="password" placeholder="Şifre" />
			<a href="#">Parolanızı mı unuttunuz?</a>
			<a href="soruCoz.php">Oturum Aç</a>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Hoşgeldin!</h1>
				<p>Bizimle bağlantıda kalmak için lütfen kişisel bilgilerinizle giriş yapın</p>
				<button class="ghost" id="signIn">Oturum Aç</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Merhaba!</h1>
				<p>Kişisel bilgilerinizi girin ve bizimle yolculuğa başlayın</p>
				<button class="ghost" id="signUp">Kayıt Ol</button>
			</div>
		</div>
	</div>
</div>

<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</body>
</html>