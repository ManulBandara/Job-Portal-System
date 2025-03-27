<?php
    include 'dbh.php';

?>
<html>
    <head>
        <title> GrabJobs </title>
        <link rel="stylesheet" href="../css/home.css">
        <link rel="stylesheet" href="../css/search.css">
        <script src="../js/home.js"></script>

              
    </head>
    <body>
        
    
    <div id="navbar">
        <ul class = "menu">
            <img class="logo" src="../images/logo.jpg" alt="Logo image" > 
            <li class = "menu"><a href= "../html/home.html"> Home </a></li>
            <li class = "menu"><a href= ""> Register Now </a></li>
            <li class = "menu"><a href= ""> My Account </a></li>
            <li class = "menu"><a href= "../html/contact.html"> Contact Us </a></li>
            <li class = "menu"><a href= "../html/about.html"> About Us </a></li>
        
        </ul>
        <button class="log"><a href="#">Login</a></button>
      
    </div><br>
    <div class="btn-group">
        <button class="button" type="button"><a href="">For Employers</a></button>
        <button class="button" type="button"><a href="../html/forJobseekers.html">For Job Seekers</a></button>       
    </div>
<!------------------------------------------------------------------------------------------------------------>

<h1> Apply Now!! </h1>
    
<div class= "job-container">
        <?php
            $title = mysqli_real_escape_string($conn,$_GET['title']);

            $sql = "SELECT * FROM job WHERE j_title='$title'";
            $result = mysqli_query($conn,$sql);
            $queryResults= mysqli_num_rows($result);

            if ($queryResults>0){
                while($row=mysqli_fetch_assoc($result)){
                    echo "<div class='job-box'>
                    <h3>".$row['j_title']."</h3>
                    <h3>".$row['j_type']."</h3>
                    <h3>".$row['j_salary']."</h3>
                    <h3>".$row['j_desc']."</h3>
                    </div>";
                }
            }
        ?>


    </div>
     

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