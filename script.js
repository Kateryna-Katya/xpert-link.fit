/**
 * Xpert-Link.fit | Official Premium Script 2026
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Core: Icons & Smooth Scroll
    if (typeof lucide !== 'undefined') lucide.createIcons();
    const lenis = new Lenis();
    function raf(time) { lenis.raf(time); requestAnimationFrame(raf); }
    requestAnimationFrame(raf);

    // 2. Mobile Menu Logic
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav');
    const navLinks = document.querySelectorAll('.nav__link');

    burger?.addEventListener('click', () => {
        const isActive = nav.classList.toggle('nav--active');
        burger.classList.toggle('burger--active');
        
        // Блокируем скролл при открытом меню
        document.body.style.overflow = isActive ? 'hidden' : '';

        // Анимируем ссылки внутри меню с разной задержкой
        if(isActive) {
            gsap.to(navLinks, {
                opacity: 1,
                y: 0,
                stagger: 0.1,
                duration: 0.5,
                delay: 0.4,
                ease: "power2.out"
            });
        } else {
            gsap.set(navLinks, { opacity: 0, y: 20 });
        }
    });

    // Закрытие меню при клике на ссылку
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            nav.classList.remove('nav--active');
            burger.classList.remove('burger--active');
            document.body.style.overflow = '';
        });
    });

    // 3. Deep Reveal Animation (Глубинная подгрузка)
    // Добавляем класс reveal-item всем нужным элементам программно для чистоты HTML
    const revealTargets = '.course-card, .benefit-item, .method__item, .section-title, .hero__badge';
    document.querySelectorAll(revealTargets).forEach(el => el.classList.add('reveal-item'));

    gsap.to(".reveal-item", {
        scrollTrigger: {
            trigger: "body",
            start: "top 90%",
            toggleActions: "play none none none"
        }
    });

    // Используем Batch для обработки групп элементов
    ScrollTrigger.batch(".reveal-item", {
        onEnter: batch => gsap.to(batch, {
            opacity: 1,
            clipPath: "inset(0 0 0% 0)",
            y: 0,
            scale: 1,
            stagger: 0.15,
            duration: 1.2,
            ease: "expo.out",
            overwrite: true
        }),
        start: "top 85%"
    });

    // 4. Hero Visual (SVG Canvas)
    const initHeroVisual = () => {
        const container = document.getElementById('hero-visual');
        if(!container) return;
        container.innerHTML = `<svg viewBox="0 0 500 500"><g id="code-dots"></g></svg>`;
        const g = document.getElementById('code-dots');
        for (let i = 0; i < 25; i++) {
            const circle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
            circle.setAttribute("cx", Math.random() * 500);
            circle.setAttribute("cy", Math.random() * 500);
            circle.setAttribute("r", Math.random() * 2 + 1);
            circle.setAttribute("fill", "#2563eb");
            circle.setAttribute("opacity", "0.2");
            g.appendChild(circle);
            gsap.to(circle, { 
                x: "random(-60, 60)", 
                y: "random(-60, 60)", 
                duration: "random(4, 8)", 
                repeat: -1, 
                yoyo: true, 
                ease: "sine.inOut" 
            });
        }
    };
    initHeroVisual();

    // 5. Form Handling & Captcha
    const setupForm = () => {
        const label = document.getElementById('captcha-label');
        if(!label) return;
        const n1 = Math.floor(Math.random() * 10), n2 = Math.floor(Math.random() * 5);
        label.innerText = `Подтвердите: ${n1} + ${n2} = ?`;

        document.getElementById('contact-form')?.addEventListener('submit', function(e) {
            e.preventDefault();
            const ans = document.getElementById('captcha-input').value;
            if(parseInt(ans) !== (n1+n2)) return alert('Капча неверна');
            
            const btn = this.querySelector('button');
            btn.innerHTML = '<span>Отправка...</span>';
            setTimeout(() => {
                this.reset();
                document.getElementById('form-success').style.display = 'block';
                btn.innerHTML = '<span>Отправлено!</span>';
            }, 1500);
        });
    };
    setupForm();

    // 6. Header Scroll Effect
    window.addEventListener('scroll', () => {
        document.querySelector('.header').classList.toggle('header--scrolled', window.scrollY > 50);
    });

    // 7. Cookie Popup logic
    const cp = document.getElementById('cookie-popup');
    if(cp && !localStorage.getItem('cookie-ok')) {
        setTimeout(() => cp.classList.add('cookie-popup--active'), 3000);
    }
    document.getElementById('cookie-accept')?.addEventListener('click', () => {
        localStorage.setItem('cookie-ok', true);
        cp.classList.remove('cookie-popup--active');
    });

    // 8. Reviews Swiper
    if(typeof Swiper !== 'undefined') {
        new Swiper('.reviews-slider', {
            slidesPerView: 1, spaceBetween: 30, loop: true,
            autoplay: { delay: 4000 },
            pagination: { el: '.swiper-pagination', clickable: true },
            breakpoints: { 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
        });
    }
});