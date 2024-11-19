let darkTheme = false

// Функция для сохранения задач в localStorage

// Функция для загрузки задач из localStorage
function loadFromLocalStorage() {
	// Загружаем состояние темы
	const savedTheme = localStorage.getItem('darkTheme') === 'true' // Преобразуем строку в boolean
	if (savedTheme !== true) {
		// Если тема тёмная, применяем её
		darkTheme = true
	} else {
		darkTheme = false
	}
	changeTheme() // Вызываем toggleTheme для применения тёмной темы
}

function changeTheme() {
	const iconImage = document.querySelector('.theme-btn')
	const root = document.documentElement

	// Меняем изображение и цвета
	if (darkTheme === false) {
		iconImage.src = 'img/brightness.png' // Путь к изображению для ночной темы
		iconImage.style.filter = 'invert(1)'
		root.style.setProperty('--text-color', '#f1f1f1') // Инвертированный текст
		root.style.setProperty('--bg-color', '#121212') // Инвертированный фон
		root.style.setProperty('--color', '#232323') // Инвертированный цвет
		root.style.setProperty('--border-color', 'rgba(255, 255, 255, 0.1)')

		darkTheme = true
	} else if (darkTheme === true) {
		iconImage.src = 'img/night-mode.png' // Путь к изображению для дневной темы
		iconImage.style.filter = 'invert(0)'
		root.style.setProperty('--text-color', '#1b1c21') // Текст для дневной темы
		root.style.setProperty('--color', '#ededed') // Фон для дневной темы
		root.style.setProperty('--bg-color', '#eaeaea') // Цвет для дневной темы
		root.style.setProperty('--border-color', 'rgba(0, 0, 0, 0.1)')

		darkTheme = false
	}
	console.log(darkTheme)
	localStorage.setItem('darkTheme', darkTheme)
}
// Загружаем задачи при загрузке страницы
window.addEventListener('load', () => {
	loadFromLocalStorage()
})
