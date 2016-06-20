<?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                
                $pw = "intern123";
                $pwd=$_POST["pwd"];
                if($pwd == $pw)
                {
                    echo "<script>window.location = \"adminhomepage.php\"
</script>";            
                }
               
            }
        ?>

<html>

    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" href="login.css">
    </head>

    <body>

        <form id="LoginForm" action="<?php echo $_SERVER[" PHP_SELF "];?>" method="POST">
            <center>
                <fieldset>
                    <legend>
                        <marquee>login</marquee>
                    </legend>
                    <table>
                        <tr>
                            <td>Username</td>
                            <td>
                                <input type="text" name="phno">
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input type="password" name="pwd">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="Submit">
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </center>
        </form>
    </body>

    </html>