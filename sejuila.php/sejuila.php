<!DOCTYPE HTML> 
<html>
 <head> 
 <title>Sign-Up</title> 
 </head>

<link href="style.css"/>

<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
</style>
</head>

  <body id="body-color">
 <div id="Sign-Up">
  <fieldset style="width:20%">
  <legend>Registration Form</legend>
   <table border="10"> 
   <tr> 
   <form method="POST" action="connectivity-Sign-Up.php">
    <td>Name</td>
    <td><input type="text" name="name"></td> 
    </tr> <tr>
     <td>Email</td>
     <td><input type="text" name="email"></td>
      </tr> 
      <tr> 
      <td>UserName</td>
      <td><input type="text" name="user"></td> 
      </tr>
       <tr> 
       <td>Password</td><td>
       <input type="password" name="pass"></td>
        </tr> 
       <tr>
        <td>Confirm Password </td>
       <td><input type="password" name="cpass"></td>
        </tr> 
       <tr> 
       <td><input id="button" type="submit" name="submit" value="Sign-Up"></td>
        </tr> 
       </form>

   </table> 
   </fieldset> 
   </div>
    </body>
     </html>

