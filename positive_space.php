<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Abel|Asap|Oxygen" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="positive_space.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Mukta|Playfair+Display" rel="stylesheet">
</head>
<div class="box">
   
   <?php
    session_start(); 
    $id=$_SESSION['user_id'];

    include 'dbh.php';

    $array = array();
    $sql = "SELECT * FROM `message` WHERE `user_id` = '".$id."' ";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $i=0;
    while($row = mysqli_fetch_array($result))
    {    
       $array[$i] = $row;
       $i++;
    }
?>

   
    <h1>Happy Space</h1>
    <h2>Reflect on the positive thoughts</h2>
    <hr>
    <div id="content">
        <div style="color: #6491A1; font-family: 'Mukta', sans-serif;">
            <h3 style="font-style:italic">Things that I am thankful for...</h3>
            <div id="thankfulDiv"></div>

        </div>
        <hr>
        <div style="font-family: 'Playfair Display', cursive">

            <h3 style="font-style: italic">Things that have made my day better...</h3>
            <div id="happyDiv"></div>
        </div>
        <hr>

        <div style="color:#6491A1; font-family: 'Cabin', sans-serif; ">

            <h3 style="font-style: italic;">Things that I should remember...</h3>
            <div id="complimentDiv"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var jArray = <?php echo json_encode($array); ?>;
 </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="positive_space.js"></script>
