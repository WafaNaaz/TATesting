<?php
require_once('./config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <title> Donation Form | Team Antariksh </title>

<style>
    .dontext{
    text-align: center;
    }  

    ol,ul {
    list-style:none;
    margin:0px;
    padding:0px;
    }
    blockquote,q {
    quotes:none;
    }
    blockquote:before,blockquote:after,q:before,q:after {
    content:'';
    content:none;
    }
    table {
    border-collapse:collapse;
    border-spacing:0;
    }

    /* start editing from here */
    a {
    text-decoration:none;
    }
    .txt-rt {
    text-align:right;
    }/* text align right */
    .txt-lt {
    text-align:left;
    }/* text align left */
    .txt-center {
    text-align:center;
    /*-- W3Layouts --*/ 
    }/* text align center */
    .float-rt {
    float:right;
    }/* float right */
    .float-lt {
    float:left;
    }/* float left */
    .clear {
    clear:both;
    }/* clear float */
    .pos-relative {
    position:relative;
    }/* Position Relative */
    .pos-absolute {
    position:absolute;
    }/* Position Absolute */
    .vertical-base {  
    vertical-align:baseline;
    }/* vertical align baseline */
    .vertical-top { 
    vertical-align:top;
    }/* vertical align top */
    nav.vertical ul li {  
    display:block;
    }/* vertical menu */
    nav.horizontal ul li {  
    display: inline-block;
    }/* horizontal menu */
    img {
    max-width:100%;
    }

    h1.header-agileits {
        text-align: center;
        font-size: 50px;
        font-weight: normal;
        padding-top: 35px;
        text-transform: uppercase;
        color: #fff;
        letter-spacing: 8px;
    }
    p.header-agileits {
    font-size: 17px;
        font-weight: normal;
        line-height: 35px;
        margin-bottom: 45px;
        color: #dcdcdc;
        text-align: center;
    }
    .content-w3ls {
        width: 75%;
        margin: 20px auto 50px;
        background-color: rgba(3, 9, 12, 0.36);
        padding: 55px 50px;
        border-radius: 20px;
    }
    .form-control {
        padding-bottom: 35px;
    }
    .form-control:nth-child(9) {
    padding-bottom:0;
    padding-top: 16px;
    }
    span {
        color: red;
    }
    label.header {
        font-size: 20px;
        width: 300px;
        font-weight: 500;
        color: #fff;
        text-align: justify;
        letter-spacing: 2px;
        text-transform: capitalize;
        display: inline-block;
        margin-bottom: 10px;
        
    float: left;
        width: 40%;
    }
    input#name,input#email,input#bill,input#usrtel,textarea#message {
    font-family: 'Exo 2', sans-serif;
        border: 1px solid #fff;
        color: #fff;
        text-align: justify;
        outline: none;
        letter-spacing: 1px;
        font-size: 15px;
        font-weight: normal;
        background-color: rgba(82, 56, 76, 0.15);
    float: right;
    }
    input#name,input#email,input#bill,input#usrtel {
    height:45px;
    padding:0 15px;
    width:54.5%;
    }
    label.enquiry {
    font-size: 20px;
        font-weight: 500;
        color: #fff;
        float: left;
        text-align: justify;
        letter-spacing: 2px;
        text-transform: capitalize;
        display: inline-block;
        margin-bottom: 25px;
    }
    textarea#message {
    height:150px;
    padding:15px;
    width:54.5%;
    }
    input::-webkit-input-placeholder {
    color:#c1c1c1!important;
    }
    
    input:-moz-placeholder { /* Firefox 18- */
    color:#c1c1c1!important;  
    }
    
    input::-moz-placeholder {  /* Firefox 19+ */
    color:#c1c1c1!important;  
    }
    
    input:-ms-input-placeholder {  
    color:#c1c1c1!important;  
    }
    textarea::-webkit-input-placeholder {
    color:#c1c1c1!important;
    }
    
    textarea::-moz-placeholder { /* Firefox 18- */
    color:#c1c1c1!important;  
    }
    
    textarea::-moz-placeholder {  /* Firefox 19+ */
    color:#c1c1c1!important;  
    }
    
    textarea::-ms-input-placeholder {  
    color:#c1c1c1!important;  
    }
    .btn{
    float: right;
    }

    .reset {
    background-color: #f15f22;
        width:20%;
    float:right;
    margin-right:2px;
    margin-left:5px;
        height: 50px;
        border: none;
        cursor: pointer;
        color: #fff;
    letter-spacing:1px;
        outline: none;
        font-size:17px;
        font-weight: normal;
        text-transform: uppercase;
        transition: all 0.5s ease-in-out;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
    } 

    p.copyright {
        font-size: 16px;
        text-align: center;
        color: #fff;
        padding-bottom: 50px;
    }
    p.copyright a {
    color:#22f1ef;
    }
    p.copyright a:hover {
    color:#fff;
    }
    p.be-wls {
        font-size: 15px;
        color: #fff;
        margin-bottom: 17px;
    }
    .agile-w3ls {
        padding-left: 270px;
    }
    /*-- responsive design --*/
    @media (max-width: 1366px) {
    .content-w3ls {
        width: 45%;
    }
    .agile-w3ls {
        padding-left: 326px;
    }
    }
    @media (max-width: 1280px) {
    .content-w3ls {
        width: 51%;
    }
    .agile-w3ls {
        padding-left: 304px;
    }
    }
    @media (max-width: 1080px) {
    h1.header-agileits {
    font-size:40px;
    padding-top:25px;
    }
    .content-w3ls {
        width: 58%;
    }
    .agile-w3ls {
        padding-left: 250px;
    }
    }
    @media (max-width: 1024px) {
    .agile-w3ls {
        padding-left: 237px;
    }
    }

    @media (max-width: 991px) {
    .content-w3ls {
        width: 62%;
    }
    .agile-w3ls {
        padding-left: 305px;
    }
    }
    @media (max-width: 800px) {
    .agile-w3ls {
        padding-left: 245px;
    }
    .content-w3ls {
        width: 77%;
    }
    }
    @media (max-width: 768px) {
    .content-w3ls {
        width: 80%;
        padding: 28px 28px;
    }
    label.header {
        width: 38%;
    }
    .agile-w3ls {
        padding-left: 230px;
    }
    }
    @media (max-width: 736px) {
    .content-w3ls {
        width: 85%;
    }
    .agile-w3ls {
        padding-left: 245px;
    }
    }
    @media (max-width: 667px) {
    label.header {
        float: none;
        width: 100%;
    }
    input#name, input#email, input#bill, input#usrtel, textarea#message {
        float: none;
    }
    .content-w3ls {
        width: 66%;
    }
    input#name, input#email, input#bill, input#usrtel,textarea#message {
        width: 92.5%;
    }
    .form-control {
        padding-bottom: 20px;
    }
    label.header {
        font-size: 18px;
    }
    .agile-w3ls {
        padding-left: 0px;
    }
    .register {
        width: 28%;
    }
    }
    @media (max-width: 640px) {
    h1.header-agileits {
        font-size: 35px;
        padding-top: 20px;
    }
    input#name, input#email, input#bill, input#usrtel,textarea#message {
        width: 92%;
    }
    }
    @media (max-width: 600px) {
    .content-w3ls {
        width: 68%;
    }
    }
    @media (max-width: 568px) {
    .content-w3ls {
        width:74%;
    } 
    }
    @media (max-width: 480px) {
    h1.header-agileits {
        font-size: 30px;
        padding-top: 18px;
    }
    input#name, input#email, input#bill, input#usrtel,textarea#message {
        width: 90.5%;
    }
    }
    @media (max-width: 414px) {
    input#name, input#email, input#bill, input#usrtel,textarea#message {
        width: 88.5%;
    }
    .register {
        width: 38%;
    height:40px;
    }
    p.copyright {
        font-size: 15px;
        line-height: 28px;
        padding-bottom: 24px;
    }
    }
    @media (max-width: 384px) {
    input#name, input#email, input#bill, input#usrtel, textarea#message {
        width: 88%;
    }
    }
    @media (max-width: 320px) {
    h1.header-agileits {
        font-size: 25px;
        padding-top: 18px;
        letter-spacing: 5px;
    }
    input#name, input#email, input#bill, input#usrtel {
        height: 40px;
        padding: 0 10px;
    }
    .content-w3ls {
        width: 80%;
        padding: 16px 16px;
    }
    input#name, input#email, input#bill, input#usrtel, textarea#message {
        width: 91%;
    font-size: 14px;
    }
    textarea#message {
        height: 100px;
        padding: 10px;
    }
    .register {
    font-size:15px;
    }
    }
</style>
</head>
<body>
<div class="content-w3ls">
  <div class="form-w3layouts">
    <form action="checkout.php" method="post">
      <div class="form-control"> 
        <label class="header">Name <span>*</span> </label>
        <input type="text" id="name" name="Name" placeholder="Your Name" title="Please enter your Full Name" required="">
        <div class="clear"></div>
      </div>
    
       <div class="form-control"> 
        <label class="header">Email <span>*</span> </label>
        <input type="email" id="email" name="EMAIL" placeholder="mail@example.com" title="Please enter a Valid Email Address" required="">
        <div class="clear"></div>
      </div>    

      <div class="form-control">  
        <label class="header">Phone Number <span>*</span> </label>  
        <input type="tel" id="usrtel" name="MOBILE_NO" placeholder="Your Phone Number" title="Please enter Your Phone Number" required="">
        <div class="clear"></div>
      </div>  

      <div class="form-control">  
        <label class="header">Donation Amount <span>*</span> </label>  
        <input type="Number" id="bill" name="TXN_AMOUNT" placeholder="Enter Amount (in Rs.)" title="Please Enter Your Amount" required="">
        <div class="text-group__ft" data-animate-in="up" data-animate-in-delay="900">
            <input type="submit" class="register btn" value="Send">
        </div>
        <div class="clear"></div>
    </form>
    <?php
    if (isset($_POST['Name'])){
        $name = $_POST['Name'];
    }
    if (isset($_POST['EMAIL'])){
        $email = $_POST['EMAIL'];
    }
    if (isset($_POST['MOBILE_NO'])){
        $contact = $_POST['MOBILE_NO'];
    }
    if (isset($_POST['TXN_AMOUNT'])){
        $amount = $_POST['TXN_AMOUNT'];
        //$amount= $amount*100;
    }
    ?>

    
</body>
</html>