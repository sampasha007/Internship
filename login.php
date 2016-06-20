<?php
    include("dbconfig.php");
    session_start();
if(isset($_SESSION["login_ph"]))
{header("location: welcome.php");exit();}
    $err="";


    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $ph = mysqli_real_escape_string($db,$_POST["phno"]);
        $pwd = mysqli_real_escape_string($db,$_POST["pwd"]);

        $sql = "select `Phone_no` from `internship selection` where `Phone_no` ='$ph' and `Password` ='$pwd'";
        $sql1 = "select `Status` from `internship selection` where `Phone_no` = '$ph' and `Password` ='$pwd'";
              
        if($result = mysqli_query($db,$sql))
        {
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $cnt = mysqli_num_rows($result);

            if($cnt==1)
            {  
                if($statresult = mysqli_query($db,$sql1))
                
                $row1 = mysqli_fetch_array($statresult,MYSQLI_ASSOC);
                $err=  $row1[0];
                if($row1["Status"] == "Y")
                {
                    $_SESSION["login_ph"]=$ph;
                    header("location: welcome.php");
                    exit();
                }
                else
                {
                    $err.="Invalid Username/Password or Username denied access";
                }
            }
        }
        else
        {
            $err="Problem with server";
        }
        mysqli_close($db);
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
                            <td>Phone Number</td>
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
                    <?php echo $err;?>
                   
                </fieldset>
            </center>
        </form>
    </body>

    </html>