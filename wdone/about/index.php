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
        text-decoration: underline;
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
        margin-top: -316px;
        background-color: rgb(0, 0, 0, 0);
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

    .aboutuscontainer {
        margin-left: auto;
        margin-right: auto;
        width: 1500px;
        height: 1650px;
        background-color: white;
        }

    .aboutusimage {
        width: 1500px;
        height: 600px;
    }

    .titlecontainer {
        width: 1500px;
        height: 600px;
        background-color: rgb(0, 0, 0, 0.45);
        display: block;
        position: absolute;
        top: 19.3%;
        left: auto;
        z-index: 1;
    }

    .aboutustitle {
        font-size: 35px;
        text-align: center;
        color: rgb(255, 255, 255);
        padding-top: 250px;
    }

    .textcontainer {
        width: 1500px;
        height: 850px;
        display: block;
        background-color: white;
    }

    .text{
        font-size: 15px;
        text-align: absolute;
        padding-top: 10%;
        padding-left: 20%;
        padding-right: 20%;
    }

    .footer{
        width: 1500px;
        height: 300px;
        background-color: rgb(58,17,121);
        flex-direction: column;
        display: flex;
        margin-left: auto;
        margin-right: auto;
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

    <div class="aboutuscontainer">
        <img class="aboutusimage" src="jakarta.jpg"></img>
            <div class="titlecontainer">
                <div class="aboutustitle">ABOUT US</div>
                <div class="topbod-container">
                    <button onclick="category()" class="topbodcategory" style="z-index: 1">CATEGORY</button>
                    <button onclick="aboutus()" class="topbodaboutus" style="z-index: 1">ABOUT US</button>
                    <button class="language">LANGUAGE</button>
                </div>
    </div>

        <div class="textcontainer">
            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec pellentesque augue sed lacinia fringilla. 
                Suspendisse at risus sed leo dapibus pretium. Maecenas id ligula erat. 
                Ut id aliquet nunc. Integer efficitur leo tortor, at placerat dolor hendrerit nec. 
                Ut mollis mi quis rutrum facilisis. Cras ullamcorper pellentesque massa vitae accumsan. 
                Fusce luctus enim ut mi semper, et rutrum tortor varius. Vestibulum hendrerit egestas elementum. 
                Praesent tincidunt lorem vel mattis interdum. Sed cursus porta dolor. Sed leo tortor, molestie ut luctus nec, feugiat ac justo.
                Curabitur imperdiet, orci in eleifend elementum, ipsum tellus aliquam metus, efficitur ornare nibh ante auctor orci. Integer scelerisque mattis consectetur. 
                In id sagittis diam. Fusce in ultricies arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida felis a neque fringilla, vitae vehicula nisi dignissim. 
                Proin lobortis purus id neque accumsan vulputate. Vivamus dui ligula, auctor ac dictum eget, hendrerit non tortor. Integer nec sem commodo, finibus enim quis, consectetur sapien.
                Etiam tellus nisi, bibendum eget ipsum quis, auctor bibendum ipsum. Nam faucibus risus bibendum, dignissim erat vel, elementum est. 
                Duis ac rhoncus justo, eu auctor dolor. Phasellus sed ornare nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nullam nec volutpat lectus, non ultricies ipsum. Aliquam ornare justo id dui ullamcorper euismod. Nunc in urna neque. 
                Sed fermentum tristique pharetra. Praesent eleifend aliquet nulla, eu sodales odio ornare imperdiet.
                Donec ex risus, lobortis non cursus sit amet, tincidunt cursus risus. Ut eu lectus commodo, mattis augue sit amet, tincidunt sapien. 
                Sed tincidunt rhoncus consectetur. Proin sagittis tortor elit. Sed malesuada arcu vitae nisi convallis accumsan. 
                Sed tempor non tortor eu accumsan. Curabitur scelerisque non ante id ultricies. Nulla mattis tempor cursus. 
                Ut sit amet mi eget purus lacinia molestie. Vestibulum eu turpis vitae sem consectetur scelerisque. 
                Proin non nisi purus. Nulla urna tortor, tristique sed malesuada nec, faucibus vel est. Duis laoreet sapien eget aliquam aliquam. 
                Ut non ligula id nisl luctus scelerisque at vitae ligula. Curabitur at est sed metus auctor feugiat non in libero. 
                Nam laoreet euismod leo, a consectetur libero gravida in.</div>
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