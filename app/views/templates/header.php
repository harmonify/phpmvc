<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Notice that the title use $data, because there is only one $data parameter send to this header.php -->
  <title><?= $data ?></title>
  <!-- Local Bootstrap CSS -->
  <link rel="stylesheet" href="<?= BASEURL ?>/css/bootstrap.min.css">
  <!-- Local Bootstrap Bundle JS -->
  <script defer src="<?= BASEURL ?>/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="<?= BASEURL ?>">Hello MVC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item px-3">
            <a class="nav-link" aria-current="page" href="<?= BASEURL ?>">Home</a>
          </li>
          <li class="nav-item dropdown px-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              About
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
              <li><a class="dropdown-item" href="<?= BASEURL?>/about">index</a></li>
              <li><a class="dropdown-item" href="<?= BASEURL?>/about/page">page</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item disabled" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="<?= BASEURL ?>/student">Student</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
