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
                <?php
                if (isset($_SESSION['id']) && $_SESSION['role'] == "admin"):
                    ?>
                    <div class="name">Admin</div>
                <?php
                endif;
                ?>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-icon pe-md-0 position-relative" data-bs-toggle="dropdown">
                            <img src="/img/icons/photo_admin.svg" alt="icon">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end position-absolute">
                            <a class="dropdown-item" href="/home">Home</a>
                            <a class="dropdown-item" href="#">Account Setting</a>
                            <a class="dropdown-item" href="/logout">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <?php
        if (isset($_SESSION['id']) && $_SESSION['role'] == "admin"):
            ?>
            <section class="overview">
                <div class="row p-4">
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body  p-4">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <p class="mb-0">Total Wikis</p>
                                        <div class="mt-4">
                                            <h3><strong><?= $nbrwikis['nbr'] ?></strong></h3>
                                        </div>
                                    </div>
                                    <div class="cursor">
                                        <img src="/img/icons/project-icon-1.svg" alt="icon">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <p class="mb-0">Total authors</p>

                                        <div class="mt-4">
                                            <h3><strong><?= $nbrauthors['nbr'] ?></strong></h3>

                                        </div>
                                    </div>
                                    <div class="">
                                        <img src="/img/icons/project-icon-2.svg" alt="icon">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <p class="mb-0">Published Wikis</p>
                                        <div class="mt-4">
                                            <h3><strong><?= $nbrPublishedWikis['nbr'] ?></strong></h3>
                                            <!-- <p><strong></strong> Completed</p> -->
                                        </div>
                                    </div>
                                    <div class="">
                                        <img src="/img/icons/project-icon-3.svg" alt="icon">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php
        endif; ?>
        <div class="px-4">
            <div class="card mb-3">
                <div class="row g-0 px-2">
                    <div class="col-xl-8 col-md-12 col-sm-12 col-12 p-4  ">
                        <div class="text-start" id="chart">
                            <a href="/formwiki" class="btn btn-primary position-relative">

                                ADD WIKIS

                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <section class="content-section">
            <div class="px-4 row d-flex justify-content-center">
                <div class="col-xl-6 col-md-9 col-sm-9 col-9 fs-6 " style="width:100%">
                    <table id="example" class="table table-striped fs-6">
                        <thead class="fs-6">
                        <tr class="table table-dark fs-6" style="font-size: small">
                            <th>Title</th>
                            <th>Description</th>
                            <th>category</th>
                            <th>create At</th>
                            <th>Status</th>
                            <th>Action</th>
                            <?php
                            if (isset($_SESSION['id']) && ($_SESSION['role'] == "admin")):
                                ?>
                                <th>status action</th>
                            <?php
                            endif;
                            ?>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        foreach ($wikis as $wiki) {

                            if (isset($_SESSION['id']) && ($_SESSION['role'] == "admin" || $_SESSION['id'] == $wiki['user_id'])):

                                ?>
                                <tr class="fs-6 fw-lighter">

                                <td>
                                    <?php
                                    $title = $wiki['title'];
                                    if (strlen($title) > 20) {
                                        $title = substr($title, 0, 20) . '...';
                                    }
                                    echo $title;
                                    ?>
                                </td>

                                <td>
                                    <?php
                                    $description = $wiki['description'];
                                    if (strlen($description) > 50) {
                                        $description = substr($description, 0, 30) . '...';
                                    }
                                    echo $description;
                                    ?>
                                </td>
                                <td><?= $wiki['NAME'] ?></td>
                                <td><?= $wiki['created_at'] ?></td>

                                <td>
                                    <span class="badge text-bg-danger"><?= $wiki['status'] ?></span>

                                </td>

                                <td>

                                    <a href="/updatewiki?id=<?= $wiki['id'] ?>" class="edit" title="Edit"
                                       data-toggle="tooltip">
                                        <i class="material-icons">&#xE254;</i>
                                    </a>
                                    <a href="/deleteWiki?id=<?= $wiki['id'] ?>" class="delete" title="Delete"
                                       data-toggle="tooltip"
                                       onclick="return confirm('Do you really want to Delete ?');"><i
                                                class="material-icons">&#xE872;</i>
                                    </a>
                                    <a href="/singlwiki?id=<?= $wiki['id'] ?>" class="edit" title="Edit"
                                       data-toggle="tooltip">
                                        <svg class="mb-3 mx-2" xmlns="http://www.w3.org/2000/svg" height="20" width="20"
                                             viewBox="0 0 576 512">
                                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path fill="#246ca3"
                                                  d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/>
                                        </svg>
                                    </a>
                                </td>
                                <?php
                                if (isset($_SESSION['id']) && ($_SESSION['role'] == "admin")): ?>
                                    <td>
                                        <a href="/updateStatus?id=<?= $wiki['id'] ?>" class="edit" title="Edit"
                                           data-toggle="tooltip">
                                            <svg class="mb-2 mx-2" xmlns="http://www.w3.org/2000/svg" height="20"
                                                 width="20"
                                                 viewBox="0 0 512 512">
                                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path fill="#63E6BE"
                                                      d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                            </svg>
                                        </a>
                                        <a href="/updateStatusdarft?id=<?= $wiki['id'] ?>" class="edit" title="Edit"
                                           data-toggle="tooltip">
                                            <svg class="mb-2 mx-2" xmlns="http://www.w3.org/2000/svg" height="20"
                                                 width="20"
                                                 viewBox="0 0 512 512">
                                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path fill="#d80e0e"
                                                      d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/>
                                            </svg>
                                        </a>
                                        <a href="/updateStatusArchived?id=<?= $wiki['id'] ?>" class="edit" title="Edit"
                                           data-toggle="tooltip">
                                            <svg class="mb-2 mx-2" xmlns="http://www.w3.org/2000/svg" height="20"
                                                 width="20"
                                                 viewBox="0 0 512 512">
                                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path fill="#4d4f51"
                                                      d="M121 32C91.6 32 66 52 58.9 80.5L1.9 308.4C.6 313.5 0 318.7 0 323.9V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V323.9c0-5.2-.6-10.4-1.9-15.5l-57-227.9C446 52 420.4 32 391 32H121zm0 64H391l48 192H387.8c-12.1 0-23.2 6.8-28.6 17.7l-14.3 28.6c-5.4 10.8-16.5 17.7-28.6 17.7H195.8c-12.1 0-23.2-6.8-28.6-17.7l-14.3-28.6c-5.4-10.8-16.5-17.7-28.6-17.7H73L121 96z"/>
                                            </svg>
                                        </a>
                                    </td>

                                    </tr>
                                <?php
                                endif;
                            endif;
                        };
                        ?>
                        </tbody>
                    </table>

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