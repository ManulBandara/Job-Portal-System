<!DOCTYPE html>
<html>
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="container">
         <header><h1>Login<h2></header>
         <form action="login.php" method="post">
            <div class="input-field">
               <input type="text" required>
               <label>Username</label>
            </div>
            <div class="input-field">
               <input class="pswrd" type="password" required>
               <label>Password</label>
            </div>
            <div class="button">
               <div class="inner"></div>
               <button>LOGIN</button>
            </div>
         </form>
         <div class="auth">
            Or login with
         </div>
         <div class="links">
            <div class="facebook">
               <i class="fab fa-facebook-square"><span>Facebook</span></i>
            </div>
            <div class="google">
               <i class="fab fa-google-plus-square"><span>Google</span></i>
            </div>
         </div>
         <div class="signup">
            Not a member? <a href="#">Register now</a>
         </div>
      </div>
   </body>
</html>