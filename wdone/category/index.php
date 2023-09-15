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
    function landingpage() {
    location.replace("http://localhost/wdone/landingpage/")
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

    .body{
        width: 1500px;
        height: 1500px;
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
    .topbodcategory {
        font-family: 'Jomolhari', serif;
        font-size: 20px;
        color: #3A1179;
        margin-top: 30px;
        margin-left: 80px;
        transition: color 0.3s ease-in-out;
        cursor: pointer;
        text-decoration: underline;
        border: none;
        height: 40px;
        background-color: rgb(0, 0, 0, 0);
        list-style-type: none;
        overflow: hidden;
        position: relative;
        z-index: 1;
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
        z-index: 1;
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
        background-color: rgb(0, 0, 0, 0)
    }
    .language:hover {
        color: salmon;
    }
    .body-container {
        width: 1500px;
        height: 1800px;
        display: flex;
        background-color: white;
    }

    .categorybutton {
        width: 600px;
        height: 100px;
        background-color: rgb(0, 0, 0, 0.5);
        margin-bottom: 0;
        position: absolute;
        border: none;
        top: 360px;
        left: 180px;
        cursor: pointer;
        z-index: 1;
    }

    .img {
        width: 700px;
        height: 420px;
        filter: brightness(90%);
    }
    .sideimg {
        width: 700px;
        height: 420px;
        filter: brightness(90%);
    }
    .bottomimg {
        width: 700px;
        height: 420px;
        filter: brightness(90%);
    }
    .bsideimg {
        width: 700px;
        height: 420px;
        filter: brightness(90%);
    }
    .img-container {
        width: 700px;
        height: 420px;
        margin-top: 40px;
        margin-left: 45px;
        position: relative;
        display: inline-block;
        cursor: pointer;
    }
    .sideimg-container {
        width: 700px;
        height: 420px;
        margin-top: 40px;
        position: relative;
        display: inline-block;
        cursor: pointer;
    }
    .bottomimg-container {
        width: 700px;
        height: 420px;
        margin-left: 45px;
        position: relative;
        display: inline-block;
        cursor: pointer;
    }
    .bsideimg-container {
        width: 700px;
        height: 420px;
        position: relative;
        display: inline-block;
        cursor: pointer;
    }
    .img-text {
        position: absolute;
        top: 25%;
        left: 25%;
        transform: translate(-50%, -50%);
        font-family: 'Jomolhari', serif;
        color: white;
        padding: 5px 10px;
        font-size: 30px;
    }
    .simg-text {
        position: absolute;
        top: 25%;
        left: 20%;
        transform: translate(-50%, -50%);
        font-family: 'Jomolhari', serif;
        color: white;
        padding: 5px 10px;
        font-size: 30px;
    }
    .img-container,
    .sideimg-container,
    .bottomimg-container,
    .bsideimg-container {
        display: inline-block;
        position: relative;
        background-color: blue;
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
        cursor: pointer;
    }

    .img,
    .sideimg,
    .bottomimg,
    .bsideimg {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease-in-out;
        cursor: pointer;
    }

    .img-text,
    .simg-text {
        position: absolute;
        top: 25%;
        left: 20%;
        transform: translate(-50%, -50%);
        font-family: 'Jomolhari', serif;
        color: white;
        padding: 5px 10px;
        font-size: 30px;
        pointer-events: none;
        cursor: pointer;
    }

    .img-container:hover .img,
    .sideimg-container:hover .sideimg,
    .bottomimg-container:hover .bottomimg,
    .bsideimg-container:hover .bsideimg {
        transform: scale(1.1);
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

            <div class="body-container">
                <div>
                    <div onclick="landingpage()" class="img-container">
                        <img class="img" src="business.jpg">
                        <div class="img-text">BUSINESS</div>
                    </div>
                    <div onclick="landingpage()" class="sideimg-container">
                        <img class="sideimg" src="politics.jpg">
                        <div class="simg-text">POLITICS</div>
                    </div>
                    <div onclick="landingpage()" class="bottomimg-container">
                        <img class="bottomimg" src="sports.jpg">
                        <div class="img-text">SPORTS</div>
                    </div>
                    <div onclick="landingpage()" class="bsideimg-container">
                        <img class="bsideimg" src="art.jpg">
                        <div class="simg-text">ART</div>
                    </div>
                    <div onclick="landingpage()" class="bottomimg-container">
                        <img class="bottomimg" src="books.jpg">
                        <div class="img-text">BOOKS</div>
                    </div>
                    <div onclick="landingpage()" class="bsideimg-container">
                        <img class="bsideimg" src="cooking.jpg">
                        <div class="simg-text">COOKING</div>
                    </div>
                    <div onclick="landingpage()" class="bottomimg-container">
                        <img class="bottomimg" src="travel.jpg">
                        <div class="img-text">TRAVEL</div>
                    </div>
                    <div onclick="landingpage()" class="bsideimg-container">
                        <img class="bsideimg" src="science.jpg">
                        <div class="simg-text">SCIENCE</div>
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
        </div>