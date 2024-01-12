<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Link responsive meta -->
    <title> Wikis </title>
    <!--
    https://templatemo.com/tm-518-sentra
    -->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="Styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="Styles/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="Styles/css/fontAwesome.css">
    <link rel="stylesheet" href="Styles/css/light-box.css">
    <link rel="stylesheet" href=".Styles/css/owl-carousel.css">
    <link rel="stylesheet" href="Styles/css/templatemo-style.css">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <script src="Styles/Js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>


<?php

include '../View/includes/sidebar.php';

?>

<!-- page content -->
<div class="page-content">
    <section id="blog" class="content-section">
        <section class="search-sec p-5 ">
            <div class="container ">
                <form action="#" method="post" novalidate="novalidate">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row d-flex justify-content-end align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <input type="text" class="form-control search-slt" placeholder="Enter Pickup City">
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-12 p-0">
                                    <button type="button" class="btn btn-primary wrn-btn">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <div class="section-heading">
            <h1>View all<br><em>ARTICLES</em></h1>
            <p>Wikis is hosted by the Wikimedia Foundation,
                <br>organization that also hosts a range of other projects.</p>
        </div>
        <div class="section-content">
            <div class="tabs-content">
                <div class="wrapper">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <ul>
                                <?php
                                foreach ($wikis as $wiki):
                                ?>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_1.jpg" alt="">
                                        <div class="text-content">
                                            <h4><?= $wiki['title'] ?></h4>
                                            <h5>Category</h5>
                                            <span><?= $wiki['created_at'] ?></span>
                                            <p><?= $wiki['description'] ?>
                                                <br>
                                                <?= $wiki['content'] ?>
                                            </p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php
                                endforeach;
                                ?>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <?php
    include '../View/includes/footer.php';
    ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script>
    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function (event) {
        didScroll = true;
    });

    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
</body>
</html>