<?php if (!isset($_SESSION['sessionuser']))
    session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/softwareinclude/config.php") ?>
    <?php include("../includes/compatibility.php"); ?>
    <title>JMI | Control Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>

    </style>
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
                <div class="d-flex">
                    <h2 class="fs-4">Control panel | <?php echo $lang['controlPanelEBooks'] ?></h2>
                    <div class="d-flex ms-auto"><img src="../assets/images/svg/account_circle.svg"
                            class="account_circle" alt="">
                        <p class="mt-1 ms-2"><?php echo $lang['welcome'] ?>,
                            <?php echo $_SESSION['sessionusername']; ?>
                        </p>
                    </div>


                </div>
                <div class="ml-auto">
                    <iframe class="mt-5" src="https://www.jmibroker.net/assets/downloads/Company-Profile 2023(en).pdf"
                        frameborder="0" scrolling="no" width="100%" height="748px"></iframe>

                </div>
            </div>
        </div>
    </div>

    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>

</html>