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
    <section id="blog" class="content-section ">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row ">
                <div class="col-lg-12 ">
                    <div class="row d-flex justify-content-end align-items-center " style="margin: 2rem;">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" onkeyup="searchbykeyup(event)" class="form-control search-slt"
                                   placeholder="Enter Pickup City">
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-12 p-0">
                            <button type="button" class="btn btn-primary wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>


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
                                            <img src="data:image/jpeg;base64,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"
                                                 alt="">
                                            <div class="text-content">
                                                <h4><?= $wiki['title'] ?></h4>
                                                <h5>Category</h5>
                                                <span><?= $wiki['created_at'] ?></span>
                                                <p><?= $wiki['description'] ?>
                                                    <br>
                                                    <?= $wiki['content'] ?>
                                                </p>

                                                <div class="accent-button button">
                                                    <a href="/singlwiki">Continue Reading</a>
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

<!--
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
-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<!--
    Search
-->
<script>

    function searchbykeyup(event) {
        const text = event.target.value;
        $.ajax({
            method: "GET",
            url: "http://localhost:5050/search-wikis?search="+text,
            success: (result) => {
                showWikis(JSON.parse(result))
            },
        })

    }

    function showWikis(wikis) {
        let wikisContainer = document.getElementById("tab1");
        wikisContainer.innerText = "";
        wikisContainer.innerHTML = "<ul>";
        wikis.forEach(wiki => {
            wikisContainer.innerHTML += `
             <li>
                <div class="item">
                    <img src="data:image/jpeg;base64,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"
                         alt="">
                    <div class="text-content">
                        <h4> ${wiki.title} </h4>
                        <h5>Category</h5>
                        <span>${wiki.created_at} </span>
                        <p> ${wiki.description}
                            <br>
                             ${wiki.content}
                        </p>

                        <div class="accent-button button">
                            <a href="/singlwiki">Continue Reading</a>
                        </div>
                    </div>
                </div>
            </li>`

        })
        wikisContainer.innerHTML += "</ul>"

    }
</script>
</body>
</html>