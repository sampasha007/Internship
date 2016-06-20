<?php
    include("session.php");
?>

<html>
    <head>
        <title>Admin Control Page</title>
    </head>
    <body>
        <h1>Admin Home</h1>
        <h4><a href="logout.php">Log Out</a></h4>
        
        <form id="admin_form" method="POST" action="dbedit.php">
        <table border=1>
            <tr>
                <th>ID</th><th>Phone Number</th><th>Edit</th><th>Status</th>
            </tr>
            <?php
                include("dbconfig.php");

                $sql="select `ID`,`Phone_No`,`Status` from `internship selection`";
                if($result = mysqli_query($db,$sql))
                {
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {   
                            $inp="<input type=\"checkbox\" name=\"check[]\" value=\"".$row["ID"]."\" >";
                            echo "<tr><td>".$row["ID"]."</td><td>".$row["Phone_No"]."</td><td>".$inp."</td><td>".$row["Status"]."</td></tr>";
                        }
                        echo "<tr><td colspan=\"4\"><input type=\"submit\" value=\"Submit\"></td></tr>";
                    }
                    else
                    {
                        echo "<tr><td colspan=\"4\">no entries</td></tr>";
                    }
                }
                else
                {
                    echo "<tr><td colspan=\"4\">Error with database<td></tr>";
                }
            ?>
        </table>
        </form>
    </body>
</html>