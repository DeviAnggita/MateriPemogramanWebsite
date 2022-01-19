<!DOCTYPE html>
<html>

<head>
  <title>HASNA EXPRESS</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-success" style="background-color: #1f1f1f;">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php?id=<?php echo $row['id'] ?>">
          <img src="image/logo_putih.png" alt="navbar-brand" width="150"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-3 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php" style="color: white; font-size: 15px;"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="order.php" style="color: white; font-size: 15px;"><b>Order</b></a>
            </li>
            <li class="nav-item dropdown">
              <a role="button" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-size: 15px;">
                <b>Information</b>
              </a>
              <ul class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
                <li><a class="dropdown-item" href="Packaging.php">Packaging Information</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a role="button" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-size: 15px;">
                <b>About Us</b>
              </a>
              <ul class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton3">
                <li><a class="dropdown-item" href="companyprofil.php">Company Profile</a></li>
              </ul>
            </li>
          </ul>

          <div id='form-input'>
            <form action="cekresi.php" method="get" class="d-flex justify-content-center">
              <input name="cari" id="cari" class="form-control me-2" type="search" placeholder="Cek Resi" aria-label="Search" required>
              <input name="id" id="id" class="kirim me-2" type="hidden" value="<?php echo $row['id'] ?>">
              <input value="Search" type="submit" role="button" class="btn btn-outline-dark border border-2 me-md-4" style="color :black; background-color: #fff;">
            </form>
          </div>
        </div>
      </div>
    </nav>
  <div class="container pt-md-50 pt-20 pb-60">
    <div class="row">
      <div class="col-md-15">
        <img src="image/Awal2.png" class="image" alt="" width="50%" style="display:block; margin:auto;">
      </div>
      <div class="wrap">
        <div class="container-5" style="height: 100%;overflow-x: hidden;">
          <div class="p-0 mb-0 bg-white text-dark" style="text-align: center;"><b style="font-size:xx-large; ">FEATURES<b></div>
          <div class="container-5">
            <div class="box d-flex justify-content-center bg-dark" style="height: 300px;">
              <div class="isi" style="position: relative; top: 60px; display: grid; grid-template-columns: 1fr 1fr 1fr 1fr 1fr; grid-gap: 50px;">
                <img src="image/pesawat.png" class="image" style="height: 180px;" alt="">
                <img src="image/pin.png" class="image" style="height: 180px;" alt="">
                <img src="image/365.png" class="image" style="height: 180px;" alt="">
                <img src="image/mobil.png" class="image" style="height: 180px;" alt="">
                <img src="image/24.png" class="image" style="height: 180px;" alt="">
              </div>
            </div>
          </div>

          <div class="box" style="height: 50px;">
          </div>

          <footer class="footer d-flex justify-content-center" style="background-color: #1f1f1f; height: 50px;">
      <div class="isi">
        <p class="foot_remark" style="color: white; font-size: small;  position: relative; top: 15px; font-family: Times New Roman; ">© 2021 PT. FIDEM Express All Rights Reserved</p>
      </div>
    </footer>

          <script src="./css/main.js">
            var myModal = document.getElementById('myModal')
            var myInput = document.getElementById('myInput')

            myModal.addEventListener('shown.bs.modal', function() {
              myInput.focus()
            })
          </script>
  </body>

</html>