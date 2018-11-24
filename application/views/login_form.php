<!doctype html>
<html>
    <head>
        <title> login form </title>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css" type="text/css" />

    </head>
    <body>
    <center><h1> LOGIN FORM </h1></center>
    <hr width="50%" color="green">
    <center>                               
        <form method="POST" action="login_submit.php" id="#login_form" >
            </div class="form-group">
            EMAIL 
            <input type="text" class="form-control" placeholder="email" name="email"/>
            </div>

            <div class="form-group"> 
                PASSWORD
                <input type="password" class="form-control" placeholder="password" name="password"/>
            </div>
            <br/><br/>

            <center> <button type="submit" class="btn-lg btn-success">login</button> </center>
        </form>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/register.js"></script>
    </center>   
</body>
</html>