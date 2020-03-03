<section>
    <header>
        <div class="header-top">
            <div class="container">
                <nav class="navbar navbar-toggleable-md navbar-light">
                    <div class="mobile_view">
                        <div class="cashback_section-wrap my-2 my-lg-0">
                            <!-- memù in modalità smartphone -->
                            <nav id='cssmenu'>
                                <!-- <div id="head-mobile"></div> -->
                                <a href="login.html" class="back_button invisible" style="margin-right:25px;">
                                    <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                                </a>
                            </nav>
                            <a class="navbar-brand wow fadeIn" href="index.html" alt="logo Offerta In">
                                <img src="{{ Theme::asset('pub_theme::assets/img/logo.png') }}">
                            </a>
                            <div class="heradre_right_mobiles">
                                <a href="login.html" class="signup-signin">
                                <img src="{{ Theme::asset('pub_theme::assets/img/header-top-user-icon.png') }}">
                                <span> Sign in Sign up </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="navbar-brand wow fadeIn" href="index.html"><img src="{{ Theme::asset('pub_theme::assets/img/logo.png') }}"></a>
                    <div class="header-search-bar nav-down m-l-50 wow fadeIn">
                        <form class="form-inline head_sform w-100" method="get" action="offers.html" id="search_form">
                            <div class="header-form-wrap">
                                <div class="row">
                                    <div class="w-100">
                                        <div class="input-group">
                                            <div class="input-group-btn search-panel">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span id="search_concept">Tutte le categorie</span>
                                                </button>
                                                <ul class="dropdown-menu text-left" role="menu">
                                                    <li><a id="all" href="https://www.offerta.in/0" style="display:none;">Tutte le categorie</a></li>
                                                    <li><a href="https://www.offerta.in/1">Ristoranti e Bar</a></li>
                                                    <li><a href="https://www.offerta.in/2">Salute e Benessere</a></li>
                                                    <li><a href="https://www.offerta.in/3">Sport e Tempo Libero</a></li>
                                                    <li><a href="https://www.offerta.in/4">Intrattenimento ed Eventi</a></li>
                                                    <li><a href="https://www.offerta.in/5">Servizi</a></li>
                                                    <li><a href="https://www.offerta.in/6">Computer e Tecnologia</a></li>
                                                    <li><a href="https://www.offerta.in/7">Casa e Arredamento</a></li>
                                                    <li><a href="https://www.offerta.in/8">Shopping e Idee Regalo</a></li>
                                                    <li><a href="https://www.offerta.in/9">Viaggi</a></li>
                                                    <li><a href="https://www.offerta.in/10">Auto e Motori</a></li>
                                                    <li><a href="https://www.offerta.in/11">Moda e Abbigliamento</a></li>
                                                    <li><a href="https://www.offerta.in/12">Giochi e Svago</a></li>
                                                    <li><a href="https://www.offerta.in/13">Sconti</a></li>
                                                </ul>
                                            </div>
                                            <input type="hidden" name="search_param" value="0" id="search_param">
                                            <input type="text" class="form-control mr-sm-2" name="testo" placeholder="Cerca..." maxlength="50">
                                            <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" id="search_submit"><i class="fa fa-search"></i></span></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="cashback_section-wrap my-2 my-lg-0">
                            <a href="login.html" class="signup-signin">
                            <img src="{{ Theme::asset('pub_theme::assets/img/header-top-user-icon.png') }}"> Sign in / Sign up
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</section>
