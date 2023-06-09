          <?php
          include_once('config.php');
          session_start();
          $userID = $_SESSION['ID']; 
          $query = "SELECT role FROM users WHERE id = '$userID'";
          $result = mysqli_query($con, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $role = $row['role'];
    

    $_SESSION['role'] = $role;
    } else {
    // Handle any database errors
    echo "Error retrieving user role.";
}
                // Array of courses
                $courses = [
                    [
                        'title' => 'Front-End',
                        'image' => 'assets/images/index.html/front-end-developer.jpg',
                        'description' => 'Realizarea unei interfețe a unui website nu va mai fi niciodată grea.',
                        'link' => 'curs1.php'
                    ],
                    [
                        'title' => 'Back-End',
                        'image' => 'assets/images/index.html/back-end-developer.jpg',
                        'description' => 'Funcționalitatea proiectelor înseamnă complexitatea caracteristicilor.',
                        'link' => 'curs2.php'
                    ],
                    [
                      'title' => 'C#',
                      'image' => 'assets/images/index.html/C-Developer.jpg',
                      'description' => 'De la simplă algoritmică, până la realizare de jocuri în aplicație.',
                      'link' => 'curs3.php'
                    ],
                    [
                      'title' => 'Java',
                      'image' => 'assets/images/index.html/java-developer.jpg',
                      'description' => 'Un limbaj pentru toată lumea, cu întrebuințare în toate domeniile.',
                      'link' => 'curs4.php'
                    ],
                    [
                      'title' => 'Python',
                      'image' => 'assets/images/index.html/python-developer.jpg',
                      'description' => 'De la probleme logice, până la jocuri Snake sau MP3 downloaders.',
                      'link' => 'curs5.php'
                    ],
                    [
                      'title' => 'Swift',
                      'image' => 'assets/images/index.html/iOS-Developer.jpg',
                      'description' => 'Dezvoltare de diverse aplicații pentru utilizatorii de iOS.',
                      'link' => 'curs6.php'
                    ]
                ];
                $existingCourses = [];
                $result = $con->query("SELECT title FROM toate_cursurile");
                if ($result !== false && $result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    $existingCourses[] = $row['title'];
                  }
                }
                foreach ($courses as $course) {
                  $title = $con->real_escape_string($course['title']);

        // Check if the course already exists in the database
        if (in_array($title, $existingCourses)) {
            continue; // Skip inserting the course
        }
                  $image = $con->real_escape_string($course['image']);
                  $description = $con->real_escape_string($course['description']);
                  $link = $con->real_escape_string($course['link']);
              
                  $sql = "INSERT INTO toate_cursurile (title, image, description, link) VALUES ('$title', '$image', '$description', '$link')";
              
                  if ($con->query($sql) === false) {
                      echo "Error inserting course: " . $con->error;
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                          <li><a class="dropdown-item active" href="#">Toate cursurile</a></li>
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
        <h2>Cursurile noastre</h2>
        <div class="line"></div>
      </div>
        <div class="toate-cursurile py-5">
          <div class="row pt-4">

              <?php
                $cursuri = $con->query("SELECT * FROM toate_cursurile");

                while ($data = $cursuri->fetch_assoc()) {
                    ?>
                    <div class="col-md-4 col-sm-6 pb-3">
                        <div class="card">
                            <img src="<?php echo $data['image']; ?>" class="card-img-top courses-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $data['title']; ?></h5>
                                <p class="card-text"><?php echo $data['description']; ?></p>
                                <div class="row">
                                  <div class="col-6">
                                <a href="<?php echo $data['link']; ?>" class="btn btn-primary">Vezi mai mult</a>
                </div>
                <div class="col-6">
                                <form method="POST" action="delete-course.php">
                    <input type="hidden" name="course_id" value="<?php echo $data['id']; ?>">
                    <?php
                if (isset($_SESSION['role']) && $_SESSION['role'] === 'profesor') { 
                  ?>
                    <button type="submit" class="btn btn-danger" id="delete-course-btn">Delete</button>
                </form>
                <?php
                }              
                ?>
                </div>
                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }?>
                <?php
                if (isset($_SESSION['role']) && $_SESSION['role'] === 'profesor') { 
                  ?>
                  <button class="btn btn-success" id="add-course-btn"><a style="color:white;">Add course</a></button>
                <?php
                }              
                ?>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Handle the "Add Course" button click event
    $('#add-course-btn').click(function(e) {
      e.preventDefault();

      // Prompt the user to enter the course details
      var title = prompt('Enter the course title:');
      var image = prompt('Enter the course image URL:');
      var description = prompt('Enter the course description:');
      var link = prompt('Enter the course link:');

      $.ajax({
        url: 'add-course.php',
        method: 'POST',
        dataType: 'json',
        data: {
          title: title,
          image: image,
          description: description,
          link: link
        },
        success: function(response) {
          if (response.status === 'success') {
            // Course added successfully, update the UI
            var newCourse = response.courseData;
            var courseId = response.courseId;

            var courseHtml = `
              <div class="col-md-4 col-sm-6 pb-3">
                <div class="card">
                  <img src="${newCourse.image}" class="card-img-top courses-img" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">${newCourse.title}</h5>
                    <p class="card-text">${newCourse.description}</p>
                    <a href="${newCourse.link}" class="btn btn-primary">Vezi mai mult</a>
                    <button type="submit" class="btn btn-danger" id="delete-course-btn">Delete</button>
                  </div>
                </div>
              </div>
            `;

            // Insert the new course before the "Add Course" button
            $(courseHtml).insertBefore('#add-course-btn');
            alert('Course added successfully!');
          } else {
            // Error adding course
            alert('Failed to add course: ' + response.message);
          }
        },
        error: function() {
          alert('An error occurred while adding the course.');
        }
      });
    });
  });
</script>

</html>