<?php
    session_start();
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
        ul{
            font-style: normal;
            font-size: 20px;
            text-align: center;
        }
        footer{
            background-color: darkcyan;
            color: mintcream;
            margin-bottom: 0px;
            height: 40px;
        }
    .d-block{
        margin-left: 550px;
        margin-top: 100px;
    }
    </style>

    </head>
<?php
    $dbconn = mysqli_connect("localhost","root","","medicine");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

    $prod_id=$_GET['prod_id'];
    $query = "SELECT * FROM online_pharmacy WHERE prod_id='$prod_id'";
    $result = mysqli_query($dbconn,$query);
    while($res = mysqli_fetch_array($result)) {  
    
?>   
    <body>
        
    <?php if($res['prod_pic1'] != ""): ?>
    <img class="d-block" src="img/<?php echo $res['prod_pic1']; ?>" >
    <?php else: ?>
    <img src="img/bp.jpg">
    <?php endif; ?>
                                

    <h5><br><br>
        <ul><b>Serial number: 
        <span style="color:green;"><?php echo $res['prod_id']; ?></span></b>
        </ul>
        <ul><b>Product name: </b> 
        <?php echo $res['prod_name']; ?>
        </ul>
        <ul><b>Description: </b>
        <?php echo $res['prod_desc']; ?>
        </ul>
        <ul><b>Type: </b>
        <?php echo $res['category']; ?>
        </ul>
        <ul><b>NetMeds: </b>
        <?php echo 'Rs'.$res['prod_price1'].''; ?>
        </ul>
        <ul><b>PharmEasy: </b>
        <?php echo 'Rs'.$res['prod_price2'].''; ?>
        </ul>
        <ul><b>Delivery Charge 1: </b>
        <?php echo 'Rs'.$res['prod_delivery_charges1'].''; ?>
        </ul>
        <ul><b>Delivery Charge 2: </b>
        <?php echo 'Rs'.$res['prod_delivery_charges2'].''; ?>
        </ul>
       <?php 
    }
?>
            <?php ?>
        </h5>
    </body>
</html>