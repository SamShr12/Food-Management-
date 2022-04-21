<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Welcome
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="{{asset('admin/css/material-dashboard.css')}}" rel="stylesheet" />
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<main class="l-main">
    <!--===== HOME =====-->
    <section class="home" id="home" style="background-color: #a78e9f;">
        <div class="home__container bd-grid">
            <div class="home__img">
                <div id="scene">
                    <div data-depth="0.5">
                        <img src="assets/img/img1.png" alt="" data-speed="-2" class="move">
                    </div>
                    <div data-depth="0.5">
                        <img src="assets/img/img2.png" alt="" data-speed="2" class="move">
                    </div>
                    <div data-depth="0.5">
                        <img src="assets/img/img3.png" alt="" data-speed="2" class="move">
                    </div>
                    <div data-depth="0.5">
                        <img src="assets/img/img4.png" alt="" data-speed="-2" class="move">
                    </div>
                    <div data-depth="0.5">
                        <img src="assets/img/img5.png" alt="" data-speed="-2" class="move">
                    </div>
                    <div data-depth="0.5">
                        <img src="assets/img/img6.png" alt="" data-speed="2" class="move">
                    </div>
                    
               
                </div>
            </div>

            <div class="home__data">
                <h2 style="font-weight: 600;">Food<br> Management System</h2>
                <p class="home__description">Discover the best food.</p>
                <a href="/login" class="home__button">Admin Dashboard</a>
                <a href="/customerlogin" class="home__button">Customer Dashboard</a>
            </div>
        </div>
    </section>
</main>




<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="{{asset('admin/js/jquery.min.js')}}" defer></script>
<script src="{{asset('admin/js/popper.min.js')}}" defer></script>
<script src="{{asset('admin/js/bootstrap-material-design.min.js')}}" defer></script>
<script src="{{asset('admin/js/perfect-scrollbar.jquery.min.js')}}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

@yield('script')


</html>
