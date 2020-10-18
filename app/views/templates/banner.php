  <!-- <body data-spy="scroll" data-target=".main-navigation" data-offset="150"> -->
    <body>
    <section id="MainContainer">
        
        <!-- Header starts here -->
        <header id="Header">
            <nav class="main-navigationz">
                <div class="container">
                    <div class="site-logo-wrap">
                        <a href="<?=LURL ?>"><img width="40%" src="<?= BASEURL ?>/img/logo2.png"></a>
                    </div>
                    <a href="javascript:void(0)" class="menu-trigger hidden-lg-up"><span>&nbsp;</span></a>
                    <div class="main-menu hidden-md-down">
                        <ul class="menu-list">
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#HeroBanner">Home</a></li>
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#Services">Tentang</a></li>
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#Caraorder">Cara Order</a></li>
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#Order">Order</a></li>
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#ContactUs">Kontak</a></li>
                            <?= $data['dropdown'] ?>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu hidden-lg-up">
                    <ul class="mobile-menu-list">
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#HeroBanner">Home</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#Services">Tentang</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#Caraorder">Cara Order</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#Order">Order</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#ContactUs">Kontak</a></li>
                        <?= $data['dropdown'] ?>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Header ends here -->

 <!-- Banner starts here -->
        <section id="HeroBanner">
            <div class="hero-content">
                <h1>In Corporation</h1>
                <p>Jasa Online Rental-In, Desain-In, Cetak-In, Install-In</p>
                <p class="mt-2 mb-2" style="font-size: 18px;">Tersedia dalam aplikasi</p>
                <a href="inapps.apk" class="hero-cta">Download Aplikasi disini</a>
            </div>
        </section>
        <!-- Banner ends here --> 