<? include('header.php') ?>

    <div class="navbar navbar-fixed-top" id="topnav">
        <div class="navbar-inner">
            <div class="nav-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#home"><h3>t  r  e  a  t</h3></a>
                </div>
                <div class="nav-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href='#products'><h3>products</h3></a></li>
                        <li><a href='#services'><h3>services</h3></a></li>
                        <li><a href='#reviews'><h3>latest</h3></a></li>
                        <li><a href='#about'><h3>about</h3></a></li>
                        <li><a href='#contact'><h3>contact</h3></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <nav id="primary">
        <ul>
            <li>
                <a class="product" href="#products"><em></em>
                    <h1>Our Health and Beauty Products</h1>
                </a>

            </li>
            <li>
                <a class="services" href="#services"><em></em>
                    <h1>Our Services Offered</h1>
                </a>

            </li>
            <li>
                <a class="reviews" href="#reviews"><em></em>
                    <h1>Reviews and Current News</h1>
                </a>

            </li>
            <li>
                <a class="about" href="#about"><em></em>
                    <h1>About Lynn &amp; Tory</h1>
                </a>

            </li>
            <li>
                <a class="contact" href="#contact"><em></em>
                    <h1>Finding Us</h1>
                </a>

            </li>
        </ul>
    </nav>

    <div id="container" class="container row">
        <div class="home-content content col-md-10 col-offset-1 row" id="home">
            <img class="logo img-responsive" src="img/logo_horizontal.png">
        </div>
        <div class="products-content content col-md-10 col-offset-1 row" id="products">
            <h1 class="section-title">our products</h1>
            <div class="brands">
                <ul>
                    <li>
                        <img src="img/products/oils.jpg">
                    </li>
                    <li>
                        <img src="img/products/deodorant_homepage.jpg">
                    </li>
                    <li>
                        <img src="img/products/kama_homepage.jpg">
                    </li>
                </ul>
            </div>
            <nav class="next-prev">
                <a class="prev home" href="#home">Prev</a>
                <hr />
                <a class="next services" href="#services">Next</a>
            </nav>
        </div>
        <div class="services-content content col-md-10 col-offset-1 row" id="services">
            <h1 class="section-title">our services</h1>
            <ul class="col-md-6 col-offset-3">
                <li><h2>h    a    i    r</h2></li>
                <li><h3>color &euro;60<sup>&amp; up</sup></h3></li>
                <li><h3>highlights half head &euro;75<sup>&amp; up</sup></h3></li>
                <li><h3>highlights full head &euro;150<sup>&amp; up</sup></h3></li>
                <li><h3>hair extensions instalation &euro;300<sup>&amp; up</sup></h3></li>
                <li><h3>dread-maintenance &euro;60 <sup>/hour</sup></h3></li>
                <li><h3>dread perms &euro;250<sup>&amp; up</sup></h3></li>
                <li><h3>kama scalp treatment/deep conditioning &euro;50</h3></li>
                <li><h2>a   y   u   r   v   e   d   a</h2></li>
                <li><h3>consultation &euro;95</h3></li>
                <li><h3>hot oil massage &euro;95</h3></li>
                <li><h3>marma treatment &euro;95</h3></li>
                <li><h3>energy work &euro;95</h3></li>
            </ul>
<!--            <ul>-->
<!--                <li>-->
<!--                    <a href="hair.php">-->
<!--                        <img src=-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
            <nav class="next-prev">
                <a class="prev products" href="#products">Prev</a>
                <hr />
                <a class="next reviews" href="#reviews">Next</a>
            </nav>
        </div>
        <div class="reviews-content content col-md-10 col-offset-1 row" id="reviews">
            <h1 class="section-title">latest updates</h1>
            <div class="articles col-md-10 col-md-offset-1">
                <ul>
                    <li>
                        <h4>Glamour Magazine welcomes Treat's new debut to Amsterdam</h4>
                        <a href="article1" class="fancybox article1" >
                            <img src=img/reviews/glamour_thumb.jpg>
                        </a>
                    </li>
                    <li>
                        <h4>What is Ayurveda? Tory explains in interview.</h4>
                        <a href="http://www.youtube.com/watch?v=IwEI69xV5Lw&sns=em" class="fancybox-video">
                            <img src="img/reviews/interview_ayurveda.jpg">
                        </a>
                    </li>
                    <li>
                        <h4>Ayurveda in Women's Daily Lives</h4>
                        <a id="flyer1" class="fancybox flyer1" href="#" >
                            <img src="img/services/radient_health_thumb.jpg">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flyers col-md-10 col-md-offset-1">
                <ul>
                    <li>
                        <h4>Pregnant and Expectant Mothers Yoga</h4>
                        <a id="flyer2" class="fancybox" href="#">
                            <img src="img/services/pregnancy2_thumb.jpg">
                        </a>
                    </li>
                    <li>
                        <h4>Pregnancy, Birthing & Post-natal workshop</h4>
                        <a id="flyer3" class="fancybox" href="#">
                            <img src="img/services/prenatal2_thumb.jpg">
                        </a>
                    </li>
                    <li>
                        <h4>Weekly Yoga</h4>
                        <a id="flyer4" class="fancybox" href="#">
                            <img src="img/services/yoga3_thumb.jpg">
                        </a>
                    </li>
                </ul>
            </div>
            <nav class="next-prev">
                <a class="prev services" href="#services">Prev</a>
                <hr />
                <a class="next about" href="#about">Next</a>
            </nav>
        </div>
        <div class="about-content content col-md-10 col-offset-1 row" id="about">
            <h1 class="section-title">about us</h1>
            <div class="col-md-6 col-offset-3">

                <h4><p>Lynn and Tory started in Los Angeles in 1994, opening Purple Circle, a hip stylish hair salon specializing in hair extensions, dreadlocks and extreme hair styles. Filling their chairs with a wide variety of clients from actors, rockstars to healers and Beverly Hills housewives, Lynn remained in Los angeles running
                        Purple Circle until 2010, as Tory completed her Ayurvedic training at the Ayurvedic Institute in Albuquerque, New Mexico, becoming a certified Ayurvedic consultant. She received her yoga teacher  training certificate in 2003 in Los Angeles from the Center For Yoga and has been working as an Ayurvedic consultant focused on women's health & happiness, yoga teacher and practitioner at spiritual centers, spas, and healing retreats between Holland and Bali, Indonesia.</p>
                        <p>Now, the sisters have reunited and returned to their family in Amsterdam, having launched Treat, a hair salon selling natural and organic beauty products and Ayurvedic practice offering women's yoga classes, nutrition & lifestyle consultations, Ayurvedic hot oil massages, marma (energetic pressure points) treatments, energetic and emotional healing treatments.</p>
                        <p>This is a meeting ground for women to gather, learn from workshops & courses and to discover the balance of inner and outer beauty.</p>
                        <p>Their innovative approach brings together one's inner and outer beauty: 'when you look good, you feel good, when you feel good, you look even better!</p></h4>
            </div>

            <nav class="next-prev">
                <a class="prev reviews" href="#reviews">Prev</a>
                <hr />
                <a class="next contact" href="#contact">Next</a>
            </nav>
        </div>
        <div class="contact-content content col-md-10 col-offset-1 row" id="contact">
            <h1 class="section-title">finding treat</h1>
            <div class="col-md-3 col-offset-3"><h4>Find your route to visit us using GoogleMaps by clicking here:<br><a href="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=Ceintuurbaan+47,+Oude+Pijp,+Amsterdam,+The+Netherlands&aq=t&sll=52.374716,4.898623&sspn=0.21274,0.300064&vpsrc=6&t=h&ie=UTF8&hq=&hnear=Ceintuurbaan+47,+1072+Amsterdam,+Noord-Holland,+The+Netherlands&ll=52.352607,4.888675&spn=0.001607,0.002344&z=19&iwloc=A">Ceintuurban 47, Amsterdam</a></h4></div>
            <div class="col-md-3 col-offset-6"><img class="img-responsive" src="https://maps.google.com/maps/api/staticmap?size=300x300&maptype=roadmap&sensor=false&markers=color:red%7C52.352606,4.888675&client=google-maps-sharing&signature=PiY2RBHWL3YLl4jIXf5eqICWIbA="></div>
            <div class="col-md-6 col-offset-3"><h3><a href="mailto:info@treat-amsterdam.com">info&#64;treatamsterdam.com</a></h3></div>
            <nav class="next-prev">
                <a class="prev about" href="#about">Prev</a>
                <hr />
            </nav>
        </div>

    </div>
    <div id="background">
        <ul class="slides">
<!--            <li><img src="img/main_img.jpg"></li>-->
            <li><img src="img/sliderphotos/img1.jpg"></li>
            <li><img src="img/sliderphotos/img2.jpg"></li>
            <li><img src="img/sliderphotos/img3.jpg"></li>
            <li><img src="img/sliderphotos/img4.jpg"></li>
            <li><img src="img/sliderphotos/img5.jpg"></li>
            <li><img src="img/sliderphotos/img6.jpg"></li>

            <li><img src="img/sliderphotos/img1.jpg"></li>
            <li><img src="img/sliderphotos/img2.jpg"></li>
            <li><img src="img/sliderphotos/img3.jpg"></li>
            <li><img src="img/sliderphotos/img4.jpg"></li>
            <li class="visible-tablet"><img src="img/sliderphotos/img5.jpg"></li>
            <li class="visible-tablet"><img src="img/sliderphotos/img6.jpg"></li>

            <li class="visible-tablet"><img src="img/sliderphotos/img1.jpg"></li>
            <li class="visible-phone"><img src="img/sliderphotos/img2.jpg"></li>
            <li class="visible-phone"><img src="img/sliderphotos/img3.jpg"></li>
            <li class="visible-phone"><img src="img/sliderphotos/img4.jpg"></li>
            <li class="visible-phone"><img src="img/sliderphotos/img5.jpg"></li>
            <li class="visible-phone"><img src="img/sliderphotos/img6.jpg"></li>

            <li class="visible-phone"><img src="img/sliderphotos/img1.jpg"></li>
            <li class="visible-phone"><img src="img/sliderphotos/img2.jpg"></li>
            <li class="visible-phone"><img src="img/sliderphotos/img3.jpg"></li>
            <li class="visible-phone"><img src="img/sliderphotos/img4.jpg"></li>
            <li class="visible-phone"><img src="img/sliderphotos/img5.jpg"></li>


        </ul>
    </div>
    <footer><h6>Copyright 2013 Treat</h6></footer>

<? include('footer.php') ?>