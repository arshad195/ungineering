<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css" type="text/css" />
        <title> form </title>
        <link rel="stylesheet" href="css/style.css"/>       
    </head>
    <body>
    
        <center><h1>FORM </h1></center>
        <hr width="50%" color="green">
        <center>
        <form method="POST" action="register_submit.php" id="register_form">
            <div class="form-group">
                NAME   
                <input type="text" class="form-control form-control-lg" name="name" placeholder="fill name"/>
            </div>
                
            <div class="form-group">
                EMAIL   
                <input type="text" class="form-control" name="email" placeholder="email"/>
            </div>
                
            <div class="form-group">
                PASSWORD  
                <input type="password" class="form-control" name="password" id="pass" placeholder="password"/>
            </div>
                
            <div class="form-group">
                CONFIRM_Pssword
                <input type="password" class="form-control" name="password" id="cpass" placeholder="c password"/>
                
            <span id="check" style="color:red"></span>
            <br/><br/><br/>
                
            
            <center><button type="submit" class="btn-lg btn-success">submit</button></center>
        <form>
        </center>
        <script src="js/script1.js"></script>
      
    </body>   
</html>    


