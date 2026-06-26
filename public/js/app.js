document.addEventListener('DOMContentLoaded', function() {
    // Active nav link
    var path = window.location.pathname;
    var links = document.querySelectorAll('#main-nav a');

    links.forEach(function(link) {
        var href = link.getAttribute('href');
        if (path === href || (href !== '/' && path.startsWith(href))) {
            link.classList.add('active');
        }
    });

    // Stagger animation delays
    var items = document.querySelectorAll('.animate-in');
    items.forEach(function(el, i) {
        el.style.animationDelay = (i * 0.06) + 's';
    });
});
