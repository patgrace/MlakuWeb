<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konten kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mlaku.css" />
    <link rel="stylesheet" href="css/jelajahi.css"/>
</head>
<body>
  <!-- Navigasi Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Mlaku</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarText"
        aria-controls="navbarText"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="mlaku.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jelajahi.html">Jelajahi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

	<div class="container">
		<h1 class="title">Pilih Destinasi!</h1>
		<div class="category">
			<div class="category-item" href="/jelajahi/alam">
				<img src="images/KebunBibitWonorejo1.webp" alt="Kategori 1" >
        <a  href="/jelajahi/alam" style="text-decoration: none;  justify-content:center;"> <h3> Alam</h3></a>
        <p>Taman Bungkul, ...</p>
			</div>
			<div class="category-item">
				<img src="images/KebunBibitWonorejo1.webp" alt="Kategori 2">
				<a  href="/jelajahi/budaya" style="text-decoration: none;"> <h3> Budaya</h3></a>
				<p>Lorem ipsum ....</p>
			</div>
			<div class="category-item">
				<img src="images/KebunBibitWonorejo1.webp" alt="Kategori 3">
				<a  href="/jelajahi/kuliner" style="text-decoration: none; align-items:center;"> <h3> Kuliner</h3></a>
				<p>Lorem ipsum ....</p>
			</div>

			</div>

		</div>
	</div>
</body>
</html>
