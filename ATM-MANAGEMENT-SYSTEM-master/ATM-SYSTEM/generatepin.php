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
                        <form method="post" action="generatepin1.php">
                            <br><Br><br><br><br><br><input type="text" style="overflow:hidden" placeholder="Enter the account number"  class="form-control input-lg" name="account1" id="account1" required><br><br>
                            <input type="text" placeholder="Enter the User id" style="overflow:hidden" class="form-control input-lg" name="user" id="user" required><br><br>
                            <input type="text" placeholder="Enter your New Pin" style="overflow:hidden" class="form-control input-lg" name="newpin" id="newpin" required><br><br>
                 <input type="submit" style= "box-shadow: inset 0 8px 5px #22a4c8"  class="button" value="Submit">&emsp;
                      
                 <a  href="index.php" style= "box-shadow: inset 0 8px 5px #22a4c8" class="button">Exit</a> <br><br><br> &emsp;
                        </form>
                        
                 </div>
                </div>
       </div>
           


