<!--============================== Header Area ==============================-->
<header class="vs-header header-layout2">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="fal fa-envelope-open-text"></i><a href="mailto:info@astrolabetechs.com">info@astrolabetechs.com</a></li>
                            <li><i class="far fa-map-marker-alt"></i>250 Main Street, 2nd Floor. USA</li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-auto"> --}}
                    {{-- <div class="header-dropdown"> --}}
                        {{-- <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-globe"></i>English</a> --}}
                        <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                            <li>
                                <a href="#">German</a>
                                <a href="#">French</a>
                                <a href="#">Italian</a>
                                <a href="#">Latvian</a>
                                <a href="#">Spanish</a>
                                <a href="#">Greek</a>
                            </li>
                        </ul> -->
                    {{-- </div> --}}
                {{-- </div> --}}
                <div class="col-auto">
                    <div class="header-social">
                        <span class="social-label">Get In Touch:</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="sticky-active">
            <!-- Main Menu Area -->
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="javascript:void(0)"><img src="assets/img/logo.png" alt="Bizino"></a>
                        </div>
                    </div>
                    <div class="col-auto col-xl text-xl-center">
                        <nav class="main-menu menu-style1 d-none d-lg-block">
                            @include('Website.Partials.navbar_menu')
                        </nav>
                        <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                    </div>
                    <div class="col-auto d-none d-xxl-block">
                        <a class="header-number" href="tel:(346)203-0433"><img src="assets/img/icon/phone-1-1.png" alt="Phone">(346)203-0433</a>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <a href="#contact_form" class="vs-btn">Make Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
