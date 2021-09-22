    <!-- header inner -->
    <div class="header-top">
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><?= $this->Html->image('logo.png', ['alt' => 'logo']); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">

                        <ul class="top_icon">
                            <li class="button_login"> <a href="#">Login</a> </li>
                            <li> <a href="#about">Signup</a> </li>
                            <li class="mean-last">
                                <a href="/stores/cart"><i class="fas fa-cart-plus fa-2x"></i></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->

        <!-- end header -->
        <?php if ($this->Url->build(['controller' => 'Stores', 'action' => 'index'])) { ?>
            <section class="slider_section" style="background-color: #000;">
                <div class="banner_main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 padding_left0">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"> <a href="#games">Game</a> </li>
                                                <li> <a href="#contact">Contact</a> </li>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 ">
                                <div class="text-bg">
                                    <h1>amazing<br> 3d game</h1>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br> tempor incididunt ut</span>
                                    <a href="#">download</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                                <div class="text-img">
                                    <figure><?= $this->Html->image('img.png', ['alt' => 'img']); ?></figure>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </section>
        <?php } ?>
    </div>