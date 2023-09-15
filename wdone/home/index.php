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
</head>
<title>DAILYMASTHEAD</title>

<script>
    function category() {
    location.replace("http://localhost/wdone/category/")
    }
    function aboutus() {
    location.replace("http://localhost/wdone/about/")
    }
    function article() {
    location.replace("http://localhost/wdone/article/")
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
    .body{
        width: 1500px;
        height: 2000px;
        margin-left: auto;
        margin-right: auto;
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

    .homecontainer {
        width: 1500px;
        height: 2500px
    }

    .column-container{
        width:1500px;
        height: 1000px;
        display: flex;
        background-color: white;
    }


    .column1 {
        width: 320px;
        height: 1000px;
        background-color:white;
        margin-left: 80px;
    }
    .category {
        font-family: 'Josefin Sans', sans-serif;
        font-size: 15px;
        margin-top: 10px;
        color:black;
        cursor: pointer;
    }
    img.picture {
        width: 300px;
        height: 200px;
        margin-top: 5px;
    }

    .heading {
        font-family: 'Jomolhari', serif;
        font-size: 20px;
        color:black;
        margin-right: 10px;
        cursor: pointer;
    }

    text-decoration: none;
        border: none;

    .date {
        font-family: 'Jomolhari', serif;
        font-size: 12px;
        color:#707070;
        margin-top: 5px;
        margin-right: 10px;
        cursor: pointer;
    }

    .column2 {
        width: 680px;
        height: 900px;
        margin-top: 10px;
        margin-left: 10px;
        text-align: center;
    border: 1px solid rgb(20, 20, 20);
    }
    .containerbig{
        width: 680px;
        height: 1000px;
        background-color:white;
    }
    img.bigpic {
        width: 680px;
        height: 500px;
    }
    .bighead {
        font-family: 'Jomolhari', serif;
        font-size: 35px;
        color:black;
        margin-top: 25px;
        margin: 20px 10px;
    }
    .bigdesc {
        font-family: 'Jomolhari', serif;
        font-size: 15px;
        color:black;
        margin-top: 25px;
        margin: 50px 10px;
    }
    .bigdesc-container {
        width: 680px;
        height: 80px;
        display: flex;
        background-color: white;
    }
    .bighead-container {
        width: 680px;
        height: 200px;
        display: flex;
        background-color:white;
    }

    .column3 {
        width: 320px;
        height: 1000px;
        background-color: white;
        margin-left: 25px;
    }

    .line-container {
        width: 1500px;
        height: 100px;
        background-color:  rgb(0, 0, 0, 0);
        margin-top: 100px;
        display: flex;
    }
    .linebod1 {
        width: 410px;
        height: 3px;
        background-color: #3B0096;
        margin-top: 43px ;
        margin-left: 70px;
    }
    .mostfamous {
        font-family: 'Jomolhari', serif;
        font-size: 50px;
        color: #000000;
        margin-left: 50px;
    }
    .linebod2 {
        width: 410px;
        height: 3px;
        background-color: #3B0096;
        margin-top: 43px ;
        margin-left: 50px;
    }
    .bottom-container{
        width: 150s0px;
        height: 900px;
        background-color:white;
        display: flex;
    }
    .below-container {
        width: 1010px;
        height: 900px;
        background-color: white;
        margin-left: 80px;
    }
    .article {
        width: 1010px;
        height: 200px;
        background-color: white;
        margin-top: 10px;
        display: flex;
    }
    .articlepic{
        width: 300px;
        height: 200px;
        margin-top: 10px;
        cursor: pointer;
    }
    .headart {
        font-family: 'Jomolhari', serif;
        font-size: 27px;
        color:black;
        margin-top: 10px;
        margin-left: 15px;
        cursor: pointer;
    }
    .descart {
        font-family: 'Jomolhari', serif;
        font-size: 15px;
        color:black;
        margin-top: 10px;
        margin-left: 15px;
        cursor: pointer;
    }
    .dateb {
        font-family: 'Jomolhari', serif;
        font-size: 12px;
        color:#707070;
        margin-top: 5px;
        margin-left: 15px;
        cursor: pointer;
    }
    .headart-container {
        width: 710px;
        height: 200px;
        background-color:white;
        margin-top: 10px;
    }
    .ads-container {
        width: 320px;
        height: 900px;
        background-color: white;
        margin-left: 10px ;
    }
    .ads {
        width: 250px;
        height: 860px;
        margin-top: 20px;
        margin-left: 30px;
        align-items: center;
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
    .container {
        width: 320px;
        height: 380px;
        background-color:white;
    }
    .smallcontainer {
        width: 320px;
        height: 200px;
        background-color:white;
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
        
    <div class="homecontainer">
        <div class="column-container">
            <div class="column1">
                    <?php
                    $db = new db();
                    $db->q("SELECT * FROM column1");
                    $allarticles = $db->m();
                    foreach ($allarticles as $eacharticles) {
                        echo '<div class="container">';
                        echo '<div class="category">';
                        echo $eacharticles['category'];
                        echo '</div>';
                        echo '<img class="picture" src="'.$eacharticles['image'].'">';
                        echo '<div class="heading">';
                        echo $eacharticles['title'];
                        echo '</div>';
                        echo '<div class="date">';
                        echo $eacharticles['date'];
                        echo '</div>';
                        echo '</div>';
                    }
                    $db->rc();
                    $db = null;
                    ?>
            </div>
            
            <div class="column2">
            <?php
                    $db = new db();
                    $db->q("SELECT * FROM column2");
                    $allarticles = $db->m();
                    foreach ($allarticles as $eacharticles) {
                        echo '<div class="containerbig">';
                        echo '<img class="bigpic" src="'.$eacharticles['image'].'">';
                        echo '<div class="bighead-container">';
                        echo '<div class="bighead">';
                        echo $eacharticles['title'];
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="bigdesc-container">';
                        echo '<div class="bigdesc">';
                        echo $eacharticles['desc'];
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    $db->rc();
                    $db = null;
                    ?>
            </div>
            <div class="column3">
            <?php
                    $db = new db();
                    $db->q("SELECT * FROM column3");
                    $allarticles = $db->m();
                    foreach ($allarticles as $eacharticles) {
                        echo '<div class="smallcontainer">';
                        echo '<div class="category">';
                        echo $eacharticles['category'];
                        echo '</div>';
                        echo '<div onclick="article()" class="heading">';
                        echo $eacharticles['title'];
                        echo '</div>';
                        echo '<div onclick="article()" class="date">';
                        echo $eacharticles['date'];
                        echo '</div>';
                        echo '</div>';
                    }
                    $db->rc();
                    $db = null;
                    ?>
            </div>

        </div>
        <div class="line-container">
            <div class="linebod1"></div>
            <div class="mostfamous">MOST FAMOUS</div>
            <div class="linebod2"></div>
        </div>
        <div class="bottom-container">
            <div class="below-container">
            <?php
                    $db = new db();
                    $db->q("SELECT * FROM below");
                    $allarticles = $db->m();
                    foreach ($allarticles as $eacharticles) {
                        echo '<div class="article">';
                        echo '<img class="articlepic" src="'.$eacharticles['image'].'">';
                        echo '<div class="headart-container">';
                        echo '<div onclick="article()" class="headart">';
                        echo $eacharticles['title'];
                        echo '</div>';
                        echo '<div onclick="article()" class="descart">';
                        echo $eacharticles['desc'];
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    $db->rc();
                    $db = null;
            ?>
            </div>
            <div class="ads-container">
                <img class="ads" src="ads.webp">
            </div>
        </div>  
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
