<?php
include 'select.php';
 ?>
<div class="row">
  <div class="col-md-3">
  </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-block">
<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
/*if ($_GET['table']=="News") {
  echo "<h1><center>News Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    News Content :<br> <textarea name="comment" rows="5" cols="40"></textarea><br><br>
    <input type="submit">';
}*/
if ($_GET['table']=="Perks") {
	
    echo "<h1><center>Perks Table</h1></center>";
  echo "<br><br><form action=\"techpro.php\" method=\"post\"> <table style=\"width:100%;\"> <tr> <td> 
    Name:</td> <td> <input type=\"text\" name=\"des\" required><br><br> </td> </tr>
    <tr> <td> Category: </td> <td> <input type=\"text\" name=\"mod\" required><br><br> </td> </tr>
    <tr> <td> Description: </td> <td> <input type=\"text\" name=\"id\" required ><br><br> </td> </tr>
    <tr> <td> <input type=\"submit\"> </td> </tr> </table> </form> ";
}

elseif ($_GET['table']=="Skills") {
    echo "<h1><center>Skills Table</h1></center>";
  echo "<br><br><form action=\"techpro.php\" method=\"post\"> <table style=\"width:100%;\"> <tr> <td>   
    Skill Id:</td> <td> <input type=\"text\" name=\"id\" required><br><br> </td> </tr>
    <tr> <td> Name: </td> <td> <input type=\"text\" name=\"name\" required><br><br> </td> </tr> 
    <tr> <td> <label for=\"sel2\"> Category Type: </label> </td> 
     <td> <select  id=\"sel1\" name=\"cat_type\"> 
    <option selected disabled>Choose here</option>
    <option>Medical</option>
    <option>Technical</option>
    <option>Security</option>
    <select><br><br> </td> </tr>
    <tr> <td> <input type=\"submit\"> </td> </tr> </table>";
}
elseif ($_GET['table']=="Talents") {
    echo "<h1><center>Talents Table</h1></center>";
  echo "<br><br><form action=\"techpro.php\" method=\"post\"> <table style=\"width:100%;\"> <tr> <td> 
    Name : </td> <td> <input type=\"text\" name=\"name\" required><br><br> </td> </tr> 
    <tr> <td> <label for=\"sel3\"> Category Type: </label> </td> 
    <td> <select  id=\"sel3\" name=\"cat_type\">
    <option selected disabled>Choose here</option>
    <option>Medical Talents</option>
    <option>Tech Talents</option>
    <option>Security Talents</option>
    <select><br><br> </td> </tr>
    <tr> <td> Description: </td> </tr> <br><br> <tr> <td> <textarea name=\"comment\" rows=\"5\" cols=\"40\"></textarea><br><br> </td> </tr>
    <tr> <td> <input type=\"submit\"> </td> </tr> </table>";
}


elseif ($_GET['table']=="Weapons") {
    echo "<h1><center>Weapon Bonus Table</h1></center>";
  echo "<br><br><form method=\"post\" action=\"FinalScripts/weaponsprocess.php\"> <table style=\"width:100%;\">
        <tr> <td>    Wep ID: </td> <td> <input type=\"text\" name=\"wid\"><br><br> </td> </tr>
        <tr> <td>    Name: </td> <td> <input type=\"text\" name=\"wname\"><br><br> </td> </tr>
        <tr> <td>    Varients: </td> <td> <input type=\"text\" name=\"wvar\"><br><br> </td> </tr>
        <tr> <td>    Info: </td> <td> <textarea rows=\"4\" cols=\"50\" name=\"winfo\"></textarea><br><br> </td> </tr>
        <tr> <td>    Real World: </td> <td> <textarea rows=\"4\" cols=\"50\" name=\"wrw\"></textarea><br><br> </td> </tr>
        <tr> <td>    Img: </td> <td> <input type=\"text\" name=\"wimg\"><br><br> </td> </tr>
        <tr> <td>    Type: </td> <td> <input type=\"text\" name=\"wtyp\"><br><br> </td> </tr>
        <tr> <td>    RPM: </td> <td> <input type=\"text\" name=\"wrpm\"><br><br> </td> </tr>
        <tr> <td>    Mag Size: </td> <td> <input type=\"text\" name=\"wmgsi\"><br><br> </td> </tr>
        <tr> <td>    Range: </td> <td> <input type=\"text\" name=\"wrng\"><br><br> </td> </tr>
        <tr> <td>    Reload: </td> <td> <input type=\"text\" name=\"wrld\"><br><br> </td> </tr>
        <tr> <td>    Headshot Bonus: </td> <td> <input type=\"text\" name=\"whsd\"><br><br> </td> </tr>
        <tr> <td>    Bonus Type: </td> <td> <input type=\"text\" name=\"wbnstyp\"><br><br> </td> </tr>
        <tr> <td>    Bonus min: </td> <td> <input type=\"text\" name=\"wbnsmin\"><br><br> </td> </tr>
        <tr> <td>    Bonus max: </td> <td> <input type=\"text\" name=\"wbnsmax\"><br><br> </td> </tr>
        <tr> <td>    <input type=\"Submit\"> </td> </tr> </table>
        </form>";
}


}




  ?>
</div></div></div>
  <div class="col-md-3"></div>
</div>


?>
