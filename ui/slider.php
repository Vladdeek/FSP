<div class="slider">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <?php for ($i = 0; $i < 8; $i++): ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" 
                        data-bs-slide-to="<?= $i ?>" 
                        class="<?= $i == $activeSlide ? 'active' : '' ?>" 
                        aria-current="<?= $i == $activeSlide ? 'true' : 'false' ?>" 
                        aria-label="Slide <?= $i + 1 ?>"></button>
            <?php endfor; ?>
        </div>
        <div class="carousel-inner">
            <?php 
            $slides = [
                'Федерация спортивного программирования МЛТ',
                'О федерации',
                'Структура',
                'Дисциплины',
                'Мероприятия',
                'Новости',
                'Галерея',
                'Контакты'
            ];
            foreach ($slides as $index => $slide): 
            ?>
                <div class="carousel-item <?= $index == $activeSlide ? 'active' : '' ?>">
                    <div class="slider-info d-flex">
                        <p class="name-slide d-flex align-items-center justify-content-center text-center"><?= $slide ?></p>
                        <img src="img/i.webp" class="img-slide d-block" alt="<?= $slide ?>">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
