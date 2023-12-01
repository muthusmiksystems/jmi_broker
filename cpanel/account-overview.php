<?php if(!isset($_SESSION['sessionuser']))session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include("../includes/softwareinclude/config.php") ?>
<?php include("../includes/compatibility.php"); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
</head>

<body>
   
    <?php include("../includes/header.php"); ?>
    <?php include("includes/accountOverview.php"); ?>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
        <div class="d-flex">
            <h2 class="fs-4">Control Panel|Account OverView</h2>
            <div class="d-flex ml-auto"><img src="../assets/images/svg/account_circle.svg" class="account_circle" alt="">
                <p class="mt-1 ms-2">Welcome,
                    <?php echo $_SESSION['sessionusername']; ?>
                </p>
            </div>
        </div>
        <div class="card round p-3 bg-white my-3 py-5">
            <div class="border-bottom-80 p-1 d-flex justify-content-between">
                <h3>FOREX ACCOUNTS</h3>
                <h3 class="ml-auto"> <?PHP echo array_sum($equities) ?>   USD</h3>
            </div>
            <div class="mt-3 p-1 d-flex justify-content-between">
                <h3>TOTAL VALUE</h3>
                <h3 class="ml-auto font-weight-bold fs-1 text-color"><span class="forex-font">
                
                <?PHP echo array_sum($equities) ?>   
                USD</span></h3>
            </div>
        </div>
        <?php if(count($accounts)<=0) { ?>
            <div class="row forexaccount">
                                            <div class="col-sm-12">
                                              <h5 style=" color: #0059b2; ">FOREX ACCOUNT</h5>
                                              <h5> Your account opening request is currently under review</h5>
                                            </div>
                                      </div>
                                      <?PHP }else{ ?>

                                        <div class="row forexaccount">
                                              <div class="col-sm-12">
                                                <h5 style=" color: #0059b2; ">FOREX ACCOUNT</h5>
                                                <h5>       You have no live accounts</h5>
                                              </div>
                                        </div>

        <?php } ?>
        <?php
        $i=0;$n=0;
        foreach($accounts as $account) {?>
            <?PHP if(  $balances[$n] != ''){ ?>
        <div class="card round p-3 bg-white my-3 py-3">
            <div class="mt-2 p-1 d-flex ">
                <img src="assets/images/logo.svg" alt="Link 1 Icon" height="40px" width="40px">
                <div class="mx-5 w-50">
                    <p class="font-weight-bold">$names[$n]</p>
                    <p class="forex-font">FOREX <?php echo $account->account_id; ?></p>
                </div>
                <h3 class="text-end ml-auto">$equities[$n]
                <!--span class="forex-font">.03 USD</span -->    
                <img src="assets/images/svg/ic_moreVertical.svg" alt="404"></h3>
            </div>
        </div>
        <?php } } ?>
        <!--<div class="card round p-3 bg-white my-3 py-3">
            <div class="mt-2 p-1 d-flex ">
                <img src="assets/images/logo.svg" alt="Link 1 Icon" height="40px" width="40px">
                <div class="mx-5 w-50">
                    <p class="font-weight-bold">Ibrahim</p>
                    <p class="forex-font">FOREX 9190</p>
                </div>
                <h3 class="text-end ml-auto">28452<span class="forex-font">.03 USD</span><img src="assets/images/svg/ic_moreVertical.svg" alt="404"></h3>
            </div>
        </div>
        <div class="card round p-3 bg-white my-3 py-3">
            <div class="mt-2 p-1 d-flex ">
                <img src="assets/images/logo.svg" alt="Link 1 Icon" height="40px" width="40px">
                <div class="mx-5 w-50">
                    <p class="font-weight-bold">Forex Account</p>
                    <p class="forex-font">Your account opening request is currently under review</p>
                </div>
                <h3 class="text-end ml-auto">28452<span class="forex-font">.03 USD</span><img src="assets/images/svg/ic_moreVertical.svg" alt="404"></h3>
            </div>
        </div> -->
    </div>
    </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>

</html>