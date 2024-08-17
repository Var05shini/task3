<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="style1.css">
       <title>task3</title>
        
    </head>
    <body>
        <header>
        <marquee direction="left" bgcolor="skyblue" scorllamount="20" width="100%" >
            
            <div class="main">WELCOME! To Web Development Tutorial</div>
        </marquee>
        
        <nav>
            
            <label class="logo">Webdevelopment</label>
            <ol>
            <li><a href="#">HOME</a></li>
            <li><a href="courses.html" target="_blank">COURSES</a></li>
            <li><a href="#">ABOUT US</a>
            <div class="menu1">
                <ol>
                    <li><a href="#">Vision</a></li>
                    <hr>
                    <li><a href="#">Mision</a></li>
                    <hr>
                    
                    
                </ol>
            </div>
        </li>
            <li><a href="#"></a>MY LEARING</li>
            <li><a href="#"></a>SERVICES</li>
            <li><a href="#" target="_blank">LOGIN</a></li>
            
           
        </ol>
        <img src="profile.jfif" class="val">
           
        
           
           <div class="menu">
            <div class="submenu">
                <div class="user">
                <img src="profile.jfif" class="val2">
                   <hr>
                </div>
                   <a href="#" class="menu-img">
                         <img src="profile.jfif" class="val3">
                         <p>Edit Profile</p>
                         <span>></span>

                   </a>
                   <a href="#" class="menu-img">
                    <img src="setting.jfif" class="val3">
                    <p>setting&Privacy</p>
                    <span>></span>
                    </a>
                    <a href="#" class="menu-img">
                        <img src="help.jfif" class="val3">
                        <p>Help&support</p>
                        <span>></span>
                        </a>
                        <a href="logout.php" class="menu-img">
                            <img src="logout.jfif" class="val3">
                            <p>logout</p>
                            <span>></span>
                            </a>  
                </div>
           </div>

        </nav>
        
        
        
        <div class="content">
            <h1>Greetings to all!</h1>
            well organised and easy to understand web building Tutorial with lots of examples on how to use HTML&CSS.
            <br>
            <br>
            <br>
            <button class="hero">learn more</button>
</div>
</header>
    </body>
    <footer>
        <p>&copy; 2024 Tutorial</p></footer>
</html>