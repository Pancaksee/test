<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SugarcaneMC</title>
  <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <meta property="og:title" content="SugarcaneMC" />
  <meta property="og:description" content="SugarcaneMC - The high performance Minecraft server you've always wished for!" />
  <meta property="og:url" content="https://sugarcanemc.org/" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img src="/assets/img/logo.svg" width="40px">SugarcaneMC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto">
          <!-- <li class="nav-item">
            <a class="nav-link active" href="#">Home
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li> -->
        </ul>
        <span style="font-size: 25px; margin-right: 10px;">
          <a href="https://github.com/SugarcaneMC/"><i class="fab fa-github"></i></a>
          <a href="/discord"><i class="fab fa-discord"></i></a>
          <a href="https://ci.sugarcanemc.org"><i class="fas fa-server"></i></a>
        </span>
      </div>
    </div>
  </nav>
  <!-- Put body here -->
  <div class="center-vh">
    <!-- Centered area for stuff maybe -->
    <img src="assets/img/logo.svg" width="400px" id="logo" alt="logo" />
    <h2>SugarcaneMC</h2>
    <h3>
      A highly optimized <a href="https://airplane.gg/">Airplane</a> fork
      focusing on stability and performance.
    </h3>
    <!--<a href="#">-->
    <h4>Downloads coming soon!</h4>
  </div>
  <!-- End body -->
  <footer>
    &copy; 2021-<?= date("Y") ?>
    <a class="text-light" href="https://sugarcanemc.org/">SugarcaneMC</a>
  </footer>

</body>

</html>