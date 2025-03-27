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
            <li class = "menu"><a href= "../html/register.html"> Register Now </a></li>
            <li class = "menu"><a href= ""> My Account </a></li>
            <li class = "menu"><a href= "../html/contact.html"> Contact Us </a></li>
            <li class = "menu"><a href= "../html/about.html"> About Us </a></li>
        
        </ul>
        <button class="log"><a href="../html/index.html">Login</a></button>
      
    </div><br>
    <div class="btn-group">
        <button class="button" type="button"><a href="../html/employer.html">For Employers</a></button>
        <button class="button" type="button"><a href="../html/forJobseekers.html">For Job Seekers</a></button>       
    </div>
<!------------------------------------------------------------------------------------------------------------>
<div class="headPara">
        <h1> Find work you'll love, fast.</h1>
        <p>The <font color="red">#1</font> job site to find <font color="red">best</font> , work from home, and  <font color="red"> flexible </font> job opportunities <font color="red">since 2019</font>  </p>

    </div>

    <div class="slide">        
    </div> <br><br><br>
 <!------------------------------------------------------------------------------------------------------------>   
    <form action="search.php" method="POST">
        <input type="text" name="search" id="searchBar" placeholder="" value="eg: Administrative Assistant.." maxlength="80" autocomplete="off" onMouseDown="active()" onBlur="inactive()"/>
        <input type="submit" name="submit-search" id="searchBtn" value="Search" />
    </form>

   <h3><center>Some of the jobs we offer:</center></h3>

    <div class= "job-container">
        <?php
            $sql = "SELECT * FROM job";
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
<hr> 
    <div class="companies">
        <h2>Our Top Employers</h2>
        <img class="comp" src="../images/employers.png">
    </div>
    <br><br><hr>


    <!--reviw-->
    <div class="comment-sec">
        <h2>Job-Seeker reviews about our website</h2>
       
    <div class="review-box">
        <div id="slide">
            <div class="card1">
                <div class="profile">
                    <img src="../images/1p.jpg">
                    <div>
                        <h3>-John Doe Smith, UK- </h3>
                        <p>Graphic Designer & Full-stack Developer</p>
                        
                    </div>
                    
                </div>
                <p>
                   "I found a job with higher pay and better benefits! My only regret is not becoming a GrabJobs member the first time I visited the site. You guys are awesome! Keep changing the world, one remote job at a time. You truly helped my life and opened new doors I didn't know existed."
                </p>
            </div>

        </div>
        <div class="sidebar">
           <img src="../images/up.jfif" id="uparrow">
           <img src="../images/down.jfif" id="downarrow">
        </div>

    </div>
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

