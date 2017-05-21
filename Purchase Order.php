<html>
<head>

</head>
<body>

<?php
  if(isset($_POST["submit"])) {
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "furnitures";

    //create connection
    $connection = new mysqli($server,$user,$password,$database);

    //check connection
    if($connection -> connect_error) {
      die("Connection failed : ".$connection -> connect_error);
    }

    $sql = "INSERT INTO customer(Fname,Lname,Gender,Address_Line1,Address_Line2,City,Contact_No) VALUES
    ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["gender"]."','".$_POST["customeraddressline1"]."','".$_POST["customeraddressline2"]."','".$_POST["customercity"]."','".$_POST["contact"]."')";

    if($connection -> query($sql)===TRUE) {
      echo "success";
    } else {
      echo "Failed";
    }

    $connection -> close();
  }
?>

</body>
</html>
