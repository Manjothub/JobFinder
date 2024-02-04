<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Register | JobFinder</title> 
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Register Here</span></div>
        <form method = "POST" action="{{route ('saveuser')}}">
          <div class="row">
            <i class="fas fa-envelope"></i>
            <input type="text" name = "email" placeholder="Email Address" required>
          </div>          
          <div class="row">
            <i class="fas fa-phone"></i>
            <input type="text" name = "phone" placeholder="Phone Number" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name = "password" placeholder="Password" required>
          </div>
          <div class="row">
            <i class="fas fa-check"></i>
            <input type="password" name = "cpassword" placeholder="Confirm Password" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Register">
          </div>
          <div class="signup-link">Already have account? <a href="{{ route ('login') }}">Login now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>