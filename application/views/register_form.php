<!doctype html>
<html>
    <head>
        <title> form </title>
        <link rel="stylesheet" href="<?php echo base_url('static/css/bootsrp.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('static/css/style.css') ?>">    

    </head>
    <body>

    <center><h1>FORM </h1></center>
    <hr width="50%" color="green">
    <center>
        <form method="POST" action="<?php echo base_url('welcome/register_submit')?>" id="register_form">
            <div class="form-group">
                NAME   
                <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="fill name"/>
            </div>

            <div class="form-group">
                EMAIL   
                <input type="text" class="form-control" name="email" id="email" placeholder="email"/>
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


                <center><button type="submit" id="submit" class="btn-lg btn-success">submit</button></center>
                <br/>

                <form>
                    </center>
                    <script src="<?php echo base_url('static/js/jquery-3.3.1.min.js')?>"></script> 
                    <script src="<?php echo base_url('static/js/script1.js')?>"></script>
                    <script src="<?php echo base_url('static/js/register.js')?>"></script>

                    </body>   
                    </html>   