<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style1.css">
  <link rel="stylesheet" href="style/style2.css">
  </link>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img class="logo" src="Pictures/logo.avif.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="model.php">модельный ряд</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="corporation.php">О корпорации</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Инвесторам и ационерам
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Акции</a></li>
                <li><a class="dropdown-item" href="#">Облигации</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Собрание ационеров</a></li>
              </ul>
            </li>
          </ul>
          <a href="registr.php"><button type="button" class="btn btn-primary">Приоберсти</button></a>
          <form class="d-flex" role="search" action="search.php" method="get">
            <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search" name="query">
            <button class="btn btn-outline-success" type="submit">Найти</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <section>
    <div class="container text-center">
      <p>Турбиновинтовые самолеты</p>
      <div class="row row-cols-4">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="Pictures/sam1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">King Air</h5>
              <p class="card-text">Дальность полета:3200 км.<br>
                Высота салона:1.46 м.<br>
                Количество мест:6<br>
              </p>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="Pictures/sam2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pilatus PC-12</h5>
              <p class="card-text">Дальность полета:2800 км.<br>
                Высота салона:1.46 м.<br>
                Количество мест:8<br>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="Pictures/sam3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cessna Caravan</h5>
              <p class="card-text">Дальность полета:2200 км.<br>
                Высота салона:1.37 м.<br>
                Количество мест:13<br>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="Pictures/sam4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Piaggio Avanti P.180</h5>
              <p class="card-text">Дальность полета:2592 км.<br>
                Высота салона:1,7 м.<br>
                Количество мест:6</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <p>Сверхлегкие самолеты</p>
      <div class="row row-cols-4">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="Pictures/sam5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cessna Citation M2</h5>
              <p class="card-text">Дальность полета:2871 км.<br>
                Высота салона:1.45 м.<br>
                Количество мест:4-5</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="Pictures/sam6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Honda HA-420 HondaJet</h5>
              <p class="card-text">Дальность полета:2037 км.
                Высота салона:1.47 м.<br>
                Количество мест:4-5<br>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="Pictures/sam11.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Eclipse 500</h5>
              <p class="card-text">Дальность полета:2084 км.<br>
                Высота салона:1.27 м.<br>
                Количество мест:
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="Pictures/sam12.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Embraer Phenom 100</h5>
              <p class="card-text">Дальность полета:2148 км.<br>
                Высота салона:1.50 м.<br>
                Количество мест:
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <p>Российские самолеты</p>
      <div class="row row-cols-4">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="Pictures/sam7.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Як-42</h5>
              <p class="card-text">Дальность полета:3700 км.<br>
                Высота салона:2.08 м.<br>
                Количество мест:25-40
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="Pictures/sam8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ту-154</h5>
              <p class="card-text">Дальность полета:5500 км.<br>
                Высота салона:2.02 м.<br>
                Количество мест:</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="Pictures/sam9.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ту-134</h5>
              <p class="card-text">Дальность полета:3500 км.<br>
                Высота салона:1.96 м.<br>
                Количество мест:</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="Pictures/sam10.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Як-40</h5>
              <p class="card-text">Дальность полета:1300 км.<br>
                Высота салона:1.85 м.<br>
                Количество мест:15
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div>
      <ul class="foot">
        <li>Правила использования материалов на сайте и ограничение ответственности</li>
        <li>Рассылки</li>
        <li>Карта сайта</li>
        <li>Контакты</li>
      </ul>
    </div>
  </footer>