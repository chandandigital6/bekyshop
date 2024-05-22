document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.querySelector('.toggle-btn');
    const navMenu = document.querySelector('nav ul');
    const testimonialGroups = document.querySelectorAll('.testimonial-group');
    const indicators = document.querySelectorAll('.indicator');

    toggleBtn.addEventListener('click', function () {
        this.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    function showTestimonialGroup(index) {
        testimonialGroups.forEach((group, i) => {
            group.classList.toggle('active', i === index);
            indicators[i].classList.toggle('active', i === index);
        });

        const container = document.querySelector('.testimonial-slide');
        container.style.transform = `translateX(-${index * 100}%)`;
    }

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => showTestimonialGroup(index));
    });

    showTestimonialGroup(0);
});
