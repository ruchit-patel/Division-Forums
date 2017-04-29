<?php
    require 'updater.php';
?>
<div class="row" style="margin-top:15px;">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-block">
                <?php
                    ini_set('display_errors',1);
                    if($_SERVER['REQUEST_METHOD']=='GET'){
                        $name= $_GET['wID'];
                        $servername = "localhost";
                        $username = "root";
                        $password = "admin";
                        $dbname = "division";
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $sql="SELECT * FROM Perks where Name='$name'";
                        $result = mysqli_query($conn, $sql) OR die("".mysqli_error($conn));
                        $row = mysqli_fetch_assoc($result);
                        $nm=$row['Name'];
                        $cat=$row['Category'];
                        $des=$row['Description'];
                        echo "<br><br> <form method=\"post\" action=\"FinalScripts\...php\"> <table style=\"width:100%;\">
                          <tr> <td> Name: </td> <td> <input type=\"text\" name=\"name\" value=\"$nm\"><br><br> </td> </tr>
                          <tr> <td> Category: </td> <td> <input type=\"text\" name=\"cat\" value=\"$cat\"><br><br> </td> </tr>
                          <tr> <td> Description: </td> <td> <input type=\"text\" name=\"des\" value=\"$des\"><br><br> </td> </tr>
                          <tr> <td>    <input type=\"Submit\" value=\"Update\"> </td> </tr> </table>
                          </form>";
                        }
                        ?>
                      </div>
                  </div>
              </div>
          </div>
