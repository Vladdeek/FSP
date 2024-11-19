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
            $activeSlide = 1; // Указываем номер активного слайда (начиная с 0)
            include("ui/slider.php");
        ?>
        <div class="container">
            <div class="bento">
                <div class="bento__container" variant-1>
                    <div class="bento__item text-center" style="--rows: span 2; --columns: 1 / -1;">
                        <p id="card2" class="bento-title">Официальный спорт</p>
                        <p class="bento-description">С 2022 года спортивное программирование официально признано видом спорта. Федерация получила статус Общероссийской, активно развивается и поддерживается государством, охватывая все регионы.</p>
                    </div>
                    <div id="card1" class="bento__item text-center" style="--rows: span 2;">
                        <p id="card1" class="bento-title">2 года в реестре</p>
                        <p id="card1" class="bento-description">Надежный статус и поддержка, <br>признано на государственном уровне.</p>
                    </div>
                    <div class="bento__item" style="--rows: span 2; --columns: span 2;">
                        <p class="bento-title">Общероссийская федерация</p>
                        <p class="bento-description">Статус подтвержден в 2023 году, признание на федеральном уровне.</p>
                    </div>
                    <div class="bento__item text-center" style="--columns: 1 / -1;">
                        <p id="card2" class="bento-title">Спортивное программирование</p>
                        <p class="bento-description">Ведем с 2021 года, основатели нового направления в спорте.</p>
                    </div>
                    <div class="bento__item" style="--columns: span 2;">
                        <p class="bento-title">Аккредитация в МЛТ</p>
                        <p class="bento-description">С 2024 года, шаг в международное развитие и поддержку. В 2024 году продолжается расширение влияния.</p>
                    </div>
                    <div id="card1" class="bento__item text-center">
                        <p id="card1" class="bento-title">85 регионов</p>
                        <p id="card1" class="bento-description">Федерация с общероссийским охватом, поддержка в каждом регионе.</p>
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
                    <div class="info-container">
                        <p class="about-date">28 декабря 2022</p>
                        <p class="about-description">Состоялось первое учредительное собрание Отделения о вступлении в Общероссийскую физкультурно-спортивную общественную организацию «Федерация спортивного программирования» и об избрании Руководителя отделения.</p>
                    </div>
                    <div class="info-container">
                        <p class="about-date">17 февраля 2023</p>
                        <p class="about-description">ФСП получила статус Общероссийской спортивной федерации</p>
                    </div>
                    <div class="info-container">
                        <p class="about-date">2 августа 2023</p>
                        <p class="about-description">Федерация включена в реестр социально ориентированных некоммерческих организаций (СОНКО)</p>
                    </div>
                    <div class="info-container">
                        <p class="about-date">28 сентября 2023</p>
                        <p class="about-description">Аккредитовано Региональное отделение Общероссийской физкультурно-спортивной общественной организации «Федерация спортивного программирования» по Луганской Народной Республике по виду спорта «спортивное программирование»</p>
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