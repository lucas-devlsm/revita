document.addEventListener('DOMContentLoaded', function() {
    var header = document.getElementById('header');
    var nav = document.getElementById('headerNav');
    var toggle = document.getElementById('navToggle');
    var overlay = document.getElementById('headerOverlay');
    var scrollBtn = document.getElementById('scrollToTop');

    function closeMenu() {
        if (toggle) toggle.classList.remove('active');
        if (nav) nav.classList.remove('active');
        if (overlay) overlay.classList.remove('active');
        document.body.style.overflow = '';
        if (toggle) toggle.setAttribute('aria-expanded', 'false');
    }

    function openMenu() {
        if (toggle) toggle.classList.add('active');
        if (nav) nav.classList.add('active');
        if (overlay) overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
        if (toggle) toggle.setAttribute('aria-expanded', 'true');
    }

    if (toggle && nav) {
        toggle.addEventListener('click', function() {
            if (nav.classList.contains('active')) {
                closeMenu();
            } else {
                openMenu();
            }
        });
        if (overlay) {
            overlay.addEventListener('click', closeMenu);
        }
        nav.querySelectorAll('.header__link:not(.header__link--dropdown)').forEach(function(link) {
            link.addEventListener('click', closeMenu);
        });
        nav.querySelectorAll('.header__sublink').forEach(function(link) {
            link.addEventListener('click', closeMenu);
        });
    }

    var servicosTrigger = document.getElementById('servicosTrigger');
    var servicosDropdown = servicosTrigger ? servicosTrigger.closest('.header__dropdown') : null;
    if (servicosTrigger && servicosDropdown) {
        servicosTrigger.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                servicosDropdown.classList.toggle('open');
                servicosDropdown.setAttribute('aria-expanded', servicosDropdown.classList.contains('open'));
            }
        });
    }

    if (header) {
        window.addEventListener('scroll', function() {
            header.classList.toggle('scrolled', window.pageYOffset > 20);
        });
        if (window.pageYOffset > 20) header.classList.add('scrolled');
    }

    if (scrollBtn) {
        window.addEventListener('scroll', function() {
            scrollBtn.classList.toggle('visible', window.pageYOffset > 400);
        });
        scrollBtn.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
});
