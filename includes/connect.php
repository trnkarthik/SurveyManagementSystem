<?php
$db_connect = mysql_connect("localhost:3306", "root", "karthik");
if (!$db_connect)
{
     print "Error - Could not connect to MySQL,Database access restricted";
     exit;
}
 
$db_name=mysql_select_db("survey");
if (!$db_name)
{
     print "Error - Could not connect to MySQL:Database not found";
     exit;
}

?>