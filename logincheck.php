<?php
$sid=$_POST['sid'];
$pswd=$_POST['pswd'];
$server_name='localhost';
$user_name='root';
$password='';
$database='Student_Attendance_System';
$conn=mysqli_connect($server_name,$user_name,$password,$database);
if($conn)
{
    $sql1="SELECT Password FROM Student WHERE SID='$sid'";
    $res=mysqli_query($conn,$sql1);
    $num=mysqli_num_rows($res);
    if($num>0)
    {
        $rows=mysqli_fetch_assoc($res);
        $pwd=$rows['Password'];
        if($pwd==$pswd)
        {
            echo "Successfully logged in.";
            echo('<br>');
            $sql2=" select Student.SID,Attendance.No_of_class from Student inner join Attendance on Student.SID=Attendance.SID where Student.SID='$sid'";
            $res1=mysqli_query($conn,$sql2);
            if($res1)
            {
                $rows1=mysqli_fetch_assoc($res1);
                echo "The attendance of ".$rows1['SID']." is ".$rows1['No_of_class'];
            }
        }
        else
        {
            echo "Kindly enter correct Student Password.";
        }
    
    else
    {
        echo "Kindly enter correct Student ID.";
    }
}
else
{
    die("Connection failed.");
}
?>
