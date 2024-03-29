
<header class="nav-down responsive-nav hidden-lg hidden-md">
    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <!--/.navbar-header-->
    <div id="main-nav" class="collapse navbar-collapse">
        <nav>
            <ul class="nav navbar-nav">
                <li><a href="#top">Home</a></li>
                <li><a href="#featured">Featured</a></li>
                <li><a href="#projects">Recent Projects</a></li>
                <li><a href="#video">Presentation</a></li>
                <li><a href="#blog">Blog Entries</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="sidebar-navigation hidde-sm hidden-xs">
    <div class="logo">
        <a href="#">WI<em>kis</em></a>
    </div>
    <nav>
        <ul>
            <?php
            if(isset($_SESSION['id']) && $_SESSION['role'] == "admin"):
            ?>
            <li>
                <a href="/dashboard">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Dashboard
                </a>
            </li>
            <?php
            endif;
            ?>
            <li>
                <a href="/home">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Home
                </a>
            </li>
            <?php
            if (isset($_SESSION['id']) && $_SESSION['role']=="author"):
            ?>
            <li class="sidebar_item active" style="width: 100%;">
                <a href="/dashboard" class="sidebar_link">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    My Wikis</a>
            </li>
            <?php
                endif;
            ?>
            <li>
                <a href="/wikis">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    View ALL Wikis
                </a>
            </li>
            <?php
            if(!isset($_SESSION['id'])):
            ?>
            <li>
                <a href="/loginview">
                    <span class="rect"></span>
                    <span class="circle"></span>
                     Login
                </a>
            </li>
            <?php
            endif;
            ?>
            <?php
            if(isset($_SESSION['id'])):
            ?>
            <li>
                <a href="/logout">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Log-out
                </a>
            </li>
            <?php
            endif;
            ?>
        </ul>
    </nav>
    <ul class="social-icons">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-rss"></i></a></li>
        <li><a href="#"><i class="fa fa-behance"></i></a></li>
    </ul>
</div>

<!-- Navbar -->
