<?php
$dbconn = mysqli_connect("localhost","root","","medicine");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>
<html>
<head>
    
       <style>
        body{
            background-color: mintcream;
        }
    
        .navbar{
            background-color: darkcyan;
        }
        .d-block{
        display: block;
        margin-top: 20px;
        margin-left: 50px;
        }
        footer{
            background-color: darkcyan;
            color: mintcream;
            margin-bottom: 0px;
            height: 40px;
        }
        h5{
            margin-left: 50px;
            font-family: sans-serif;
        }

    </style>
    </head>  

<body>
    <div class="tab-pane  active" id="">
    <ul class="thumbnails">
    <?php
    $query = "SELECT * FROM offline_pharmacy ORDER BY prod_name ASC";
    $result = mysqli_query($dbconn,$query);
    while($res = mysqli_fetch_array($result)) {  
        $prod_id=$res['prod_id'];
    
?>   
   <div class="row-sm-3">
            <?php if($res['prod_pic1'] != ""): ?>
            <img class="d-block" src="img/<?php echo $res['prod_pic1']; ?>">
            <?php else: ?>
            <img src="img/bp.jpg">
            <?php endif; ?>
        <div class="caption">
          <h5><b><?php echo $res['prod_name'];?></b></h5>
          <h6><a class="btn btn-success btn-round" title="Click for more details!" href="prod_details.php?prod_id=<?php echo $res['prod_id'];?>">
          
        <i class="now-ui-icons gestures_tap-01"></i>View</a>
            </h6>
        </div>
        </div>
        
        <hr>
              
<?php }?> 

      </ul>
  </div>

</body>
</html>