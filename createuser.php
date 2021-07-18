<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
<style>
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}

html {
  height: 100%;

  
}

body {
  font-family: montserrat, arial, verdana;
  height:100%;
  background: url("img/userback.jpg");

    background-size: cover;
  background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  
}

/*form styles*/
#msform {
  width: 400px;
  margin: 50px auto;
  text-align: center;
  position: relative;
}
#msform fieldset {
  background: white;
  border: 0 none;
  border-radius: 3px;
  box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
  padding: 20px 30px;
  box-sizing: border-box;
  width: 80%;
  margin: 0 10%;
  
  /*stacking fieldsets above each other*/
  position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
  display: none;
}
/*inputs*/
#msform input, #msform textarea {
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
  margin-bottom: 10px;
  width: 100%;
  box-sizing: border-box;
  font-family: montserrat;
  color: #2C3E50;
  font-size: 13px;
}
/*buttons*/
#msform .action-button {
  width: 100px;
  background: #800000;
  font-weight: bold;
  color: white;
  border: 0 none;
  border-radius: 1px;
  cursor: pointer;
  padding: 10px 5px;
  margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
  box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
  font-size: 15px;
  text-transform: uppercase;
  color: #2C3E50;
  margin-bottom: 10px;
}
.fs-subtitle {
  font-weight: normal;
  font-size: 13px;
  color: #666;
  margin-bottom: 20px;
}
.container {
    position: relative;
    
    color:black;
}




</style>
<body>

<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location.href='money.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>



<form id="msform" method="post">
  
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account  <img src="logos/newuser.png" alt="MoneyTransfer" width="50" height="50"> </h2>
   
    <input type="text" name="name" placeholder="Name" />
    <input type="email" name="email" placeholder="Email" />
    <input type="text" name="balance" placeholder="Account Balance" />
    <input type="submit" name="submit" class="next action-button" value="Create"/>
  </fieldset>
  
</form>

</body>
<footer class="text-center mt-5 py-2">
            <div class="text-center p-3" style="text-align:center;color:black;">
                <p>&copy 2021. Made by <b>Siona Misha Nazareth</b> <br> Intern At Sparks Foundation</p>
            </div>
    </footer>
</footer>
</html>