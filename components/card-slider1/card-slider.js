document.addEventListener('DOMContentLoaded', function () {
    const initSliders = () => {
        const components = document.querySelectorAll('.card-slider-wrapper');
        if (!components.length) return;

        components.forEach(component => {
            const slider = component.querySelector('.slider-inner');
            const cards = component.querySelectorAll('.game-card');
            const prevBtn = component.querySelector('.prev-arrow');
            const nextBtn = component.querySelector('.next-arrow');

            if (!slider || cards.length === 0) return;

            let currentPosition = 0;
            let cardWidth = cards[0].offsetWidth + parseInt(getComputedStyle(slider).gap || 0);
            let isDragging = false;
            let startPosX = 0;
            let currentTranslate = 0;

            function updateSlider() {
                slider.style.transform = `translateX(${currentPosition}px)`;
                prevBtn.disabled = currentPosition >= 0;
                nextBtn.disabled = currentPosition <= -(cardWidth * (cards.length - 1));
            }

            function handleResize() {
                cardWidth = cards[0].offsetWidth + parseInt(getComputedStyle(slider).gap || 0);
                updateSlider();
            }

            // Click handlers
            prevBtn.addEventListener('click', () => {
                currentPosition = Math.min(currentPosition + cardWidth, 0);
                updateSlider();
            });

            nextBtn.addEventListener('click', () => {
                currentPosition = Math.max(currentPosition - cardWidth, -(cardWidth * (cards.length - 1)));
                updateSlider();
            });

            // Touch/swipe support
            slider.addEventListener('touchstart', (e) => {
                isDragging = true;
                startPosX = e.touches[0].clientX;
                currentTranslate = currentPosition;
                slider.style.transition = 'none';
            });

            slider.addEventListener('touchmove', (e) => {
                if (!isDragging) return;
                const currentPosX = e.touches[0].clientX;
                const diffX = currentPosX - startPosX;
                currentPosition = currentTranslate + diffX;
                slider.style.transform = `translateX(${currentPosition}px)`;
            });

            slider.addEventListener('touchend', () => {
                if (!isDragging) return;
                isDragging = false;
                slider.style.transition = 'transform 0.5s ease';

                const cardIndex = Math.round(-currentPosition / cardWidth);
                currentPosition = -cardIndex * cardWidth;

                const maxPosition = -(cardWidth * (cards.length - 1));
                currentPosition = Math.min(0, Math.max(maxPosition, currentPosition));

                updateSlider();
            });

            // Initialize
            updateSlider();
            window.addEventListener('resize', handleResize);
        });
    };

    // Wait for everything to load
    window.addEventListener('load', initSliders);
});
