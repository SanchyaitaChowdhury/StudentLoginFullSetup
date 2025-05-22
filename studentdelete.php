<?php
$sid=$_POST['sid'];
$server_name='localhost';
$user_name='root';
$password='';
$database='Student_Attendance_System';
$conn=mysqli_connect($server_name,$user_name,$password,$database);
if($conn)
{
    $sql="DELETE FROM Student WHERE sid=('$sid')";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        echo("Data deleted successfully.");
    }
    else
    {
        echo("Something went wrong.");
    }
}
else
{
    die("Connection failed.");
}
?>
