<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
@media only screen and (min-width: 500px) {
    div {
        width: 60%;
        margin: 0px 20%;
    }
}
</style>
<body>

<h3 align="center">Registration Form Project using OOP Concept</h3>

<div id="form">
  <form action="index.php" method="post">
    <label for="uname">User Name</label>
    <input type="text" id="uname" name="username" placeholder="Your name.." required="required">

    <label for="ename">User Email</label>
    <input type="email" id="lname" name="useremail" placeholder="Your Email id.." required>

    <label for="password">Password</label>
    <input type="password" name="pass" placeholder="Enter you Password.." required>
  
    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>
<?php

    include 'process.php';
    $obj = new db();

    if (isset($_POST['submit'])) {
        
        $user =$_POST['username'] ;

        $email =$_POST['useremail'] ;
        $pass =$_POST['pass'] ;

        $query = "INSERT INTO `user` (`user_name`, `user_email`, `user_pass`) VALUES ('$user', '$email', '$pass')";

        $obj->insert($query);

        
    }


?>