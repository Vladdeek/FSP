<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Федерация спортивного программирования</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
</head>
<body>
    <header>
        <?php include("ui/header.php");?>
    </header>
    <section>
        <?php include("ui/slider.php");?>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="event-img-container col-6 d-flex justify-content-center">
                    <img class="event-img-container" src="img/i.webp" alt="">
                </div>
                <div class="event-content col-6">
                    <p class="event-name">Название мероприятия</p>
                    <p class="event-date text-uppercase">20 сентября 2024</p>
                    <div class="event-description">
                        <p class="event-paragraph">
                            "Название мероприятия" — уникальное соревнование, объединяющее программистов и спортсменов для создания инновационных решений в области спортивных технологий. Участники будут соревноваться в разработке алгоритмов для улучшения тренировочных процессов, автоматизации анализа данных и создания интерактивных спортивных приложений. Мероприятие предоставит платформу для обмена опытом и внедрения передовых идей в мир спорта и программирования.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php include("ui/footer.php");?>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/change.theme.script.js"></script>
    <script src="js/auto.slider.script.js"></script>
</body>
</html>