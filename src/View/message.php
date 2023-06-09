<?php
    session_start();

    if (!isset($_SESSION)) {
        header('Location: ../../index.php');
        exit();
    }

    var_dump($_SESSION);

    die;

    $_SESSION['message'] = array(
        array(
            'type' => 'danger',
            'content' => 'This is a danger message'
        ),
        array(
            'type' => 'info',
            'content' => 'This is a info message'
        ),
        array(
            'type' => 'success',
            'content' => 'This is a success message'
        ),
        array(
            'type' => 'warning',
            'content' => 'This is a warning message'
        ),
    );
    if (!isset($_SESSION['message'])) {
        header('Location: ../index.html');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Camden Dairy Farm Site - Message of system</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <div class="container w-50 vh-100 d-flex flex-column justify-content-center align-content-center">
            <div class="d-flex flex-column justify-content-center align-items-center card p-5 shadow">
                <h1 class="text-center my-4"><i class="bi bi-cone"></i> Attention</h1>
                <?php
                if (is_array($_SESSION['message'])) {
                    foreach ($_SESSION['message'] as $message) {
                        echo "<div class='alert alert-{$message["type"]}'>{$message["content"]}</div>";
                    }
                    unset($_SESSION['message']);
                } else {
                    echo "<div class='alert alert-info'>{$_SESSION['message']}</div>";
                }
                ?>
            </div>
        </div>
    </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>