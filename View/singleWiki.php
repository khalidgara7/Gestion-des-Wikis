
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
    <link rel="stylesheet" href="Styles/css/style.css">
    <link rel="stylesheet" href="Styles/css/owl-carousel.css">
    <link rel="stylesheet" href="Styles/css/templatemo-style.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="Styles/Js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>

<?php
include '../View/includes/sidebar.php';
?>>
<!-- Navbar -->


<!-- page content -->

<div class="page-content">

    <section id="blog" class="content-section">
        <div id="main-content" class="blog-page">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-11 col-md-11 left-box">
                            <!--array(10) { ["id"]=> int(5) ["user_id"]=> int(6)
                             ["categorie_id"]=> int(1) ["title"]=> string(18)
                              "haahahahahahhahahh" ["description"]=> string(14)
                               "hahahahahahaha" ["content"]=> string(30)
                                "haahahahahahahzzzzzzzzzzzzzzzz"
                                 ["created_at"]=> string(19)
                                 "2024-01-12 02:54:00"
                                 ["status"]=> string(9) "published" ["full_Name"]=>
                                 string(6) "khalid" ["NAME"]=> string(7) "gamesss" }-->
                        <section id="first-tab-group" class="tabgroup">
                            <div>
                                <h1><?= $wiki['title']?></h1>
                                <p class="lead"> by <a href=""><?= $wiki['full_Name']?></a>
                                </p>
                                <hr>
                                <p><i class="fa fa-calendar"></i> <?= $wiki['created_at']?> </p>

                            </div>
                            <div class="card mb-3">
                                <img src="https://www.123effizientdabei.de/wp-content/uploads/Wiki.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text"><?= $wiki['description']?></p>
                                    <p class="card-text"><?= $wiki['content']?></p>
                                    <p>
                                        <?php
                                        foreach ($wikitags as $wikitag):
                                        ?>
                                        <span class="badge badge-info"><?=$wikitag['NAME']?></span>
                                        <?php
                                        endforeach;
                                        ?>
                                    </p>
                                    <form method="post" action="/addtagswikis" enctype="multipart/form-data">
                                        <?php
                                        if(isset($_SESSION['id']) && $_SESSION['id']==$wiki['user_id']):
                                        ?>
                                        <div class="mb-4">
                                            <input type="hidden" name="wiki_id" value="<?=$wiki['id']?>">
                                            <label class="form-label">SELECT TAGS</label>
                                            <select class="form-control" name="tag_id" id="status">
                                                <?php
                                                foreach ($tags as $tag):
                                                    ?>
                                                    <option value="<?=$tag['id']?>"><?=$tag['NAME']?></option>

                                                <?php
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>


                                        <button type="submit" class="btn btn-success btn-block mb-4 me-4 save">
                                            Save Tags
                                        </button>

                                        <a href="/tags" class="btn btn-danger btn-block mb-4">Annuler</a>

                                    </form>
                                    <?php
                                    endif;
                                    ?>
                                </div>
                            </div>

                        </section>
                    </div>
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

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>