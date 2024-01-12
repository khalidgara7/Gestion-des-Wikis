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

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                            <p class="mt-auto">Notification</p><a href="#"><img src="/img/icons/settingsno.svg" alt="icon"></a>
                        </div>
                        <div class="list-group-item px-3 d-flex"><img src="/img/icons/notif.svg" alt="iconimage">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text mb-3">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <small class="card-text">1  day ago</small>
                            </div>
                        </div>
                        <div class="list-group-item px-3 d-flex"><img src="/assets/img/icons/notif.svg" alt="iconimage">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text mb-3">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <small class="card-text">1  day ago</small>
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
        <section class="overview">
            <div class="row p-4">
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body  p-4">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <p class="mb-0">Offers</p>
                                    <div class="mt-4">
                                        <h3><strong></strong></h3>
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
                                    <p class="mb-0">Active Offers</p>
                                    <div class="mt-4">
                                        <h3><strong></strong></h3>

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
                                    <p class="mb-0">Inactive Offers</p>
                                    <div class="mt-4">
                                        <h3><strong></strong></h3>
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
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <p class="mb-0">Offers Approuver</p>
                                    <div class="mt-4">
                                        <h3><strong></h3>
                                    </div>
                                </div>
                                <div class="">
                                    <img src="/img/icons/project-icon-4.svg" alt="icon">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="px-4">
            <div class="card mb-3">
                <div class="row g-0 px-2">
                    <div class="col-xl-8 col-md-12 col-sm-12 col-12 p-4  ">
                        <div class="text-start"  id="chart">
                            <a href="/Addtags" class="btn btn-primary position-relative">
                                ADD Tags
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <section class="content-section">
            <div class="px-4 row d-flex justify-content-center">
                <div class="col-xl-6 col-md-9 col-sm-9 col-9 " style="width:100%">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                        <tr class="table table-dark">
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                            foreach ($tags as $tag)
                        ?>
                        <tr>
                            <td><?=$tag['NAME'] ?></td>
                            <td>
                                <a href="Team/edit/" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="/deleteTag?id=<?= $tag['id'] ?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>
</div>
<!-- edit modal -->
<div class="modal">
    <div class="modal-content" >
        <form  method="" action="" enctype="multipart/form-data">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="mb-4">
                <label class="form-label"  >Title</label>
                <input type="text" name="title" class="form-control task-desc" >

            </div>
            <div class="mb-4">
                <label class="form-label" >Description</label>
                <input type="text" name="description" class="form-control task-desc" >

            </div>
            <div class="mb-4">
                <label class="form-label" >Content</label>
                <input type="text" name="enterprise" class="form-control task-desc" >

            </div>
            <div class="mb-4">
                <label class="form-label" >Create At</label>
                <input type="text" name="local" class="form-control task-desc" >

            </div>
            <!-- select input -->
            <div class="mb-4">
                <label class="form-label">Status</label>
                <select class="form-control" name="taskstatus" id="status">
                    <option value="">Pending</option>
                    <option value="">Draft</option>
                    <option value="">Published</option>
                    <option value="">archived</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="form-label" >Image</label>
                <input type="file"= "form-control task-desc" name="my_image" >

            </div>

            <div class="d-flex w-100 justify-content-center">
                <button type="submit" name="Addoffer" class="btn btn-success btn-block mb-4 me-4 save">Save Edit</button>
                <button class="btn btn-danger btn-block mb-4" type="button" data-bs-dismiss="modal" >Annuler</button>
            </div>
        </form>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>