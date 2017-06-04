<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator</title>
    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" name="loginAdmin" method="post" action="#">
                            <fieldset>
                            	
                                <div class="alert alert-danger text-center"><span class="glyphicon glyphicon-warning-sign"></span></div>
                                
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus required>
                             	</div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
                                </div>
                                
                                <div class="form-group">
                                    <input class="btn btn-lg btn-success btn-block" name="submit" type="submit" value="Submit">
                                </div>
                            </fieldset>
                        </form>
						<a href="../">kembali ke beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>