<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:admin_login_page.php");  
} else {  
?> 





<html>
    <head>
        
        <title> </title>
            <style>
                 .chart-container{
                width: 640px;
                height: auto;
            }
            </style>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stylecoachreport.css">
       
    </head>
    <body>
        
        <div class="container1">
            <div class="wrapper">
                <h1 class="header">Coach Report</h1>
                
            </div>
            
            <div class="column">
                <form action="coachnanka.php" method="post">
                    <label class="container"><b>PLAYER'S NAME</b></label><br /> <br />
          <div class="styled-select slate">
                    <select name="PlayerName1">
                <option>select</option>
                <?php
                $connection = mysqli_connect('localhost','root','','sntidb');
//header('Content-Type: application/json')
                
                $query1 = "SELECT * FROM `cadet_reg_details`";
                $result1= mysqli_query($connection, $query1);
                while($rows1 = mysqli_fetch_array($result1)){
                    $rowsid1= $rows1['PlayerID']; 
                    $rowsdata1= $rows1['name'];
                     
                    ?>
                <option value="<?php echo $rowsid1; ?>"><?php echo $rowsdata1; ?></option>
                   
                    <?php
                    
                }
                ?>
               
            </select>   
            </div>
            </div>
          
            <div class="column">
                <label class="container"><b>PARAMETERS</b></label>
               <br /> <br />
              
                   <label class="container">Active
  <input  type="checkbox" name="checkboxActive" value="<?php echo $PlayerActive ?>"><br />
  <span class="checkmark"></span>
</label>
 
               <label class="container">Happy
 <input type="checkbox" name="checkboxHappy" value="<?php echo $PlayerHappy ?>"><br />
  <span class="checkmark"></span>
</label>
               

 <label class="container">Calm
 <input type="checkbox" name="checkboxCDM" value="<?php echo $PlayerCDM ?>"><br />
  <span class="checkmark"></span>
</label>  
               
 <label class="container">Composed
 <input type="checkbox" name="checkboxComposed" value="<?php echo $PlayerComposed ?>"><br />
  <span class="checkmark"></span>
</label>                
               
<label class="container">Energetic
 <input type="checkbox" name="checkboxEnergetic" value="<?php echo $PlayerEnergetic ?>"><br />
  <span class="checkmark"></span>
</label>   


            
            
            </div>
            <div class="column">
                <label class="container"><b>FROM:</b></label> <br /> <br />
                <input type="date" name="startdate"/>
            </div>
            
            <div class="column">
                <label class="container"><b>TO:</b></label> <br /> <br />
                <input type="date" name="enddate"/>
            </div>
            
            <div class="column">
                
            <input type="submit" name="submit" class="submit"/>
            </div>
           
            
           
            <?php 
            if(isset($_POST['submit'])){
               
            $dropdownname= $_POST['PlayerName1'];
            $startdate= $_POST['startdate'];
            $enddate= $_POST['enddate'];
            $inputmessage="";
            ?>
            <table border="1" class="table">
            <tr>
                <th>DATE</th>
                <th>ACTIVE</th>
                <th>HAPPY</th>
                <th>CALM</th>
                <th>COMPOSED</th>
                <th>ENERGETIC</th>
            </tr>
            
            <?php
            $query2 = "SELECT poms.Date, poms.Active, poms.Happy, poms.CDM, poms.Composeed, poms.Energetic
FROM cadet_reg_details INNER JOIN poms ON cadet_reg_details.PlayerID = poms.PlayerID WHERE poms.PlayerID='$dropdownname' and poms.Date Between '$startdate' and '$enddate' order by poms.Date";
            
       $result2= mysqli_query($connection, $query2);
       
    $chart_data = '';
           while($row2 = mysqli_fetch_assoc($result2)) {
               
//$PlayerID =$row2['PlayerName'];
$Date =$row2['Date'];
$PlayerActive =$row2['Active'];
$PlayerHappy =$row2['Happy'];
$PlayerCDM =$row2['CDM'];
$PlayerComposed =$row2['Composeed'];
$PlayerEnergetic =$row2['Energetic'];


       $chart_data .= "{ Date:'".$row2["Date"]."', Active:".$row2["Active"].", Happy:".$row2["Happy"].", CDM:".$row2["CDM"].", Composed:".$row2["Composeed"].", Energetic:".$row2["Energetic"]."}, ";  
 
?>
            
        
                     
           
            
            <tr>
                <td><?php echo $Date ?></td>
                <td><?php if(!empty($_POST['checkboxActive'])) { 
                    echo $PlayerActive;
                   
                }
                
                ?></td>
                <td><?php if(!empty($_POST['checkboxHappy'])) { 
                    echo $PlayerHappy;
                  
                } ?></td>
                <td><?php if(!empty($_POST['checkboxCDM'])) { 
                    echo $PlayerCDM;
                } ?></td>
                <td><?php if(!empty($_POST['checkboxComposed'])) { 
                    echo $PlayerComposed;
                } ?></td>
                <td><?php if(!empty($_POST['checkboxEnergetic'])) { 
                    echo $PlayerEnergetic;
                } ?></td>
                
            </tr>
            
                <?php
           
           } 
          $chart_data = substr($chart_data, 0, -2);
           ?>
            
            </table>
          <?php
          
          
          
          
           /*
        $playerdata= array();
foreach ($result2 as $row2)
{
    $playerdata[]=$row2;
}
   // $result2->close();
   // $query2->close();
    print json_encode($playerdata);
    */
    ?> 
            <div class="container1" style="width:1200px;">
                <br />
                <br />
                <?php 
                if(empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) )
                {
                    echo "Select Atleast One Parameters";
                }
           elseif(empty($_POST['startdate'])) { 
                   echo "Please Select Start Date" . "<br />";
                }
  elseif(empty($_POST['enddate'])) { 
                   echo "Please Select End Date";
                }
               else{
                   ?>
                <h2 align="center">CHART REPRESENTATION</h2>
                <?php
               } 
            ?>
   
  
   <br /><br />
   <div id="chart">
  
            <?php
   switch (TRUE)
   {
       case (!empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
       <?php case (empty($_POST['checkboxActive']) && ! empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Happy'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Happy'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && !empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','Happy'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','Happy'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && !empty($_POST['checkboxCDM']) && empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['CDM'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['CDM'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Composed'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Composed'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && empty($_POST['checkboxComposed']) && !empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Energetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && !empty($_POST['checkboxCDM']) && empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','CDM'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','CDM'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','Composed'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','Composed'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && empty($_POST['checkboxComposed']) && !empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','Energetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (empty($_POST['checkboxActive']) && !empty($_POST['checkboxHappy']) && !empty($_POST['checkboxCDM']) && empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Happy','CDM'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Happy','CDM'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (empty($_POST['checkboxActive']) && !empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Happy','Composed'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Happy','Composed'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>

<?php case (empty($_POST['checkboxActive']) && !empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && empty($_POST['checkboxComposed']) && !empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Happy','Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Happy','Energetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && !empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['CDM','Composed'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['CDM','Composed'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && !empty($_POST['checkboxCDM']) && empty($_POST['checkboxComposed']) && !empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['CDM','Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['CDM','Energetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && !empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Composed','Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Composed','Energetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && !empty($_POST['checkboxHappy']) && !empty($_POST['checkboxCDM']) && empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','Happy','CDM'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','Happy','CDM'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && !empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','CDM','Composed'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','CDM','Composed'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && !empty($_POST['checkboxCDM']) && empty($_POST['checkboxComposed']) && !empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','CDM','Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','CDM','Enetrgetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && !empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','Composed','Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','Composed','Energetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (empty($_POST['checkboxActive']) && !empty($_POST['checkboxHappy']) && !empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Happy','CDM','Composed'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Happy','CDM','Composed'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (empty($_POST['checkboxActive']) && !empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && !empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Happy','Composed','Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Happy','Composed','Energetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && !empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && empty($_POST['checkboxComposed']) && !empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','Happy','Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','Happy','Energetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && !empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','Happy','Composed'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','Happy','Composed'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && !empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','Composed','Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','Composed','Energetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && !empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','Happy','Composed'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','Happy','Composed'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (empty($_POST['checkboxActive']) && !empty($_POST['checkboxHappy']) && !empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Happy','CDM','Composed'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Happy','CDM','Composed'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && !empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && !empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['CDM','Composed','Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['CDM','Composed','Energetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && !empty($_POST['checkboxHappy']) && !empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','Happy','CDM','Composed'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','Happy','CDM','Composed'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && empty($_POST['checkboxHappy']) && !empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && !empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','CDM','Composed','Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','CDM','Composed','Energetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && !empty($_POST['checkboxHappy']) && empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && !empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','Happy','Composed','Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','Happy','Composed','Energetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (empty($_POST['checkboxActive']) && !empty($_POST['checkboxHappy']) && !empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && !empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Happy','CDM','Composed','Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Happy','CDM','Composed','Energetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && !empty($_POST['checkboxHappy']) && !empty($_POST['checkboxCDM']) && empty($_POST['checkboxComposed']) && !empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','Happy','CDM','Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','Happy','CDM','Energetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
<?php case (!empty($_POST['checkboxActive']) && !empty($_POST['checkboxHappy']) && !empty($_POST['checkboxCDM']) && !empty($_POST['checkboxComposed']) && !empty($_POST['checkboxEnergetic']) ): { ?>
           <script>
Morris.Line({
 element : 'chart',
 data:[ <?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active','Happy','CDM','Composed','Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active','Happy','CDM','Composed','Energetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
<?php
           break;
       }
       ?>
   <?php } ?>
   </div>
        
           </div>
           
                   
         <!--      
           <div  class="chart-container">
            <canvas id="mycanvas"></canvas>
        </div>
        
        <!javascript>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Chart.min.js"></script>
        <script type="text/javascript" src="js/linegraph.js"></script> 
         -->

           
               
         <?php
               }  
          /*   if(!empty($_POST['check_list1'])) {    
        foreach($_POST['check_list1'] as $value){
            echo "value : ".$PlayerActive.'<br/>';
        }
    }
    */
          
                ?>
           
           <?php
            
           ?>
            
                </form>
                
             
                        </div>

       
    </body>
</html>
<?php  
}  
?>
      <!-- 
          <script>
Morris.Line({
 element : 'chart',
 data:[ <? php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['Active', 'Happy', 'CDM', 'Composed', 'Energetic'],
ymin: 1,
ymax: 5,
parseTime: false,

 labels:['Active', 'Happy', 'CDM', 'Composed', 'Energetic'],
 hideHover:'auto',
 stacked:true
}); 
</script>
 -->
 