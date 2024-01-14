<aside id="sidebar" class="side">
    <div class="h-100">
        <div class="sidebar_logo d-flex align-items-end">

            <?php
            if (isset($_SESSION['id']) && $_SESSION['role']=="admin"){
                ?>
                <a href="dashboard.php" class="nav-link text-white-50">Dashboard</a>
                <img class="close align-self-start" src="/assets/img/icons/close.svg" alt="icon">
            <?php
            }else{
                ?>
            <a href="dashboard.php" class="nav-link text-white-50">Manage My Wikis</a>
            <img class="close align-self-start" src="/assets/img/icons/close.svg" alt="icon">
            <?php
                }
            ;
            ?>

        </div>

        <ul class="sidebar_nav">
            <li class="sidebar_item active" style="width: 100%;">
                <a href="/dashboard" class="sidebar_link"> <img src="/img/icons/1. overview.svg" alt="icon">Wikis</a>
            </li>
            <?php
            if (isset($_SESSION['id']) && $_SESSION['role']=="admin"):
            ?>
            <li class="sidebar_item">
                <a href="/categories" class="sidebar_link"> <img src="/img/icons/agents.svg" alt="icon">Categories</a>
            </li>
            <li class="sidebar_item">
                <a href="/tags" class="sidebar_link"> <img src="/img/icons/task.svg" alt="icon">Tags</a>
            </li>
            <?php
            endif;
            ?>
        </ul>
        <div class="line"></div>

        <a href="/home" class="sidebar_link"><img src="/img/icons/settings.svg" alt="icon">Home</a>


    </div>
</aside>