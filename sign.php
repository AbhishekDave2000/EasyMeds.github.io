<?php
    $conn = mysqli_connect("localhost","root","","meds");
    if(!$conn){
        die("error in connection".mysqli_connect_error());
    }
     mysqli_select_db($conn,"meds");

    $username = $_POST['user1'];
    $email = $_POST['email'];

    $query = mysqli_query($conn,"SELECT user FROM detail WHERE user='$username' ");
    $count = mysqli_num_rows($query);
    // echo $count;
    if($count>0){
        echo "<p>Username already exists!</p>";
        echo "<br><hr>";
        echo "<button><a href='signup.php' style='text-decoration:none'>sign up again!....</a></button>";
        echo "<hr>";
    }
    else{
        $query = " INSERT INTO detail (nameN,Email,phone,user,passwordP)
        VALUES ('$_POST[name]','$_POST[email]','$_POST[tele]','$_POST[user1]','$_POST[Pass]')";
        mysqli_query($conn,$query);

        echo "<br>";
        echo "<hr>";
        echo "<a href='login.html'>go to login page now!</a>";
        echo "<hr>";
        
    }

    
?>

