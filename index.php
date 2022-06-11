<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="signin.js"></script>
    <script src="login.js"></script>
    <style>
        .vertical {
            border-left: 2px solid blue;
            height: 500px;
            position:absolute;
            left: 50%;
        }
        
            @media only screen and (max-width: 992px) {
                .vertical{
                    border-left: 0px;
                }
            }
    </style>
    
    <title>Welcome to Signup Page</title>

</head>
<body>
    <div class="container p-2">
        <div class="row">
            <div class="col-lg-6 text-primary p-2">
              <center> <h1><i class="fa fa-user"></i> Login</h1> </center>  
            
            <hr>
            <form class="login_form">

                <div class="form-group mb-3">
                    <label><i class="fa fa-envelope"></i> Email ID</label>
                    <input type="email" name="email1" class="form-control login_email" required>
                </div>

                <div class="form-group mb-3">
                    <label><i class="fa fa-key"></i> Password</label>
                    <input type="password" name="password1" class="form-control login_password">
                </div>

                <center><button class="btn btn-primary mt-4 login_here"><i class="fa fa-sign-in"></i>  Login here</button></center>
            </form>
            </div>
       

            <div class="col-lg-6 p-2 text-primary">
            <div class = "vertical"></div>  
                <center>    <h1><i class="fa fa-user-o"></i> Register</h1> </center>
        
            <hr>
            <form class="signin_form">
                <div class="form-group mb-3">
                    <label><i class="fa fa-user-circle-o"></i> Username</label>
                    <input type="text" name="username" class="form-control signin_user">
                </div>

                <div class="form-group mb-3">
                    <label><i class="fa fa-envelope"></i> Email ID</label>
                    <input type="email" name="email" class="form-control signin_email">
                </div>

                <div class="form-group mb-3">
                    <label><i class="fa fa-key"></i> Password</label>
                    <input type="password" name="password" class="form-control signin_pass">
                </div>
<center><button class="btn btn-primary signin-btn">Sign in</button> </center>
                
            </form>
            </div>
        </div>
    </div> 
</body>
</html>