<?php
date_default_timezone_set("Asia/Jakarta");
include 'handshake.php';
include 'class.global.php'
?>

<!DOCTYPE html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jomolhari&family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">

    <title>DAILYMASTHEAD</title>

    <script>
    function category() {
    location.replace("http://localhost/wdone/category/")
    }
    function aboutus() {
    location.replace("http://localhost/wdone/about/")
    }
    </script>


    <style>
    body {
    align-items: center;
    margin: 0;
    padding: 0;
}
ul, .navbar {
        float: none;
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        margin-left: 95px;
        background-color: rgb(58,17,121);
        width: 1500px;
        height: 170px;
        position: relative;
        }
        
        li a, .dropbtn {
        float: left;
        position: relative;
        font-size: 100px;
        color: rgb(255, 255, 255);
        text-decoration: none;
        }
        
        li a:hover, .dropdown:hover .dropbtn {
        background-color: rgb(58,17,121);
        height: 150px;
        }
        
        li.dropdown {
        display: inline-block;
        }

        .dropdown-content {
        display: none;
        margin-right: auto;
        margin-left: auto;
        background-color: #f9f9f9;
        min-width: 500px;
        z-index: 1;
        }
        
        .dropdown-content a {
        color: rgb(255, 255, 255);
        text-align: center; 
        text-decoration: none;
        display: block;
        }
        
        .dropdown-content a:hover {background-color: #f1f1f1;}
        
        .dropdown:hover .dropdown-content {
        display: block;
        }

        .topbodcategory {
        font-family: 'Jomolhari', serif;
        font-size: 20px;
        color: #3A1179;
        margin-top: 30px;
        margin-left: 80px;
        transition: color 0.3s ease-in-out;
        cursor: pointer;
        text-decoration: none;
        border: none;
        height: 40px;
        background-color: rgb(0, 0, 0, 0);
        list-style-type: none;
        overflow: hidden;
        position: relative;
    }
    .topbodaboutus {
        font-family: 'Jomolhari', serif;
        font-size: 20px;
        color: #3A1179;
        margin-top: 30px;
        margin-left: 80px;
        transition: color 0.3s ease-in-out;
        cursor: pointer;
        text-decoration: none;
        border: none;
        height: 40px;
        background-color: rgb(0, 0, 0, 0);
    }
    .topbodcategory:hover {
        color: salmon;
    }
    .topbodaboutus:hover {
        color: salmon;
    }
    .topbod-container {
        width:1500px;
        height: 80px;
        display: flex;
        background-color: rgb(0, 0, 0, 0);
        z-index: 1;
    }
    .language {
        font-family: 'Jomolhari', serif;
        font-size: 20px;
        color: #3A1179;
        margin-top: 30px;
        margin-left: 900px;
        transition: color 0.3s ease-in-out;
        cursor: pointer;
        text-decoration: none;
        border: none;
        height: 40px;
        background-color: rgb(0, 0, 0, 0);
    }
    .language:hover {
        color: salmon;
    }

    .footer{
        width: 1500px;
        height: 300px;
        background-color:#3A1179;
        flex-direction: column;
        display: flex;
        margin-top: 18%;
        margin-left: auto;
        margin-right: auto;
    }
    .name{
        font-family: 'Jomolhari', serif;
        font-size: 60px;
        color: white;
    }
    .topbod {
        font-family: 'Jomolhari', serif;
        font-size: 20px;
        color: #3A1179;
        margin-top: 30px;
        margin-left: 80px;
    }
    .topbod-container {
        width:1500px;
        height: 90px;
        display: flex;
    }
    .language {
        font-family: 'Jomolhari', serif;
        font-size: 20px;
        color: #3A1179;
        margin-top: 30px;
        margin-left: 900px;
    }

    .body{
        width: 1500px;
        height: 1800px;
        margin-left: auto;
        margin-right: auto;
    }
    .footer{
        width: 1500px;
        height: 300px;
        background-color:#3A1179;
        flex-direction: column;
        display: flex;
        margin-left: auto;
        margin-right: auto;
    }
    .name{
        font-family: 'Jomolhari', serif;
        font-size: 60px;
        color: white;
    }
    .topbod {
        font-family: 'Jomolhari', serif;
        font-size: 20px;
        color: #3A1179;
        margin-top: 30px;
        margin-left: 80px;
        transition: color 0.3s ease-in-out;
    }
    .topbod:hover {
        color: salmon;
    }
    .topbod-container {
        width:1500px;
        height: 100px;
        display: flex;
    }
    .language {
        font-family: 'Jomolhari', serif;
        font-size: 20px;
        color: #3A1179;
        margin-top: 30px;
        margin-left: 900px;
    }
    .headingcontainer {
        width: 1500px;
        height: 100px;
        display: flex;
        background-color: white;
       
    }
    .heading {
        font-family: 'Josefin Sans', sans-serif;
        font-size: 40px;
        margin-top: 30px;
        margin-left: 70px;
        font-weight: bold;
    }
    .subheadingcontainer {
        width: 1500px; 
        height: 28px;
        display: flex;
    }
    .subheading1 {
        font-family: 'Josefin Sans', sans-serif;
        font-size: 15px;
        margin-top: 10px;
        margin-left: 70px;
        margin-right: 373px;
        font-weight: bold;
    }
    .subheading2 {
        font-family: 'Josefin Sans', sans-serif;
        font-size: 15px;
        margin-top: 10px;
        margin-left: 0px;
        margin-right: 498px;
        font-weight: bold;
    }
    .subheading3 {
        font-family: 'Josefin Sans', sans-serif;
        font-size: 15px;
        margin-top: 10px;
        margin-left: 0px;
        margin-right: auto;
        font-weight: bold;
    }
    .sublinecontainer {
        height: 2.4px;
        width: 1500px;
    }
    .subline{
        height: 2.4px;
        width: 400px;
        margin-left: 70px;
        margin-right: 0px;
        margin-top: 0px;
        background-color: black;
        display: block;
        float: left;
    }
    .subline2{
        height: 2.4px;
        width: 500px;
        margin-left: 80px;
        margin-top: 0px;
        background-color: black;
        display: block;
        float: left;
    }
    .subline3{
        height: 2.4px;
        width: 300px;
        margin-left: 80px;
        margin-top: 0px;
        background-color: black;
        display: block;
        float: left;
    }
    .latestbody {
        width: 400px;
        height: 1000px;
        margin-left: 70px;
        margin-top: 10px;
        display: block;
        float: left;
    }
    .trendingbody {
        width: 500px;
        height: 1300px;
        margin-left: 80px;
        margin-top: 10px;
        margin-right: 0px;
        display: block;
        float: left;
    }
    .videosbody {
        width: 300px;
        height: 1000px;
        margin-left: 80px;
        margin-top: 10px;
        margin-right: 0px;
        display: block;
        float: left;
    }
    .latestpic-container {
        width: 400px;
        height: 250px;
        margin: 0px;
        background-color: gray;
        display: block;  
        position: relative;
    }
    .latestpic {
        width: 400px;
        height: 250px;
    }
    .latestcontentbox {
        width: 400px;
        height: 100px;
        margin-top: 10px;
        margin-bottom: 50px;
        display: block;
    }
    .latestcontenttitle {
        font-family: 'Jomolhari', serif;
        font-size: 18px;
        font-weight: bold;
        transition: all 0.3ms ease-in-out;
    }
    .latestcontenttitle:hover {
        text-decoration: underline;
    }
    .typeofsportstext {
        font-family: 'Josefin Sans', serif;
        font-size: 18px;
        font-weight: bold;
        margin-top: 15px;
        margin-right: 0px;
        float: left;
        color: #3A1179;
        transition: color 0.3ms ease-in-out;
    }
    .typeofsportstext:hover{
        color: salmon;
    }
    .datepublished {
        font-family: 'Josefin Sans', serif;
        font-size: 16px;
        font-weight: 600;
        margin-left: 335px;
        margin-top: 15px;
        color: #3A1179;
        transition: color 0.3ms ease-in-out;
    }
    .datepublished:hover{
        color: salmon;
    }
    .trendingpic-container {
        width: 500px;
        height: 400px;
        margin: 0px;
        background-color: gray;
        display: block;
        position: relative;
    }
    .trendingpic {
        width: 500px;
        height: 400px;
    }
    .trendingcontentbox {
        width: 500px;
        height: 100px;
        margin-top: 10px;
        margin-bottom: 50px;
        display: block;
    }
    .trendingcontenttitle {
        font-family: 'Jomolhari', serif;
        font-size: 18px;
        font-weight: bold;
        transition: all 0.3ms ease-in-out;
    }
    .trendingcontenttitle:hover {
        text-decoration: underline;
    }
    .typeofsportstext2 {
        font-family: 'Josefin Sans', serif;
        font-size: 18px;
        font-weight: bold;
        margin-top: 15px;
        margin-right: 0px;
        float: left;
        color: #3A1179;
        transition: color 0.3ms ease-in-out;
    }
    .typeofsportstext2:hover{
        color: salmon;
    }
    .datepublished2 {
        font-family: 'Josefin Sans', serif;
        font-size: 16px;
        font-weight: 600;
        margin-left: 380px;
        margin-top: 15px;
        color: #3A1179;
        transition: color 0.3ms ease-in-out;
    }
    .datepublished2:hover{
        color: salmon;
    }
    .datepublished21 {
        font-family: 'Josefin Sans', serif;
        font-size: 16px;
        font-weight: 600;
        margin-left: 400px;
        margin-top: 15px;
        color: #3A1179;
        transition: color 0.3ms ease-in-out;
    }
    .datepublished21:hover{
        color: salmon;
    }
    .videospic-container {
        width: 300px;
        height: 150px;
        margin: 0px;
        background-color: gray;
        display: block;
        position: relative;
    }
    .videospic {
        width: 300px;
        height: 150px;
    }
    .videoscontentbox {
        width: 300px;
        height: 100px;
        margin-top: 10px;
        margin-bottom: 10px;
        display: block;
    }
    .videoscontenttitle {
        font-family: 'Jomolhari', serif;
        font-size: 18px;
        font-weight: bold;
        transition: all 0.3ms ease-in-out;
    }
    .videoscontenttitle:hover {
        text-decoration: underline;
    }
    .latestarrow-container {
        width: 40px;
        height: 40px;
        margin-left: 180px;
        margin-top: 5px;
        float: left;
    }
    .latestarrowimg {
        width: 40px;
        height: 40px;
    }
    .latestarrowbox {
        width: 400px;
        height: 50px;
        background-color: #3A1179;
        display: block;
    }
    .trendingarrow-container {
        width: 40px;
        height: 40px;
        margin-left: 230px;
        margin-top: 5px;
        float: left;
    }
    .trendingarrowimg {
        width: 40px;
        height: 40px;
    }
    .trendingarrowbox {
        width: 500px;
        height: 50px;
        background-color: #3A1179;
        display: block;
    }
    .videosarrow-container {
        width: 40px;
        height: 40px;
        margin-left: 130px;
        margin-top: 5px;
        float: left;
    }
    .videosarrowimg {
        width: 40px;
        height: 40px;
    }
    .videosarrowbox {
        width: 300px;
        height: 50px;
        background-color: #3A1179;
        display: block;
    }

    .footname{
        font-family: 'Jomolhari', serif;
        font-size: 30px;
        color: white;
        margin-top: 40px;
        margin-left: 80px;
    }
    .foot-container {
        display: flex;
        align-items: center;
    }
    .linefoot {
        width: 1px;
        height: 70px;
        background-color: white;
        position: relative;
        margin-top: 30px;
        margin-left: 750px;
    }
    .linefeet {
        width: 1390px;
        height: 1px;
        background-color: white;
        margin-top: 10px;
        margin-left: 50px;
    }
    .sosmed {
        width: 30px;
        height: 30px;
        margin-top: 25px;
        margin-left: 40px;
    }
    .smth-container {
            display: flex;
            align-items: center;
            margin-top: 15px;
    }
    .smth {
        font-family: 'Jomolhari', serif;
        font-size: 12px;
        color: white;
        margin-top: 15px;
        margin-left: 80px;
    }
    .smth2 {
        font-family: 'Jomolhari', serif;
        font-size: 12px;
        color: white;
        margin-top: 15px;
        margin-left: 35px;
    }
    .rights{
        font-family: 'Jomolhari', serif;
        font-size: 12px;
        color: white;
        margin-top: 85px;
        margin-left: 80px;
    }
</style>

<body style="margin: 0; left: 0; font-family: 'Jomolhari', serif;">

<ul>
    <li><a href="http://localhost/wdone/home/"
        style="float: left; margin-left: 17%;">DAILY MASTHEAD</a></li>
        </ul>

        <!--end of nav bar-->
    <!-- nav bar ends here --> 

    <div class="body">
        <div class="topbod-container">
            <button onclick="category()" class="topbodcategory">CATEGORY</button>
            <button onclick="aboutus()" class="topbodaboutus">ABOUT US</button>
            <button class="language">LANGUAGE</button>
        </div>
        <div class="headingcontainer">
            <div class="heading">SPORTS</div>
        </div>
        <div class="subheadingcontainer">
            <div class="subheading1">LATEST NEWS</div>
            <div class="subheading2">TRENDING</div>
            <div class="subheading3">VIDEOS</div>
        </div>
        <div class="sublinecontainer">
            <div class="subline"></div>
            <div class="subline2"></div>
            <div class="subline3"></div>
        </div>
     
        <div class="latestbody">
        <?php
                    $db = new db();
                    $db->q("SELECT * FROM latest");
                    $allarticles = $db->m();
                    foreach ($allarticles as $eacharticles) {
                        echo '<div class="latestpic-container">';
                        echo '<img class="latestpic" src="'.$eacharticles['image'].'">';
                        echo '</div>';
                        echo '<div class="latestcontentbox">';
                        echo '<div class="latestcontenttitle">';
                        echo $eacharticles['title'];
                        echo '</div>';
                        echo '<div class="typeofsportstext">';
                        echo $eacharticles ['type'];
                        echo '</div>';
                        echo '<div class="datepublished">';
                        echo $eacharticles['date'];
                        echo '</div>';
                        echo '</div>';
                    }
                    $db->rc();
                    $db = null;
                    ?>

        <div class="latestarrowbox">
            <div class="latestarrow-container">
                <img class="latestarrowimg" src="arrow.png">
            </div>
        </div>
    </div>


    <div class="trendingbody">
    <?php
            $db = new db();
            $db->q("SELECT * FROM trending");
            $allarticles = $db->m();
            foreach ($allarticles as $eacharticles) {
            echo '<div class="trendingpic-container">';
            echo '<img class="trendingpic" src="'.$eacharticles['image'].'">';
            echo '</div>';
            echo '<div class="trendingcontentbox">';
            echo '<div class="trendingcontenttitle">';
            echo $eacharticles['title'];
            echo '</div>';
            echo '<div class="typeofsportstext2">';
            echo $eacharticles ['type'];
            echo '</div>';
            echo '<div class="datepublished2">';
            echo $eacharticles['date'];
            echo '</div>';
            echo '</div>';
            }
            $db->rc();
            $db = null;
            ?>

        <div class="trendingarrowbox">
            <div class="trendingarrow-container">
                <img class="trendingarrowimg" src="arrow.png">
            </div>
        </div>
    </div>


    <div class="videosbody">
    <?php
            $db = new db();
            $db->q("SELECT * FROM video");
            $allarticles = $db->m();
            foreach ($allarticles as $eacharticles) {
            echo '<div class="videospic-container">';
            echo '<img class="videospic" src="'.$eacharticles['video'].'">';
            echo '</div>';
            echo '<div class="videoscontentbox">';
            echo '<div class="videoscontenttitle">';
            echo $eacharticles['title'];
            echo '</div>';
            echo '</div>';
            }
            $db->rc();
            $db = null;
            ?>

       
        <div class="videosarrowbox">
            <div class="videosarrow-container">
                <img class="videosarrowimg" src="arrow.png">
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="foot-container">
            <div class="footname">DAILY MASTHEAD</div>
            <div class="linefoot"></div>
            <div>
                <img class="sosmed" src="instalogo.png" alt="Avatar">
                <img class="sosmed" src="fblogo.webp" alt="Avatar">
                <img class="sosmed" src="twitter.avif" alt="Avatar">
                <img class="sosmed" src="gmail-icon-free-png.webp" alt="Avatar">
            </div>
        </div>
        <div class="linefeet"></div>
        <div class="smth-container">
            <div class="smth">Terms of Use</div>
            <div class="smth2">Privacy Policy</div>
            <div class="smth2">Cookie Settings</div>
            <div class="smth2">Ad Choices</div>
            <div class="smth2">Accesibility & CC</div>
            <div class="smth2">Transcripts</div>
        </div>
        <div class="rights">© 2023 Daily Masthead. All Rights Reserved.</div>
    </div>
</body>
</html>