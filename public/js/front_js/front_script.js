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
