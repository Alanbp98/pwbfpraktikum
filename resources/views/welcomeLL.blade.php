<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Legal Literasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container">
          <a class="navbar-brand" href="#">Legal Literacy</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Hukum Publik</a></li>
                  <li><a class="dropdown-item" href="#">Hukum Privat</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Testimonials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Login as Pengguna</a></li>
                  <li><a class="dropdown-item" href="#">Login as Konsultan</a></li>
                </ul>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
              </li> --}}
            </ul>
          </div>
        </div>
      </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron">
        <div class="container text-xl-center mb-3">
            <div class="row justify-content-center">
                <div class="col">
                    <h1>Consult Your Problem</h1>
                    <h4>The best place to consult about law</h4>
                    <h4>and get professional legal services.</h4>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Registration Now</a>
                </div>
                <div class="col">
                    <img src="assets/img/home2.png" class="card-img-top" alt="home">
                </div>
            </div>
        </div>
    </section>
    <!-- End Jumbotron -->
    
    <!-- Category -->
    <section id="category">
        <div class="container text-xl-center mb-3">
            <div class="row">
                <div class="col">
                    <h2>Category</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="assets/img/hpublik.jpg" class="card-img-top" alt="Hukum Publik">
                        <div class="card-body">
                        <p class="card-text">Hukum Publik</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="assets/img/hprivat.jpg" class="card-img-top" alt="Hukum Privat" height="236px">
                        <div class="card-body">
                        <p class="card-text">Hukum Privat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Category -->

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About Us</h2>
                    <p>The best place to consult about law and get professional legal services.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <img src="assets/img/about.jpeg" alt="about" width="370px">
                </div>
                <div class="col-md-4 mb-3">
                    <div class="row">
                        <div>
                            <h6>Get web developer insight</h6>
                            <p>Great for lead generation, selling products, portfolios, events, and more.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <h6>get certificate</h6>
                            <p>get a nationally licensed certificate..</p>
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <h6>become a professional web developer</h6>
                            <p>get new relationships and learn together to become a professional web developer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Testimonials -->
    <section id="testimoni">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Don't take our word for it</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <p>orang 1</p>
                </div>
                <div class="col-md-4 mb-3">
                    <p>orang 2</p>
                </div>
                <div class="col-md-4 mb-3">
                    <p>orang 3</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials -->

    <!-- ======= Footer ======= -->
    <footer class="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 mb-3">
                    <h4>Subsribe to our newlestter.</h4>
                    <p>Get the lastest news in your inbox.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <form>
                        <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Type your email here">
                    </form>
                </div>
                <div class="col-md-2 mb-3">
                    <form>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-4 mb-3">
                    <p>We must be legally literate!</p> 
                    <p>because every aspect of life is governed by law</p>
                </div>
                <div class="col-md-4 mb-3">
                    <p>Contact Us</p>
                    <p>LegalLiteracy@gmail.com</p>
                    <p>Jalan A. Yani 2022, Surabaya</p>
                    <p>+1234567890</p>
                </div>
            </div>
            <div class="row text-center">
                <p>© 2022 Copyright, All Right Reserved. Made by LegalLiteracy Coorporation</p>
            </div>
        </div>
    </footer>
    <!-- end footer -->

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>