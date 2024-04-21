<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О Корпорации авиастроения</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style1.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        p {
            color: #666;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img class="logo" src="Pictures/logo.avif.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                        <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search"
                            name="query">
                        <button class="btn btn-outline-success" type="submit">Найти</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="container mt-5" style="margin-bottom: 334px;">
        <h1>О Корпорации </h1>
        <p>Наша корпорация авиастроения является ведущим разработчиком и производителем авиационной техники.</p>
        <p>С момента основания в 1990 году наша компания стремится к инновациям и высокому качеству продукции. Мы
            объединяем опыт и передовые технологии для того, чтобы обеспечить безопасность и надежность нашей
            авиационной техники.</p>
        <p>Наша миссия - создавать инновационные решения в авиастроении, которые улучшают мобильность, связь и
            безопасность в воздушном пространстве, способствуя прогрессу в глобальной авиационной индустрии.</p>
        <p>Мы гордимся нашими достижениями и стремимся к дальнейшему развитию, чтобы оставаться лидером в сфере
            авиационных технологий и обеспечивать наших клиентов лучшей продукцией и услугами.</p>
    </div>

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