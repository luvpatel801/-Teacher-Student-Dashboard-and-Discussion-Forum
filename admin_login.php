<!DOCTYPE html>

<html>
    <head>
        <title>Admin Login</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        

		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
			 <link href="assets/css/st.css" rel="stylesheet" />

		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/cufon-replace.js"></script>
		<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
		<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		
                <script src="jsfile/admin_login/s1.js">
			</script>
		
		
	</head>
	
	
	
	    <body>
        
        
        <div class="container" style="padding-top:50px;">
            <div class="row row_style pl">
                <div class="col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6">
				<center>	<img src="./images/logo.png" align="center">
</center>
<p><br><br></p>
                    <div class="panel panel-login">
                        <div class="panel-heading">
                          <center> <a href="#" class="active" id="login-form-link">Admin Login</a></center>
                        </div>
                        <div class="panel-body">
                           
                            <form id="login-form" action="adm_login.php" method="post" role="form" style="display: block;">
										<div class="form-group">
											<input type="text" name="email" id="email" tabindex="1" required class="form-control" placeholder="Username">
										</div>
										
										<div class="form-group">
											<input type="password" name="password" id="password" tabindex="2" required class="form-control" placeholder="Password">
										</div>
										
										
										
										
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" name="login-submit" id="login-submit" tabindex="3" class="form-control btn btn-login" value="Log In">
												</div>
											</div>
										</div>
										
										
									</form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        
            
               
            
        
    </body>
</html>