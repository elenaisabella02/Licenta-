<?php
  // Include database connection file
  include_once('config.php');
  if (isset($_POST['submit'])) {
    
    $username = $con->real_escape_string($_POST['username']);
    $password = $con->real_escape_string(md5($_POST['password']));
    $name     = $con->real_escape_string($_POST['name']);
    $role     = "elev";
    $query  = "INSERT INTO users (name,username,password,role) VALUES ('$name','$username','$password','$role')";
    $result = $con->query($query);
    if ($result==true) {
      header("Location:login.php");
      die();
    }else{
      $errorMsg  = "You are not Registred..Please Try again";
    }   
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
                          <li><a class="dropdown-item active" href="#"><i class="fa fa-user-tie fa-fw"></i>Log in</a></li>
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
<div class="card text-center" style="padding:20px; padding-top:5vh">
  <h3 class=" pt-5">Sign up</h3>
</div><br>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
      <div class="col-md-6">      
        <?php if (isset($errorMsg)) { ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $errorMsg; ?>
          </div>
        <?php } ?>
        <form action="" method="POST">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" required="">
          </div>
          <div class="form-group">  
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" placeholder="Enter Username" required="">
          </div>
          <div class="form-group">  
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password" required="">
          </div>
          <!-- <div class="form-group">  
            <label for="role">Role:</label>
            <select class="form-control" name="role" required="">
              <option value="">Select Role</option>
              <option value="elev">Elev</option>
              <option value="profesor">Profesor</option>
            </select>
          </div> -->
          <div class="form-group">
            <p>Already have account ?<a href="login.php"> Login</a></p>
            <input type="submit" name="submit" class="btn btn-primary">
          </div>
        </form>
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