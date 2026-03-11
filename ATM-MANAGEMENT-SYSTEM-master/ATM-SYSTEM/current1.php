<?php 
$con= mysqli_connect("localhost", "root", "", "atm")
         or die(mysqli_errno($con));
session_start();
$pin=$_SESSION['Pin'];
$select_query="select account_type from account where "
        . "user_id=(select user_id from card where card_pin=$pin)";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$row= mysqli_fetch_array($select_query_result);
$type="current";
if($row['account_type']!=$type){
    echo"<script>
alert('OOPS! You have a savings account');
window.location.href='cash.php';
</script>";
}
else{
$select_query="select balance from card where card_pin=$pin";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$row= mysqli_fetch_array($select_query_result);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php "Current Account"; ?> </title>
        <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    </head>
    <body style="background-image:url(img1/atm4.jpg)">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <div class="header">
        <div class="inner-header">
            <div class="logo">
                <p><center>
                    AsiaBank ATM</center><br><br><br> <br><br><br>
                </p>
            </div>
        </div>
    </div>
    <div class="container" style= "box-shadow: inset 0 8px 5px #ea2f00">
            <div class="row">
                <br><Br><BR> <h7> <b><div class="col-xs-2">Remaining Balance: </div>
                        <div class="col-xs-10"><?php echo $row['balance']; ?> </div><br><br></b></h7> &emsp;&emsp;</h7>
     <center>
        <div class="container1">
            <div class="row">
                <div class="col-xs-10"><center>
                        <form method="post" action="current.php">
                            <br><br><br><input type="text" onkeyup="numberonly(this)" placeholder="Enter the amount to Withdraw" style="overflow:hidden" class="form-control input-lg" name="cash1" id="cash1" required><br><br>
                 
                    
                 <input type="submit" class="button" style= "box-shadow: inset 0 8px 5px #22a4c8" value="Submit">&emsp;
                        <input type="submit" class="button" style= "box-shadow: inset 0 8px 5px #22a4c8" formaction="current1.php" value="Clear">
                            </form>
                          
                    </center>
            </div>
                    
                </div>
    </center>
        <script type="text/javascript">
                function numberonly(input){
                    var num=/[^0-9]/gi;
                    input.value =input.value.replace(num,"");
                    }
            </script>
</body>
</html>