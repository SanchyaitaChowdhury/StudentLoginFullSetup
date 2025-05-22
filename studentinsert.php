<?php
$sid=$_POST['sid'];
$sname=$_POST['sname'];
$course=$_POST['course'];
$year=$_POST['year'];
$phone=$_POST['phone'];
$pswd=$_POST['pswd'];
$server_name='localhost';
$user_name='root';
$password='';
$database='Student_Attendance_System';
$conn=mysqli_connect($server_name,$user_name,$password,$database);  
if ($conn)
{
    $sql="INSERT INTO Student (SID,Sname,Course,Year,Phone,Password) VALUES ('$sid', '$sname', '$course', '$year', '$phone', '$pswd')";
    $res=mysqli_query($conn,$sql);      
    if($res)
    {
        echo ("Data inserted successfully.");
    }
    else
    {
        echo("Something went wrong.");
    }
}
else
{
    die("connection failed.");
}
?>