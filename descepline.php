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
         <?php
            $activeSlide = 3; // Указываем номер активного слайда (начиная с 0)
            include("ui/slider.php");
        ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="container">
                    <div class="col-12">
                        <p class="title text-center">Дисциплины</p>
                        <div class="row">
                            <div class="container">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="card-container text-start">
                                            <div class="card-title d-flex align-items-center">
                                                <img class="card-img-title" src="img/i.webp" alt="">
                                                <p class="about-info">Программирование алгоритмическое</p>
                                            </div>
                                            <p class="about-text">Решение группы задач путем написания наиболее оптимальных программных алгоритмов в условиях ограниченного времени</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="card-container text-start">
                                            <div class="card-title d-flex align-items-center">
                                                <img class="card-img-title" src="img/i.webp" alt="">
                                                <p class="about-info">Программирование систем информационной безопасности</p>
                                            </div>
                                            <p class="about-text">Комплекс соревнований в области кибербезопасности, включающий в себя поиск и устранение системных уязвимостей, отработку кибератак и защиты от них</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="card-container text-start">
                                            <div class="card-title d-flex align-items-center">
                                                <img class="card-img-title" src="img/i.webp" alt="">
                                                <p class="about-info">Продуктовое программирование (хакатон)</p>
                                            </div>
                                            <p class="about-text">Создание программных продуктов (приложений, сайтов, сервисов), отвечающих заданным требованиям и выполняющих определенные прикладные задачи</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="card-container text-start">
                                            <div class="card-title d-flex align-items-center">
                                                <img class="card-img-title" src="img/i.webp" alt="">
                                                <p class="about-info">Программирование робототехники</p>
                                            </div>
                                            <p class="about-text">Написание кода и поведенческих алгоритмов для автономных роботов, соревнующихся по определенным правилам</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="card-container text-start">
                                            <div class="card-title d-flex align-items-center">
                                                <img class="card-img-title" src="img/i.webp" alt="">
                                                <p class="about-info">Программирование БАС</p>
                                            </div>
                                            <p class="about-text">Написание кода для автономного полета дрона или роя дронов, а также выполнения им поставленных задач в условиях соревновательного полигона</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
</body>
</html>



