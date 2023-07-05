<?php
session_start();
include_once('config.php');
if (isset($_SESSION['NAME'])) {
  $loggedInUser = $_SESSION['NAME'];
  $courseName = "Back-End Developer";

if (isset($_POST['submit'])) {
  $query = "INSERT INTO inscrieri (nume, curs) VALUES ('$loggedInUser', '$courseName')";
  $result = mysqli_query($con, $query);
  
  if($_SESSION['ROLE'] == "profesor"){
    if ($result) {
        echo "Enrollment successful!";
        header("Location:settings.php");
    } else {
        echo "Error: " . mysqli_error($con);
    }
  }
    else
    {
      if ($result) {
        echo "Enrollment successful!";
        header("Location:pay.php");
    } else {
        echo "Error: " . mysqli_error($con);
    }
    }
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Proiect de licenta</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/style.css'>
    <script src='assets/js/app.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><img style="width:5rem;" src="assets/images/logo.png"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu"> 
                    <li class="nav-item px-3">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item px-3">
                        <a class="nav-link" href="about-us.php">Despre noi</a>
                      </li>
                      <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Cursurile noastre
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="curs1.php">Front-End Developer</a></li>
                          <li><a class="dropdown-item active" href="#">Back-End Developer</a></li>
                          <li><a class="dropdown-item" href="curs3.php">C#</a></li>
                          <li><a class="dropdown-item" href="curs4.php">Java</a></li>
                          <li><a class="dropdown-item" href="curs5.php">Python</a></li>
                          <li><a class="dropdown-item" href="curs6.php">iOS Developer</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="toate-cursurile.php">Toate cursurile</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown px-3">
                        <a class="nav-link" href="our-team.php">Echipa noastra</a>
                      </li>
                      <li class="nav-item dropdown px-3">
                        <a class="nav-link" href="contact.php">Contact</a>
                      </li>
                      <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-user"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="login.php"><i class="fa fa-user-tie fa-fw"></i>Log in</a></li>
                          <li><a class="dropdown-item" href="account.php"><i class="fas fa-sliders-h fa-fw"></i> Account</a></li>
                          <li><a class="dropdown-item" href="settings.php"><i class="fas fa-cog fa-fw"></i> Settings</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a></li>
                        </ul>
                      </li>
               </ul>
              </div>
            </div>
          </nav>
    </header>

    <div class="container pt-5">
      <div class="separator pt-5">
        <div class="line"></div>
          <h2>Back-End Developer</h2>
        <div class="line"></div>
      </div>
        <div class="despre-curs py-5">
            <div class="card mb-3 py-5">
                <div class="row g-0">
                <div class="col-md-6">
                    <div class="card-body">
                    <h5 class="card-title">Back-End Developer</h5>
                    <p class="card-text">Cursul de Back-End Developer este unul mult mai tehnic. Spre deosebire de cel de Front-End Developer, acesta se remarcă prin capacitatea programatorului de a adăuga site-ului la care lucrează diferite funcționalități, printre cele mai numeroase fiind capacitatea de a căuta prin intermediul unei bare de căutare în pagină, sau posibilitatea de a-ți crea un cont și de a reține acel cont pentru viitoarele logări. Princpialele tehnologii folosite sunt PHP și MySQL, care de altfel se îmbină de minune cu HTML, CSS și JavaScript. Programatorii Back-End au nevoie de mai puțină creativitate și mai multă gândire analitică, pe care o folosesc pentru a implementa noi funcționalități unui site, vitale pentru funcționarea lui.</a-></p>
                    <p class="card-text"><small class="text-muted">Ești doar la un pas de a te înscrie.</small></p>
                    <form method="POST" action="">
                      <div class="center-button">
                        <button class="send_button" id="submit" name="submit">
                          <span>Înscrie-te</span>
                        </button>
                      </div>
                    </form>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="row pb-2">
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">C#</h5>
                              <p class="card-text">De la simplă algoritmică, până la realizarea diverselor jocuri în aplicație.</p>
                              <a href="curs3.php" class="btn btn-primary">Vezi mai multe</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Java</h5>
                              <p class="card-text">Un limbaj pentru toată lumea, simplu, cu întrebuințare în toate domeniile.</p>
                              <a href="curs4.php" class="btn btn-primary">Vezi mai multe</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row pt-2">
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Python</h5>
                              <p class="card-text">De la probleme logice, până la jocuri Snake sau MP3 downloaders.</p>
                              <a href="curs5.php" class="btn btn-primary">Vezi mai multe</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Swift</h5>
                              <p class="card-text">Dezvoltare de diverse aplicații pentru utilizatorii de platforme iOS.</p>
                              <a href="curs6.php" class="btn btn-primary">Vezi mai multe</a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                </div>
            </div>
        </div>
        <div class="testimoniale">
          <div class="separator py-5">
              <div class="line"></div>
              <h2>Testimoniale</h2>
              <div class="line"></div>
          </div>
          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="card card-testimonials">
                      <div class="card-body">
                        <h5 class="card-title">Eliza Oancea</h5>
                        <p class="card-text card-testimonials-margin">„Cursul de Back-End a fost o mare schimbare pentru mine. Tot ce am învățat alături de mentori mi se pare uimitor, deoarece acum simt că pot aduce o schimbare în viețile oamenilor care utilizează internetul.”</p>
                      </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <div class="card card-testimonials">
                      <div class="card-body">
                        <h5 class="card-title">Sabin Teodorovschi</h5>
                        <p class="card-text card-testimonials-margin">„Înainte să mă alătur acestui curs, am lucrat ca Front-End Developer, dar până atunci această tehnologie mi se părea extrem de grea, dar mentorii au reușit să îmi schimbe părerea, dar și cariera radical.”</p>
                      </div>
                    </div>
                </div>
                <div class="carousel-item">
                  <div class="card card-testimonials">
                      <div class="card-body">
                        <h5 class="card-title">Andra Pricop</h5>
                        <p class="card-text card-testimonials-margin">"Programul este extrem de bine structurat, de la teoria pe care o parcurgem împreună, până la exercițiile aplicative care sporesc în dificultate pe parcurs, lucru care îți menține curiozitatea învățării."</p>
                      </div>
                    </div>
                  
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
      </div>
      </div>
      <footer class="text-center text-lg-start bg-white text-muted pt-3">

<section class="footer">
  <div class="container text-center text-md-start mt-5">
    <div class="row mt-3">
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <h6 class="text-uppercase fw-bold mb-4">
          <i class="fas fa-gem me-3 text-secondary"></i>IT Academy
        </h6>
        <p>
          Suntem aici pentru tine, să te ajutăm și să te îndrumăm spre noua ta carieră în domeniul IT.<br> 
          Mentori implicați, cursuri actualizate, implicare și seriozitate în tot ceea ce facem pentru tine.
        </p>
      </div>

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase fw-bold mb-4">
          Cursuri
        </h6>
        <p>
          <a href="curs1.php" class="text-reset">Front-End</a>
        </p>
        <p>
          <a href="curs2.php" class="text-reset">Back-End</a>
        </p>
        <p>
          <a href="curs4.php" class="text-reset">Java</a>
        </p>
        <p>
          <a href="curs6.php" class="text-reset">Swift</a>
        </p>
      </div>

      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase fw-bold mb-4">
          Accesare rapidă
        </h6>
        <p>
          <a href="about-us.php" class="text-reset">Despre noi</a>
        </p>
        <p>
          <a href="our-team.php" class="text-reset">Echipa noastra</a>
        </p>
        <p>
          <a href="login.php" class ="text-reset">Loghează-te</a>
        </p>
        <p>
          <a href="signup.php" class="text-reset">Înregistrează-te</a>
        </p>
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
        <p><i class="fas fa-home me-3 text-secondary"></i> Iași, Bld. Carol I, Nr. 9</p>
        <p>
          <i class="fas fa-envelope me-3 text-secondary"></i>
          contact@itacademy.com
        </p>
        <p><i class="fas fa-phone me-3 text-secondary"></i> + 0743 489 325</p>
        <p><i class="fas fa-print me-3 text-secondary"></i> + 0742 904 822</p>
      </div>
    </div>
  </div>
</section>

<div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.025);">
  <div>
      <p>©IT Academy 2023</p>
    </div>
</div>
</footer>
</body>
</html>