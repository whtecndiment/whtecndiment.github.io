<?php
date_default_timezone_set("Asia/Jakarta");
include 'handshake.php';
include 'class.global.php'
?>


<!DOCTYPE html>
<html>

<head> 
<title>DAILYMASTHEAD</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jomolhari&display=swap" rel="stylesheet">
</head>

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
        background-color: white;
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
        color: white;
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
        color: white;
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
        margin-left: 95px;
        background-color: rgb(0, 0, 0, 0);
        position: absolute;
        z-index: 1;
    }
    .language {
        font-family: 'Jomolhari', serif;
        font-size: 20px;
        color: white;
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

    .articlecontainer {
        margin-left: auto;
        margin-right: auto;
        width: 1500px;
        height: 4550px;
        }

    .hugeimage {
        width: 100%;
    }

    .titlecontainer {
        width: 1150px;
        height: 500px;
        background-color: rgb(0, 0, 0, 0.8);
        margin-bottom: 0;
        display: block;
        position: absolute;
        top: 70%;
        left: 16%;
        z-index: 1;
    }

    .categorycontainer {
        width: 1100px;
        height: 150px;
        margin-left: auto;
        margin-right: auto;
        background-color: rgb(0, 0, 0, 0);
    }

    .category {
        font-family: 'Jomolhari', serif;
        font-size: 30px;
        color: white;
        text-align: center;
        padding-top: 5%;
    }

    .linecontainer {
        width: 1050px;
        height: 190px;
        margin-left: auto;
        margin-right: auto;
        background-color: rgb(0, 0, 0, 0);
    }

    .articleline {
        font-family: 'Jomolhari', serif;
        font-size: 40px;
        color: white;
        text-align: center;
    }

    .authorline {
        width: 300px;
        height: 2px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .authorcontainer {
        width: 1050px;
        height: 157px;
        margin-left: auto;
        margin-right: auto;
        background-color: rgb(0, 0, 0, 0); 
    }

    .author {
        font-family: 'Jomolhari', serif;
        font-size: 25px;
        color: white;
        text-align: center;
        padding-top: 5%;
    }

    .contentcontainer {
        width: 1500px;
        height: 2000px;
        margin-top: 450px;
    }

    .textonecontainer {
        width: 1500px;
        height: 650px;
    }

    .textpartone {
        font-family: 'Jomolhari', serif;
        font-size: 24px;
        color: black;
        text-align: justify;
        padding-left: 12%;
        padding-right: 12%;
    }

    .contentimagecontainer{
        width: 1500px;
        height: 480px;
    }

    .contentimage {
        width: 76%;
        padding-left: 12%;
        padding-right: 12%;
    }

    .imagetext {
        font-family: 'Jomolhari', serif;
        font-size: 18px;
        color: black;
        padding-left: 12%;
    }

    .finaltextcontainer {
        width: 1500px;
        height: 750px;
    }

    .finaltext {
        font-family: 'Jomolhari', serif;
        font-size: 24px;
        color: black;
        text-align: justify;
        padding-left: 12%;
        padding-right: 12%;
    }

    .morecontentcontainer {
        width: 1500px;
        height: 1400px;
        background-color: #8C7AA7;
    }

    .readmorecontainer {
        width: 1500px;
        height: 170px;
    }

    .readmore {
        font-family: 'Jomolhari', serif; 
        font-size: 30px;
        text-align: center;
        padding-top: 4%;
        color: white;
    }

    .readmoreimagecontainer {
        width: 1500px;
        height: 500px;
    }

    .readmoreimage {
        width: 76%;
        padding-left: 12%;
        padding-right: 12%;
    }

    .firstrmcontainer {
        width: 1500px;
        height: 250px;
        left: 12%;  
        position: relative;
    }

    .firstrmimage {
        height: 250px;
        float: left;
    }

    .firstrmtextcontainer {
        width: 735px;
        height: 250px;
        margin-left: 2.5%;
        float: left;
    }

    .firstrmheader {
        font-family: 'Jomolhari', serif;
        font-size: 32px;
        color: white;
    }

    .firstrmtext {
        font-family: 'Jomolhari', serif;
        font-size: 17px;
        color: white;
        text-align: justify;
    }

    .firstrmdate {
        font-family: 'Jomolhari', serif;
        font-size: 12px;
        color: white;
        text-align: justify;
        margin-top: 2%;
    }

    .secondrmcontainer {
        width: 1500px;
        height: 250px;
        margin-top: 5%;
        position: relative;
        margin-left: -51%;
    }

    .secondrmimage {
        height: 250px;
        float: left;
    }

    .secondrmtextcontainer {
        width: 735px;
        height: 250px;
        float: left;
        margin-left: 2.5%;
    }

    .secondrmheader {
        font-family: 'Jomolhari', serif;
        font-size: 32px;
        color: white;
    }

    .secondrmtext {
        font-family: 'Jomolhari', serif;
        font-size: 17px;
        color: white;
        text-align: justify;
    }

    .secondrmdate {
        font-family: 'Jomolhari', serif;
        font-size: 12px;
        color: white;
        text-align: justify;
        margin-top: 2%;
    }
    
    .footer{
        width: 1500px;
        height: 300px;
        background-color:#3A1179;
        flex-direction: column;
        display: absolute;
        margin-top: 100px;
        margin-left: -75.2%;
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
            <button onclick="category()" class="topbodcategory" style="z-index: 1">CATEGORY</button>
            <button onclick="aboutus()" class="topbodaboutus" style="z-index: 1">ABOUT US</button>
            <button class="language">LANGUAGE</button>
    </div>

    <div class="articlecontainer">
        <?php
        $db = new db();
        $db->q("SELECT * FROM hugeimage");
        $allarticles = $db->m();
        foreach ($allarticles as $eacharticles) {
        echo '<img class="hugeimage" src="'.$eacharticles['image_url'].'">';
        }
        $db->rc();
        $db = null;
        ?>

        <div class="titlecontainer">
            <?php
            $db = new db();
            $db->q("SELECT * FROM headline");
            $allarticles = $db->m();
            foreach ($allarticles as $eacharticles) {
                echo '<div class="categorycontainer">';
                echo '<div class="category">';
                echo $eacharticles['category'];
                echo '</div>';
                echo '</div>';

                echo '<div class="linecontainer">';
                echo '<div class="articleline">';
                echo $eacharticles['title'];
                echo '</div>';
                echo '</div>';

                echo '<div class="authorcontainer">';
                echo '<div class="author">';
                echo $eacharticles['author'];
                echo '</div>';
                echo '</div>';
            }
            $db->rc();
            $db = null;
            ?>

        </div>


        <div class="contentcontainer">
        <?php
            $db = new db();
            $db->q("SELECT * FROM content");
            $allarticles = $db->m();
            foreach ($allarticles as $eacharticles) {
                echo '<div class="textonecontainer">';
                echo '<div class="textpartone">';
                echo $eacharticles['textone'];
                echo '</div>';
                echo '</div>';

                echo '<div class="contentimagecontainer">';
                echo '<img class="contentimage" src="'.$eacharticles['image'].'">';
                echo '<div class="imagetext">';
                echo $eacharticles['image_url'];
                echo '</div>';
                echo '</div>';

                echo '<div class="finaltextcontainer">';
                echo '<div class="finaltext">';
                echo $eacharticles['texttwo'];
                echo '</div>';
                echo '</div>';
            }
            $db->rc();
            $db = null;
            ?>'

            <div class="morecontentcontainer">
                <div class="readmorecontainer">
                    <div class="readmore">READ MORE</div>
                </div>

                <?php
                $db = new db();
                $db->q("SELECT * FROM rmimage");
                $allarticles = $db->m();
                foreach ($allarticles as $eacharticles) {
                    echo '<div class="readmoreimagecontainer">';
                    echo '<img class="readmoreimage" src="'.$eacharticles['image'].'">';
                    echo '</div>';
                }
                $db->rc();
                $db = null;
                ?>

                <?php
                $db = new db();
                $db->q("SELECT * FROM readmore");
                $allarticles = $db->m();
                foreach ($allarticles as $eacharticles) {

                    echo '<div class="firstrmcontainer">';
                    echo '<img class="firstrmimage" src="'.$eacharticles['firstrmimage'].'">';
                    echo '<div class="firstrmtextcontainer">';
                    echo '<div class="firstrmheader">';
                    echo $eacharticles['firstrmheader'];
                    echo '</div>';
                    echo '<div class="firstrmtext">';
                    echo $eacharticles['firstrmtext'];
                    echo '</div>';
                    echo '<div class="firstrmdate">';
                    echo $eacharticles['firstrmdate'];
                    echo '</div>';
                }
                $db->rc();
                $db = null;
                ?>
                

<?php
                $db = new db();
                $db->q("SELECT * FROM readmoretwo");
                $allarticles = $db->m();
                foreach ($allarticles as $eacharticles) {

                    echo '<div class="secondrmcontainer">';
                    echo '<img class="secondrmimage" src="'.$eacharticles['secondrmimage'].'">';
                    echo '<div class="secondrmtextcontainer">';
                    echo '<div class="secondrmheader">';
                    echo $eacharticles['secondrmheader'];
                    echo '</div>';
                    echo '<div class="secondrmtext">';
                    echo $eacharticles['secondrmtext'];
                    echo '</div>';
                    echo '<div class="secondrmdate">';
                    echo $eacharticles['secondrmdate'];
                    echo '</div>';
                }
                $db->rc();
                $db = null;
                ?>

                
               
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