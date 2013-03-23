<?php
include("includes/connect.php");
$shop_id=$_GET["shop_id"];

$shop_name=$_POST["s_name"];
$shop_type=$_POST["s_type"];
$shop_city=$_POST["s_city"];

$shop_det_query="insert into shop_details (shop_name,shop_type,shop_city,shop_id) values('$shop_name','$shop_type','$shop_city',$shop_id)";
$shop_det_query_res=mysql_query($shop_det_query);

if(!$shop_det_query_res)
{
    echo "<script>alert('Error occured!!!')</script>    ".mysql_error();
}
else{
    echo "successfully posted!!!";
    }

?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheets/template_style_query_page.css" />
        
        
        <script>
        function validation()
        {
            value_det1();
            value_det2();
            value_det3();
        }
        
        function value_det1()
        {
            
            var k=document.getElementById("q4txt");
            var l=document.getElementById("q4radio1"); 
            l.value=k.value;
           
        }
        function value_det2()
        {
            var k=document.getElementById("q10txt");
            var l=document.getElementById("q10radio1"); 
            l.value=k.value;
            
        }
        function value_det3()
        {
            var k=document.getElementById("q11txt");
            var l=document.getElementById("q11radio1"); 
            l.value=k.value;
            
        }
         
        </script>
        
        
        
        <title>
           <?php echo $shop_name."@".$shop_city; ?>
        </title>
         </head>
    <body>
        <div id="header">

            <span style="color:white;font-size:25px;text-decoration:none;position:absolute;top:18px;left:550px;font-weight:bold">

                        <?php echo $shop_name."@".$shop_city; ?>                                                 <!--title comes here-->

                    </span>

                    <span style="color:white;font-size:14px;text-decoration:none;position:absolute;top:48px;left:575px;font-style:italic">

                        (Survey by <a href="http://trnkarthik.tk" style="color:white;text-decoration:none;" onmouseover="this.style.textDecoration=underline" >TRN Karthik</a>,GITAM University)                             <!--caption comes here-->

                    </span></a>

        </div>
        
         <div id="data_area">
            
            <form action="thanku.php?shop_id=<?php echo $shop_id;?>" method="post" >
              
                  <img src="images/header.jpeg" style="
                    position:absolute;
                    left:50px;
                    top:30px;
                    opacity:0.9;
                    -moz-box-shadow: 5px 5px 5px #ccc;
                    -webkit-box-shadow: 5px 5px 5px #ccc;
                    box-shadow: 5px 5px 5px #ccc;
                                " width=100px height=100px>
                    
                    <div id="disp_shop_det">
                        <pre>
                            <b>
                            Survey to study Digital Divide
                            Total nunmber of questions = 12
                            
                            </b>
                        </pre>
                    </div>          
                                             
                 <div id="quest_area">
                    <br/>
                    <span style="position:relative;left:30px;" >
                    1)	How often do you use your computer for business ? <br/>
                    <input type="radio" name=q1 value="1" > Regularly <br/>
                    <input type="radio" name=q1 value="2"> Not so regular <br/>
                    <input type="radio" name=q1 value="3"> I dont use it at all <br/>
                    <br/>
                    
                    </span>
                 </div>
                   
                   <div id="quest_area" style="position:absolute;top:300px">
                    <br/>
                    <span style="position:relative;left:30px;" >
                    2)	Are you comfortable in using computer ? <br/>
                    <input type="radio" name=q2 value="1"> Yes, of course <br/>
                    <input type="radio" name=q2 value="2"> No ,It’s complicated <br/>
                    <input type="radio" name=q2 value="3"> I am comfortable with using the application. I don’t  about the rest. <br/>
                    <br/>
                    
                    </span>
                 </div>
                   
                   <div id="quest_area" style="position:absolute;top:450px">
                    <br/>
                    <span style="position:relative;left:30px;" >
                    3)	Do you use internet for your business? <br/>
                    <input type="radio" name=q3 value="1"> Yes <br/>
                    <input type="radio" name=q3 value="2"> No <br/>
                    <input type="radio" name=q3 value="3"> I am not interested in internet <br/>
                    <input type="radio" name=q3 value="4"> I believe it as a threat<br/>
                    <br/>
                    
                    </span>
                 </div>
     
     
                   <div id="quest_area" style="position:absolute;top:620px">
                    <br/>
                    <span style="position:relative;left:30px;" >
                    4)	Which software do you use ? 
                    <br/>
                    <input type="radio" name=q4o2 id="q4radio1" > Please specify
                    <input type="text" name=q4o1 style="border:0px;border-bottom:1px solid black;" id="q4txt"> <br/>
                    <input type="radio" name=q4o2 value=2> Don’t know ,software person gave me when I brought my computer <br/>
                    <input type="radio" name=q4o2 value=3> I don’t want to reveal it <br/>

                    <br/>
                    
                    </span>
                 </div>
                   <div id="quest_area" style="position:absolute;top:770px">
                    <br/>
                    <span style="position:relative;left:30px;" >
                    5)	Did you buy it?	
                    
                    <br/>
                    <input type="radio" name=q5 value="1"> 	Yes <br/>
                    <input type="radio" name=q5 value="2"> 	No , I got it for free <br/>
                    <input type="radio" name=q5 value="3"> 	I don’t know ,it was in my computer when I brought it.<br/>
                    <br/>
                    
                    </span>
                 </div>
                   
                <div id="quest_area" style="position:absolute;top:920px">
                    <br/>
                    <span style="position:relative;left:30px;" >
                    6)	How much you paid for that?
                    
                    <br/>
                    <input type="radio" name=q6 value="1"> 	100-500 <br/>
                    <input type="radio" name=q6 value="2"> 	500-1000 <br/>
                    <input type="radio" name=q6 value="3"> 	1000-5000<br/>
                    <input type="radio" name=q6 value="4"> 	I don’t want to reveal it<br/>
                    <input type="radio" name=q6 value="5"> 	Free !!! <br/>
                    <br/>
                    
                    </span>
                 </div>
                
                <div id="quest_area" style="position:absolute;top:1110px">
                    <br/>
                    <span style="position:relative;left:30px;" >
                    7)	Are you using computer with internet in your home?
                    
                    <br/>
                    <input type="radio" name=q7 value="1"> 	Yes<br/>
                    <input type="radio" name=q7 value="2"> 	No<br/>
                    <input type="radio" name=q7 value="3"> 	Have computer but no internet<br/>
                    
                    <br/>
                    
                    </span>
                 </div>
                
                <div id="quest_area" style="position:absolute;top:1260px">
                    <br/>
                    <span style="position:relative;left:30px;" >
                    8)	Do you want to control your business from home using internet?
                    
                    <br/>
                    <input type="radio" name=q8 value="1"> 	Yes<br/>
                    <input type="radio" name=q8 value="2"> 	No<br/>
                    <input type="radio" name=q8 value="3"> 	I already have this feature<br/>
                    <input type="radio" name=q8 value="4"> 	I consider it as a threat<br/>
                    <br/>
                    
                    </span>
                 </div>
                
                <div id="quest_area" style="position:absolute;top:1430px">
                    <br/>
                    <span style="position:relative;left:30px;" >
                    9)	Are you comfortable in using existing software?
                    
                    <br/>
                    <input type="radio" name=q9 value="1"> 	Yes<br/>
                    <input type="radio" name=q9 value="2"> 	No<br/>
                    <input type="radio" name=q9 value="3"> 	I am searching for an alternative<br/>
                    
                    <br/>
                    
                    </span>
                 </div>
                
                <div id="quest_area" style="position:absolute;top:1580px">
                    <br/>
                    <span style="position:relative;left:30px;" >
                    10)	Do you want any changes in existing system?
                    
                    <br/>
                    <input type="radio" name=q10o2  id=q10radio1 > 	If yes,please specify    <input type="text" name=q10o1 style="border:0px;border-bottom:1px solid black;" id=q10txt ><br/>
                    <input type="radio" name=q10o2 value=2> 	No<br/>
                    
                    
                    <br/>
                    
                    </span>
                 </div>
                
                 <div id="quest_area" style="position:absolute;top:1710px">
                    <br/>
                    <span style="position:relative;left:30px;" >
                    11)	How much are you willing to pay for that?
                    
                    <br/>
                    <input type="radio" name=q11 value=1> 	I want it for free<br/>
                    <input type="radio" name=q11 value=2> 	100-500<br/>
                    <input type="radio" name=q11 value=3> 	500-1000<br/>
                    <input type="radio" name=q11 value=4> 	1000-5000<br/>
                    <input type="radio" name=q11 id=q11radio1> 	<input type="text" style="border:0px;border-bottom:1px solid black;" id=q11txt><br/>
                     <input type="radio" name=q11 value=6> 	Anything , if it serve my purpose<br/>
                    
                    <br/>
                    
                    </span>
                 </div>
                 
                 
                
     
                  <div id="quest_area" style="position:absolute;top:1920px">
                    <br/>
                    <span style="position:relative;left:30px;" >
                   12)	Please specify some suggestions.
                    
                    <br/>
                    <textarea  rows=9 cols=55 name=q12 onfocus="this.value=' ' ">
                        enter something
                    </textarea>
                    <br/>
                    <p>
                    
                    </span>
                    
                 </div>
        </div>
         
         <div id="shop_det_submit" style="top:345%">
                <input type="submit" id="shop_det_submit_but" onclick="validation() " >
            </div>  
        
     
            </form>
        
        <div id="footer">
            <center>
                <b style="color:white">*****Thankyou for your support*****</b>
            </center>
        </div>
        
    </body>
</html>
        