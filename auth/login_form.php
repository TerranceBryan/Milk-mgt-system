 <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8" />
                <script type="text/javascript" src="<?php Page_Url() ?>js/jquery-1.8.2.js"></script>
                <script type="text/javascript" src="<?php Page_Url() ?>js/bootstrap.js"></script>
                <script type="text/javascript" src="<?php Page_Url() ?>js/bootstrap-datetimepicker.min.js"></script>

                <link type="text/css" rel="stylesheet" href="<?php Page_Url() ?>css/bootstrap.css" /> 
                <link type="text/css" rel="stylesheet"	href="<?php Page_Url() ?>css/bootstrap-responsive.css" />
                <link type="text/css" rel="stylesheet" href="<?php Page_Url() ?>css/main.css" />
                <link type="text/css" rel="stylesheet" href="<?php Page_Url() ?>css/bootstrap-datetimepicker.min.css" />
                <title>Kuinet Milk Operations System | Login</title>
            </head> 
            <body style="background: #555;">
                <div id="top" class="page-header">

                    <div id="navigation" class="navbar ">
                        <h1 id="title" >Kuinet Milk Operations System</h1>
                    </div>
                </div>
               
                <div class = "login-container">
                    <div class="container-img">
                        <img src="img/logo_bg.jpg">
                    </div>
                    <div class="login-wrapper">
                        <form name="<?php echo $formname; ?>" method="post" class="form-signin form-horizontal <?php echo $formclass ?>" enctype="application/x-www-form-urlencoded" action="<?php echo $formaction ?>">       
                            <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
                            
                            <input type="text" class="form-control input-xlarge input-block-level" name="username" placeholder="Username/Email" required="" autofocus="" /> 
                            <input type="password" class="form-control input-xlarge input-block-level input" name="password" placeholder="Password" required=""/>     		  
                            <input name="action" id="action" value="login" type="hidden">
                            <input class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">  			
                        </form>			
                    </div>
                </div>


          
            </body>
        </html>
  