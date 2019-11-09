<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$nick = $_POST['nick'];
$country = $_POST['country'];
$dob = $_POST['dob'];
$email = $_POST['email'];


if (!empty($firstname) || !empty($lastname) || !empty($nick) || !empty($country) 
|| !empty($dob) || !empty($email)) {
    $host = "sql7.freesqldatabase.com";
    $dbUserName = "sql7311385";
    $dbPassword = "PaeMRI1yQ1";
    $dbName = "signup";

    //create connection
    $conn = new mysqli($host, $dbUserName, $dbPassword, $dbName);

    if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
}
    else {
           $SELECT = "SELECT email From signup Where email = ? Limit = 1";
           $INSERT = "INSERT Into singup (firstname, lastname, nick, country, dob, email)
            values(?,?,?,?,?,?)";

     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssss", $firstname, $lastname, $nick, $country, $dob, $email);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}


?>