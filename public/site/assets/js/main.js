// ==========================================
// DBS SOFTWARE - PREMIUM INTERACTIVE FEATURES
// Created by: 10+ Years Experienced Developer
// ==========================================

(function () {
    'use strict';

    // === INITIALIZATION ===
    document.addEventListener('DOMContentLoaded', function () {
        initAOS();
        initNavbar();
        initThemeSwitcher();
        initPortfolioFilter();
        initStatsCounter();
        initBackToTop();
        initLanguageSwitcher();
        initSmoothScroll();
    });

    // === AOS ANIMATION INITIALIZATION ===
    function initAOS() {
        AOS.init({
            duration: 1000,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100,
            delay: 100
        });
    }

    // === NAVBAR FUNCTIONALITY ===
    function initNavbar() {
        const navbar = document.getElementById('mainNav');
        const navLinks = document.querySelectorAll('.nav-link');

        // Scroll effect
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Active link on scroll
        const sections = document.querySelectorAll('section[id]');

        function activateNavLink() {
            const scrollY = window.pageYOffset;

            sections.forEach(current => {
                const sectionHeight = current.offsetHeight;
                const sectionTop = current.offsetTop - 100;
                const sectionId = current.getAttribute('id');
                const navLink = document.querySelector('.nav-link[href*=' + sectionId + ']');

                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    navLink?.classList.add('active');
                } else {
                    navLink?.classList.remove('active');
                }
            });
        }

        window.addEventListener('scroll', activateNavLink);

        // Close mobile menu on link click
        navLinks.forEach(link => {
            link.addEventListener('click', function () {
                const navbarCollapse = document.getElementById('navbarNav');
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            });
        });
    }

    // === THEME SWITCHER FUNCTIONALITY ===
    function initThemeSwitcher() {
        const themeSwitcher = document.getElementById('themeSwitcher');
        const themeSwitcherToggle = document.getElementById('themeSwitcherToggle');
        const themeColors = document.querySelectorAll('.theme-color');

        // Toggle theme panel
        themeSwitcherToggle.addEventListener('click', function () {
            themeSwitcher.classList.toggle('active');
        });

        // Theme color selection
        themeColors.forEach(color => {
            color.addEventListener('click', function () {
                const theme = this.getAttribute('data-theme');

                // Remove active class from all
                themeColors.forEach(c => c.classList.remove('active'));

                // Add active class to selected
                this.classList.add('active');

                // Apply theme
                applyTheme(theme);

                // Save to localStorage
                localStorage.setItem('selectedTheme', theme);
            });
        });

        // Load saved theme
        const savedTheme = localStorage.getItem('selectedTheme');
        if (savedTheme) {
            applyTheme(savedTheme);
            document.querySelector(`[data-theme="${savedTheme}"]`)?.classList.add('active');
        }
    }

    function applyTheme(theme) {
        const root = document.documentElement;

        const themes = {
            gold: {
                primary: '#D4AF37',
                primaryDark: '#B8960F',
                primaryLight: '#F4D03F',
                primaryGlow: 'rgba(212, 175, 55, 0.6)'
            },
            red: {
                primary: '#DC143C',
                primaryDark: '#8B0000',
                primaryLight: '#FF6B6B',
                primaryGlow: 'rgba(220, 20, 60, 0.6)'
            },
            purple: {
                primary: '#9B59B6',
                primaryDark: '#6C3483',
                primaryLight: '#BB8FCE',
                primaryGlow: 'rgba(155, 89, 182, 0.6)'
            },
            green: {
                primary: '#27AE60',
                primaryDark: '#1E8449',
                primaryLight: '#58D68D',
                primaryGlow: 'rgba(39, 174, 96, 0.6)'
            }
        };

        if (themes[theme]) {
            root.style.setProperty('--primary-color', themes[theme].primary);
            root.style.setProperty('--primary-dark', themes[theme].primaryDark);
            root.style.setProperty('--primary-light', themes[theme].primaryLight);
            root.style.setProperty('--primary-glow', themes[theme].primaryGlow);
        }
    }

    // === PORTFOLIO FILTERING ===
    function initPortfolioFilter() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                const filterValue = this.getAttribute('data-filter');

                // Update active button
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                // Filter items
                portfolioItems.forEach(item => {
                    const category = item.getAttribute('data-category');

                    // Hide all items first
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.9)';

                    setTimeout(() => {
                        if (filterValue === 'all' || category === filterValue) {
                            item.classList.remove('hide');
                            item.style.display = 'block';

                            // Show with animation
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 50);
                        } else {
                            item.classList.add('hide');
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    }, 300);
                });
            });
        });

        // Add transition to portfolio items
        portfolioItems.forEach(item => {
            item.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
        });
    }

    // === STATISTICS COUNTER ANIMATION ===
    function initStatsCounter() {
        const statNumbers = document.querySelectorAll('.stat-number');
        let statsAnimated = false;

        function animateStats() {
            statNumbers.forEach(stat => {
                const target = parseInt(stat.getAttribute('data-target'));
                const duration = 2000; // 2 seconds
                const increment = target / (duration / 16); // 60fps
                let current = 0;

                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        stat.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        stat.textContent = target;
                    }
                };

                updateCounter();
            });
        }

        // Trigger animation when stats section is in view
        function checkStatsInView() {
            const statsCards = document.querySelectorAll('.stat-card');
            if (!statsCards.length) return;

            const firstStat = statsCards[0];
            const rect = firstStat.getBoundingClientRect();
            const isInView = rect.top < window.innerHeight && rect.bottom >= 0;

            if (isInView && !statsAnimated) {
                animateStats();
                statsAnimated = true;
            }
        }

        window.addEventListener('scroll', checkStatsInView);
        checkStatsInView(); // Check on load
    }

    // === BACK TO TOP BUTTON ===
    function initBackToTop() {
        const backToTop = document.getElementById('backToTop');

        if (!backToTop) return;

        window.addEventListener('scroll', function () {
            if (window.scrollY > 500) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        backToTop.addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // === LANGUAGE SWITCHER ===
    function initLanguageSwitcher() {
        const langItems = document.querySelectorAll('.dropdown-item[data-lang]');
        const currentLang = document.getElementById('currentLang');

        // Load saved language
        const savedLang = localStorage.getItem('selectedLang') || 'tr';
        if (currentLang) {
            currentLang.textContent = savedLang.toUpperCase();
        }

        langItems.forEach(item => {
            item.addEventListener('click', function (e) {
                e.preventDefault();
                const lang = this.getAttribute('data-lang');

                // Update display
                if (currentLang) {
                    currentLang.textContent = lang.toUpperCase();
                }

                // Save to localStorage
                localStorage.setItem('selectedLang', lang);

                // Here you would typically load translations
                // For now, we'll just show a notification
                showNotification(`Dil ${lang.toUpperCase()} olarak değiştirildi`, 'success');
            });
        });
    }

    // === SMOOTH SCROLL FOR ANCHOR LINKS ===
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');

                // Skip if it's just '#' or '#!'
                if (href === '#' || href === '#!') {
                    e.preventDefault();
                    return;
                }

                const target = document.querySelector(href);

                if (target) {
                    e.preventDefault();
                    const offsetTop = target.offsetTop - 80; // Account for fixed navbar

                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // === NOTIFICATION SYSTEM ===
    function showNotification(message, type = 'success') {
        // Remove any existing notifications
        const existingNotification = document.querySelector('.notification');
        if (existingNotification) {
            existingNotification.remove();
        }

        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.textContent = message;

        // Get theme colors
        const root = getComputedStyle(document.documentElement);
        const primaryColor = root.getPropertyValue('--primary-color').trim();
        const primaryDark = root.getPropertyValue('--primary-dark').trim();

        // Style the notification
        notification.style.cssText = `
            position: fixed;
            top: 100px;
            right: 40px;
            padding: 20px 30px;
            background: linear-gradient(135deg, ${primaryColor}, ${primaryDark});
            color: #000;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
            font-weight: 600;
            z-index: 10000;
            animation: slideInRight 0.5s ease, slideOutRight 0.5s ease 3.5s;
            max-width: 400px;
            font-family: var(--font-primary);
        `;

        document.body.appendChild(notification);

        // Remove notification after 4 seconds
        setTimeout(() => {
            notification.remove();
        }, 4000);
    }

    // Add notification animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideInRight {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(400px);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);

    // === FORM VALIDATION (if contact form exists) ===
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(this);

            // Here you would send the data to your backend
            // For now, we'll just show a success message
            showNotification('Mesajınız başarıyla gönderildi! En kısa sürede size dönüş yapacağız.', 'success');

            // Reset form
            this.reset();
        });
    }

    // === PARALLAX EFFECT FOR HERO ===
    window.addEventListener('scroll', function () {
        const scrolled = window.pageYOffset;
        const activeSlide = document.querySelector('.carousel-item.active .hero-content');

        if (activeSlide && scrolled < window.innerHeight) {
            activeSlide.style.transform = `translateY(${scrolled * 0.3}px)`;
            activeSlide.style.opacity = 1 - (scrolled / 800);
        }
    });

    // === CURSOR GLOW EFFECT (Desktop only) ===
    if (window.innerWidth > 992) {
        const cursor = document.createElement('div');
        cursor.className = 'cursor-glow';
        cursor.style.cssText = `
            position: fixed;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(212, 175, 55, 0.15) 0%, transparent 70%);
            pointer-events: none;
            z-index: 9998;
            transition: transform 0.15s ease;
        `;
        document.body.appendChild(cursor);

        document.addEventListener('mousemove', function (e) {
            cursor.style.left = (e.clientX - 100) + 'px';
            cursor.style.top = (e.clientY - 100) + 'px';
        });

        // Enhance glow on interactive elements
        const interactiveElements = document.querySelectorAll('a, button, .portfolio-card, .service-card, .blog-card');

        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', function () {
                cursor.style.transform = 'scale(1.5)';
                cursor.style.background = 'radial-gradient(circle, rgba(212, 175, 55, 0.25) 0%, transparent 70%)';
            });

            el.addEventListener('mouseleave', function () {
                cursor.style.transform = 'scale(1)';
                cursor.style.background = 'radial-gradient(circle, rgba(212, 175, 55, 0.15) 0%, transparent 70%)';
            });
        });
    }

    // === KEYBOARD NAVIGATION ===
    document.addEventListener('keydown', function (e) {
        // Close mobile menu with Escape key
        const navbarCollapse = document.getElementById('navbarNav');
        if (e.key === 'Escape' && navbarCollapse?.classList.contains('show')) {
            const bsCollapse = new bootstrap.Collapse(navbarCollapse);
            bsCollapse.hide();
        }

        // Close theme switcher with Escape
        const themeSwitcher = document.getElementById('themeSwitcher');
        if (e.key === 'Escape' && themeSwitcher?.classList.contains('active')) {
            themeSwitcher.classList.remove('active');
        }
    });

    // === PERFORMANCE OPTIMIZATION ===
    // Debounce scroll events
    let scrollTimeout;
    window.addEventListener('scroll', function () {
        if (!scrollTimeout) {
            scrollTimeout = setTimeout(function () {
                scrollTimeout = null;
                // Scroll-dependent code here
            }, 10);
        }
    }, { passive: true });

    // === PAGE LOAD ANIMATION ===
    window.addEventListener('load', function () {
        document.body.classList.add('loaded');

        // Trigger AOS refresh
        if (typeof AOS !== 'undefined') {
            AOS.refresh();
        }
    });

    // === ACCESSIBILITY ENHANCEMENTS ===
    // Focus visible for keyboard users
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Tab') {
            document.body.classList.add('keyboard-nav');
        }
    });

    document.addEventListener('mousedown', function () {
        document.body.classList.remove('keyboard-nav');
    });

    // Add focus styles for keyboard navigation
    const keyboardNavStyle = document.createElement('style');
    keyboardNavStyle.textContent = `
        body.keyboard-nav *:focus {
            outline: 2px solid var(--primary-color);
            outline-offset: 2px;
        }
    `;
    document.head.appendChild(keyboardNavStyle);

    // === LAZY LOADING FOR IMAGES ===
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        observer.unobserve(img);
                    }
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(function (img) {
            imageObserver.observe(img);
        });
    }

    // === CONSOLE LOG ===
    console.log('%c🌟 DBS Software - Premium Website 🌟',
        'color: #D4AF37; font-size: 20px; font-weight: bold; text-shadow: 0 0 10px rgba(212, 175, 55, 0.5);');
    console.log('%cWebsite loaded successfully! 10+ years of experience in every pixel.',
        'color: #ffffff; font-size: 14px;');

    // Export functions for potential external use
    window.DBSSoftware = {
        applyTheme: applyTheme,
        showNotification: showNotification
    };

})();