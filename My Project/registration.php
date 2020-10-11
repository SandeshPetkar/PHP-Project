<?php      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
       $sql = "INSERT INTO login(username,password) VALUES ('$username','$password')";  
if(mysqli_query($con, $sql)){  
 echo "<h1><center> Hi ".$username."</br>Registration successfull </center></h1>"; 
 echo "<script>location.href='login.html'</script>"; 
}else{  
echo "Registration Failed ". mysqli_error($con);  
}      
?>  