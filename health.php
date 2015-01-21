<!DOCTYPE html>

<html lang="en">
<? include('header.php') ?>
    <div class="navbar navbar-fixed-top" id="topnav">
        <div class="navbar-inner">
            <div class="nav-container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#home"><h3>h e a l t h</h3></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li><a href='#ayurveda'><h3>ayurveda</h3></a></li>
                        <li><a href='#yoga'><h3>yoga</h3></a></li>
                        <li><a href='#massage'><h3>massage</h3></a></li>
                        <li><a href='#consulting'><h3>consulting</h3></a></li>
                        <li><a href='#about'><h3>about tory</h3></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <nav id="primary">
        <ul>
            <li>
                <a class="ayurveda" href="#ayurveda"><em></em>
                    <h1>Ayurvedic Consultation and Treatment</h1>
                </a>

            </li>
            <li>
                <a class="yoga" href="#yoga"><em></em>
                    <h1>Yoga Training</h1>
                </a>

            </li>
            <li>
                <a class="massage" href="#massage"><em></em>
                    <h1>Massage</h1>
                </a>

            </li>
            <li>
                <a class="consulting" href="#consulting"><em></em>
                    <h1>Consulting</h1>
                </a>

            </li>
            <li>
                <a class="about" href="#about"><em></em>
                    <h1>About Tory</h1>
                </a>

            </li>
        </ul>
    </nav>

    <div id="container" class="container row">
        <div class="health-content content col-md-10 col-offset-1 row" id="home">
            <img class="logo col-md-6 col-offset-3 img-responsive" src="img/main_logo.png">
            <h4>

            </h4>
        </div>

        <div class="ayurveda-content content col-md-10 col-offset-1 row" id="ayurveda">

        </div>
        <div class="yoga-content content col-md-10 col-offset-1 row" id="yoga">

        </div>
        <div class="massage-content content col-md-10 col-offset-1 row" id="massage">

        </div>
        <div class="consulting-content content col-md-10 col-offset-1 row" id="consulting">

        </div>
        <div class="about-content content col-md-10 col-offset-1 row" id="about">

        </div>





    </div>
<? include('footer.php') ?>
</html>