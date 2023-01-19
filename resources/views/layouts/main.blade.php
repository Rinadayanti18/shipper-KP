<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <title>Document</title>
</head>

<body>
  
{{-- ===== Header ===== --}}

  <div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
          Bootstrap
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              
                <a class="form-control me-2 nav-link dropdown-toggle" type="search" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" placeholder="Search" aria-label="Search">
                  Cari
                </a> 
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Cek Tarif</a></li>
                  <li><a class="dropdown-item" href="#">Lacak Paket</a></li>
                  <li><a class="dropdown-item" href="#">Cari Drop Point</a></li>
                </ul>
              
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Order
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Pick Up</a></li>
                <li><a class="dropdown-item" href="#">Drop Off</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Layanan</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tentang Kami
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Informasi</a></li>
                <li><a class="dropdown-item" href="#">Profil Perusahaan</a></li>
                <li><a class="dropdown-item" href="#">Berita & Acara</a></li>
                <li><a class="dropdown-item" href="#">Karir</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <form class="d-flex">
          
          <button class="btn btn-outline-success" type="submit">Masuk/Daftar</button>
        </form>
      </div>
    </nav>

  </div>

{{-- ===== End Header ===== --}}



{{-- ===== Footer ===== --}}

<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">Place sticky footer content here.</span>
  </div>
</footer>

{{-- ===== End Footer ===== --}}

</body>
</html>