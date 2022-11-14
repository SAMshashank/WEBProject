<?php
session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'userregg');
$name=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['password'];


$s="select * from usertablex where name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
$se="select * from usertablex where email='$email'";
$resulte=mysqli_query($con,$se);
$nume=mysqli_num_rows($resulte);
if($num==1 ){
    
    
    // echo '<script language="javascript">';
    // echo 'alert("username Already Taken")';
    // echo '</script>';
    // echo "<script>
    echo "<script>
    alert('username Already Taken');
    window.location.href='index.php';
    </script>";
    
    
}
else if($nume==1){
    echo "<script>
    alert('email Already Taken');
    window.location.href='index.php';
    </script>";
}

else{
   $reg="insert into usertablex(name,email,password) values('$name','$email','$pass')" ;
mysqli_query($con,$reg);
header('location:index.php');

}

?>