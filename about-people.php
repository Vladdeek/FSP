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
                <div class="people-img-container col-6 d-flex justify-content-center">
                    <img class="people-img-container" src="img/IMG_9721.HEIC" alt="">
                </div>
                <div class="about-people-content col-6">
                    <p class="about-people-name">Владимир Владимеренко Владимирович</p>
                    <p class="about-people-position text-uppercase">руководитель</p>
                    <div class="about-people-description">
                        <p class="about-paragraph">
                            Владимир Владимирович Владимеренко — опытный руководитель и судья, занимающий ключевую позицию в области спортивного программирования. Он возглавляет региональное отделение Общероссийской физкультурно-спортивной организации "Федерация спортивного программирования" в Луганской Народной Республике. В своей работе он активно развивает направление спортивного программирования, обеспечивая высокие стандарты организации мероприятий и соревнований.
                        </p>
                        <p class="about-paragraph">
                            Кроме того, Владимир Владимирович имеет квалификацию судьи, что позволяет ему участвовать в международных и всероссийских спортивных событиях, где он контролирует соблюдение правил и норм. Его экспертиза в области спортивного программирования также активно применяется на образовательных и тренировочных платформах.
                        </p>
                        <p class="about-paragraph">
                            Владимир Владимеренко является сторонником развития молодежных инициатив и образования в области спортивного программирования. Он организует семинары и мастер-классы, помогая новому поколению специалистов освоить ключевые аспекты этой области и способствуя росту популярности спортивного программирования в регионе.
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