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

<body>

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
                    <a class="nav-link dropdown-toggle" id="navbarDropdown">
                        lOGIN
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('auth'); ?>">LOGIN USER</a>
                        <a class="dropdown-item" href="<?= base_url('AuthAdmin'); ?>">LOGIN ADMIN</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">contact person</a>
                    </div>
                </li>

            </ul>
            <button type="button" class="btn btn-link">WELCOME IN KOST HUNTER </button>
        </div>
    </nav>
</body>