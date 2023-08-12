<?php
$con=mysqli_connect('localhost','root');
if($con)
{
    echo 'connection Successfull';
}
else
{
    echo 'Not successfull';
}
mysqli_select_db($con,'booking');
$name=$_POST['name'];
$where_to=$_POST['where_to'];
$arrival=$_POST['arrival'];
$leaving=$_POST['leaving'];
$details=$_POST['details'];
$query="insert into book(name,where_to,arrival,leaving,details)
values('$name','$where_to','$arrival','$leaving','$details')";
echo 'data store';

//echo $query;
mysqli_query($con,$query);                          
?>