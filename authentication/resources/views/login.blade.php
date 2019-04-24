<!DOCTYPE html>
<html>
    <head>
        <title>Authentication</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
            .box{
                width:600px;
                margin:0 auto;
                border:1px solid #ccc;
            }
        </style>
    </head>
    <body>
        <br/>
        <div class="container box">
            <h3 align="center">Login Form</h3> <br/>
            <form method="post">
                <div class="form-group">
                    <label>Enter Email</label>
                    <input type="email" name="email" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="password" class="form-control" />
                </div>
                <div class="form-group">
                    <center>                    
                    <input type="submit" name="login" class="btn btn-primary" value="Login"/>
                    <input type="submit" name="registor" class="btn btn-success" value="Get Started"/>

                    </center>
                </div>
            </form>
        </div>
    </body>
</html>
