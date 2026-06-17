<html>
    <head>
        <title>.: Login :. </title>
        <style>
            body{
                background-color: rgba(255, 255, 0, 0.2);;
            }
            #body-red
            {
                background-color: red;
                color: white;
            }
            #body-blue
            {
                background-color: blue;
                color: white;
            }
            .box{
                background-color: yellow;
                border-radius: 20px;
                box-shadow: -2px 2px black;
                text-align: center;
                position: fixed;
                top: 30%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 400px;
                height: 200px;
            }
        </style>
    </head>
    <body>
        <?php
        $correct_user_name= "RuelExanes";
        $correct_password = "67kilogram";

        if(isset($_POST["submit"])){

            $user_name = $_POST["username"];
            $password = $_POST["password"];

            if($user_name == $correct_user_name && $password == $correct_password){
            echo "<body id='body-blue'>";
                echo "Log In Successful";
                echo "<br>";
                echo "Welcome! ".$_POST["username"]."</strong><br>";
                echo "<a href='log_in.php'>Back</a>";
            }
            else{
                echo "<body id='body-red'>";
                echo "Login Failed! Incorrect username or password.<br>";
                echo "<a href='log_in.php'>Try Again</a>";
            }

        }
        else{
            ?>    
        <div class="box">
            <h2> Log In </h2>
            <form method="post" action="">
                <label>Username</label> <br>
                <input type="text" name="username"> <br>
                <label>Password</label> <br>
                <input type="password" name="password"> <br><br>
                <input type="submit" name="submit" value="Log In"> 
            </form>
        </div>
        <?php } ?>
    </body>
</html>