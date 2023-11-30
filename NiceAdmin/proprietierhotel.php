<?php  include 'connexion.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - YouBooking Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">YouBooking</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

      
       
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $_SESSION['name']?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $_SESSION['name']?></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="action/signout.php">
                <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">
<?php    
    if( $_SESSION['role_id'] == 1  ){?>
           <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Statistiques  </span>
        </a>
      </li>
 
      <li class="nav-item ">
        <a class="nav-link collapsed" href="utlisateurs.php">
          <i class="bi bi-grid"></i>
          <span>Gestion des Utilisateurs </span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed" href="request.php">
          <i class="bi bi-grid"></i>
          <span>Requests </span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed" href="hotel.php">
          <i class="bi bi-grid"></i>
          <span>Hotels</span>
        </a>
      </li>
   <?php }else {?>
    <li class="nav-item ">
        <a class="nav-link collapsed" href="proprietierhotel.php">
          <i class="bi bi-grid"></i>
          <span>Hotel </span>
        </a>
      </li>
   <?php } ?>
   
   
    
    </ul>

  </aside>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Accueil</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
          <li class="breadcrumb-item active">Gestion des Utilisateurs </li>
        </ol>
      </nav>
    </div>
    <section class="section dashboard">
<!--Content  ------------------------------------------------>
  
  
    <table class="table align-middle mb-0 bg-white shadow " >
      <thead class="bg-light">
        <tr>
          <th>Hotel Name</th>
          <th>Contact Number</th>
          <th>Amenities</th>
        </tr>
      </thead>
      <tbody>
        
        <?php
          $id = $_SESSION['user_id'];
          $sql = "SELECT * FROM hotel WHERE id_user = '$id'";
          $result = mysqli_query($conn, $sql);   
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td>
            <div class="d-flex align-items-center">
              <img src="./assets/./img/AdobeStock_90114933_Preview.jpeg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
              <div class="ms-3">
                <p class="fw-bold mb-1"><?=$row['name']?></p>
              </div>
            </div>
          </td>
          <td>
            <p class="fw-bold mb-1"><?=$row['contact_number']?></p>
          </td>
          <td>
            <p class="fw-bold mb-1"><?=$row['amenities']?></p>
          </td>
          <td>
            <!-- Button trigger modal -->
            <td><a href="?action=delete&id=<?= $row['id']; ?>">delete </a> <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row['id']; ?>">Edit</a></td>
            </tr>

            <div class="modal fade" id="exampleModal<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">add contact</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post">
                                <div>
                                    <label for="inputFirstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="inputLastName" name="id" value="<?= $row['name']; ?>" required>
                                </div> 
                                <div class="mb-3">
                                    <label for="inputFirstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="inputFirstName" name="firstName" value="<?= $row['contact_number']; ?>"
                                        required>
                                </div>
                                    <label for="inputLastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="inputLastName" name="lastName" value="<?= $row['amenities']; ?>" required>
                                </div>
                              
                                <div class="mb-3">
                                    <label for="inputBirthDate" class="form-label">Birth Date</label>
                                    <input type="date" class="form-control" id="inputBirthDate" name="birthDate" value="<?= $row['pays']; ?>"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputClass" class="form-label">Class</label>
                                    <input type="text" class="form-control" id="inputClass" name="class" value="<?= $row['ville']; ?>" required>
                                </div>
                                <button type="submit" name="update" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </tr>   <?php }}?>
      </tbody>
    </table>

    </section>
  </main>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>YouBooking</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer>
  <!-- Vendor JS Files -->
  <div class="script">
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>  
  </div>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script>

// Initialization for ES Users

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>