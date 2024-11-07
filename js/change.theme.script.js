function changeTheme() {
	const button = document.querySelector('.theme-btn')
	const iconImage = button
	const root = document.documentElement

	// Меняем изображение и цвета
	if (iconImage.src.includes('img/free-icon-half-moon-8098397.png')) {
		iconImage.src = 'img/free-icon-sun-606795.png' // Путь к изображению для ночной темы
		root.style.setProperty('--text-color', '#f1f1f1') // Инвертированный текст
		root.style.setProperty('--bg-color', '#121212') // Инвертированный фон
		root.style.setProperty('--color', '#232323') // Инвертированный цвет
		root.style.setProperty(
			'--gradient',
			'linear-gradient(45deg, rgba(72, 0, 255, 1) 0%, rgba(252, 69, 202, 1) 100%)'
		)
	} else {
		iconImage.src = 'img/free-icon-half-moon-8098397.png' // Путь к изображению для дневной темы
		root.style.setProperty('--text-color', '#1b1c21') // Текст для дневной темы
		root.style.setProperty('--color', '#ededed') // Фон для дневной темы
		root.style.setProperty('--bg-color', '#eaeaea') // Цвет для дневной темы
		root.style.setProperty(
			'--gradient',
			'linear-gradient(45deg,rgba(255, 106, 0, 1) 0%,rgba(238, 9, 121, 1) 50%,rgba(0, 154, 255, 1) 100%)'
		)
	}
}
