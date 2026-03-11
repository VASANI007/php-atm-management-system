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
                        <form method="post" action="fund.php">
                            <br><Br><br><br><br><br><input type="text" onkeyup="numberonly(this)" style="overflow:hidden" placeholder="Enter the account number"  class="form-control input-lg" name="account" id="account" required><br><br>
                            <input type="text" placeholder="Enter the amount" onkeyup="numberonly(this)"  class="form-control input-lg" style="overflow:hidden" name="amount" id="amount" required><br><br>
                 <input type="submit" style= "box-shadow: inset 0 8px 5px #22a4c8" class="button" value="Submit">&emsp;
                      
                 <a  href="index.php" style= "box-shadow: inset 0 8px 5px #22a4c8" class="button">Exit</a> <br><br><br> &emsp;
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
