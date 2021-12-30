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


<div class="w-50  m-auto shadow-sm p-3 mb-5 bg-white rounded">
<div class="p-10">

<div class="w-50 pl-10 pt-5 m-auto">
    <h5>Sign Up Page</h5>
</div>

<div class="mb-3">
  <label class="form-label">Name</label>
  <input type="text" class="form-control" name="example-text-input" placeholder="Enter your name">
</div>
<div class="mb-3">
  <label class="form-label">Email</label>
  <input type="text" class="form-control" name="example-email-input" placeholder="Enter your email">
</div>
<div class="mb-3">
  <label class="form-label">Phone Number</label>
  <input type="text" class="form-control" name="example-text-input" placeholder="Enter your number">
</div>
<div class="mb-3">
  <label class="form-label">Password</label>
  <input type="text" class="form-control" name="example-password-input" placeholder="Password">
</div>
<div class="mb-3">
  <label class="form-label">Confirm Password</label>
  <input type="text" class="form-control" name="example-password-input" placeholder="Confirm your password">
</div>
<div class="float-right">
<a href="#" class="btn btn-sm btn-orange" >Sign Up</a>
</div>
</div>
</div>
</body>
</html>
