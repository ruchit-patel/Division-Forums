<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(empty($_POST['uname'])){
    echo "Enter a User Name";
  }
  else if(empty($_POST['pass'])){
    echo "Enter a password";
  }
  else {
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "division";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
        $id = mysqli_real_escape_string($conn,$_POST['uname']);
        $pass = mysqli_real_escape_string($conn,$_POST['pass']);
<<<<<<< HEAD
        $retrive="SELECT Acc_Name,Password from Account where Acc_Name='$id' AND  Password=SHA1('$pass')";
=======
        $retrive="SELECT Acc_Name,Password from Account where Acc_Name='$id' AND  Password='$pass'";
>>>>>>> 63e24af4c2798f2f9c6f262c1c9920b1f471b589
        $run=@mysqli_query($conn,$retrive);
        if(mysqli_num_rows($run)==1){
          $row=mysqli_fetch_array($run,MYSQLI_ASSOC);
          $_SESSION['uname']=$uname;
          echo "Hello".$_SESSION['uname'];

        }
        else {
          echo "password or uname incorrect!";
        }
  }

}
?>