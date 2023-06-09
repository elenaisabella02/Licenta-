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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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
    
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/index.html/carousel-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h3>Domeniul IT, mai aproape ca niciodată</h3>
                <p>Invață alături de mentorii noștri, care sunt gata să te ajute la orice pas</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/index.html/carousel-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h3>Lucrul în echipa, cheia succesului</h3>
                <p>Credem în lucrul în echipă și la colaborare pentru cel mai bun rezultat</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/index.html/carousel-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Un mediu de lucru plăcut, a doua ta casă</h5>
                <p>Venirea la job-ul de zi cu zi poate deveni o plăcere alături de noi</p>
                </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container">
        <div class="despre-noi">
            <div class="separator py-3">
                <div class="line"></div>
                <h2>Despre noi</h2>
                <div class="line"></div>
            </div>
            <div class="section row pt-5 about-uss" style="margin:0 auto">
                <div class="item col-lg-3 col-md-6 col-12">
                  <div class="icon" style="background-color: #5b72ee">
                    <svg class="vector" viewBox="0 0 512 512" width="100" fill="#fff">
                      <path d="M290.74 93.24l128.02 128.02-277.99 277.99-114.14 12.6C11.35 513.54-1.56 500.62.14 485.34l12.7-114.22 277.9-277.88zm207.2-19.06l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.76 18.75-49.16 0-67.91z" />
                    </svg>
                  </div>
                  <h3 class="title">Seriozitate</h3>
                  <p class="text">Punem pe primul loc încrederea celor care ne aleg pentru a-și începe drumul alături de noi.</p>
                </div>
              
                <div class="item col-lg-3 col-md-6 col-12">
                  <div class="icon" style="background-color: #38D167">
                    <svg class="vector" viewBox="0 0 512 512" width="100" fill="#fff">
                      <path d="M290.74 93.24l128.02 128.02-277.99 277.99-114.14 12.6C11.35 513.54-1.56 500.62.14 485.34l12.7-114.22 277.9-277.88zm207.2-19.06l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.76 18.75-49.16 0-67.91z" />
                    </svg>
                  </div>
                  <h3 class="title">Punctualitatea</h3>
                  <p class="text">Punctualitatea este punctul nostru forte, suntem mereu aici să vă ajuta cu ce aveți nevoie.</p>
                </div>
              
                <div class="item col-lg-3 col-md-6 col-12">
                  <div class="icon" style="background-color: #f48c06">
                    <svg class="vector" viewBox="0 0 512 512" width="100" fill="#fff">
                      <path d="M290.74 93.24l128.02 128.02-277.99 277.99-114.14 12.6C11.35 513.54-1.56 500.62.14 485.34l12.7-114.22 277.9-277.88zm207.2-19.06l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.76 18.75-49.16 0-67.91z" />
                    </svg>
                  </div>
                  <h3 class="title">Responsabilitate</h3>
                  <p class="text">Drumul vostru începe cu noi, și de aceea dorim să aveți parte de cele mai bune oportunități.</p>
                </div>
                
                <div class="item col-lg-3 col-md-6 col-12">
                    <div class="icon" style="background-color: #F9291C">
                      <svg class="vector" viewBox="0 0 512 512" width="100" fill="#fff">
                        <path d="M290.74 93.24l128.02 128.02-277.99 277.99-114.14 12.6C11.35 513.54-1.56 500.62.14 485.34l12.7-114.22 277.9-277.88zm207.2-19.06l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.76 18.75-49.16 0-67.91z" />
                      </svg>
                    </div>
                    <h3 class="title">Unitate</h3>
                    <p class="text">Suntem o comunitate bazată pe respectul resiproc, prietenie, și incluziune față de toată lumea.</p>
                </div>
              </div>
              <div class="center-button pt-5">
                <a href= "about-us.php">
                <button class="send_button">
                  <span>Vezi mai mult</span>
                </button>
              </a>
              </div>
        </div>

        <div class="cursuri py-5">
          <div class="separator py-3">
                <div class="line"></div>
                <h2>Cursurile noastre</h2>
                <div class="line"></div>
          </div>
          <div class="row pt-4">
                <div class="col-md-4 col-sm-6 pb-3">
                  <div class="card">
                    <img src="assets/images/index.html/front-end-developer.jpg" class="card-img-top courses-img" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Front-End</h5>
                      <p class="card-text">Realizarea unei interfețe a unui website nu va mai fi niciodată grea.</p>
                      <a href="curs1.php" class="btn btn-primary">Vezi mai mult</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 pb-3">
                  <div class="card">
                    <img src="assets/images/index.html/back-end-developer.jpg" class="card-img-top courses-img" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Back-End</h5>
                      <p class="card-text">Funcționalitatea proiectelor înseamnă complexitatea caracteristicilor.</p>
                      <a href="curs2.php" class="btn btn-primary">Vezi mai mult</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 pb-3">
                    <div class="card">
                      <img src="assets/images/index.html/C-Developer.jpg" class="card-img-top courses-img" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">C#</h5>
                        <p class="card-text">De la simplă algoritmică, până la realizare de jocuri în aplicație.</p>
                        <a href="curs3.php" class="btn btn-primary">Vezi mai mult</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 pb-3">
                    <div class="card">
                      <img src="assets/images/index.html/java-developer.jpg" class="card-img-top courses-img" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Java</h5>
                        <p class="card-text">Un limbaj pentru toată lumea, cu întrebuințare în toate domeniile.</p>
                        <a href="curs4.php" class="btn btn-primary">Vezi mai mult</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 pb-3">
                    <div class="card">
                      <img src="assets/images/index.html/python-developer.jpg" class="card-img-top courses-img" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Python</h5>
                        <p class="card-text">De la probleme logice, până la jocuri Snake sau MP3 downloaders.</p>
                        <a href="curs5.php" class="btn btn-primary">Vezi mai mult</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 pb-3">
                      <div class="card">
                        <img src="assets/images/index.html/iOS-Developer.jpg" class="card-img-top courses-img" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Swift</h5>
                          <p class="card-text">Dezvoltare de diverse aplicații pentru utilizatorii de iOS.</p>
                          <a href="curs6.php" class="btn btn-primary">Vezi mai mult</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="echipa-noastra pb-5">
            <div class="separator pt-3 pb-5">
                <div class="line"></div>
                <h2>Echipa noastra</h2>
                <div class="line"></div>
            </div>
            <div class="row">
                <div class="card col-md-4 col-12">
                  <img src="./assets/images/index.html/Mentor1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Braga Elena-Isabella</h5>
                    <p class="card-text">Fondator al IT Academy și primul profesor, cu o experiență de peste 10 ani în domeniul IT și al tutoratului.</p>
                  </div>
                </div>
                <div class="card col-md-4 col-12">
                  <img src="./assets/images/index.html/Mentor2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Dumitrescu Andrei</h5>
                    <p class="card-text">De profesie iOS Developer, Andrei este aici pentru a-și împărtăși cunoștințele cu cei care vor să învețe.</p>
                  </div>
                </div>
                <div class="card col-md-4 col-12">
                  <img src="./assets/images/index.html/Mentor3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Popescu Gabriela</h5>
                    <p class="card-text">Full-Stack Developer la una dintre cele mai bune firme de IT, răbdătoare și dornică să-i învețe pe cei la început de drum.</p>
                  </div>
                </div>
              </div>
              <div class="center-button pt-5">
                <a href="our-team.php">
                <button class="send_button">
                  <span>Vezi toți mentorii</span>
                </button>
              </a>
              </div>
        </div>
        <div class="profesori">
            <div class="separator pt-3 pb-5">
                <div class="line"></div>
                <h2>Devino profesor</h2>
                <div class="line"></div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="./assets/images/index.html/teacher.jpg" class="img-fluid rounded-start img-sus" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Vrei să te alături echipei noastre?</h5>
                      <p class="card-text">Devino parte dintr-o comunitate unită, care vrea sa contribuie la dezvoltarea generațiilor actuale și la formarea lor.Formarea noilor talente poate sta în mâinile tale, la fel ca împărtășirea pasiunii cu care noi ne facem treaba. Dacă simți că poți avea un impact în viața celor la început de drum, te invităm să te alături echipei noastre, care se mărește continuu.
                      </p>
                      <div class="center-button">
                        <a href="contact.php">
                        <button class="send_button">
                          <span>Devino profesor!</span>
                        </button>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="profesori">
            <div class="separator py-5">
                <div class="line"></div>
                <h2>Devino student</h2>
                <div class="line"></div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Vrei să devii student?</h5>
                      <p class="card-text">Dacă vrei să-ți începi drumul în domeniul IT, suntem locul potrivit pentru tine. Ne dorim ca elevii noștri să acumuleze suficiente cunoștințe în cadrul academiei, astfel încât la finalizarea ei, să se poată angaja la orice firmă își doresc. Punem mare accent pe seriozitate, implicare și străduință. Noi credem că niciodată nu e prea târziu să înveți ceva nou.</p>
                      <div class="center-button">
                        <a href="signup.php">
                        <button class="send_button">
                          <span>Devino student!</span>
                        </button>
                      </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <img src="./assets/images/index.html/student.jpg" class="img-fluid rounded-start img-jos" alt="...">
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
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="card card-testimonials">
                        <div class="card-body">
                          <h5 class="card-title">Toma Teodor-Full Stack Developer</h5>
                          <p class="card-text card-testimonials-margin">„Toți mentorii sunt oameni fantastici, serioși, onești și deschiși; atmosfera este genială; procesul de învățare este foarte eficient. De la oră la oră știu mai multe decât oricând, mentorii țin cursuri excelente, propun exerciții interesante și mențin cu atenție progresul grupului.”</p>
                        </div>
                      </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <div class="card card-testimonials">
                        <div class="card-body">
                          <h5 class="card-title">Ioana Dumitru-Python Developer</h5>
                          <p class="card-text card-testimonials-margin">„Învățarea orientată spre practică de la IT Academy mi-a oferit un mediu de susținere în care m-am simțit foarte bine. Am studiat codarea prin exemple din viața reală pe care le folosesc și acum în munca mea de zi cu zi.”</p>
                        </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card card-testimonials">
                        <div class="card-body">
                          <h5 class="card-title">Elena Anghel-iOS Developer</h5>
                          <p class="card-text card-testimonials-margin">"Trainerii ne oferă mult suport, anunțându-ne când știu de anunțuri de joburi pentru juniori. Cred că am reușit să mă angajez pentru că am început să aplic din timpul cursului la joburi chiar dacă nu îndeplineam toate condițiile încă."</p>
                        </div>
                      </div>
                    
                  </div>
                  <div class="carousel-item">
                    <div class="card card-testimonials">
                        <div class="card-body">
                          <h5 class="card-title">Ada Palade-Back-End Developer</h5>
                          <p class="card-text card-testimonials-margin">"Este vorba de sfaturi, de sprijin și de împărtășirea experiențelor profesionale. Lucrez mai mult pe partea operațională, dar atitudinea, bazele de date și sarcinile de configurare m-au ajutat enorm."</p>
                        </div>
                      </div>
                    
                  </div>
                  <div class="carousel-item">
                    <div class="card card-testimonials">
                        <div class="card-body">
                          <h5 class="card-title">Adina Dumitrașcu-C# Developer</h5>
                          <p class="card-text card-testimonials-margin">"Programa cursului este foarte vastă, nu numai despre Java. Este un loc bun să îți începi formarea. Cursul m-a ajutat să îmi creez o bază de cunoștințe pe care o voi dezvolta în continuare, în funcție de fișa postului sau de cerințele proiectului la care lucrez."</p>
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
        <div class="contact">
            <div class="separator py-5">
                <div class="line"></div>
                <h2>Contacteaza-ne</h2>
                <div class="line"></div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="./assets/images/index.html/Message-us.png" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <form>
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Numele tău</label>
                            <input type="name" class="form-control" id="inputName">
                        </div>
                        <div class="mb-3">
                          <label for="inputEmail1" class="form-label">Adresa de e-mail</label>
                          <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">Adresa ta de e-mail nu va fi folosită decât pentru a-ți răspune la mesajul trimis.</div>
                        </div>
                        <div class="mb-3">
                            <label for="inputMessage" class="form-label">Mesajul tău</label>
                            <textarea class="form-control" id="inputMessage" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Trimite</button>
                      </form>
                    </div>
                  </div>
                </div>
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