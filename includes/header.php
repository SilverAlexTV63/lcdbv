<style>
    .dropdown-toggle:after{
        display: none!important;
    }
</style>
<nav class="navbar navbar-light navbar-expand-md bg-light navigation-clean-search" style="background-color: rgba(255, 153, 102, .2)!important;">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">
            <img src="assets/img/long-logo.png">
        </a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1" style="flex-grow: 0;">
            <form class="form-inline" target="_self">
                <div class="form-group">
                    <input class="form-control search-field" type="search" id="search-field" name="search" style="background-color: rgba(255, 153, 102, .01); border-color: #990000;">
                    <label for="search-field"><i class="fa fa-search"></i></label>
                </div>
            </form>
            <ul class="nav navbar-nav">
                <li class="nav-item dropdown justify-content-around justify-content-xl-center" style="list-style: none;color: black;"><a class="dropdown-toggle nav-link active" data-toggle="dropdown" aria-expanded="false" style="color: black;">Accueil ▼</a>
                <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" role="presentation" href="#">Carte de France</a></div>
                </li>
                    <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" role="presentation" href="home.php">Carte de France</a></div>
                </li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="contact.php" style="color: black;">Contact</a></li>
                <li class="nav-item" role="presentation"><a class="btn btn-primary ml-auto" role="button" href="connexion.php" style="border-color: #990000; background-color: #ff9966;">Inscription / Connexion</a></li>
            </ul>
        </div>
    </div>
</nav>
