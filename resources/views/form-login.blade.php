<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>CodePen - Login Form - Modal</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>
<link rel="stylesheet" href="{{asset('css/form-login.css')}}">

</head>

<body>
<!-- partial:index.partial.html -->
<!-- Form-->
<div class="form">
<div class="form-toggle"></div>
<div class="form-panel one">
<div class="form-header">
<h1>Account Login</h1>
</div>
<div class="form-content">
<form action="{{route('login')}}" method="post">
<div class="form-group">
<label for="username">email</label>
<input type="text" id="email" name="email" required="required"/>
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" id="password" name="password" required="required"/>
</div>
<div class="form-group">
<label class="form-remember">
<input type="checkbox"/>Remember Me
</label><a class="form-recovery" href="#">Forgot Password?</a>
</div>
<div class="form-group">
<button type="submit">Log In</button>
</div>
</form>
</div>
</div>
<div class="form-panel two">
<div class="form-header">
<h1>Register Account</h1>
</div>
<div class="form-content">
<form>
<div class="form-group">
<label for="username">Username</label>
<input type="text" id="username" name="username" required="required"/>
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" id="password" name="password" required="required"/>
</div>
<div class="form-group">
<label for="cpassword">Confirm Password</label>
<input type="password" id="cpassword" name="cpassword" required="required"/>
</div>
<div class="form-group">
<label for="email">Email Address</label>
<input type="email" id="email" name="email" required="required"/>
</div>
<div class="form-group">
<button type="submit">Register</button>
</div>
</form>
</div>
</div>
</div>
<div class="pen-footer"><a href="https://www.behance.net/gallery/30478397/Login-Form-UI-Library" target="_blank"><i class="material-icons">arrow_backward</i>View on Behance</a><a href="https://github.com/andyhqtran/UI-Library/tree/master/Login%20Form" target="_blank">View on Github<i class="material-icons">arrow_forward</i></a></div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script><script src="./script.js"></script>
</body>
</html>
