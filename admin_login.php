<?php
    session_start();
    if(isset($_SESSION["login_admin"]))
    {
        header("location: admin_home.php");
        exit();
    }

    $err="";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
         $user=$_POST['user'];
         $pwd=$_POST['pwd'];

         if($user=="admin" && $pwd=="admin")
         {
            $_SESSION["login_admin"] = "admin";
            header("location: admin_home.php");
            exit();
         } 

         else
            $err="INVALID LOGIN ";
     }
?>
<html>
    <head>
        <link rel="stylesheet" href="Login.css">
        <title>Intern Login</title>
    </head>
    <body>
        <form id="LoginForm" action="" method="POST">
            <center>
                <fieldset>
                    <legend>
                        <marquee>Login</marquee>
                    </legend>
                    <table>
                        <tr>
                            <td>Username</td>
                            <td>
                                <input type="text" name="user">
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
                    <?php echo $err;?>
                </fieldset>
            </center>
        </form>
    </body>
</html>