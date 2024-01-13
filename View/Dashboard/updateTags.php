<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Styles/css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
<div class="wrapper">
    <?php
    include '../View/includes/Dashboard_sidebar.php';
    ?>
    <div class="main">
        <nav class="navbar justify-content-space-between pe-4 ps-2">
            <button class="btn open">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar  gap-4">
                <div class="">
                    <input type="search" class="search " placeholder="Search">
                    <img class="search_icon" src="/img/icons/search.svg" alt="iconicon">
                </div>
                <!-- <img src="/assets/img/icons/search.svg" alt="icon"> -->
                <img class="notification" src="/img/icons/new.svg" alt="icon">
                <div class="card new w-auto">
                    <div class="list-group list-group-light">
                        <div class="list-group-item px-3 d-flex justify-content-between align-items-center ">
                            <p class="mt-auto">Notification</p><a href="#"><img src="/img/icons/settingsno.svg"
                                                                                alt="icon"></a>
                        </div>
                        <div class="list-group-item px-3 d-flex"><img src="/img/icons/notif.svg" alt="iconimage">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text mb-3">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <small class="card-text">1 day ago</small>
                            </div>
                        </div>
                        <div class="list-group-item px-3 d-flex"><img src="/assets/img/icons/notif.svg" alt="iconimage">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text mb-3">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <small class="card-text">1 day ago</small>
                            </div>
                        </div>
                        <div class="list-group-item px-3 text-center"><a href="#">View all notifications</a></div>
                    </div>
                </div>
                <div class="inline"></div>
                <div class="name">Admin</div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-icon pe-md-0 position-relative" data-bs-toggle="dropdown">
                            <img src="/img/icons/photo_admin.svg" alt="icon">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end position-absolute">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Account Setting</a>
                            <a class="dropdown-item" href="#">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <section class="content-section">
            <div class="px-4 row d-flex justify-content-center">
                <div class="col-xl-6 col-md-9 col-sm-9 col-9 fs-6 " style="width:100%">
                    <form method="post" action="/submitUpdatetags" >
                        <div class="mb-4">
                            <div >
                                <h2>UPDATE TAGS</h2>
                                <input type="hidden" name="id" value="<?= $tag->id ?>" class="form-control task-desc">

                            </div>
                            <label class="form-label">Tags</label>
                            <input type="text" name="name" value="<?= $tag->NAME ?>" class="form-control task-desc">
                        </div>

                        <div class="d-flex w-100 justify-content-center">
                            <button type="submit" class="btn btn-success btn-block mb-4 me-4 save">
                                UPDATE
                            </button>
                            <a href="/tags" class="btn btn-danger btn-block mb-4" >ANNULER</a>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>