{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Mlaku</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mlaku.css" />
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
              <a class="nav-link" href="/jelajahi">Jelajahi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.blade.php">About Us</a>
            </li>

            {{--- -----------------------INI ADALAH LOGIN----------------------------- --}}

            @auth
                <li class=" dropdown">
                  <a class="nav-link dropdown-toggle"href="#"  data-toggle="dropdown">
                    Welcome Back, {{ auth()-> user()-> username }}
                </a>
                  <ul class="dropdown-menu">
                    <form action="/logout" method="POST">
                      @csrf
                      <button type ="submit" class="dropdown-item">Logout</button>
                    </form>

                  </ul>
                </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="/index/login">Log in</a>
              </li>
            @endauth
            </ul>
        </div>
      </div>
    </nav>

    <!-- Slider -->
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/images/kbs1.webp" class="d-block w-100" alt="..." />
          <div class="carousel-caption">
            <h5>Kebun Binatang Surabaya</h5>
            {{-- @auth
                <h1>COBA YAH</h1>
            @endauth --}}
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia
              ipsam ipsum nulla eveniet, eius veritatis?
            </p>
            <p><a href="jelajahi.html" class="btn btn-warning mt- 3">Jelajahi</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/images/Kya-kya1.webp" class="d-block w-100" alt="..." />
          <div class="carousel-caption">
            <h5>Kya-Kya</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia
              ipsam ipsum nulla eveniet, eius veritatis?
            </p>
            <p><a href="jelajahi.html" class="btn btn-warning mt- 3">Jelajahi</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="images/KebunBibitWonorejo1.webp"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption">
            <h5>Kebun Bibit Wonorejo</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia
              ipsam ipsum nulla eveniet, eius veritatis?
            </p>
            <p><a href="jelajahi.html" class="btn btn-warning mt- 3">Jelajahi</a></p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Explore section -->
    <section id="explore" class="explore section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-12 text-col">
            <div class="text-explore">
              <h2>Explore Surabaya</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, ullam, quae maiores, consequatur odio magni provident nemo animi exercitationem nulla deleniti perferendis impedit deserunt repellendus ut voluptates veniam repellat sequi!
              </p>
              <a href="jelajahi.html" class="btn btn-warning">Explore</a>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-12 d-flex justify-content-start konten-col">
            <div class="konten-explore position-relative">
              <a href="jelajahi.html">
                <img src="images/TamanBungkul1.webp" alt="" />
              </a>
              <div class="isi-img position-absolute top-0 bottom-0 start-0 end-0">
                <div class="position-absolute top-50 start-50 translate-middle text-center">
                  <a href="alam.html">Alam</a>
                </div>
              </div>
            </div>
            <div class="konten-explore position-relative">
              <a href="jelajahi.html">
                <img src="images/TamanBungkul1.webp" alt="" />
              </a>
              <div class="isi-img position-absolute top-0 bottom-0 start-0 end-0">
                <div class="position-absolute top-50 start-50 translate-middle text-center">
                  <a href="budaya.html">Budaya</a>
                </div>
              </div>
            </div>
            <div class="konten-explore position-relative">
              <a href="jelajahi.html">
                <img src="images/TamanBungkul1.webp" alt="" />
              </a>
              <div class="isi-img position-absolute top-0 bottom-0 start-0 end-0">
                <div class="position-absolute top-50 start-50 translate-middle text-center">
                  <a href="kuliner.html">Kuliner</a>
                </div>
              </div>
            </div>
            <div class="konten-explore position-relative">
              <a href="jelajahi.html">
                <img src="images/TamanBungkul1.webp" alt="" />
              </a>
              <div class="isi-img position-absolute top-0 bottom-0 start-0 end-0">
                <div class="position-absolute top-50 start-50 translate-middle text-center">
                  <a href="jelajahi.html">Lainnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Top Destinasi -->
    <section id="top-destinasi" class="top-destinasi section-padding">
      <div class="container">
        <div class="top-destinasi">
          <h1>Top Destinasi</h1>
        </div>
        <div class="bungkus-top">
          <div class="card-top">
            <a href="jelajahi.html">
              <img src="images/SurabayaNorthQuay1.webp" alt="">
            </a>
          </div>
          <div class="card-top">
            <a href="jelajahi.html">
              <img src="images/SurabayaNorthQuay1.webp" alt="">
            </a>
          </div>
          <div class="card-top">
            <a href="jelajahi.html">
              <img src="images/SurabayaNorthQuay1.webp" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"></script>


  </body>
</html> --}}
