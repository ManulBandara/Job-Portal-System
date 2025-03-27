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


    <h1> Tell Us What You Are Looking for</h1>
    <br>

    <div class="job-container">
        <?php
          if(isset($_POST['submit-search'])){
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM job WHERE j_title LIKE '%$search%' OR j_type LIKE '%$search%' OR j_salary LIKE '%$search%'";
            $result = mysqli_query($conn,$sql);
            $queryResult = mysqli_num_rows($result);

            echo "There are ".$queryResult." results matched your search!";

            if($queryResult>0){
                while($row= mysqli_fetch_assoc($result)){
                    echo "<a href='job.php?title=".$row['j_title']."'><div class='job-box'>
                    <h3>".$row['j_title']."</h3>
                    <h3>".$row['j_type']."</h3>
                    <h3>".$row['j_salary']."</h3>
                    <h3>".$row['j_desc']."</h3>
                    </div></a>"; 

                }
            }else{
                echo "There are no results matching your search!";
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