<!DOCTYPE html>
<!--
Project by Tanmoy Sen Gupta | tanmoysps@gmail.com | www.tanmoysg.com
-->
<html>
    <head>
        <title>Universal Copier</title>
        <meta charset="UTF-8">
        <link rel="icon" href="favicon.ico" sizes="20x20" type="image/png">  
        <link rel="stylesheet" type="text/css" href="styling/dashboard.css">
        <link rel="stylesheet" type="text/css" href="styling/flexboxgrid.css">
        <link rel="stylesheet" type="text/css" href="styling/forms.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.typekit.net/sgr8dvc.css">
        <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans:300|Oswald|Raleway|Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    </head>
    <body>
        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" style="padding-top: 50px;">
            <center>
                <span style="font-family: 'Montserrat'; font-size: 50px;">Universal Copier <sup style="font-size: 15px; color: #fb2c2c">Beta</sup></span>
                <br>
                <span style="font-family: Raleway; font-size: 20px; ">Developed by <a style="color: #fb2c2c" href="http://tanmoysg.com">Tanmoy Sen Gupta</a></span>  
            </center>
        </div>
        <div class="content-section" style="padding-top: 50px;">
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-xs-12 col-md-4">
                    <div class="box">
                        <span style="font-family: 'Raleway'; font-size: 25px; padding-left: 5%; padding-top: 5%;">Upload Link</span><br>
                        <form action="insertLink.php" method="POST">
                            <div>
                                <div class="form-input-group">
                                    <label>Link</label><br>
                                    <input type="text" class="input-box " name="link" required>
                                </div>
                                <div class="form-input-group">
                                    <label>Description</label><br>
                                    <textarea name="description" class="input-box"></textarea>
                                </div>
                                <div class="form-input-group">
                                    <button type="submit" name="submit" class="submit-btn">Upload link</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 col-xs-12 col-md-8">
                    <div class="box">
                        <span style="font-family: 'Raleway'; font-size: 25px; padding-left: 10px; padding-top: 10px;">Links</span><br>
                        <div class="row">
                            <?php include 'displayLink.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
