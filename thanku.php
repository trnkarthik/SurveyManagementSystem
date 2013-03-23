<?php
include("includes/connect.php");


$shop_id=$_GET["shop_id"];
$q1=$_POST["q1"];
$q2=$_POST["q2"];
$q3=$_POST["q3"];
$q5=$_POST["q5"];
$q6=$_POST["q6"];
$q7=$_POST["q7"];
$q8=$_POST["q8"];
$q9=$_POST["q9"];
$q4=$_POST["q4o2"];
$q10=$_POST["q10o2"];
$q11=$_POST["q11"];
$q12=$_POST["q12"];

if(!$q1){ $q1 =5;}
if(!$q2){ $q2 =5;}
if(!$q3){ $q3 =5;}
if(!$q4){ $q4 =5;}
if(!$q5){ $q5 =5;}
if(!$q6){ $q6 =5;}
if(!$q7){ $q7 =5;}
if(!$q8){ $q8 =5;}
if(!$q9){ $q9 =5;}
if(!$q10){ $q10 =5;}
if(!$q11){ $q11 =5;}
if(!$q12){ $q12 =5;}

/*

echo "Shop_id".$shop_id."<br/>";
echo "q1->".$q1."<br/>";
echo "q2->".$q2."<br/>";
echo "q3->".$q3."<br/>";
echo "q4->".$q4."<br/>";
echo "q5->".$q5."<br/>";
echo "q6->".$q6."<br/>";
echo "q7->".$q7."<br/>";
echo "q8->".$q8."<br/>";
echo "q9->".$q9."<br/>";
echo "q10->".$q10."<br/>";
echo "q11->".$q11."<br/>";
echo "q12->".$q12."<br/>";

*/





$query="insert into survey_data
                   values($q1,$q2,$q3,'$q4',$q5,$q6,$q7,$q8,$q9,'$q10','$q11','$q12',$shop_id);";
$result=mysql_query($query);

if(!$result)
{
    echo "Following Error Occured !!! <br/>".mysql_error();
}

?>



<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheets/template_style.css" /> 
        <title>
            Survey to study digital divide
        </title>
</head>
    <body>
        <div id="header">
        </div>
        
        
        <div id="data_area">
            <br/><br/><br/><br/>
                
              
            <div id="shop_det_box">
                    <pre style="font-family:serif;font-size:25;font-style:italic;font-weight:bold;" >           
                    Survey completed successfully.
                     
                    Your opinion matters a lot for us.
                    
                    Thank you for your support.
                    
                </pre>

            </div>
            
            <div id="shop_det_submit_thanku">
                <a href="home.php" >
                <input type="submit" id="shop_det_submit_but" value="Back to Home" >
                </a>
            </div>
                        
        </div>
        
        
    </body>
</html>



