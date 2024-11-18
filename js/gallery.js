function openPhoto() {
	// Получаем элементы модального окна и изображения
	const modal = document.getElementById('photoModal')
	const modalImage = document.getElementById('photoModalImage')
	const clickedImageSrc = event.currentTarget.querySelector('img').src

	// Устанавливаем изображение в модальное окно
	modalImage.src = clickedImageSrc

	// Показываем модальное окно
	modal.style.display = 'flex'
	setTimeout(() => {
		modal.style.opacity = '1'
	}, 1)
}

function closePhoto() {
	// Скрываем модальное окно
	const modal = document.getElementById('photoModal')
	modal.style.opacity = '0'
	setTimeout(() => {
		modal.style.display = 'none'
	}, 250)
}
