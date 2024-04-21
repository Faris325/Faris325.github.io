<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style1.css">
    
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
              <a class="nav-link active" aria-current="page" href="model.php">Модельный ряд</a>
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
  <section class="mt-5">
    <div class="container text-center mt-5 ">
      <div class="row">
        <div class="col">
          <div class="card" style="width: 25rem; height: 20rem; ">
            <div class="card-body">
              <a class="link-underline-light" href="model.php">
                <h5 class="card-title">Акции</h5>
                <img class="img1" src="Pictures/act.jpg" alt="Акции"></img>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 25rem;height: 20rem; ">
            <div class="card-body">
              <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <a class="link-underline-light" href="model.php">
                    <h5 class="card-title">Медиа</h5>
                  </a>
                  <div class="carousel-item active">
                    <img src="Pictures/ket.jpg" class="d-block w-100" alt="..." style="height:286px;">
                  </div>
                  <div class="carousel-item">
                    <img src="Pictures/strotelsrvo.jpg" class="d-block w-100" alt="..." style="height:286px;">
                  </div>
                  <div class="carousel-item">
                    <img src="Pictures/Putin_jmot.jpg" class="d-block w-100" alt="..." style="height:286px;">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 25rem;height: 20rem;">
            <img src="..." class="card-img-top" alt="...">
            <div style="position: relative;" class="card-body">
              <a class="link-underline-light" href="model.php">
                <h5 class="card-title">Облигации</h5>
                <img class="img1" src="Pictures/obl.jpg" alt="Акции"></img>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center mt-5">
      <div class="row">
        <div class="col">
          <div class="card" style="width: 25rem;height: 20rem; ">
            <div class="card-body">
              <a class="link-underline-light" href="corporation.php">
                <h5 class="card-title">О корпорации</h5>
              </a>
              <p class="ots ml-2">
                Наша авиастроительная компания — это ведущий мировой производитель инновационных воздушных судов, с
                богатым наследием и стремлением к передовым технологиям. Мы специализируемся на разработке и
                производстве разнообразных моделей самолетов. </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 25rem;height: 20rem; ">
            <div class="card-body">
              <a class="link-underline-light" href="model.php">
                <h5 class="card-title">Новости</h5>
              </a>
              <p class="ots ml-2">
              <p class="news"><b>Революция в дизайне:</b> Новый концепт частного самолета, разработанный нашей
                компанией,
                представляет собой
                смелое сочетание элегантности и инновационных технологий, устанавливая новые стандарты в авиационном
                дизайне. </p>
              <p class="news"><b>Безопасность впереди:</b> Наша компания представила инновационную систему автопилота
                для
                частных самолетов, которая обеспечивает непревзойденный уровень безопасности и надежности в воздухе."
              </p>
              </p>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 25rem;height: 20rem; ">
            <a class="link-underline-light" href="model.php">
              <h5 class="card-title">Модельный ряд</h5>
            </a>
            <p class="ots ml-2">
              Наш ассортимент включает в себя разнообразные модели, от легкомоторных самолетов для частного
              использования до грузовых и специализированных воздушных судов. Каждая модель сочетает в себе надежность,
              производительность и комфорт, чтобы удовлетворить различные потребности наших клиентов.
            </p>
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
</body>

</html>