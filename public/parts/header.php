<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-dark navbar-border navbar-brand-center">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a class="navbar-brand" href="<?= $BASE_URL; ?>"><img class="brand-logo" alt="RAICE logo" src="<?= $BASE_URL; ?>/app-assets/images/logo/raice-icon.png">
                <h3 class="brand-text">RAICE</h3></a></li>
            <!-- <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li> -->
            </ul>
        </div>
        <div class="navbar-container container center-layout">
            <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
                <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu">         </i></a></li>
                
                <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                <div class="search-input">
                    <input class="input" type="text" placeholder="Explore Raice...">
                </div>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto float-right">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#modalRegister">Register</a>
                </li>    
                <li class="nav-item">
                    <a class="nav-link success" data-toggle="modal" data-target="#modalLogin">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        Login
                    </a>
                </li>
            </ul>
            </div>
        </div>
    </div>
</nav>