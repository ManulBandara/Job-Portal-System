<?php
    include 'dbh.php';

?>

<html>
    <head>
        <title> GrabJobs </title>
        <link rel="stylesheet" type="text/css" href="../css/home.css">
        <link rel="stylesheet" type="text/css" href="../css/contact.css">
        <script src="../js/home.js"></script>
              
    </head>
    <body>
        
    
    <div id="navbar">
        <ul class = "menu">
            <img class="logo" src="../images/logo.jpg" alt="Logo image" > 
            <li class = "menu"><a href= "../html/home.html"> Home </a></li>
            <li class = "menu"><a href= ""> Register Now </a></li>
            <li class = "menu"><a href= ""> My Account </a></li>
            <li class = "menu"><a href= "#"> Contact Us </a></li>
            <li class = "menu"><a href= "../html/about.html"> About Us </a></li>
        
        </ul>
        <button class="log"><a href="#">Login</a></button>
      
    </div><br>

<!------------------------------------------------------------------------------------------------------------>

<?php

    $full_name = $_POST['full_name'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $org = $_POST['org'];

    //database connection
    $conn = mysqli_connect('localhost','root', '', 'grabjobsdb');
    if($conn->connect_error){
        die('connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contact(full_name, phoneno, email, org)
            values(?, ?, ?, ?)");
        $stmt->bind_param("siss", $full_name, $phoneno, $email, $org );
        $stmt->execute();
        echo "Thank you for your response...";
        $stmt->close();
        $conn->close();
    }
?>

<!------------------------------------------------------------------------------------------------------------>

<footer>
        <div class="footer-content">
            <h3>GrabJobs &copy;</h3>
            <p> GrabJobs is the world's #1 online job seeking platform that helps job seekers to find jobs and helps the employers to find the best candidates.we got over 10M jobs from companies al over the world</p>
            <img class="logo1" src="../images/logo.jpg">
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; <a href="#">GrabJobs.inc 2021 | All rights reserved</a>  </p>                  
        </div>
    </footer>


</body>
</html>