
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
    <link rel="stylesheet" href="css/jelajahi.css" />
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


  @foreach ($posts as $post)
	<div class="container mt-4">
		<div class="d-flex flex-column justify-content-center align-items-center">
            @if ($post->category_id ==1)
                <h1 class="mt-5" >ALAM</h1>
                <a href="/jelajahi/{{ $post->id }}"><h1> {{ $post->title }}</h1></a>
            <p>{{ $post->body }}</p>
			</div>
            @endif
            @endforeach
        </div>
    </div>

    <div class="mt-4 ml-4">
        <a href="{{ route('create') }}" class="btn btn-primary">+ Tambah Post</a>
      </div>

      <div class="mt-4" >
        <a href="{{ route('jelajahi') }}" class="btn btn-primary">kembali</a>
      </div>
</body>
</html>
