<?php session_start() ;
error_reporting(3);?>
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
    <title>JMI | Control Panel</title>
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <?php include("includes/copy-trade.php") ?>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
                <div class="d-flex">
                    <h2 class="fs-4"><?php echo $lang['copy_trade']?></h2>
                    <div class="d-flex ms-auto"><img src="../assets/images/svg/account_circle.svg" class="account_circle" alt="">
                        <p class="mt-1 ms-2"><?php echo $lang['welcome1'] ?>, <?php echo isset($_SESSION['sessionusername']) ? $_SESSION['sessionusername'] :"" ?></p>
                    </div>
                </div>
                <div class="bg-white mt-4 p-5 rounded-3">
                <form method="post" action='<?php echo $siteurl."cpanel/includes/post-copy-trade.php" ?>'>
                    <div class="row border-0">
                        <div class="col border-0">
                            <label for=""><?php echo $lang['copyFrom']?></label>
                            <select class="form-select mt-2" id="sel1" name="copy_from">
                            <option value="" disabled selected >- Select -</option>
                                                <?php 
                                                $acctname = "";
                                                foreach($accounts as $account) { 
                                                    if($account['account_type'] == 1)
                                                    {
                                                        $acctname = "Individual Account";
                                                    }
                                                    else
                                                    {
                                                        $acctname = "IB Account";
                                                    } ?>
                                                <option value="<?php echo $account['account_id'] ?>" ><?php echo $account['account_id'].' | '. $acctname ?> </option>
                                                <?php } ?>
                                                <option id="otheraccount" value="other">Other</option>
                                                
                            </select>
                            <input type="number" class="form-control hidden" name="other_account" id="other_account" placeholder="Account Number" style="display:none" />
                        </div>
                        <div class="col border-0">
                            <label for=""><?php echo $lang['copyTo']?></label>
                            <select class="form-select mt-2" id="sel1" name="copy_to">
                            <option value="" disabled selected >- Select -</option>
                            <?php 
                                                $acctname = "";
                                                foreach($accounts as $account) { 
                                                    if($account['account_type'] == 1)
                                                    {
                                                        $acctname = "Individual Account";
                                                    }
                                                    else
                                                    {
                                                        $acctname = "IB Account";
                                                    } ?>
                                                <option value="<?php echo $account['account_id'] ?>" ><?php echo $account['account_id'].' | '.$acctname ?> </option>
                                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row border-0 mt-4">
                        <div class="col border-0">
                            <label for=""><?php echo $lang['copyPercentage']?>:</label>
                            <input type="number" class="form-control border rounded-3 mt-2" placeholder="0.00" name="percentage">
                        </div>
                        <div class="col border-0">
                            <label for=""><?php echo $lang['accountPassword1']?>:</label>
                            <input type="password" class="form-control border rounded-3 mt-2" placeholder="***********"
                                name="password">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something"
                                checked required>
                            <label class="form-check-label mt-1" for="check1"><?php echo $lang['iAgreeTerms1']?></label>
                        </div>
                    </div>
                
                <input type="submit" class="btn custom-button text-light w-25 mt-4" /> 
                </form>
                </div>
                <div >
                    <h4 class="fs-4 mt-3"> <?php echo $lang['linked_copy_trade']?></h4>
                    <table class="class='gap-3 bg-white table mt-3'">
                    <thead>
                        <tr>
                                <td>#</td>
                                <td><?php echo $lang['copy_from']?></td>
                                <td><?php echo $lang['copy_to']?></td>
                                <td><?php echo $lang['copy_percentage']?></td>
                                <td><?php echo $lang['status']?></td>
                                <td><?php echo $lang['action']?></td>
                            </tr>
                        </thead>
                        <tbody>
    <?php $i=1; ?>
    <?php foreach ($copy_trades as $account => $accountvalue) { ?>
        <tr>
            <td> <?php echo $i; ?> </td>
            <td> <?php echo $accountvalue['copy_from'] ?> </td>
            <td> <?php echo $accountvalue['copy_to'] ?> </td>
            <td> <?php echo $accountvalue['percentage'] ?> </td>
            <td class="<?php if($accountvalue['status'] == 0) echo 'text-danger'; else if($accountvalue['status'] == 1) echo 'text-success'; ?>">
                <?php
                    if ($accountvalue['status'] == 0) {
                        echo 'Pending';
                    } elseif ($accountvalue['status'] == 1) {
                        echo 'Copying';
                    } elseif ($accountvalue['status'] == 8) {
                        echo 'Canceling';
                    } elseif ($accountvalue['status'] == 9) {
                        echo 'Cancelled';
                    }
                ?>
            </td>
            <?php if ($accountvalue['status'] !== 8 && $accountvalue['status'] !== 9) { ?>
                <td>  <form action="includes/delete-copy-trade.php?id= <?php echo $accountvalue['id']; ?>" method="post" onsubmit="return confirmDelete()">
                   
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form></td>
            <?php } else { ?>
                <td></td>
            <?php } ?>
        </tr>
        <?php $i++; ?>
    <?php } ?>
</tbody>
                        </table>
                </div>

            </div>
        </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); 
    if (isset($_SESSION['copy_trade_meesage'])) {
        echo '<script>alert("' . $_SESSION['copy_trade_meesage'] . '");</script>';
        unset($_SESSION['copy_trade_meesage']);

    }?>
</body>
<script>

function confirmDelete() {
var result = confirm("Are you sure you want to cancel this copy trade, You can't undo this?");

if (result) {
        return true;
    } else {
        return false;
    }
}

</script>
</html>