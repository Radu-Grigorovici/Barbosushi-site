<?php
$errors = [];
$missing = [];
if (isset($_POST['submit'])) {
  $expected = ['serviceType', 'numberOfPeopleAttending', 'eventDetail', 'phoneNumber', 'name'];
  $required = ['name', 'phoneNumber'];
  require './includes/process_mail.php';
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Barbosushi</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css\css.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="./js/tether.min.js"></script>
  <script src="./js/scroll.js"></script>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="70">

<nav class="navbar navbar-dark bg-dark navbar-expand-sm fixed-top" id="navbar">
  <div class="container">
    <div class="">
      <img src="assets\img\logo.png" style="width: 40px;" alt="Barbosushi logo">
      <a class="navbar-brand" href="#">Bărbosushi</a>
    </div>

    <button class="navbar-toggler"
    type="button" name="button"
    data-toggle="collapse"
    data-target="#navToggle"
    aria-controls="navToggler"
    aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navToggle">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link" href="#home">Home</a>
        <a class="nav-item nav-link" href="#desprenoi">Despre noi</a>
        <a class="nav-item nav-link" href="#sortimente">Sortimente</a>
        <a class="nav-item nav-link" href="#contact">Contact</a>
      </div>
      <!-- navbar-nav -->
    </div>
    <!-- navbar-collapse -->
  </div>
  <!-- container -->

</nav>

<div class="container-fluid bg-image" id="home">
  <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-3">
          </div>
            <div class="col-lg-6 my-auto">
              <div class="welcome-page-circle mx-auto bg-dark">


                <h1 class="text-center text-light mb-4">Bărbosushi</h1>
                <h3 class="text-center text-light mb-4">Sushi pentru evenimente</h3>
                <a href="#desprenoi" id="welcomePageScrollDown">
                <p class="text-center text-muted mb-0">scroll down</p>
                <p class="text-center"><img class="" src="./assets/img/scroll-beard.svg" alt="scroll down" style="height: 40px;"> </p>
                </a>
              </div>
            </div>
          <div class="col-lg-3">
        </div>
      </div>
      <!-- row -->
</div>
</div>

<div class="container-fluid bg-info p-4" id="desprenoi">
  <div class="container">
    <h1 class="mb-lg-3" >Despre noi </h1>
    <div class="row bg-dark">
      <div class="col-lg-3 bg-dark text-light p-4">
        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-lg-6 my-auto bg-dark">
        <div class="carousel" id="carousel" data-ride="carousel">
          <div class="carousel-inner">
            <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0"></li>
              <li data-target="#carousel" data-slide-to="1"></li>
              <li data-target="#carousel" data-slide-to="2"></li>
              <li data-target="#carousel" data-slide-to="3"></li>
              <li data-target="#carousel" data-slide-to="4"></li>
              <li data-target="#carousel" data-slide-to="5"></li>
            </ol>

            <div class="carousel-item active">
              <img class="img-fluid" src="./assets/img/1.jpg" alt="">
            </div>

            <div class="carousel-item">
              <img class="img-fluid" src="./assets/img/2.jpg" alt="">
            </div>

            <div class="carousel-item">
              <img class="img-fluid" src="./assets/img/3.jpg" alt="">
            </div>

            <div class="carousel-item">
              <img class="img-fluid" src="./assets/img/4.jpg" alt="">
            </div>

            <div class="carousel-item">
              <img class="img-fluid" src="./assets/img/5.jpg" alt="">
            </div>

            <div class="carousel-item">
              <img class="img-fluid" src="./assets/img/6.jpg" alt="">
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true">
                <span class="sr-only">Previous</span>
              </span>
            </a>

            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true">
                <span class="sr-only">Previous</span>
              </span>
            </a>
          </div>
          <!-- carousel-inner -->
        </div>
        <!-- carousel -->
      </div>
      <div class="col-lg-3 bg-dark text-light p-4">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <!-- <p class="sr-only" id="sortimente"></p> -->
      </div>
    </div>
    <!-- row -->
  </div>
<!-- container -->
</div>
<!-- container fluid -->

<div class="container-fluid bg-info pb-4"  id="sortimente">
    <div class="container" >
    <h1 class="pb-2" >Sortimente </h1>
    <div class="container d-md-flex">


      <section class="card m-1">
        <div class="card-body">

          <h2 class="card-title">Fel de sushi</h2>
          <img class="card-img img-fluid" src="./assets/img/1.jpg" alt="Some sushi">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </section>
      <section class="card m-1">
        <div class="card-body">

          <h2 class="card-title">Fel de sushi</h2>
          <img class="card-img img-fluid" src="./assets/img/2.jpg" alt="Some sushi">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </section>
      <section class="card m-1">
        <div class="card-body">

          <h2 class="card-title">Fel de sushi</h2>
          <img class="card-img img-fluid" src="./assets/img/3.jpg" alt="Some sushi">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </section>
    </div>
    <!--container d-flex-->
    <div class="container d-md-flex">
      <section class="card m-1">
        <div class="card-body">

          <h2 class="card-title">Fel de sushi</h2>
          <img class="card-img img-fluid" src="./assets/img/4.jpg" alt="Some sushi">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </section>
      <section class="card m-1">
        <div class="card-body">

          <h2 class="card-title">Fel de sushi</h2>
          <img class="card-img img-fluid" src="./assets/img/5.jpg" alt="Some sushi">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </section>
      <section class="card m-1">
        <div class="card-body">

          <h2 class="card-title">Fel de sushi</h2>
          <img class="card-img img-fluid" src="./assets/img/6.jpg" alt="Some sushi">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </section>
    </div>
    <!--container d-flex-->
  </div>
  <!--container -->
</div>
<!--container fluid-->

<div class="container-fluid bg-light p-3" id="contact">
  <div class="container">

    <h1 class="">Contact </h1>
    <?php
    if ($errors || $missing) :
    ?>
    <p class="warning"> Va rugam sa completati corespunzator campurile indicate</p>
  <?php endif; ?>
    <div class="row ">


      <div class="col-md-6 bg-dark text-light p-4">
        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      </div>
      <div class="col-md-6">
        <form id="form"
          method="post"
          action="<?= $_SERVER['PHP_SELF']; ?>"
          enctype="multipart/form-data"
          name="EmailForm">
          <div class="form-group">
            <label class="form-control-label" for="serviceType">Descriere eveniment
              <?php if ($missing && in_array('serviceType', $missing)) : ?>
                <span>Va rugam sa selectati pachetul</span>
              <?php  endif; ?>
            </label>
            <select class="form-control" id="serviceType" name="serviceType">
              <option value="0">Nici un pachet selectat</option>
              <option value="1" <?php if ($serviceType == 1) {
                echo 'selected="selected"';
              } ?>>Pachet standard</option>
              <option value="2" <?php if ($serviceType == 2) {
                echo 'selected="selected"';
              } ?>>Pachet extra</option>
            </select>
            <label class="form-control-label" for="numarPersoane">Numar persoane
              <?php if ($missing && in_array('numberOfPeopleAttending', $missing)) : ?>
                <span>Va rugam sa specificati numarul de persoane</span>
              <?php  endif; ?>
            </label>
            <input class="form-control" type="text" name="numberOfPeopleAttending" id="numberOfPeopleAttending" placeholder="Numarul de persoane"
            <?php
            if ($errors || $missing) {
              echo 'value="' . htmlentities($numberOfPeopleAttending) . '"' ;
            }
             ?>
            >
          </div>

          <div class="form-group">
            <label class="form-control-label" for="eventDetail">Descriere eveniment
              <?php if ($missing && in_array('eventDetail', $missing)) : ?>
                <span>Va rugam sa detaliati</span>
              <?php  endif; ?>
            </label>
            <textarea class="form-control" name="eventDetail" id="eventDetail" rows="5" placeholder="Detalii despre eveniment: Numar persoane, servicii dorite, etc."><?php
              if ($errors || $missing) {
                echo htmlentities($eventDetail);
              }
              ?></textarea>
          </div>

          <div class="form-group">
            <label class="form-control-label" for="eventdetail">Numar de telefon
              <?php if ($missing && in_array('phoneNumber', $missing)) : ?>
                <span>Va rugam sa specificati un numar de telefon</span>
              <?php  endif; ?>
            </label>
            <input class="form-control" type="text" name="phoneNumber" placeholder="Exemplu: 07xx xxx xxx"
            <?php
            if ($errors || $missing) {
              echo 'value="' . htmlentities($phoneNumber) . '"' ;
            }
             ?>
            >
            <label class="form-control-label" for="eventdetail">Nume
              <?php if ($missing && in_array('name', $missing)) : ?>
                <span>Va rugam sa specificati o adresa de email</span>
              <?php  endif; ?>
            </label>
            <input class="form-control" type="text" name="name" placeholder="Exemplu: Popescu Marius"
            <?php
            if ($errors || $missing) {
              echo 'value="' . htmlentities($name) . '"' ;
            }
             ?>
            >
          </div>

          <div class="form-group">
            <button class="btn btn-dark float-right" type="submit" form="form" name="submit" id="submit" value="submit">Trimite</button>
          </div>

        </form>
      </div>

    </div>
    <!-- row -->
  </div>
  <!-- container -->
</div>
<!-- container fluid-->


</body>

</html>
