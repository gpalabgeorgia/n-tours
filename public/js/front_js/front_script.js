/**
 * Функция для отображения текущей даты в хедере
 * Формат: Thursday, Mar 26, 2026
 */
function initHeaderDate() {
    const dateElement = document.getElementById('header-date');
    if (!dateElement) return;

    const options = {
        weekday: 'long',
        year: 'numeric',
        month: 'short',
        day: 'numeric'
    };

    const update = () => {
        const now = new Date();
        dateElement.textContent = now.toLocaleDateString('en-US', options);
    };

    update();
}

// Запускаем все фронтенд-скрипты после загрузки DOM
document.addEventListener('DOMContentLoaded', () => {
    initHeaderDate();
    // Сюда потом добавишь другие функции, например:
    // initMobileMenu();
    // initScrollTop();
});

// Slider on main page
document.addEventListener('DOMContentLoaded', () => {
    // Твоя функция даты (которую мы делали раньше)
    initHeaderDate();

    // Инициализация Swiper
    const swiper = new Swiper('.mySwiper', {
        // Настройки для автоплея (автоматическое переключение)
        autoplay: {
            delay: 5000, // 5 секунд
            disableOnInteraction: false,
        },
        loop: true, // Зацикливание

        // Навигация (стрелки)
        navigation: {
            nextEl: '.next-home1',
            prevEl: '.prev-home1',
        },

        // Если хочешь добавить точки (пагинацию), добавь сюда:
        // pagination: { el: '.swiper-pagination', clickable: true },

        speed: 1000, // Скорость анимации
    });
});
