<html>
    <head>
        <title> BSITech Solutions </title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <div class="wrapper">
            <div class ="header">
                <h1>BSITech Solutions</h1>
            </div>
            <div class ="main_navigation"> 
                <a href="index.php">Home</a>
                <a href="index.php?page=project.php">Projects</a>
                <a href="index.php?page=job_posting.php">Job Posting</a>
                <a href="index.php?page=testimonies.php">Testimonies</a>
                <a href="index.php?page=contacts.php">Contacts</a>
            </div>
            <div class ="container"> 
            <?php
                switch(@$_GET["page"]){
                    case "project.php":
                        include("project.php");
                        break;
                    case "job_posting.php":
                        include("job_posting.php");
                        break;
                    case "testimonies.php":
                        include("testimonies.php");
                        break;
                    case "contacts.php":
                        include("contacts.php");
                        break;
                    default: 
                        include("home.php");
                        break;
                }
            ?>
            </div>
            <div class ="footer">
                © 2026 BSITech Solutions. All Rights Reserved.
            </div>
        </div>
    </body>
</html>