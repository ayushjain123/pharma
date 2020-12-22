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
     <title>Medical</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    

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
    $query = "SELECT * FROM doctors ORDER BY doc_name ASC";
    $result = mysqli_query($dbconn,$query);
    while($res = mysqli_fetch_array($result)) {  
        $doc_id=$res['doc_id'];
    
?>   
    <div class="row-sm-3">
            <?php if($res['doc_pic1'] != ""): ?>
            <img class="d-block" src="img/<?php echo $res['doc_pic1']; ?>">
            <?php else: ?>
            <img src="img/lisinopril.jpg">
            <?php endif; ?>
        <div class="caption">
          <h5><b><?php echo $res['doc_name'];?></b></h5>
          <h6><a class="btn btn-success btn-round" title="Click for more details!" href="doctor_details.php?doc_id=<?php echo $res['doc_id'];?>">
          
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