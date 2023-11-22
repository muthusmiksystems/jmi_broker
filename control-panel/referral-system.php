<!DOCTYPE html>
<html>

<head>
    <?php include("includes/style.php"); ?>
    <style>
        .input-container input {
            flex: 1;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #342E59; /* Border color for the input */
        }

        .input-container button {
            margin-left: 10px;
            background-color: #FFFFFF33; /* Background color for the button */
            border: none;
            padding: 10px;
            cursor: pointer;
            width: 150px; /* Set the width of the button as needed */
        }

        .body {
            background-color: #F0F0;
        }

        .border-bottom-80 {
            border-bottom: 1px solid #dee2e6;
            /* or your preferred border color */
            height: 80%;
        }

        .round-bullets ul {
            list-style-type: none;
            padding: 0;
        }

        .round-bullets li:before {
            content: "\2022"; /* Unicode character for a bullet point */
            color: #342E59; /* Color of the bullet point */
            font-size: 16px; /* Size of the bullet point */
            margin-right: 8px; /* Spacing between the bullet point and the text */
        }

        .round-bullets {
            margin-top: 10px; /* Adjust the top margin as needed */
            margin-bottom: 10px; /* Adjust the bottom margin as needed */
        }

        .round-bullets li {
            margin-bottom: 8px; /* Adjust the margin between list items as needed */
        }

        .input-container {
            display: flex;
            margin-top: 20px; /* Add space between the bullets and the input field */
        }

        .input-container input {
            flex: 1;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #342E59;
        }

        .input-container button {
            margin-left: 10px;
            background-color: #FFFFFF33;
            border: none;
            padding: 10px;
            cursor: pointer;
            width: 150px; /* Set the width of the button as needed */
        }
    </style>
</head>

<body>
    <div>
    <div class="d-flex">
        <h2 class="fs-4">Control Panel|Referral System (IB) Overview</h2>
        <div class="d-flex ml-auto"><img src="assets/images/svg/account_circle.svg" class="account_circle" alt="">
            <p class="mt-1 ms-2">Welcome,  <?php echo $_SESSION['sessionusername']; ?></p>
        </div>
    </div>

        <div class="card p-3 bg-white my-3 py-5 w-auto">
            <h3 style="font-weight: 600; font-size: 25px; font-family: 'Poppins', sans-serif; line-height: 45px; color: #342E59;">What's "My Referral Link"?</h3>
            <p >
                My Referral Link is a unique link generated by our system that identifies who you are. This way, we can give you credit when a friend or colleague becomes a Constant Contact customer. Here's how you can use your unique referral link:

                <ul class="round-bullets">
                    <li>Copy and send the link in a regular personal email.</li>
                    <li>Include the link in your email signature.</li>
                    <li>Place the link on your website for your site visitors.</li>
                </ul>

                No matter how you share, be sure to have your friend click on your specific link so we can make sure that you get the credit. If they then become Constant Contact customers, you both get account credits!
            </p>

            <div class="input-group mb-3 mt-4">
                <input type="text" class="form-control border" placeholder="https://www.jmibrokers.com/en?myref=10441">
                <button class="btn btn-success custom-button bg-primary" type="submit">Copy Link</button>
            </div>

        </div>

    </div>
</body>

</html>