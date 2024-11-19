document.addEventListener('DOMContentLoaded', function () {
	let carouselElement = document.getElementById('carouselExampleIndicators')

	if (carouselElement) {
		let carousel = new bootstrap.Carousel(carouselElement, {
			interval: 3000, // Период между слайдами (в миллисекундах)
			ride: 'carousel', // Автоматическая прокрутка при загрузке
		})
	}
})
