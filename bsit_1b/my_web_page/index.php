<html>
    <head>
        <title>My Web Page</title>
        <link rel="stylesheet" type="text/css" href=css/styles.css>
    </head>
    <body>
        <div id="wrapper">
            <div class="header">
            
            </div>
            <div class="main_navigation">
                <a href= "index.php">Home</a> /
                <a href= "index.php?page=about_us"> About Us</a> /
                <a href= "index.php?page=mission_vision"> Mission and Vision </a> /
                <a href= "index.php?page=gallery">Gallery</a> 
            </div>
        </div>
        <div class="container">
        <?php
            switch(@$_GET["page"])
            {
                case"about_us":
                    include("about_us.php");
                    break;
                case "mission_vision":
                    include("mission_vision.php");
                    break;
                case "gallery":
                    include("gallery.php");
                    break;
                default:
                    include("home.php");
                    break;
            }
        ?>
        </div>
            <div class="footer">
            </div>
    </body>
</html>