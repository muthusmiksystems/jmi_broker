<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include("includes/style.php"); ?>

    <style>
        form .row {
            border: 0px solid;
        }
        .custom-button{
            background-color: #FFBF10 !important;
        }

        .form-control:hover {
            box-shadow: 1px 1px 3px 1px #FFBF10 !important;
        }

        .asterisk {
            height: 10px;
            width: 10px;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <h2 class="fs-4">Password Change</h2>
        <div class="d-flex ml-auto"><img src="assets/images/svg/account_circle.svg" class="account_circle" alt="">
            <p class="mt-1 ms-2">Welcome, <?php echo $_SESSION['sessionusername']; ?></p>
        </div>
    </div>
    <div class="bg-white mt-4 p-5 rounded-3">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="row mt-3"><label for="" class="form-label">Current Password <img
                                src="assets/images/asterisk.png" alt="" class="asterisk"></label></div>
                    <div class="row my-4"><label for="" class="form-label">New Password <img
                                src="assets/images/asterisk.png" alt="" class="asterisk"></label></div>
                    <div class="row"><label for="" class="form-label">Confirm Password <img
                                src="assets/images/asterisk.png" alt="" class="asterisk"></label></div>
                </div>
            </div>
            <div class="col">
                <input type="password" name="" id="" class="form-control border w-100" placeholder="Current Password">
                <input type="password" name="" id="" class="form-control border my-3 w-100" placeholder="New Password">
                <input type="password" name="" id="" class="form-control border w-100" placeholder="Confirm New Password">
                <button type="button" class="btn custom-button text-light w-auto mt-4">Update password</button>
            </div>
        </div>
        
    </div>
</body>

</html>