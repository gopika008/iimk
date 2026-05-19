document.addEventListener('DOMContentLoaded', function () {

    /* =========================
       Footer year
    ========================= */
    const year = document.getElementById('year');
    if (year) {
        year.textContent = new Date().getFullYear();
    }


    /* =========================
       Desktop mega menu
    ========================= */
    const megaItems = document.querySelectorAll('.nav-item.mega');

    function closeAllMega(except) {
        megaItems.forEach(function (item) {
            if (item !== except) {
                item.classList.remove('open');

                const toggle = item.querySelector('.mega-toggle');
                if (toggle) {
                    toggle.setAttribute('aria-expanded', 'false');
                }
            }
        });
    }

    megaItems.forEach(function (item) {
        const btn = item.querySelector('.mega-toggle');

        if (!btn) return;

        btn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            const isOpen = item.classList.contains('open');

            closeAllMega(item);

            item.classList.toggle('open', !isOpen);
            btn.setAttribute('aria-expanded', String(!isOpen));
        });
    });

    document.addEventListener('click', function (e) {
        if (!e.target.closest('.nav-item.mega')) {
            closeAllMega();
        }
    });


    /* =========================
       Desktop sidebar menu
       IMPORTANT:
       Uses capture mode to prevent duplicate old handlers
    ========================= */
    document.addEventListener('click', function (e) {
        const button = e.target.closest('.side-toggle');

        if (!button) return;

        const sidebar = button.closest('.sidebar-nav-modern');
        const currentGroup = button.closest('.side-group-modern');

        if (!sidebar || !currentGroup) return;

        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();

        const willOpen = !currentGroup.classList.contains('open');

        sidebar.querySelectorAll('.side-group-modern').forEach(function (group) {
            group.classList.remove('open');

            const toggle = group.querySelector('.side-toggle');
            if (toggle) {
                toggle.classList.remove('active-parent');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });

        if (willOpen) {
            currentGroup.classList.add('open');
            button.classList.add('active-parent');
            button.setAttribute('aria-expanded', 'true');
        } else {
            currentGroup.classList.remove('open');
            button.classList.remove('active-parent');
            button.setAttribute('aria-expanded', 'false');
        }

    }, true);


    /* =========================
       Mobile inner page main toggle
    ========================= */
    const innerMobileToggle = document.querySelector('.inner-mobile-toggle');
    const innerMobilePanel = document.getElementById('innerMobilePanel');

    if (innerMobileToggle && innerMobilePanel) {
        innerMobileToggle.addEventListener('click', function () {
            const isOpen = innerMobilePanel.classList.contains('show');

            innerMobilePanel.classList.toggle('show', !isOpen);
            innerMobileToggle.classList.toggle('is-open', !isOpen);
            innerMobileToggle.setAttribute('aria-expanded', String(!isOpen));
        });
    }


    /* =========================
       Mobile inner submenu
    ========================= */
    document.addEventListener('click', function (e) {
        const button = e.target.closest('.inner-mobile-group-toggle');

        if (!button) return;

        const panel = button.closest('.inner-mobile-panel');
        const currentGroup = button.closest('.inner-mobile-group');

        if (!panel || !currentGroup) return;

        e.preventDefault();

        const willOpen = !currentGroup.classList.contains('open');

        panel.querySelectorAll('.inner-mobile-group').forEach(function (group) {
            group.classList.remove('open');

            const toggle = group.querySelector('.inner-mobile-group-toggle');
            if (toggle) {
                toggle.setAttribute('aria-expanded', 'false');
            }
        });

        if (willOpen) {
            currentGroup.classList.add('open');
            button.setAttribute('aria-expanded', 'true');
        } else {
            currentGroup.classList.remove('open');
            button.setAttribute('aria-expanded', 'false');
        }
    });


    /* =========================
       Escape key close
    ========================= */
    document.addEventListener('keydown', function (e) {
        if (e.key !== 'Escape') return;

        closeAllMega();

        document.querySelectorAll('.side-group-modern').forEach(function (group) {
            group.classList.remove('open');

            const toggle = group.querySelector('.side-toggle');
            if (toggle) {
                toggle.classList.remove('active-parent');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });

        document.querySelectorAll('.inner-mobile-panel.show').forEach(function (panel) {
            panel.classList.remove('show');
        });

        document.querySelectorAll('.inner-mobile-toggle.is-open').forEach(function (toggle) {
            toggle.classList.remove('is-open');
            toggle.setAttribute('aria-expanded', 'false');
        });

        document.querySelectorAll('.inner-mobile-group').forEach(function (group) {
            group.classList.remove('open');

            const toggle = group.querySelector('.inner-mobile-group-toggle');
            if (toggle) {
                toggle.setAttribute('aria-expanded', 'false');
            }
        });
    });

});