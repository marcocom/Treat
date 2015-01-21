<!DOCTYPE html>

<html lang="en">
<? include('header.php') ?>
    <div class="navbar navbar-fixed-top" id="topnav">
        <div class="navbar-inner">
            <div class="nav-container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#home"><h3>h a i r</h3></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li><a href='#cuts'><h3>cuts</h3></a></li>
                        <li><a href='#color'><h3>color</h3></a></li>
                        <li><a href='#extensions'><h3>extensions</h3></a></li>
                        <li><a href='#dreads'><h3>dreads</h3></a></li>
                        <li><a href='#feathers'><h3>feathers</h3></a></li>
                        <li><a href='#about'><h3>about lynn</h3></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <nav id="primary">
        <ul>
            <li>
                <a class="cuts" href="#cuts"><em></em>
                    <h1>Men and Women's Hair Cuts</h1>
                </a>

            </li>
            <li>
                <a class="color" href="#color"><em></em>
                    <h1>Color Treatment</h1>
                </a>

            </li>
            <li>
                <a class="extensions" href="#extensions"><em></em>
                    <h1>Extensions</h1>
                </a>

            </li>
            <li>
                <a class="feathers" href="#feathers"><em></em>
                    <h1>Feathers</h1>
                </a>

            </li>
            <li>
                <a class="about" href="#about"><em></em>
                    <h1>About Lynn</h1>
                </a>

            </li>
        </ul>
    </nav>

    <div id="container" class="container row">
        <div class="hair-content content col-md-10 col-offset-1 row" id="home">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="img/sliderphotos/img1.jpg"></li>
                    <li><img src="img/sliderphotos/img2.jpg"></li>
                    <li><img src="img/sliderphotos/img3.jpg"></li>
                    <li><img src="img/sliderphotos/img4.jpg"></li>
                    <li><img src="img/sliderphotos/img5.jpg"></li>
                </ul>
            </div>
        </div>

        <div class="cuts-content content col-md-10 col-offset-1 row" id="cuts">

        </div>
        <div class="color-content content col-md-10 col-offset-1 row" id="color">

        </div>
        <div class="extensions-content content col-md-10 col-offset-1 row" id="extensions">

        </div>
        <div class="dreads-content content col-md-10 col-offset-1 row" id="dreads">

        </div>
        <div class="feathers-content content col-md-10 col-offset-1 row" id="feathers">

        </div>
        <div class="about-content content col-md-10 col-offset-1 row" id="about">

        </div>

    </div>
<? include('footer.php') ?>
</html>