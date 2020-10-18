  <!-- <body data-spy="scroll" data-target=".main-navigation" data-offset="150"> -->
    <body>
    <section id="MainContainer">
        
        <!-- Header starts here -->
        <header id="Header">
            <nav class="main-navigationz">
                <div class="container">
                    <div class="site-logo-wrap">
                        <a href="<?= LURL ?>"><img width="40%" src="<?= BASEURL ?>/img/logo2.png"></a>
                    </div>
                    <a href="javascript:void(0)" class="menu-trigger hidden-lg-up"><span>&nbsp;</span></a>
                    <div class="main-menu hidden-md-down">
                        <ul class="menu-list">
                            <li><a class="nav-link" href="<?= LURL ?>">Home</a></li>
                            <!-- <?= $data['dropdown'] ?> -->
                        </ul> 
                    </div>
                </div>
                <div class="mobile-menu hidden-lg-up">
                    <ul class="mobile-menu-list">
                        <li><a class="nav-link" href="<?= LURL ?>">Home</a></li>
                        <?= $data['dropdown'] ?>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Header ends here -->

 <!-- Banner starts here -->
        <section id="HeroBanner2">
            <div class="hero-content">
            </div>
        </section>
       