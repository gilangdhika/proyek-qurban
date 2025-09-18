<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Quralba - Sistem Pengelolaan Qurban Alba</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/images/logos/sapigilang.png" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-papm6p6Q6l+6Q6l+6Q6l+6Q6l+6Q6l+6Q6l+6Q6l+6Q6l+6Q6l+6Q6l+6Q6l+6Q6l+6Q6l+6Q6l+6Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="frontend.html/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    @hasSection('hide_navbar')
        @if (!View::getSection('hide_navbar'))
            @include('layout.frontend.navbar')
        @endif
    @else
        @include('layout.frontend.navbar')
    @endif
    <!-- Masthead-->
    @yield('content')
    <!-- Footer-->
    @include('layout.frontend.footer')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="frontend.html/js/scripts.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const homeLink = document.getElementById('nav-home');
            const homeSection = document.getElementById('page-top');
            if (!homeLink || !homeSection) return; 
            function onScroll() {
                const scrollPos = window.scrollY || document.documentElement.scrollTop;
                const offset = homeSection.offsetTop;
                const height = homeSection.offsetHeight;
                if (scrollPos >= offset && scrollPos < offset + height) {
                    homeLink.classList.add('active');
                } else {
                    homeLink.classList.remove('active');
                }
            }
            window.addEventListener('scroll', onScroll);
            onScroll();
        });
    </script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
