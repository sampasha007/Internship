<?php
    include('session.php');
?>
    <html>

    <head>
        
        <link rel ="stylesheet" href ="Login.css">
        <title>Welcome</title>
    </head>

    <body>
        <h4 style = "text-align: right;font-family:'Fjalla One', sans-serif;
    font-size: 20px;"><a href="logout.php">Sign Out</a></h4>
        <h1 class = "welcome">Welcome <?php echo $first;?></h1>



        <div class  ="userdetails">
            First Name :
            <?php echo $first;?> <br>
                Last Name:
                <?php echo  $last; ?>
                    <br> Date of Birth:
                    <?php echo  $dob; ?>
                        <br> Gender:
                        <?php echo  $Gender; ?>
                            <br> Email ID:
                            <?php echo  $Email; ?>
                                <br> Phone Number:
                                <?php echo  $Phone; ?>
                                    <br> Experience:
                                    <?php echo  $Exp; ?>
                                        <br> Graduation:
                                        <?php echo  $Grad; ?>
                                            <br> Secondary Phone:
                                            <?php echo  $Sphone; ?>
                                                <br>



        </div>

    </body>

    </html>