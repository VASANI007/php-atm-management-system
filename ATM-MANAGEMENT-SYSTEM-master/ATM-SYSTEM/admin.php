<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php "Transaction page"; ?> </title>
        <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <body style="background-image:url(img1/atm4.jpg)">
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="header">
        <div class="inner-header">
            <div class="logo">
                <p><center>
                    AsiaBank ATM</center> 
                </p>
            </div>
        </div>
    </div>
<center>
       <div class="container" style= "box-shadow: inset 0 8px 5px #ea2f00">
            <div class="row">
                <div class="col-xs-4 col-lg-offset-4"><center>
                        <form method="post" action="admin1.php">
                            <br><Br><br><br><br><br><input type="text" onkeyup="numberonly(this)" placeholder="Enter the admin id" style="overflow:hidden" class="form-control input-lg" name="admin_id" id="admin_id" required><br><br>
                            <input type="text" onkeyup="numberonly(this)" placeholder="Enter the admin pin" style="overflow:hidden" class="form-control input-lg" name="admin_pin" id="admin_pin" required><br><br>
                            <input type="text" onkeyup="numberonly(this)" placeholder="Enter the atm_id" style="overflow:hidden" class="form-control input-lg" name="atm_id" id="atm_id" required><br><br>
                 <input type="submit"  class="button" style= "box-shadow: inset 0 8px 5px #22a4c8" value="Submit">&emsp;
                      
                 <a  href="index.php" class="button" style= "box-shadow: inset 0 8px 5px #22a4c8">Exit</a> <br><br><br> &emsp;
                        </form>
                        
                 </div>
                </div>
       </div>
     <script type="text/javascript">
                function numberonly(input){
                    var num=/[^0-9]/gi;
                    input.value =input.value.replace(num,"");
                    }
            </script>
    </body>
    </html>