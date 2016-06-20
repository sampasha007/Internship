<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intern_reg";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['dob'];
$d=$_POST['pass'];
$e=$_POST['gen'];
$f=$_POST['url'];
$g=$_POST['one'];
$i=$_POST['grad_lvl'];
$j=$_POST['two'];
$h="  ";
$k="Y";
$count=count($_POST['exp']);
echo $count." items were selected </br> </br>";
if(isset($_POST['sub']))
           {
if(!empty($_POST['exp'])){

    
foreach($_POST['exp'] as $selected){
    
echo $selected."</br></br>";
$h=$h.",".$selected;
}
    
}
}
$h=substr($h,3);

$sql = "INSERT INTO `internship selection`(`First_Name`, `Last_Name`, `Dob`, `Password`, `Gender`, `Email_ID`, `Phone_No`, `Experience`, `Graduation`, `Secondary_Phone`, `Status`) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
   echo "<script>alert(\"Phone Number already exists\")
    window.location = \"form.html\";
  </script>"; 
    
  exit;
  
    
   
        
}

mysqli_close($conn);
?>