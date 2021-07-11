<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SugarcaneMC - Home</title>
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
  <?=include(dirname(__DIR__)."/assets/html/navbar.php");?>
  <div class="center-vh">
    <img src="assets/img/logo.svg" width="400" id="logo" alt="logo" /></br>
    <span id="title">SugarcaneMC</span></br>
    <span id="desc">
      A highly optimized <a href="https://airplane.gg/">Airplane</a> fork
      focusing on stability and performance.
    </span></br>
    <span id="comingsoon">Downloads coming soon!</span>
  </div>
  <footer>
    Made with <i style="color:red;" class="fas fa-heart"></i> by <a href="https://chrischromeyt.com">Chris Chrome</a> - &copy; 2021-<?= date("Y") ?>
    <a class="text-light" href="https://sugarcanemc.org/">SugarcaneMC</a>
  </footer>

</body>

</html>