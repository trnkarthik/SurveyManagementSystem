<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheets/template_style.css" /> 
        <title>
            Survey to study digital divide
        </title>
        <?php
             include("includes/connect.php");
             $query="select max(shop_id) from shop_details;";
             $res=mysql_query($query);
             $max_shop_id=mysql_result($res,0);
             $new_shop_id=$max_shop_id + 1;
        ?>
        <script>
        
        </script>
    </head>
    <body>
        <div id="header">
        </div>
        
        
        <div id="data_area">
            <br/><br/><br/><br/>
            <center><h2>Please enter shop details</h2></center>
            <form action="survey_quest.php?shop_id=<?php echo $new_shop_id;?>" method="post" >
            <div id="shop_det_box">
                <p>
                <table id="table_style">
                     <tr>
                        <td> Shop Id : </td>
                        <td><input type="text" size="40" readonly="readonly" value=<?php echo $new_shop_id ;  ?>     > </td>
                     </tr>
                     <tr>
                        <td> Shop Name  : </td>
                        <td><input type="text" size="40" name=s_name> </td>
                     </tr>
                     <tr>
                        <td> Shop Type : </td>
                        <td><input type="text" size="40" name=s_type> </td>
                     </tr>
                     <tr>
                        <td> City : </td>
                        <td><input type="text" size="40" value="kakinada" name=s_city > </td>
                     </tr>
                </table>
            </div>
            <div id="shop_det_submit">
                <input type="submit" id="shop_det_submit_but" onclick=f1()>
            </div>
                        
        </div>
        
        
    </body>
</html>