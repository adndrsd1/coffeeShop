document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.nav-link').forEach(function(link) {
        link.addEventListener('click', function() {
            document.querySelectorAll('.nav-link').forEach(function(nav) {
                nav.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
});
