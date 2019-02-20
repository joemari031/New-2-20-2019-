<?php

echo '<link href="C:\xampp\htdocs\forms\jom" rel="stylesheet" type="type/css">';


//Name and last
echo "First name: "; echo $_POST["firstname"]; 
echo "<br>";
echo "<br>";
echo "Last name: "; echo $_POST["lasttname"]; 
echo "<br>";


//Company
echo "<br>";
echo "Company: "; echo $_POST["comname"]; 
echo "<br>";


//E-mail
echo "<br>";
echo "E-mail: ";
echo $_POST["gmail"]; 
echo "<br>";



//Area code and Phone Num
echo "<br>";
echo "Area code: "; echo $_POST["code"]; echo " Phone number: "; echo $_POST["phone"]; 
echo "<br>";



//Options
echo "<br>";
echo $_POST["select"]; 
echo "<br>";


//Choice
echo "<br>";
echo $_POST["choice"]; 
echo "<br>";

?>
