<?php

    session_start();

    if(!isset($_SESSION['adm'])) {
        header('location: ../../index.php');
        die;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Camden Dairy Farm Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <style>
        .logo {
            color: #fff;
            font-weight: bold;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-collapse {
            justify-content: flex-end;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="d-flex align-items-center">
                    <a class="navbar-brand logo" href="../../index.php">Camden Dairy Farm</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="adm.php">
                                <i class="bi bi-person"></i> Adm Panel
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">
                                <i class="bi bi-cart"></i> Cart
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>

    </main>

    <!-- TODO: SCRIPT PARA VALIDAR -->
</body>

</html>