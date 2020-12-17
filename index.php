<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="Shortcut icon" href="images/foto.jpg">
    <link rel="stylesheet" href="style.css">
    <title>My Profile</title>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" class="navbar-brand">Ammar Star</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#ikonkecil">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse" id="ikonkecil">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="#tentang" class="nav-link">Tentang Saya</a> </li>
            <li class="nav-item"><a href="#galeri" class="nav-link">Galeri Foto</a> </li>
            <li class="nav-item"><a href="#keahlian" class="nav-link">Keahlian Program</a> </li>
            <li class="nav-item"><a href="#hubungi" class="nav-link">Hubungi Saya</a> </li>
          </ul>
        </div>
      </nav>

      <div class="jumbotron">
        <div class="header">
          <img src="images/foto.jpg" class="img-rounded" alt="">
          <h1>AMMAR STAR</h1>
          <p>Teacher | Web Developer</p>
        </div>
      </div>

      <div class="container" id="tentang">
        <h1>Tentang Saya</h1>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>

      <div class="galeri" id="galeri">
        <div class="jumbotron">
            <h1>Galeri Foto</h1>
            <hr>
            <div class="row">
              <div class="col-md-4">
                <img src="images/1.jpg" class="img-thumbnail" alt="">
              </div>
              <div class="col-md-4">
                <img src="images/2.jpg" class="img-thumbnail" alt="">
              </div>
              <div class="col-md-4">
                <img src="images/3.jpg" class="img-thumbnail" alt="">
              </div>
            </div>
        </div>
      </div>

      <div class="container-fluid" id="keahlian">
        <h1>Keahlian Program</h1>
        <hr>

        <div class="progress" style="height:50px">
          <div class="progress-bar" style="width:90%">
            HTML
          </div>
        </div>
        <br>
        <div class="progress" style="height:50px">
          <div class="progress-bar bg-success" style="width:85%">
            CSS
          </div>
        </div>
        <br>
        <div class="progress" style="height:50px">
          <div class="progress-bar bg-warning" style="width:87%">
            PHP
          </div>
        </div>
        <br>
        <div class="progress" style="height:50px">
          <div class="progress-bar bg-danger" style="width:90%">
            GITHUB
          </div>
        </div>

      </div>

      <div class="hubungi" id="hubungi">
        <div class="jumbotron" >
          <h1>Hubungi Saya</h1>
          <hr>
          <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" class="form-control" id="nama" name="" value="">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="" value="">
          </div>
          <div class="form-group">
            <label for="Kategori">Kategori</label>
            <select class="form-control" id="kategori" name="">
              <option value="Karyawan" class="form-control">Karyawan</option>
              <option value="Karyawan" class="form-control">Pegawai</option>
            </select>
          </div>
          <div class="form-group">
            <label for="pesan">Pesan</label>
            <textarea name="name" rows="8" cols="80" style="resize:none;" class="form-control" id="pesan"></textarea>
          </div>

          <br>
          <button type="button" class="btn btn-success" name="button">Simpan</button>
        </div>

      </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
