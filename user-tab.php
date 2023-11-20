<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Tab</title>
    <?php include("includes/style.php"); ?>

    <style>
        .tab-text {
            color: #0342ab !important;
            font-size: 12px !important;
        }

        .tab-text.active {
            border-bottom: 2px solid #0342ab !important;
            background: none !important;
        }

        .thead{
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="bg-white py-3 my-3">
        <ul class="nav nav-tabs d-flex w-100" id="myTabs">
            <li class="nav-item">
                <a class="nav-link active tab-text border-0 px-2" id="tab1-tab" data-toggle="tab" href="#tab11"
                    style="width:100%;">Forex</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tab-text border-0 px-2" id="tab2-tab" data-toggle="tab" href="#tab12"
                    style="width:100%;">Stock</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tab-text border-0 px-2" id="tab3-tab" data-toggle="tab" href="#tab13"
                    style="width:100%;">Indices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tab-text border-0 px-2" id="tab3-tab" data-toggle="tab" href="#tab13"
                    style="width:100%;">Commodities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tab-text border-0 px-2" id="tab3-tab" data-toggle="tab" href="#tab13"
                    style="width:100%;">Cyptro</a>
            </li>
        </ul>

        <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tab11">
                <table class="table table-striped">
                    <thead class="thead">
                        <tr>
                            <th>Live Press</th>
                            <th>Bid</th>
                            <th>Ask</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>EURUSD</td>
                            <td><img src="assets/images/svg/call_made_blue.svg" alt="404"> 1.1018</td>
                            <td><img src="assets/images/svg/call_made_yellow.svg" alt="404"> 1.1018</td>
                        </tr>
                        <tr>
                            <td>EURUSD</td>
                            <td><img src="assets/images/svg/call_made_blue.svg" alt="404"> 1.1018</td>
                            <td><img src="assets/images/svg/call_made_yellow.svg" alt="404"> 1.1018</td>
                        </tr>
                        <tr>
                            <td>EURUSD</td>
                            <td><img src="assets/images/svg/call_made_blue.svg" alt="404"> 1.1018</td>
                            <td><img src="assets/images/svg/call_made_yellow.svg" alt="404"> 1.1018</td>
                        </tr>
                        <tr>
                            <td>EURUSD</td>
                            <td><img src="assets/images/svg/call_made_blue.svg" alt="404"> 1.1018</td>
                            <td><img src="assets/images/svg/call_made_yellow.svg" alt="404"> 1.1018</td>
                        </tr>
                        <tr>
                            <td>EURUSD</td>
                            <td><img src="assets/images/svg/call_made_blue.svg" alt="404"> 1.1018</td>
                            <td><img src="assets/images/svg/call_made_yellow.svg" alt="404"> 1.1018</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="tab12">
                <h3>Content for Tab 2</h3>
                <p>This is the content of Tab 2.</p>
            </div>
            <div class="tab-pane fade" id="tab13">
                <h3>Content for Tab 3</h3>
                <p>This is the content of Tab 3.</p>
            </div>
            <div class="tab-pane fade" id="tab14">
                <h3>Content for Tab 3</h3>
                <p>This is the content of Tab 3.</p>
            </div>
            <div class="tab-pane fade" id="tab15">
                <h3>Content for Tab 3</h3>
                <p>This is the content of Tab 3.</p>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>