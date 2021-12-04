<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css" />

    <title>Portfolio | Dhea Gita</title>
  </head>

  <body id="home">
    <header>
      <!--========== NAVBAR ==========-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <!-- Nav Brand -->
          <a class="navbar-brand" href="#">Dhegit</a>
          <!-- End Nav Brand -->
          <!-- Nav Toggle -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- End Nav Toggle -->
          <!-- Nav Collapse -->
          <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Nav List -->
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active ps-md-4" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ps-md-4" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ps-md-4" href="#proj">Project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ps-md-4" href="#contact">Contact</a>
              </li>
            </ul>
            <!-- End Nav List -->
          </div>
          <!-- End Nav Collapse -->
        </div>
      </nav>
      <!--========== END NAVBAR ==========-->

      <!--========== JUMBOTRON ==========-->
      <section class="jumbotron">
        <div class="container-fluid">
          <h1 class="display-3 fw-bold mt-3">Hi, <br />I'm <span style="color: #4752e5">Dhea Gita</span></h1>
          <p class="lead">Student of Information System Unhas</p>
          <!-- Explore Button -->
          <!-- Button trigger modal -->
          <div class="navbar-nav">
            <a class="btn btn-md mt-md-5" href="<?= base_url('login') ?>" role="button">
							<i class="bi bi-box-arrow-in-right me-2 align-center"></i>Login
						</a>
          </div>
          <img class="mt-5" src="/img/img-home.png" alt="image of home" />
        </div>
      </section>
      <!--========== END JUMBOTRON ==========-->

      <!--========== ABOUT ==========-->
      <section id="about">
        <div class="container-fluid">
          <div class="row text-center">
            <div class="col">
              <h1 class="display-3 fw-bold mb-1 item__h1">About</h1>
              <div class="line__shape"></div>
            </div>
          </div>
          <div class="row vertical__center justify-content-evenly">
            <div class="col-md-3">
              <div class="row">
                <img src="/img/img-about.png" alt="image of about" />
              </div>
            </div>
            <div class="col-md-6 ps-3 size__tab">
              <h2 class="fs-5 lh-base mt-5">I'm Dhea Gita</h2>
              <p class="lead fs-6 lh-lg">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatibus accusamus aliquam assumenda nesciunt impedit, excepturi quisquam corrupti quo, alias, praesentium exercitationem sequi veritatis iste consequuntur
                quam. Eos, ipsam. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!--========== END ABOUT ==========-->

      <!--========== PROJECT ==========-->
      <section id="proj">
        <div class="container-fluid">
          <div class="row text-center">
            <div class="col">
              <h1 class="display-3 fw-bold item__h1">Project</h1>
              <div class="line__shape"></div>
            </div>
          </div>
          <div class="row justify-content-evenly">
            <!-- Proj 1 -->
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="/img/proj-1.svg" class="card-img-top" alt="proj 1S" />
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <!-- Proj 2 -->
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="/img/proj-2.svg" class="card-img-top" alt="proj 1S" />
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <!-- Proj 3 -->
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="/img/proj-3.svg" class="card-img-top" alt="proj 1S" />
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <!-- Proj 4 -->
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="/img/proj-4.svg" class="card-img-top" alt="proj 1S" />
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <!-- Proj 5 -->
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="/img/proj-5.svg" class="card-img-top" alt="proj 1S" />
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <!-- Proj 6 -->
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="/img/proj-6.svg" class="card-img-top" alt="proj 1S" />
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <!-- End proj img -->
          </div>
        </div>
        <!-- Item Project -->

        <!-- End Item Project -->
      </section>
      <!--========== END PROJECT ==========-->

      <!--========== CONTACT ==========-->
      <section id="contact">
        <div class="container-fluid">
          <div class="row text-center">
            <div class="col">
              <h1 class="display-3 fw-bold mb-1 item__h1">Contact</h1>
              <div class="line__shape"></div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="mb-3">
                <input type="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama" />
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" />
              </div>
              <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
							<!-- Explore Button -->
          <!-- Button trigger modal -->
					<button type="submit" class="btn btn-md mt-md-3 me-0" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-bottom: 8rem"><i class="bi bi-cursor-fill me-2 align-center"></i>Send</button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Hi, visitors</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body fs-6 lh-lg">
                  Terima kasih!
                </div>
              </div>
            </div>
          </div>
              
            </div>
          </div>
        </div>
      </section>
      <!--========== END CONTACT ==========-->
    </header>

    <footer id="footer" class="container-fluid text-center">
      <a href="#home"><i class="bi bi-chevron-up"></i> </a>
      <p class="mt-3">Bootstrap Theme Made By</p>
      <h2 class="mt-5">Dhegit</h2>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
