<?php
	$username=$_REQUEST['Username'];
	$password=$_REQUEST['Password'];
	$conn=mysqli_connect('localhost','root','','portal');
    $query=mysqli_query($conn,"SELECT * FROM register where username='$username'&&password='$password'");  
    $numrows=mysqli_num_rows($query);
    if($numrows!=0)  
    {  
        while($row=mysqli_fetch_assoc($query))  
        {  
            $dbusername=$row['username'];  
            $dbpassword=$row['password'];  
        }  
        if($username == $dbusername && $password == $dbpassword)
        {  
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
	        header("Location:site.php");  
        }  
    } 
	else 
	{  
        echo "Invalid username or password!";  
    }
  

?>