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
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="col-4">
                        <div id="card1" class="card-container text-center">
                            <p id="card1" class="about-info">12 лет</p>
                            <p id="card1" class="about-text">Проводим соревнования по спортивному программированию</p>
                        </div>
                        <div id="card2" class="card-container text-center">
                            <p class="about-info">Уровень гостеприимства</p>
                            <p class="about-text">К каждому мероприятию мы готовимся очень чщательно что бы оставить только положительные эмоции</p>
                        </div>
                    </div>
                    <div class="col-4">
                       <div id="card3" class="card-container text-center">
                            <p class="about-info">10 мероприятий</p>
                            <p class="about-text">Провели в наших регионах за 2024 год, в рамках развития молодежи</p>
                       </div>
                       <div id="card4" class="card-container text-center">
                            <p class="about-info">5 лет</p>
                            <p class="about-text">Спортивное программирование признано официальным видом спорта в странах РФ</p>
                       </div>
                    </div>
                    <div class="col-4">
                        <div id="card5" class="card-container text-center">
                            <p class="about-info">Будущее</p>
                            <p class="about-text">За IT будущее и такой новый вид спорта как спортивное программирование обеспечит развитие интереса и навыков новых поколений программистов, за нами будущее</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <p class="about-title">О федерации</p>
                <div class="col-12">
                    <div class="info-container">
                        <p class="about-date">19 октября 2021</p>
                        <p class="about-description">Дата основания Федерации спортивного программирования</p>
                    </div>
                    <div class="info-container">
                        <p class="about-date">12 апреля 2022</p>
                        <p class="about-description">Спортивное программирование было официально признано видом спорта</p>
                    </div>
                    <div class="info-container">
                        <p class="about-date">16 июня 2022</p>
                        <p class="about-description">На площадке ПМЭФ Минспорта и Минцифры подписали меморандум о сотрудничестве в целях развития и популяризации нового вида спорта «спортивное программирование»</p>
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