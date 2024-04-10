<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SCHOOL SPORTS MANAGEMENT SYSTEM</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <style>
    body {
      background-color: #ffe6ff;
      font-family: Arial, sans-serif; /* Changed font to Arial */
    }

    .navbar-brand {
      font-size: 28px;
      font-weight: bold;
      color: #cc33ff;
    }

    .navbar-nav .nav-link {
      color: #ff66ff;
    }

    .dropdown-menu {
      background-color: #ff99ff;
    }

    .dropdown-item {
      color: #9900cc;
    }

    .dropdown-item:hover {
      background-color: #ff66ff;
    }

    .news {
      margin-bottom: 20px;
    }

    .news font {
      font-size: 24px;
      color: #cc33ff;
    }

    img {
      width: 100%;
      height: auto;
    }
  </style>

</head>

<body id="page-top">

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-folder"></i>
          <span>OTHER STUDENTS</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>PLAYERS</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="player.php">Login</a>
          <a class="dropdown-item" href="registeracc.php">Register</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>COACH</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="admin/coach.php">Login</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>GROUP MEMBERS</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">1. ABUBAKAR OMUSOTSI</a>
          <a class="dropdown-item" href="#">2. KEITH KIPNGENO</a>
          <a class="dropdown-item" href="#">3. KEVIN KAMAU</a>
          <a class="dropdown-item" href="#">4. NAOMI WANJIKU</a>
          <a class="dropdown-item" href="#">5. SALLY MUTOKO</a>
          <a class="dropdown-item" href="#">6. ELIJAH OUMA</a>
          <a class="dropdown-item" href="#">7. WILTORD MUTUA</a>
          <a class="dropdown-item" href="#">8. GIFT OHANGA</a>
        </div>
      </li>
    </ul>
    <!-- End of Sidebar -->

    <div id="content-wrapper">
      <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <div class="container">
          <a class="navbar-brand" href="#">SCHOOL SPORTS MANAGEMENT SYSTEM</a>
        </div>
      </nav>

      <div class="container">
        <div class="news">
          <marquee behavior="ALTERNATE"><font color="blue" size="5">WELCOME TO OUR SCHOOL SPORTS MANAGEMENT SYSTEM</font></marquee>
        </div>
        <div class="news">
          <marquee behavior="left"><font color="green" size="5">DEVELOPED BY COOP-VERSITY 2.2 GROUP 10 IT STUDENTS.SOFTWARE ENGINEERING</font></marquee>
        </div>
        <img src="images/abuu.jpg" alt="Image resize">
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>
