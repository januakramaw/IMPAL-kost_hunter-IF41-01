<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>Assets/CSS/style.css">

    <title><?php echo $judul; ?>
    </title>
</head>

<body background="Assets/Logo/house.jpg">

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="<?= base_url(); ?>">
            <img src="<?= base_url('Assets/Logo/hunter.png'); ?>" width="207" title="XDA Developers">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?= base_url('berita'); ?>" id="navbarDropdown">
                        Iklan Hunian
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">KONTRAKAN</a>
                        <a class="dropdown-item" href="#">KOST</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">contact person</a>
                    </div>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        FORUMS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        DEVICES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        TOPICS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        BEST POSTS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Get Substratum</a>
                        <a class="dropdown-item" href="#">Get Google Camera</a>
                        <a class="dropdown-item" href="#">Get Magisk</a>
                        <a class="dropdown-item" href="#">Get Android Pie ROM</a>
                        <a class="dropdown-item" href="#">How to use ADB</a>
                        <a class="dropdown-item" href="#">How to Root</a>
                        <a class="dropdown-item" href="#">Get YouTube Vanced</a>
                        <a class="dropdown-item" href="#">Get Xposed</a>
                    </div>
                </li> -->
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form> -->
            <a class="btn btn-light my-2 my-sm-0" href="<?= base_url('auth'); ?>">LOGIN</a>
        </div>
    </nav>
</body>