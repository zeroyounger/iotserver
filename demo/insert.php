<?php
$con = mysql_connect("127.0.0.1","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//create database
if(mysql_query("CREATE DATABASE my_db",$con))
{
  echo "Database created";
}
else
{
  echo "Error creating database:".mysql_error();
}

//create table in my_db database
mysql_select_db("my_db", $con);
$sql="CREATE TABLE Persons
(
FirstName varchar(15),
LastName varchar(15),
Age int
)";
mysql_query($sql,$con);

$sql="INSERT INTO Persons (FirstName, LastName, Age)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>
