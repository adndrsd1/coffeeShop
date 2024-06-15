document.addEventListener('DOMContentLoaded', function () {
    const signinForm = document.getElementById('signinForm');
    const signupForm = document.getElementById('signupForm');

    if (signinForm) {
        signinForm.addEventListener('submit', function(event) {
            event.preventDefault(); 
            window.location.href = 'home.php'; // Arahkan ke halaman home setelah login
        });
    }

    if (signupForm) {
        signupForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form from submitting normally
            // Here, you can add your AJAX call to register the user
            window.location.href = 'signin.php';
        });
    }
});

// Scrollspy implementation
window.addEventListener('scroll', function() {
    let sections = document.querySelectorAll('section');
    let navLinks = document.querySelectorAll('.nav-link');
    
    sections.forEach(section => {
        let top = window.scrollY;
        let offset = section.offsetTop - 150;
        let height = section.offsetHeight;
        let id = section.getAttribute('id');

        if(top >= offset && top < offset + height) {
            navLinks.forEach(link => {
                link.classList.remove('active');
                document.querySelector('.nav-link[href*=' + id + ']').classList.add('active');
            });
        }
    });
});


/*document.addEventListener('DOMContentLoaded', function () {
    //transisi
    const links = document.querySelectorAll('a');
    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const href = this.getAttribute('href');
            const currentPage = document.querySelector('.page');
            currentPage.classList.add('page-hidden');
            setTimeout(function() {
                window.location.href = href;
            }, 500); // Mengarahkan ke halaman baru setelah 0.5 detik (sesuai dengan durasi transisi CSS)
        });
    });
});*/





