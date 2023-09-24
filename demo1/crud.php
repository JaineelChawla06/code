<!-- INSERT -->
<?php
include 'connection.php';
if(isset($_POST['insert'])){
    $name=$_POST['sname'];
    $gender=$_POST['gen'];
    $mail=$_POST['mail'];
    $password=$_POST['pass'];

    // $sql="insert into stud values(0,'$name','$gender','$mail','$password')";
    $sql="insert into stud(name,gender,mail,password) values('$name','$gender','$mail','$password')";
    $res=mysqli_query($con,$sql);

    if($res==1){
        header("location:display.php");
    }
    else{
        echo "Record Not Inserted..!";
    }
}
?>

<!-- UPDATE -->
<?php
include 'connection.php';
if(isset($_POST['update'])){
    $uid=$_GET['uid'];
    $name=$_POST['sname'];
    $gender=$_POST['gen'];
    $mail=$_POST['mail'];
    $password=$_POST['pass'];

    $sql="update stud set name ='$name',gender='$gender',mail='$mail',password= '$password' where id='$uid'";
    $res=mysqli_query($con,$sql);

    if($res){
        header("location:display.php");
    }
    else{
        echo "Record Not Updated..!";
    }
}
?>

<!-- DELETE -->
<?php
include 'connection.php';
if(isset($_POST['delete'])){
    $did=$_GET['did'];

    $sql="delete from stud where id='$did'";
    $res=mysqli_query($con,$sql);

    if($res){
        header("location:display.php");
    }
    else{
        echo "Record Not Deleted..!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="">STUDENT NAME :</label>
        <input type="text" name="sname"> <br>
        <label for="">GENDER :</label>
        MALE <input type="radio" name="gen" value="MALE">
        FEMALE <input type="radio" name="gen" value="FEMALE"> <br>
        <label for="">E-MAIL :</label>
        <input type="mail" name="mail"> <br>
        <label for="">PASSWORD :</label>
        <input type="password" name="pass"> <br>
        <!-- INSERT BUTTON -->
        <input type="submit" value="Insert" name="insert">
        <!-- UPDATE BUTTON -->
        <input type="submit" value="Update" name="update">
        <!-- DELETE BUTTON -->
        <input type="submit" value="Delete" name="delete">
    </form>
</body>
</html>