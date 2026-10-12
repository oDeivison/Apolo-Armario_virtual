// Menu hambúrguer compartilhado (home, closet, criar e perfil)
(function () {
    var nav = document.querySelector('nav');
    var toggle = document.getElementById('menu-toggle');
    var menu = document.getElementById('menu');
    if (!nav || !toggle || !menu) return;

    var MOBILE_MAX = 768; // mesmo valor do @media em style/menu.css
    var drop = menu.querySelector('.dropCloset');
    var dropItem = drop ? drop.parentElement : null;

    function isMobile() {
        return window.innerWidth <= MOBILE_MAX;
    }

    function setOpen(open) {
        menu.classList.toggle('show', open);
        toggle.classList.toggle('open', open);
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        toggle.setAttribute('aria-label', open ? 'Fechar menu' : 'Abrir menu');
        if (!open && dropItem) dropItem.classList.remove('active');
    }

    toggle.addEventListener('click', function () {
        setOpen(!menu.classList.contains('show'));
    });

    // No celular, tocar em "Closet" abre/fecha o submenu em vez de seguir o link "#"
    if (dropItem) {
        var closetLink = dropItem.querySelector('a');
        closetLink.addEventListener('click', function (e) {
            if (isMobile()) {
                e.preventDefault();
                dropItem.classList.toggle('active');
            }
        });
    }

    // Tocar fora do menu fecha tudo
    document.addEventListener('click', function (e) {
        if (isMobile() && !nav.contains(e.target)) setOpen(false);
    });

    // Voltou para tela grande: limpa o estado do menu mobile
    window.addEventListener('resize', function () {
        if (!isMobile()) setOpen(false);
    });
})();
