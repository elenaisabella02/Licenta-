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
                          <li><a class="dropdown-item" href="curs2.php">Back-End Developer</a></li>
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
                          <li><a class="dropdown-item active" href="#"><i class="fas fa-cog fa-fw"></i> Settings</a></li>
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
        <section class="pt-5 my-5">
            <div class="container">
                <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                    <div class="profile-tab-nav border-right">
                        <div class="p-4">
                            <div class="img-circle text-center mb-3">
                                <img src="assets/images/settings.html/profile-photo.png" alt="Image" class="shadow">
                            </div>
                            <h4 class="text-center">Numele tău</h4>
                        </div>
                        <div class="nav tab flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active tablinks" id="account-tab" data-toggle="pill" href="#!account" role="tab" aria-controls="account" aria-selected="true" onclick="openTab(event, 'account')">
                                <i class="fa fa-home text-center mr-1"></i> 
                                Cont
                            </a>
                            <a class="nav-link tablinks" id="password-tab" data-toggle="pill" href="#!password" role="tab" aria-controls="password" aria-selected="false" onclick="openTab(event, 'password')">
                                <i class="fa fa-key text-center mr-1"></i> 
                                Parola
                            </a>
                            <a class="nav-link tablinks" id="application-tab" data-toggle="pill" href="#!application" role="tab" aria-controls="application" aria-selected="false" onclick="openTab(event, 'application')">
                                <i class="fa fa-tv text-center mr-1"></i> 
                                Cursurile mele
                            </a>
                        </div>
                    </div>
                    <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                      <div class="tab-pane tabcontent active" id="account" role="tabpanel" aria-labelledby="account-tab">
                            <h3 class="mb-4">Contul meu</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                          <label>Nume</label>
                                          <input type="text" class="form-control" value="Numele tău">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                          <label>Prenume</label>
                                          <input type="text" class="form-control" value="Prenumele tău">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                          <label>Email</label>
                                          <input type="text" class="form-control" value="example@gmail.com">
                                    </div>
                                </div>
                                
                            </div>
                            <div>
                                <button class="btn btn-primary">Update</button>
                                <button class="btn btn-light">Cancel</button>
                            </div>
                      </div>
                        <div class="tab-pane tabcontent" id="password" role="tabpanel" aria-labelledby="password-tab">
                            <h3 class="mb-4">Parola</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                          <label>Parola veche</label>
                                          <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                          <label>Parola noua</label>
                                          <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                          <label>Confirma parola</label>
                                          <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary">Update</button>
                                <button class="btn btn-light">Cancel</button>
                            </div>
                        </div>

                        <div class="tab-pane tabcontent" id="application" role="tabpanel" aria-labelledby="application-tab">
                            <h3 class="mb-4">Cursurile active</h3>
                            <div class="row">
                              <div class="col-md-6">
                                <label>Ordoneaza</label>
                                <select name="ordonare" class="ordonare" id="ordonare">
                                  <option value="creascator-alfabetic">Alfabetic A-Z</option>
                                  <option value="descrescator-alfabetic">Alfabetic Z-A</option>
                                </select>
                              </div>
                              <div class="col-md-6">
                                <button class="btn btn-outline-dark btn-sm">Ordoneaza</button>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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