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
<?php
    $dbconn = mysqli_connect("localhost","root","","medicine");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

    $doc_id=$_GET['doc_id'];
    $query = "SELECT * FROM doctors WHERE doc_id='$doc_id'";
    $result = mysqli_query($dbconn,$query);
    while($res = mysqli_fetch_array($result)) {  
    
?>   
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
    <body>
        
    <?php if($res['doc_pic1'] != ""): ?>
    <img class="d-block" src="img/<?php echo $res['doc_pic1']; ?>" >
    <?php else: ?>
    <img src="img/doctor.jpg">
    <?php endif; ?>
                                
    <h5><br><br>
        <ul><b>Doctor ID: 
        <span style="color:green;"><?php echo $res['doc_id']; ?></span></b>
        </ul>
        <ul><b>Doctor Name: </b> 
        <?php echo $res['doc_name']; ?>
        </ul>
        <ul><b>Doctor Description: </b>
        <?php echo $res['doc_desc']; ?>
        </ul>
        <ul><b>Doctor Category</b>
        <?php echo $res['category']; ?>
        </ul>
        <ul><b>Speciality 1: </b>
        <?php echo $res['doc_speciality1'].''; ?>
        </ul>
        <ul><b>Speciality 2: </b>
        <?php echo $res['doc_speciality2'].''; ?>
        </ul>
        <ul><b>Consultation Fees: </b>
        <?php echo 'Rs'.$res['doc_fees'].''; ?>
        </ul>
        <ul><b>Contact Number: </b>
        <?php echo $res['doc_contact'].''; ?>
        </ul>
       <?php 
    }
?>
            <?php ?>
        </h5>
            </body>
</html>