<?php
require_once('config.php');
include('donation.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <title> Checkout | Team Antariksh </title>
</head>

<body>
    <form action="charge.php" method="POST">
        <script
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key=<?php echo $api_key_id ?> 
            data-amount=<?php echo $amount*100 ?> 
            data-currency="INR"
            data-buttontext="RazorPay" 
            data-name="Team Antariksh"
            data-description="Skies and Beyond"
            data-image="./assets/img/universe/Logos.jpg"
            data-prefill.name=<?php echo $name ?>
            data-prefill.email=<?php echo $email ?>
            data-prefill.contact=<?php echo $contact ?>
            data-theme.color="#22292c"
        >
    </script>
    <input type="hidden" custom="Hidden Element" name="hidden">
    </form>
</body>
</html>