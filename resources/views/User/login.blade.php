<!DOCTYPE html>
<html lang="en">

<head>
<!-- Title -->
<title>Sign Up | Orange</title>
<!-- Required Meta Tags Always Come First -->
@include ('User.Header.header')
</head>

<body>
@include ('User.Navigation.navigation_menu')


<div class="w-50 shadow-sm p-3 mt-5 bg-white rounded m-auto">
<div class="p-10" >

<div class="w-50 pl-10 pt-5 m-auto">
    <h5>Login Page</h5>
</div>

<div class="mb-3">
  <label class="form-label">Email</label>
  <input type="text" class="form-control" name="example-email-input" placeholder="Enter your email">
</div>
<div class="mb-3">
  <label class="form-label">Password</label>
  <input type="text" class="form-control" name="example-password-input" placeholder="Password">
</div>
<div class="float-right">
<a href="#" class="btn btn-sm btn-orange">Login</a>
</div>
</div>
</div>
</body>
</html>
